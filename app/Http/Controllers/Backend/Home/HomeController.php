<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Backend\BackendBaseController\BackendBaseController;
use App\Http\Controllers\Controller;
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
}
