@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Update Page Info</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        {{ Form::open(['class' => 'form-horizontal', 'method' => 'put', 'enctype'=>'multipart/form-data' ,'url' => 'controll_panel/page/'.$data->id]) }}
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Page Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="title"  value="{{ $data->title }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="img" id="img" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="video_link" class="col-sm-2 col-form-label">Video Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="video_link" id="video_link" value="{{ $data->video_link }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" id="description" placeholder="Description">{{ $data->description }}</textarea>
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
@endsection
@push('page_scripts')
<script>
window.onload = function(){
    tinymce.init({
     selector: 'textarea#description'
   });
}
</script>

@endpush