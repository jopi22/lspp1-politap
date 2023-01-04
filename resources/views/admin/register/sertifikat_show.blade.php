@extends('layout/admin')

@section('judul')
    {{ $validasi->user_name }} | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-edit"></i> Verifikasi Data Proses Sertifikasi
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('list.valid') }}">List Proses
                        Sertifikasi</a></li>
                </a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">{{ $validasi->id }}</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- SISI KIRI  DATA -->
    <!-- /////////////////////////////////// -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <h4 class="card-title"><i class="far fa-id-card "></i> Data Sertifikasi</h4>
                            <div class="d-flex">
                                <div class="progress progress-md flex-grow">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75"
                                        style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <tr>
                                    <td style="width: 100px" class="text-muted">Kode Registrasi </td>
                                    <td style="width: 200px">{{ $validasi->id }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Skema yang Daiambil </td>
                                    <td style="width: 200px">{{ $validasi->skema_name }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Kode Skema </td>
                                    <td style="width: 200px">{{ $validasi->kode_skema }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Tujuan Sertifikasi </td>
                                    <td style="width: 200px">{{ $validasi->jenis }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Tanggal Mendaftar </td>
                                    <td style="width: 200px">{{ $validasi->created_at->format('d-M-Y') }}</td>
                                </tr>
                            </table><br>
                            <h4 class="card-title"><i class="far fa-id-card "></i> Data Pribadi</h4>
                            <div class="d-flex">
                                <div class="progress progress-md flex-grow">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75"
                                        style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <tr>
                                    <td style="width: 100px" class="text-muted">Nama Asesi</td>
                                    <td style="width: 200px">{{ $validasi->user_name }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">NIM</td>
                                    <td style="width: 200px">{{ $validasi->nim }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Tempat Lahir</td>
                                    <td style="width: 200px">{{ $validasi->tmpt_lahir }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Tanggal Lahir</td>
                                    <td style="width: 200px">{{ $validasi->tgl_lahir->format('d-M-Y') }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Jenis Kelamin</td>
                                    <td style="width: 200px">{{ $validasi->sex->sex }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Kewarganegaraan</td>
                                    <td style="width: 200px">{{ $validasi->negara }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Alamat</td>
                                    <td style="width: 200px">{{ $validasi->alamat }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Kode Post</td>
                                    <td style="width: 200px">{{ $validasi->kode_post }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Email</td>
                                    <td style="width: 200px">{{ $validasi->surel }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Nomor Handphone</td>
                                    <td style="width: 200px">{{ $validasi->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">No Telp Rumah</td>
                                    <td style="width: 200px">{{ $validasi->rmh }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">No Telp Kantor</td>
                                    <td style="width: 200px">{{ $validasi->ktr }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Pendidikan Terakhir</td>
                                    <td style="width: 200px">{{ $validasi->tmt }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Jurusan</td>
                                    <td style="width: 200px">{{ $validasi->jurusan->jurusan }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Semester Kuliah</td>
                                    <td style="width: 200px">{{ $validasi->semester->semester }}</td>
                                </tr>
                            </table><br>
                            <h4 class="card-title"><i class="far fa-id-card "></i> Data Pekerjaan Sekarang</h4>
                            <div class="d-flex">
                                <div class="progress progress-md flex-grow">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75"
                                        style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <tr>
                                    <td style="width: 100px" class="text-muted">Nama Institusi/Perusahaan</td>
                                    <td style="width: 200px">{{ $validasi->institusi }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Jabatan</td>
                                    <td style="width: 200px">{{ $validasi->jabatan }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Alamat Kantor</td>
                                    <td style="width: 200px">{{ $validasi->alamat_kantor }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Kode Post Kantor</td>
                                    <td style="width: 200px">{{ $validasi->postal }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">No Telp Kantor</td>
                                    <td style="width: 200px">{{ $validasi->telp }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">No Telp Kantor</td>
                                    <td style="width: 200px">{{ $validasi->email3 }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">No Fax Kantor</td>
                                    <td style="width: 200px">{{ $validasi->fax }}</td>
                                </tr>
                            </table>
                        </div>
                        <!-- /////////////////////////////////// -->
                        <!-- SISI KANAN DATA -->
                        <!-- /////////////////////////////////// -->
                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 mr-2 text-black">{{ $validasi->user_name }}</h5>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 mr-2 text-black">{{ $validasi->skema_name }}</h5>
                                    </div>
                                </div>
                            </div><br>
                            {{-- <button data-toggle="modal" data-target="#datareg-{{ $validasi->id }}"
                                class="btn btn-success btn-block btn-sm"><i class="fas fa-check-circle"></i> Verifikasi
                                Data Sertifikasi</button><br> --}}
                            <h4 class="card-title"><i class="far fa-id-card "></i> Keterangan Sertifikasi</h4>
                            <div class="d-flex">
                                <div class="progress progress-md flex-grow">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75"
                                        style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <tr>
                                    <td style="width: 100px" class="text-muted">Tanggal Uji Kompetensi</td>
                                    <td style="width: 200px">{{ $validasi->date->format('d-M-Y') }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Waktu Uji Kompetensi</td>
                                    <td style="width: 200px">{{ $validasi->time }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Lokasi Uji Kompetensi</td>
                                    <td style="width: 200px">{{ $validasi->tuk->tuk }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px" class="text-muted">Asesor Penguji</td>
                                    <td style="width: 200px">{{ $validasi->asesor->nama }}</td>
                                </tr>
                            </table><br>
                            {{-- <--------------- MODAL VERIFIKASI ---------------> --}}
                            <div class="modal fade" id="datareg-{{ $validasi->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel"><i class="fas fa-check-circle"></i>
                                                {{ $validasi->user_name }}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin untuk melakukan Proses Verifikasi data ini?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('finish.update', $validasi->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <input type="hidden" name="status"
                                                    value="<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>">
                                                <input type="hidden" name="kode" value="-">
                                                {{-- <input type="hidden" name="id_skema" value="final"> --}}
                                                {{-- <input type="hidden" name="id" value="2022{{ $validasi->user_id }}{{$validasi->id_skema }}"> --}}
                                                <input type="hidden" name="skema_id"
                                                    value="{{ $validasi->kode_skema }}{{ $validasi->user_id }}">
                                                <input type="hidden" name="date" value="">
                                                <input type="hidden" name="time" value="">
                                                <input type="hidden" name="asesor_id" value="1">
                                                <input type="hidden" name="tuk_id" value="1">
                                                <button type="submit" class="btn btn-success"><i
                                                        class="fas fa-check-circle"></i>
                                                    Mahasiswa Sudah Kompeten</button>
                                            </form>
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 py-2 border-top border-bottom">
                                <h4 class="card-title"><i class="far fa-id-card "></i> Bukti Persyaratan Dasar Pemohon
                                </h4>
                                <div class="d-flex">
                                    <div class="progress progress-md flex-grow">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75"
                                            style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><br>
                                <ul class="nav profile-navbar">
                                    @foreach ($validasi->upload_files as $asu)
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                @if ($asu->image)
                                                    <a class="nav-link active" href="{{ asset($asu->image) }}"
                                                        target="_blank">
                                                        <i class="fas fa-check-circle"></i>
                                                        {{ $asu->name }}
                                                    </a>
                                                @else
                                                    <a style="color: #f64d4d" class="nav-link active" target="_blank">
                                                        <i class="fas fa-times-circle"></i>
                                                        {{ $asu->name }}
                                                    </a>
                                                @endif
                                                <img src="{{ asset($asu->image) }}" width="100px" alt="">
                                            </a>
                                        </li>
                                    @endforeach
                            </div><br>

                            <h4 class="card-title"><i class="far fa-id-card "></i> Bukti Asesmen Mandiri</h4>
                            <div class="d-flex">
                                <div class="progress progress-md flex-grow">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75"
                                        style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mt-4 py-2 border-top border-bottom">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 10px">Status</th>
                                            <th style="width: 400px">Elemen</th>
                                            <th style="width: 400px">Bukti</th>
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
                                                    @if ($data->image)
                                                        <a href="{{ asset($data->image) }}" target="_blank">
                                                            <i style="color: #2a4bd1" class="fas fa-check-circle">ADA</i>
                                                        </a>
                                                    @else
                                                        <i style="color: #f64d4d" class="fas fa-times-circle">KOSONG</i>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
