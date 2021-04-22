@extends('layouts.front.app')
@section('facebook')
<meta property="og:title" content="{{ $data->title }}"/>
<meta property="og:image" content="{{ url('images/'.$data->img) }}"/>
@endsection
@section('content')
<section class="our_activity">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single_title_area">
                    <h2>{{ $data->title }}</h2>
                    <p>{{ $data->category->name }}</p>
                </div>
                <div class="single_image_area" style="">
                    <div class="col-md-8">
                        <img src="{{ url('images/'.$data->img) }}" width="100%" />
                    </div>
                </div>
                <div class="single_content_area">
                    <p>{!! $data->description !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection