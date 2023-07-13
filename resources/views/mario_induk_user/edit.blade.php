@extends('mario_layout.mario_template')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaturan Profil User Lengkap</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan Profil User Lengkap</li>
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
          <h3 class="card-title">Edit Data Induk User</h3>
        </div>
        <div class="card-body">
<form action="{{ asset('mario_induk_user/edit_proses') }}" method="POST">
@csrf
<div class="form-group row">
    <label class="col-sm-2 col-form-label">ID User</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Isi hanya dengan angka" name="id_user" value="<?php echo $akun->id_user ?>" disabled>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" value="<?php echo $akun->nama_lengkap ?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $akun->alamat ?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Telepon" name="telepon" value="<?php echo $akun->telepon ?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $akun->email ?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Divisi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Divisi" name="divisi" value="<?php echo $akun->divisi ?>">
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