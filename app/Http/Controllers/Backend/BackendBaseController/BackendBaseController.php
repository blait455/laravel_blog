<?php

namespace App\Http\Controllers\Backend\BackendBaseController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendBaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
