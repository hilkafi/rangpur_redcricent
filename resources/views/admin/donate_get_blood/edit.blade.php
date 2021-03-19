@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Update Info</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        {{ Form::open(['class' => 'form-horizontal', 'method' => 'put', 'url' => 'controll_panel/donate_get_blood/'.$data->id]) }}
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="unit_name" class="col-sm-2 col-form-label">Unit Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="unit_name" id="unit_name" value="{{ $data->unit_name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hot_line" class="col-sm-2 col-form-label">Hot Line</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="hot_line" id="hot_line" value="{{ $data->hot_line }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="address" id="address">{{ $data->address }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Create</button>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        {{ Form::close() }}
    </div>
</div>
@endsection