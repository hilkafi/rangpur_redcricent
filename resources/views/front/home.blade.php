@extends('layouts.front.app')
@section('content')
<section class="carosal-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="client owl-carousel owl-theme">
                    @foreach($images as $image)
                    <div class="item">
                        <img src="{{ url('images/'.$image->img) }}" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                <div class="block">
                    <p><i class="material-icons">favorite</i></p>
                    <p class="counter-wrapper"><span class="fb"></span></p>
                    <p class="text-block">CAUSES</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                <div class="block">
                    <p><i class="material-icons">language</i></p>
                    <p class="counter-wrapper"><span class="code"></span></p>
                    <p class="text-block">PLACES</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                <div class="block">
                    <p><i class="material-icons">person_add</i></p>
                    <p class="counter-wrapper"><span class="bike"></span></p>
                    <p class="text-block">VOLUNTEERS</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                <div class="block">
                    <p><i class="material-icons">people</i></p>
                    <p class="counter-wrapper"><span class="coffee"></span></p>
                    <p class="text-block">SAVED</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="our_cuauses" id='news'>
    <h2>News And Stories</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="our_cuauses_single owl-carousel owl-theme">
                    @foreach($news_stories as $ns)
                    <?php $img_url = !empty($ns->img) ? url('images/'.$ns->img) : url('img/no_image.jpg') ?>
                    <div class="item">
                        <img src="{{ $img_url }}" alt="">
                        <div class="for_padding">
                            <h2>{{$ns->title}}</h2>
                            <p>{{ Str::limit($ns->description, 50) }}</p>

                            <h2 class="borderes"><a href="{{ url('single-blog/'.$ns->id) }}">READ MORE</a></h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_cuauses" id ='reports'>
    <h2>Reports</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="our_cuauses_single owl-carousel owl-theme">
                    @foreach($reports as $report)
                    <?php $img_url = !empty($report->img) ? url('images/'.$report->img) : url('img/no_image.jpg') ?>
                    <div class="item">
                        <img src="{{ $img_url }}" alt="">
                        <div class="for_padding">
                            <h2>{{$report->title}}</h2>
                            <p>{{ Str::limit($report->description, 100) }}</p>
                            <h2 class="borderes"><a href="{{ url('single-blog/'.$report->id) }}">READ MORE</a></h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="donors">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="donors_image">
                    <h2>Messages</h2>
                    <div class="donors_featured owl-carousel owl-theme">
                        @foreach($speech as $sp)
                        <?php $image_url = !empty($sp->img) ? url('images/'.$sp->img) : url('img/no_image.jpg');  ?>
                        <div class="item">
                            <div class="col-md-6">
                                @if(!empty($sp->video))
                                <iframe width="560" height="315" src="{{$sp->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                @else
                                <img src="{{ $image_url }}"  width="500" height="400" />
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h3>Messages From {{$sp->speaker_name}}</h3>
                                <p>{{ $sp->speech }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our_cuauses" id ='focus'>
    <h2>Our Focus</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="our_cuauses_single owl-carousel owl-theme">
                    @foreach($focuses as $focus)
                    <?php $img_url = !empty($focus->img) ? url('images/'.$focus->img) : url('img/no_image.jpg') ?>
                    <div class="item">
                        <img src="{{ $img_url }}" alt="">
                        <div class="for_padding">
                            <h2>{{ $focus->title }}</h2>
                            <p>{{ Str::limit($focus->description, 100) }}</p>
                            <h2 class="borderes"><a href="{{ url('single-blog/'.$focus->id) }}">READ MORE</a></h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_activity">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="single-Promo">
                    <div class="promo-icon">
                        <i class="material-icons">local_hospital</i>
                    </div>
                    <h2><a href="{{ url('/donate-us') }}">DONATE US</a></h2>
                    <p>Your thoughtful donation of any amount would prevent and reduce human sufferings and save lives of the most vulnerable and marginalized groups.</p>

                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="single-Promo">
                    <div class="promo-icon">
                        <i class="material-icons">bloodtype</i>
                    </div>
                    <h2><a href="{{ url('/donate-blood') }}">DONATE/GET BLOOD</a></h2>
                    <p>Giving blood is a simple thing to do, but it can make a big difference in the lives of others. Make a life-saving blood donation appointment or request for Blood. </p>

                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="single-Promo">
                    <div class="promo-icon">
                        <i class="material-icons">people</i>
                    </div>
                    <h2><a href="{{ url('/member/create') }}">BE A MEMBER</a></h2>
                    <p>Membership of Bangladesh Red Crescent Society is an easy and a fluent way to support valuable work done by the society and to speak out for humane values.</p>

                </div>
            </div>
            <div class="col-md-3 col-xs-12" id = 'vol'>
                <div class="single-Promo">
                    <div class="promo-icon">
                        <i class="material-icons">volunteer_activism</i>
                    </div>
                    <h2><a href="{{ url('/volunteer-form/create') }}">BE A VOLUNTEER</a></h2>
                    <p>Volunteers are  the backbone of our Movement. You can make a difference by volunteering with Bangladesh Red Crescent Society in tackling humanitarian challenges.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="letast_news">
    <h2>Social Media</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single_news">
                    <img src="{{ url('img/news_images_1.jpg') }}" alt="">
                    <div class="texts">
                        <p class="date"><a href="#">30 May, 2017</a></p>
                        <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                        <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h3><a href="#">READ MORE</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single_news">
                    <img src="{{ url('img/news_images_2.jpg') }}" alt="">
                    <div class="texts">
                        <p class="date"><a href="#">30 May, 2017</a></p>
                        <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                        <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h3><a href="#">READ MORE</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single_news">
                    <img src="{{ url('img/news_images_3.jpg') }}" alt="">
                    <div class="texts">
                        <p class="date"><a href="#">30 May, 2017</a></p>
                        <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                        <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h3><a href="#">READ MORE</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="events_section_area" id='gandp'>
    <h2>GALLERY & PUBLICATIONS</h2>
    <div class="container" style="margin-bottom: 100px;">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <a href="{{ url('/photo-gallery') }}"> 
                    <div class="events_single">
                        <h3>PHOTO GALLERY</h3>
                        <div class="clear"></div>
                        <img src="{{ url('img/events_single_one.jpg') }}" alt="">
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-xs-12">
                <a href="{{ url('/video-gallery') }}"> 
                    <div class="events_single">
                        <h3>VIDEO GALLERY</h3>
                        <img src="{{ url('img/events_single_two.jpg') }}" alt="">
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-xs-12">
                <a href="{{ url('/publication') }}"> 
                    <div class="events_single">
                        <h3>PUBLICATIONS</h3>
                        <img src="{{ url('img/events_single_three.jpg') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection