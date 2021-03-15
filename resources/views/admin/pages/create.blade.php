@extends('admin/master')

@section('main-content')

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-dark mt-2">
              <div class="card-header">
                <h3 class="card-title">Add Page</h3>
              </div>
              <!-- /.card-header -->
              @include('includes.messages')
              <!-- form start -->
              <form role="form" action="{{route('page.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="page_title">Page Title</label>
                    <input type="text" class="form-control" id="title" placeholder="page title" name="title">
                  </div>
                  <div class="form-group">
                    <label for="page_title">Page slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="page slug" name="slug">
                  </div>
                  <div class="form-group">
                    <label for="content">Page content </label>
                    <input type="text" class="form-control" id="content" placeholder="Page content" name="content">
                  </div>
                  <div class="form-group">
                    <label for="description">Page description </label>
                    <input type="text" class="form-control" id="description" placeholder="Page description" name="description">
                  </div>
                  <div class="form-group">
                    <label for="author">Page author </label>
                    <input type="text" class="form-control" id="author" placeholder="Page author" name="author">
                  </div>
                  <div class="form-group">
                    <label for="image">Page Image</label>
                    <input type="file" id="image" name="image">
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