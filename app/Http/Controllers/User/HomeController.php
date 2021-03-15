<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;

class HomeController extends Controller
{
    public function index(){
    	$post=Post::orderBy('created_at','desc')->paginate(2);
    	return view('user.blog',compact('post'));
    }

    public function tag(Tag $slug){
    	 $post= $slug->posts();
    	return view('user.blog')->with('post',$post);
    }
    
    public function category(Category $slug){
		$post= $slug->posts();
    	return view('user.blog')->with('post',$post);
    }

}
