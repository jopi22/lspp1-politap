@extends('layout.admin')

@section('judul')
Dashboard | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h4>
            <i class="fas fa-chart-pie"></i> Dashboard
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">LSP POLITAP</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div><br>

    {{-- <---------------------- STATISTIK ASESI ----------------------> --}}
    <div class="card card-statistics">
        <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm far fa-address-card mr-2"></i>
                        Registrasi Terbaru
                    </p>
                    <h2 class="text text-center counter-value">{{ $databaru }}</h2>
                </div>
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                        Proses Sertifikasi
                    </p>
                    <h2 class="text text-center counter-value">{{ $datavalid }}</h2>
                </div>
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-times mr-2"></i>
                        Registrasi ditolak
                    </p>
                    <h2 class="text text-center counter-value">{{ $datatolak }}</h2>
                </div>
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm fa fa-id-badge mr-2"></i>
                        Jumlah Asesi
                    </p>
                    <h2 class="text text-center  counter-value">{{ $datareg }}</h2>
                </div>
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-users mr-2"></i>
                        Jumlah Pengguna
                    </p>
                    <h2 class="text text-center counter-value">{{ $datauser }}</h2>
                </div>
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-certificate mr-2"></i>
                        Pemegang Sertifikat
                    </p>
                    <h2 class="text text-center  counter-value">{{ $datasertifikat }}</h2>
                </div>
            </div>
        </div>
    </div><br>

    {{-- <---------------------- STATISTIK ADMIN ----------------------> --}}
    <div class="row">
        <div class="counter">
            <div class="counter-icon">
                <i class="fa fa-suitcase"></i>
            </div>
            <div class="counter-content">
                <h3>Skema</h3>
                <span class="counter-value">{{ $dataskema }}</span>
            </div>
        </div>
        <div class="counter blue">
            <div class="counter-icon">
                <i class="fa fa-users"></i>
            </div>
            <div class="counter-content">
                <h3>Asesor</h3>
                <span class="counter-value">{{ $dataasesor }}</span>
            </div>
        </div>
        <div class="counter green">
            <div class="counter-icon">
                <i class="fa fa-building"></i>
            </div>
            <div class="counter-content">
                <h3>TUK</h3>
                <span class="counter-value">{{ $datatuk }}</span>
            </div>
        </div>
    </div><br>

    <div class="row">
        {{-- <---------------------- NEW REGISTER ----------------------> --}}
        <div class="col-lg-7 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div style="background-color: #f64d4d " class="card-header">
                    <div class="row">
                        <a href="">
                            <h5 class="text text-white"><i class="fas fa-id-card"></i> Register Terbaru </h5>
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="text text-muted">
                                    <th>Nama</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($newreg as $asu)
                                    <tr>
                                        <td>
                                            #{{ $asu->id }} | {{ $asu->user_name }}
                                            <div class="table-links">
                                                Skema : {{ $asu->skema_name }}
                                                <div class="bullet"></div>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $asu->created_at->diffforhumans() }}
                                            <div class="table-links">
                                                tanggal: {{ $asu->created_at }}
                                                <div class="bullet"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('validasi.show', $asu->id) }}"
                                                    class="btn btn-primary btn-sm btn-rounded btn-action mr-1"
                                                    data-toggle="tooltip" title="" data-original-title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('validasi.destroy', $asu->id) }}" method="POST"
                                                    onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                    @csrf
                                                    @method('delete')
                                                    <a href=""><button data-toggle="tooltip" title=""
                                                            data-original-title="Hapus" type="submit"
                                                            class="btn btn-danger btn-rounded btn-sm"><i
                                                                class="fa fa-trash "></i></button></a>
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
        </div>

        {{-- <---------------------- JADWAL SERTIFIKASI ----------------------> --}}
        <div class="col-lg-5 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div style="background-color: #f64d4d " class="card-header">
                    <h5 class="text text-white"><i class="fas fa-calendar-alt"></i> Jadwal Sertifikasi</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="text text-muted">
                                <th>Nama</th>
                                <th>Waktu Sertifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwalreg as $asu)
                                <tr>
                                    <td>
                                        #{{ $asu->id }} | {{ $asu->user_name }}
                                        <div class="table-links">
                                            Skema : {{ $asu->skema_name }}
                                            <div class="bullet"></div>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $asu->date->format('j F Y') }}
                                        <div class="table-links">
                                            jam: {{ $asu->time}}
                                            <div class="bullet"></div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><br>

    {{-- <---------------------- PEMEGANG SERTIFIKAT ----------------------> --}}
    <div class="row">
        {{-- PEMEGANG SERTIFIKAT --}}
        <div class="col-md-7 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div style="background-color: #f64d4d " class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="text text-white"><i class="fas fa-certificate"></i> Pemegang Sertifikat</h5>
                    </div>
                </div>
                <div class="card-body">
                    @foreach ($datapemegang as $asu)
                        <div class="list d-flex align-items-center border-bottom py-3">
                            <img class="img-sm rounded-circle" src="{{ $asu->image }}" alt="">
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0"><b>{{ $asu->user_name }} </b></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-certificate text-muted mr-1"></i>
                                        <p class="mb-0">{{ $asu->skema_name }}</p>
                                    </div>
                                    <small class="text-muted ml-auto">{{ $asu->updated_at->diffforhumans() }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- KALENDER --}}
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="text text-dark">
                            <i class="fas fa-calendar-alt"></i> Kalender
                        </h4>
                    </div>
                    <div id="inline-datepicker-example" class="datepicker"></div>
                </div>
            </div>
        </div>

    </div><br><br>


    {{-- <---------------------- FOOTER ----------------------> --}}
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="statistics-item">
                        <div class="card-img">
                            <img src="{{ asset('general/assets/images/bnsp.png') }}" width="150px" alt="">
                        </div>
                    </div>
                    <div class="statistics-item">
                        <div class="card-img">
                            <img src="{{ asset('general/assets/images/kemendikbud_small.png') }}" width="90px" alt="">
                        </div>
                    </div>
                    <div class="statistics-item">
                        <div class="card-img">
                            <img src="{{ asset('general/assets/images/politap_small.png') }}" width="90px" alt="">
                        </div>
                    </div>
                    <div class="statistics-item">
                        <div class="card-img">
                            <img src="{{ asset('general/assets/images/lsp_small.jpg') }}" width="110px" alt="">
                        </div>
                    </div>
                    <div class="statistics-item">
                        <h5>Kontak Admin</h5>
                        <p>
                        <ul>
                            <li><i class="icon-sm far fa-comment mr-2"></i>08965386474683</li>
                            <li><i class="icon-sm far fa-envelope mr-2"></i>lsp@politap.ac.id</li>
                            <li><i class="icon-sm fab fa-instagram mr-2"></i>
                                <a href="https://www.instagram.com/lsppolitap/" target="_blank">lsppolitap
                            </li>
                            </a>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
