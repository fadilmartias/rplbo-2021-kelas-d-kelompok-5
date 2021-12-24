<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanLegalisir;
use RealRashid\SweetAlert\Facades\Alert;


class PengajuanLegalisirController extends Controller
{
    public function index() {
        $legalisirs = PengajuanLegalisir::getAll();

        return view('PengajuanLegalisir', [
           'legalisirs' => $legalisirs

        ]);
    }

    public function accLegalisir($id) {
        $legalisirs = PengajuanLegalisir::find($id);

        $legalisirs->update(['status' => 'pengajuan sedang diproses']);

        return redirect()->back();
    }
    public function rejectLegalisir($id) {
        $legalisirs = PengajuanLegalisir::find($id);

        $legalisirs->update(['status' => 'pengajuan dibatalkan']);

        return redirect()->back();
    }
    public function completeLegalisir($id) {
        $legalisirs = PengajuanLegalisir::find($id);

        $legalisirs->update(['status' => 'legalisir selesai']);

        return redirect()->back();
    }

    public function create() {
        return view('AjukanLegalisir', [
        ]);
    }

    public function store(Request $request) {
        $data = $request->all();

        $id_pengajuan = "LG-".rand(0,9999);

        PengajuanLegalisir::create([
            'id_pengajuan' => $id_pengajuan,
            'nama' => $data['nama'],
            'nisn' => $data['nisn'],
            'tahun_tamat' => $data['tahun_tamat'],
            'status' => 'pengajuan dikirim',
            'perihal' => 'Legalisir Ijazah'

        ]);
        return redirect()->route('ajukan-legalisir.create')->with('success', 'CATAT ID PENGAJUAN ANDA :'.$id_pengajuan);
    }
}
