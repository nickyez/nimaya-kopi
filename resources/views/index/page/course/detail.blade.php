@extends('index.template.course.template')

@section('title', 'Course - Nimaya Kopi')

@section('header-name', $class_item->nama_kelas)

@section('content')
    <div class="container mt-3">
        {!! $class_item->materi !!}
    </div>
@endsection
