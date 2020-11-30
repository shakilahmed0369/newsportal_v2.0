@extends('backend.layouts.master')
@section('content')
<div class="card">

  <div class="card-header">
      <h5>Hello card</h5>
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
      <form id="from" action="{{ route('admin.gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="col-md-8 offset-2">
            <div class="preview">
                <label for="tags">Image</label> <br>
                
                <img style="background-image: url({{ asset('storage/photos').'/'.$gallery->photo }}) ; display:block; height:350px; width:100%; object-fit:cover;  background-position: center;" class="img-fluid" id="blah"/>
            </div>
            <div class="input-group mt-3">
                <div class="custom-file">
                    <input name="photo" style="overflow:hidden" type='file' class="imgInp" id="inputGroupFile01" />
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            @error('photo')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          <div class="form-group mt-3">
            <label for="caption">Photo Caption</label>
            <input name="caption" type="text" class="form-control" id="caption" value="{{ $gallery->caption }}">
            @error('caption')
            <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>
        <button class="btn btn-primary" onclick="$('#form').submit()">Submit</button>
    </div>
</form> 
</div>
@section('extraJs')
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