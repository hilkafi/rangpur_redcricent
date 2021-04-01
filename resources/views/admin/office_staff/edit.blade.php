@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Update Office Staff Info</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        {{ Form::open(['class' => 'form-horizontal', 'method' => 'put', 'enctype'=>'multipart/form-data' ,'url' => 'controll_panel/office-staff/'.$data->id]) }}
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="registration_no" class="col-sm-2 col-form-label">Registration No.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="registration_no" id="registration_no" value="{{ $data->registration_no }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name_bangla" class="col-sm-2 col-form-label">Name (Bangla)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name_bangla" id="name_bangla" value="{{ $data->name_bangla }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="designation" id="designation" value="{{ $data->designation }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="joining_date" class="col-sm-2 col-form-label">Joining Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="joining_date" id="joining_date" value="{{ $data->joining_date }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contract_number" class="col-sm-2 col-form-label">Contract Number</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="contract_number" id="contract_number" value="{{ $data->contract_number }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="father_name" class="col-sm-2 col-form-label">Father Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="father_name" id="father_name" value="{{ $data->father_name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mother_name" class="col-sm-2 col-form-label">Mother Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mother_name" id="mother_name" value="{{ $data->mother_name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nid_or_birth_no" class="col-sm-2 col-form-label">NID or Birth Cetifies No.</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="nid_or_birth_no" id="nid_or_birth_no" value="{{ $data->nid_or_birth_no }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date_of_birth" class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="{{ $data->date_of_birth }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="blood_group" class="col-sm-2 col-form-label">Blood Group</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="blood_group" id="blood_group" value="{{ $data->blood_group }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            <option value="Male" @if($data->gender == 'Male'){{ 'selected' }}@endif>Male</option>
                            <option value="Female" @if($data->gender == 'Female'){{ 'selected' }}@endif>Female</option>
                            <option value="Other" @if($data->gender == 'other'){{ 'selected' }}@endif>Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="marital_status" class="col-sm-2 col-form-label">Marital Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="marital_status">
                            <option value="">Select Marital Status</option>
                            <option value="Single" @if($data->marital_status == 'Single'){{ 'selected' }}@endif>Single</option>
                            <option value="Married" @if($data->marital_status == 'Married'){{ 'selected' }}@endif>Married</option>
                            <option value="Other" @if($data->marital_status == 'Other'){{ 'selected' }}@endif>Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="educational_status" class="col-sm-2 col-form-label">Educational Status</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="educational_status" id="educational_status" value="{{ $data->educational_status }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="disrict_name" class="col-sm-2 col-form-label">District Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="disrict_name" id="disrict_name" value="{{ $data->disrict_name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="upazila_name" class="col-sm-2 col-form-label">Upazila Name</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="upazila_name">
                            <option value="">Select Upazila</option>
                            @foreach(upazilas() as $key => $value)
                            <option value="{{$key}}" @if($data->upazila_name == $key){{ 'selected' }}@endif>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="house_village_word_name" class="col-sm-2 col-form-label">House/Village/Word Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="house_village_word_name" id="house_village_word_name" value="{{ $data->house_village_word_name }}">
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

}
</script>
@endsection