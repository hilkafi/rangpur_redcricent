@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h3 class="col-md-10 card-title">Donation Info</h3>
                <a href="{{ url('controll_panel/donate_us/create') }}" class="col-md-2 btn btn-success">Add Donation Info</a>
                <a href="{{ url('controll_panel/donate-us-list') }}" class="col-md-2 btn btn-success">Pendings</a>
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
                                <a href="{{ url('/controll_panel/donate_us/'.$data->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
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

}
</script>
@endpush