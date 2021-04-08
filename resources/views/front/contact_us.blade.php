@extends('layouts.front.app')
@section('content')
<section class="our_activity">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact_info_section">
                    {!! $data->description !!}
                </div>
            </div>
            <div class="col-md-6">
                <h2>Give Us Your Feedback</h2>
                {{ Form::open(['class' => 'form-horizontal', 'method' => 'post', 'url' => '/contact-us/save']) }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your E-mail">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Number">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Send</button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
@endsection