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
                <h3 class="card-title">Add Permission</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('permission.store')}}" method="POST">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="permission">permission Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="permission name">
                  </div>
                  <div class="form-group">
                    <label for="for">Permission For</label>
                    <select class="form-control" name="forpermission">
                      <option>Post</option>
                      <option>User</option>
                      <option>Other</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Submit</button>
                  <a type="button" href="{{route('permission.index')}}" class="btn btn-warning">Back</a>
                </div>
              </form>
            </div>
         </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection