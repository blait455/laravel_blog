<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Backend\BackendBaseController\BackendBaseController;
use App\Http\Controllers\Backend\Blog\BlogController;
use App\Http\Requests\UserDeleteRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends BackendBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate($this->pageLimit);
        return view("backend.user.index", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('backend.user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $request['password'] = bcrypt($request->password);
        User::create($request->all());
        return redirect(route('user.index'))->with('message', 'New user has been created!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        if($request->password != null)
        {
            $request['password'] = bcrypt($request->password);
            User::findOrFail($id)->update($request->all());
            return redirect(route('user.index'))->with('message', 'User details has been updated successfully!');
        }
        User::findOrFail($id)->update($request->only('name', 'slug', 'email', 'bio'));
        return redirect(route('user.index'))->with('message', 'User details has been updated successfully!');
    }

    /**
     * Remove the specified user from storage.
     *
     * @param UserDeleteRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(UserDeleteRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $article = new BlogController();
        $deleteOption = $request->delete_option;
        $selectdUser = $request->selected_user;
        if($deleteOption == "delete")
        {
            //delete user posts
            $posts = $user->posts;
            if(count($posts) > 0) {
                foreach ($posts as $post){
                    $article->destroy($post->id);
                    $article->forceDestroy($post->id);
                }
            }
            // delete user
            $user->delete();
        }
        elseif($deleteOption == "attribute")
        {
            $user->posts()->update(['author_id' => $selectdUser]);
            $user->delete();
        }
        return redirect(route('user.index'))->with('message', 'Posts and User Has been successfully deleted.');
    }


    //----------------------------------- Custom Method -----------------------------------------------------------//

    /**
     * Handling request before deleting user and taking care of the user posts based of feedback
     *
     * @param UserDeleteRequest $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function confirm(UserDeleteRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $users = User::where('id', '!=', $user->id)->pluck('name', 'id');

        return view('backend.user.confirm', compact('user', 'users'));
    }
}
