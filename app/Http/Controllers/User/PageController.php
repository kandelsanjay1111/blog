<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pages;

class PageController extends Controller
{
    public function index(Pages $pageinfo){
    	$path= $pageinfo->slug;
    	$view='user.'.$path;
    	return view($view)->with('page',$pageinfo);
    }

}
