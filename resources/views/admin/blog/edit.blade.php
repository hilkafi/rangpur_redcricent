@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Update a Post</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        {{ Form::open(['class' => 'form-horizontal', 'method' => 'put', 'enctype'=>'multipart/form-data' ,'url' => 'controll_panel/blog/'.$blog->id]) }}
        
            <div class="card-body">
                <div class="form-group row">
                    <label for="Title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$blog->title}}" name="title" id="title" placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control"  name="img" id="img" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="video_link" class="col-sm-2 col-form-label">Video Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="video_link" id="video_link" value="{{ $blog->video_link }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <select class="form-control"  name="category" id="category_id">
                            <option value="{{$blog->category_id}}">{{$data->category_name($blog->category_id)}}</option>
                            @foreach($cat as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Subategory" class="col-sm-2 col-form-label">SubCategory</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="subcategory" id="subcategory">
                            <option value="{{$blog->sub_category_id}}">{{$data->subcategory_name($blog->sub_category_id)}}</option>
 
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="date" id="date" value="{{$blog->date}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        
                    <textarea class="form-control" name="description" id="description">{{ $blog->description }}</textarea>
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

@push('page_scripts')
<script>
window.onload = function(){
    tinymce.init({
     selector: 'textarea#description'
   });

 $('#category_id').on('change',function(){
    var category_id = $(this).val();
    var _url = "{{URL::to('/controll_panel/blog/list_subcategory')}}";
    $.ajax({
        url: _url,
        method:"POST",
        data:{ category : category_id, _token : "{{ csrf_token() }}" },
        success: function(result)
        {
        $('#subcategory').html(result);
        }

    });
    });
}
</script>
@endpush