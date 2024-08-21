@extends('layoutadmin.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA POLI RUMAH SAKIT</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">TAMBAH DATA POLI</h3>

          
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
                <form action="{{ route('admin.poli.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Poli</label>
                        <input type="text" name="poli" class="form-control">
                    </div>
                    @error('poli')
                        <alert class="alert-danger">{{ $message }}</alert>
                    @enderror
                    <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                </form>
            </div>
          </div>
          <br><br>
          <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nama Poli</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                      @php
                        $no=1;
                      @endphp
                        @forelse ($dataPoli as $poli)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $poli->nama_poli }}</td>
                                <td>
                                    <form action="{{ route('admin.poli.update', $poli->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-danger btn-xs"><span class="fa fa-pencil-alt"></span></button>
                                    </form>
                                    <a href="" class="btn btn-warning btn-xs"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                            @php
                              $no++;
                            @endphp
                        @empty
                            
                        @endforelse
                        
                    </tbody>
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