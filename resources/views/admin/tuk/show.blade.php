@extends('layout/admin')

@section('judul')
    {{ $tuk->tuk }} | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-map"></i> Detail TUK
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('tuk.index') }}">Tempat Uji Kompetensi</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $tuk->id }}</li>
            </ol>
        </nav>
    </div><br>

    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Klik disini Untuk Mengubah data TUK
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('tuk.update', $tuk->id) }}" enctype="multipart/form-data" method="POST"
                        class="form-sample">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">TUK</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $tuk->tuk }}" maxlength="100" name="tuk"
                                            class="form-control" />
                                        @error('tuk')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode TUK</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $tuk->kode }}" maxlength="100" name="kode"
                                            class="form-control" />
                                        @error('kode')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gambar TUK</label>
                                    <div class="col-sm-9">
                                        <input type="file" accept=".png" name="image" class="form-control" />
                                        @error('image')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $tuk->alamat }}" maxlength="100" name="alamat"
                                            class="form-control" />
                                        @error('alamat')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pengelola</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $tuk->pengelola }}" maxlength="100"
                                            name="pengelola" class="form-control" />
                                        @error('pengelola')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-rounded btn-success btn-icon-text btn-block">
                            <i class="fa fa-save btn-icon-prepend"></i>
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card col-md-6">
        <div class="card-body">
            @if ($tuk->image)
                <img class="card-img-top" src="{{ asset($tuk->image) }}" alt="Card image cap">
            @else
                <img class="card-img-top"
                    src="{{ asset('general/assets/images/Gedung-Kuliah-I-Laboratorium-Politeknik-Negeri-Ketapang.jpg') }}"
                    alt="Card image cap">
            @endif
            <div class="card-body">
                <h4 class="card-title">Nama TUK : {{ $tuk->tuk }}</h4>
                <h4 class="card-title">Kode TUK : {{ $tuk->kode }}</h4>
                <h4 class="card-title">Pengelola : {{ $tuk->pengelola }}</h4>
                <p class="card-title">Alamat : {!! $tuk->alamat !!}</p>
            </div>
        </div>
    </div>
@endsection
