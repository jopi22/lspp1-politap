@extends('layout/admin1')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fa fa-list-alt"></i> Elemen
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Elemen</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- TAMBAH ASSESMEN -->
    <!-- /////////////////////////////////// -->
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
                    <form action="{{ route('asesmen.store') }}" method="post">
                        @csrf
                        <div class="card btn-info">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-plus"></i> Tambah Elemen</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Elemen</label>
                                            <div class="col-sm-9">
                                                <input type="text" maxlength="100" class="form-control" name="asesmen">
                                                @error('asesmen')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Unit Kompetensi</label>
                                            <div class="col-sm-9">
                                                <select class="form-control form-control-lg" name="unikom_id">
                                                    <option value="" holder>Pilih Unit Kompetensi</option>
                                                    @foreach ($unikom as $asu)
                                                        <option value="{{ $asu->id }}"
                                                            @if ($asu->unikom_id == $asu->id) selected @endif>
                                                            {{ $asu->unikom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('unikom_id')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label class="col-sm-3 col-form-label">Kriteria</label>
                                <div class="col-md-12">
                                    <textarea name="kriteria" class="summernote" maxlength="1000" id="" cols="30" rows="10"></textarea>
                                    @error('kriteria')
                                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /////////////////////////////////// -->
    <!-- TANPIL ASSESMEN -->
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-cogs"> List Assesmen Mandiri</i></h4>
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
                                            <tr class="bg-dark text-white" role="row">
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.4219px;">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Ship to: activate to sort column ascending"
                                                    style="width: 10.5469px;">Action</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width: 909.75px;">Assesmen</th>
                                                {{-- <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Ship to: activate to sort column ascending"
                                                    style="width: 447.5469px;">Unit Kompetensi</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($asesmen as $hasil => $asu)
                                                <tr role="row" class="odd">
                                                    <td class="">{{ $loop->iteration }}</td>
                                                    <td class="text-right">
                                                        <button class="btn btn-inverse-dark btn-sm dropdown-toggle"
                                                            type="button" id="dropdownMenuSizeButton3"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fa fa-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuSizeButton3">
                                                            {{-- <a href="{{ route('asesmen.edit', $asu->id) }}"><button type="submit" class="btn btn-inverse-warning btn-sm"><i class="fa fa-edit "></i>  Edit Asesmen</button></a> --}}
                                                            {{-- <a href="{{ route('asesmen.show', $asu->id) }}"><button type="submit" class="btn btn-inverse-primary btn-sm"><i class="fa fa-list "></i>  Detail Asesmen</button></a> --}}
                                                            <form action="{{ route('asesmen.destroy', $asu->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                @csrf
                                                                @method('delete')
                                                                <a href=""><button type="submit"
                                                                        class="btn btn-inverse-danger btn-block"><i
                                                                            class="fa fa-trash "></i> Hapus</button></a>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td>{{ $asu->asesmen }}</td>
                                                    {{-- <td>{{ $asu->unikom->unikom }}</td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
