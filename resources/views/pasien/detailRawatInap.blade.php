@extends('layout.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DETAIL DATA RAWAT INAP PASIEN</h1>
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
                <table class="table">
                    <tr>
                        <td>Nama Pasien</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->pasien->nama_pasien }}</td>
                    </tr>
                    <tr>
                        <td>Poli</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->poli->nama_poli }}</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->tempat_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->alamat }}</td>
                    </tr>
                    <tr>
                        <td>No RT</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->no_rt }}</td>
                    </tr>
                    <tr>
                        <td>No RW</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->no_rw }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan/Desa</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->kelurahan }}</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->tlp }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Nama Penanggung Jawab</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->nama_penanggung_jawab }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Penanggung Jawab</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->alamat_penanggung_jawab }}</td>
                    </tr>
                    <tr>
                        <td>Telepon Penanggung Jawab</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->telepon_penanggung_jawab }}</td>
                    </tr>
                    <tr>
                        <td>Hubungan penanggung jawab dengan pasienn</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->hubungan_pasien }}</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a href="{{ route('layanan.rawatinap.edit',$dataRawatInap->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
              <div class="alert alert-info alert-dismissible">
                <h5><i class="icon fas fa-info"></i>Informasi</h5>
                Informasi dibawah ini akan disi oleh petugas kesehatan
              </div>
              <table class="table">
                <tr>
                  <td>Jenis Ruangan</td>
                  <td>:</td>
                  <td>{{ $dataPenerimaan->jenis_ruangan }}</td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td>:</td>
                  <td>{{ $dataPenerimaan->kelas }}</td>
                </tr>
                <tr>
                  <td>Tanggal Masuk</td>
                  <td>:</td>
                  <td>{{ $dataPenerimaan->tgl_masuk }}</td>
                </tr>
                <tr>
                  <td>Jam Masuk</td>
                  <td>:</td>
                  <td>{{ $dataPenerimaan->jam_masuk }}</td>
                </tr>
                <tr>
                  <td>Asal Pasien</td>
                  <td>:</td>
                  <td>{{ $dataPenerimaan->asal_pasien }}</td>
                </tr>
                <tr>
                  <td>Status Pasien</td>
                  <td>:</td>
                  <td>{{ $dataPenerimaan->status_pasien }}</td>
                </tr>
                <tr>
                  <td>Biaya Perawatan</td>
                  <td>:</td>
                  <td>{{ $dataPenerimaan->biaya_perawatan }}</td>
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