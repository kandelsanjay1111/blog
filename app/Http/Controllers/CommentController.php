<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Post;
use App\Comment_post;

class CommentController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	public function store(Request $request,$id){
		$this->validate($request,[
			'comment'=>'required',
		]);

		$comment = new Comment();
		$comment->comment=$request->comment;
		$comment->posted_by=Auth::user()->name;
		$comment->post_id=$id;
		$comment->save();
		return back();
	}
}
