@extends('layout/asesi')

@section('sidebar')
    sidebar-mini
@endsection

@section('judul')
    Mengambil Formulir | LSP-POLITAP
@endsection

@section('isi')
    @include('layout/verifikasi')
    {{-- <--------------- Mengambil Formulir Pendaftaran ---------------> --}}
    <div class="page-header">
        <h4>
            <i class="fa fa-window-restore"></i> Mengambil Formulir Pendaftaran
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('dashasesi.index') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Mengambil Formulir</li>
            </ol>
        </nav>
    </div><br>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fab fa-pagelines"></i>{{ $skema->kode_skema }} <i
                    class="fas  fa-ellipsis-h"></i> {{ $skema->skema }}
            </h4>
            <h4 class="card-title"><i class="fas fa-user"></i>{{ Auth::User()->name }}</h4>
            <button style="align-items: center" type="button"
                class="btn btn-rounded btn-warning btn-sm font-weight-bold" data-toggle="modal"
                data-target="#exampleModal-1">
                <i class="fas fa-question-circle"></i> Instruksi Ambil Formulir
            </button>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 200px">
                                <form action="{{ route('identitas.store') }}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    @foreach ($dokumen_upload as $asu)
                                        <input type="hidden" name="data_register_id[]"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="kode_dokumen[]"
                                            value="{{ $loop->iteration }}{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="name[]" value="{{ $asu->name }}">
                                        <input type="hidden" name="kode[]"
                                            value="{{ $loop->iteration }}{{ Auth::user()->id }}">
                                        <input type="hidden" name="user_id[]" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="status[]"
                                            value="<label class='badge badge-outline-danger badge-pill'>Kosong</label>">
                                        <input type="hidden" name="y[]" value=".">
                                        <input type="hidden" name="n[]" value=".">
                                        <input type="hidden" name="z[]" value=".">
                                    @endforeach
                                    <button class="btn btn-primary btn-sm btn-rounded btn-block font-weight-bold"
                                        type="submit">1.
                                        Ambil Formulir APL-01</button>
                                </form>
                            </th>
                            <th style="width: 200px">
                                <form action="{{ route('pendaftaran.store') }}" enctype="multipart/form-data"
                                    method="post">
                                    @csrf
                                    @foreach ($skema->asesmens as $asu)
                                        <input type="hidden" name="data_register_id[]"
                                            value="{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="user_nama[]" value="{{ Auth::user()->name }}">
                                        <input type="hidden" name="user_id[]" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="status[]"
                                            value="<label class='badge badge-outline-danger badge-pill'>Tidak Kompeten</label>">
                                        <input type="hidden" name="kode[]"
                                            value="{{ $loop->iteration }}{{ Auth::user()->id }}">
                                        <input type="hidden" name="kode_elemen[]"
                                            value="{{ $loop->iteration }}{{ Auth::user()->id }}{{ $skema->id }}">
                                        <input type="hidden" name="skema_id[]" value="{{ $skema->id }}">
                                        <input type="hidden" name="skema_name[]" value="{{ $skema->skema }}">
                                        <input type="hidden" name="unikom_name[]" value="{{ $asu->unikom->unikom }}">
                                        <input type="hidden" name="unikom_kode[]" value="{{ $asu->unikom->kode_unikom }}">
                                        <input type="hidden" name="asesmen_name[]" value="{{ $asu->asesmen }}">
                                        <input type="hidden" name="unikom_id[]" value="{{ $asu->id }}">
                                        <input type="hidden" name="kriteria[]" value="{{ $asu->kriteria }}">
                                    @endforeach
                                    <button class="btn btn-primary btn-sm btn-rounded btn-block btn-block font-weight-bold"
                                        type="submit">2. 
                                        Ambil Formulir APL-02</button>
                                </form>
                            </th>
                            <th style="width: 200px">
                                <a href="{{ route('dashasesi.index') }}"><button
                                        class="btn btn-rounded btn-success btn-block btn-sm btn-block font-weight-bold"
                                        type="submit">3. Simpan Perubahan
                                        <i class="fas fa-angle-double-right"></i>
                                    </button></a>

                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="d-flex mb-3">
                <div class="progress progress-md flex-grow">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="55" style="width: 100%"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            {{-- //////////////////////////////// --}}
                            {{-- ////////  TABLE UPLOAD DOKUMEN  ////////////// --}}
                            {{-- /////////////////////////////// --}}
                            <h4 class="card-title"><i class="fa fa-window-restore"></i>Data Formulir APL-01</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Data</th>
                                    </tr>
                                </thead>
                                @foreach ($identitas as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->name }}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fa fa-window-restore"></i>Data Formulir APL-02</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Elemen</th>
                                    </tr>
                                </thead>
                                @foreach ($xnxx as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->asesmen_name }}</td>
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

    {{-- <--------------- MODAL INSTRUKSI ---------------> --}}
    <div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Instruksi Mengambil Formulir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Langkah-langkah dalam Mengambil Formulir :
                    <br><br>
                    <ol>
                        <li>Tekan Tombol "<span class="text text-primary">Ambil Formulir APL-01</span>" , sampai data
                            Formulir APL-01 muncul. </li>
                        <li>Tekan Tombol "<span class="text text-primary">Ambil Formulir APL-02</span>" , sampai data
                            Formulir APL-02 muncul.</li>
                        <li>Tekan Tombol "<span style="color: green">Simpan Perubahan</span>", maka anda akan diarahkan ke laman
                            Dashboard </li>
                        <li>Dilaman Dashboard akan muncul sebuah card yang berisi data pendaftaran anda, Kemudian tekan
                            tombol "<span class="text text-success">Lanjutkan Pengisian Data Pendaftaran Anda</span> ".
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <--------------- MODAL UPDATE ---------------> --}}
    @foreach ($identitas as $data)
        <div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('identitas.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">{{ $data->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="status" value="<div class='badge badge-success'>Ada</div>">
                            <input type="file" name="image" accept=".pdf, .png" id="">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success btn-block font-weight-bold"><i class="fas fa-check-circle"></i>
                                Simpan Dokumen</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
