<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Http\Request;

class KunjunganController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tgl_kunjungan' => 'required',
            'keluhan_utama' => 'required',
            'alergi' => 'required',
            'keseimbangan_berjalan' => 'required',
            'menopang_saat_duduk' => 'required',
            'resiko_jatuh' => 'required',
            'aktifitas_mobilisasi' => 'required',
            'riwayat_penyakit' => 'required',
            'status_general' => 'required'
        ]);

        $data = [
            'rawat_jalan_id' => $request->rawat_jalan_id,
            'tgl_kunjungan' => $request->tgl_kunjungan,
            'alergi' => $request->alergi,
            'keseimbangan_berjalan' => $request->keseimbangan_berjalan,
            'menopang_saat_duduk' => $request->menopang_saat_duduk,
            'resiko_jatuh' => $request->resiko_jatuh,
            'aktifitas_mobilisasi' => $request->aktifitas_mobilisasi,
            'riwayat_penyakit' => $request->riwayat_penyakit,
            'status_general' => $request->status_general,
            'keluhan_utama' => $request->keluhan_utama,
        ];

        Kunjungan::create($data);
        return redirect()->route('admin.rawatjalan.index')->with('success','Data berhasil disimpan');
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
