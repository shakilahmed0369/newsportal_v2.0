@extends('backend.layouts.master')
@section('content')
<div class="card">

    <div class="card-header">
        <h5>Hello card</h5>
  
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.ad.update', $ad->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="floating-label" for="adname">Ad Name</label>
            <input name="adname" type="text" class="form-control" id="adname" value="{{ $ad->adname }}">
        </div>

        <div class="form-group">
            <label class="floating-label" for="adsize">Ad Size</label>
            <input name="adsize" type="text" class="form-control" id="adsize" value="{{$ad->adsize}}">
        </div>
        
        <div class="form-group">
            <label class="floating-label" for="Email">Ad type</label>
            <select name="adtype" class="custom-select" id="inputGroupSelect01">
                <option selected value="{{ $ad->adtype }}">@if ($ad->adtype == 1)
                    Image (selected)
                    @elseif($ad->adtype == 2 )
                    Googel Script (selected)
                @endif</option>
                <option value="1">Image</option>
                <option value="2">Google Script</option>
            </select> 
        </div>
        <div class="thumb @if ($ad->adtype == 1) d-block @else d-none @endif mb-2"><img width="200px" src="{{ asset('storage/ad/'.$ad->adimage) }}" alt=""></div>
        <div class="custom-file image @if ($ad->adtype == 1) d-block @else d-none @endif ">
            
            
            <input name="adimage" type="file" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>

        <div class="form-group ">
            <textarea name="adscript" class="@if ($ad->adtype == 2) d-block @else d-none @endif form-control textaria d-none" aria-label="With textarea">{{ $ad->adscript }}</textarea>
        </div>

        <div class="form-group url @if ($ad->adtype == 1) d-block @else d-none @endif">
            <label class="floating-label" for="Email">Ad Url</label>
            <input value="{{ $ad->adurl }}" name="adurl" type="text" class="form-control" id="" aria-describedby="emailHelp">
        </div>

        <input class="btn btn-primaryadname" type="submit" value="Submit">

        </form>
    </div>

  </div>
@section('extraJs')
    <script>
      $(".custom-select").click(function(){
          if($(this).val() == 1){
            $('.textaria').addClass('d-none');
            $('.image, .url, .thumb').removeClass('d-none d-block');
          }else if($(this).val() == 2){
            $('.image, .url, .thumb').addClass('d-none');
            $('.textaria').removeClass('d-none d-block');
          }
      })
      
    </script>
@endsection
@endsection