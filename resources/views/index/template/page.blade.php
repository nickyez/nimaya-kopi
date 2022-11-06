<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    <script src="{{asset('vendor/fontawesome-free/js/fontawesome.min.js')}}" crossorigin="anonymous"></script>
    @stack('style')
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" class="w-25"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link mx-4" aria-current="page" href="{{ url('/') }}">Home</a>
                        <a class="nav-link mx-4" href="{{ url('/article') }}">Artikel</a>
                        <a class="nav-link mx-4" href="{{ url('/course') }}">Kursus</a>
                        <a class="nav-link mx-4" href="{{ url('/forum') }}" tabindex="-1" aria-disabled="true">Forum</a>
                        <a class="nav-link mx-4 btn btn-dark text-light" href="{{ url('/member/login') }}" tabindex="-1" aria-disabled="true">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <div class="py-5 container">
            <div class="row">
                <div class="col-lg-3 footer-desc">
                    <img src="{{ asset('img/img_footer.png') }}" alt="" width="25%">
                    <p>Jl. Lowokwaru Malang</p>
                    <p>coffee@example.com</p>
                    <div class="d-flex justify-content-start">
                        <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></i></a>
                        <a href="#" class="text-white mx-2"><i class="fab fa-facebook"></i></i></a>
                        <a href="#" class="text-white mx-2"><i class="fab fa-google"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3 footer-menu">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">About</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Contact</a></li>
                        <li class="mb-2"><a href="{{url('/faq')}}" class="text-light text-decoration-none">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3 footer-menu">
                    <h5>Our Class</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Begineer Class</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Intermediate Class</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Expert Class</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3 footer-menu">
                    <h5>Information</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Artikel</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Pengajar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    @stack('script')
</body>

</html>
