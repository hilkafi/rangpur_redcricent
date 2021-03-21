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
            <h3 class="card-title">Enter Donation Info</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        {{ Form::open(['class' => 'form-horizontal', 'method' => 'post', 'enctype'=>'multipart/form-data' ,'url' => 'donate-us']) }}
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="mobile_banking_info" class="col-sm-2 col-form-label">Mobile Banking Info</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="mobile_banking_info" id="mobile_banking_info" placeholder="mobile_banking_info"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bank_details" class="col-sm-2 col-form-label">Bank Details</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="bank_details" id="bank_details" placeholder="bank_details"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Descripiton</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" id="description" placeholder="description"></textarea>
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
    
}
</script>
<script src="{{ mix('js/app.js') }}" defer></script>
@include('sweetalert::alert')

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>