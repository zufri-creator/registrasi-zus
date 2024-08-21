<?php

namespace App\Http\Controllers;

use App\Models\Penerimaanrawatinap;
use App\Models\Rawatinap;
use Illuminate\Http\Request;

class RawatInapAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // MENGAMBIL DATA RAWAT INAP ID APAKAH ADA DI TABEL PENERIMAAN RAWAT INAP
        $telahProses = Rawatinap::with('penerimaanRawatInap')->get();
        $dataRawatInap = Rawatinap::doesntHave('penerimaanRawatInap')->get();
        // $dataRawatInap = Rawatinap::all();
        return view('admin.rawatinap', ['dataRawatInap'=>$dataRawatInap,'telahProses'=>$telahProses]);
    }

    public function telahDiproses(string $id){
        $dataRawatInap = Rawatinap::where('id',$id)->first();
        $dataPenerimaan = Penerimaanrawatinap::where('rawat_inap_id',$dataRawatInap->id)->first();
        return view('admin.detailRawatInapDiproses',['dataRawatInap'=>$dataRawatInap,'dataPenerimaan'=>$dataPenerimaan]);
    }

    public function cetakLaporan(string $id){
        $dataRawatInap = Rawatinap::where('id',$id)->first();
        $dataPenerima = Penerimaanrawatinap::where('rawat_inap_id',$dataRawatInap->id)->first();
        return view('admin.cetakLaporanRawatInap',['dataRawatInap'=>$dataRawatInap,'dataPenerimaan'=>$dataPenerima]);
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
        $request->validate([
            'jenis_ruangan' => 'required',
            'kelas' => 'required',
            'tgl_masuk' => 'required',
            'asal_pasien' => 'required',
            'status_pasien' => 'required',
            'biaya_perawatan' => 'required',
        ]);

        $data = [
            'rawat_inap_id' => $request->rawat_inap_id,
            'jenis_ruangan' => $request->jenis_ruangan,
            'kelas' => $request->kelas,
            'tgl_masuk' => $request->tgl_masuk,
            'jam_masuk' => $request->jam_masuk,
            'asal_pasien' => $request->asal_pasien,
            'status_pasien' => $request->status_pasien,
            'biaya_perawatan' => $request->biaya_perawatan,
        ];

        Penerimaanrawatinap::create($data);
        return redirect()->route('admin.rawatinap.index')->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $dataRawatInap = Rawatinap::where('id',$id)->first();
        return view('admin.detailRawatInap',['dataRawatInap'=>$dataRawatInap]);
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
