@extends('templates.page')

@section('title', 'Nimaya Kopi')

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
    <section id="jumbotron" class="container-fluid">
        <div class="row align-items-center vh-100">
            <div class="col text-center">
                <div class="header-text">
                    <h1 class="text-white">Secangkir Kopi</h1>
                    <p>Selalu memiliki banyak arti</p>
                </div>
                <div class="header-btn">
                    <a href="#" class="btn btn-light">Jelajahi</a>
                </div>
            </div>
        </div>
    </section>
    <section id="aboutus" class="p-5 container">
        <div class="row">
            <div class="col-md-4">
                INI FOTO
            </div>
            <div class="col-md-8">
                <h1>Tentang Kami</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, voluptatum in. Nesciunt, quaerat fugiat consequuntur, vero, corrupti veniam dolorum fugit recusandae tempore explicabo earum ullam numquam hic nam id doloribus.</p>
            </div>
        </div>
    </section>
@endsection
