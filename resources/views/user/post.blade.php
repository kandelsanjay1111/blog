@extends('user/app')
@section('bg-img',Storage::url($post->image))

@section('heading',$post->title)
@section('subheading',$post->subtitle)

@section('main-contents')
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        	<p><small style="font-size:1.2em; text-decoration: underline;">Post Created at{{$post->created_at->diffForHumans()}}</small>
        		@foreach($post->categories as $category)
        		<a href="{{route('category',$category->slug)}}"><small style="float:right; text-transform: uppercase; margin-left:20px;border:1px solid gray; padding:2px;">
        		{{$category->name }}
        		</small></a>
        		@endforeach
        		</p>
          {!!htmlspecialchars_decode($post->body)!!}
          <form action="{{route('comment.store',$post->id)}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="text" name="comment" class="form-control">
            <input type="submit" name="post" class="btn btn-primary" value="Comment">
          </form>
          <p>@foreach($post->tags as $tag)
        		<a href="{{route('tag',$tag->slug)}}"><small style="float:right; text-transform: uppercase; margin-left:20px;border:1px solid gray; padding:2px;">
        		{{$tag->name }}
        		</small></a>
        		@endforeach
        </p>
        </div>
      </div>
    </div>
  </article>

  <hr>
@endsection
