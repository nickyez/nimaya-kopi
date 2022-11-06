@extends('index.template.page')

@section('title', 'Nimaya Kopi - Kursus')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@section('content')
<section id="course" class="py-5 container">
    <div class="row mt-5 align-items-center">
        <div class="col-md-4">
            <img src="{{asset('img/img_course.png')}}" alt="" class="img-fluid">
        </div>
        <div class="col-md-8">
            <div class="px-5">
                <h2>Begineer Class:<br>Pengenalan Kopi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat unde incidunt ratione sunt at, quas consequatur voluptatum sed ut esse vero aspernatur ea odio veritatis facere recusandae itaque corporis soluta.</p>
                <div class="d-flex flex-row">
                    <a href="#" class="btn btn-dark me-3">Bergabung</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 align-items-center">
        <div class="col-md-8">
            <div class="px-5">
                <h2>Intermediate Class:<br>Pengolahan Kopi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat unde incidunt ratione sunt at, quas consequatur voluptatum sed ut esse vero aspernatur ea odio veritatis facere recusandae itaque corporis soluta.</p>
                <div class="d-flex flex-row">
                    <a href="#" class="btn btn-dark me-3">Bergabung</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <img src="{{asset('img/img_course.png')}}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row mt-5 align-items-center">
        <div class="col-md-4">
            <img src="{{asset('img/img_course.png')}}" alt="" class="img-fluid">
        </div>
        <div class="col-md-8">
            <div class="px-5">
                <h2>Expert Class:<br>Mengidentifikasi Kopi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat unde incidunt ratione sunt at, quas consequatur voluptatum sed ut esse vero aspernatur ea odio veritatis facere recusandae itaque corporis soluta.</p>
                <div class="d-flex flex-row">
                    <a href="#" class="btn btn-dark me-3">Bergabung</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection