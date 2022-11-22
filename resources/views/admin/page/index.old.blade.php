@extends('admin.template.admin')

@section('title', 'Admin | PT. Udin Jaya Abadi')

@section('header-name', 'Profil')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Profil</h6>
                <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit Profil</a>
            </div>
        </div>
        <div class="card-body">
            <table class='table'>
                <tr>
                    <td class="w-25">Foto</td>
                    {{-- <td><img src="@if (!empty(Auth::user()->photo)) {{ asset('users') . '/' . Auth::user()->photo }}@else {{ asset('profile/undraw_profile.svg') }} @endif" --}}
                            {{-- alt="" class="w-25"></td> --}}
                </tr>
                <tr>
                    <td class="w-25">Email</td>
                    {{-- <td>{{ Auth::user()->email }}</td> --}}
                </tr>
                <tr>
                    <td class="w-25">Nama</td>
                    {{-- <td>{{ Auth::user()->nama }}</td> --}}
                </tr>
            </table>
        </div>
    </div>
@endsection
