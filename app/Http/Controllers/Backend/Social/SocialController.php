<?php

namespace App\Http\Controllers\Backend\Social;

use App\Http\Controllers\Backend\BackendBaseController\BackendBaseController;
use App\Http\Requests\SocialStoreRequest;
use App\Http\Requests\SocialUpdateRequest;
use App\Models\Seo;
use App\Models\Social;
use Illuminate\Http\Request;


class SocialController extends BackendBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials = Social::orderBy('id', 'desc')->paginate($this->pageLimit);
        return view("backend.social.index", compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Social $social)
    {
        return view('backend.social.create', compact('social'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialStoreRequest $request)
    {
        Social::create($request->all());
        return redirect(route('social.index'))->with('message', 'New social link has been created!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $social = Social::findOrFail($id);
        return view('backend.social.edit', compact('social'));
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
        Social::findOrFail($id)->update($request->all());
        return redirect(route('social.index'))->with('message', 'Social links was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Social::findOrFail($id)->delete();
        return redirect(route('social.index'))->with('message', 'Social link has been successfully deleted');

    }
}
