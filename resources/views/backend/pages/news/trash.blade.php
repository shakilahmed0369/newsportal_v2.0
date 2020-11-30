@extends('backend.layouts.master')
@section('content')
@section('extraCss')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection
    

<div class="card">

  <div class="card-header">
      <h5>Trash bin</h5>
      <div class="card-header-right">
          <div class="btn-group card-option">
              <a href="{{ route('admin.news.index') }}" class=" btn btn-primary mr-4">Manage News</a>
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
    <table id="user-table2" class="display dataTable table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
              <th>id</th>
              <th>Sl</th>
              <th>Image</th>
              <th>title</th>
              <th>Acton</th>
          </tr>
      </thead>
      <tbody>
      </tbody>
  </table>
  </div>
</div>

@section('extraJs')
<!--Used (only on theis page)-->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<!--Used (only on theis page)-->
<script>
  /*******************
 * AJAX CSRF TOKEN *
 *******************/
 $(document).ready(function() {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

/******************************************************
 * GETING TABLE DATA FROM DATABASAE (YAJRA DATATABLE) *
 ******************************************************/

    $('#user-table2').DataTable({
        processing: true,
        serverSide: true,
        order: [ ['0', 'desc'] ],
        ajax: '{{ route('admin.news.trash.response') }}',
        columns: [
            {data: 'id', name: 'id', visible:false},
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'image', name: 'image'},
            {data: 'title', name: 'title'},
            {data: 'action', name: 'action'},
        ]
    });
} );
//******************************************************//

//Delete data (Category)
$('body').on('click', '.btn-restore', function(){
    
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to restore this news?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, restore it!',

    }).then((result) => {
    if (result.isConfirmed) {
        var deleteId = $(this).attr('data-id');
        $.ajax({
            type: "get",
            url:  '/admin/news/trash/recover/' + deleteId,
            data: "",
            success: function (response) {
                Swal.fire(
                    'Success!',
                    'News has been recoverd.',
                    'success'
                )
                .then((result)=>{
                    location.reload()
                })
            }    
        });
    }
    })

})



//Delete data (Category)
$('body').on('click', '.btn-delete', function(){
    
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',

    }).then((result) => {
    if (result.isConfirmed) {
        var deleteId = $(this).attr('data-id');
        $.ajax({
            type: "DELETE",
            url:  deleteId,
            data: "",
            success: function (response) {
                Swal.fire(
                    'Deleted!',
                    'News has been deleted.',
                    'success'
                )
                .then((result)=>{
                    location.reload()
                })
            }    
        });
    }
    })

})
</script>
@endsection
@endsection