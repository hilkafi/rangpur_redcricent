<div class="table-responsive">
<table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
    <thead>
        <tr role="row">
            <th>SL.</th>
            <th>Speaker Name</th>
            <th>Role</th>
            <th>Speech</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $counter = 0; ?>
        @foreach($dataset as $data)
        <?php $counter++;
            $url = !empty($data->img) ? url('/images/'.$data->img) : url('/img/no_image.jpg');
        ?>
        <tr role="row" class="odd">
            <td>{{ $counter }}</td>
            <td>{{ $data->speaker_name }}</td>
            <td>{{ $data->speaker_role }}</td>
            <td>{!! myTruncate($data->speech, 50) !!}</td>
            <td><img src="{{ $url }}" width="80" height="80"></td>
            <td class="">
                <a href="{{ url('/controll_panel/speech/'.$data->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
                <button class="deleteButton btn btn-danger" id="deletevolunteer_{{ $data->id }}" data-rel="{{ $data->id }}" ><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>