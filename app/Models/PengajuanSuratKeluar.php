<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSuratKeluar extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pengajuan',
        'nama',
        'nisn',
        'kelas',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'email',
        'perihal',
        'status'
    ];

    public function scopeGetAll($query) {
        return $query->get();
    }

    public function scopeFindOrFail($query) {
        return $query->get();
    }

    public function scopeWhere($query) {
        return $query->get();
    }
}
