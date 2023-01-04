@extends('layout/admin')

@section('judul')
    {{ $skema->skema }} | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h4>
            <i class="fab fa-pagelines"></i> Detail Skema
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('skema.index') }}">List Skema</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $skema->id }}</li>
            </ol>
        </nav>
    </div><br>


    {{-- <---------------------- TAMPIL DETAIL ----------------------> --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-suitcase"></i> {{ $skema->skema }}</h4>
            <div class="row">
                <div class="col-md-6">
                    <div id="dragula-left" class="py-2">
                        <div class="card rounded border mb-2">
                            <div class="card-body p-3">
                                <div class="media">
                                    <i class="fas fa-suitcase icon-sm align-self-center mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mb-1">{{ $skema->skema }}</h6>
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
                                        <h6 class="mb-1">{{ $skema->kode_skema }}</h6>
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
                                        <h6 class="mb-1">{{ $skema->asesor->nama }}</h6>
                                        <p class="mb-0 text-muted">
                                            Penanggung Jawab
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
                                        <h6 class="mb-1">{{ $skema->tuk->tuk }}</h6>
                                        <p class="mb-0 text-muted">
                                            Tempat Uji Kompetensi
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded border mb-2">
                        <div class="card-body p-3">
                            <div class="media">
                                <i class="fa fa-check-square icon-sm align-self-center mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-1">{{ $skema->status->status }}</h6>
                                    <p class="mb-0 text-muted">
                                        Status Skema
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded border mb-2">
                        <div class="card-body p-3">
                            <div class="media">
                                <i class="fa fa-check-square icon-sm align-self-center mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-1">{{ $skema->created_at->format('d/M/Y') }}</h6>
                                    <p class="mb-0 text-muted">
                                        Tanggal Dibuat
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="dragula-right" class="py-2">
                        <div class="card rounded border mb-2">
                            <div class="card-body p-3">
                                <div class="media">
                                    <i class="fa fa-tasks icon-sm align-self-center mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mb-1">Unit Kompetensi <i
                                                class="fa fa-arrow-down icon-sm align-self-center mr-3"></i></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card rounded border mb-2">
                            <div class="card-body p-3">
                                <table class="table table-bordered">
                                    @foreach ($skema->unikoms as $item)
                                        <tr>
                                            <th style="width: 20px">{{ $loop->iteration }}</th>
                                            <td>{{ $item->unikom }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
