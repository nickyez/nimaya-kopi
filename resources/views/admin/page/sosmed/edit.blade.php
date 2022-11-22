@extends('admin.template.admin')

@section('title', 'Admin | Nimaya Kopi')

@section('header-name', 'Kelola Link Sosmed')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit Link Sosmed</h6>
                <a href="{{ url('/admin/socmed') }}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        </div>
        <form action="{{ url('/admin/socmed') .'/'. $socmed->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <div class="small mb-1">Platform</div>
                    <input type="text" class="form-control" name="platform" id="platform"
                        value="{{ $socmed->platform }}" required disabled>
                </div>
                <div class="form-group">
                    <div class="small mb-1">Link sosmed</div>
                    <input type="text" class="form-control" name="url" id="url"
                        value="{{ $socmed->url }}" required>
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
