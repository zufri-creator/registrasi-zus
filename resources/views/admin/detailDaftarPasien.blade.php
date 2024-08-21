@extends('layoutadmin.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DAFTAR PASIEN</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Data Pasien</h3>

          
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <td>Nama Pasien</td>
                        <td>:</td>
                        <td>{{ $dataPasien->pasien->nama_pasien }}</td>
                    </tr>
                    <tr>
                        <td>Kelamin</td>
                        <td>:</td>
                        <td>{{ $dataPasien->jk }}</td>
                    </tr>
                    <tr>
                        <td>Nama Penjamin</td>
                        <td>:</td>
                        <td>{{ $dataPasien->nama_penjamin }}</td>
                    </tr>
                    <tr>
                        <td>No Kartu Keluarga</td>
                        <td>:</td>
                        <td>{{ $dataPasien->no_kk }}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>{{ $dataPasien->agama }}</td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td>{{ $dataPasien->pendidikan }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $dataPasien->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>{{ $dataPasien->status }}</td>
                    </tr>
                    <tr>
                        <td>Jaminan</td>
                        <td>:</td>
                        <td>{{ $dataPasien->jaminan }}</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
                        </td>
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