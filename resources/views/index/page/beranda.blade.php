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
                    <a href="{{ url('/course') }}" class="btn btn-light">Jelajahi</a>
                </div>
            </div>
        </div>
    </section>
    <section id="aboutus" class="py-5 container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/img_aboutus.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-8 p-5 mt-2">
                <h1>Tentang Kami</h1>
                <p>Nimaya Kopi adalah sebuah brand kolektif yang berfokus pada pengolahan biji kopi menggunakan metode
                    tradisional maupun eksperimental, Nimaya kopi juga bergerak di bidang pengembangan skill brewers yang
                    bertujuan untuk meningkatkan skill para anggota juga masyarakat sekitar yang terbuka akan pengetahuan
                    tentang kopi</p>
            </div>
        </div>
    </section>
    <section id="product" class="py-5 container">
        <div class="row justify-content-between">
            <div class="col-md-4">
                <div class="custom-card">
                    <img src="{{ asset('img/img_arabica.png') }}" alt="Icon for Kopi Robusta">
                    <h3>Kopi Robusta</h3>
                    <hr style="width:50px">
                    <p>Kopi jenis ini merupakan turunan dari spesies Coffea canephora. Kopi jenis ini tumbuh di dataran
                        rendah.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <img src="{{ asset('img/img_arabica.png') }}" alt="Icon for Kopi Arabica">
                    <h3>Kopi Arabica</h3>
                    <hr style="width:50px">
                    <p>kopi ini dinamakan Arabika karena pada abad ke-7, biji kopi ini dibawa sebuah daerah dataran rendah
                        Arab.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <img src="{{ asset('img/img_arabica.png') }}" alt="Icon for Kopi Liberica">
                    <h3>Kopi Liberica</h3>
                    <hr style="width:50px">
                    <p>kopi yang berasal dari wilayah Liberica, Afrika Barat. Kopi ini dibawa ke Negara Indonesia pada abad
                        ke-19</p>
                </div>
            </div>
        </div>
    </section>
    <section id="artikel" class="py-5 container">
        <h1 class="text-center">Artikel</h1>
        <div class="row justify-content-between mt-5">
            @php
                $i = 1;
            @endphp
            @foreach ($article as $item)
                <div class="col-md-4" data-toggle="modal" data-target="{{ '#artikel' . $i }}">
                    <div class="card-artikel">
                        <img src="{{ asset('storage') . '/' . $item->gambar }}" alt="" class="img-fluid">
                        <h3 class="text-center mt-3">{{ $item->slug }}</h3>
                        {!! Str::words($item->deskripsi, 25, '...') !!}
                    </div>
                </div>
                @php
                    $i++;
                @endphp
            @endforeach

        </div>
        <div class="d-flex flex-row-reverse mt-5">
            <a href="{{ url('/article') }}">Lebih banyak...</a>
        </div>
    </section>
    <section id="course" class="py-5 container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('storage' . '/' . $course->gambar) }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="px-5">
                    <h2>{{ $course->nama_kursus }}</h2>
                    {!! $course->deskripsi !!}
                    <div class="d-flex flex-row">
                        <a href="{{ url('/course/detail') . '/' . $course->id }}" class="btn btn-dark mr-3">Bergabung</a>
                        <a href="{{ url('/course') }}" class="btn btn-outline-dark">Info Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Modal Article --}}
    @php
        $j = 1;
    @endphp
    @foreach ($article as $item)
        <!-- Modal -->
        <div class="modal fade" id="{{ 'artikel' . $j }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $item->slug }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <img src="{{ asset('storage') . '/' . $item->gambar }}" alt="" class="w-25 mb-4">
                        </div>
                        <h3 class="text-center mb-2">{{ $item->judul }}</h3>
                        {!! $item->deskripsi !!}

                    </div>
                </div>
            </div>
        </div>
        @php
            $j++;
        @endphp
    @endforeach
@endsection
