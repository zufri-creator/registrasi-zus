@extends('layoutadmin.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA RAWAT INAP PASIEN</h1>
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
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Pekerjaan</th>
                    <th>Poli</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                  @forelse ($dataRawatInap as $data)
                      <tr>
                          <td>{{ $data->pasien->nama_pasien }}</td>
                          <td>{{ $data->alamat }}</td>
                          <td>{{ $data->tlp }}</td>
                          <td>{{ $data->pekerjaan }}</td>
                          <td>{{ $data->poli->nama_poli }}</td>
                          <td>
                              <a href="{{ route('admin.rawatinap.show',$data->id) }}">Detail</a>
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
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Pekerjaan</th>
                    <th>Poli</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                  @forelse ($telahProses as $dataRawatInap)
                      <tr>
                          <td>{{ $dataRawatInap->pasien->nama_pasien }}</td>
                          <td>{{ $dataRawatInap->alamat }}</td>
                          <td>{{ $dataRawatInap->tlp }}</td>
                          <td>{{ $dataRawatInap->pekerjaan }}</td>
                          <td>{{ $dataRawatInap->poli->nama_poli }}</td>
                          <td>
                              <a href="{{ route('admin.rawatinap.proses',$dataRawatInap->id) }}">Detail</a>
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