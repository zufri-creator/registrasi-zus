@extends('layout.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA PASIEN</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail profil pasien</h3>

          
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
                <div class="alert alert-info alert-dismissible">
                    <h5>PROFIL PASIEN</h5>
                </div>
                <table class="table">
                    <tr>
                        <td>Nama pasien</td>
                        <td>:</td>
                        <td>{{ $dataPasien->nama_pasien }}</td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>{{ $dataPasien->username }}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>{{ $dataPasien->password }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible">
                    <h5>Edit username dan password</h5>
                </div>
                <form action="{{ route('pasien.profilpasien.update',$dataPasien->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    @error('username')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{ $messages }}</div>
                    @enderror
                    <button class="btn btn-primary">Simpan</button>

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