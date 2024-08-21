<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function cekUser(Request $request){
        $request->validate([
            'sebagai' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        $username = $request->username;
        $password = $request->password;
        $sebagai = $request->sebagai;

        if($sebagai == "pasien"){
            $cekPasien = Pasien::where('username',$username)->where('password',$password)->count();
            if($cekPasien != 0){
                $user = Pasien::where('username',$username)->where('password',$password)->first();
                // meyimpan id user di session
                Session::put('pasien_id',$user->id);
                Session::put('nama_pasien',$user->nama_pasien);
                return redirect('/pasien')->with('success','Anda berhasil login');
            }else{
                return redirect('/')->withErrors('masukan username dan password yang sesuai');
            }
        }
        if($sebagai == "admin"){
            if($username == "admin" && $password=="admin"){
                return redirect('/admin')->with('success','anda berhasil login');
            }else{
                return redirect('/')->withErrors('masukan username dan password yang sesuai');
            }
        }
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
