@extends('layoutadmin.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA RAWAT JALAN PASIEN</h1>
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
                    DATA PASIEN YANG BELUM DI PROSES
                </div>
            </div>
        </div>
          <div class="row">
            
            <table class="table">
                <thead class="thead-dark">
                    <th>Nama Pasien</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Status</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                  @forelse ($dataRawatJalan as $data)
                      <tr>
                          <td>{{ $data->pasien->nama_pasien }}</td>
                          <td>{{ $data->tgl_lahir }}</td>
                          <td>{{ $data->alamat }}</td>
                          <td>{{ $data->tlp }}</td>
                          <td>{{ $data->status }}</td>
                          <td>
                              <a href="{{ route('admin.rawatjalan.show',$data->id) }}">Detail</a>
                          </td>
                      </tr>
                    
                  @empty
                    
                  @endforelse
                </tbody>
            </table>
          </div>
          <br>
          <hr>
          <div class="row">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible">
                    DATA PASIEN YANG SUDAH DI PROSES
                </div>
            </div>
            <table class="table">
                <thead class="thead-dark">
                    <th>Nama Pasien</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Status</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                  @forelse ($rawatJalan as $dataRawatJalan)
                      <tr>
                          <td>{{ $dataRawatJalan->pasien->nama_pasien }}</td>
                          <td>{{ $dataRawatJalan->tgl_lahir }}</td>
                          <td>{{ $dataRawatJalan->alamat }}</td>
                          <td>{{ $dataRawatJalan->tlp }}</td>
                          <td>{{ $dataRawatJalan->status }}</td>
                          <td>
                              <a href="{{ route('admin.rawatjalan.diproses',$dataRawatJalan->id) }}">Detail</a>
                          </td>
                      </tr>
                    
                  @empty
                    
                  @endforelse
                </tbody>
            </table>
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