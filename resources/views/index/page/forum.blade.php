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
                        <a class="text-decoration-none text-dark mx-3" href="#">Post Saya</a>
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#add-post">+ Buat
                            Post</button>
                    </div>
                </div>
            </div>
            {{-- Post Here --}}
            @for ($i = 0; $i < 2; $i++)
                <div class="row mt-3 mx-3">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-flex">
                                <img src="{{ asset('img/dummy-profile.png') }}" alt="" width="96px" height="96px"
                                    class="rounded-circle mr-4">
                                <div class="d-flex flex-column flex-fill">
                                    <span><strong>Neni Amalia</strong> / Kopi</span>
                                    <h4 class="card-title">Tips Pembuatan Kopi Hangat</h4>
                                    <div>
                                        <i id='post-like' class="far fa-heart"></i>{{-- <i class="fas fa-heart"></i> --}}
                                        <span>100</span>
                                    </div>
                                </div>
                                <img src="{{ asset('img/img_kopi.png') }}" alt="" width="111px" height="111px"
                                    class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </section>
    <div class="modal fade" id="add-post" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Buat Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"></label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <div class="form-group">
                            <label for="topik-forum">Pilih Kategori</label>
                            <select class="form-control" id="topik-forum" name="topik-forum">
                                <option>Kopi</option>
                                <option>Biji</option>
                                <option>Pengolahan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Masukkan Tulisan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Tambah</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        $("#post-like").click(function() {
            if ($(this).attr('class') == 'far fa-heart') {
                $(this).removeClass()
                $(this).addClass('fas fa-heart')
            } else {
                $(this).removeClass()
                $(this).addClass('far fa-heart')
            }
        })
    </script>
@endpush
