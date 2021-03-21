<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @yield('third_party_stylesheets')

    @stack('page_css')
</head>


<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Be a Life Member</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        {{ Form::open(['class' => 'form-horizontal', 'method' => 'post', 'enctype'=>'multipart/form-data' ,'url' => 'be-a-member']) }}
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder=" Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="img" id="img" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Execuitve Committee" class="col-sm-2 col-form-label">Is in Executive Committee?</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="ex_cmt" id="ex_cmt">
                            <option value="">Select Option</option>
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                            
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="role" id="role" placeholder=" Role">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Occupation" class="col-sm-2 col-form-label">Occupation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Member's Profession">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Member's Address">
                    </div>
                </div>




                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Add</button>
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
<script src="{{ mix('js/app.js') }}" defer></script>
@include('sweetalert::alert')

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>