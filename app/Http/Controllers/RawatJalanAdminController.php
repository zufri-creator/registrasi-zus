<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use App\Models\Rawatjalan;
use Illuminate\Http\Request;

class RawatJalanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $data = Rawatjalan::all();
        // return view('admin.rawatJalan',['dataRawatJalan'=>$data]);

        // MENGAMBIL DATA KUNJUNGAN APABILA ADA DATA ID RAWAT JALAN DI TABLE KUNJUNGAN
        // $data = Kunjungan::with('rawatJalan')->get();
        $data1 = Rawatjalan::with('kunjungan')->get();
        $data = Rawatjalan::doesntHave('kunjungan')->get();
        return view('admin.rawatJalan',['dataRawatJalan'=>$data,'rawatJalan'=>$data1]);
    }

    // menampilkan detail rawat jalan pasien yang telah diproses/diinput oleh petugas
    // kesehatan
    public function telahDiproses(string $id){
        $data = Rawatjalan::where('id',$id)->first();
        $dataKunjungan = Kunjungan::where('rawat_jalan_id',$data->id)->first();
        return view('admin.detailRawatJalanDiproses',['dataRawatJalan'=>$data,'dataKunjungan'=>$dataKunjungan]);
    }

    public function cetakLaporan(string $id){
        $data = Rawatjalan::where('id',$id)->first();
        $dataKunjungan = Kunjungan::where('rawat_jalan_id',$data->id)->first();
        return view('admin.cetakLaporanRawatJalan',['dataRawatJalan'=>$data,'dataKunjungan'=>$dataKunjungan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Rawatjalan::where('id',$id)->first();
        return view('admin.detailRawatJalan',['dataRawatJalan'=>$data]);
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
