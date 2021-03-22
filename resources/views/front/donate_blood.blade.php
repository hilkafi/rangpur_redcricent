@extends('layouts.front.app')
@section('content')
<section class="our_activity">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single_title_area">
                    <h2>Donate Blood</h2>
                    
                    <p>Across Bangladesh, every day there remains an urgent need for all types of blood groups. Especially donors with rare blood groups such as O Negative, B Negative and A Negative are in high demand. Your timely response is essential to the supply of healthy blood for the massive daily demand we face.</p>

                    <p>Your donation can save the lives of many, make a difference or simply make you feel great about your contribution to humanity. Whatever your reason, whatever your motivation we welcome you to learn more about eligibility and benefits of donating blood with a trusted organization like us.</p>

                    <p>Find out more about local blood drives and BDRCS campaigns near you. Donate blood, save lives.</p>
                    <strong>Hotline: +8801811458524 (9.00 AM to 5.00 PM)</strong>
                </div>
                <div class="single_content_area">
                    <h2 style="margin-bottom: 20px">For Donation of Blood</h2>
                    <table class="table">
                        @foreach($dataset as $data)
                        <tr>
                            <th>{{ $data->unit_name }}</th>
                            <td>{{ $data->address }}</td>
                            <th>{{ $data->hot_line }}</th>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection