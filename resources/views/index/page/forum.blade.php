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
                        <div class="list-group list-group-horizontal">
                            <a href="@if (Request::has('post')) {{ url('/forum?post=my-post') }} @else {{ url('/forum') }} @endif"
                                class="list-group-item list-group-item-action list-group-item-dark @if (!Request::has('topik')) active @endif"
                                aria-current="true">
                                All
                            </a>
                            @foreach ($topic as $item)
                                <a href="@if (Request::has('post')) {{ url('/forum?post=my-post') . '&topik=' . $item->nama_topik }} @else {{ url('/forum') . '?topik=' . $item->nama_topik }} @endif"
                                    class="list-group-item list-group-item-action list-group-item-dark @if (Request::input('topik') == $item->nama_topik) active @endif">{{ $item->nama_topik }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @if (Auth::check() && Auth::user()->is_admin == 0)
                    <div class="col-md-4">
                        <div class="d-flex flex-row justify-content-end align-items-center mx-3">
                            <a class="text-decoration-none text-dark mx-3 @if (Request::has('post')) font-weight-bold @endif"
                                href="{{ url('/forum') . '?post=' . 'my-post' }}">Post Saya</a>
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#add-post">+ Buat
                                Post</button>
                        </div>
                    </div>
                @endif
            </div>
            @if (session('status'))
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span>{{ session('status') }}</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endif
            {{-- Post Here --}}
            @if (count($forum))
                @foreach ($forum as $item)
                    <div class="row mt-3 mx-3">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img src="{{ asset('storage'.'/'.$item->user->photo) }}" alt="" width="96px"
                                        height="96px" class="rounded-circle mr-4">
                                    <div class="d-flex flex-column flex-fill">
                                        <span><strong>{{ $item->user->name }}</strong> /
                                            {{ $item->forumTopic->nama_topik }}</span>
                                        <h4 class="card-title">{{ $item->judul }}</h4>
                                        <div>
                                            <i id='post-like' class="far fa-heart"></i>{{-- <i class="fas fa-heart"></i> --}}
                                            <span>{{ count($item->liked) }}</span>
                                        </div>
                                    </div>
                                    <img src="{{ asset('storage' . '/' . $item->gambar) }}" alt="" width="111px"
                                        height="111px" class="rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="vh-100 vw-50 d-flex justify-content-center align-items-center">
                    <h3>Forum Kosong</h3>
                </div>
            @endif

        </div>
    </section>
    @if(Auth::check() && Auth::user()->is_admin == 0)
    <div class="modal fade" id="add-post" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <form action="{{ url('/forum/create') }}" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Buat Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="user" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <label for="file">Gambar</label>
                            <input type="file" class="form-control-file" id="file" name="gambar">
                        </div>

                        <div class="form-group">
                            <label for="topik_forum">Pilih Kategori</label>
                            <select class="form-control" id="topik_forum" name="topik_forum">
                                @foreach ($topic as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_topik }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="tulisan">Masukkan Tulisan</label>
                            <textarea class="form-control" id="tulisan" name="tulisan" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif

@endsection

@push('script')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

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
        // Change text area into ckeditor
        var konten = document.getElementById("tulisan");
        ClassicEditor
            .create(konten, {
                ckfinder: {
                    uploadUrl: '{{ route('image.upload') . '?_token=' . csrf_token() }}',
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
