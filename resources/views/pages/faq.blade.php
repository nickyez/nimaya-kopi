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
    <section id="faq">
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-md-8">
                    <h1>Pertanyaan<br>yang sering diajukan</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Offending belonging promotion provision an be oh consulted ourselves it. Blessing welcomed ladyship she met humoured sir breeding her. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Offending belonging promotion provision an be oh consulted ourselves it. Blessing welcomed ladyship she met humoured sir breeding her. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Offending belonging promotion provision an be oh consulted ourselves it. Blessing welcomed ladyship she met humoured sir breeding her. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Offending belonging promotion provision an be oh consulted ourselves it. Blessing welcomed ladyship she met humoured sir breeding her. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Offending belonging promotion provision an be oh consulted ourselves it. Blessing welcomed ladyship she met humoured sir breeding her. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border border-2 rounded py-4 align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa-solid fa-message fs-1"></i>
                        <strong class="mt-2">Apakah ada pertanyaaan lain?</strong>
                        <p class="text-center mt-3">temukan platform terbaik untuk mempelajari dari teknik dasar tentang kopi disini</p>
                        <a href="#" class="btn btn-dark w-100">Kirim Email</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="py-5 container">
            <div class="row">
                <div class="col-lg-3 footer-desc">
                    <img src="{{ asset('img/img_footer.png') }}" alt="" width="25%">
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
