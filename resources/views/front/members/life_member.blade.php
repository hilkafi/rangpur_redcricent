@extends('layouts.front.app')
@section('content')
<section class="our_activity">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="category_title">
                    <h2>Life Member</h2>
                </div>
                <div class="single_content_area">
                <div class="table-responsive ">
                    <table class="table">
                        <thead>
                            <tr role="row">
                                <th>SL.</th>
                                <th>Name</th>
                                <th>Father/Husband Name</th>
                                <th>Designation</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Joining Date</th>
                                <th>Blood Group</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $counter = 0; ?>
                            @foreach($dataset as $data)
                            <?php $counter++;
                                $image_url = !empty($data->img) ? url('images/'.$data->img) : url('img/no_image.jpg');
                            ?>
                            <tr role="row" class="odd">
                                <td class="dtr-control">{{ $counter }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->father_name }}</td>
                                <td>{{ $data->designation }}</td>
                                <td>{{ $data->house_village_word_name }}</td>
                                <td>{{ ($data->gender == 'Female') ? 'N/A' : $data->contract_number }}</td>
                                <td>{{ $data->email}}</td>
                                <td>{{ $data->joining_date}}</td>
                                <td>{{ $data->blood_group}}</td>
                                <td><img src="{{ $image_url }}" width="80px" height="80px"/></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection