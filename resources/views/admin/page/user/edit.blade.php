@extends('admin.template.admin')

@section('title', 'Admin | Nimaya Kopi')

@section('header-name', 'Kelola Pengguna')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ubah User</h6>
                <a href="{{ url('/admin/class') }}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        </div>
        <form action="{{ url('/admin/user') .'/'. $user->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <div class="small mb-1">Photo</div>
                    <input type="file" class="form-control-file" name="photo" id="photo">
                </div>
                <div class="form-group">
                    <div class="small mb-1">Nama</div>
                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" required>
                </div>
                <div class="form-group">
                    <div class="small mb-1">Email</div>
                    <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}" required>
                </div>
                <div class="form-group">
                    <div class="small mb-1">Password</div>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <div class="small mb-1">Role</div>
                    <select name="is_admin" class="form-control" id="is_admin">
                        <option value="1" @if($user->is_admin == 1) selected @endif>Admin</option>
                        <option value="0" @if($user->is_admin == 0) selected @endif>Member</option>
                    </select>
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
