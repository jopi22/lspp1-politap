@extends('layout/admin')

@section('judul')
    Elemen | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h4>
            <i class="fas fa-list-alt"></i> Elemen
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('skema.index') }}">List Skema</a></li>
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('skema.index') }}">Unit Kompetensi</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">List Elemen</li>
            </ol>
        </nav>
    </div><br>

    {{-- <---------------------- TAMBAH ELEMEN ----------------------> --}}
    <div class="col-lg-12">
        <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
            <div class="card">
                <div class="card-header" role="tab" id="heading-11">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                            aria-controls="collapse-11">
                            &plus; Klik disini Untuk Menambahkan Elemen
                        </a>
                    </h6>
                </div>
                <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                    data-parent="#accordion-4">
                    <div class="card-body">
                        <form action="{{ route('asesmen.store') }}" method="POST">
                            @csrf
                            <label for="">Nama Elemen</label>
                            <input type="text" maxlength="100" class="form-control" name="asesmen"
                                placeholder="Isi Nama Elemen" aria-label="Recipient's username">
                            @error('asesmen')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                            <br>
                            <label for="">Kriteria</label>
                            <textarea type="text" class="summernote" maxlength="1000" class="form-control" name="kriteria"
                                placeholder="Kriteria" aria-label="Recipient's username"></textarea>
                            @error('kriteria')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                            <br>
                            <div class="input-group-append">
                                <button class="btn btn-rounded btn-sm btn-block btn-success" name="unikom_id" value="{{ $unikom->id }}"
                                    type="submit"><i class="fas fa-save"></i> Simpan Elemen</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <---------------------- TAMPIL DATA ----------------------> --}}
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="fab fa-pagelines"></i> Skema : {{ $unikom->skema->skema }} </h4>
                <h4 class="card-title"><i class="fas fa-list-alt"></i> Unit : {{ $unikom->unikom }} </h4>
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead>
                            <tr class="bg-danger text-white">
                                <th style="width: 10px">#</th>
                                <th style="width: 10px">Action</th>
                                <th style="width: 300px">Elemen</th>
                                <th style="width: 700px">Kriteria</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($unikom->asesmens as $asu)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-right">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-cog"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                            <div class="btn btn-warning btn-block btn-sm" data-toggle="modal"
                                                data-target="#exampleModal2-{{ $asu->id }}"><i
                                                    class="fas fa-edit "></i> Edit Elemen
                                            </div>
                                            <button data-toggle="modal"
                                                                data-target="#datareg-{{ $asu->id }}"
                                                                class="btn btn-danger btn-block"><i
                                                                    class="fa fa-trash "></i> Hapus</button>
                                        </div>
                                    </td>
                                    <td>{{ $asu->asesmen }}</td>
                                    <td>{!! $asu->kriteria !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- <--------------- MODAL INFO ---------------> --}}
    @foreach ($unikom->asesmens as $asu)
    <div class="modal fade" id="exampleModal2-{{ $asu->id }}" tabindex="-1" role="dialog"
        aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">{{ $asu->asesmen }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('asesmen.update', $asu->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <label for="">Nama Elemen</label>
                        <input type="text" maxlength="100" class="form-control" value="{{ $asu->asesmen }}" name="asesmen"
                            placeholder="Isi Nama Elemen" aria-label="Recipient's username">
                        @error('asesmen')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                        @enderror
                        <br>
                        <label for="">Kriteria</label>
                        <textarea type="text" class="summernote" maxlength="1000" class="form-control" name="kriteria"
                            placeholder="Kriteria" aria-label="Recipient's username">{!! $asu->kriteria !!}</textarea>
                        @error('kriteria')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                        @enderror
                        <br>
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-block btn-info" name="unikom_id" value="{{ $unikom->id }}"
                                type="submit"><i class="fas fa-magic"></i> Update Elemen</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <i class="fas fa-flag-checkered"></i></button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <--------------- MODAL HAPUS DATA ---------------> --}}
    @foreach ($unikom->asesmens as $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->asesmen }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Data Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('asesmen.destroy', $asu->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href=""><button type="submit" class="btn btn-success btn-block"><i
                                        class="fa fa-trash "></i> Hapus</button></a>
                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endforeach
@endsection
