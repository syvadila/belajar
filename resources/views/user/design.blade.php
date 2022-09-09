@extends('template.master')

@section('content')

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Pesan Design</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Design Saya</a>
    </li>

</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        @if($pesanan_design == null)
        <div class="card shadow mb-3">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Pesan Design</h6>
            </div>
            <div class="card-body">

                <form action="{{url('user/design')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputnama" class="col-sm-2 col-form-label">Nama Design</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_design" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputnama" class="col-sm-2 col-form-label">Jenis Design</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jenis_design" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputjudul" class="col-sm-2 col-form-label">Deskripsi Design</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputjudul" class="col-sm-2 col-form-label">Contoh Design</label>
                        <div class="col-sm-10">
                            <img src="" alt="" id="blah">
                            <input type="file" name="foto" class="form-control " accept="image/*"
                                onchange="readURL(this)">
                        </div>
                    </div>

                    <button class="btn btn-primary float-right">Kirim</button>

                </form>

            </div>
        </div>
        @elseif($pesanan_design->status == "pending" || $pesanan_design->status == "revisi")
        <div class="card shadow mb-3">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Design Anda Sedang Di Proses</h6>
            </div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="inputnama" class="col-sm-2 col-form-label">Nama Design</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$pesanan_design->nama_design}}" name="nama_design" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputnama" class="col-sm-2 col-form-label">Jenis Design</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$pesanan_design->jenis_design}}" name="jenis_design" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputjudul" class="col-sm-2 col-form-label">Deskripsi Design</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi" class="form-control" disabled>{{$pesanan_design->deskripsi}}</textarea>
                    </div>
                </div>

            </div>
        </div>
        @endif

    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Design Produk Saya</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Design</th>
                                <th>Deskripsi</th>
                                <th>Download</th>
                            </tr>
                        </thead>

                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>




@endsection

@section('js')
<script>
    var table = $('#dataTable').DataTable();

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result).width(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection