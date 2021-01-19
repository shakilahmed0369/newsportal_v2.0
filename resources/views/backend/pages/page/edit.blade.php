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
            <a href="{{ route('admin.page.index') }}" class=" btn btn-primary mr-4">Manage Page</a>
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

          <form method="POST" action="{{ route('admin.page.update', $page->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $page->title }}">
                        @error('title')
                            <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Content</label>
                        <textarea name="content">{{ $page->content }}</textarea>
                        @error('content')
                            <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>
                </div>   
            </div>
                <button type="submit" class="btn  btn-primary">Update</button>
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
      CKEDITOR.replace( 'content' );
    </script>
    
@endsection
@endsection