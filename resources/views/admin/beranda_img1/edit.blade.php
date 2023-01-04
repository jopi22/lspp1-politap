@extends('layout/admin')

@section('judul')
    {{ $beranda_img1->id }} | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
    @include('layout/verifikasi')

    {{-- <------------------- PAGE HEADER --------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-image"></i> Edit Carousel
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('beranda_img1.index') }}">Carousel</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">{{ $beranda_img1->id }}</li>
            </ol>
        </nav>
    </div><br>


    {{-- <-------------------EDIT CAROUSEL --------------------> --}}
    <div class="card">
        <div class="card-body">
            <form action="{{ route('beranda_img1.update', $beranda_img1->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('patch')
                <label for="file">Pilih Gambar</label>
                <input type="file" class="form-control" id="file" name="image">
                <br>
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" maxlength="20" class="form-control" value="{{ $beranda_img1->keterangan }}">
                <div class="form-action"><br>
                    <button type="submit" class="btn btn-rounded btn-info btn-icon-text btn-block">
                        <i class="far fa-check-square btn-icon-prepend"></i>
                        Update
                    </button>
                </div>
            </form><br>
            <img src="{{ asset($beranda_img1->image) }}" width="200px" alt="carousel">
        </div>
    </div>
@endsection
