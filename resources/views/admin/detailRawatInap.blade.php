@extends('layoutadmin.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DETAIL RAWAT INAP PASIEN</h1>
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
                        <td>Tanggal Lahir</td>
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
                        <td>Teleponn</td>
                        <td>:</td>
                        <td>{{ $dataRawatInap->telepon }}</td>
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
                        <td colspan="3"><a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a></td>
                    </tr>
                </table>
            </div>
            {{-- TABEL UNTUK INPUT DATA PENDAFTARAN RAWAT JALAN PASIEN OLEH PETUGAS --}}
            <div class="col-md-6">
                <div class="alert alert-info alert-dismisses">
                    Formulir rawat inap belum diisi
                </div>
                <form action="{{ route('admin.rawatinap.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="rawat_inap_id" value="{{ $dataRawatInap->id }}">
                    <div class="form-group">
                        <label for="">Jenis Ruangan</label>
                        <input type="text" name="jenis_ruangan" class="form-control">
                    </div>
                    @error('jenis_ruangan')
                        <alert class="alert-danger">{{ $messages }}</alert>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <select name="kelas" class="form-control" id="">
                            <option value="">--Pilih--</option>
                            <option value="Satu">Satu</option>
                            <option value="Dua">Dua</option>
                            <option value="Tiga">Tiga</option>
                            <option value="VIP">VIP</option>
                        </select>
                    </div>
                    @error('kelas')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Tanggal Masuk</label>
                        <input type="date" name="tgl_masuk" class="form-control">
                    </div>
                    @error('tgl_masuk')
                        <alert class="alert-danger">{{ $messages }}</alert>
                    @enderror
                    <div class="form-group">
                        <label for="">Jam Masuk</label>
                        <input type="text" name="jam_masuk" class="form-control" placeholder="contoh (13.00)">
                    </div>
                    @error('jam_masuk')
                        <alert class="alert-danger">{{ $messages }}</alert>
                    @enderror
                    <div class="form-group">
                        <label for="">Asal Pasien</label>
                        <select name="asal_pasien" class="form-control" id="">
                            <option value="">--Pilih--</option>
                            <option value="IGD">IGD</option>
                            <option value="Klinik">Klinik</option>
                            <option value="Rujukan">Rujukan</option>
                        </select>
                    </div>
                    @error('asal_pasien')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Status Pasien</label>
                        <select name="status_pasien" class="form-control" id="">
                            <option value="">--Pilih--</option>
                            <option value="Rumah Sakit">Rumah Sakit</option>
                            <option value="Pribadi">Pribadi</option>
                            <option value="Rekanan">Rekanan</option>
                        </select>
                    </div>
                    @error('status_pasien')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Biaya Perawatan</label>
                        <select name="biaya_perawatan" class="form-control" id="">
                            <option value="">--Pilih--</option>
                            <option value="Pribadi">Pribadi</option>
                            <option value="Perusahaan/Asuransi">Perusahaan/Asuransi</option>
                        </select>
                    </div>
                    @error('biaya_perawatan')
                        <div class="alert alert-danger">{{ $messages }}</div>
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