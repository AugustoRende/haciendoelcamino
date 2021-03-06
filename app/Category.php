<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'description',
    ];

    /**
     * Get the posts for the category.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
