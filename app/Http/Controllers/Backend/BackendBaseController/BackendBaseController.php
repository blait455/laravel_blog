<?php

namespace App\Http\Controllers\Backend\BackendBaseController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendBaseController extends Controller
{
    protected $pageLimit = 10;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check-permissions');
    }
}
