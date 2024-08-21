<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaranpasien extends Model
{
    use HasFactory;
    protected $table = 'pendaftaranpasien';
    protected $fillable = [
        'pasien_id',
        'jk',
        'nama_penjamin',
        'no_kk',
        'agama',
        'pendidikan',
        'pekerjaan',
        'status',
        'jaminan',
    ];

    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }
}
