@extends('user/app')
@section('bg-img',asset('user/img/about-bg.jpg'))
@section('heading','About Me')
@section('title',$page->title)
@section('description',$page->description)
@section('author',$page->author)
@section('subheading','This is what I do.')

@section('main-contents')
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        {{$page->content}}
      </div>
    </div>
  </div>
@endsection