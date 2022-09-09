@extends('template-landingpage.master')

@section('head')
<div class="container-xxl bg-primary page-header">
    <div class="container">

        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h2 class="mb-5 text-white">Asosiasi</h2>
            <div class="d-inline-block border rounded-pill text-white px-4 mb-3"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <h5>AKRAB</h5>
                    <p class="mb-4">Asosiasi</p>
                    <img class="img-fluid rounded-circle w-50 mb-4" src="{{asset('public/image/logo.png')}}" alt="">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <h5>Wong Agung</h5>
                    <p class="mb-4">Asosiasi</p>
                    <img class="img-fluid rounded-circle w-50 mb-4" src="{{asset('public/image/logo.png')}}" alt="">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('content')



@endsection