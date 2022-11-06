@extends('admin.template.admin')

@section('title', 'Admin | Nimaya Kopi')

@section('header-name', 'Kelola FAQ')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah FAQ</h6>
                <a href="{{ url('/admin/faq') }}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        </div>
        <form action="{{ url('/admin/faq') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <div class="small mb-1">Kategori Kursus</div>
                    <select name="course_id" id="course_id">
                        <option value="1">Begineer Class</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="small mb-1">Nama Kelas</div>
                    <input type="text" class="form-control" name="nama_kelas" id="nama_kelas"
                        required>
                </div>
                <div class="form-group">
                    <div class="small mb-1">Materi</div>
                    <textarea id="jawaban" class="form-control" name="jawaban" rows="10" cols="50"></textarea>
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
    <script src="{{ asset('package/ckeditor/ckeditor.js') }}"></script>
    <script>
        var konten = document.getElementById("jawaban");
        CKEDITOR.replace(konten, {
            language: 'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
    </script>
@endpush
