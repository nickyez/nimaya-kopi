@extends('admin.template.admin')

@section('title', 'Admin | Nimaya Kopi')

@section('header-name', 'Kelola Kursus')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit Kursus</h6>
                <a href="{{ url('/admin/course') }}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        </div>
        <form action="{{ url('/admin/course') .'/'. $course->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <div class="small mb-1">Upload Gambar</div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar"
                            aria-describedby="inputGroupFileAddon01" name="gambar" onchange="showname()">
                        <label class="custom-file-label" id="fileLabel" for="gambar">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="small mb-1">Nama Kursus</div>
                    <input type="text" class="form-control" name="nama_kursus" id="nama_kursus"
                        value="{{ $course->nama_kursus }}" required>
                </div>
                <div class="form-group">
                    <div class="small mb-1">Deskripsi</div>
                    <textarea id="deskripsi" class="form-control" name="deskripsi" rows="10" cols="50">{{ $course->deskripsi }}</textarea>
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

@push('page-script')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        // Change text area into ckeditor
        var konten = document.getElementById("deskripsi");
        ClassicEditor
            .create(konten)
            .catch(error => {
                console.error(error);
            });

        // change label when file was uploaded
        function showname() {
            var name = document.getElementById('gambar');
            var label = document.getElementById('fileLabel');
            label.innerHTML = name.files.item(0).name;
        };
    </script>
@endpush
