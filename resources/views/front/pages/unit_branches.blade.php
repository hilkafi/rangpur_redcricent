@extends('layouts.front.app')
@section('content')
<section class="our_activity">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="category_title">
                    <h2>Unit/Branches</h2>
                </div>
                <div class="single_content_area">
                    <table class="table">
                        <tr>
                            <th>Unit/Branch Name</th>
                            <th>Address</th>
                            <th>Hot Line</th>
                        </tr>
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