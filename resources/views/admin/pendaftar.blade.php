@extends('template.master')

@section('content')


<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Verifikasi Pendaftar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nik</th>
                        <th>Nama UMKM</th>
                        <th>Asosiasi</th>
                        <th>Verifikasi</th>
                    </tr>
                </thead>
              
                <tbody>
                  
                @foreach($pendaftars as $pendaftar)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pendaftar->name}}</td>
                        <td>{{$pendaftar->email}}</td>
                        <td>{{$pendaftar->nik}}</td>
                        <td>{{$pendaftar->nama_umkm}}</td>
                        <td>{{$pendaftar->asosiasi}}</td>
                        <td>
                            <a href="{{url('pendaftarverif/'.$pendaftar->id)}}" class="btn btn-sm btn-success">
                                <i class="fa fa-check"></i> Verifikasi
                            </a>

                            <a href="{{url('pendaftartolakverif/'.$pendaftar->id)}}" class="btn btn-sm btn-danger">
                                <i class="fa fa-window-close"></i> Tolak
                            </a>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    var table = $('#dataTable').DataTable();
</script>

@endsection