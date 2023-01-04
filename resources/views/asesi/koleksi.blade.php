@extends('layout/asesi')

@section('judul')
    Koleksi Sertifikat | LSP-POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    <div class="page-header">
        <h4>
            <i class="fas fa-certificate"></i> Koleksi Sertifikat
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('dashasesi.index') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Koleksi Sertifikat</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- TAMPIL SKEMA --}}
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-table"></i> Daftar Pemegang Sertifikat</h4>
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
                                                    style="width: 150.141px;">Kode Registrasi</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width: 575.75px;">Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Ship to: activate to sort column ascending"
                                                    style="width: 97.5469px;">Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datareg as $hasil => $asu)
                                                <tr role="row" class="odd">
                                                    <td class="font-weight-bold">{{ $loop->iteration }}</td>
                                                    <td class="text-right">
                                                        <a href="{{ route('sertifikat_show', Crypt::encryptString($asu->id)) }}"><button
                                                                type="submit"
                                                                class="btn btn-dark btn-sm btn-block font-weight-bold"><i
                                                                    class="fa fa-eye "></i> Lihat Detail</button></a>
                                                    </td>
                                                    <td class="font-weight-bold">{{ $asu->id }}</td>
                                                    <td class="font-weight-bold">{{ $asu->skema_name }}</td>
                                                    <td class="font-weight-bold">{{ $asu->updated_at }}</td>
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
