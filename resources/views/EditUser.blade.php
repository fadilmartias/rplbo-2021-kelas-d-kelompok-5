@extends('template.template')

@section('title', 'Edit User')
@section('content')
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title mt-5">Edit User</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('update.user', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="row formtype">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" type="text" id="nama_user" name="nama_user" value="{{ old('nama_user') ?? $user->nama_user }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" id="role" name="role" required>
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
                                            <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip') ?? $user->nip }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') ?? $user->email }}" required>
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
                            <button type="submit" class="btn btn-primary float-right mr-2">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
@endsection
