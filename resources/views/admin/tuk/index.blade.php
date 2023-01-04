@extends('layout/admin')

@section('judul')
    TUK | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-map"></i> Tempat Uji Kompetensi
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Tempat Uji Kompetensi</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- TAMBAH TUK --}}
    <!-- /////////////////////////////////// -->
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Klik disini Untuk Menambahkan TUK
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('tuk.store') }}" enctype="multipart/form-data" method="POST"
                        class="form-sample">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode TUK</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="Kode Tempat Uji Kompetensi" maxlength="100"
                                            name="kode" class="form-control" />
                                        @error('kode')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">TUK</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="Tempat Uji Kompetensi" maxlength="100"
                                            name="tuk" class="form-control" />
                                        @error('tuk')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gambar TUK</label>
                                    <div class="col-sm-9">
                                        <input type="file" accept=".png" name="image" class="form-control" />
                                        @error('image')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="Keterangan" maxlength="100" name="alamat"
                                            class="form-control" />
                                        @error('alamat')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pengelola</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="Pengelola" maxlength="100" name="pengelola"
                                            class="form-control" />
                                        @error('pengelola')
                                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-rounded btn-success btn-icon-text btn-block">
                            <i class="fa fa-save btn-icon-prepend"></i>
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /////////////////////////////////// -->
    {{-- TAMPIL TUK --}}
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-table"></i> Table Tempat Uji Kompetensi</h4>
            <div class="row grid-margin">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table table-striped dataTable no-footer" role="grid"
                                        aria-describedby="order-listing_info">
                                        <thead>
                                            <tr class="bg-danger text-white" role="row">
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 11.4219px;">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 14.141px;">Actions</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width: 1075.75px;">TUK</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tuk as $hasil => $asu)
                                                <tr role="row" class="odd">
                                                    <td class="">{{ $loop->iteration }}</td>
                                                    <td class="text-right">
                                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                                            id="dropdownMenuSizeButton3" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuSizeButton3">
                                                            <a
                                                                href="{{ route('tuk.show', Crypt::encryptString($asu->id)) }}"><button
                                                                    type="submit"
                                                                    class="btn btn-warning btn-sm btn-block"><i
                                                                        class="fa fa-eye "></i> Edit & Lihat
                                                                    TUK</button></a>
                                                            <button data-toggle="modal"
                                                                data-target="#datareg-{{ $asu->id }}"
                                                                class="btn btn-danger btn-block"><i
                                                                    class="fa fa-trash "></i> Hapus</button>
                                                        </div>
                                                    </td>
                                                    <td>{{ $asu->tuk }}</td>
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
    @foreach ($tuk as $hasil => $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->tuk }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Data Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('tuk.destroy', $asu->id) }}" method="POST">
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
