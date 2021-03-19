@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Update Project Info</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        {{ Form::open(['class' => 'form-horizontal', 'method' => 'put', 'enctype'=>'multipart/form-data' ,'url' => 'controll_panel/project/'.$data->id]) }}
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($data->category_id == $category->id){{ 'selected' }}@endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sub_category_id" class="col-sm-2 col-form-label">Sub-Category</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="sub_category_id" id="sub_category_id">
                            <option value="">{{ !empty($data->sub_category_id) ? $data->sub_category->name : 'N/A' }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="start_date" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="start_date" id="start_date" value="{{ $data->start_date }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="end_date" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="end_date" id="end_date" value="{{ $data->end_date }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="duration" id="duration" value="{{ $data->duration }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="img" id="img" >
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
<script>
window.onload = function(){

 $('#category_id').on('change',function(){
    var category_id = $(this).val();
    var _url = "{{URL::to('/controll_panel/blog/list_subcategory')}}";
    $.ajax({
        url: _url,
        method:"POST",
        data:{ category : category_id, _token : "{{ csrf_token() }}" },
        success: function(result)
        {
        $('#sub_category_id').html(result);
        }

    });
    });
}
</script>
@endsection