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
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">{{request()->path()}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Categories</h3>
        </div>
        <div class="card-body">
          <div class="card">
            <div class="card-header m-auto">
              <h3 class="card-title"><a href="{{route('category.create')}}" class="btn btn-dark">Add Category</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Category Name</th>
                  <th>Slug</th>
                  <th> Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($category as $category)

                  <tr>
                  <td>{{$loop->index+1}}</td><!-- loop->index function-->
                  <td>{{$category->name}}</td>
                  <td>{{$category->slug}}</td>
                  <td><a href="{{route('category.edit',$category->id)}}"><span class="btn btn-default">Edit</span></a></td>
                  <td>
                    <form id ="form-delete" action="{{route('category.destroy',$category->id)}}" method="POST" style="display:none;">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                    </form>
                    <a href="" onclick="event.preventDefault();
                    alert('Do you want to Delete the category {{$category->title}}');
                    document.getElementById('form-delete').submit();"><span class="btn btn-default">Delete</span></a>
                  </td>
                </tr>
                  @endforeach
                </tbody>
                <tfoot>                            
                  <tr>
                  <th>S.N</th>
                  <th>Category Name</th>
                  <th>Slug</th>
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

