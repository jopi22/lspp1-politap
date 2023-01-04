@extends('layout/admin')

@section('judul')
    Tambah Note | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
@include('layout/verifikasi')
{{-- <---------------------- PAGE HEADER ----------------------> --}}
<div class="page-header">
    <h3>
        <i class="fas fa-plus"></i> Tambah Note
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-danger">
            <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
            <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('note.index') }}">Catatan</a></li>
            <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Tambah Catatan</li>
        </ol>
    </nav>
</div><br>
    {{-- <---------------------- TAMBAH CATATAN ----------------------> --}}
    <form action="{{ route('note.store') }}" method="post">
    @csrf
    <div class="card col-md-8">
        <div class="card-body">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" maxlength="50" placeholder="Tulis Judul disini" name="judul" maxlength="30">
            <br>
            <label for="isi">Catatan</label>
            <textarea name="isi" class="summernote" id="isi" cols="1000" rows="2"></textarea>
            <br>
            <button class="btn btn-success btn-rounded btn-block" type="submit"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </div>
    </form>
@endsection
