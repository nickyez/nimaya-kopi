@extends('admin.template.admin')

@section('title', 'Admin | Nimaya Kopi')

@section('header-name', 'Kelola Kelas')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Kelas</h6>
                <a href="{{ url('/admin/class') }}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        </div>
        <form action="{{ url('/admin/class') . '/' . $class->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <div class="small mb-1">Kategori Kursus</div>
                    <select name="course_id" class="form-control" id="course_id">
                        @foreach ($courses as $item)
                            <option value="{{ $item->id }}" @if ($class->course_id == $item->id)
                                selected
                            @endif>{{ $item->nama_kursus }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div class="small mb-1">Nama Kelas</div>
                    <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" value="{{$class->nama_kelas}}" required>
                </div>
                <div class="form-group">
                    <div class="small mb-1">Materi</div>
                    <textarea id="materi" class="form-control" name="materi" rows="10" cols="50">{!!$class->materi!!}</textarea>
                </div>
                <div class="card-footer">
                    <div class="col-sm-12 mb-3">
                        <button type="submit" class="btn btn-primary float-right btn-sm"><i class="fas fa-edit"></i>
                            Ubah</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('page-script')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        // Change text area into ckeditor
        var konten = document.getElementById("materi");
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
