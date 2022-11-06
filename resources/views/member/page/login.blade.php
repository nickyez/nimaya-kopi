<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/member.css') }}">
    <title>Sign In - Nimaya Kopi</title>
</head>

<body>
    <div class="row vh-100">
        <div class="col-6">
            <div class="container d-flex flex-column px-5 h-100">
                <a href="#" class="text-decoration-none" style="margin-top: 50px">
                    <div class="btn btn-dark mx-3">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <span class="text-dark">Kembali</span>
                </a>
                <div class="d-flex flex-grow-1 flex-column align-items-start justify-content-center ">
                    <h2>Sign In User</h2>
                    <span>Silahkan masuk ke dalam forum kami</span>
                    <form method="post" action="#" class="w-100 mt-5">
                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Email</label>
                            <input id="email" class="form-control rounded-pill" type="text" name="email"
                                placeholder="Your Email Here">
                        </div>
                        <div class="form-group">
                            <label for="password" class="font-weight-bold">Password</label>
                            <input id="password" class="form-control rounded-pill" type="password" name="password"
                                placeholder="Your Password Here">
                        </div>
                        <div class="d-flex flex-column" style="margin-top: 80px">
                            <button class="btn btn-dark mb-3 rounded-pill" type="submit">Sign In</button>
                            <a href="{{url('/member/register')}}" class="btn btn-outline-dark rounded-pill">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="login-img" class="col-6 py-5" style="background-image: url('{{ asset('img/img_kopi.png') }}')">
            <div class="d-flex justify-content-center align-items-end h-100">
                <span class="text-white text-center font-weight-bold" style="font-size: 32px;">Secangkir Kopi,<br>Dengan Berbagai Arti</span>
            </div>
        </div>
    </div>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
