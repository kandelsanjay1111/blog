@extends('admin/master')

@section('main-content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-10">
            @include('includes.messages')
            <!-- general form elements -->
            <div class="card card-dark mt-2">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('category.store')}}" method="POST">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Category name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category slug </label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Submit</button>
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