@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h3 class="col-md-10 card-title">Donation Info(Pendings)</h3>
                <a href="{{ url('controll_panel/donate_us/create') }}" class="col-md-2 btn btn-success">Add Donation Info</a>
            </div>
        </div>
            <!-- /.card-header -->
        <div class="card-body">
            <div class="row" id="ajax_content">
                    
                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                    <thead>
                        <tr role="row">
                            <th>SL.</th>
                            <th>Mobile Banking Info</th>
                            <th>Bank Details</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 0; ?>
                        @foreach($dataset as $data)
                        <?php $counter++;
                            $url = !empty($data->img) ? url('/images/'.$data->img) : url('/img/no_image.jpg');
                        ?>
                        <tr role="row" class="odd">
                            <td>{{ $counter }}</td>
                            <td>{{ $data->mobile_banking_info }}</td>
                            <td>{{ $data->bank_details }}</td>
                            <td>{{ Str::limit($data->description, 50) }}</td>
                            <td><img src="{{ $url }}" width="80" height="80"></td>
                            <td class="">
                            <button class="deleteButton btn btn-danger" id="approveInfo_{{ $data->id }}" data-rel="{{ $data->id }}" ><i class="fas fa-approved">Approve</i></button>

                            </td>
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
        var _url = "{{ url('') }}"
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
        var _url = '{{url("controll_panel/donate-us-approve") }}';

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, approve it!'
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
                                'Approved!',
                                'Your info has been added.',
                                'success'
                            );
                        }else{
                            Swal.fire(
                                'Error!',
                                'Info addition error.',
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