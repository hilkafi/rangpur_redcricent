@extends('layouts.front.app')
@section('content')
<section class="our_causes">
    <div class="container">
        <div class="category_title">
            <h2>{{ $category }}</h2>
        </div>
        <div class="row">
            @foreach($dataset as $data)
            <div class="col-md-4 category_single">
                <div class="item">
                    <img src="{{ url('images/'.$data->img) }}" alt="">
                    <div class="for_padding">
                        <h2>{{ $data->name }}</h2>
                        <p>{!! myTruncate($data->description, 100) !!}</p>
                        <h2 class="borderes"><a href="{{ url('single-project/'.$data->id) }}" class="read_more">READ MORE</a></h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection