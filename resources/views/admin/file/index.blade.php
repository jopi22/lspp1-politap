@extends('layout/admin')

@section('judul')
    Upload File Dokumen | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h4>
            <i class="fas fa-file-upload"></i> Upload File Dokumen
        </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Upload File Dokumen</li>
            </ol>
        </nav>
    </div><br>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <ul class="nav nav-pills nav-pills-custom" id="pills-tab-custom" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="pills-home-tab-custom" data-toggle="pill"
                                    href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true">
                                    SKKNI
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="pills-profile-tab-custom" data-toggle="pill" href="#pills-career"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">
                                    Formulir Pendaftaran
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#pills-music"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">
                                    Dokumen
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-custom-pill" id="pills-tabContent-custom">
                            <div class="card-description">
                                <p><i class="fas fa-info-circle"></i> Informasi :
                                <ul>
                                    <li>Dokumen yang akan diupload akan ditampilkan ke website utama dengan tujuan
                                        menyampaikan informasi kepada asesi.</li>
                                    <li>Dokumen yang dapat diupload hanya berformat PDF.</li>
                                    <li>Ukuran file maksimal 5 mb.</li>
                                </ul>
                                </p>
                            </div>
                            <div class="tab-pane fade active show" id="pills-health" role="tabpanel"
                                aria-labelledby="pills-home-tab-custom">
                                {{-- <---------------------- UPLOAD SKKNI ----------------------> --}}
                                <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
                                    <div class="card">
                                        <div style="background-color: #563fbb" class="card-header text-white" role="tab"
                                            id="heading-11">
                                            <h6 class="mb-0">
                                                <a class="collapse" data-toggle="collapse" href="#collapse-111"
                                                    aria-expanded="true" aria-controls="collapse-111">
                                                    &plus; SKKNI
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-111" class="" role="tabpanel" aria-labelledby="heading-11"
                                            data-parent="#accordion-4">
                                            <div class="card-body">
                                                <label for=""><i class="fas fa-file-upload"></i> Upload File
                                                </label>
                                                <form action="{{ route('skkni.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">Nama File</label>
                                                        <input type="text" class="form-control" maxlength="100"
                                                            name="file" placeholder="Nama File">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Pilih Skema</label>
                                                        <select name="skema_id" class="form-control" id="">
                                                            @foreach ($skema as $result)
                                                                <option value="{{ $result->id }}">{{ $result->skema }}
                                                                </option>
                                                                select
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Pilih File</label>
                                                        <input type="file" class="form-control" accept=".pdf"
                                                            name="image" id="">
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-rounded btn-sm btn-block btn-success"><i
                                                            class="fas fa-save"></i>
                                                        Upload</button>
                                                </form><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <---------------------- TABEL SKKNI ----------------------> --}}
                                <div class="card">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <div id="order-listing_wrapper"
                                                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="order-listing" class="table dataTable no-footer"
                                                            role="grid" aria-describedby="order-listing_info">
                                                            <thead>
                                                                <tr class="bg-danger text-white" role="row">
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Order #: activate to sort column ascending"
                                                                        style="width: 10.4219px;">#</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Order #: activate to sort column ascending"
                                                                        style="width: 10.4219px;">Action</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Actions: activate to sort column ascending"
                                                                        style="width: 700.141px;">Nama File</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Ship to: activate to sort column ascending"
                                                                        style="width: 97.5469px;">Dibuat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($skkni as $hasil => $asu)
                                                                    <tr role="row" class="odd">
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td class="text-right">
                                                                            <button
                                                                                class="btn btn-primary btn-sm dropdown-toggle"
                                                                                type="button"
                                                                                id="dropdownMenuSizeButton3"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                <i class="fa fa-cog"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuSizeButton3">
                                                                                <a
                                                                                    href="{{ route('skkni_detail', $asu->id) }}"><button
                                                                                        type="submit"
                                                                                        class="btn btn-info btn-sm btn-block"><i
                                                                                            class="fa fa-eye "></i> Lihat
                                                                                        Kompetensi</button></a>
                                                                                <form
                                                                                    action="{{ route('skkni.destroy', $asu->id) }}"
                                                                                    method="POST"
                                                                                    onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                                    @csrf
                                                                                    @method('delete')
                                                                                    <a href=""><button
                                                                                            type="submit"
                                                                                            class="btn btn-danger btn-sm btn-block"><i
                                                                                                class="fa fa-trash "></i>
                                                                                            Hapus</button></a>
                                                                                </form>
                                                                            </div>
                                                                        </td>
                                                                        <td class="">{{ $asu->file }}</td>
                                                                        <td>{{ $asu->created_at }}</td>
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


                            <div class="tab-pane fade " id="pills-career" role="tabpanel"
                                aria-labelledby="pills-profile-tab-custom">
                                {{-- <---------------------- UPLOAD FORMULIR ----------------------> --}}
                                <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading-11">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-111"
                                                    aria-expanded="true" aria-controls="collapse-111">
                                                    &plus; Formulir Pendaftaran
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-111" class="" role="tabpanel"
                                            aria-labelledby="heading-11" data-parent="#accordion-4">
                                            <div class="card-body">
                                                <label for=""><i class="fas fa-file-upload"></i> Upload File
                                                </label>
                                                <form action="{{ route('file.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">Nama File</label>
                                                        <input type="text" class="form-control" maxlength="100"
                                                            name="file" placeholder="Nama File">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Pilih File</label>
                                                        <input type="file" class="form-control" accept=".pdf"
                                                            name="image" id="">
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-rounded btn-sm btn-block btn-success"><i
                                                            class="fas fa-save"></i>
                                                        Upload</button>
                                                </form><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <---------------------- TABEL FORMULIR ----------------------> --}}
                                <div class="card">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <div id="order-listing_wrapper"
                                                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="order-listing" class="table dataTable no-footer"
                                                            role="grid" aria-describedby="order-listing_info">
                                                            <thead>
                                                                <tr class="bg-danger text-white" role="row">
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Order #: activate to sort column ascending"
                                                                        style="width: 10.4219px;">#</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Order #: activate to sort column ascending"
                                                                        style="width: 10.4219px;">Action</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Actions: activate to sort column ascending"
                                                                        style="width: 700.141px;">Nama File</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Ship to: activate to sort column ascending"
                                                                        style="width: 97.5469px;">Dibuat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($file as $hasil => $asu)
                                                                    <tr role="row" class="odd">
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td class="text-right">
                                                                            <button
                                                                                class="btn btn-primary btn-sm dropdown-toggle"
                                                                                type="button"
                                                                                id="dropdownMenuSizeButton3"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                <i class="fa fa-cog"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuSizeButton3">
                                                                                <a
                                                                                    href="{{ route('skkni_detail', $asu->id) }}"><button
                                                                                        type="submit"
                                                                                        class="btn btn-info btn-sm btn-block"><i
                                                                                            class="fa fa-eye "></i> Lihat
                                                                                        Kompetensi</button></a>
                                                                                <form
                                                                                    action="{{ route('file.destroy', $asu->id) }}"
                                                                                    method="POST"
                                                                                    onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                                    @csrf
                                                                                    @method('delete')
                                                                                    <a href=""><button
                                                                                            type="submit"
                                                                                            class="btn btn-danger btn-sm btn-block"><i
                                                                                                class="fa fa-trash "></i>
                                                                                            Hapus</button></a>
                                                                                </form>
                                                                            </div>
                                                                        </td>
                                                                        <td class="">{{ $asu->file }}</td>
                                                                        <td>{{ $asu->created_at }}</td>
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


                            <div class="tab-pane fade" id="pills-music" role="tabpanel"
                                aria-labelledby="pills-contact-tab-custom">
                                {{-- <---------------------- UPLOAD DOKUMEN  ----------------------> --}}
                                <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading-11">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-111"
                                                    aria-expanded="true" aria-controls="collapse-111">
                                                    &plus; Dokumen
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-111" class="" role="tabpanel"
                                            aria-labelledby="heading-11" data-parent="#accordion-4">
                                            <div class="card-body">
                                                <label for=""><i class="fas fa-file-upload"></i> Upload File
                                                </label>
                                                <form action="{{ route('filelain.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">Nama File</label>
                                                        <input type="text" class="form-control" maxlength="100"
                                                            name="file" placeholder="Nama File">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Pilih File</label>
                                                        <input type="file" class="form-control" accept=".pdf"
                                                            name="image" id="">
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-rounded btn-sm btn-block btn-success"><i
                                                            class="fas fa-save"></i>
                                                        Upload</button>
                                                </form><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <---------------------- TABEL FORMULIR ----------------------> --}}
                                <div class="card">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <div id="order-listing_wrapper"
                                                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="order-listing" class="table dataTable no-footer"
                                                            role="grid" aria-describedby="order-listing_info">
                                                            <thead>
                                                                <tr class="bg-danger text-white" role="row">
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Order #: activate to sort column ascending"
                                                                        style="width: 10.4219px;">#</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Order #: activate to sort column ascending"
                                                                        style="width: 10.4219px;">Action</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Actions: activate to sort column ascending"
                                                                        style="width: 700.141px;">Nama File</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="order-listing" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Ship to: activate to sort column ascending"
                                                                        style="width: 97.5469px;">Dibuat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($filelain as $hasil => $asu)
                                                                    <tr role="row" class="odd">
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td class="text-right">
                                                                            <button
                                                                                class="btn btn-primary btn-sm dropdown-toggle"
                                                                                type="button"
                                                                                id="dropdownMenuSizeButton3"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                <i class="fa fa-cog"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuSizeButton3">
                                                                                <a
                                                                                    href="{{ route('filelain_detail', $asu->id) }}"><button
                                                                                        type="submit"
                                                                                        class="btn btn-info btn-sm btn-block"><i
                                                                                            class="fa fa-eye "></i> Lihat
                                                                                        Kompetensi</button></a>
                                                                                <form
                                                                                    action="{{ route('filelain.destroy', $asu->id) }}"
                                                                                    method="POST"
                                                                                    onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                                    @csrf
                                                                                    @method('delete')
                                                                                    <a href=""><button
                                                                                            type="submit"
                                                                                            class="btn btn-danger btn-sm btn-block"><i
                                                                                                class="fa fa-trash "></i>
                                                                                            Hapus</button></a>
                                                                                </form>
                                                                            </div>
                                                                        </td>
                                                                        <td class="">{{ $asu->file }}</td>
                                                                        <td>{{ $asu->created_at }}</td>
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
                            <div class="tab-pane fade" id="pills-vibes" role="tabpanel"
                                aria-labelledby="pills-vibes-tab-custom">
                                <div class="media">
                                    <img class="mr-3 w-25 rounded" src="../../images/samples/300x300/15.jpg"
                                        alt="sample image">
                                    <div class="media-body">
                                        <p>
                                            This man is a knight in shining armor. I feel like a jigsaw puzzle missing a
                                            piece. And I'm not
                                            even sure what the picture should be. Somehow, I doubt that. You have a good
                                            heart, Dexter. Keep your mind limber.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-energy" role="tabpanel"
                                aria-labelledby="pills-energy-tab-custom">
                                <div class="media">
                                    <img class="mr-3 w-25 rounded" src="../../images/samples/300x300/11.jpg"
                                        alt="sample image">
                                    <div class="media-body">
                                        <p>
                                            Finding a needle in a haystack isn't hard when every straw is computerized.
                                            You're a killer. I catch killers.
                                            I will not kill my sister. I will not kill my sister. I will not kill my sister.
                                            Rorschach would say you have a hard time relating to others.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <---------------------- UPLOAD LISENSI LEMBAGA ----------------------> --}}
    {{-- <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a href="{{ route('/') }}" >
                        &plus; LISENSI LEMBAGA
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                <div class="card-body">
                    <label for=""><i class="fas fa-file-upload"></i> Upload File </label>
                    <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="text" maxlength="100" name="file" class="col-md-4" placeholder="Nama File">
                            <input type="file" accept=".pdf" class="col-md-4" name="image" id="">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Upload</button>
                        </div>
                    </form><br>
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
                                                    <tr class="bg-dark text-white" role="row">
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
                                                            style="width: 700.141px;">Nama File</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Ship to: activate to sort column ascending"
                                                            style="width: 97.5469px;">Dibuat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($file as $hasil => $asu)
                                                        <tr role="row" class="odd">
                                                            <td>{{ $loop->iteration }}</td>

                                                            <td class="text-right">
                                                                <button class="btn btn-inverse-dark btn-sm dropdown-toggle"
                                                                    type="button" id="dropdownMenuSizeButton3"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="fa fa-cog"></i>
                                                                </button>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuSizeButton3">
                                                                    <a href="{{ route('file.show', $asu->id) }}"><button
                                                                            type="submit"
                                                                            class="btn btn-inverse-info btn-sm btn-block"><i
                                                                                class="fa fa-eye "></i> Lihat
                                                                            Kompetensi</button></a>
                                                                    <form action="{{ route('file.destroy', $asu->id) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <a href=""><button type="submit"
                                                                                class="btn btn-inverse-danger btn-sm btn-block"><i
                                                                                    class="fa fa-trash "></i>
                                                                                Hapus</button></a>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            <td class="">{{ $asu->file }}</td>
                                                            <td>{{ $asu->created_at }}</td>
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
    </div> --}}

    {{-- <---------------------- UPLOAD FILE APL 02 ----------------------> --}}
    {{-- <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11111" aria-expanded="true"
                        aria-controls="collapse-11111">
                        &plus; DOKUMEN FORMULIR APL-02
                    </a>
                </h6>
            </div>
            <div id="collapse-11111" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <div class="card-body">
                    <label for=""><i class="fas fa-file-upload"></i> Upload File </label>
                    <form action="{{ route('fileapl2.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="text" maxlength="100" name="file" class="col-md-4"
                                placeholder="Nama File">
                            <input type="file" accept=".pdf" class="col-md-4" name="image" id="">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Upload</button>
                        </div>
                    </form><br>
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
                                                    <tr class="bg-dark text-white" role="row">
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
                                                            style="width: 700.141px;">Nama File</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Ship to: activate to sort column ascending"
                                                            style="width: 97.5469px;">Dibuat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($fileapl2 as $hasil => $asu)
                                                        <tr role="row" class="odd">
                                                            <td>{{ $loop->iteration }}</td>

                                                            <td class="text-right">
                                                                <button class="btn btn-inverse-dark btn-sm dropdown-toggle"
                                                                    type="button" id="dropdownMenuSizeButton3"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="fa fa-cog"></i>
                                                                </button>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuSizeButton3">
                                                                    <a href="{{ route('fileapl2_detail', $asu->id) }}"><button
                                                                            type="submit"
                                                                            class="btn btn-inverse-info btn-sm btn-block"><i
                                                                                class="fa fa-eye "></i> Lihat
                                                                            Kompetensi</button></a>
                                                                    <form
                                                                        action="{{ route('fileapl2.destroy', $asu->id) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Apa anda yakin akan menghapus Data ini (Yakinkan lah aku)')">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <a href=""><button type="submit"
                                                                                class="btn btn-inverse-danger btn-sm btn-block"><i
                                                                                    class="fa fa-trash "></i>
                                                                                Hapus</button></a>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            <td class="">{{ $asu->file }}</td>
                                                            <td>{{ $asu->created_at }}</td>
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
    </div> --}}
@endsection
