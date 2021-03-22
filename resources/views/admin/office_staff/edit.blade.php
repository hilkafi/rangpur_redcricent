@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title"> Update a Staff</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
         {{ Form::open(['class' => 'form-horizontal', 'method' => 'PUT', 'enctype'=>'multipart/form-data' ,'url' => 'controll_panel/office-staff/'.$dataset->id]) }}
        
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$dataset->name}}" name="name" id="name" placeholder="Employee Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="img" id="img" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$dataset->role}}" name="role" id="role" placeholder="Employee Role">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$dataset->phone}}" name="contact" id="contact" placeholder="Employee Contact">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Blood Group</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$dataset->blood_group}}" name="blood_group" id="blood_group" placeholder="Blood Group">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$dataset->address}}" name="address" id="address" placeholder="Employee Address">
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