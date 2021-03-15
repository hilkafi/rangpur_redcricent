@extends('layouts.front.app')
@section('content')
<section class="carosal-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="client owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ url('img/carosal-bg.jpg') }}" />
                    </div>
                    <div class="item">
                        <img src="{{ url('img/help-charity.jpg') }}" />
                    </div>
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_one.jpg') }}" />
                    </div>
                    <div class="item">
                        <img src="{{ url('img/help-charity.jpg') }}" />
                    </div>
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_one.jpg') }}" />
                    </div>
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

<section class="our_cuauses">
    <h2>News And Stories</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="our_cuauses_single owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_one.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>

                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_two.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_three.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_three.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_cuauses">
    <h2>Reports</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="our_cuauses_single owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_one.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>

                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_two.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_three.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_three.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
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
                        <div class="item">
                            <div class="col-md-6">
                                <img src="{{ url('img/donors_featured_one.jpg') }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3>Messages From Kenneth J. Garnica</h3>
                                <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6">
                                <img src="{{ url('img/donors_featured_one.jpg') }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3>Messages From Kenneth J. Garnica</h3>
                                <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6">
                                <img src="{{ url('img/donors_featured_one.jpg') }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3>Messages From Kenneth J. Garnica</h3>
                                <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6">
                                <img src="{{ url('img/donors_featured_one.jpg') }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3>Messages From Kenneth J. Garnica</h3>
                                <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our_cuauses">
    <h2>Our Focus</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="our_cuauses_single owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_one.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>

                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_two.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_three.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ url('img/our_cuauses_three.jpg') }}" alt="">
                        <div class="for_padding">
                            <h2>FUTURES FOR CHILDREN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                            <h2 class="borderes"><a href="#">READ MORE</a></h2>
                        </div>
                    </div>
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
                    <h2><a href="#">DONATE US</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="single-Promo">
                    <div class="promo-icon">
                        <i class="material-icons">bloodtype</i>
                    </div>
                    <h2><a href="#">DONATE/GET BLOOD</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="single-Promo">
                    <div class="promo-icon">
                        <i class="material-icons">people</i>
                    </div>
                    <h2><a href="#">BE A MEMBER</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="single-Promo">
                    <div class="promo-icon">
                        <i class="material-icons">volunteer_activism</i>
                    </div>
                    <h2><a href="#">BE A VOLUNTEER</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
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

<section class="events_section_area">
    <h2>GALLERY & PUBLICATIONS</h2>
    <div class="container" style="margin-bottom: 100px;">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="events_single">
                    <h3>PHOTO GALLERY</h3>
                    <div class="clear"></div>
                    <img src="{{ url('img/events_single_one.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="events_single">
                    <h3>VIDEO GALLERY</h3>
                    <img src="{{ url('img/events_single_two.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="events_single">
                    <h3>PUBLICATIONS</h3>
                    <img src="{{ url('img/events_single_three.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection