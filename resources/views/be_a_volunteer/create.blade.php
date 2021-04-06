@extends('layouts.front.app')
@section('content')
<section class="our_activity">
    <div class="container">
        <div class="row">
            <h2 style="margin-bottom: 20px">Become A Volunteer</h2>
            <div class="col-md-12">
            {{ Form::open(['class' => 'form-horizontal', 'method' => 'post', 'enctype'=>'multipart/form-data' ,'url' => '/volunteer-form']) }}
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Volunteer Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="registration_no" class="col-sm-2 col-form-label">Registration No.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="registration_no" id="registration_no" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name_bangla" class="col-sm-2 col-form-label">Name (Bangla)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name_bangla" id="name_bangla">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="joining_date" class="col-sm-2 col-form-label">Joining Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="joining_date" id="joining_date">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type_of_volunteer" class="col-sm-2 col-form-label">Type Of Volunteer</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="type_of_volunteer" id="type_of_volunteer">
                            <option value="">Select Volunteer Type</option>
                            <option value="new_member">New Member</option>
                            <option value="active_running_member">Active/Running Member</option>
                            <option value="older_member">Older Member</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contract_number" class="col-sm-2 col-form-label">Contact Number</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="contract_number" id="contract_number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="father_name" class="col-sm-2 col-form-label">Father Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="father_name" id="father_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mother_name" class="col-sm-2 col-form-label">Mother Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mother_name" id="mother_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="father_occupation" class="col-sm-2 col-form-label">Father Occupation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="father_occupation" id="father_occupation">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mother_occupation" class="col-sm-2 col-form-label">Mother Occupation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mother_occupation" id="mother_occupation">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="parent_contract_number" class="col-sm-2 col-form-label">Parent Contact Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="parent_contract_number" id="parent_contract_number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nid_or_birth_no" class="col-sm-2 col-form-label">NID or Birth Cetifies No.</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="nid_or_birth_no" id="nid_or_birth_no">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date_of_birth" class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="interested_in_blood_donation" class="col-sm-2 col-form-label">Are You Interested In Blood Donation</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="interested_in_blood_donation">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="blood_group" class="col-sm-2 col-form-label">Blood Group</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="blood_group" id="blood_group">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="marital_status" class="col-sm-2 col-form-label">Marital Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="marital_status">
                            <option value="">Select Marital Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="institute_name" class="col-sm-2 col-form-label">Name of Institution</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="institute_name" id="institute_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="educational_status" class="col-sm-2 col-form-label">Educational Status</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="educational_status" id="educational_status">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="disrict_name" class="col-sm-2 col-form-label">District Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="disrict_name" id="disrict_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="upazila_name" class="col-sm-2 col-form-label">Upazila Name</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="upazila_name">
                            <option value="">Select Upazila</option>
                            @foreach(upazilas() as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="house_village_word_name" class="col-sm-2 col-form-label">House/Village/Word Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="house_village_word_name" id="house_village_word_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="img" id="img" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="any_time_service" class="col-sm-2 col-form-label">Voluteer Service at Any Time</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="any_time_service" id="any_time_service">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reason_for_joining" class="col-sm-2 col-form-label">Reason For Joining</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="reason_for_joining" id="reason_for_joining" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="unit_type" class="col-sm-2 col-form-label">Unit Type</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="unit_type" id="unit_type">
                            <option value="">Select</option>
                            <option value="{{ RCY }}">RCY</option>
                            <option value="{{ UPAZILA }}">Upazila</option>
                        </select>
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
    </div>
</section>
@endsection
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
<script src="{{ mix('js/app.js') }}" defer></script>
@include('sweetalert::alert')

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>