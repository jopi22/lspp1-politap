@extends('layout/admin')

@section('judul')
    {{ $pengelola->nama }} | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h3>
            <i class="fas fa-users"></i> Edit Pengelola
        </h3>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('beranda_img2.index') }}"> Pengelola</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">{{ $pengelola->id }}</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- EDIT DATA --}}
    <!-- /////////////////////////////////// -->
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Dibawah ini Untuk Mengedit Pengelola
                    </a>
                </h6>
            </div>
            <div id="collapse-11" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('beranda_img2.update', $pengelola->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama Pengelola</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="nama">{{ $pengelola->nama }}</textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>Jabatan</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="keterangan">{{ $pengelola->keterangan }}</textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>Email</label>
                                <input type="email" class="form-control" maxlength="40" rows="1" name="email"
                                    value="{{ $pengelola->email }}"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>No Handphone</label>
                                <input type="text" class="form-control" value="{{ $pengelola->no_hp }}" maxlength="40"
                                    name="no_hp" id="">
                            </div>

                            <div class="col-md-4">
                                <label>Link Facebook</label>
                                <textarea class="form-control" maxlength="200" rows="1" name="facebook">{{ $pengelola->facebook }}</textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>Link Twitter</label>
                                <textarea class="form-control" maxlength="200" rows="1" name="twitter">{{ $pengelola->twitter }}</textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>Link Instagram</label>
                                <textarea class="form-control" maxlength="200" rows="1" name="instagram">{{ $pengelola->instagram }}</textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>Foto</label>
                                <input type="file" class="form-control" accept=".png, .jpg, .jpeg" name="image"><br>
                            </div>
                        </div>

                        <div class="form-action">
                            <button type="submit" class="btn btn-rounded btn-info btn-icon-text">
                                <i class="fas fa-edit btn-icon-prepend"></i>
                                Update
                            </button>
                    </form><br>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    {{-- SHOW DATA --}}
    <!-- /////////////////////////////////// -->
    <div class="card col-md-6">
        <div class="card-body">
            <div class="card-title">
                <h4>Preview</h4>
            </div>
            <img src="{{ asset($pengelola->image) }}" width="200px">
            <div class="card-body">
                <h4 class="card-text">Nama : {{ $pengelola->nama }}</h4>
                <h5 class="card-text">Jabatan : {!! $pengelola->keterangan !!}</h5>
                <h5 class="card-text">No HP : {!! $pengelola->no_hp !!}</h5>
                <h5 class="card-text">Email : {{ $pengelola->email }}</h5>
            </div>
        </div>
    </div>
@endsection
