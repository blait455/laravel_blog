<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Base\BaseController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends BaseController
{

    public function index()
    {
        //\DB::enableQueryLog();
        $categories = $this->categories;

        $posts = Post::with('author')->latestFirst()->published()->paginate(3);
        return view('frontend.blog.index', compact('posts', 'categories'));
        //dd(\DB::getQueryLog());
    }

    public function show(Post $post)
    {
        $categories = $this->categories;

        return view('frontend.blog.article', compact('post', 'categories'));
    }
}
