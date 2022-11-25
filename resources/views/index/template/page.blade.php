<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <script src="{{ asset('vendor/fontawesome-free/js/fontawesome.min.js') }}" crossorigin="anonymous"></script>
    @stack('style')
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" class="w-25"></a>
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
                        <a class="nav-link mx-4" href="{{ url('/forum') }}" tabindex="-1"
                            aria-disabled="true">Forum</a>
                        @if (Auth::check() && Auth::user()->is_admin == 0)
                            <li class="nav-item dropdown">
                                <img src="{{ asset('storage' . '/' . Auth::user()->photo) }}" alt=""
                                    width="48px" height="48px" data-toggle="dropdown" aria-expanded="false"
                                    class="nav-link dropdown-toggle border rounded-circle ">
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#logoutModal">Logout</a>
                                </div>
                            </li>
                        @else
                            <a class="nav-link mx-4 btn btn-dark text-light" href="{{ url('/member/login') }}"
                                tabindex="-1" aria-disabled="true">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ url('/member/logout') }}" method="post">
                        @csrf
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="py-5 container">
            <div class="row">
                <div class="col-lg-3 footer-desc">
                    <img src="{{ asset('img/img_footer.png') }}" alt="" width="25%">
                    <p>Jl. Lowokwaru Malang</p>
                    <p>coffee@example.com</p>
                    <div class="d-flex justify-content-start">
                        <a href="{{ config('socmed.instagram')->url }}" class="text-white mx-2"><i
                                class="fab fa-instagram"></i></i></a>
                        <a href="{{ config('socmed.facebook')->url }}" class="text-white mx-2"><i
                                class="fab fa-facebook"></i></i></a>
                        <a href="{{ config('socmed.gmail')->url }}" class="text-white mx-2"><i
                                class="fab fa-google"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3 footer-menu">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{url('/#aboutus')}}" class="text-light text-decoration-none">About</a></li>
                        {{-- <li class="mb-2"><a href="#" class="text-light text-decoration-none">Contact</a></li> --}}
                        <li class="mb-2"><a href="{{ url('/faq') }}"
                                class="text-light text-decoration-none">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3 footer-menu">
                    <h5>Our Class</h5>
                    <ul class="list-unstyled">
                        @foreach (config('course') as $item)
                            <li class="mb-2"><a href="{{ url('/course/detail/' . $item->id) }}"
                                    class="text-light text-decoration-none">{{ $item->nama_kursus }}</a>
                            </li>
                        @endforeach
                        {{-- <li class="mb-2"><a href="#" class="text-light text-decoration-none">Intermediate
                                Class</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Expert Class</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3 footer-menu">
                    <h5>Information</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ url('/article') }}"
                                class="text-light text-decoration-none">Artikel</a></li>
                        {{-- <li class="mb-2"><a href="#" class="text-light text-decoration-none">Pengajar</a> --}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    @stack('script')
</body>

</html>
