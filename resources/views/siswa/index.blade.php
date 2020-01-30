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
                <form action="{{ url("/siswa/import") }}" method="post" enctype="multipart/form-data">
                  <input type="file" name="file" id="">
                  <button type="submit">Import</button>
                  @csrf
                </form>
              </div>
              <div class="col">
                <a href="{{ url('siswa/cetak') }}" class="btn btn-secondary" >Download</a>  
              </div>
              <div class="col">
                <a href="{{url('siswa/create')}}" class="btn btn-info">Tambah</a>
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
                    <th>Jenis Kelamin</th>
                    <th>Tempat lahir</th>
                    <th>tanggal lahir</th>
                    <th>Orang tua</th>
                    <th>Program</th>
                    <th>Mapel Pilihan</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($siswas as $siswa)
                    <tr>
                      <td>{{ $loop->index }}</td>
                      <td>{{ $siswa->nisn }}</td>
                      <td>{{ $siswa->nama }}</td>
                      <td>{{ $siswa->jenis_kelamin }}</td>
                      <td>{{ $siswa->tempat_lahir }}</td>
                      <td>{{ date("d-M-Y", strtotime($siswa->tanggal_lahir)) }}</td>
                      <td>{{ $siswa->nama_ortu}}</td>
                      <td>{{ $siswa->program }}</td>
                      <td>{{ $siswa->mapel_pilihan }}</td>
                      <td>
                        <a href="{{ url("/siswa/$siswa->id/edit") }}" class="btn btn-sm btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{ url("siswa/$siswa->id")}}" method="post" style="display: inline">
                          <button type="submit" class="btn btn-sm btn-danger btn-action" >
                            <i class="fas fa-trash"></i>
                          </button>
                          @method("DELETE")
                          @csrf
                        </form>
                      </td>
                    </tr>
                  @endforeach
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