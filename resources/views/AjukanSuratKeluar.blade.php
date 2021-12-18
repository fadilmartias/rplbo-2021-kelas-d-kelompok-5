@extends('template.template-siswa')

@section('title', 'Ajukan Surat Keluar')
@section('ajukansurat', 'active')
@section('content')
    <div class="content container-fluid">

        <div class="page-header mt-5">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Ajukan Surat Keluar</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Pengajuan Surat</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ajukan-surat.store') }}" method="POST">
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
                                <label class="col-form-label col-md-2">Kelas</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="kelas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Tempat Lahir</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="tempat_lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Tanggal Lahir</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Jenis Kelamin</label>
                                <div class="col-md-10">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="Laki-Laki" name="jenis_kelamin"> Laki-Laki
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="Perempuan" name="jenis_kelamin"> Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Alamat</label>
                                <div class="col-md-10">
                                    <textarea rows="5" cols="5" class="form-control" name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Email</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Perihal</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="perihal">
                                        <option value="Surat Keterangan Aktif Sekolah">Surat Keterangan Aktif Sekolah
                                        </option>
                                        <option value="Surat Keterangan Aktif Sekolah">Surat Keterangan Pindah Sekolah
                                        </option>
                                        <option value="Surat Keterangan Masih Sekolah">Surat Keterangan Masih Sekolah
                                        </option>
                                        <option value="Surat Keterangan Berkelakuan Baik">Surat Keterangan Berkelakuan Baik
                                        </option>
                                        <option value="Surat Keterangan Tidak Menerima Beasiswa">Surat Keterangan Tidak
                                            Menerima Beasiswa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-success me-md-2 mr-2" type="submit">Ajukan Surat</button>
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
