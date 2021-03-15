<!DOCTYPE html>
<html>
<head>
 @include('admin/layouts/header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('admin/layouts/navbar')

  @include('admin/layouts/sidebar')

    @section('main-content')

      @show

  @include('admin/layouts/footer')

</div>
@include('admin/layouts/script')
</body>
</html>