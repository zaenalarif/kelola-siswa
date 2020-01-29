@extends('layouts.index')
@section('title')
    
@endsection

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div class="section-header">
    <h1>Home</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Modules</a></div>
      <div class="breadcrumb-item">DataTables</div>
    </div>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row center">
              <div class="col">
                <a href="" class="btn btn-primary" >Import</a>
              </div>
              <div class="col">
                <a href="" class="btn btn-secondary" >Download</a>  
              </div>
              <div class="col">
                <a href="" class="btn btn-info">Tambah</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Daftar Peserta</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr>
                    <th class="text-center">
                      #
                    </th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelasmin</th>
                    <th>Tempat lahir</th>
                    <th>tanggal lahir</th>
                    <th>Orang tua</th>
                    <th>Program</th>
                    <th>Mapel Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>NISN</td>
                    <td>Nama</td>
                    <td>Jenis Kelasmin</td>
                    <td>Tempat lahir</td>
                    <td>tanggal lahir</td>
                    <td>Orang tua</td>
                    <td>Program</td>
                    <td>Mapel Pilihan</td>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>NISN</td>
                    <td>Nama</td>
                    <td>Jenis Kelasmin</td>
                    <td>Tempat lahir</td>
                    <td>tanggal lahir</td>
                    <td>Orang tua</td>
                    <td>Program</td>
                    <td>Mapel Pilihan</td>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>NISN</td>
                    <td>Nama</td>
                    <td>Jenis Kelasmin</td>
                    <td>Tempat lahir</td>
                    <td>tanggal lahir</td>
                    <td>Orang tua</td>
                    <td>Program</td>
                    <td>Mapel Pilihan</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
    <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/modules-datatables.js')}}"></script>

  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready( function () {
        $('#table-1').DataTable();
    } );
  </script>
@endsection