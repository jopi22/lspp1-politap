@extends('layout/admin')

@section('sidebar')
    sidebar-mini
@endsection

@section('judul')
    Pendaftaran Skema | LSP-POLITAP
@endsection

@include('layout/verifikasi')
@section('isi')


@foreach ($skema->verifikasi_skemas as $asu)
    {{ $asu->skema }}
@endforeach

    {{-- <-------------------- TABEL SKEMA --------------------> --}}
    <div class="card">
        <div class="card-body">
            <h4 class="font-weight-bold"><i class="fab fa-pagelines "></i> Tabel Skema</h4>
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
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 100.141px;">Kode Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width: 575.75px;">Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.4219px;">Lihat</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.4219px;">Mendaftar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($skema as $hasil => $asu)
                                                <tr role="row" class="odd">
                                                    <td class="font-weight-bold">{{ $loop->iteration }}</td>
                                                    <td class="font-weight-bold">{{ $asu->kode_skema }}</td>
                                                    <td class="font-weight-bold">{{ $asu->skema }}</td>
                                                    <td class="text-right">
                                                        <a href="{{ route('info_skema.show', $asu->id) }}"><button
                                                                type="submit"
                                                                class="btn btn-dark btn-sm btn-block font-weight-bold"><i
                                                                    class="fa fa-eye "></i> Lihat
                                                                Skema</button></a>
                                                    </td>
                                                    <td> <button type="button" class="btn btn-primary font-weight-bold"
                                                            data-toggle="modal"
                                                            data-target="#exampleModal-{{ $asu->id }}"><i
                                                                class="fas  fa-check-square"></i> Mendaftar</button>
                                                    </td>
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
    </div><br>
@endsection
