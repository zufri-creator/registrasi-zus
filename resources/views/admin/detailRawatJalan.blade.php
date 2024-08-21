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
                    <tr>
                        <td colspan="3"><a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a></td>
                    </tr>
                </table>
            </div>
            {{-- TABEL UNTUK INPUT DATA PENDAFTARAN RAWAT JALAN PASIEN OLEH PETUGAS --}}
            <div class="col-md-6">
                <div class="alert alert-info alert-dismisses">
                    Formulir rawat jalan belum diisi
                </div>
                <form action="{{ route('admin.kunjungan.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="rawat_jalan_id" value="{{ $dataRawatJalan->id }}">
                    <div class="form-group">
                        <label for="">Tanggal Kunjungan</label>
                        <input type="date" name="tgl_kunjungan" class="form-control">
                    </div>
                    @error('tgl_kunjungan')
                        <alert class="alert-danger">{{ $messages }}</alert>
                    @enderror
                    <div class="form-group">
                        <label for="">Alergi</label>
                        <select name="alergi" class="form-control" id="">
                            <option value="">--Pilih--</option>
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>
                    @error('alergi')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Keseimbangan Berjalan Pasien, Apakah pasien tampak seimbang ?</label>
                        <select name="keseimbangan_berjalan" class="form-control" id="">
                            <option value="">--Pilih--</option>
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>
                    @error('keseimbangan_berjalan')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Apakah pasien memegang pinggiran kursi/meja saat akan duduk ?</label>
                        <select name="menopang_saat_duduk" class="form-control" id="">
                            <option value="">--Pilih--</option>
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>
                    @error('menopang_saat_duduk')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Resiko Jatuh</label>
                        <select name="resiko_jatuh" class="form-control" id="">
                            <option value="">--Pilih--</option>
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>
                    @error('resiko_jatuh')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Aktifitas Mobilisasi</label>
                        <select name="aktifitas_mobilisasi" class="form-control" id="">
                            <option value="">--Pilih--</option>
                            <option value="Mandiri">Mandiri</option>
                            <option value="Perlu Bantuan">Perlu Bantuan</option>
                        </select>
                    </div>
                    @error('aktifitas_mobilisasi')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Riwayat Penyakit</label>
                        <select name="riwayat_penyakit" class="form-control" id="">
                            <option value="">--Pilih--</option>
                            <option value="Auto Anamnesis">Auto Anamnesis</option>
                            <option value="Alloanamnesis">Alloanamnesis</option>
                        </select>
                    </div>
                    @error('riwayat_penyakit')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Status General</label>
                        <select name="status_general" class="form-control" id="">
                            <option value="">--Pilih--</option>
                            <option value="Baik">Baik</option>
                            <option value="Tanpa Penyakit">Tanpa Penyakit</option>
                            <option value="Sesak">Sesak</option>
                            <option value="Pucat">Pucat</option>
                            <option value="Lemah">Lemah</option>
                            <option value="Kejang">Kejang</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    @error('status_general')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Keluhan Utama Pasien</label>
                        <textarea name="keluhan_utama" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    @error('keluhan_utama')
                        <alert class="alert-danger">{{ $messages }}</alert>
                    @enderror
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
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