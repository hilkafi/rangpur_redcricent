@extends('layouts.front.app')
@section('content')
<section class="our_activity">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="category_title">
                    <h2>Our Partners</h2>
                </div>
                <div class="single_content_area">
                    <h2 style="font-size: 25px; color:red; font-weight: bold; margin-bottom: 50px; margin-top: 50px;">Movement Partners</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ url('https://www.icrc.org/en') }}"  target="_blank"><img src="{{ url('img/partners/icrc.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://media.ifrc.org/ifrc/') }}"  target="_blank"><img src="{{ url('img/partners/ifrc.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.redcross.org/') }}"  target="_blank"><img src="{{ url('img/partners/american_redcross.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.redcross.org.uk/') }}"  target="_blank"><img src="{{ url('img/partners/british_redcross.png')}}" width="100%" /></a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 40px;">
                        <div class="col-md-3">
                            <a href="{{ url('https://www.redcross.ca/') }}"  target="_blank"><img src="{{ url('img/partners/canadian_redcross.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://en.rodekors.dk/') }}"  target="_blank"><img src="{{ url('img/partners/danish_redcross.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.drk.de/en/') }}"  target="_blank"><img src="{{ url('img/partners/german_redcross.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.cri.it/home') }}"  target="_blank"><img src="{{ url('img/partners/croce_rossa_italian.png')}}" width="100%" /></a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 40px;">
                        <div class="col-md-3">
                            <a href="{{ url('http://www.jrc.or.jp/english/') }}"  target="_blank"><img src="{{ url('img/partners/japanese_red_cross.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.koica.go.kr/sites/koica_kr/index.do') }}"  target="_blank"><img src="{{ url('img/partners/koica.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.krcs.org.kw/') }}"  target="_blank"><img src="{{ url('img/partners/krcs.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.qrcs.org.qa/') }}"  target="_blank"><img src="{{ url('img/partners/quatar_red_cross.png')}}" width="100%" /></a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 40px;">
                        <div class="col-md-3">
                            <a href="{{ url('https://www.rodakorset.se/') }}"  target="_blank"><img src="{{ url('img/partners/swedish_red_cross.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.redcross.ch/') }}"  target="_blank"><img src="{{ url('img/partners/swiss_red_cross.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.kizilay.org.tr/') }}"  target="_blank"><img src="{{ url('img/partners/kizilay.png')}}" width="100%" /></a>
                        </div>
                    </div>
                </div>
                
                <div class="single_content_area">
                    <h2 style="font-size: 25px; color:red; font-weight: bold; margin-bottom: 50px; margin-top: 50px;">Collaborative Partners</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ url('http://www.mofa.go.kr/eng/index.do') }}"><img src="{{ url('img/partners/ministry_of_foreign_affairs_korea.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.unhcr.org/') }}"  target="_blank"><img src="{{ url('img/partners/unhcr.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.wfp.org/') }}"  target="_blank"><img src="{{ url('img/partners/wfp.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.2030wrg.org/') }}"  target="_blank"><img src="{{ url('img/partners/water_resource_group.png')}}" width="100%" /></a>
                        </div>
                    </div>
                </div>                
                <div class="single_content_area">
                    <h2 style="font-size: 25px; color:red; font-weight: bold; margin-bottom: 50px; margin-top: 50px;">Corporate Partners</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ url('https://www.bidyanondo.org/') }}"  target="_blank"><img src="{{ url('img/partners/biddanondo.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.grameenphone.com/') }}"  target="_blank"><img src="{{ url('img/partners/grameenphone.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.hsbc.com.bd/1/2/') }}"  target="_blank"><img src="{{ url('img/partners/hsbc.png')}}" width="100%" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('https://www.pranfoods.net/') }}"  target="_blank"><img src="{{ url('img/partners/water_resource_group.png')}}" width="100%" /></a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 40px;">
                        <div class="col-md-3">
                            <a href="{{ url('https://www.unilever.com.bd/') }}"  target="_blank"><img src="{{ url('img/partners/uniliver.png')}}" width="100%" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection