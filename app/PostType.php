<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{   
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'description',
    ];

    /**
     * Get the posts for the post type.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
