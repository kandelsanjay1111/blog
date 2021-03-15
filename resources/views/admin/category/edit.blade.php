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
                <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('category.update',$category->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Category name" value="{{$category->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category slug </label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug" value="{{$category->slug}}">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Edit</button>
                  <a type="button" href="{{route('category.index')}}" class="btn btn-warning">Back</a>
                </div>
              </form>
            </div>
         </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection