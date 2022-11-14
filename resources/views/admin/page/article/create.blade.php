@extends('admin.template.admin')

@section('title', 'Admin | Nimaya Kopi')

@section('header-name', 'Kelola Artikel')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Artikel</h6>
                <a href="{{ url('/admin/article') }}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        </div>
        <form action="{{ url('/admin/article') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <div class="small mb-1">Upload Gambar</div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar"
                            aria-describedby="inputGroupFileAddon01" name="gambar" onchange="showname()" required>
                        <label class="custom-file-label" id="fileLabel" for="gambar">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="small mb-1">Judul</div>
                    <input type="text" class="form-control" name="judul" id="judul"
                        required>
                </div>
                <div class="form-group">
                    <div class="small mb-1">Slug</div>
                    <input type="text" class="form-control" name="slug" id="slug"
                        required>
                </div>
                <div class="form-group">
                    <div class="small mb-1">deskripsi</div>
                    <textarea id="deskripsi" class="form-control" name="deskripsi" rows="10" cols="50"></textarea>
                </div>
                <div class="card-footer">
                    <div class="col-sm-12 mb-3">
                        <button type="submit" class="btn btn-primary float-right btn-sm"><i class="fas fa-plus"></i>
                            Tambah</button>
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
