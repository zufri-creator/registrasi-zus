<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use App\Models\Pasien;
use App\Models\Pendaftaranpasien;
use App\Models\Rawatjalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RawatjalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pasien_id = Session::get('pasien_id');
        $data = Rawatjalan::where('id',$pasien_id)->get();
        return view('pasien.rawatjalan',['rawatJalan'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $idPasien =Session::get('pasien_id');
        $cek = Pendaftaranpasien::where('pasien_id',$idPasien)->count();
        if($cek != 0){
            $dataPasien = Pasien::where('id',$idPasien)->first();
            return view('pasien.inputRawatJalan',['dataPasien'=>$dataPasien]);
            
        }else{
            $pendaftaranPasien = Pendaftaranpasien::where('pasien_id',$idPasien)->first();
            $dataPasien = Pasien::where('id',$idPasien)->first();
            return view('pasien.disableRawatJalan',['dataPasien'=>$dataPasien,'pendaftaranPasien'=>$pendaftaranPasien]);
            
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tglLahir' => 'required',
            'alamat' => 'required',
            'tlp' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'namaPenanggungJawab' => 'required',
            'alamatPenanggungJawab' => 'required',
        ]);
        $pasien_id =Session::get('pasien_id');
        $data = [
            'pasien_id' => $pasien_id,
            'tgl_lahir' => $request->tglLahir,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
            'agama' => $request->agama,
            'status' => $request->status,
            'pekerjaan' => $request->pekerjaan,
            'nama_penganggun_jawab' => $request->namaPenanggungJawab,
            'alamat_penangguna_jawab' => $request->alamatPenanggungJawab,
        ];
        //simpan data
        Rawatjalan::create($data);
        return redirect()->route('layanan.rawatjalan.index')->with('success','Pendaftaran sukses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Rawatjalan::where('id',$id)->first();
        $kunjungan = Kunjungan::where('rawat_jalan_id',$data->id)->first();
        return view('pasien.showRawatJalan',['dataRawatJalan'=>$data,'dataKunjungan'=>$kunjungan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
