@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Update Volunteer Info.</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        {{ Form::open(['class' => 'form-horizontal', 'method' => 'put', 'enctype'=>'multipart/form-data' ,'url' => 'controll_panel/volunteer/'.$data->id]) }}
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->name}}" name="name" id="name" placeholder="Volunteer Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="img" id="img" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Unit" class="col-sm-2 col-form-label">Unit</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="unit" id="unit">
                            <option value="{{$data->unit_type}}"}}>{{$data->unit_type}}</option>
                            <option value="zila">Zila</option>
                            <option value="upzila">Upazila</option>
                            <option value="city_corporation">City Corporation</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Unit Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->unit_name}}" name="unit_name" id="unit_name" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Unit" class="col-sm-2 col-form-label">Is Executive?</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="is_executive" id="is_executive">
                            <option value="{{$data->is_executive}}">{{$data->is_executive}} </option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->role}}" name="role" id="role" placeholder="Volunteer Role">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Occupation" class="col-sm-2 col-form-label">Occupation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->occupation}}" name="occupation" id="occupation" placeholder="Volunteer's Profession">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Institution</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->instituiton}}" name="institution" id="institution" placeholder="">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->phone}}" name="contact" id="contact" placeholder="Employee Contact">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Blood Group</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->blood_group}}" name="blood_group" id="blood_group" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Last Date of Blood Donation </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" value="{{$data->blood_donation}}" name="blood_date" id="blood_date" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->address}}" name="address" id="address" placeholder="Employee Address">
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