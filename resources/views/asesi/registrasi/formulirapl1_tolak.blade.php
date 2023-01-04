@extends('layout/asesi')

@section('judul')
    Revisi Pendaftaran | LSP-POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')
    <br>
    <div id="home" class="card col-md-12">
        <form action="{{ route('registrasi.update', $data->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Kirim Data Pendaftaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <ol>
                    <li class="font-weight-bold">Sebelum menekan tombol kirim data pendaftran, Harap diisi terlebih dahulu
                        data Formulir APL-01 dan Formuli APL-02 dibawah ini.</li>
                    <li class="font-weight-bold">Harap Membaca Intruksi yang tersedia.</li>
                    <li class="font-weight-bold">Setelah mengirim data pendaftaran , maka data pendaftaran tidak dapat diubah.</li>
                </ol>
                <input type="hidden" name="skema_id"
                    value="belom{{ $data->kode_skema }}{{ $data->user_id }}">
                <input type="hidden" name="status" value="<h4 style='color: green'>Menunggu Validasi...</h4>">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-block font-weight-bold">Kirim Data Pendaftaran
                    <i class="fas fa-flag-checkered"></i></button>
            </div>
        </form>
    </div><br><br>

    {{-- <-------------------- UPLOAD DOKUMEN --------------------> --}}
    <h4>
        <i class="fas  fa-check-square"></i> Mengisi Data Formulir APL-01
    </h4>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fab fa-pagelines"></i>{{ $data->kode_skema }} <i
                    class="fas  fa-ellipsis-h"></i> {{ $data->skema_name }}
            </h4>
            <h4 class="card-title"><i class="fas fa-user"></i>{{ Auth::User()->name }}</h4>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <button style="align-items: center" type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                        data-target="#exampleModal-1w">
                        <i class="fas fa-question-circle"></i> Instruksi Pengisian Formulir APL-01
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fas fa-upload"></i> Upload Dokumen Pendukung</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 20%">Koreksi Admin</th>
                                        <th style="width: 700%">Nama Data</th>
                                        <th style="width: 20%">Action</th>
                                        <th style="width: 20%">Status</th>
                                    </tr>
                                </thead>
                                @foreach ($identitas as $data)
                                    <tbody>
                                        <tr>
                                            <td>{!! $data->koreksi !!}</td>
                                            <td>{{ $data->name }}</td>
                                            <td> <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#exampleModal-{{ $data->id }}"><i
                                                        class="fas fa-cloud-upload-alt"></i> Upload Dokumen</button></td>
                                            <td>
                                                {!! $data->status !!}
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
    </div><br><br>


    <h4>
        <i class="fas  fa-check-square"></i> Mengisi Data Formulir APL-02
    </h4>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-check-square"></i> Formulir APL-02 <i
                            class="fas fa-ellipsis-h"></i>{{ $data->skema_name }}</h4>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <button style="align-items: center" type="button" class="btn btn-warning btn-sm"
                                data-toggle="modal" data-target="#exampleModal-1">
                                <i class="fas fa-question-circle"></i> Instruksi Pengisian Formulir APL-02
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 30px">Koreksi Admin</th>
                                    <th style="width: 200px">Unit</th>
                                    <th style="width: 700px">Elemen</th>
                                    <th style="width: 10px">Action</th>
                                    <th style="width: 10px">Status</th>
                                </tr>
                            </thead>
                            {{-- <form action="{{ route('pendaftaran.update', $skema->id) }}" enctype="multipart/form-data"
                                method="post">
                                @csrf
                                @method('put') --}}
                            @forelse ($xnxx as $data)
                                <tbody>
                                    <tr>
                                        <td>{!! $data->koreksi !!}</td>
                                        <td>{{ $data->unikom_kode }}</td>
                                        <td>{{ $data->asesmen_name }}</td>
                                        <td> <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#exampleModal-{{ $data->id }}"><i
                                                    class="fas fa-cloud-upload-alt"></i> Upload Bukti</button></td>
                                        <td>
                                            {!! $data->status !!}
                                        </td>
                                    </tr>
                                </tbody>
                            @empty
                            @endforelse
                            {{-- </form> --}}
                        </table>
                        <br><br>
                            <a href="#home"><button type="button" class="btn btn-success btn-sm" data-whatever="@mdo"><i class="fas fa-arrow-up"></i></button></a>
                        <br><br>
                    </div>
                </div>
            </div>

        </div>

        {{-- <--------------- MODAL UPLOAD DATA ---------------> --}}
        @foreach ($xnxx as $data)
            <div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" role="dialog"
                aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form action="{{ route('pendaftaran.update', $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="modal-header">
                                <h5 style="color: rgb(0, 0, 0)" class="modal-title" id="ModalLabel"><span
                                        style="color: rgb(158, 46, 46)">Unit :</span> {{ $data->unikom_name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span style="color: rgb(158, 46, 46)" class="font-weight-bold">Elemen :</span> <span
                                    style="color: rgb(0, 0, 0)"
                                    class="font-weight-bold">{{ $data->asesmen_name }}</span>
                                <br><br>
                                <div><label style="color: rgb(158, 46, 46)" class="font-weight-bold" for="">Kriteria Unjuk
                                        Kerja :</label></div>
                                <span style="color: rgb(0, 0, 0)"
                                    class="font-weight-bold">{!! $data->kriteria !!}</span><br><br>
                                <input type="hidden" name="status"
                                    value="<label class='badge badge-outline-success badge-pill'><i class='fas fa-check-circle'></i> Kompeten</label>">
                                <input type="hidden" name="koreksi"
                                    value="<label class='badge badge-outline-warning badge-pill'>Belum Dikoreksi</label>">
                                <input type="file" name="image" accept=".pdf, .png, .jpg, .jpeg" id="">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success btn-block font-weight-bold"><i
                                        class="fas fa-check-circle"></i>
                                    Simpan Dokumen</button>
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>




    {{-- <--------------- MODAL INSTRUKSI 2 ---------------> --}}
    <div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Instruksi Mengisi Formulir APL-02</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Langkah-langkah pengisian formulir APL-02 :
                    <br><br>
                    <ol>
                        <li>Upload data file Formulir APL-02, file berupa <span style="color: brown">pdf</span>.</li>
                        <li>File yang diupload datanya harus sesuai dengan elemen yang diperlukan </li>
                        <li>Setelah Upload berhasil keterangan "Koreksi Admin" akan menjadi <span style="color: brown">Belum
                            Dikoreksi</span>. </li>
                        <li>Pastikan semua data pada Formulir APL-02 harus Kompeten. </p>
                        <li>Klik tombol "Kirim Data Pendaftaran" pada paling atas halaman </p>
                        <li>Setelah menekan tombol tersebut, maka data pendaftaran akan terkirim ke Admin LSP-POLITAP</p>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    {{-- <--------------- MODAL INSTRUKSI 1 ---------------> --}}
    <div class="modal fade" id="exampleModal-1w" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Instruksi Pengisian Formulir APL-01</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Langkah-langkah pengisian formulir APL-01 :
                    <br><br>
                    <ol>
                        <li>Upload ulang data file dokumen pendukung, file berupa <span style="color: brown">png/pdf</span>.
                        </li>
                        <li>Setelah Upload berhasil keterangan "Koreksi Admin" akan menjadi <span style="color: brown">Belum
                                Dikoreksi</span>. </li>
                        <li>Lanjut Lengkapi Formulir APL-02</li>
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
                            <input type="hidden" name="status"
                                value="<label class='badge badge-outline-success badge-pill'>Ada</label>">
                            <input type="hidden" name="koreksi"
                                value="<label class='badge badge-outline-warning badge-pill'>Belum Dikoreksi</label>">
                            <input type="file" name="image" accept=".png" id="">
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
