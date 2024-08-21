<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawatinap extends Model
{
    use HasFactory;
    protected $table = 'rawatinap';
    protected $fillable = [
        'pasien_id',
        'poli_id',
        'pilihan_kamar_id',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'no_rt',
        'no_rw',
        'kelurahan',
        'tlp',
        'pekerjaan',
        'nama_penanggung_jawab',
        'alamat_penanggung_jawab',
        'telepon_penanggung_jawab',
        'hubungan_pasien',
    ];

    public function poli(){
        return $this->belongsTo(Poli::class);
    }
    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }
    public function penerimaanRawatInap(){
        return $this->hasMany(Penerimaanrawatinap::class,'rawat_inap_id');
    }

}