@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h3 class="col-md-10 card-title">Category List</h3>
                <a href="{{ url('controll_panel/category/create') }}" class="col-md-2 btn btn-success">New Category</a>
            </div>
        </div>
            <!-- /.card-header -->
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                {{ Form::open(['onsubmit'=> "event.preventDefault()", 'class' => 'row', 'id' => 'search-frm']) }}
                    <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                    </div>
                    <div class="col-md-4 mb-3">
                    <button class="btn btn-default" id="search-btn" >Search</button>
                    </div>
                {{ Form::close() }}
            </div>
            <div class="row" id="ajax_content">
                <div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th>SL.</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter = 0; ?>
                            @foreach($categories as $category)
                            <?php $counter++ ?>
                            <tr role="row" class="odd">
                                <td class="dtr-control">{{ $counter }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->type }}</td>
                                <td class="sorting_1">{{ $category->description }}</td>
                                <td class="">
                                    <a href="{{ url('/controll_panel/category/'.$category->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
                                    <button class="deleteButton btn btn-danger" id="deleteCategory_{{ $category->id }}" data-rel="{{ $category->id }}" ><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection


@push('page_scripts')
<script>
window.onload = function(){
    
    $("#search-btn").on('click', function() {
        var _form = $('#search-frm');
        var _url = "{{ url('/controll_panel/category/search') }}"
        //console.log(_form.serialize());

        $.ajax({
            url: _url,
            type: 'POST',
            data: _form.serialize(),
            success: function (data){
                //console.log(data);
                $('#ajax_content').html(data);
            }
        });

    });

    $(".deleteButton").on('click', function(){
        //console.log('Hmm...');
        var id = $(this).attr("data-rel");
        var _url = '{{url("controll_panel/category/delete") }}';

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
                $.ajax({
                    url: _url,
                    type: 'POST',
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (data){
                        if(data.success){
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            );
                        }else{
                            Swal.fire(
                                'Error!',
                                'Category Not Deleted.',
                                'warning'
                            );
                        }
                    }
                });
            }
        });
    });
}
</script>
@endpush