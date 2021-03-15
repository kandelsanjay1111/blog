<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){
    	$this->validate($request,[
    		'name'=>'required|min:3|string',
    		'email'=>'required|email',
    		'number'=>'required',
    		'message'=>'required'
    	]);
    }
}
