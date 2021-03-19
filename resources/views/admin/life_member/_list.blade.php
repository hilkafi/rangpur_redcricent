<table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
    <thead>
        <tr role="row">
            <th>SL.</th>
            <th>Name</th>
            <th>Excutive</th>
            <th>Role</th>
            <th>Occupation</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $counter = 0 ?>
    @foreach($dataset as $data)
        <?php $counter++ ?>
        <tr role="row" class="odd">
            <td class="dtr-control">{{ $counter }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ ($data->is_executive) ? 'Yes' : 'No' }}</td>
            <td>{{ $data->role }}</td>
            <td>{{ $data->occupation }}</td>
            <td>{{ $data->phone}}</td>
            <td>{{ $data->address}}</td>
            <td><img src="{{url('/images/'.$data->img)}}" width="80" height="80"></td>
            <td class="">
                <a href="{{ url('/controll_panel/life-member/'.$data->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
                <button class="deleteButton btn btn-danger" id="deletemember_{{ $data->id }}" data-rel="{{ $data->id }}" ><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        @endforeach

    



    </tbody>
</table>