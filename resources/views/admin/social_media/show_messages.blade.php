@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h3 class="col-md-10 card-title">Message From {{ $data->name }}</h3>
            </div>
        </div>
            <!-- /.card-header -->
        <div class="card-body">
            <div class="row" id="ajax_content">
                    
                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <tr role="row">
                            <th>Phone</th>
                            <td>{{ $data->mobile }}</td>
                        </tr>
                        <tr role="row">
                            <th>Email</th>
                            <td>{{ $data->email }}</td>
                        </tr>
                        <tr role="row">
                            <th>Messages</th>
                            <td>{{ $data->message }}</td>
                        </tr>
                    
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