<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Base\BaseController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends BaseController
{
    public function index($id)
    {
        //\DB::enableQueryLog();
        $categories = $this->categories;

        $posts = Category::find($id)
                            ->posts()
                            ->latestFirst()
                            ->published()
                            ->paginate(3);
        return view('frontend.blog.index', compact('posts', 'categories'));
        //dd(\DB::getQueryLog());
    }
}
