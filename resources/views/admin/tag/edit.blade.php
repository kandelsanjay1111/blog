@extends('admin/master')

@section('main-content')

<div class="content-wrapper">
 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-10 mt-2">
            @include('includes.messages')
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Edit Tag</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('tag.update',$tag->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tag Name</label>
                    <input type="text" class="form-control" id="name" placeholder="tag name" name="name" value="{{$tag->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">tag slug </label>
                    <input type="text" class="form-control" id="slug" placeholder="Enter slug" name="slug" value="{{$tag->slug}}">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Submit</button>
                  <a type="button" href="{{route('tag.index')}}" class="btn btn-warning">Back</a>
                </div>
              </form>
            </div>
         </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection