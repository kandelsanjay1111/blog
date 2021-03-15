<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    public function getRouteKeyName(){
    	return 'slug';
    }
}
