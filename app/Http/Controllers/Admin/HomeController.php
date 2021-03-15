<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Post;

class HomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

    public function index() {
    	$user_no=User::all()->count();
    	$post_no=Post::all()->count();
    	return view('admin.home')->with([
    		'user'=>$user_no,
    		'post'=>$post_no
    	]);
    }
}
