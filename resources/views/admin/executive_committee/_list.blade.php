<div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th>SL.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Contact</th>
                                <th>Email</th>
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
                                <td>{{$data->designation}}</td>
                                <td>{{ $data->contract_number }}</td>
                                <td>{{ $data->email}}</td>
                                <td>{{ $data->blood_group}}</td>
                                <td><img src="{{url('/images/'.$data->img)}}" width="80" height="80"></td>
                                <td class="">
                                    <a href="{{ url('/controll_panel/executive-committee/'.$data->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
                                    
                                    <button class="deleteButton btn btn-danger" id="deletevolunteer_{{ $data->id }}" data-rel="{{ $data->id }}" ><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>