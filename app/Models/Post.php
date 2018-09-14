<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = ['view_count','title', 'body', 'slug', 'excerpt', 'image', 'image_alt',
        'featured', 'published_at', 'category_id', 'meta_description', 'canonical_url' , 'redirect_url' , 'no_index' , 'no_follow' , 'top_content'];

    protected $dates = ['published_at'];
    // TODO: load image 009 from user image directory, create an accessor or mutator


    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/y";
        if($showTimes) $format = $format . "H:i:s";
        return $this->created_at->format($format);
    }

    /**
     * Showing posts status in admin section based on date
     * @return string
     */
    public function publicationLable()
    {
        if(!$this->published_at)
        {
            return '<span class="label label-warning">Draft</span>';
        }
        elseif ($this->published_at && $this->published_at->isFuture())
        {
            return '<span class="label label-info">Schedule</span>';
        }
        else {
            return '<span class="label label-success">Published</span>';
        }
    }


    //--------------------------- accessor & mutator -----------------------------------//
    public function getDateAttribute($value)
    {
       return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

    /**
     * if
     * @param $value
     */
    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = $value ? : null;
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
    //--------------------------------- end -------------------------------------------//

    //------------------------------- scope ------------------------------------------//
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopePopular($query)
    {
        return $query->orderBy('view_count', 'desc');
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
