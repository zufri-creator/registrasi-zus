@extends('layoutadmin.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DETAIL RAWAT JALAN PASIEN</h1>
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
            {{-- TABEL INFORMASI DATA PENDAFTARAN PASIEN --}}
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <td width="300">Nama Pasien</td>
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
                    
                </table>
            </div>
            {{-- TABEL UNTUK INPUT DATA PENDAFTARAN RAWAT JALAN PASIEN OLEH PETUGAS --}}
            <div class="col-md-6">
                <div class="alert alert-info alert-dismisses">
                    DATA YANG DI ISI OLEH PETUGAS
                </div>
                <table class="table">
                    <tr>
                        <td width="300">Tanggal Kunjungan</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->tgl_kunjungan }}</td>
                    </tr>
                    <tr>
                        <td width="300">Alergi</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->alergi }}</td>
                    </tr>
                    <tr>
                        <td width="300">Keseimbangan Berjalan Pasien, Apakah pasien tampak seimbang ?</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->keseimbangan_berjalan }}</td>
                    </tr>
                    <tr>
                        <td width="300">Apakah pasien memegang pinggiran kursi/meja saat akan duduk ?</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->menopang_saat_duduk }}</td>
                    </tr>
                    <tr>
                        <td width="300">Resiko Jatuh</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->resiko_jatuh }}</td>
                    </tr>
                    <tr>
                        <td width="300">Aktifitas Mobilisasi</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->aktifitas_mobilisasi }}</td>
                    </tr>
                    <tr>
                        <td width="300">Riwayat Penyakit</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->riwayat_penyakit }}</td>
                    </tr>
                    <tr>
                        <td width="300">Status General</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->status_general }}</td>
                    </tr>
                    <tr>
                        <td>Keluhan Utama Pasien</td>
                        <td>:</td>
                        <td>{{ $dataKunjungan->keluhan_utama }}</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
                            <a href="{{ route('admin.rawatjalan.cetak', $dataRawatJalan->id) }}" class="btn btn-success" target="_blank">Cetak</a>
                            {{-- <button id="btn-cetak" class="btn btn-success">Cetak</button> --}}
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