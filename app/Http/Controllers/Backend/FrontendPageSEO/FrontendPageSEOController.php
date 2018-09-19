<?php

namespace App\Http\Controllers\Backend\FrontendPageSEO;

use App\Http\Controllers\Backend\BackendBaseController\BackendBaseController;
use App\Models\Seo;
use Illuminate\Http\Request;


class FrontendPageSEOController extends BackendBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seos = Seo::orderBy('id', 'desc')->paginate($this->pageLimit);
        return view("backend.frontendPageSeo.index", compact('seos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $seo = Seo::findOrFail($id);
        return view('backend.frontendPageSeo.edit', compact('seo'));
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
        $this->checkboxValueChange($request);
        Seo::findOrFail($id)->update($request->all());
        return redirect(route('seo.index'))->with("message", "{$request->title} page seo details has been updated successfully!");
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



    //---------------------------------------------- Custom Function -------------------------------------------------//
    /**
     * Change the check box values passed to create form request
     * @param Request $request
     * @return Request
     */
    private function checkboxValueChange(Request $request)
    {
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
}
