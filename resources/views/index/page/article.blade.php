@extends('index.template.page')

@section('title', 'Nimaya Kopi - Kursus')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@section('content')
    <section id="artikel" class="py-5 container">
        <div class="row justify-content-between mt-5">
            <div class="col-md-4" data-toggle="modal" data-target="#artikel1">
                <div class="card-artikel">
                    <img src="{{ asset('img/img_artikel1.png') }}" alt="" class="img-fluid">
                    <h3 class="text-center mt-3">Inovasi Baru</h3>
                    <p> Sit neque ipsum tempor, nam scelerisque quisque nulla. Sag Sagittis et, egestas mauris sa congue sed
                        massa elit id eles eleifend. Auctor vitae vinako venenatis </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-artikel">
                    <img src="{{ asset('img/img_artikel2.png') }}" alt="" class="img-fluid">
                    <h3 class="text-center mt-3">Pengolahan</h3>
                    <p> Sit neque ipsum tempor, nam scelerisque quisque nulla. Sag Sagittis et, egestas mauris sa congue sed
                        massa elit id eles eleifend. Auctor vitae vinako venenatis </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-artikel">
                    <img src="{{ asset('img/img_artikel3.png') }}" alt="" class="img-fluid">
                    <h3 class="text-center mt-3">Minat</h3>
                    <p> Sit neque ipsum tempor, nam scelerisque quisque nulla. Sag Sagittis et, egestas mauris sa congue sed
                        massa elit id eles eleifend. Auctor vitae vinako venenatis </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mt-5">
            <div class="col-md-4">
                <div class="card-artikel">
                    <img src="{{ asset('img/img_artikel1.png') }}" alt="" class="img-fluid">
                    <h3 class="text-center mt-3">Inovasi Baru</h3>
                    <p> Sit neque ipsum tempor, nam scelerisque quisque nulla. Sag Sagittis et, egestas mauris sa congue sed
                        massa elit id eles eleifend. Auctor vitae vinako venenatis </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-artikel">
                    <img src="{{ asset('img/img_artikel2.png') }}" alt="" class="img-fluid">
                    <h3 class="text-center mt-3">Pengolahan</h3>
                    <p> Sit neque ipsum tempor, nam scelerisque quisque nulla. Sag Sagittis et, egestas mauris sa congue sed
                        massa elit id eles eleifend. Auctor vitae vinako venenatis </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-artikel">
                    <img src="{{ asset('img/img_artikel3.png') }}" alt="" class="img-fluid">
                    <h3 class="text-center mt-3">Minat</h3>
                    <p> Sit neque ipsum tempor, nam scelerisque quisque nulla. Sag Sagittis et, egestas mauris sa congue sed
                        massa elit id eles eleifend. Auctor vitae vinako venenatis </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="artikel1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inovasi Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="{{ asset('img/img_artikel1.png') }}" alt="" class="w-25 mb-4">
                    </div>
                    <h3 class="text-center mb-2">Pentingnya Mengontrol Kadar Air Pada Biji Kopi</h3>
                    <p>Roasting kopi adalah perpaduan seni, naluri, dan sains. Seni untuk menciptakan rasa, dengan naluri
                        dan sains, berperan memastikan semua unsur berjalan saling melengkapi satu sama lain.Tiga hal ini
                        sangat berguna, untuk mempersempit parameter profil roasting yang tepat dan sesuai keinginan yang
                        ingin dicapai.</p>

                    <p>Dari sekian banyak unsur yang perlu diperhatikan dari naluri dan sains, salah satu nya yaitu kadar
                        air, fakta nya Kadar air pada biji kopi yang kurang dari 10% memiliki resiko hilangnya kualitas dan
                        cita rasa, selain itu, biji kopi menjadi terlalu rapuh dan kurang segar stelah menjadi roast bean,
                        sedangkan kelembapan di atas 12% memiliki resiko yang lebih tinggi untuk tumbuh jamur, bahkan dapat
                        mencapai kondisi yang tidak layak konsumsi dengan waktu yang singkat.
                    </p>
                    <p>
                        Jaga kandungan kadar air dalam biji kopi pada angka yang tepat. Kadar air dalam biji kopi dapat
                        mempengaruhi daya tahan, dan cita rasa. hal ini penting untuk diperhatikan, guna mendukung parameter
                        yang menghasilkan roast bean yang nikmat dan berkualitas.
                    </p>

                </div>
            </div>
        </div>
    </div>


@endsection
