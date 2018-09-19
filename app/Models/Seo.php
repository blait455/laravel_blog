<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = ['title', 'slug', 'meta_description', 'canonical_url' , 'redirect_url' , 'no_index' , 'no_follow' , 'top_content'];
}
