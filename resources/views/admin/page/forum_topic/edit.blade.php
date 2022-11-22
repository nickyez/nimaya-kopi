@extends('admin.template.admin')

@section('title', 'Admin | Nimaya Kopi')

@section('header-name', 'Kelola Topik dalam Forum')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Topik dalam Forum</h6>
                <a href="{{ url('/admin/forum-topic') }}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        </div>
        <form action="{{ url('/admin/forum-topic') . '/' . $topic->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <div class="small mb-1">Nama Topik</div>
                    <input type="text" class="form-control" name="nama_topik" id="nama_topik"
                        value="{{ $topic->nama_topik }}" required>
                </div>
                <div class="card-footer">
                    <div class="col-sm-12 mb-3">
                        <button type="submit" class="btn btn-primary float-right btn-sm"><i class="fas fa-edit"></i>
                            Edit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
