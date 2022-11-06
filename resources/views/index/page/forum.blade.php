@extends('index.template.page')

@section('title', 'Nimaya Kopi - Forum')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@section('content')
    <section id="forum">
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex flex-row align-items-center">
                        <h3 class=" px-3 font-weight-bold">Post Forum: </h3>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item">All</li>
                            <li class="list-group-item">Kopi</li>
                            <li class="list-group-item">Biji</li>
                            <li class="list-group-item">Pengolahan</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-row justify-content-end align-items-center mx-3">
                        <span class="mx-3">Post Saya</span>
                        <a href="#" class="btn btn-dark">+ Buat Post</a>
                    </div>
                </div>
            </div>
            {{-- Post Here --}}
            <div class="row mt-3 mx-3">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <img src="{{asset('img/dummy-profile.png')}}" alt="" width="96px" height="96px" class="rounded-circle mr-4">
                            <div class="d-flex flex-column flex-fill">
                                <span><strong>Neni Amalia</strong> / Kopi</span>
                                <h4 class="card-title">Tips Pembuatan Kopi Hangat</h4>
                                <div>
                                    <i id='post-like' class="far fa-heart"></i>{{-- <i class="fas fa-heart"></i>--}}
                                    <span>100</span>
                                </div>
                            </div>
                            <img src="{{asset('img/img_kopi.png')}}" alt="" width="111px" height="111px" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mx-3">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <img src="{{asset('img/dummy-profile.png')}}" alt="" width="96px" height="96px" class="rounded-circle mr-4">
                            <div class="d-flex flex-column flex-fill">
                                <span><strong>Neni Amalia</strong> / Kopi</span>
                                <h4 class="card-title">Tips Pembuatan Kopi Hangat</h4>
                                <div>
                                    <i id='post-like' class="far fa-heart"></i>{{-- <i class="fas fa-heart"></i>--}}
                                    <span>100</span>
                                </div>
                            </div>
                            <img src="{{asset('img/img_kopi.png')}}" alt="" width="111px" height="111px" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mx-3">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <img src="{{asset('img/dummy-profile.png')}}" alt="" width="96px" height="96px" class="rounded-circle mr-4">
                            <div class="d-flex flex-column flex-fill">
                                <span><strong>Neni Amalia</strong> / Kopi</span>
                                <h4 class="card-title">Tips Pembuatan Kopi Hangat</h4>
                                <div>
                                    <i id='post-like' class="far fa-heart"></i>{{-- <i class="fas fa-heart"></i>--}}
                                    <span>100</span>
                                </div>
                            </div>
                            <img src="{{asset('img/img_kopi.png')}}" alt="" width="111px" height="111px" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $("#post-like").click(function(){
            if($(this).attr('class') == 'far fa-heart'){
                $(this).removeClass()
                $(this).addClass('fas fa-heart')
            } else {
                $(this).removeClass()
                $(this).addClass('far fa-heart')
            }
        })
    </script>
@endpush
