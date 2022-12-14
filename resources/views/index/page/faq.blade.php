@extends('index.template.page')

@section('title', 'Nimaya Kopi - Kursus')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@section('content')
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
                        @if (count($faqs))
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($faqs as $item)
                                <div class="card">
                                    <div class="card-header" id="heading-{{ $i }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapse-{{ $i }}"
                                                aria-expanded="true" aria-controls="collapse-{{ $i }}">
                                                {{$item->pertanyaan}}
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse-{{ $i }}" class="collapse @if($i == 1) show @endif"
                                        aria-labelledby="heading-{{ $i }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!!$item->jawaban!!}
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-4 border border-2 rounded py-4 align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa-solid fa-message fs-1"></i>
                        <strong class="mt-2">Apakah ada pertanyaaan lain?</strong>
                        <p class="text-center mt-3">temukan platform terbaik untuk mempelajari dari teknik dasar tentang
                            kopi disini</p>
                        <a href="#" class="btn btn-dark w-100">Kirim Email</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
