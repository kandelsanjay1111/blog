<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
    	return $this->belongsToMany('App\Post','category_posts')->orderBy('created_at','desc')->paginate(2);//many to many relationship
    }
    
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
