@extends('layout/admin')
@section('judul')
    Skema | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h4>
            <i class="fab fa-pagelines"></i> Skema
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Skema</li>
            </ol>
        </nav>
    </div><br>

    {{-- <---------------------- TAMBAH SKEMA ----------------------> --}}
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Klik disini Untuk Menambahkan Skema
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('skema.store') }}" method="POST" class="form-sample">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Skema</label>
                                    <div class="col-sm-9">
                                        <input type="text" maxlength="100" name="skema" class="form-control"
                                            placeholder="Nama Skema" />
                                        @error('skema')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode Skema</label>
                                    <div class="col-sm-9">
                                        <input type="text" maxlength="100" name="kode_skema" class="form-control"
                                            placeholder="Kode Skema" />
                                        @error('kode_skema')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Prodi</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="skema_id">
                                            <option value="" holder>Pilih Prodi</option>
                                            @foreach ($prodi as $result)
                                                <option value="{{ $result->id }}">{{ $result->prodi }}</option>
                                                select
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Penanggung Jawab</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="asesor_id">
                                            <option value="" holder>Pilih Penanggung Jawab</option>
                                            @foreach ($asesor as $result)
                                                <option value="{{ $result->id }}">{{ $result->nama }}</option>
                                                select
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">TUK</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="tuk_id">
                                            <option value="" holder>Pilih TUK</option>
                                            @foreach ($tuk as $result)
                                                <option value="{{ $result->id }}">{{ $result->tuk }}</option>
                                                select
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status Skema</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="status_id">
                                            <option value="" holder>Pilih Status Skema</option>
                                            @foreach ($status as $result)
                                                <option value="{{ $result->id }}">{{ $result->status }}</option>
                                                select
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-description text-left">
                            <button type="submit" class="btn btn-success btn-rounded btn-icon-text btn-block">
                                <i class="fa fa-save btn-icon-prepend"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- <---------------------- TAMPIL SKEMA ----------------------> --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-table"></i> Table Skema</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive table-striped">
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
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.4219px;">Action</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 200.141px;">Kode Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width: 575.75px;">Skema</th>
                                                <!-- <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Ship to: activate to sort column ascending"
                                                        style="width: 97.5469px;">Pengelola</th>
                                                    <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 106.1094px;">Prodi</th> -->
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 6.1094px;">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($skema as $hasil => $asu)
                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="text-right">
                                                        <button class="btn btn-primary btn-sm dropdown-toggle"
                                                            type="button" id="dropdownMenuSizeButton3"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fa fa-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuSizeButton3">
                                                            <a
                                                                href="{{ route('skema.show', Crypt::encryptString($asu->id)) }}"><button
                                                                    type="submit" class="btn btn-success btn-block"><i
                                                                        class="fa fa-list "></i> Unit
                                                                </button></a>
                                                            <a
                                                                href="{{ route('skema.edit', Crypt::encryptString($asu->id)) }}"><button
                                                                    type="submit" class="btn btn-warning btn-block"><i
                                                                        class="fa fa-edit "></i> Edit Skema</button></a>
                                                            <a
                                                                href="{{ route('skema.detail', Crypt::encryptString($asu->id)) }}"><button
                                                                    type="submit" class="btn btn-info btn-block"><i
                                                                        class="fa fa-eye "></i> Detail
                                                                    Skema</button></a>
                                                            <button data-toggle="modal"
                                                                data-target="#datareg-{{ $asu->id }}"
                                                                class="btn btn-danger btn-block"><i
                                                                    class="fa fa-trash "></i> Hapus</button>
                                                        </div>
                                                    </td>
                                                    <td class="">{{ $asu->kode_skema }}</td>
                                                    <td>{{ $asu->skema }}</td>
                                                    <!-- <td>{{ $asu->asesor->nama }}</td>
                                                        <td><label
                                                                {{-- class="badge badge-light">{{ $asu->prodi->prodi }}</label> --}}
                                                        </td> -->
                                                    <td>{!! $asu->status->keterangan !!}</td>

                                                    {{-- <td>@if ($asu->cekpendaftaran->cek)
                                                        <label class="badge badge-light">{{ $asu->cekpendaftaran->cek }}</label>
                                                    @else
                                                        <label for="kosong"></label>
                                                    @endif
                                                    </td> --}}
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
    </div>
    {{-- <--------------- MODAL HAPUS DATA ---------------> --}}
    @foreach ($skema as $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->skema }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Data Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('skema.destroy', $asu->id) }}" method="POST">
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
@endsection
