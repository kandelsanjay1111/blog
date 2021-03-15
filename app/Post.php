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
        'title', 'subtitle', 'slug','image','body','posted_by'
    ];
    public function tags(){

    	return $this->belongsToMany('App\Tag','post_tags')->withTimestamps();//many to many relationship
    }

    public function categories(){

    	return $this->belongsToMany('App\Category','category_posts')->withTimestamps();//category_posts pivoted table
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }


    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
