<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaanrawatinap extends Model
{
    use HasFactory;
    protected $table = 'penerimaan_rawat_inap';
    protected $fillable = [
        'rawat_inap_id',
        'jenis_ruangan',
        'kelas',
        'tgl_masuk',
        'jam_masuk',
        'asal_pasien',
        'status_pasien',
        'biaya_perawatan',
    ];

    public function rawatInap(){
        return $this->belongsTo(Rawatinap::class,'rawat_inap_id');
    }
}
