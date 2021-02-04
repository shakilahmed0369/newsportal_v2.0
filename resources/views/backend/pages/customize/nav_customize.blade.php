@extends('backend.layouts.master')
@section('content')
@section('extraCss')
<style>
  #sortable1, #sortable2 {
  border: 1px solid #1abc9c;
  width: 100%;
  height: 500px;
  overflow-y: scroll;
  min-height: 20px;
  list-style-type: none;
  margin: 0;
  padding: 5px 0 0 0;
  float: left;
  margin-right: 10px;
}
#sortable1 li, #sortable2 li {
  margin: 5px 5px 5px 5px;
  background: #1abc9c;
  padding: 5px;
  text-align: center;
  font-size: 1.6em;
  cursor: pointer;
}
</style>
@endsection


<div class="row">
  <div class="col-md-6">
    <h3>Active On Nav</h3>
    <ul id="sortable1" class="connectedSortable">
      @foreach ($activeCategory as $category)  
      <li id="{{ $category->id }}" class="ui-state-default">{{ $category->categoryName }}</li>
      @endforeach
  </ul>
  </div>
  <div class="col-md-6">
    <h3>Enactive</h3>
    <ul id="sortable2" class="connectedSortable">
      @foreach ($enactiveCategory as $category)  
      <li id="{{ $category->id }}" class="ui-state-default">{{ $category->categoryName }}</li>
      @endforeach
    </ul>
  </div>
</div>

 


@section('extraJs')

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  
  //callign jquery ui sortable connect
  $( function() {
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  } );

  //vlaidatign max li limits
  $("#sortable1").on("sortreceive", function(event, ui) {
    var list = $(this);
    if (list.children().length > 10) {
   $(ui.sender).sortable('cancel');
   }
}); 

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

$('#sortable1').sortable({
  placeholder: 'ui-state-highlight',
  update: function(event, ui){
    var sortIds = new Array();
    $('#sortable1 li').each(function(){
      sortIds.push($(this).attr('id'))
    });
    $.ajax({
      type: "post",
      url: "navcustiomize/active",
      data: {Ids:sortIds},
      success: function (response) {
        
      }
    });
  }
})

$('#sortable2').sortable({
  placeholder: 'ui-state-highlight',
  update: function(event, ui){
    var sortIds = new Array();
    $('#sortable2 li').each(function(){
      sortIds.push($(this).attr('id'))
    });
    $.ajax({
      type: "post",
      url: "navcustiomize/enactive",
      data: {Ids:sortIds},
      success: function (response) {
        
      }
    });
  }
})
  </script>
@endsection
@endsection