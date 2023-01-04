@extends('layout/admin')

@section('judul')
    Struktur Organisasi | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h3>
            <i class="fas fa-sitemap"></i> Edit Gambar Struktur Organisasi
        </h3>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- UBAH GAMBAR --}}
    <!-- /////////////////////////////////// -->
    @foreach ($strorg as $asu)
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-image"></i> Ubah Gambar</h4>
                <form action="{{ route('strorg.update', $asu->id) }}" class="forms-sample" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" class="form-control" accept=".jpg, .jpeg" name="image">
                    </div>
                    <button type="submit" class="btn btn-rounded btn-info btn-icon-text">
                        <i class="fa fa-magic btn-icon-prepend"></i>
                        UPDATE
                    </button>
                    <a href="{{ route('strorg.index') }}"><button type="button" class="btn btn-rounded btn-danger btn-icon-text">
                            <i class="fa fa-times btn-icon-prepend"></i>
                            BATAL
                        </button></a>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <img src="{{ asset($asu->image) }}" style="width: 900px" alt="">
            </div>
        </div>
    @endforeach
@endsection
