<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanLegalisir;
use App\Models\PengajuanSuratKeluar;

class LacakSuratController extends Controller
{
    public function create() {
        return view('LacakSurat');
    }

    public function store(Request $request) {
        $ids = $request->id_pengajuan;

        $surat = PengajuanSuratKeluar::where('id_pengajuan', '=',  $ids)->first();
        $legalisir = PengajuanLegalisir::where('id_pengajuan', '=',  $ids)->first();

        if ($surat) {
            return view('HasilLacak', [
                'item' => $surat
            ]);
        } elseif ($legalisir) {
            return view('HasilLacak', [
                'item' => $legalisir
            ]);
        } else {
            return back();
        }
    }


}

