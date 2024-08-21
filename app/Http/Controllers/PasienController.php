<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Pendaftaranpasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PasienController extends Controller
{
    public function daftarPasien(){
        $data = Pendaftaranpasien::all();
        return view('admin.daftarPasien',['dataPasien'=>$data]);
    }

    public function detailDaftarPasien(string $id){
        $data = Pendaftaranpasien::where('id',$id)->first();
        return view('admin.detailDaftarPasien',['dataPasien'=>$data]);
    }

    public function profilPasien(){
        $pasien_id = Session::get('pasien_id');
        $dataPasien = Pasien::where('id',$pasien_id)->first();
        return view('pasien.profilPasien',['dataPasien'=>$dataPasien]);
    }
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
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        Pasien::where('id',$id)->update($data);
        return redirect()->route('pasien.profilpasien')->with('success','Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function logout(){
        Session::flush();

        return redirect('/');
    }
}
