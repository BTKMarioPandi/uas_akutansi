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
          <h3 class="card-title">Tabel Data Pencatatan</h3>
        </div>
        <div class="card-body">
        @if (session('msg')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> {{ session('msg') }}
      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <button type="button" class="btn btn-sm btn-success" onclick="window.location='{{ url('mario_jurnal/tambah') }}'">
        <i class="fas fa-plus-circle"></i> Tambah Data
</button>
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
    <th>ID Jurnal</th>
    <th>Nama Akun</th>
    <th>Jenis Jurnal</th>
    <th>Tanggal</th>
    <th>Aksi</th>           
        </tr>
    </thead>

    <tbody>
        @foreach($akun as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->id_jurnal }}</td>
            <td>{{ $row->nama_akun }}</td>
            <td>{{ $row->jns_jurnal }}</td>
            <td>{{ $row->tanggal }}</td>
            <td>
              <button onclick="window.location='{{ url('mario_jurnal/edit/'.$row->id_jurnal) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

                <button onClick="window.location='{{ url('mario_jurnal/delete/'.$row->id_jurnal) }}'" type="button"  title="Hapus Data" class="btn btn-danger btn-sm">
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