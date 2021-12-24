@extends('template.template-siswa')

@section('title', 'Ajukan Legalisir')
@section('ajukanlegalisir', 'active')
@section('content')
        <div class="content container-fluid">
            <div class="page-header mt-5">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Ajukan Surat Legalisir</h3>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span>{{ $message }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Pengajuan Legalisir</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('ajukan-legalisir.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Nama</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">NISN</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nisn">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Tahun Tamat</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="tahun_tamat">
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-success me-md-2 mr-2" type="submit">Ajukan Legalisir</button>
                                    <a class="btn btn-danger mr" href="/">Batal</a>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
