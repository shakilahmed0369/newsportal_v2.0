@extends('backend.layouts.master')
@section('content')

<form action="{{ route('admin.homeUpdate') }}" method="post">
@csrf
@php
    $i = 1;
@endphp
@foreach ($homeCustomize as $row)
@if ($i <= 7)
<div class="card">
  <div class="card-header">
      <h5>Hello card {{ $i }}</h5>
  </div>
  <div class="card-body text-center">
      <input type="hidden" name="id-{{ $row->id }}" value="{{ $row->id }}">
      <select name="categoryId-{{ $row->id }}">
        <option value="">Display None</option>
        @foreach ($categorys as $category) 
        <option
        @if ($category->id == $row->position)
            selected
        @endif
        value="{{ $category->id }}">{{ $category->categoryName }}</option>
        @endforeach
      </select>
  </div>
</div>

@elseif($i == 8)

<div class="card">
  <div class="card-header">
      <h5>Hello card</h5>
  </div>
  <input type="hidden" name="id-{{$row->id}}" value="{{ $row->id }}">
  <input type="hidden" name="categoryId-{{$row->id}}" value="0">
  <div class="card-body text-center">
      <h4>Video Section</h4>
  </div>
</div>

@elseif($i == 9)
<div class="card">
  <div class="card-header">
      <h5>Hello card {{$i}}</h5>
  </div>
  <div class="card-body text-center">
      <input type="hidden" name="id-{{$row->id}}" value="{{ $row->id }}">
      <select name="categoryId-{{$row->id}}">
        <option value="">Display None</option>
        @foreach ($categorys as $category) 
        <option
        @if ($category->id == $row->position)
            selected
        @endif
        value="{{ $category->id }}">{{ $category->categoryName }}</option>
        @endforeach
      </select>
  </div>
</div>

@endif

@php
    $i++
@endphp
@endforeach  

@php
    $i = 1;
@endphp
<div class="row">
  @foreach ($homeCustomize as $row)
    @if ($i > 9)
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
              <h5>Hello card {{ $i }}</h5>
          </div>
          <div class="card-body text-center">
              <input type="hidden" name="id-{{$row->id}}" value="{{$row->id}}">
              <select name="categoryId-{{$row->id}}" id="{{$row->id}}">
                <option value="">Display None</option>
                @foreach ($categorys as $category) 
                <option
                @if ($category->id == $row->position)
                    selected
                @endif
                value="{{ $category->id }}">{{ $category->categoryName }}</option>
                @endforeach
              </select>
          </div>
        </div>
      </div>
    @endif
    @php
        $i++
    @endphp
  @endforeach 
</div>
<input type="submit" value="Submit">
</form>


@endsection