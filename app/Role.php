<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions(){
    	return $this->belongsToMany('App\Permission');
    }

    public function admins(){
        return $this->belongsToMany('App\Admin','admin_roles');
    }
}
