@extends('layouts.front.app')
@section('content')
<section class="our_activity">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 20px;">Photo Gallery</h2>
        <div class="row">
            @foreach($photos as $photo)
            <div class="col-md-4 photo_section">
                <img src="{{ url('/images/'.$photo->img) }}" width="100%" />
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection