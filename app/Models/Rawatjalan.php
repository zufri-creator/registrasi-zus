<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawatjalan extends Model
{
    use HasFactory;
    protected $table = 'rawatjalan';
    protected $fillable = [
        'pasien_id',
        'tgl_lahir',
        'alamat',
        'tlp',
        'agama',
        'status',
        'pekerjaan',
        'nama_penganggun_jawab',
        'alamat_penangguna_jawab',
    ];

    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }

    public function kunjungan(){
        return $this->hasMany(Kunjungan::class,'rawat_jalan_id');
    }
}
