
	@extends('layout/admin1')
@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h4>
            <i class="fab fa-pagelines"></i> Formulir APL-02
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Formulir APL-02</li>
            </ol>
        </nav>
    </div><br>

    {{-- <---------------------- TAMBAH FORMULIR ----------------------> --}}
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Klik disini Untuk Menambahkan Formulir
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('formapl2.store') }}" method="POST" class="form-sample">
                        @csrf
                        <div class="row">
                        	<div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Skema</label>
                                    <div class="col-sm-9">
                                       <select class="form-control" name="skema">
                                            <option value="" holder>Pilih Prodi</option>
                                            @foreach ($skema as $result)
                                                <option value="{{ $result->skema }}">{{ $result->skema }}</option>
                                                select
                                            @endforeach
                                        </select>
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
                                        <select class="form-control" name="kode">
                                            <option value="" holder>Pilih Prodi</option>
                                            @foreach ($skema as $result)
                                                <option value="{{ $result->kode_skema }}">{{ $result->skema }} - {{$result->kode_skema}}</option>
                                                select
                                            @endforeach
                                        </select>
                                        @error('kode')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-description text-left">
                            <button type="submit" class="btn btn-success btn-icon-text btn-block">
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
            <h4 class="card-title"><i class="fas fa-bars"> List Formulir APL-02</i></h4>
            <div class="row grid-margin">
            </div>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($formapl2 as $hasil => $asu)
                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="text-right">
                                                        <button class="btn btn-dark btn-sm dropdown-toggle" type="button"
                                                            id="dropdownMenuSizeButton3" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuSizeButton3">
                                                            <a href="{{ route('formapl2.show', Crypt::encryptString($asu->id)) }}"><button
                                                                    type="submit" class="btn btn-success btn-block"><i
                                                                        class="fa fa-list "></i> Lihat Formulir
                                                                </button></a>
                                                            <a href="{{ route('formapl2.edit', Crypt::encryptString($asu->id)) }}"><button
                                                                    type="submit" class="btn btn-warning btn-block"><i
                                                                        class="fa fa-edit "></i> Isi Formulir</button></a>
                                                            <form action="{{ route('formapl2.destroy', $asu->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                @csrf
                                                                @method('delete')
                                                                <a href=""><button type="submit"
                                                                        class="btn btn-danger btn-block"><i
                                                                            class="fa fa-trash "></i> Hapus
                                       
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td class="">{{ $asu->kode }}</td>
                                                    <td>{{ $asu->skema }}</td>                                                   
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
@endsection

