@extends('backend.layouts.master')
@section('content')
    
<div class="card">

  <div class="card-header">
      <h5>Hello card</h5>
      <div class="card-header-right">
          
          <a class="btn btn-primary" href="{{ route('admin.addSection') }}">Add Section</a>
      </div>
  </div>
  <div class="card-body">
      @foreach ($sections as $section)
          <div class="card">
              <div class="card-header">
                  <h5>section</h5>
                  <div class="card-header-right">
                    <a href="" class="btn btn-primary">Column Designs</a>
                  </div>
              </div>
              <div class="card-body">
                <p>hello</p>
            </div>
          </div>
      @endforeach
  </div>
</div>

@endsection