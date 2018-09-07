<?php

namespace App\Http\Controllers\Backend\Blog;

use App\Http\Controllers\Backend\BackendBaseController\BackendBaseController;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends BackendBaseController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('images_blog');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category', 'author')->latest()->paginate(8);
        //dd($posts);
        return view('backend.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        return view('backend.blog.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $this->checkboxValueChange($request);

        $data = $this->handleRequest($request);

        $request->user()->posts()->create($data);

        return redirect(route('post.index'))->with('message', 'Your post has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //--------------------------------------- Custom Methods ----------------------------------------------------------//

    /**
     * Change the check box values passed to create form request
     * @param Request $request
     * @return Request
     */
    private function checkboxValueChange(Request $request)
    {
        // change featured
        if($request->has('featured')){
           $request['featured'] = true;
        } else {
            $request->request->add(['featured' => false]);
        }

        // change no_index
        if($request->has('no_index')){
            $request['no_index'] = true;
        } else {
            $request->request->add(['no_index' => false]);
        }

        // change no_index
        if($request->has('no_follow')){
            $request['no_follow'] = true;
        } else {
            $request->request->add(['no_follow' => false]);
        }

        // change no_index
        if($request->has('top_content')){
            $request['top_content'] = true;
        } else {
            $request->request->add(['top_content' => false]);
        }
        return $request;
    }


    private function handleRequest($request)
    {
        $data = $request->all();
        if($request->hasFile('image'))
        {
            $image = $request->file('image');   //take
            $fileName = $image->getClientOriginalName();       //take
            $destination = $this->uploadPath;
            $image->move($destination, $fileName);  //take

            $data['image'] = $fileName;
        }
        return $data;
    }
}
