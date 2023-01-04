@extends('layout/asesi')

@section('judul')
    Pilihan Skema | LSP-POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas  fa-check-square"></i> Langkah Ke-2 <i class="fas fa-angle-double-right"></i> Menentukan Skema
        </h4>
    </div><br>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <i class="fab fa-pagelines"></i>
                Pilih Salah Satu Skema yang Tersedia
            </h4>
            <button style="align-items: center" type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                data-target="#exampleModal-1">
                <i class="fas fa-question-circle"></i> Instruksi Pemilihan Skema
            </button>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-muted">Kode Skema</th>
                            <th class="text-muted">Nama Skema</th>
                            <th class="text-muted">Mendaftar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skema as $asu)
                            <tr>
                                <td class="font-weight-bold">
                                    {{ $asu->kode_skema }}
                                </td>
                                <td class="font-weight-bold">
                                    {{ $asu->skema }}
                                </td>
                                <td> <button type="button" class="btn btn-info font-weight-bold" data-toggle="modal"
                                        data-target="#exampleModal-{{ $asu->id }}"><i class="fas  fa-check-square"></i> Mendaftar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- <--------------- MODAL INPUT PENDAFTARAN ---------------> --}}
    @foreach ($skema as $asu)
        <div class="modal fade" id="exampleModal-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">{{ $asu->skema }}</h5>
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
                            <input type="hidden" name="id_skema" value="progres">
                            <input type="hidden" name="skema_name" value="{{ $asu->skema }}">
                            <input type="hidden" name="skema_id" value="{{ $asu->kode_skema }}{{ Auth::user()->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="status" value="<h4 style='color: rgb(163, 129, 8)'>Lengkapi Data Anda</h4>">
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
                                value="{{ old('tmpt_lahir', Auth::user()->tmpt_lahir) }}">
                            <input type="hidden" class="form-control" name="surel"
                                value="{{ old('surel', Auth::user()->surel) }}">
                            <input type="hidden" class="form-control" name="no_hp"
                                value="{{ old('no_hp', Auth::user()->no_hp) }}">
                            <input type="hidden" class="form-control" name="jurusan_id"
                                value="{{ old('no_hp', Auth::user()->jurusan_id) }}">
                            <input type="hidden" class="form-control" name="semester_id"
                                value="{{ old('no_hp', Auth::user()->semester_id) }}">
                            <input type="hidden" class="form-control" name="alamat"
                                value="{{ old('no_hp', Auth::user()->alamat) }}">
                            <input type="hidden" class="form-control" name="negara"
                                value="{{ old('no_hp', Auth::user()->negara) }}">
                            <button class="btn btn-success btn-block font-weight-bold"><i class="fas fa-check-circle"></i>
                                Konfirmasi Pendaftaran</button>
                            <br>
                        </form>
                        <a href="{{ route('registrasi.edit', $asu->id) }}"><button
                                class="btn btn-info btn-block font-weight-bold"><i class="fas fa-ellipsis-h"></i>
                                Langkah Ke-3 <i class="fas fa-ellipsis-h"></i></button></a>
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
                    <h5 class="modal-title" id="ModalLabel">Instruksi Pemilihan Skema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection
