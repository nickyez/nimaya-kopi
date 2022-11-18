@extends('index.template.page')

@section('title', 'Nimaya Kopi - Kursus')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@section('content')
    <section id="artikel" class="py-5 container">
        <div class="row justify-content-start mt-5">
            @php
                $i = 1;
            @endphp
            @if (count($article))
                @foreach ($article as $item)
                    <div class="col-md-4 mb-5" data-toggle="modal" data-target="{{ '#artikel' . $i }}">
                        <div class="card-artikel">
                            <img src="{{ asset('storage').'/'.$item->gambar }}" alt="" class="img-fluid">
                            <h3 class="text-center mt-3">{{ $item->slug }}</h3>
                            {!! Str::words($item->deskripsi, 25, '...') !!}
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
            @else
                <div class="vh-100 vw-100 d-flex justify-content-center align-items-center">
                    <h1>Artikel Belum diisi</h1>
                </div>
            @endif
        </div>
    </section>
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
                            <img src="{{ asset('storage').'/'.$item->gambar }}" alt="" class="w-25 mb-4">
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
