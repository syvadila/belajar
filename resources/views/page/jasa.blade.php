@extends('template-landingpage.master')

@section('head')
<div class="container-xxl bg-primary page-header">
    <div class="container">

        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h2 class="mb-5 text-white">Fasilitas</h2>
            <div class="d-inline-block border rounded-pill text-white px-4 mb-3"></div>
        </div>

        <div class="row g-4 align-items-center">
            <div class="col-lg-6 text-white wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mb-4">Fasilitas Desain</h2>
                <p class="mb-4">Logo Kemasan, Desain Kemasan, Foto Produk </p>
                
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Lihat Selengkapnya</a>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                <img class="img-fluid" src="{{asset('public/image/jasa_logo.png')}}">
            </div>

        </div>
    </div>
</div>
@endsection

@section('content')

<div class="container-xxl ">
    <div class="container">

        <div class="row g-4 align-items-center">
           
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                <img class="img-fluid" src="{{asset('public/image/konsultasi.png')}}">
            </div>

            <div class="col-lg-6 text-primary wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mb-4">Konsultasi</h2>
                <p class="mb-4">Konsultasi Mengenai UMKM</p>
                
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Lihat Selengkapnya</a>
            </div>

        </div>

    </div>
</div>

@endsection