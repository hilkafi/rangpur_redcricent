@extends('layouts.front.app')
@section('content')
<section class="our_activity">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="category_title">
                    <h2>{{ $data->title }}</h2>
                </div>
                <div class="single_image_area" style="item-align: center">
                    @if(!empty($data->img))
                    <img src="{{ url('images/'.$data->img) }}" width="400" />
                    @endif
                </div>
                <div class="single_content_area">
                    <p>{!! $data->description !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection