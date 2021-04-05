<div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th>SL.</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter = 0; ?>
                            @foreach($categories as $category)
                            <?php $counter++ ?>
                            <tr role="row" class="odd">
                                <td class="dtr-control">{{ $counter }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->type }}</td>
                                <td class="sorting_1">{{ $category->description }}</td>
                                <td class="">
                                    <a href="{{ url('/controll_panel/category/'.$category->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
                                    <button class="deleteButton btn btn-danger" id="deleteCategory_{{ $category->id }}" data-rel="{{ $category->id }}" ><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>