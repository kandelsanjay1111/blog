@extends('admin/master')

@section('header')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('main-content')
<div class="content-wrapper mt-2">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
          <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title">Make Post</h3>
                    </div>
                    <!-- /.card-header -->
                   @include('includes.messages')
                    <!-- form start -->
                    <form role="form" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="card-body">
                        <div class="row">
                        <div class="col-md-6" data-select2-id="39">

                            <div class="form-group">
                              <label for="exampleInputEmail1">Post title</label>
                              <input type="text" class="form-control" name="title" id="title" placeholder="Post title">
                            </div>

                            <div class="form-group">
                              <label for="exampleInputPassword1">Post subtitle</label>
                              <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="sub title">
                            </div>

                            

                            <div class="form-group">
                              <label for="exampleInputPassword1">Post slug</label>
                              <input type="text" class="form-control" name="slug" id="slug" placeholder="slug">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputFile">Choose Image</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inpfile" name="image" >
                                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                  <span class="input-group-text" id="">Upload</span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class='box' style="display:block;height:200px;border:2px solid blue; overflow: hidden;">
                                  <img id="img_field" style="width: 100%; height:200px;" src="">
                                </div>
                            </div>
                            <div class="form-group">
                              <label>Choose Tags</label>
                              <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select tags" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="tags[]">
                                @foreach($tag as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Choose Categories</label>
                              <div class="select2-purple" data-select2-id="29">
                                <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select Categories" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true" name="categories[]">
                                  @foreach($category as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="status" name="status">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        </div>
                        
                        <div class="form-group col-md-12">
                          <textarea style='height:400px; width:100%;' class="form-control textarea" placeholder="post body" name="body"></textarea>
                        </div>
                    
                      </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-dark">Submit</button>
                        <a type="button" href="{{route('post.index')}}" class="btn btn-warning">Back</a>
                      </div>
                    </form>
          </div>
      </div>
    </div>
  </section>

</div>

@endsection

@section('script')

<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('admin/Customjs/custom.js')}}"></script>
<script>
  $(document).ready(function(){
     $('.select2').select2();
      $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
      $('.textarea').summernote();
  });

</script>
@endsection
