@extends('template.master')

@section('content')


<!-- Modal -->
<div class="modal fade" id="modal_tambah_form" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_formLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_tambah_formLabel">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('katalogadmin')}}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_hapus_form" tabindex="-1" role="dialog" aria-labelledby="modal_hapus_formLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_hapus_formLabel">Apakah Anda Yakin Mau Menghapus?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a id="btn-hapus" class="btn btn-primary">Hapus</a>
                </div>

        </div>
    </div>
</div>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Katalog</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Katalog

            <button class="btn btn-sm btn-primary float-right" onclick="tambahKatalog()"> <i class="fa fa-plus"></i>
                Tambah</button>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Option</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($katalogs as $katalog)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$katalog->judul}}</td>
                        <td>{{$katalog->deskripsi}}</td>
                        <td>
                            <button onclick="editKatalog({{$katalog}})" class="btn btn-sm btn-warning">
                                <i class="fa fa-edit"></i> Edit
                            </button>

                            <button onclick="hapusKatalog({{$katalog}})" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                           
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
    function tambahKatalog() {
        $("[name='judul']").val('');
        $("[name='deskripsi']").val('');
        $("modal_tambah_formLabel").html("Tambah Katalog"); 
        $("#modal_tambah_form form").attr("action", "{{url('katalogadmin')}}");
        $('#modal_tambah_form').modal('show');
    }

    function editKatalog(katalog) {
        $("[name='judul']").val(katalog.judul);
        $("[name='deskripsi']").val(katalog.deskripsi);
        $("modal_tambah_formLabel").html("Edit Katalog"); 
        $("#modal_tambah_form form").attr("action", "{{url('katalogadmin')}}/"+katalog.id);
        $('#modal_tambah_form').modal('show');
    }

    function hapusKatalog(katalog) {
        $("#btn-hapus").attr("href", "{{url('katalogadmin/hapus')}}/"+katalog.id);
        $('#modal_hapus_form').modal('show');
    }
</script>

@endsection