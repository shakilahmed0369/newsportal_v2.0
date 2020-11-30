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
      <form id="from" action="{{ route('admin.video.store') }}" method="post">
        @csrf
      <div class="col-md-8 offset-2">
          <div class="form-group mt-3">
            <label for="url">Video link</label>
            <input name="url" type="text" class="form-control" id="url">
            @error('url')
            <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="caption">Video Caption</label>
            <input name="caption" type="text" class="form-control" id="caption">
            @error('caption')
            <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>
        <button class="btn btn-primary" onclick="$('#form').submit()">Submit</button>
    </div>
</form> 
</div>
@section('extraJs')
@endsection
@endsection