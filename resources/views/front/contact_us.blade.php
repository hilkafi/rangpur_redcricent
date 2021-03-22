@extends('layouts.front.app')
@section('content')
<section class="our_activity">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact_info_section">
                    <strong>Physical & Mailing Address</strong><br>
                    Bangladesh Red Crescent Society
                    National Headquarters
                    684-686, Red Crescent Sarak
                    Bara Maghbazar, Dhaka 1217
                    Postal Address: G.P.O. Box 579
                </div>
                <div class="contact_info_section">
                    <strong>Contact Information</strong><br>
                    Tel: (880) +88 02 48310188 / +88 02 48310189;
                    Fax: +88 02 9352303
                    Email: info@bdrcs.org
                </div>
                <div class="contact_info_section">
                    <strong>Media Enquiries</strong><br>
                    Kh. Enayetullah Akram Palash
                    E-mail: Enayet.Akram@bdrcs.org
                    Mobile: +88 01716 760599 / 01714 730901
                    FAX: +88 02 9352303
                </div>
                <div class="contact_info_section">
                    <strong>To Donate Us</strong><br>
                    Shahana Zafor
                    Email: Shahana.Zafor@bdrcs.org
                    Mobile: +88 01712916516
                </div>
                <div class="contact_info_section">
                    <strong>To Be a Volunteer</strong><br>
                    Imam Zafar Sikder
                    Email: zafar.sikder@bdrcs.org
                    Mobile: +88 01711 594 201
                </div>
            </div>
            <div class="col-md-6">
                <h2>Give Us Your Feedback</h2>
                {{ Form::open(['class' => 'form-horizontal', 'method' => 'post', 'url' => '/contact-us/save']) }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your E-mail">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Send</button>
                    </div>
                {{ Form::close() }}

                
                <div class="contact_info_section">
                    <strong>For Partnership</strong><br>
                    Razwan Nabin
                    Email: razwan.nabin@bdrcs.org
                    Mobile: +88 01712916516
                </div>
                <div class="contact_info_section">
                    <strong>To Be a Member</strong><br>
                    Ekram Elahi Chowdhury
                    Email: ekram.elahi@bdrcs.org
                    Mobile: +88 018 11 458517
                </div>
                <div class="contact_info_section">
                    <strong>Request for Training</strong><br>
                    Ekram Elahi Chowdhury
                    Email: ekram.elahi@bdrcs.org
                    Mobile: +88 018 11 458517
                </div>
            </div>
        </div>
    </div>
</section>
@endsection