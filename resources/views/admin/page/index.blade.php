@extends('admin.template.admin')

@section('title', 'Admin | Nimaya Kopi')

@section('header-name', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-3">
            <div class="card shadow mb-4 p-4">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <img src="{{ asset('img/img_robusta.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <span style="font-size: 3em">{{$course}}</span>
                    </div>
                </div>
                <span class='text-dark'>Course Nimaya</span>
            </div>
        </div>
        <div class="col-3">
            <div class="card shadow mb-4 p-4">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <img src="{{ asset('img/img_robusta.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <span style="font-size: 3em">{{$article}}</span>
                    </div>
                </div>
                <span class='text-dark'>Artikel Nimaya</span>
            </div>
        </div>
        <div class="col-3">
            <div class="card shadow mb-4 p-4">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <img src="{{ asset('img/img_robusta.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <span style="font-size: 3em">{{$forum}}</span>
                    </div>
                </div>
                <span class='text-dark'>Forum Nimaya</span>
            </div>
        </div>
        <div class="col-3">
            <div class="card shadow mb-4 p-4">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <img src="{{ asset('img/img_robusta.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <span style="font-size: 3em">{{$user}}</span>
                    </div>
                </div>
                <span class='text-dark'>User Nimaya</span>
            </div>
        </div>
    </div>
@endsection
