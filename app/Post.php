<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'src', 'category_id', 'post_type_id', 'date', 'description',
    ];

    /**
     * Get the post type that owns the post.
     */
    public function type()
    {
        return $this->belongsTo('App\PostType','post_type_id');
    }

    /**
     * Get the category that owns the post.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
