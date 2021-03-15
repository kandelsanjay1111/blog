<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;
use Auth;
use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::all();
        return view('admin.post.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tag=Tag::all();
        $category=Category::all();
        return  view('admin.post.create',compact('tag','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image'=>'required',
        ]);

        if($request->hasFile('image')){
        $imagename=$request->file('image')->store('public/posts');
        }

        $post= new Post;
        $post->title=$request->input('title');
        $post->subtitle=$request->input('subtitle');
        $post->slug=$request->input('slug');
        $post->image=$imagename;
        $post->body=$request->input('body');
        $post->posted_by=Auth::user()->name;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::where('id',$id)->with('tags')->with('categories')->first();
        $tag=Tag::all();
        $category=Category::all();
        return view('admin.post.edit',compact('post','tag','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        $this->validate($request,[
            'title'=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image'=>'sometimes',

        ]);

        if($request->hasFile('image')){
        $imagename=$request->file('image')->store('public/posts'); 
        }
        
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->subtitle=$request->input('subtitle');

        if($post->image)
        {
        Storage::delete($post->image);
        }

        $post->image=$imagename;
        $post->slug=$request->input('slug');
        $post->body=$request->input('body');
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->save();
        return redirect(route('post.index'))->with('success','Image has been uploaded');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        Storage::delete($post->image);
        $post->delete();
        return back();
    }
}
