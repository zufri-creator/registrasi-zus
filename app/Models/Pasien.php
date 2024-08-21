<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $fillable =[
        'nama_pasien',
        'username',
        'password',
    ];

    public function pendaftaranPasien(){
        return $this->hasMany(Pendaftaranpasien::class);
    }
    public function rawatJalan(){
        return $this->hasMany(Rawatjalan::class);
    }

    public function rawatInap(){
        return $this->hasMany(Rawatinap::class);
    }
}
