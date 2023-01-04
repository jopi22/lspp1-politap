@extends('layout/asesi')

@section('sidebar')
    sidebar-mini
@endsection

@section('judul')
    Informasi Sertifikasi | LSP-POLITAP
@endsection

@section('isi')
    <div class="card col-md-12">
        <div class="card-body">
            <h2><i class="fas fa-info-circle"></i> Informasi Sertifikasi</h2><br>
            <div class="d-flex">
                <div class="progress progress-md flex-grow">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="75" style="width: 100%" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div><br>
            <h4 class="card-title">Nama : {{ $validasi->user_name }}</h4>
            <h4 class="card-title">NIM : {{ $validasi->nim }}</h4>
            <div class="col-md-12">
                <div id="dragula-left" class="py-2">
                    <div class="card rounded border mb-2">
                        <div class="card-body p-3">
                            <div class="media">
                                <i class="fas fa-code-branch icon-sm align-self-center mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-1">#{{ $validasi->id }}</h6>
                                    <p class="mb-0 text-muted">
                                        Id Registrasi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                            <i class="fas fa-suitcase icon-sm align-self-center mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-1">{{ $validasi->skema_name }}</h6>
                                <p class="mb-0 text-muted">
                                    Nama Skema
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                            <i class="fas fa-code icon-sm align-self-center mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-1">{{ $validasi->kode_skema }}</h6>
                                <p class="mb-0 text-muted">
                                    Kode Skema
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                            <i class="fas fa-user icon-sm align-self-center mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-1">{{ $validasi->asesor->nama }}</h6>
                                <p class="mb-0 text-muted">
                                    Asesor Anda
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                            <i class="fa fa-building icon-sm align-self-center mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-1">{{ $validasi->tuk->tuk }}</h6>
                                <p class="mb-0 text-muted">
                                    Lokasi Uji Kompetensi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                            <i class="fa fa-calendar icon-sm align-self-center mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-1">{{ $validasi->date }}</h6>
                                <p class="mb-0 text-muted">
                                    Tanggal Uji Kompetensi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                            <i class="fa fa-calendar icon-sm align-self-center mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-1">{{ $validasi->time }}</h6>
                                <p class="mb-0 text-muted">
                                    Waktu Uji Kompetensi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded border mb-2">
                    <div class="card-body p-3">
                        <div class="media">
                            <i class="fa fa-calendar icon-sm align-self-center mr-3"></i>
                            <div class="media-body">
                                <h6 class="mb-1">Keterangan :</h6>
                                <p class="mb-0 text-muted">
                                    {!! $validasi->keterangan !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('dashasesi.index') }}"><button class="btn btn-info btn-block font-weight-bold"><i
                        class="fas fa-user"></i> Kembali ke Dashboard</button></a>
        </div>
    </div>
@endsection
