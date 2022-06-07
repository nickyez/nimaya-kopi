@extends('templates.page')

@section('title', 'Nimaya Kopi - Kursus')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@section('content')
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Nirmaya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link mx-4" aria-current="page" href="#">Home</a>
                    <a class="nav-link mx-4" href="#">Artikel</a>
                    <a class="nav-link mx-4" href="#">Kursus</a>
                    <a class="nav-link mx-4" href="#" tabindex="-1" aria-disabled="true">Faq</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<section id="course" class="py-5 container">
    <div class="row vh-100 align-items-center">
        <div class="col-md-4">
            <img src="{{asset('img/img_course.png')}}" alt="" class="img-fluid">
        </div>
        <div class="col-md-8">
            <div class="px-5">
                <h2>Begineer Class:<br>Pengenalan Kopi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat unde incidunt ratione sunt at, quas consequatur voluptatum sed ut esse vero aspernatur ea odio veritatis facere recusandae itaque corporis soluta.</p>
                <div class="d-flex flex-row">
                    <a href="#" class="btn btn-dark me-3">Bergabung</a>
                    <a href="#" class="btn btn-outline-dark">Info Lanjut</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row vh-100 align-items-center">
        <div class="col-md-8">
            <div class="px-5">
                <h2>Intermediate Class:<br>Pengolahan Kopi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat unde incidunt ratione sunt at, quas consequatur voluptatum sed ut esse vero aspernatur ea odio veritatis facere recusandae itaque corporis soluta.</p>
                <div class="d-flex flex-row">
                    <a href="#" class="btn btn-dark me-3">Bergabung</a>
                    <a href="#" class="btn btn-outline-dark">Info Lanjut</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <img src="{{asset('img/img_course.png')}}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row vh-100 align-items-center">
        <div class="col-md-4">
            <img src="{{asset('img/img_course.png')}}" alt="" class="img-fluid">
        </div>
        <div class="col-md-8">
            <div class="px-5">
                <h2>Expert Class:<br>Mengidentifikasi Kopi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat unde incidunt ratione sunt at, quas consequatur voluptatum sed ut esse vero aspernatur ea odio veritatis facere recusandae itaque corporis soluta.</p>
                <div class="d-flex flex-row">
                    <a href="#" class="btn btn-dark me-3">Bergabung</a>
                    <a href="#" class="btn btn-outline-dark">Info Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="py-5 container">
        <div class="row">
            <div class="col-lg-3 footer-desc">
                <img src="{{asset('img/img_footer.png')}}" alt="" width="25%">
                <p>Jl. Lowokwaru Malang</p>
                <p>coffee@example.com</p>
                <div class="d-flex justify-content-start">
                    <a href="#" class="text-white mx-2"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fa-brands fa-google"></i></a>
                </div>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3 footer-menu">
                <h5>Company</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">About</li>
                    <li class="mb-2">Contact</li>
                    <li class="mb-2">FAQ</li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3 footer-menu">
                <h5>Our Class</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">Begineer Class</li>
                    <li class="mb-2">Intermediate Class</li>
                    <li class="mb-2">Expert Class</li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3 footer-menu">
                <h5>Information</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">Artikel</li>
                    <li class="mb-2">Pengajar</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection