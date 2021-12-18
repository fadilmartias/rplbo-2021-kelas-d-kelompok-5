@extends('template.template-siswa')

@section('title', 'Lacak Surat')
@section('lacaksurat', 'active')
@section('content')
        <div class="content container-fluid">

            <div class="page-header mt-5">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Lacak Surat</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Masukkan ID Pengajuan</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('lacak.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">ID Pengajuan</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="id_pengajuan">
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-success me-md-2 mr-2" type="submit">Lacak Surat</button>
                                    <a class="btn btn-danger" href="/">Batal</a>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
