@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Enter Donation Info</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        {{ Form::open(['class' => 'form-horizontal', 'method' => 'post', 'enctype'=>'multipart/form-data' ,'url' => 'controll_panel/donate_us']) }}
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="intro" class="col-sm-2 col-form-label">Intro</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="intro" id="intro" placeholder="Intro"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mobile_banking_info" class="col-sm-2 col-form-label">Mobile Banking Info</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="mobile_banking_info" id="mobile_banking_info" placeholder="Mobile Banking Info"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bank_details" class="col-sm-2 col-form-label">Bank Details</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="bank_details" id="bank_details" placeholder="Bank Details"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="img" id="img" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Save</button>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        {{ Form::close() }}
    </div>
</div>
<script>
window.onload = function(){
    
}
</script>
@endsection