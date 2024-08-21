@extends('layout.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>REGISTRASI RAWAT INAP PASIEN</h1>
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
        <form action="{{ route('layanan.rawatinap.store') }}" method="POST">
            @csrf
            <input type="hidden" name="pasien_id" value="{{ $dataPasien->id }}">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="">Nama Pasien</label>
                      <input type="text" disabled value="{{ $dataPasien->nama_pasien }}" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Poli</label>
                      <select name="poli" id="poli" class="form-control">
                          {{-- data poli diambil dari database --}}
                          <option value="">--Pilih--</option>
                          @foreach ($dataPoli as $poli)
                              <option value="{{ $poli->id }}">{{ $poli->nama_poli }}</option>
                          @endforeach
                      </select>
                  </div>
                  @error('poli')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="">Tempat Lahir</label>
                      <input type="text" name="tempatLahir" class="form-control">
                  </div>
                  @error('tempatLahir')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                      <input type="date" name="tglLahir" class="form-control">
                  </div>
                  @error('tglLahir')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <div class="form-group">
                      <label for="">Alamat</label>
                      <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3"></textarea>
                  </div>
                  @error('alamat')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <div class="form-group">
                      <label for="">Nomor RT</label>
                      <input type="text" name="noRt" class="form-control">
                  </div>
                  @error('noRt')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <div class="form-group">
                      <label for="">Nomor RW</label>
                      <input type="text" name="noRw" class="form-control">
                  </div>
                  @error('noRw')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  
              </div>
  
              <div class="col-md-6">
                  
                  <div class="form-group">
                      <label for="">Kelurahan</label>
                      <input type="text" name="kelurahan" class="form-control">
                  </div>
                  @error('kelurahan')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <div class="form-group">
                      <label for="">Telepon</label>
                      <input type="text" name="telepon" class="form-control">
                  </div>
                  @error('telepon')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  
                  <div class="form-group">
                      <label for="">Pekerjaan</label>
                      <select name="pekerjaan" id="pekerjaan" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="Belum Bekerja">Belum Bekerja</option>
                        <option value="ASN">ASN</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Pelajar">Pelajar</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                  </div>
                  @error('pekerjaan')
                      <aler class="alert-danger">{{ $message }}</aler>
                  @enderror
                  <h4>Identitas Penanggung Jawab</h4>
                  <hr>
                    <div class="form-group">
                        <label for="">Nama (Sesuai KTP)</label>
                        <input type="text" name="namaPenanggungJawab" class="form-control">
                    </div>
                    @error('namaPenanggungJawab')
                        <aler class="alert-danger">{{ $message }}</aler>
                    @enderror
                    <div class="form-group">
                        <label for="">Alamat (Sesuai KTP)</label>
                        <textarea name="alamatPenanggungJawab" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    @error('alamatPenanggungJawab')
                        <aler class="alert-danger">{{ $message }}</aler>
                    @enderror
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" name="teleponPenanggungJawab" class="form-control">
                    </div>
                    @error('teleponPenanggungJawab')
                        <aler class="alert-danger">{{ $message }}</aler>
                    @enderror
                    <div class="form-group">
                        <label for="">Hubungan dengan pasien sebagai :</label>
                        <input type="text" name="hubunganPasien" class="form-control">
                    </div>
                    @error('hubunganPasien')
                        <aler class="alert-danger">{{ $message }}</aler>
                    @enderror

                  <button class="btn btn-primary btn-lg">Regsitrasi</button>
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