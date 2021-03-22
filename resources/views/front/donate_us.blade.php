@extends('layouts.front.app')
@section('content')
<section class="our_activity">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single_title_area">
                    <h2>Donate Us</h2>
                    <p>{{ $data->intro }}</p>
                </div>
                <div class="single_image_area">
                    <h2>Donate through our bKash number</h2>
                    <img src="{{ url('images/'.$data->img) }}" width="100%" />
                </div>
                <div class="single_content_area">
                    <h2>Donate to our bank account</h2>
                    <p>{{ $data->bank_details }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection