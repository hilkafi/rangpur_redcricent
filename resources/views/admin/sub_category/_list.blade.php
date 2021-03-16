<table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
    <thead>
        <tr role="row">
            <th>SL.</th>
            <th>Category</th>
            <th>Name</th>
            <th>Type</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 0; ?>
        @foreach($sub_categories as $sub_category)
        <?php $counter++ ?>
        <tr role="row" class="odd">
            <td>{{ $counter }}</td>
            <td>{{ $sub_category->category->name }}</td>
            <td>{{ $sub_category->name }}</td>
            <td>{{ $sub_category->type }}</td>
            <td>{{ $sub_category->description }}</td>
            <td class="">
                <a href="{{ url('/controll_panel/sub-category/'.$sub_category->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
                <button class="deleteButton btn btn-danger" id="deleteCategory_{{ $sub_category->id }}" data-rel="{{ $sub_category->id }}" ><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>