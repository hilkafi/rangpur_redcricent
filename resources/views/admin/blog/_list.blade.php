<table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
    <thead>
        <tr role="row">
            <th>SL.</th>
            <th>Title</th>
            <th>Category</th>
            <th>Subcategory</th>
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
            <td>{{ $data->category_name($data->category_id) }}</td>
            <td>{{ $data->subcategory_name($data->sub_category_id) }}</td>
            <td class="sorting_1">{{ $data->description }}</td>
            <td><img src="{{url('/images/'.$data->img)}}" width="80" height="80"></td>
            <td class="">
                <a href="{{ url('/controll_panel/blog/'.$data->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
                <button class="deleteButton btn btn-danger" id="deletePost_{{ $data->id }}" data-rel="{{ $data->id }}" ><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>