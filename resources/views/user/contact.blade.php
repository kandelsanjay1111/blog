@extends('user/app')
@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('heading','Contact Me')
@section('subheading','Have questions? I have answers.')
@section('title',$page->title)
@section('author',$page->author)
@section('description',$page->description)
@section('main-contents')

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        {{$page->content}}
        <form action="{{route('contact')}}" name="sentMessage" id="contactForm" method="post">
          {{csrf_field()}}
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" id="name" name="name">
              @error('name')
              <p class="help-block text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="Email Address" id="email" name="email">
              @error('email')
              <p class="help-block text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Phone Number</label>
              <input type="tel" class="form-control" name="number" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Message</label>
              <textarea rows="5" name="message" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <hr>

@endsection