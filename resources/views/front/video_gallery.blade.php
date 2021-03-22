@extends('layouts.front.app')
@section('content')
<section class="our_activity">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 20px;">Video Gallery</h2>
        <div class="row">
            @foreach($videos as $video)
            <div class="col-md-4 photo_section">
            <iframe width="100%" height="315" src="{{$video->video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @endforeach

            @foreach($message_videos as $video)
            <div class="col-md-4 photo_section">
            <iframe width="100%" height="315" src="{{$video->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection