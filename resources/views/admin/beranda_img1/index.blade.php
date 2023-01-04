@extends('layout/admin')

@section('judul')
    Carousel | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
    @include('layout/verifikasi')

    {{-- <------------------- PAGE HEADER --------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-image"></i> Settingan Carousel
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Carousel</li>
            </ol>
        </nav>
    </div><br>


    {{-- <------------------- TAMBAH CAROUSEL --------------------> --}}
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
                    <h4 class="card-title"><i class="fas fa-images"></i> Tambah Carousel</h4>
                    <div class="card-description">
                        <p><i class="fas fa-info-circle"></i> Informasi :
                        <ul>
                            <li>Ukuran file gambar maksimal 2 mb.</li>
                            <li>Format file gambar PNG & JPG.</li>
                        </ul>
                        </p>
                    </div>
                    <form action="{{ route('beranda_img1.store') }}" class="forms-sample" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <label>File upload</label>
                        <input type="file" class="form-control" accept=".png, .jpg, .jpeg" name="image">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" maxlength="200" name="keterangan"><br>
                        <button type="submit" class="btn btn-rounded btn-success btn-icon-text">
                            <i class="fa fa-plus btn-icon-prepend"></i>
                            TAMBAH
                        </button>
                        <a href="{{ route('beranda_img1.index') }}"><button type="button"
                                class="btn btn-rounded btn-danger btn-icon-text">
                                <i class="fa fa-times btn-icon-prepend"></i>
                                BATAL
                            </button></a>
                    </form>


                </div>
            </div>
        </div>
    </div>
    {{-- <------------------- LIST CAROUSEL --------------------> --}}
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="card-columns">
                    @foreach ($beranda_img1 as $asu)
                        <div class="card" style="background-color: rgb(196, 199, 191)">
                            <a href="{{ asset($asu->image) }}" target="_blank"><img class="card-img-top"
                                    src="{{ asset($asu->image) }}" alt="Card image cap"></a>
                            <div class="card-body">
                                <a href="{{ route('beranda_img1.edit', $asu->id) }}"><button type="submit"
                                        class="btn btn-rounded btn-warning btn-icon-text btn-sm btn-block">
                                        <i class="far fa-check-square btn-icon-prepend"></i>
                                        Edit Carousel
                                    </button><br></a>
                                <button data-toggle="modal" data-target="#datareg-{{ $asu->id }}"
                                    class="btn btn-danger btn-rounded btn-block"><i class="fa fa-trash "></i> Hapus</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- <--------------- MODAL HAPUS DATA ---------------> --}}
    @foreach ($beranda_img1 as $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->id }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Data Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('beranda_img1.destroy', $asu->id) }}" method="POST">
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
