<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Post;
use App\Category;
use DB;

class PostController extends Controller
{
    //find post using slug
    public function index(Post $slug){
    	return view('user.post')->with('post',$slug);
    }
    
}
