<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanLegalisir extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pengajuan',
        'nama',
        'nisn',
        'tahun_tamat',
        'perihal',
        'status'
    ];

    public function scopeAll($query) {
        return $query->get();
    }

    public function scopeGetAll($query) {
        return $query->orderBy('created_at')->get();
    }

    public function scopeFind($query) {
        return $query->get();
    }

    public function scopeWhere($query) {
        return $query->get();
    }

    public function scopeCreate($query) {
        return $query->get();
    }

    public function scopeUpdate($query) {
        return $query->get();
    }

    public function scopeDelete($query) {
        return $query->get();
    }
    public function scopeJmlPengajuanLegalisir($query) {
        return $query->where('perihal', '=', 'Legalisir Ijazah')->count();
    }

}
