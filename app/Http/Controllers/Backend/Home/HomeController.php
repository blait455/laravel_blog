<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Backend\BackendBaseController\BackendBaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountUpdateRequest;
use Illuminate\Http\Request;

class HomeController extends BackendBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.admin.home');
    }

    public function edit(Request $request)
    {
        $user = $request->user();
        return view('backend.admin.edit', compact('user'));
    }

    public function update(AccountUpdateRequest $request)
    {
        $user = $request->user();
        if($request->password != null)
        {
            $request['password'] = bcrypt($request->password);
            $user->update($request->all());
            return redirect(route('admin.account.edit'))->with('message', 'Your details has been updated successfully!');
        }
        $user->update($request->only('name', 'slug', 'email', 'bio'));
        return redirect(route('admin.account.edit'))->with('message', 'Your details has been updated successfully!');
    }
}
