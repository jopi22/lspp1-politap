@extends('layout/admin')

@section('judul')
    {{ $asesor->nama }} | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-users"></i> Detail & Update data Asesor
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('asesor.index') }}">Asesor</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">{{ $asesor->id }}</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- TAMPIL ASESOR --}}
    <!-- /////////////////////////////////// -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="border-bottom text-center pb-4">
                            @if ($asesor->image)
                                <img src="{{ asset($asesor->image) }}" alt="profile" class="img-lg rounded-circle mb-3">
                            @else
                                <img src="{{ asset('general/assets/images/photo.jpg') }}" alt="profile" class="img-lg rounded-circle mb-3">
                            @endif
                            <h4>{{ $asesor->nama }}</h4>
                            <h6 class="text text-muted">#{{ $asesor->nik }}</h6>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="progress progress-md flex-grow">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55"
                                    style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="border-bottom py-4">
                            <p>Skema</p>
                            <div>
                                <label class="badge badge-outline-info">{{ $asesor->skema }}</label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="progress progress-md flex-grow">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75"
                                    style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="py-4">
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Status
                                </span>
                                <span class="float-right ">
                                    {{ $asesor->status }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Jenis Kelamin
                                </span>
                                <span class="float-right ">
                                    {{ $asesor->sex }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Email
                                </span>
                                <span class="float-right ">
                                    {{ $asesor->email }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Nomor Handphone
                                </span>
                                <span class="float-right ">
                                    {{ $asesor->no_hp }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Alamat
                                </span>
                                <span class="float-right ">
                                    {{ $asesor->alamat }}
                                </span>
                            </p>
                        </div>
                        <button class="btn btn-dark btn-block"><i class=" fas fa-minus"></i></button>
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                        <!-- /////////////////////////////////// -->
                        {{-- TAMBAH ASESOR --}}
                        <!-- /////////////////////////////////// -->
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('asesor.update', $asesor->id) }}" method="POST"
                                    enctype="multipart/form-data" class="form-sample">
                                    @csrf
                                    @method('patch')
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama </label>
                                            <div class="col-sm-9">
                                                <input type="text" maxlength="100" name="nama" class="form-control"
                                                    value="{{ $asesor->nama }}">
                                                @error('nama')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Kode Asesor</label>
                                            <div class="col-sm-9">
                                                <input type="text" maxlength="100" name="nik" class="form-control"
                                                    value="{{ $asesor->nik }}">
                                                @error('nik')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="sex">
                                                    <option value="{{ $asesor->sex }}" holder>{{ $asesor->sex }}
                                                    </option>
                                                    <option>Laki-laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                                @error('sex')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3  col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" maxlength="100" type="email"
                                                    name="email" value="{{ $asesor->email }}">
                                                @error('email')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" name="no_hp"
                                                    value="{{ $asesor->no_hp }}">
                                                @error('no_hp')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" maxlength="100" name="alamat"
                                                    value="{{ $asesor->alamat }}">
                                                @error('alamat')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Photo</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Skema </label>
                                            <div class="col-sm-9">
                                                <input type="text" maxlength="100" name="skema" class="form-control"
                                                    value="{{ $asesor->skema }}">
                                                @error('skema')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="status">
                                                    <option value="{{ $asesor->status }}" holder>{{ $asesor->status }}</option>
                                                    <option value="Aktif" holder>Aktif</option>
                                                    <option value="Nonaktif" holder>Nonaktif</option>
                                                </select>
                                                @error('status')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-description text-right">
                                        <button type="submit" class="btn btn-info btn-icon-text btn-block">
                                            <i class="fa fa-edit btn-icon-prepend"></i>
                                            Update Data {{ $asesor->nama }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
