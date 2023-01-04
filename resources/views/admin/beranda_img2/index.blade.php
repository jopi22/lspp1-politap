@extends('layout/admin')

@section('judul')
    Pengelola | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h3>
            <i class="fas fa-users"></i> Pengelola
        </h3>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Pengelola</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- TAMBAH DATA --}}
    <!-- /////////////////////////////////// -->
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Klik Disini Untuk Menambahkan Pengelola
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                <div class="card-body">
                    <p class="card-description">
                        {{-- <i class="fas  fa-exclamation-circle"></i> Persyaratan: Ukuran gambar harus >>
                        <code>470x625px</code> --}}
                    </p>
                    <form action="{{ route('beranda_img2.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama Pengelola</label>
                                <textarea class="form-control" maxlength="50" rows="1" name="nama" placeholder="Nama Pengelola"></textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>Jabatan</label>
                                <textarea class="form-control" maxlength="20" rows="1" name="keterangan" placeholder="Jabatan Pengelola"></textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>No Handphone</label>
                                <input type="text" class="form-control" maxlength="40" placeholder="No Hp" name="no_hp"
                                    id="">
                                @error('no_hp')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Link Facebook</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="facebook" placeholder="Link Facebook"></textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>Link Twitter</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="twitter" placeholder="Link Twitter"></textarea><br>
                            </div>

                            <div class="col-md-4">
                                <label>Link Instagram</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="instagram" placeholder="Link Instagram"></textarea><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Link Email</label>
                                <textarea class="form-control" maxlength="40" rows="1" name="email" placeholder="Link Email"></textarea><br>
                            </div>

                            <div class="col-md-4">
                                <input type="file" class="form-control" accept=".png, .jpg, .jpeg" name="image"><br>
                            </div>
                        </div>
                        <div class="form-action">
                            <button type="submit" class="btn btn-primary btn-icon-text">
                                <i class="fas fa-plus btn-icon-prepend"></i>
                                TAMBAH
                            </button>
                            <a href="{{ route('beranda_img2.index') }}"><button type="button"
                                    class="btn btn-danger btn-icon-text">
                                    <i class="fa fa-times btn-icon-prepend"></i>
                                    BATAL
                                </button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    {{-- SHOW DATA --}}
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <div id="order-listing_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="order-listing" class="table dataTable no-footer" role="grid"
                                            aria-describedby="order-listing_info">
                                            <thead>
                                                <tr class="bg-danger text-white" role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Order #: activate to sort column ascending"
                                                        style="width: 0.4219px;">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Ship to: activate to sort column ascending"
                                                        style="width: 10.5469px;">Action</th>
                                                    <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Customer: activate to sort column ascending"
                                                        style="width: 5.75px;">Photo</th>
                                                    <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Ship to: activate to sort column ascending"
                                                        style="width: 507.5469px;">Nama</th>
                                                    <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Ship to: activate to sort column ascending"
                                                        style="width: 557.5469px;">Jabatan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($beranda_img2 as $asu)
                                                    <tr role="row" class="odd">
                                                        <td class="">{{ $loop->iteration }}</td>
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
                                                                    href="{{ route('beranda_img2.edit', Crypt::encryptString($asu->id)) }}"><button
                                                                        type="submit"
                                                                        class="btn btn-warning btn-sm btn-block"><i
                                                                            class="fa fa-edit "></i> Lihat & Edit
                                                                        Pengelola</button></a>
                                                                {{-- <a href=""><button type="submit" class="btn btn-inverse-primary btn-sm btn-block"><i class="fa fa-list "></i>  List Pengguna</button></a> --}}
                                                                <form
                                                                    action="{{ route('beranda_img2.destroy', $asu->id) }}"
                                                                    method="POST"
                                                                    onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a href=""><button type="submit"
                                                                            class="btn btn-danger btn-sm btn-block"><i
                                                                                class="fa fa-trash "></i>
                                                                            Hapus Pengelola</button></a>
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td class="py-1" style="align-content: right">
                                                            @if ($asu->image)
                                                                <img src="{{ asset($asu->image) }}" alt="image">
                                                            @else
                                                                <img src="{{ asset('images/back/photo.png') }}"
                                                                    alt="image">
                                                            @endif
                                                        </td>
                                                        <td>{{ $asu->nama }}</td>
                                                        <td>{{ $asu->keterangan }}</td>
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
    </div>
@endsection
