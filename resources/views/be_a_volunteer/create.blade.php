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
                    <label for="Image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="img" id="img" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Unit" class="col-sm-2 col-form-label">Unit</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="unit" id="unit">
                            <option value="">Select Unit</option>
                            <option value="zila">Zila</option>
                            <option value="upzila">Upazila</option>
                            <option value="city_corporation">City Corporation</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Unit Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="unit_name" id="unit_name" placeholder="Unit Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="role" id="role" placeholder="Volunteer Role">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Occupation" class="col-sm-2 col-form-label">Occupation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Volunteer's Profession">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Occupation" class="col-sm-2 col-form-label">Institution</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="institution" id="instituiton" placeholder="Volunteer's Profession">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="contact" id="contact" placeholder=" Contact">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Blood Group</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="blood_group" id="blood_group" placeholder="Blood Group">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Employee Address">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button class="btn btn-danger">Save</button>
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