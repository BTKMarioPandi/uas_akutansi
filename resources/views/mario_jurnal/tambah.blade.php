@extends('mario_layout.mario_template')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pencatatan Jurnal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pencatatan Jurnal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Pencatatan</h3>
        </div>
        <div class="card-body">
<form action="{{ asset('mario_jurnal/tambah_proses') }}" method="POST">
@csrf
<div class="form-group row">
    <label class="col-sm-2 col-form-label">ID Jurnal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="ID Jurnal" name="id_jurnal">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Nama Akun</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nama Akun" name="nama_akun">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Jenis Jurnal</label>
    <div class="col-sm-10">
      <select class="form-control" id="exampleFormControlSelect1" name="jns_jurnal">
      <option>Jurnal Masuk</option>
      <option>Jurnal Keluar</option>
    </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
      <input id="date" class="form-control" placeholder="Tanggal" name="tanggal">
    </div>
</div>
<input type="submit" value="Simpan">
</form>  
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          @abdulbari
        </div>
        <!-- /.card-footer-->
</div></div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection