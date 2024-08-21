@extends('layout.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA REGISTRASI RAWAT INAP PASIEN</h1>
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
            <a href="{{ route('layanan.rawatinap.create') }}" class="btn btn-primary">Registrasi</a>
        </div>
        <br>
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
                    @forelse ($dataRawatInap as $rawatInap)
                        <tr>
                            <td>{{ $rawatInap->pasien->nama_pasien }}</td>
                            <td>{{ $rawatInap->alamat }}</td>
                            <td>{{ $rawatInap->tlp }}</td>
                            <td>{{ $rawatInap->pekerjaan }}</td>
                            <td>{{ $rawatInap->poli->nama_poli }}</td>
                            <td>
                                <a href="{{ route('layanan.rawatinap.show',$rawatInap->id) }}">Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="">Data kosong</td>
                        </tr>
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