@extends('template.template')

@section('title', 'Data Pengajuan Surat Keluar')
@section('pengajuansurat', 'active')
@section('content')
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Data Pengajuan Surat Keluar</h4>
                        {{-- <a href="{{ route('tambah.user') }}" class="btn btn-primary float-right veiwbutton">Add</a> --}}
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
                                        <th>ID Pengajuan</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Nama Pengaju</th>
                                        <th>NISN</th>
                                        <th>Kelas</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Perihal</th>
                                        <th>Status Surat</th>
                                        <th class="text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($surats as $surat)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $surat->id_pengajuan}}</td>
                                        <td>{{ str_replace('-', ' ', date('d-F-Y', strtotime($surat->created_at))) }}</td>
                                        <td>{{ $surat->nama}}</td>
                                        <td>{{ $surat->nisn}}</td>
                                        <td>{{ $surat->kelas }}</td>
                                        <td>{{ $surat->tempat_lahir }}</td>
                                        <td>{{ str_replace('-', ' ', date('d-F-Y', strtotime($surat->tanggal_lahir))) }}</td>
                                        <td>{{ $surat->jenis_kelamin }}</td>
                                        <td>{{ $surat->perihal }}</td>
                                        <td>
                                            @if ($surat->status === 'surat selesai')
                                            <span class="badge badge-pill badge-success">{{ $surat->status }}</span>
                                            @elseif ($surat->status === 'pengajuan dibatalkan')
                                            <span class="badge badge-pill badge-danger">{{ $surat->status }}</span>
                                            @elseif ($surat->status === 'pengajuan dikirim')
                                            <span class="badge badge-pill badge-secondary">{{ $surat->status }}</span>
                                            @else
                                            <span class="badge badge-pill badge-warning">{{ $surat->status }}</span>
                                            @endif
                                        </td>
                                        <td class="btn-group">
                                                        @if (Auth::user()->role ==='Resepsionis' && $surat->status === 'pengajuan dikirim')

                                                        <form action="{{ route('acc.Surat', $surat->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="btn btn-success btn-sm">Setujui</button>
                                                        </form>

                                                        <form action="{{ route('reject.Surat', $surat->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                                                        </form>

                                                        @endif

                                                        @if (Auth::user()->role ==='Staff TU' && $surat->status === 'pengajuan sedang diproses')
                                                        <form action="{{ route('surat.complete', $surat->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="btn btn-success btn-sm">Surat Selesai</button>
                                                        </form>
                                                        @endif
                                        </td>
                                    </tr>
                                    @empty
                                       <tr>
                                           <td colspan="13" class="text-center">
                                               Belum ada pengajuan
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
        <div id="delete_asset" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white"
                                data-dismiss="modal">Close</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
