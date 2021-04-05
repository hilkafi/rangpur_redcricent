@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h3 class="col-md-10 card-title">Page List</h3>
                <a href="{{ url('controll_panel/page/create') }}" class="col-md-2 btn btn-success">Add Page</a>
            </div>
        </div>
            <!-- /.card-header -->
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                {{ Form::open(['onsubmit'=> "event.preventDefault()", 'class' => 'row', 'id' => 'search-frm']) }}
                    <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Search by Name">
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $counter = 0; ?>
                            @foreach($dataset as $data)
                            <?php $counter++ ?>
                            <tr role="row" class="odd">
                                <td class="dtr-control">{{ $counter }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{!! myTruncate($data->description, 100) !!}</td>
                                <td><img src="{{ url('/img/no_image.jpg') }}" width="80" height="80"></td>
                                <td class="">
                                    <a href="{{ url('/controll_panel/page/'.$data->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
                                    <button class="deleteButton btn btn-danger" id="deletePost_{{ $data->id }}" data-rel="{{ $data->id }}" ><i class="fas fa-trash"></i></button>
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
        var _url = "{{ url('/controll_panel/page/search') }}"
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
        var _url = '{{url("controll_panel/page/delete") }}';

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
                            $('#search-btn').trigger('click');
                            Swal.fire(
                                'Deleted!',
                                'Your Page has been deleted.',
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