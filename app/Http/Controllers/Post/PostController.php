<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        //\DB::enableQueryLog();
        $posts = Post::with('author')->latestFirst()->paginate(3);
        return view('frontend.blog.index', compact('posts'));
        //dd(\DB::getQueryLog());
    }
}
