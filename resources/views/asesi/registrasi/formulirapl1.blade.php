@extends('layout.asesi')

@section('sidebar')
    sidebar-mini
@endsection

@section('judul')
    Mengisi Formulir | LSP-POLITAP
@endsection

@section('isi')
    @include('layout/verifikasi')
    <br>

    {{-- <-------------------- KIRIM DATA --------------------> --}}
    <div id="home"  class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div style="background-color: #563fbb" class="card-header" role="tab" id="heading-11">
                <h6 style="background-color: #563fbb" class="mb-0">
                    <a style="background-color: #563fbb" class="collapsed font-weight-bold" data-toggle="collapse"
                        href="#collapse-1111111" aria-expanded="true" aria-controls="collapse-1111111">
                        Kirim Data Pendaftaran
                    </a>
                </h6>
            </div>
            <div id="collapse-1111111" class="" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <form action="{{ route('registrasi.update', $data->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li class="font-weight-bold">Sebelum menekan tombol kirim data pendaftran, Harap diisi terlebih
                                dahulu
                                data Formulir APL-01 dan Formuli APL-02 dibawah ini.</li>
                            <li class="font-weight-bold">Harap Membaca Intruksi yang tersedia.</li>
                            <li class="font-weight-bold">Setelah mengirim data pendaftaran , maka data pendaftaran tidak
                                dapat diubah.</li>
                        </ol>

                        <input type="hidden" name="skema_id" value="{{ $data->kode_skema }}{{ $data->user_id }}">
                        <input type="hidden" name="status" value="<h4 style='color: green'>Menunggu Validasi...</h4>">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-rounded btn-success btn-block font-weight-bold">Kirim Data Pendaftaran
                            <i class="fas fa-flag-checkered"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div><br>
    {{-- <--------------- MODAL KIRIM DATA ---------------> --}}
    {{-- @foreach ($registrasi as $data)
        <div class="modal fade" id="exampleModal-12" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('registrasi.update', $data->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Kirim Data Pendaftaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Setelah mengirim data pendaftaran , maka data pendaftaran tidak dapat diedit kembali</p>
                            <p>Apakah anda yakin ingin akan mengirim data pendaftaran ini ke Admin LSP-POLITAP?</p>
                            <input type="hidden" name="skema_id"
                                value="belom{{ $data->kode_skema }}{{ $data->user_id }}">
                            <input type="hidden" name="status"
                                value="<h4 style='color: green'>Menunggu Validasi...</h4>">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-rounded btn-block font-weight-bold">Kirim Data
                                Pendaftaran <i class="fas fa-flag-checkered"></i></button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach --}}


    {{-- <-------------------- UPLOAD DOKUMEN 1 --------------------> --}}
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div style="background-color: #563fbb" class="card-header" role="tab" id="heading-11">
                <h6 style="background-color: #563fbb" class="mb-0">
                    <a style="background-color: #563fbb" class="collapsed font-weight-bold" data-toggle="collapse"
                        href="#collapse-2323" aria-expanded="true" aria-controls="collapse-2323">
                        FR.APL.01. PERMOHONAN SERTIFIKASI KOMPETENSI
                    </a>
                </h6>
            </div>
            <div id="collapse-2323" class="" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                <form action="{{ route('registrasi.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><i class="fab fa-pagelines"></i>{{ $data->skema_id }} <i
                                class="fas  fa-ellipsis-h"></i> {{ $data->skema_name }}
                        </h4>
                        <h4 class="card-title"><i class="fas fa-user"></i>{{ Auth::User()->name }}</h4>
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <button style="align-items: center" type="button" class="btn btn-warning btn-sm"
                                    data-toggle="modal" data-target="#exampleModal-1">
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
                                                    <th style="width: 10%">#</th>
                                                    <th style="width: 700%">Nama Data</th>
                                                    <th style="width: 20%">Action</th>
                                                    <th style="width: 20%">Status</th>
                                                </tr>
                                            </thead>
                                            @foreach ($identitas as $data)
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-bold">{{ $loop->iteration }}</td>
                                                        <td class="font-weight-bold">{{ $data->name }}</td>
                                                        <td> <button type="button" class="btn btn-info btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#exampleModal-{{ $data->id }}"><i
                                                                    class="fas fa-cloud-upload-alt"></i> Upload
                                                                Dokumen</button></td>
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
                </form>
            </div>
        </div>
    </div><br>


    {{-- <-------------------- UPLOAD DOKUMEN 2 --------------------> --}}
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div style="background-color: #563fbb" class="card-header" role="tab" id="heading-11">
                <h6 style="background-color: #563fbb" class="mb-0">
                    <a style="background-color: #563fbb" class="collapsed font-weight-bold" data-toggle="collapse"
                        href="#collapse-2323" aria-expanded="true" aria-controls="collapse-2323">
                        FR.APL.02. ASESMEN MANDIRI
                    </a>
                </h6>
            </div>
            <div id="collapse-2323" class="" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <form action="{{ route('registrasi.update', $data->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <button style="align-items: center" type="button" class="btn btn-warning btn-sm"
                                    data-toggle="modal" data-target="#exampleModal-11">
                                    <i class="fas fa-question-circle"></i> Instruksi Pengisian Formulir APL-02
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th style="width: 200px">Kode Unit</th>
                                        <th style="width: 900px">Elemen</th>
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
                                            <td>{{ $loop->iteration }}</td>
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
                            </table><br><br>
                            <button type="button" class="btn btn-dark btn-sm" data-toggle="modal"
                                data-target="#exampleModal-123" data-whatever="@mdo"><i class="fas fa-pause-circle"></i>
                                Lanjutkan Nanti </button>
                            <a href="#home"><button type="button" class="btn btn-success btn-sm"
                                    data-whatever="@mdo"><i class="fas fa-arrow-up"></i></button></a>
                            <br><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><br>

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
                                    class="text text-success">Unit :</span> {{ $data->unikom_name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <span class="text text-success" class="font-weight-bold">Elemen :</span> <span
                                style="color: rgb(0, 0, 0)" class="font-weight-bold">{{ $data->asesmen_name }}</span>
                            <br><br>
                            <div><label class="text text-success" class="font-weight-bold" for="">Kriteria
                                    Unjuk
                                    Kerja :</label></div>
                            <span style="color: rgb(0, 0, 0)"
                                class="font-weight-bold">{!! $data->kriteria !!}</span><br><br>
                            <input type="hidden" name="status"
                                value="<label class='badge badge-outline-success badge-pill'>&#10004; Kompeten</label>">
                            <input type="hidden" name="koreksi"
                                value="<label class='badge badge-outline-warning badge-pill'>Belum Dikoreksi</label>">
                            <input type="file" name="image" accept=".pdf, .png, .jpg, .jpeg" id="">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success btn-block font-weight-bold"><i class="fas fa-check-circle"></i>
                                Simpan Dokumen</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    </div>


    {{-- <--------------- MODAL INSTRUKSI Formulir APL-01 ---------------> --}}
    <div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
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
                    <p>1. Upload data file dokumen pendukung, file berupa <span style="color: brown">"png/pdf"</span>.</p>
                    <p>2. Setelah Upload berhasil keterangan Statusnya menjadi <span style="color: green">"Ada"</span>. </p>
                    <p>3. Pastikan semua data pada Upload Dokumen Pendukung harus terisi. </p>
                    <p>4. Kemudia lanjut mengisi data pada Formulir APL-02.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <--------------- MODAL SIMPAN FORM APL1 ---------------> --}}
    @foreach ($identitas as $data)
        <div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('identitas.update', $data->id) }}" method="post"
                    enctype="multipart/form-data">
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
                            <input type="hidden" name="y" value="<i class='fas fa-check'></i>">
                            <input type="hidden" name="status"
                                value="<label class='badge badge-outline-success badge-pill'>&#10004; Ada</label>">
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





    {{-- <--------------- MODAL LANJUTKAN NANTI ---------------> --}}
    <div class="modal fade" id="exampleModal-123" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Lanjutkan Nanti</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda akan melanjutkan di lain waktu?
                    <br><br>
                    <p>Tenang saja.. data sebelumnya yang telah anda isi tidak akan hilang</p>
                    <p>Anda dapat melanjutkan pengisian data pada halaman Dashboard anda</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('dashasesi.index') }}"><button type="submit"
                            class="btn btn-success btn-block font-weight-bold">Kembali ke Dashboard </button></a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    {{-- <--------------- MODAL INSTRUKSI Formulir APL-02 ---------------> --}}
    <div class="modal fade" id="exampleModal-11" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
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
                    <p>1. Upload data file Formulir APL-02, file berupa <span style="color: brown">"png/pdf"</span>.</p>
                    <p>2. File yang diupload datanya harus sesuai dengan elemen yang diperlukan </p>
                    <p>3. Setelah Upload berhasil keterangan Statusnya menjadi "Kompeten". </p>
                    <p>4. Pastikan semua data pada Formulir APL-02 harus <span style="color: rgb(30, 187, 16)">"Kompeten"</span> . </p>
                    <p>5. Klik tombol <span style="color: rgb(30, 187, 16)">"Kirim Data Pendaftaran"</span> yang terletak paling atas halaman. </p>
                    <p>6. Data pendaftaran akan terkirim ke Admin LSP-POLITAP.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection
