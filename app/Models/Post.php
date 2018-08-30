<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;

class Post extends Model
{
    protected $dates = ['published_at'];
    // TODO: load image 009 from user image directory, create an accessor or mutator

    //--------------------------- accessor & mutator -----------------------------------//
    public function getDateAttribute($value)
    {
       return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

    /**
     * Changing the article body view
     * @param $value
     * @return mixed
     */
    public function getBodyHtmlAttribute($value)
    {
        return $this->body ? Markdown::convertToHtml(e($this->body)) : null;
    }


    /**
     * Changing the article excerpt view
     * @param $value
     * @return mixed
     */
    public function getExcerptHtmlAttribute($value)
    {
        return $this->excerpt ? Markdown::convertToHtml(e($this->excerpt)) : null;
    }

    //------------------------------- scope ------------------------------------------//
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Show only published posts
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", Carbon::now());
    }

    //--------------------------- Relation ---------------------------------------------//

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
