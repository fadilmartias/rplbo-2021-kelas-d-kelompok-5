@extends('template.template')

@section('title', 'Data Pengajuan Legalisir')
@section('pengajuanlegalisir', 'active')
@section('content')
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Data Pengajuan Legalisir</h4>
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
                                        <th>Tahun Tamat</th>
                                        <th>Status Surat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($legalisirs as $legalisir)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $legalisir->id_pengajuan }}</td>
                                        <td>{{ str_replace('-', ' ', date('d-F-Y', strtotime($legalisir->created_at))) }}</td>
                                        <td>{{ $legalisir->nama}}</td>
                                        <td>{{ $legalisir->nisn}}</td>
                                        <td>{{ $legalisir->tahun_tamat}}</td>
                                        <td>
                                            @if ($legalisir->status === 'legalisir selesai')
                                            <span class="badge badge-pill badge-success">{{ $legalisir->status }}</span>
                                            @elseif ($legalisir->status === 'pengajuan dibatalkan')
                                            <span class="badge badge-pill badge-danger">{{ $legalisir->status }}</span>
                                            @elseif ($legalisir->status === 'pengajuan dikirim')
                                            <span class="badge badge-pill badge-secondary">{{ $legalisir->status }}</span>
                                            @else
                                            <span class="badge badge-pill badge-warning">{{ $legalisir->status }}</span>
                                            @endif
                                        </td>
                                        <td class="btn-group">
                                                        @if (Auth::user()->role ==='Resepsionis' && $legalisir->status === 'pengajuan dikirim')

                                                        <form action="{{ route('acc.Legalisir', $legalisir->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="btn btn-success btn-sm mr-1">Setujui</button>
                                                        </form>

                                                        <form action="{{ route('reject.Legalisir', $legalisir->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                                                        </form>

                                                        @endif

                                                        @if (Auth::user()->role ==='Staff TU' && $legalisir->status === 'pengajuan sedang diproses')
                                                        <form action="{{ route('legalisir.complete', $legalisir->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="btn btn-success btn-sm">Legalisir Selesai</button>
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
