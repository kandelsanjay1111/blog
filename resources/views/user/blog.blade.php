 @extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))

@section('heading','Test blog')

@section('subheading','A Blog Theme by Start Bootstrap')

 @section('main-contents')
 <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($post  as $posts)
        <div class="post-preview">
          <a href="{{route('post',$posts->slug)}}">
            <h2 class="post-title">
              {{$posts->title}}
            </h2>
            <h3 class="post-subtitle">
              {{$posts->subtitle}}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">{{$posts->posted_by}}</a>
            on {{$posts->created_at}}</p>
        </div>
        <hr>
        @endforeach
        <!-- Pager -->
        <div class="clearfix">
          {{$post->links()}}
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>
  @endsection