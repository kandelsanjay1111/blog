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
                <h3 class="card-title">Add Role</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('role.store')}}" method="POST">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Role Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="role name">
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                        <label>Post permission</label>
                        @foreach($permission as $perm)
                        @if($perm->for =='Post')
                        <p><input type="checkbox" name="permission[]]" value="{{$perm->id}}"> {{$perm->name}}</p>
                        @endif
                        @endforeach
                    </div>
                    <div class="col-lg-4">
                        <label>User permission</label>
                        @foreach($permission as $perm)
                        @if($perm->for =='User')
                        <p><input type="checkbox" name="permission[]]" value="{{$perm->id}}"> {{$perm->name}}</p>
                        @endif
                        @endforeach
                    </div>
                    <div class="col-lg-4">
                        <label>Other permission</label>
                        @foreach($permission as $perm)
                        @if($perm->for =='Other')
                        <p><input type="checkbox" name="permission[]]" value="{{$perm->id}}"> {{$perm->name}}</p>
                        @endif
                        @endforeach
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Submit</button>
                  <a type="button" href="{{route('role.index')}}" class="btn btn-warning">Back</a>
                </div>
              </form>
            </div>
         </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection