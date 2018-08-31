<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Base\BaseController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends BaseController
{
    /**
     * Showing all the blog based on the category
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Category $category)
    {
        //\DB::enableQueryLog();
        $categoryName = $category->title;

        $posts = $category->posts()
                          ->with('author')
                          ->latestFirst()
                          ->published()
                          ->paginate(3);
        return view('frontend.blog.category', compact('posts', 'categoryName'));
        //dd(\DB::getQueryLog());
    }

}
