<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Base\BaseController;
use App\Models\Post;


class PostController extends BaseController
{


    public function index()
    {
        //\DB::enableQueryLog();
        $posts = Post::with('author')->where([
            ['site_address_id', '=', $this->determineUrl()],
            ['featured', '!=', '1'],
            ['special_featured', '!=', '1']
        ])
            ->latestFirst()
            ->published()
            ->paginate(3);
        return view('frontend.blog.index', compact('posts'));
        //dd(\DB::getQueryLog());
    }

    public function show(Post $post)
    {
        // view counter
        $viewCount = $post->view_count + 1;
        $post->update(['view_count' => $viewCount]);

        return view('frontend.blog.article', compact('post'));
    }

}
