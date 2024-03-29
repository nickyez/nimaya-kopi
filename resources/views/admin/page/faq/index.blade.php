@extends('admin.template.admin')

@section('title', 'Admin | Nimaya Kopi')

@section('header-name','Kelola FAQ')

@push('custom-style')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data FAQ</h6>
            <a href="{{ Request::url() . '/create' }}" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Tambah FAQ</span>
            </a>
        </div>
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="faq">
                <thead>
                    <tr>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faqs as $item)
                        <tr>
                            <td style="width:15%">{{ $item->pertanyaan }}</td>
                            <td style="width:25%">{{ $item->jawaban }}</td>
                            <td style="width:20%">
                                <div class="d-flex flex-row justify-content-center">
                                    <a href="{{ Request::url() . '/' . $item->id . '/edit' }}"
                                        class="btn btn-sm btn-success mx-2">
                                        <i class="fa fa-edit"></i>
                                        <span class="text">Edit</span>
                                    </a>
                                    <form action="{{ Request::url() . '/' . $item->id }}" method="post"
                                        onclick="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger mx-2">
                                            <i class="fa fa-trash"></i>
                                            <span class="text">Delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('page-script')
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#faq').DataTable();
        });
    </script>
@endpush

