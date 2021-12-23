@extends('template.template-siswa')

@section('title', 'Hasil Lacak Surat')
@section('lacaksurat', 'active')
@section('content')
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Hasil Lacak Surat</h4>
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
                                        <th>ID Pengajuan</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Nama Pengaju</th>
                                        <th>NISN</th>
                                        <th>Perihal</th>
                                        <th>Status Surat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $item->id_pengajuan }}</td>
                                        <td>{{ str_replace('-', ' ', date('d-F-Y', strtotime($item->created_at))) }}</td>
                                        <td>{{ $item->nama}}</td>
                                        <td>{{ $item->nisn}}</td>
                                        <td>{{ $item->perihal}}</td>
                                        <td>
                                            @if ($item->status === 'legalisir selesai')
                                            <span class="badge badge-pill badge-success">{{ $item->status }}</span>
                                            @elseif ($item->status === 'pengajuan dibatalkan')
                                            <span class="badge badge-pill badge-danger">{{ $item->status }}</span>
                                            @elseif ($item->status === 'pengajuan dikirim')
                                            <span class="badge badge-pill badge-secondary">{{ $item->status }}</span>
                                            @else
                                            <span class="badge badge-pill badge-warning">{{ $item->status }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('lacak.create') }}" class="btn btn-primary float-right mr-2">Kembali</a>


@endsection
