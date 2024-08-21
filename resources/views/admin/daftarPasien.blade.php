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
          <h3 class="card-title"></h3>

          
        </div>
        <div class="card-body">
          <div class="row">
            <table class="table">
                <thead>
                    <th>Nama pasien</th>
                    <th>Kelamin</th>
                    <th>Agama</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Status</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($dataPasien as $pasien)
                        <tr>
                            <td>{{ $pasien->pasien->nama_pasien }}</td>
                            <td>{{ $pasien->jk }}</td>
                            <td>{{ $pasien->agama }}</td>
                            <td>{{ $pasien->pendidikan }}</td>
                            <td>{{ $pasien->pekerjaan }}</td>
                            <td>{{ $pasien->status }}</td>
                            <td>
                                <a href="{{ route('admin.daftarpasien.detail', $pasien->id) }}">Detail</a>
                            </td>
                        </tr>
                    @endforeach
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