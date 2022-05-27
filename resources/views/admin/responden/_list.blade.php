
<table class="table table-bordered mb-0">
    <thead>
    <tr>
        <th class="text-center">#</th>
        <th class="text-center">Nama Lengkap</th>
        <th class="text-center">Email</th>
        <th class="text-center">Nomor Handphone</th>
        <th class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data  as  $no => $m)
    <tr>
        <th scope="row" class="text-center"> {{ $no + $data->firstItem() }} </th>

        <td class="text-center">{{$m->name}}</td>
        <td class="text-center"> {{$m->email}} </td>
        <td class="text-center"> {{$m->mobile_phone_number}} </td>

        <td>
            <div class="text-center">
                <a href="{{route('respondent-identity.show', ['respondent_identity' => $m->slug])}}" class="btn  btn-primary btn-sm" title="view">
                     <i class="fa fa-eye"></i>
                </a>


                <button type="button" class="btn btn-danger btn-sm" title="delete"
                data-toggle="modal" data-target="#hapus_event_{{ $m->id }}">
                    <i class="fa fa-trash"></i>
                </button>

            </div>
                                                                        {{-- End Modal edit --}}
            <!-- modal Delete -->
            <form method="POST" action="{{route('respondent-identity.destroy', ['respondent_identity' => $m->id])}}">
                <div class="modal fade" id="hapus_event_{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                            </div>
                            <div class="modal-body">
                            <p>Are you sure you want to delete this data?</p>
                            @csrf
                            {{ method_field('DELETE') }}
                            </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="ti-close m-r-5 f-s-12"></i> Cancel</button>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-paper-plane m-r-5"></i> Yes, Deleted</button>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
            {{-- End Modal Delete --}}
        </td>
    </tr>

    </tbody>
    @endforeach
</table>


