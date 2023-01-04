@extends('layout/admin')

@section('judul')
    Edit Profil LSP-POLITAP | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-cogs"></i> Edit Profil LSP - POLITAP
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #f64d4d" class="breadcrumb-item">
                    <a href="{{ route('f_profil.index') }}">LSP P1-POLITAP</a>
                </li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Edit Profil LSP-POLITAP</li>
            </ol>
        </nav>
    </div><br>


    {{-- <---------------------- EDIT PROFIL ----------------------> --}}
    <div class="card">
        <div class="card-body">
            <form action="{{ route('f_profil.update', $profil->id) }}" enctype="multipart/form-data" method="POST"
                class="forms-sample">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label class="font-weight-bold text-primary" for="exampleTextarea1">Judul Profil LSP P1-POLITAP</label>
                    <textarea maxlength="1000" class="summernote" id="exampleTextarea1" name="profil">{{ $profil->profil }}</textarea>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold text-primary" for="exampleTextarea1">Isi Profil LSP P1-POLITAP</label>
                    <textarea maxlength="1000" class="summernote" id="exampleTextarea1" name="isi">{{ $profil->isi }}</textarea>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold text-primary" for="exampleTextarea1">Visi LSP P1-POLITAP</label>
                    <textarea maxlength="1000" class="summernote" id="exampleTextarea1" name="visi">{{ $profil->visi }}</textarea>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold text-primary" for="exampleTextarea1">Misi LSP P1-POLITAP</label>
                    <textarea maxlength="1000" class="summernote" id="exampleTextarea1" name="misi">{{ $profil->misi }}</textarea>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold text-primary" for="exampleTextarea1">Motto LSP P1-POLITAP</label>
                    <textarea maxlength="1000" class="summernote" id="exampleTextarea1" name="motto">{{ $profil->motto }}</textarea>
                </div>
                <label class="font-weight-bold text-primary" for="input">Logo Politap</label>
                <input type="file" id="input" class="form-control" accept=".png" name="image"><br>
                <button type="submit" class="btn btn-rounded btn-info btn-icon-text">
                    <i class="far fa-check-square btn-icon-prepend"></i>
                    Update
                </button>
                <a href="{{ route('f_profil.edit', $profil->id) }}"><button type="button"
                        class="btn btn-danger btn-rounded btn-icon-text">
                        <i class="fa fa-times btn-icon-prepend"></i>
                        Batal
                    </button></a>
            </form>
        </div>
    </div>
@endsection
