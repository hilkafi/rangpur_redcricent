@extends('layouts.front.app')
@section('content')
<section class="our_cuauses" id ='reports'>
    <h2>Publications</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="our_cuauses_single owl-carousel owl-theme">
                    @foreach($publications as $publication)
                    <?php $img_url = !empty($publication->img) ? url('images/'.$publication->img) : url('img/no_image.jpg') ?>
                    <div class="item">
                        <img src="{{ $img_url }}" alt="">
                        <div class="for_padding">
                            <h2>{{$publication->title}}</h2>
                            <p>{{ Str::limit($publication->description, 100) }}</p>
                            <h2 class="borderes"><a href="{{ url('single-blog/'.$publication->id) }}">READ MORE</a></h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection