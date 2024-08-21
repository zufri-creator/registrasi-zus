<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Pendaftaranpasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $idPasien=Session::get('pasien_id');
        $dataPasien = Pasien::where('id',$idPasien)->first();
        //ambil data pendaftaran pasien
        $dataPendaftaran = Pendaftaranpasien::where('pasien_id',$idPasien)->first();
        if($dataPendaftaran){

            return view('pasien.detailPendaftaran',['dataPendaftaran'=>$dataPendaftaran]);

        }else{
            return view('pasien.pendaftaran',['dataPasien'=>$dataPasien]);
            
        }
        // if($dataPasien){
        // }else{
        //     return view('pasien.pendaftaran',['dataPasien'=>$dataPasien]);

        // }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'jk' => 'required',
            'namaPenjamin' => 'required',
            'noKK' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required',
            'jaminan' => 'required',
        ]);
        $data = [
            'pasien_id' => $request->pasien_id,
            'jk' => $request->jk,
            'nama_penjamin' => $request->namaPenjamin,
            'no_kk' => $request->noKK,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'status' => $request->status,
            'jaminan' => $request->jaminan,
        ];
        Pendaftaranpasien::create($data);

        return redirect()->route('layanan.rawatinap.store')->with('success','Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Pendaftaranpasien::where('id',$id)->first();
        return view('pasien.editPendaftaran',['dataPendaftaran'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = [
            'jk' => $request->jk,
            'nama_penjamin' => $request->namaPenjamin,
            'no_kk' => $request->noKK,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'status' => $request->status,
            'jaminan' => $request->jaminan,
        ];

        Pendaftaranpasien::where('id',$id)->update($data);
        return redirect()->route('layanan.pendaftaran.create')->with('success','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
