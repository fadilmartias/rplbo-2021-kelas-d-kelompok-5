@extends('template.template')

@section('title', 'Dashboard')
@section('dashboard', 'active')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Selamat Datang {{ Auth::user()->nama_user }}!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard {{ Auth::user()->role }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">{{ $surats }}</h3>
                                <h6 class="text-muted">Pengajuan Surat Keluar</h6> </div>
                            <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">{{ $legalisirs }}</h3>
                                <h6 class="text-muted">Pengajuan Legalisir</h6> </div>
                            <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (Auth::user()->role ==='Kepala TU' || Auth::user()->role ==='Kepala Sekolah')
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">{{ $users }}</h3>
                                <h6 class="text-muted">User Terdaftar</h6> </div>
                            <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>

@endsection
