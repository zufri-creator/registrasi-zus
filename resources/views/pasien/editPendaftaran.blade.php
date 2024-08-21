@extends('layout.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT DATA REGISTRASI PASIEN</h1>
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
        
        <form action="{{ route('layanan.pendaftaran.update',$dataPendaftaran->id) }}" method="POST">
            @csrf
            @method('put')
          <div class="row">
                {{-- PROSES INPUT RAWAT INAP --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" disabled name="" class="form-control" value="{{ $dataPendaftaran->pasien->nama_pasien}}">
                    </div>
                    @error('namaPasien')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control">
                            <option value="">--pilih--</option>
                            <option {{ $dataPendaftaran->jk == "Laki-laki" ? 'selected' : '' }} value="Laki-Laki">Laki-Laki</option>
                            <option {{ $dataPendaftaran->jk == "Perempuan" ? 'selected' : '' }} value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    @error('jk')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Nama Penjamin</label>
                        <input type="text" name="namaPenjamin" class="form-control" value="{{ $dataPendaftaran->nama_penjamin }}">
                    </div>
                    @error('namaPenjamin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">No Kartu Keluarga</label>
                        <input type="text" name="noKK" class="form-control" value="{{ $dataPendaftaran->no_kk }}">
                    </div>
                    @error('noKK')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="">--pilih--</option>
                            <option {{ $dataPendaftaran->agama == "Islam" ? 'selected' : '' }} value="Islam">Islam</option>
                            <option {{ $dataPendaftaran->agama == "Kristen" ? 'selected' : '' }} value="Kristen">Kristen</option>
                        </select>
                    </div>
                    @error('agama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Pendidikan</label>
                        <input type="text" name="pendidikan" class="form-control" value="{{ $dataPendaftaran->pendidikan }}">
                    </div>
                    @error('pendidikan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" value="{{ $dataPendaftaran->pekerjaan }}">
                    </div>
                    @error('pekerjaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">--pilih--</option>
                            <option {{ $dataPendaftaran->status == "Belum menikah" ? 'selected' : '' }} value="Belum menikah">Belum Menikah</option>
                            <option {{ $dataPendaftaran->status == "Menikah" ? 'selected' : '' }} value="Menikah">Menikah</option>
                        </select>
                    </div>
                    @error('agama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror<div class="form-group">
                        <label for="">Jaminan</label>
                        <select name="jaminan" id="jaminan" class="form-control">
                            <option value="">--pilih--</option>
                            <option {{ $dataPendaftaran->jaminan == "bpjs" ? 'selected' : '' }} value="bpjs">BPJS</option>
                        </select>
                    </div>
                    @error('jaminan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
    
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  @endsection