<div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th>SL.</th>
                                <th>Unit Name</th>
                                <th>Address</th>
                                <th>Hot Line</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter = 0; ?>
                            @foreach($dataset as $data)
                            <?php $counter++ ?>
                            <tr role="row" class="odd">
                                <td>{{ $counter }}</td>
                                <td>{{ $data->unit_name }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->hot_line }}</td>
                                <td class="">
                                    <a href="{{ url('/controll_panel/donate_get_blood/'.$data->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
                                    <button class="deleteButton btn btn-danger" id="deleteInfo_{{ $data->id }}" data-rel="{{ $data->id }}" ><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>