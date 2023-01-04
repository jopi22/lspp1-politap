@extends('layout.asesi')

@section('judul')
    Koleksi Sertifikat | LSP-POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
<div class="row">
    <!-- /////////////////////////////////// -->
    <!-- SISI KIRI  DATA -->
    <!-- /////////////////////////////////// -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <h4 class="card-title"><i class="far fa-id-card "></i> Data Identitas Personal</h4>
                        {{-- <div class="border-bottom py-4"> --}}
                        <div class="d-flex">
                            <div class="progress progress-md flex-grow">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="75"
                                    style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        {{-- </div> --}}
                        <div class="border-bottom py-4">
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Nama Asesi &rarr;
                                </span>
                                <span class="float-right ">
                                    {{ $validasi->user_name }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Skema &rarr;
                                </span>
                                <span class="float-right ">
                                    {{ $validasi->skema_name }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Kode Skema &rarr;
                                </span>
                                <span class="float-right ">
                                    {{ $validasi->kode_skema }}
                                </span>
                            </p>
                            {{-- <p class="clearfix">
                                <span class="float-left text-muted">
                                    Email &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->email2 }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Tempat Lahir &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->tempat_lahir }}
                                </span>
                            </p> --}}
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Tanggal Lahir &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->tgl_lahir }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Jenis Kelamin &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->sex->sex }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Kewarganegaraan &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->negara }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Alamat &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->alamat }}
                                </span>
                            </p>
                            {{-- <p class="clearfix">
                                <span class="float-left text-muted">
                                    Kode Post &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->kode_post }}
                                </span>
                            </p> --}}
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Nomor Handphone Aktif &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->no_hp }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Jurusan Kuliah &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->jurusan->jurusan }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Semester Kuliah &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->semester->semester }}
                                </span>
                            </p>
                            {{-- <p class="clearfix">
                                <span class="float-left text-muted">
                                    Provinsi &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->provinsi }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Kabupaten &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->kabupaten }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Kota &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->kota }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left text-muted">
                                    Kecamatan &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->kecamatan }}
                                </span>
                            </p> --}}<br>
                            <h4 class="card-title"><i class="far fa-id-card "></i> Data Pekerjaan Sekarang</h4>
                        {{-- <div class="border-bottom py-4"> --}}
                        <div class="d-flex">
                            <div class="progress progress-md flex-grow">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="75"
                                    style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><br>
                        <p class="clearfix">
                                <span class="float-left text-muted">
                                    Institusi &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->institusi }}
                                </span>
                        </p>
                        <p class="clearfix">
                                <span class="float-left text-muted">
                                    Jabatan &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->jabatan }}
                                </span>
                        </p>
                        <p class="clearfix">
                                <span class="float-left text-muted">
                                    Email (Perusahaan) &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->email3 }}
                                </span>
                        </p>
                        <p class="clearfix">
                                <span class="float-left text-muted">
                                    Nomor Telepon &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->telp }}
                                </span>
                        </p>
                        <p class="clearfix">
                                <span class="float-left text-muted">
                                    Fax &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->fax }}
                                </span>
                        </p>
                        <p class="clearfix">
                                <span class="float-left text-muted">
                                    Kode Post &rarr;
                                </span>
                                <span class="float-right">
                                    {{ $validasi->postal }}
                                </span>
                        </p>
                        </div>
                    </div>
                    <!-- /////////////////////////////////// -->
                    <!-- SISI KANAN DATA -->
                    <!-- /////////////////////////////////// -->
                    <div class="col-lg-8 pl-lg-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3>{{ $validasi->user_name }}</h3>
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 mr-2 text-muted">Kode Registrasi:
                                        <h4>#{{ $validasi->id }}</h4>
                                    </h5>
                                </div>
                            </div>
                            <button class="btn btn-light text-white">{!! $validasi->status !!}</button>
                            <h4 class="card-title"></h4>
                        </div><br>
                        <div class="d-flex">
                            <div class="progress progress-md flex-grow">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="75"
                                    style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><br>
                        <h4 class="card-title"><i class="far fa-id-card "></i> Formulir APL-01</h4>
                        <div class="mt-4 py-2 border-top border-bottom">
                            <ul class="nav profile-navbar">
                                @foreach ($validasi->upload_files as $asu)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <a class="nav-link active" href="{{ asset($asu->image) }}"
                                                target="_blank">
                                                <i class="fas fa-download"></i>
                                                {{ $asu->name }} &nbsp; &nbsp; &nbsp; &nbsp;
                                            </a>
                                            <img src="{{ asset($asu->image) }}" width="100px" alt="">
                                            {{-- <br> {{ $asu->name }} --}}
                                        </a>
                                    </li>
                                @endforeach
                        </div><br>
                        <div class="d-flex">
                            <div class="progress progress-md flex-grow">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="75"
                                    style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><br>
                        <h4 class="card-title"><i class="far fa-id-card "></i> Formulir APL-02</h4>
                        <div class="mt-4 py-2 border-top border-bottom">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">#</th>
                                        <th style="width: 10%">Status</th>
                                        <th style="width: 100%">Elemen</th>
                                    </tr>
                                </thead>
                                @foreach ($validasi->xnxxes as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {!! $data->status !!}
                                            </td>
                                            <td>{{ $data->asesmen_name }}</td>
                                            <td>
                                                <a href="{{ asset($data->image) }}" target="_blank"
                                                    class="btn btn-info btn-rounded"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <a href="{{ route('dashasesi.index') }}"><button class="btn btn-info btn-block font-weight-bold"><i class="fas fa-user"></i>    Kembali ke Dashboard</button></a>

            </div>
        </div>
    </div>
</div>
@endsection
