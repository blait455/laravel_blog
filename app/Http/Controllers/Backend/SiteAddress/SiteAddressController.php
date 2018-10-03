<?php

namespace App\Http\Controllers\Backend\SiteAddress;

use App\Http\Controllers\Backend\BackendBaseController\BackendBaseController;
use App\Http\Requests\SiteAddressStoreRequest;
use App\Http\Requests\SiteAddressUpdateRequest;
use App\Models\SiteAddress;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteAddressController extends BackendBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = SiteAddress::with('posts')->orderBy('id', 'desc')->paginate($this->pageLimit);
        return view("backend.siteAddress.index", compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SiteAddress $address)
    {
        return view('backend.siteAddress.create', compact('address'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteAddressStoreRequest $request)
    {
        SiteAddress::create($request->all());
        return redirect(route('site-address.index'))->with('message', 'New Site Address has been created successfully !');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $address = SiteAddress::findOrFail($id);
        return view('backend.siteAddress.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiteAddressUpdateRequest $request, $id)
    {
        SiteAddress::findOrFail($id)->update($request->all());
        return redirect(route('site-address.index'))->with('message', 'Site Address was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siteAddress = SiteAddress::findOrFail($id);

        if($siteAddress->posts->count() === 0)
        {
            SiteAddress::findOrFail($id)->delete();
            return redirect(route('site-address.index'))->with('message', 'Site Address has been successfully deleted.');
        }
        return redirect(route('site-address.index'))->with('warning-message', 'Site Address cannot be deleted, related posts are depended on this Site Address!');
    }
}
