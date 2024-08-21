@extends('layout.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>REGISTRASI PASIEN</h1>
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
        
        <form action="{{ route('layanan.pendaftaran.store') }}" method="POST">
            @csrf
            {{-- example untuk pasien_id --}}
            <input type="hidden" name="pasien_id" value="{{ $dataPasien->id }}">
          <div class="row">
                {{-- PROSES INPUT RAWAT INAP --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" disabled name="" class="form-control" value="{{ $dataPasien->nama_pasien}}">
                    </div>
                    @error('namaPasien')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control">
                            <option value="">--pilih--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    @error('jk')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Nama Penjamin</label>
                        <input type="text" name="namaPenjamin" class="form-control">
                    </div>
                    @error('namaPenjamin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">No Kartu Keluarga</label>
                        <input type="text" name="noKK" class="form-control">
                    </div>
                    @error('noKK')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="">--pilih--</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                        </select>
                    </div>
                    @error('agama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Pendidikan</label>
                        <input type="text" name="pendidikan" class="form-control">
                    </div>
                    @error('pendidikan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control">
                    </div>
                    @error('pekerjaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">--pilih--</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                        </select>
                    </div>
                    @error('agama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror<div class="form-group">
                        <label for="">Jaminan</label>
                        <select name="jaminan" id="jaminan" class="form-control">
                            <option value="">--pilih--</option>
                            <option value="bpjs">BPJS</option>
                        </select>
                    </div>
                    @error('jaminan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
    
                    <button type="submit" class="btn btn-primary">Daftar</button>
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