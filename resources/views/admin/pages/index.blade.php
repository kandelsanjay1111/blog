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
          <h3 class="card-title">All Pages</h3>
        </div>
        <div class="card-body">
          <div class="card">
            <div class="card-header m-auto">
              <h3 class="card-title"><a href="{{route('role.create')}}" class="btn btn-dark">Create Page</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Title</th>
                  <th>Slug</th>
                  <th>Content</th>
                  <th>Description</th>
                  <th>Author</th>
                  <th> Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($pages as $page)
                    <tr>
                      <td>{{$loop->index+1}}</td>
                      <td>{{$page->title}}</td>
                      <td>{{$page->slug}}</td>
                      <td>{{$page->content}}</td>
                      <td>{{$page->description}}</td>
                      <td>{{$page->author}}</td>
                      <td><a href=""><i class="fas fa-edit"></i>Edit</a></td>
                      <td><a href="" class="text-danger"><i class="fas fa-trash"></i>Delete</a></td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>                            
                  <tr>
                  <th>S.N</th>
                  <th>Title</th>
                  <th>Slug</th>
                  <th>Content</th>
                  <th>Description</th>
                  <th>Author</th>
                  <th>Edit</th>
                  <th>Delete</th>
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

