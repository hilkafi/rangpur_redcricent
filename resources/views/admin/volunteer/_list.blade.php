                    
                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                    <thead>
                        <tr role="row">
                            <th>SL.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Role</th>
                            <th>Occupation</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 0; ?>
                        @foreach($dataset as $data)
                        <?php $counter++ ?>
                        <tr role="row" class="odd">
                            <td class="dtr-control">{{ $counter }}</td>
                            <td><img src="{{url('/images/'.$data->img)}}"></td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->unit_type }}</td>
                            <td>{{ $data->role }}</td>
                            <td>{{ $data->occupation }}</td>
                            <td>{{ $data->phone}}</td>
                            <td>{{ $data->address}}</td>
                            
                            <td class="sorting_1">{{ $data->description }}</td>
                            <td class="">
                                <a href="{{ url('/controll_panel/volunteer/'.$data->id.'/edit') }}" ><i class="fas fa-edit"></i></a>
                                <button class="deleteButton btn btn-danger" id="deletevolunteer_{{ $data->id }}" data-rel="{{ $data->id }}" ><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    

 

                    </tbody>
                </table>