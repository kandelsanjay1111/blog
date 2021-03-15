@extends('admin/master')

@section('main-content')

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            @include('includes.messages')
            <!-- general form elements -->
            <div class="card card-dark mt-2">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('user.store')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label">User Name</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" id="name" placeholder="user name" name="name" value="{{old('name')}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label">User Email</label>
                    <div class="col-md-9">
                    <input type="email" class="form-control" id="email" placeholder="enter email" name="email" value="{{old('email')}}"> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-md-3 col-form-label">User Password</label>
                    <div class="col-md-9">
                    <input type="password" class="form-control" id="password" placeholder="enter password" name="password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password_confirmation" class="col-md-3 col-form-label">Confirm Password</label>
                    <div class="col-md-9">
                    <input type="password" class="form-control" id="password_confirmation" placeholder="confirm password" name="password_confirmation"> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="phone">Contact number</label>
                    <div class="col-md-9">
                    <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="{{old('phone')}}"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="checkbox" id="status" placeholder="Enter number" name="status" value="0">
                    <label for="number">Status</label>
                  </div>
                  <div class="form-group ">
                    <label for="role">Assign Roles</label>
                      <div class="row">
                        @foreach($role as $role)
                        <div class="col-md-3">
                        <input type="checkbox" name="role[]" value="{{$role->id}}"> {{$role->name}}
                        </div>
                        @endforeach
                      </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Submit</button>
                  <a type="button" href="{{route('user.index')}}" class="btn btn-warning">Back</a>
                </div>
              </form>
            </div>
         </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection