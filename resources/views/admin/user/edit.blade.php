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
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('user.update',$user->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" id="name" placeholder="user name" name="name" value={{$user->name}}>
                  </div>
                  <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="email" class="form-control" id="email" placeholder="enter email" value={{$user->email}} name="email">
                  </div>
                  <div class="form-group">
                    <label for="phone">Contact number</label>
                    <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="{{$user->phone}}">
                  </div>
                  <div class="form-group">
                    <input type="checkbox" id="status" placeholder="Enter number" name="status" {{$user->status?'checked':''}}>
                    <label for="number">Status</label>
                  </div>
                  <div class="form-group">
                    <label for="role">Assign Roles</label>
                      <div class="row">
                        @foreach($role as $role)
                        <div class="col-md-3">
                        <input type="checkbox" name="role[]" value="{{$role->id}}"
                        @foreach($user->roles as $uro)
                        @if($uro->id==$role->id)
                         checked
                        @endif
                        @endforeach
                        > {{$role->name}}
                        </div>
                        @endforeach
                      </div>

                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Edit</button>
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