@extends('index.template.page')

@section('title', 'Nimaya Kopi - Kursus')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@section('content')
    <section id="course" class="py-5 container">
        <?php $i = 1; ?>
        @foreach ($course as $item)
            @if ($i % 2 == 1)
                <div class="row mt-5 align-items-center">
                    <div class="col-md-4">
                        <img src="{{ asset('storage'.'/'.$item->gambar) }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="px-5">
                            <h2>{{ $item->nama_kursus }}</h2>
                            {!! $item->deskripsi !!}
                            <div class="d-flex flex-row">
                                <a href="{{ url('/course/detail').'/'.$item->id }}" class="btn btn-dark me-3">Bergabung</a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row mt-5 align-items-center">
                    <div class="col-md-8">
                        <div class="px-5">
                            <h2>{{ $item->nama_kursus }}</h2>
                            {!! $item->deskripsi !!}
                            <div class="d-flex flex-row">
                                <a href="{{ url('/course/detail').'/'.$item->id }}" class="btn btn-dark me-3">Bergabung</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('storage'.'/'.$item->gambar) }}" alt="" class="img-fluid">
                    </div>
                </div>
            @endif
            <?php $i++; ?>
        @endforeach
    </section>
@endsection
