<table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
    <thead>
        <tr role="row">
            <th>SL.</th>
            <th>Name</th>
            <th>Unit</th>
            <th>Contract</th>
            <th>Institution</th>
            <th>Address</th>
            <th>Blood Group</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $counter = 0; ?>
        @foreach($dataset as $data)
        <?php $counter++ ?>
        <tr role="row" class="odd">
            <td class="dtr-control">{{ $counter }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->unit_type }}</td>
            <td>{{ $data->contract_number }}</td>
            <td>{{ $data->institute_name }}</td>
            
            <td>{{ $data->house_village_word_name.', '.$data->upazila_name.', '.$data->district_name}}</td>
            <td>{{ $data->blood_group}}</td>
            <td><img src="{{url('/images/'.$data->img)}}" width="80" height="80"></td>
            <td class="">
                <button class="deleteButton btn btn-danger" id="deletevolunteer_{{ $data->id }}" data-rel="{{ $data->id }}" ><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>