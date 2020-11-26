@extends('backend.layouts.master')
@section('content')
{{-- extra css(used only this page) --}}
@section('extraCss')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/plugins/bootstrap-tagsinput.css') }}">   
@endsection
<div class="col-sm-12">
  <div class="card">

      <div class="card-header">
          <h5>Publish News</h5>
          <div class="card-header-right">
              <div class="btn-group card-option">
                  <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="feather icon-more-horizontal"></i>
                  </button>
                  <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                      <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                      <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                      <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                      <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="card-body">

          <form method="POST" action="{{ route('admin.news.update', $news->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $news->title }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">News Description</label>
                        <textarea name="body" >{{ $news->body }}</textarea>
                        @error('body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tags">Meta Tags(SEO)</label>
                        <input name="tags" type="text" class="form-control" id="meta_tags" data-role="tagsinput" value="{{ $news->meta_tags }}">
                        @error('tags')
                            <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tags">Meta Description(SEO)</label>
                        <input name="meta_description" type="text" class="form-control" id="meta_description" value="{{ $news->meta_description }}">
                        @error('meta_description')
                            <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>
                </div>
                
            <div class="col-md-4">

                <div class="preview">
                    <label for="tags">Image</label> <br>
                    
                    <img src="{{ asset('storage/uploads').'/'.$news->image }} " style="display:block; height:230px; width:100%; object-fit:cover" class="img-fluid" id="blah" />
                </div>
                <div class="input-group mt-3">
                    <div class="custom-file">
                        <input name="photo" style="overflow:hidden" type='file' class="imgInp" id="inputGroupFile01" />
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>  
                    </div>
                </div>
                @error('photo')
                    <span class="text-danger">{{ $message }} </span>
                @enderror

                <div class="from-group mb-3 mt-3">
                    <label for="">Category </label>
                    <select name="category" class="custom-select" id="inputGroupSelect02">
                        <option value="">Choose...</option>
                        @foreach ($categories as $category)
                        <option
                        @if ($news->category_id == $category->id)
                        selected
                        @endif
                     value="{{ $category->id }}">{{ $category->categoryName }}</option>
                        @endforeach
                    </select>
                    @error('category')
                            <span class="text-danger">{{ $message }} </span>
                        @enderror
                </div>

                <div class="custom-control custom-switch">
                    <input 
                    @if ($news->on_featured == 1)
                        checked
                    @endif value="1" name="featured" type="checkbox" class="custom-control-input" id="customswitch1">
                    <label class="custom-control-label" for="customswitch1">Show On Featured</label>
                </div>

                <div class="custom-control custom-switch">
                    <input
                    @if ($news->on_breaking == 1)
                        checked
                    @endif value="1" name="breaking" type="checkbox" class="custom-control-input" id="customswitch2">
                    <label class="custom-control-label" for="customswitch2">Show On Breaking News</label>
                </div>

                </div>   
            </div>
            <button type="submit" class="btn  btn-primary">Update News</button>
            </form>        
          </div>
      </div>
  </div>
</div>
@section('extraJs')
    {{-- CK Editor CDN --}}
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    {{-- Tagify Js --}}
    <script src="{{ asset('backend/assets/js/plugins/bootstrap-tagsinput.min.js') }}"></script>

    {{-- Calling CK Editor --}}
    <script>
      CKEDITOR.replace( 'body' );
    </script>
    {{-- Tagigy Call --}}
    <script>
        $('form').bind("keypress", function(e) {
            if (e.keyCode == 13) {               
            e.preventDefault();
            return false;
            }
        });
    </script>
    <script>
        //Image preview js
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $(".imgInp").change(function() {
        readURL(this);
        });
    </script>

@endsection
@endsection