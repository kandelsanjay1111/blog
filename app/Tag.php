<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{


    public function posts()
    {
    	return $this->belongsToMany('App\Post','post_tags')->orderBy('created_at','desc')->paginate(2);//many to many relationship
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
