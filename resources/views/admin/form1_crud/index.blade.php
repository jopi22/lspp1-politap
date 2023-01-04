@extends('layout.admin')

@section('judul')
    Form APL 01 | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout.verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-file-excel"></i> Formulir APL 1
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Formulir APL 01</li>
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
                        &plus; Klik disini Untuk Menambahkan Data
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('form1.store') }}" method="POST" class="form-sample">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Data</label>
                                    <div class="col-sm-9">
                                        <input type="text" maxlength="100" name="name" class="form-control"
                                            placeholder="Nama Data" />
                                        @error('name')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-description text-left">
                                <button type="submit" class="btn btn-success btn-rounded btn-icon-text btn-block">
                                    <i class="fa fa-save btn-icon-prepend"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- <---------------------- TAMPIL FORM1 ----------------------> --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-table"></i> Data Formulir APL 01</h4>
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
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width: 1075.75px;">Formulir APL 01</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($form1 as $hasil => $asu)
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
                                                            <button data-toggle="modal"
                                                                data-target="#datareg12-{{ $asu->id }}"
                                                                class="btn btn-warning btn-block"><i
                                                                    class="fa fa-edit "></i> Edit</button>
                                                            <button data-toggle="modal"
                                                                data-target="#datareg-{{ $asu->id }}"
                                                                class="btn btn-danger btn-block"><i
                                                                    class="fa fa-trash "></i> Hapus</button>
                                                        </div>
                                                    </td>
                                                    <td class="">{{ $asu->name }}</td>
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
    @foreach ($form1 as $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Data Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('form1.destroy', $asu->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href=""><button type="submit" class="btn btn-rounded btn-success btn-block"><i
                                        class="fa fa-trash "></i> Hapus</button></a>
                        </form>
                        <button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- <--------------- MODAL EDIT DATA ---------------> --}}
    @foreach ($form1 as $asu)
        <div class="modal fade" id="datareg12-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-edit"></i>
                            {{ $asu->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('form1.update', $asu->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                            <label for="">Ubah Nama Data</label>
                            <input type="text" class="form-control" name="name" value="{{ $asu->name }}">
                        </div>
                        <div class="modal-footer">
                            <a href=""><button type="submit" class="btn btn-rounded btn-success btn-block"><i
                                        class="fa fa-magic "></i> Update</button></a>
                    </form>
                    <button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
        </div>
    @endforeach
@endsection
