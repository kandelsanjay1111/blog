@if(count($errors)>0)
	@foreach( $errors->all() as $error)
	<div class="alert alert-danger alert-dismissible" data-dismiss="alert">
	<a href="" data-dismiss="alert" class="close">&times;</a>
	{{$error}}
	</div> 
	@endforeach
@endif

@if(Session::get('success'))
<div class="alert alert-success alert-dismissible" data-dismiss="alert">
	<a href="" data-dismiss="alert" class="close">&times;</a>
    {{Session::get('success')}}
</div> 
@endif