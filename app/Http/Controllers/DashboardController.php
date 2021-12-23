<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PengajuanLegalisir;
use Illuminate\Support\Facades\DB;
use App\Models\PengajuanSuratKeluar;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index() {
        $surats = PengajuanSuratKeluar::jmlPengajuanSuratKeluar();
        $legalisirs = PengajuanLegalisir::jmlPengajuanLegalisir();
        $users = User::jmlUser();
        return view('dashboard', [
           'legalisirs' => $legalisirs,
           'surats' => $surats,
           'users' => $users
        ]);

    }

}
