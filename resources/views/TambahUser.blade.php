@extends('template.template')

@section('title', 'Tambah User')
@section('content')
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title mt-5">Tambah User</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('tambah.user') }}" method="POST">
                        @csrf
                            <div class="row formtype">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" type="text" id="nama_user" name="nama_user">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" id="role" name="role">
                                            <option>Kepala Sekolah</option>
                                            <option>Kepala TU</option>
                                            <option>Staff TU</option>
                                            <option>Resepsionis</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>NIP</label>
                                            <input type="text" class="form-control" id="nip" name="nip">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                            <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Password</label>
                                            <input type="text" class="form-control" id="password" name="password">
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-danger float-right mr-2" href="{{ route('user.index') }}">Batal</a>
                            <button type="submit" class="btn btn-primary float-right mr-2">Add</button>
                        </form>
                    </div>
                </div>
            </div>
@endsection
