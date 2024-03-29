@extends('backend.layouts.master')
@section('content')
@section('extraCss')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection
    
<div class="card">

  <div class="card-header">
      <h5>Hello card</h5>
      <div class="card-header-right">
          @permitTo('CreateCategory')
          <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal">
            Add Category
          </button>
          @endpermitTo
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

      {{-- modal --}}

      <!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Add Category</h5>
          <button onclick="$('#categoryName').css({'border-color': ''}) + $('.invalid-feedback').removeClass('d-block')" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <form class="form" method="POST">
                <input  type="text" class="form-control" name="categoryName" id="categoryName" placeholder="Category Name" >
                <div class="invalid-feedback d-none">Field can't be empty!</div> 
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="submit-btn" class="btn btn-primary">
            Save
        </button>
        </div>
      </div>
    </div>
  </div>

   <!-- Edit Modal -->
   <div class="modal fade"  id="edit-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Edit Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <form class="form" method="POST">
                <input  type="text" class="form-control" name="editCategory" id="editCategory" placeholder="Category Name" required="">
                <div class="invalid-feedback d-none">Fild can't be empty!</div>
                
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="saveEditBtn" class="btn btn-primary">
            Save
        </button>
        </div>
      </div>
    </div>
  </div>

  </div>
  <div class="card-body">
    <table id="user-table" class="display dataTable table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Sl</th>
                <th>category Name</th>
                <th>category Slug</th>
                @permitTo('UpdateCategory, DeleteCategory')
                <th>Acton</th>
                @endpermitTo
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
        order: [ ['0', 'desc'] ],
        ajax: '{{ route('admin.category.response') }}',
        columns: [
            {data: 'id', name: 'id', visible:false},
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'categoryName', name: 'categoryName'},
            {data:'categorySlug', name: 'categorySlug'},
            @permitTo('UpdateCategory, DeleteCategory')
            {data: 'action', name: 'action'}
            @endpermitTo
        ]
    });
} );
//******************************************************//



//Create data (Category)
$('#submit-btn').click(function(){
        
    if($('#categoryName').val() == ""){
        $('#categoryName').css({"border-color": "red"})
        $('.invalid-feedback').addClass('d-block');
        
    }else{
        $('#categoryName').css({"border-color": ""})
        $('.invalid-feedback').removeClass('d-block');
        $(this).html('<span class="spinner-border spinner-border-sm" role="status"></span> Save')
        $(this).addClass('disabled');

        var fromData = $('input[name=categoryName]').val();

        $.ajax({
            type: "post",
            url: '{{ route('admin.category.store') }}',
            data: {categoryName: fromData},
            success: function (response) {
                if(response['error']){
                    $('#categoryName').css({"border-color": "red"})
                    $('.invalid-feedback').html('Categroy already exist').addClass('d-block');
                }else{
                    $('#submit-btn').html('Done!');
                    $('#categoryName').val(null);
                    location.reload();
                }
            }
        });
    }  
})


//Edit data (Category)
$('body').on('click', '.btn-edit', function(){
    $('#editCategory').val('');
    $('#editCategory').css({"border-color": ""})
    $('.invalid-feedback').removeClass('d-block');
    var editId = $(this).attr('data-id');
    $.ajax({
        type: "GET",
        url: 'category/' + editId,
        data: "",
        success: function (response) {
           $('#edit-model').modal({show:true});
           $('#editCategory').val(response['data']['categoryName']);
        }
    });

    //on click save data to database
    $('#saveEditBtn').click(function(){
        var categoryName = $('#editCategory').val();

        if($('#editCategory').val() == ''){
            $('#editCategory').css({"border-color": "red"})
            $('.invalid-feedback').addClass('d-block');
        }else{
           $.ajax({
            type: "PUT",
            url: 'category/' + editId,
            data: {categoryName: categoryName},
            success: function (response) {
                $('#edit-model').modal({show:false});
                location.reload();
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
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
        var deleteId = $(this).attr('data-id');
        $.ajax({
            type: "DELETE",
            url: "category/" + deleteId,
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