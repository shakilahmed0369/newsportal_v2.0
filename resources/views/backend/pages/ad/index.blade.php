@extends('backend.layouts.master')
@section('content')
@section('extraCss')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection
    
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
    <table id="user-table" class="display dataTable table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Ad Name</th>
                <th>Ad Syze</th>
                <th>Ad Type</th>
                <th>Ad Image</th>
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

    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.ad.response') }}',
        columns: [    
            {data: 'adname', name: 'adname'},
            {data:'adsize', name: 'adsize'},
            {data:'adtype', name: 'adtype'},
            {data:'adimage', name: 'adimage'},
            {data: 'action', name: 'action'},
        ]
    });
} );
//******************************************************//



//Delete data (Category)
$('body').on('click', '.btn-delete', function(){
    
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
        var deleteId = $(this).attr('data-id');
        $.ajax({
            type: "DELETE",
            url: "gallery/" + deleteId,
            data: "",
            success: function (response) {
                Swal.fire(
                    'Deleted!',
                    'Category has been deleted.',
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