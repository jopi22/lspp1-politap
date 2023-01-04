@extends('layout/admin')

@section('judul')
    {{ $note->judul }} | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
@include('layout/verifikasi')
{{-- <---------------------- PAGE HEADER ----------------------> --}}
<div class="page-header">
    <h3>
        <i class="fas fa-edit"></i> Edit Catatan
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-danger">
            <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
            <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('note.index') }}">Catatan</a></li>
            <li style="color: #fff" class="breadcrumb-item active" aria-current="page">{{ $note->id }}</li>
        </ol>
    </nav>
</div><br>
    {{-- <---------------------- EDIT CATATAN ----------------------> --}}
    <form action="{{ route('note.update', $note->id) }}" method="post">
        @csrf
        @method('put')
        <div class="card col-md-8">
            <div class="card-body">
                <label for="judul">Judul</label>
                <input type="text" value="{{ $note->judul }}" class="form-control" id="judul" placeholder="Tulis Judul disini" name="judul" maxlength="50">
                <br>
                <label for="isi">Catatan</label>
                <textarea name="isi" class="summernote" id="isi" cols="1000" rows="2">{{ $note->isi }}</textarea>
                <br>
                <button class="btn btn-info btn-block btn-rounded" type="submit"><i class="fas fa-save"></i> Update</button>
            </div>
        </div>
        </form>
@endsection
