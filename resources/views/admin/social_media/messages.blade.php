@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h3 class="col-md-10 card-title">Message List</h3>
            </div>
        </div>
            <!-- /.card-header -->
        <div class="card-body">
            <div class="row" id="ajax_content">
                    
                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                    <thead>
                        <tr role="row">
                            <th>SL.</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 0; ?>
                        @foreach($dataset as $data)
                        <?php $counter++ ?>
                        <tr role="row" class="odd">
                            <td>{{ $counter }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ Str::limit($data->message, 50) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
        var _url = "{{ url('/controll_panel/social_media/search') }}"
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
        var _url = '{{url("controll_panel/social_media/delete") }}';

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
                                'Your file has been deleted.',
                                'success'
                            );
                        }else{
                            Swal.fire(
                                'Error!',
                                'Data Not Deleted.',
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