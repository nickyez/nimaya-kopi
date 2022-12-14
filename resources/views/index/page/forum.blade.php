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
                @php
                    $i = 1;
                @endphp
                @foreach ($forum as $item)
                    <div class="row mt-3 mx-3">
                        <div class="card w-100">
                            <div class="card-body" data-toggle="modal" data-target="{{ '#forum-pop' . $i }}">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage' . '/' . $item->user->photo) }}" alt=""
                                        width="96px" height="96px" class="rounded-circle mr-4">
                                    <div class="d-flex flex-column flex-fill">
                                        <span><strong>{{ $item->user->name }}</strong> /
                                            {{ $item->forumTopic->nama_topik }}</span>
                                        <h4 class="card-title">{{ $item->judul }}</h4>
                                        <div>
                                            <i id='post-like-{{ $i }}'
                                                class="far fa-heart"></i>{{-- <i class="fas fa-heart"></i> --}}
                                            <span>{{ count($item->liked) }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-end">
                                        @if (Auth::check() && Auth::user()->is_admin == 0 && Request::has('post'))
                                            <div class="dropdown w-100 text-right">
                                                <a href="" class="text-dark" style="font-size: 1.5em"
                                                    data-toggle="dropdown" aria-expanded="false"><i
                                                        class="fas fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-toggle="modal"
                                                        data-target="#edit-post-{{ $i }}"><span
                                                            class="btn">Edit</span></a>
                                                    <form action="{{ Request::url() . '/' . $item->id }}" method="post"
                                                        onclick="return confirm('Are you sure?')" class="dropdown-item">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn">
                                                            <span class="text">Hapus</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        @endif
                                        <img src="{{ asset('storage' . '/' . $item->gambar) }}" alt=""
                                            width="111px" height="111px" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
            @else
                <div class="vh-100 vw-50 d-flex justify-content-center align-items-center">
                    <h3>Forum Kosong</h3>
                </div>
            @endif

        </div>
    </section>
    @if (Auth::check() && Auth::user()->is_admin == 0)
        <div class="modal fade" id="add-post" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="add-forum" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form action="{{ url('/forum/create') }}" method="post" enctype="multipart/form-data" class="w-100 h-100">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="add-forum">Buat Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="user" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <label for="file">Gambar</label>
                                <input type="file" class="form-control-file" id="file" name="gambar" required>
                            </div>

                            <div class="form-group">
                                <label for="topik_forum">Pilih Kategori</label>
                                <select class="form-control" id="topik_forum" name="topik_forum" required>
                                    @foreach ($topic as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_topik }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" required>
                            </div>
                            <div class="form-group">
                                <label for="tulisan">Masukkan Tulisan</label>
                                <textarea class="form-control" id="tulisan" name="tulisan" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary"><i
                                    class="fas fa-save mr-2"></i>Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @if (count($forum))
            @php
                $j = 1;
            @endphp
            @foreach ($forum as $data)
                <div class="modal fade" id="edit-post-{{ $j }}" data-backdrop="static" data-keyboard="false"
                    tabindex="-1" aria-labelledby="edit-forum-{{ $j }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <form action="{{ url('/forum/edit' . '/' . $data->id) }}" method="post"
                            enctype="multipart/form-data" class="w-100 h-100">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="edit-forum-{{ $j }}">Edit Post</h5>
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
                                        <select class="form-control" id="topik_forum" name="topik_forum" required>
                                            @foreach ($topic as $item)
                                                <option value="{{ $item->id }}"
                                                    @if ($item->id == $data->topic_id) selected @endif>
                                                    {{ $item->nama_topik }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" id="judul" name="judul"
                                            value="{{ $data->judul }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tulisan">Masukkan Tulisan</label>
                                        <textarea class="form-control" id="tulisan-{{ $j }}" name="tulisan" rows="3" required>{!! $data->tulisan !!}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary"><i
                                            class="fas fa-edit mr-2"></i>Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @php
                    $j++;
                @endphp
            @endforeach
        @endif
    @endif
    @php
        $j = 1;
    @endphp
    @foreach ($forum as $item)
        <!-- Modal -->
        <div class="modal fade" id="{{ 'forum-pop' . $j }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ Str::limit($item->judul,25) }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <span>Ditulis Oleh : <strong>{{$item->user->name}}</strong> - Topik : <strong>{{$item->forumTopic->nama_topik}}</strong></span>
                        </div>
                        <div class="text-center">
                            <img src="{{ asset('storage') . '/' . $item->gambar }}" alt="" class="w-25 mb-4">
                        </div>
                        <h3 class="text-center mb-2">{{ $item->judul }}</h3>
                        {!! $item->tulisan !!}

                    </div>
                </div>
            </div>
        </div>
        @php
            $j++;
        @endphp
    @endforeach
@endsection

@push('script')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

    <script>
        @if (count($forum))
            @php
                $i = 1;
            @endphp
            @foreach ($forum as $item)
                $("#post-like-{{ $i }}").click(function(e) {
                    if ($(this).attr('class') == 'far fa-heart') {
                        $(this).removeClass()
                        $(this).addClass('fas fa-heart')
                    } else {
                        $(this).removeClass()
                        $(this).addClass('far fa-heart')
                    }
                })
                @php
                    $i++;
                @endphp
            @endforeach
        @endif
        // e.preventDefault();
        // $.ajax({
        //     url: "{{ route('forum.liked') }}",
        //     datatype: "json",

        // })
        // Change text area into ckeditor
        var konten = document.getElementById('tulisan')
        ClassicEditor
            .create(konten, {
                ckfinder: {
                    uploadUrl: "{{ route('image.upload') . '?_token=' . csrf_token() }}",
                }
            })
            .catch(error => {
                console.error(error);
            });
        @if (count($forum))
            @for ($k = 1; $k < count($forum); $k++)
                var konten = document.getElementById('tulisan-{{ $k }}')
                ClassicEditor
                    .create(konten, {
                        ckfinder: {
                            uploadUrl: "{{ route('image.upload') . '?_token=' . csrf_token() }}",
                        }
                    })
                    .catch(error => {
                        console.error(error);
                    });
            @endfor
        @endif
    </script>
@endpush
