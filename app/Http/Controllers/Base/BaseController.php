<?php

namespace App\Http\Controllers\Base;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $categories;
    public function __construct()
    {
        $this->categories = Category::allCategories();
    }

}
