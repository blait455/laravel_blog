<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Base\BaseController;
use App\Models\SiteAddress;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Symfony\Component\Debug\Debug;

class AuthorController extends BaseController
{
    public function index(User $author)
    {

        //\DB::enableQueryLog();
        $categoryName = $author->name;

        $posts = $author->posts()
            ->with('category')
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
