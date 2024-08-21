@extends('layout.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Pendaftaran Pasien</h1>
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
                    <div class="coba"></div>
                    
                    <div class="alert alert-info alert-dismissible">
                        {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
                        <h5>Anda sudah melakukan pendaftaran pasien</h5>
                        BERIKUT ADALAH DATA DETAIL PENDAFTARAN ANDA
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                          
                        <tr>
                            <td width="300">Nama Pasien</td>
                            <td>:</td>
                            <td>{{ $dataPendaftaran->pasien->nama_pasien }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{ $dataPendaftaran->jk }}</td>
                        </tr>
                        <tr>
                            <td>Nama Penjamin</td>
                            <td>:</td>
                            <td>{{ $dataPendaftaran->nama_penjamin }}</td>
                        </tr>
                        <tr>
                            <td>No KK</td>
                            <td>:</td>
                            <td>{{ $dataPendaftaran->no_kk }}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>{{ $dataPendaftaran->agama }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>:</td>
                            <td>{{ $dataPendaftaran->pendidikan }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td>{{ $dataPendaftaran->pekerjaan }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>{{ $dataPendaftaran->status }}</td>
                        </tr>
                        <tr>
                            <td>Jaminan</td>
                            <td>:</td>
                            <td>{{ $dataPendaftaran->jaminan }}</td>
                        </tr>
                        <tr>
                            <td colspan="3"><a href="{{ route('layanan.pendaftaran.edit',$dataPendaftaran->id) }}" class="btn btn-warning">Edit</a></td>
                        </tr>
                        
                    </table>
                </div>
            </div>
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