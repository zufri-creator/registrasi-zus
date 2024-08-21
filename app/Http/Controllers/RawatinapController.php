<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Pendaftaranpasien;
use App\Models\Penerimaanrawatinap;
use App\Models\Poli;
use App\Models\Rawatinap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RawatinapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pasien_id = Session::get('pasien_id');
        $dataRawatInap = Rawatinap::where('id',$pasien_id)->get();
        return view('pasien.rawatinap',['dataRawatInap'=>$dataRawatInap]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pasien_id = Session::get('pasien_id');
        $dataPasien = Pasien::where('id',$pasien_id)->first();
        $dataPoli = Poli::all();
        return view('pasien.inputRawatInap',['dataPoli'=>$dataPoli,'dataPasien'=>$dataPasien]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'poli' => 'required',
            'tempatLahir' => 'required',
            'tglLahir' => 'required',
            'alamat' => 'required',
            'noRt' => 'required',
            'noRw' => 'required',
            'kelurahan' => 'required',
            'telepon' => 'required',
            'pekerjaan' => 'required',
            'namaPenanggungJawab' => 'required',
            'alamatPenanggungJawab' => 'required',
            'teleponPenanggungJawab' => 'required',
            'hubunganPasien' => 'required',
        ]);
        // simpan ke database
        // $pasien_id = 1;
        $data = [
            'pasien_id' => $request->pasien_id,
            'poli_id' => $request->poli,
            'tempat_lahir' => $request->tempatLahir,
            'tgl_lahir' => $request->tglLahir,
            'alamat' => $request->alamat,
            'no_rt' => $request->noRt,
            'no_rw' => $request->noRw,
            'kelurahan' => $request->kelurahan,
            'tlp' => $request->telepon,
            'pekerjaan' => $request->pekerjaan,
            'nama_penanggung_jawab' => $request->namaPenanggungJawab,
            'alamat_penanggung_jawab' => $request->alamatPenanggungJawab,
            'telepon_penanggung_jawab' => $request->teleponPenanggungJawab,
            'hubungan_pasien' => $request->hubunganPasien,
        ];
        Rawatinap::create($data);
        return redirect()->route('layanan.rawatinap.store')->with('success','Berhasil registrasi');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $dataRawatInap = Rawatinap::where('id',$id)->first();
        $dataPenerimaan = Penerimaanrawatinap::where('rawat_inap_id',$dataRawatInap->id)->first();
        return view('pasien.detailRawatInap',['dataRawatInap'=>$dataRawatInap,'dataPenerimaan'=>$dataPenerimaan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $dataPoli = Poli::all();
        $dataRawatInap = Rawatinap::where('id',$id)->first();
        return view('pasien.editRawatInap',['dataRawatInap'=>$dataRawatInap,'dataPoli'=>$dataPoli]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'poli' => 'required',
            'tempatLahir' => 'required',
            'tglLahir' => 'required',
            'alamat' => 'required',
            'noRt' => 'required',
            'noRw' => 'required',
            'kelurahan' => 'required',
            'telepon' => 'required',
            'pekerjaan' => 'required',
            'namaPenanggungJawab' => 'required',
            'alamatPenanggungJawab' => 'required',
            'teleponPenanggungJawab' => 'required',
            'hubunganPasien' => 'required',
        ]);
        // simpan ke database
        $pasien_id = 1;
        $data = [
            'poli_id' => $request->poli,
            'tempat_lahir' => $request->tempatLahir,
            'tgl_lahir' => $request->tglLahir,
            'alamat' => $request->alamat,
            'no_rt' => $request->noRt,
            'no_rw' => $request->noRw,
            'kelurahan' => $request->kelurahan,
            'tlp' => $request->telepon,
            'pekerjaan' => $request->pekerjaan,
            'nama_penanggung_jawab' => $request->namaPenanggungJawab,
            'alamat_penanggung_jawab' => $request->alamatPenanggungJawab,
            'telepon_penanggung_jawab' => $request->teleponPenanggungJawab,
            'hubungan_pasien' => $request->hubunganPasien,
        ];
        Rawatinap::where('id',$id)->update($data);
        return redirect()->route('layanan.rawatinap.index')->with('success','Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
