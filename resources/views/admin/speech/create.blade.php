@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Enter Speech Info</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        {{ Form::open(['class' => 'form-horizontal', 'method' => 'post', 'enctype'=>'multipart/form-data' ,'url' => 'controll_panel/speech']) }}
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="speaker_name" class="col-sm-2 col-form-label">Speaker Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="speaker_name" id="speaker_name" placeholder="Speaker Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="img" id="img" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="speaker_role" class="col-sm-2 col-form-label">Speaker Role</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="speaker_role" id="speaker_role" placeholder="Speaker Role">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="video" class="col-sm-2 col-form-label">Video Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="video" id="video" placeholder="Video Link">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="speech" class="col-sm-2 col-form-label">Speech</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="speech" id="speech" placeholder="Speech"></textarea>
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
        $('#subcategory').html(result);
        }

    });
    });
}
</script>
@endsection