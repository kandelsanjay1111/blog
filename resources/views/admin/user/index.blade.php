@extends('admin/master')

@section('header')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{request()->path()}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Admins</h3>
        </div>
        <div class="card-body">
          <div class="card">
            <div class="card-header m-auto">
              @can('admin.create',Auth::user())
              <h3 class="card-title"><a href="{{route('user.create')}}" class="btn btn-dark">Add Admin</a></h3>
              @endcan
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Admin Name</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th>Status</th>
                  @can('admin.update',Auth::user())
                  <th>Edit</th>
                  @endcan
                  @can('admin.delete',Auth::user())
                  <th>Delete</th>
                  @endcan
                </tr>
                </thead>
                <tbody>
                  @foreach($user as $user)

                  <tr>
                  <td>{{$loop->index+1}}</td><!-- loop->index function-->
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                  @foreach($user->roles as $role)
                  {{$role->name}},
                  @endforeach
                  </td>
                  <td>{{$user->status ?'active':'not active'}}</td>
                  @can('admin.update',Auth::user())
                  <td><a href="{{route('user.edit',$user->id)}}"><span class="btn btn-default">Edit</span></a></td>
                  @endcan
                  @can('admin.delete',Auth::user())
                  <td>
                    <form id ="form-delete-{{$user->id}}" action="{{route('user.destroy',$user->id)}}" method="POST" style="display:none;">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                    </form>
                    <a href="" onclick="event.preventDefault();
                    alert('Do you want to Delete the user {{$user->id}}');
                    document.getElementById('form-delete-{{$user->id}}').submit();"><span class="btn btn-default">Delete</span></a>
                  </td>
                  @endcan
                </tr>
                  @endforeach
                </tbody>
                <tfoot>                            
                  <tr>
                  <th>S.N</th>
                  <th>Admin Name</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th>Status</th>
                  @can('admin.update',Auth::user())
                  <th>Edit</th>
                  @endcan
                  @can('admin.delete',Auth::user())
                  <th>Delete</th>
                  @endcan
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('script')
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection

