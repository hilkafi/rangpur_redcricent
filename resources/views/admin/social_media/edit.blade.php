@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Update Social Media Info</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        {{ Form::open(['class' => 'form-horizontal', 'method' => 'put', 'url' => 'controll_panel/social_media/'.$data->id]) }}
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="link" id="link" value="{{ $data->link }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Update</button>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        {{ Form::close() }}
    </div>
</div>
@endsection