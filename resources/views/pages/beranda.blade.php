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
    <section id="aboutus" class="py-5 container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('img/img_aboutus.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-8 p-5 mt-2">
                <h1>Tentang Kami</h1>
                <p>Nimaya Kopi Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, voluptatum in. Nesciunt, quaerat fugiat consequuntur, vero, corrupti veniam dolorum fugit recusandae tempore explicabo earum ullam numquam hic nam id doloribus.</p>
            </div>
        </div>
    </section>
    <section id="product" class="py-5 container">
        <div class="row justify-content-between">
            <div class="col-md-4">
                <div class="custom-card">
                    <img src="{{asset('img/img_robusta.png')}}" alt="Icon for Kopi Robusta">
                    <h3>Kopi Robusta</h3>
                    <hr style="width:50px">
                    <p>Kopi jenis ini merupakan turunan dari spesies Coffea canephora. Kopi jenis ini tumbuh di dataran rendah.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <img src="{{asset('img/img_arabica.png')}}" alt="Icon for Kopi Arabica">
                    <h3>Kopi Arabica</h3>
                    <hr style="width:50px">
                    <p>kopi ini dinamakan Arabika karena pada abad ke-7, biji kopi ini dibawa sebuah daerah dataran rendah Arab.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <img src="{{asset('img/img_liberica.png')}}" alt="Icon for Kopi Liberica">
                    <h3>Kopi Liberica</h3>
                    <hr style="width:50px">
                    <p>kopi yang berasal dari wilayah Liberica, Afrika Barat. Kopi ini dibawa ke Negara Indonesia pada abad ke-19</p>
                </div>
            </div>
        </div>
    </section>
    <section id="artikel" class="py-5 container">
        <h1 class="text-center">Artikel</h1>
        <div class="row justify-content-between mt-5">
            <div class="col-md-4">
                <div class="card-artikel">
                    <img src="{{asset('img/img_artikel1.png')}}" alt="" class="img-fluid">
                    <h3 class="text-center mt-3">Inovasi Baru</h3>
                    <p> Sit neque ipsum tempor, nam scelerisque quisque nulla. Sag Sagittis et, egestas mauris sa congue sed massa elit id eles eleifend. Auctor vitae vinako venenatis </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-artikel">
                    <img src="{{asset('img/img_artikel2.png')}}" alt="" class="img-fluid">
                    <h3 class="text-center mt-3">Pengolahan</h3>
                    <p> Sit neque ipsum tempor, nam scelerisque quisque nulla. Sag Sagittis et, egestas mauris sa congue sed massa elit id eles eleifend. Auctor vitae vinako venenatis </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-artikel">
                    <img src="{{asset('img/img_artikel3.png')}}" alt="" class="img-fluid">
                    <h3 class="text-center mt-3">Minat</h3>
                    <p> Sit neque ipsum tempor, nam scelerisque quisque nulla. Sag Sagittis et, egestas mauris sa congue sed massa elit id eles eleifend. Auctor vitae vinako venenatis </p>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse mt-5">
            <a href="#">Lebih banyak...</a>
        </div>
    </section>
    <section id="course" class="py-5 container">
        <div class="row">
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
