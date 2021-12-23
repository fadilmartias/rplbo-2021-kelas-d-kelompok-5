<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSuratKeluar;
use RealRashid\SweetAlert\Facades\Alert;


class PengajuanSuratKeluarController extends Controller
{
    public function index() {
        $surats = PengajuanSuratKeluar::getAll();

        return view('PengajuanSuratKeluar', [
           'surats' => $surats

        ]);
    }

    public function accSurat($id) {
        $surat = PengajuanSuratKeluar::find($id);

        $surat->update(['status' => 'pengajuan sedang diproses']);

        return redirect()->back();
    }
    public function rejectSurat($id) {
        $surat = PengajuanSuratKeluar::find($id);

        $surat->update(['status' => 'pengajuan dibatalkan']);

        return redirect()->back();
    }
    public function completeSurat($id) {
        $surat = PengajuanSuratKeluar::find($id);

        $surat->update(['status' => 'surat selesai']);

        return redirect()->back();
    }

    public function create() {
        return view('AjukanSuratKeluar', [
        ]);
    }

    public function store(Request $request) {
        $data = $request->all();

        $id_pengajuan = "SK-".rand(0,9999);

        PengajuanSuratKeluar::create([
            'id_pengajuan' => $id_pengajuan,
            'nama' => $data['nama'],
            'nisn' => $data['nisn'],
            'kelas' => $data['kelas'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'perihal' => $data['perihal'],
            'status' => 'pengajuan dikirim',

        ]);
        Alert::success('CATAT ID PENGAJUAN ANDA : '.$id_pengajuan, 'Pengajuan berhasil dibuat');
        return redirect()->route('ajukan-surat.create');
    }
}
