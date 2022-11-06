@extends('admin.template.admin')

@section('title', 'Admin | Nimaya Kopi')

@section('header-name', 'Kelola Kursus')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Detail Kursus</h6>
                <a href="{{ url('/admin/course') }}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('storage/'.$course->gambar)}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h3 class="font-weight-bold">{{$course->nama_kursus}}</h3>
                    <p>{!!$course->deskripsi!!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
