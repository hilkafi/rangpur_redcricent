<table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
    <thead>
        <tr role="row">
            <th>SL.</th>
            <th>Title</th>
            <th>Description</th>
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
            <td>{{ $data->title }}</td>
            <td>{!! myTruncate($data->description, 100) !!}</td>
            <td><img src="{{ url('/img/no_image.jpg') }}" width="80" height="80"></td>
            <td class="">
                <a href="{{ url('/controll_panel/page/'.$data->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
                <button class="deleteButton btn btn-danger" id="deletePost_{{ $data->id }}" data-rel="{{ $data->id }}" ><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>