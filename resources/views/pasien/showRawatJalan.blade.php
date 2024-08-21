@extends('layout.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DETAIL DATA RAWAT JALAN PASIEN</h1>
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
                    {{-- @foreach ($dataRawatJalan as $rawatJalan) --}}
                        
                    <tr>
                        <td>Nama Pasien</td>
                        <td>:</td>
                        <td>{{ $dataRawatJalan->pasien->nama_pasien }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ $dataRawatJalan->tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $dataRawatJalan->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td>{{ $dataRawatJalan->tlp }}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>{{ $dataRawatJalan->agama }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>{{ $dataRawatJalan->status }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $dataRawatJalan->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Nama Penanggung Jawab</td>
                        <td>:</td>
                        <td>{{ $dataRawatJalan->nama_penganggun_jawab }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Penanggung Jawab</td>
                        <td>:</td>
                        <td>{{ $dataRawatJalan->alamat_penangguna_jawab }}</td>
                    </tr>
                    {{-- @endforeach --}}
                    <tr>
                        <td colspan="3"><a href="{{ url()->previous() }}" class="btn btn-warning btn-lg">Kembali</a></td>
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
                        <td>Tanggal Kunjungan</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->tgl_kunjungan }}</td>
                    </tr>
                    <tr>
                        <td>Alergi</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->alergi }}</td>
                    </tr>
                    <tr>
                        <td>Keseimbangan Berjalan</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->keseimbangan_berjalan }}</td>
                    </tr>
                    <tr>
                        <td>Menopang Saat Duduk</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->menopang_saat_duduk }}</td>
                    </tr>
                    <tr>
                        <td>Resiko Jatuh</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->resiko_jatuh }}</td>
                    </tr>
                    <tr>
                        <td>Aktifitas Mobilisasi</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->aktifitas_mobilisasi }}</td>
                    </tr>
                    <tr>
                        <td>Riwayat Penyakit</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->riwayat_penyakit }}</td>
                    </tr>
                    <tr>
                        <td>Status General</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->status_general }}</td>
                    </tr>
                    <tr>
                        <td>Keluhan Utama</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->keluhan_utama }}</td>
                    </tr>
                </table>
            </div>
          </div>
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