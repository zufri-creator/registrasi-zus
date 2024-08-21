<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;
    protected $table= "kunjungan";
    protected $fillable = [
        'rawat_jalan_id',
        'tgl_kunjungan',
        'alergi',
        'keseimbangan_berjalan',
        'menopang_saat_duduk',
        'resiko_jatuh',
        'aktifitas_mobilisasi',
        'riwayat_penyakit',
        'status_general',
        'keluhan_utama',
    ];

    public function rawatJalan(){
        return $this->belongsTo(Rawatjalan::class,'rawat_jalan_id');
    }
}
