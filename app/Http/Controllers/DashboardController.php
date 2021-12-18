<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PengajuanLegalisir;
use App\Models\PengajuanSuratKeluar;

class DashboardController extends Controller
{
    public function index() {
        $surats = DB::table('pengajuan_surat_keluars')->count();
        $legalisirs = DB::table('pengajuan_legalisirs')->count();

        return view('dashboard', [
           'legalisirs' => $legalisirs,
           'surats' => $surats

        ]);
    }
}
