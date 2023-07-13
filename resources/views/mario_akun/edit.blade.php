@extends('mario_layout.mario_template')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaturan Akun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan Akun</li>
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
          <h3 class="card-title">Edit Data Akun</h3>
        </div>
        <div class="card-body">
<form action="{{ asset('mario_akun/edit_proses') }}" method="POST">
@csrf
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Nomor Akun</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nomor Akun" name="nomor_akun" value="<?php echo $akun->nomor_akun ?>" disabled>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Nama Akun</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nama Akun" name="nama_akun" value="<?php echo $akun->nama_akun ?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Tipe</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Tipe" name="tipe" value="<?php echo $akun->tipe ?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Induk</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Induk" name="induk" value="<?php echo $akun->induk ?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Level</label>
    <div class="col-sm-10">
      <select class="form-control" id="exampleFormControlSelect1" name="level" value="<?php echo $akun->level ?>">
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Kelompok</label>
    <div class="col-sm-10">
      <select class="form-control" id="exampleFormControlSelect1" name="kelompok" value="<?php echo $akun->kelompok ?>">
      <option>Debet</option>
      <option>Kredit</option>
    </select>
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