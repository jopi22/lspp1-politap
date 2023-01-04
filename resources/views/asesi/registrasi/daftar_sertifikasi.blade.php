@extends('layout/asesi')

@section('judul')
    Daftar Skema | LSP-POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-id-card"></i> Pilih Skema Anda
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('dashasesi.index') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Tabel Skema</li>
            </ol>
        </nav>
    </div><br>

    {{-- <-------------------- TABEL SKEMA --------------------> --}}
    <div class="card">
        <div class="card-body">
            <h6 class="font-weight-bold"><i class="fab fa-pagelines "></i> Tabel Skema</h6> <button
                style="align-items: center" type="button" class="btn btn-rounded btn-warning btn-sm font-weight-bold"
                data-toggle="modal" data-target="#exampleModal-1">
                <i class="fas fa-question-circle"></i> Instruksi Mendaftar
            </button><br><br>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid"
                                        aria-describedby="order-listing_info">
                                        <thead>
                                            <tr class="bg-danger text-white" role="row">
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.4219px;">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 200.141px;">Kode Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width: 575.75px;">Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.4219px;">Pilih Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.4219px;">Ambil Formulir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($skema as $hasil => $asu)
                                                <tr role="row" class="odd">
                                                    <td class="font-weight-bold">{{ $loop->iteration }}</td>
                                                    <td class="font-weight-bold">{{ $asu->kode_skema }}</td>
                                                    <td class="font-weight-bold">{{ $asu->skema }}</td>
                                                    <td>
                                                        <button class="btn btn-success btn-block font-weight-bold"
                                                            data-toggle="modal"
                                                            data-target="#exampleModal-{{ $asu->id }}"><i
                                                                class="fas fa-check-circle"></i>
                                                            Pilih Skema</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-info btn-block font-weight-bold"
                                                            data-toggle="modal"
                                                            data-target="#exampleModal2-{{ $asu->id }}"><i
                                                                class="fa fa-window-restore"></i>
                                                            Ambil Formulir </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    {{-- <--------------- MODAL AMBIL FORMULIR ---------------> --}}
    @foreach ($skema as $asu)
        <div class="modal fade" id="exampleModal2-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fab fa-pagelines"></i> {{ $asu->skema }}
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <a href="{{ route('registrasi.edit', $asu->id) }}"><button
                                class="btn btn-info btn-block font-weight-bold"><i class="fa fa-window-restore"></i>
                                Ambil Formulir APL-01 dan APL-02 </button></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- <--------------- MODAL  KONFIRMASI PENDAFTARAN ---------------> --}}
    @foreach ($skema as $asu)
        <div class="modal fade" id="exampleModal-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fab fa-pagelines"></i> {{ $asu->skema }}
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('registrasi.store') }}" method="POST" enctype="multipart/form-data"
                            class="form-sample">
                            @csrf
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}{{ $asu->id }}">
                            <input type="hidden" name="kode" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="id_skema" value="{{ $asu->id }}">
                            <input type="hidden" name="skema_name" value="{{ $asu->skema }}">
                            <input type="hidden" name="skema_id"
                                value="{{ $asu->kode_skema }}{{ Auth::user()->id }}">
                            <input type="hidden" name="kode_skema" value="{{ $asu->kode_skema }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="status"
                                value="<h4 style='color: rgb(163, 129, 8)'>Lengkapi Data Anda</h4>">
                            <input type="hidden" name="tuk_id" value="1">
                            <input type="hidden" name="asesor_id" value="1">
                            <input type="hidden" name="image" value="{{ Auth::user()->image }}">
                            {{-- <--------------- DATA PRIBADI ---------------> --}}
                            <input type="hidden" class="form-control" name="user_name"
                                value="{{ old('name', Auth::user()->name) }}">
                            <input type="hidden" maxlength="25" class="form-control" name="nim"
                                value="{{ old('email', Auth::user()->email) }}">
                            <input type="hidden" maxlength="25" class="form-control" name="nim"
                                value="{{ old('email', Auth::user()->email) }}">
                            <input type="hidden" maxlength="25" class="form-control" name="sex_id"
                                value="{{ old('email', Auth::user()->sex_id) }}">
                            <input type="hidden" class="form-control" name="tgl_lahir"
                                value="{{ old('tgl_lahir', Auth::user()->tgl_lahir) }}">
                            <input type="hidden" class="form-control" name="tmpt_lahir"
                                value="{{ old('tmpt_lahir', Auth::user()->tempat_lahir) }}">
                            <input type="hidden" class="form-control" name="surel"
                                value="{{ old('surel', Auth::user()->email2) }}">
                            <input type="hidden" class="form-control" name="no_hp"
                                value="{{ old('no_hp', Auth::user()->no_hp) }}">
                            <input type="hidden" class="form-control" name="jurusan_id"
                                value="{{ old('jurusan_id', Auth::user()->jurusan_id) }}">
                            <input type="hidden" class="form-control" name="semester_id"
                                value="{{ old('semester_id', Auth::user()->semester_id) }}">
                            <input type="hidden" class="form-control" name="alamat"
                                value="{{ old('alamat', Auth::user()->alamat) }}">
                            <input type="hidden" class="form-control" name="negara"
                                value="{{ Auth::user()->negara }}">
                            <input type="hidden" name="institusi" value="{{ old('institusi', Auth::user()->institusi) }}">
                            <input type="hidden" name="email3" value="{{ old('email3', Auth::user()->email3) }}">
                            <input type="hidden" name="postal" value="{{ old('postal', Auth::user()->postal) }}">
                            <input type="hidden" name="jabatan" value="{{ old('jabatan', Auth::user()->jabatan) }}">
                            <input type="hidden" name="telp" value="{{ old('telp', Auth::user()->telp) }}">
                            <input type="hidden" name="fax" value="{{ old('fax', Auth::user()->fax) }}">
                            <input type="hidden" name="tmt" value="{{ old('tmt', Auth::user()->tmt) }}">
                            <input type="hidden" name="rmh" value="{{ old('rmh', Auth::user()->rmh) }}">
                            <input type="hidden" name="ktr" value="{{ old('ktr', Auth::user()->ktr) }}">
                            <input type="hidden" name="kode_post" value="{{ old('kode_post', Auth::user()->kode_post) }}">
                            <input type="hidden" name="alamat_kantor" value="{{ old('alamat_kantor', Auth::user()->alamat_kantor) }}">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="jenis"
                                                id="membershipRadios1" value="Sertifikasi" checked="">
                                                Sertifikasi
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="jenis"
                                                id="membershipRadios2" value="Sertifikasi Ulang">
                                                Sertifikasi Ulang
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                            <ol>
                                <li>Jika anda yakin ingin memilih skema ini maka silahkan pilih "<span class="text text-success">
                                        Konfirmasi Pendaftaran</span>".
                                </li>
                                <li>
                                    Setelah konfirmasi berhasil, kemudian "<span class="text text-info">
                                        Ambil Formulir</span>".
                                </li>
                            </ol>

                            <button class="btn btn-success btn-block font-weight-bold"><i class="fas fa-check-circle"></i>
                                Konfirmasi Pendaftaran</button>
                            <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

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
                    <h6 class="text text-primary font-weight-bold">Prosedur dalam melakukan pemilihan skema yaitu:</h6>
                    <ol>
                        <li>Memilih tombol hijau "<span class="text text-success">Pilih Skema</span> " pada kolom pilih skema pada tabel dibawah.</li>
                        <li>Kemudian memilih tombol biru "<span class="text text-info">Ambil Formulir</span> " sesuai skema yang dipilih,  setelah itu anda akan diarahakan ke laman pengambilan Formulir APL-01 dan Formulir APL-01.</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection
