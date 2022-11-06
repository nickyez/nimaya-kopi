@extends('index.template.page')

@section('title', 'Nimaya Kopi')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@section('content')
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
@endsection
