@extends('mario_layout.mario_template')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaturan User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan User</li>
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
          <h3 class="card-title">Edit Data User</h3>
        </div>
        <div class="card-body">
<form action="{{ asset('mario_user/edit_proses') }}" method="POST">
@csrf
<div class="form-group row">
    <label class="col-sm-2 col-form-label">ID User</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Isi hanya dengan angka" name="id_user" value="<?php echo $akun->id_user ?>" disabled>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">User Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Username harus unik" name="user_name" value="<?php echo $akun->user_name ?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="Password harus rumit" name="password" value="<?php echo $akun->password ?>">
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