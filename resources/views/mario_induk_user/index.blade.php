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
          <h3 class="card-title">Tabel Induk User</h3>
        </div>
        <div class="card-body">
        @if (session('msg')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> {{ session('msg') }}
      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <button type="button" class="btn btn-sm btn-success" onclick="window.location='{{ url('mario_induk_user/tambah') }}'">
        <i class="fas fa-plus-circle"></i> Tambah Data
</button>
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
    <th>ID User</th>
    <th>Nama Lengkap</th>
    <th>Alamat</th>
    <th>Telepon</th>
    <th>Email</th>
    <th>Divisi</th>
    <th>Aksi</th>           
        </tr>
    </thead>

    <tbody>
        @foreach($akun as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->id_user }}</td>
            <td>{{ $row->nama_lengkap }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->telepon }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->divisi }}</td>
            <td>
              <button onclick="window.location='{{ url('mario_induk_user/edit/'.$row->id_user) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

                <button onClick="window.location='{{ url('mario_induk_user/delete/'.$row->id_user) }}'" type="button"  title="Hapus Data" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
                </button>
               
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          @abdulbari
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection