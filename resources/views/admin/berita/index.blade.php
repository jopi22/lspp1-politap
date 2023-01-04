@extends('layout/admin')

@section('judul')
    Berita | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-bullhorn"></i> Berita
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Berita</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- TAMBAH DATA -->
    <!-- /////////////////////////////////// -->
    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Klik disini Untuk Menambahkan Berita
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('berita.store') }}" enctype="multipart/form-data" method="POST"
                        class="form-control">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title"><i class="fas fa-plus"></i> Tambah Berita</h4>
                            <div class="col-md-12">
                                <label for="image-upload" id="image-label">Pilih Gambar , Format gambar JPG &nbsp;<i
                                        class="fas fa-image"></i></label>
                                <input accept=".jpg, ,jpeg" type="file" name="image">
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Kategori</label>
                                <select class="form-control" name="kategori_id">
                                    <option value="" holder>Pilih Kategori</option>
                                    @foreach ($kategori as $result)
                                        <option value="{{ $result->id }}">{{ $result->kategori }}</option>
                                        select
                                    @endforeach
                                </select>
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Status Berita</label>
                                <select class="form-control" name="status">
                                    <option value="" holder>Pilih Status</option>
                                    <option value='<label class="badge badge-info">Posting</label>'>Posting</option>
                                    <option value='<label class="badge badge-danger">Tidak di Posting</label>'>Tidak di
                                        Posting</option>
                                </select>
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Judul Berita</label>
                                <input type="text" class="form-control" placeholder="Judul berita" name="title"
                                    maxlength="75">
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Excerpt</label>
                                <input type="text" class="form-control" maxlength="100" placeholder="Excerpt"
                                    name="excerpt">
                            </div><br>
                            <label for="">Isi Konten Berita</label>
                            <div class="col-md-6">
                                <textarea class="summernote" name="body"></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-rounded btn-success btn-block"><i
                                    class="fas fa-upload"></i>
                                Simpan</button><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- TAMPIL DATA -->
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-list"></i> List Berita Anda</h4>
            <p class="card-description">
            <div class="table-responsive">
                <table id="order-listing" class="table dataTable no-footer" role="grid"
                    aria-describedby="order-listing_info">
                    <thead>
                        <tr class="bg-danger text-white">
                            <th style="width: 10px">#</th>
                            <th style="width: 10px">Action</th>
                            <th>Thumbnail</th>
                            <th style="width: 900px">Judul</th>
                            <th style="width: 150px">Dibuat</th>
                            <th style="width: 150px">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $asu)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                        <a href="{{ route('berita.show', Crypt::encryptString($asu->id)) }}"><button
                                                type="submit" class="btn btn-warning btn-sm btn-block"><i
                                                    class="fa fa-eye "></i>
                                                Edit & Detail Berita</button></a>
                                        <button data-toggle="modal" data-target="#datareg-{{ $asu->id }}"
                                            class="btn btn-danger btn-block"><i class="fa fa-trash "></i> Hapus</button>
                                    </div>
                                </td>
                                <td class="py-1">
                                    <img src="{{ asset($asu->image) }}" alt="image">
                                </td>
                                <td>
                                    {{ $asu->title }}
                                </td>
                                <td>
                                    {{ $asu->created_at->diffforhumans() }}
                                </td>
                                <td>
                                    {!! $asu->status !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- <--------------- MODAL HAPUS DATA ---------------> --}}
    @foreach ($berita as $asu)
        <div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                            {{ $asu->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Data Ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('berita.destroy', $asu->id) }}" method="POST">
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
