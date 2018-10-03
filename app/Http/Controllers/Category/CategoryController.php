<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Base\BaseController;
use App\Models\Category;


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
                          ->where([
                              ['site_address_id', '=', $this->determineUrl()],
                              ['featured', '!=', '1'],
                              ['special_featured', '!=', '1']
                          ])
                          ->latestFirst()
                          ->published()
                          ->paginate(3);
        return view('frontend.blog.category', compact('posts', 'categoryName'));
        //dd(\DB::getQueryLog());
    }



}
