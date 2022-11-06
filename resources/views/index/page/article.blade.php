@extends('index.template.page')

@section('title', 'Nimaya Kopi - Kursus')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@section('content')
<section id="artikel" class="py-5 container">
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
</section>
@endsection