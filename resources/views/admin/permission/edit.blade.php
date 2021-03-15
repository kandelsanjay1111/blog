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
                <h3 class="card-title">Edit Permission</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('permission.update',$permission->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">permission Name</label>
                    <input type="text" class="form-control" name="name" id="name" value={{$permission->name}}>
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
                  <button type="submit" class="btn btn-dark">Edit</button>
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