@extends('layout.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT DATA REGISTRASI RAWAT INAP PASIEN</h1>
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
        <form action="{{ route('layanan.rawatinap.update',$dataRawatInap->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="">Nama Pasien</label>
                      <input type="text" disabled value="{{ $dataRawatInap->pasien->nama_pasien }}" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Poli</label>
                      <select name="poli" id="poli" class="form-control">
                          {{-- data poli diambil dari database --}}
                          <option value="">--Pilih--</option>
                          @foreach ($dataPoli as $poli)
                              <option {{ $dataRawatInap->poli_id == $poli->id ? "selected" : "" }} value="{{ $poli->id }}">{{ $poli->nama_poli }}</option>
                          @endforeach
                      </select>
                  </div>
                  @error('poli')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="">Tempat Lahir</label>
                      <input type="text" name="tempatLahir" class="form-control" value="{{ $dataRawatInap->tempat_lahir }}">
                  </div>
                  @error('tempatLahir')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                      <input type="date" name="tglLahir" class="form-control" value="{{ $dataRawatInap->tgl_lahir }}">
                  </div>
                  @error('tglLahir')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <div class="form-group">
                      <label for="">Alamat</label>
                      <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3">{{ $dataRawatInap->alamat }}</textarea>
                  </div>
                  @error('alamat')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <div class="form-group">
                      <label for="">Nomor RT</label>
                      <input type="text" name="noRt" class="form-control" value="{{ $dataRawatInap->no_rt }}">
                  </div>
                  @error('noRt')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <div class="form-group">
                      <label for="">Nomor RW</label>
                      <input type="text" name="noRw" class="form-control" value="{{ $dataRawatInap->no_rw }}">
                  </div>
                  @error('noRw')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  
              </div>
  
              <div class="col-md-6">
                  
                  <div class="form-group">
                      <label for="">Kelurahan</label>
                      <input type="text" name="kelurahan" class="form-control" value="{{ $dataRawatInap->kelurahan }}">
                  </div>
                  @error('kelurahan')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <div class="form-group">
                      <label for="">Telepon</label>
                      <input type="text" name="telepon" class="form-control" value="{{ $dataRawatInap->tlp }}">
                  </div>
                  @error('telepon')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  
                  <div class="form-group">
                      <label for="">Pekerjaan</label>
                      <select name="pekerjaan" id="pekerjaan" class="form-control">
                        <option value="">--Pilih--</option>
                        <option {{ $dataRawatInap->pekerjaan == "Belum Bekerja" ? "selected" : "" }} value="Belum Bekerja">Belum Bekerja</option>
                        <option {{ $dataRawatInap->pekerjaan == "ASN" ? "selected" : "" }} value="ASN">ASN</option>
                        <option {{ $dataRawatInap->pekerjaan == "Wiraswasta" ? "selected" : "" }} value="Wiraswasta">Wiraswasta</option>
                        <option {{ $dataRawatInap->pekerjaan == "Pegawai Swasta" ? "selected" : "" }} value="Pegawai Swasta">Pegawai Swasta</option>
                        <option {{ $dataRawatInap->pekerjaan == "Mahasiswa" ? "selected" : "" }} value="Mahasiswa">Mahasiswa</option>
                        <option {{ $dataRawatInap->pekerjaan == "Pelajar" ? "selected" : "" }} value="Pelajar">Pelajar</option>
                        <option {{ $dataRawatInap->pekerjaan == "Lainnya" ? "selected" : "" }} value="Lainnya">Lainnya</option>
                      </select>
                  </div>
                  @error('pekerjaan')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <h4>Identitas Penanggung Jawab</h4>
                  <hr>
                    <div class="form-group">
                        <label for="">Nama (Sesuai KTP)</label>
                        <input type="text" name="namaPenanggungJawab" class="form-control" value="{{ $dataRawatInap->nama_penanggung_jawab }}">
                    </div>
                    @error('namaPenanggungJawab')
                        <aler class="alert-danger">{{ $message }}</aler>
                    @enderror
                    <div class="form-group">
                        <label for="">Alamat (Sesuai KTP)</label>
                        <textarea name="alamatPenanggungJawab" id="" cols="30" rows="3" class="form-control">{{ $dataRawatInap->alamat_penanggung_jawab }}</textarea>
                    </div>
                    @error('alamatPenanggungJawab')
                        <aler class="alert-danger">{{ $message }}</aler>
                    @enderror
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" name="teleponPenanggungJawab" class="form-control" value="{{ $dataRawatInap->telepon_penanggung_jawab }}">
                    </div>
                    @error('teleponPenanggungJawab')
                        <aler class="alert-danger">{{ $message }}</aler>
                    @enderror
                    <div class="form-group">
                        <label for="">Hubungan dengan pasien sebagai :</label>
                        <input type="text" name="hubunganPasien" class="form-control" value="{{ $dataRawatInap->hubungan_pasien }}">
                    </div>
                    @error('hubunganPasien')
                        <aler class="alert-danger">{{ $message }}</aler>
                    @enderror

                  <button class="btn btn-primary">Simpan</button>
                  <a href="{{ route('layanan.rawatinap.show',$dataRawatInap->id) }}" class="btn btn-warning">Kembali</a>
              </div>
            </div>
        </form>
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