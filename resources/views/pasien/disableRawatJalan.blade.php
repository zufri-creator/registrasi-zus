@extends('layout.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PENGIMPUTAN DATA RAWAT JALAN PASIEN</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>

          
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-info alert-dismissible">
                    {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
                    <h5>Maaf anda belum melakukan pengimputan pendaftaran pasien</h5>
                    untuk melakukan pendaftaran silah ke menu pendaftaran pasien
                </div>
            </div>
        </div>
        <form action="" method="POST">
            @csrf
            <input type="hidden" name="pasien_id" value="1">
          <div class="row">
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input disabled type="text" name="namaPasien" class="form-control" value="{{ $dataPasien->nama_pasien }}">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tglLahir" class="form-control" disabled>
                    </div>
                    @error('tglLahir')
                        <alert class="alert-danger">{{ $message }}</alert>
                    @enderror
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" class="form-control" cols="30" rows="3" disabled></textarea>
                    </div>
                    @error('alamat')
                        <alert class="alert-danger">{{ $message }}</alert>
                    @enderror
                    <div class="form-group">
                        <label for="tlp">Telepon</label>
                        <input type="text" name="tlp" class="form-control" disabled>
                    </div>
                    @error('tlp')
                        <alert class="alert-danger">{{ $message }}</alert>
                    @enderror
                    <div class="form-group">
                        <label for="">Agama</label>
                        <select name="agama" id="" class="form-control" disabled>
                            <option value="">--Pilih--</option>
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    @error('agama')
                        <alert class="alert-danger">{{ $message }}</alert>
                    @enderror
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control" disabled>
                            <option value="">--Pilih--</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                        </select>
                    </div>
                    @error('status')
                        <alert class="alert-danger">{{ $message }}</alert>
                    @enderror
                    <div class="form-group">
                        <label for="">Pekerjaan</label>
                        <select name="pekerjaan" id="" class="form-control" disabled>
                            <option value="">--Pilih--</option>
                            <option value="ASN">ASN</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Pelajar">Pelajar</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    @error('pekerjaan')
                        <alert class="alert-danger">{{ $message }}</alert>
                    @enderror
                    <hr>
                    <div class="form-group">
                        <label for="">Nama Penanggung Jawab</label>
                        <input type="text" name="namaPenanggungJawab" class="form-control" disabled>
                    </div>
                    @error('namaPenanggungJawab')
                        <alert class="alert-danger">{{ $message }}</alert>
                    @enderror
                    <div class="form-group">
                        <label for="">Alamat Penanggung Jawab</label>
                        <textarea name="alamatPenanggungJawab" class="form-control" id="" cols="30" rows="3" disabled></textarea>
                    </div>
                    @error('alamatPenanggungJawab')
                        <alert class=" alert-danger">{{ $message }}</alert>
                    @enderror
                    <button type="submit" class="btn btn-primary btn-lg" disabled>Daftar</button>
                    <a href="{{ url()->previous() }}" class="btn btn-warning btn-lg">Kembali</a>
                </div>

            </div>
        </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  @endsection