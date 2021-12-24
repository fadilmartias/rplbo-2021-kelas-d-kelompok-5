@extends('template.template')

@section('title', 'Halaman Pengelola User')
@section('kelolauser', 'active')

@section('content')
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Kelola User</h4>
                        <a href="{{ route('add.user') }}" class="btn btn-primary float-right veiwbutton">Add</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id User</th>
                                        <th>Nama User</th>
                                        <th>Email</th>
                                        <th>NIP</th>
                                        <th>Role</th>
                                        <th class="text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $user->id}}</td>
                                        <td>{{ $user->nama_user}}</td>
                                        <td>{{ $user->email}}</td>
                                        <td>{{ $user->nip }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('edit.user', $user->id) }}"><i
                                                            class="fas fa-pencil-alt m-r-5"></i> Edit User</a>
                                                            <form class="d-inline" action="{{ route('hapus.user', $user->id) }}" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="dropdown-item"><i class="fas fa-trash-alt m-r-5"></i>Hapus User</button>
                                                            </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                       <tr>
                                           <td colspan="7" class="text-center">
                                               Data kosong
                                           </td>
                                       </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div id="delete_asset" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white"
                                data-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>

@endsection
