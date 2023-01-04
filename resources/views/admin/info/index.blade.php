@extends('layout/admin')

@section('judul')
    Tutorial Pendaftaran | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
    @include('layout/verifikasi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-info-circle"></i> Tutorial Pendaftaran
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Tutorial Pendaftaran</li>
            </ol>
        </nav>
    </div><br>
    {{-- <---------------------- INPUT INFO ----------------------> --}}
    <div class="row">
        <div class="card col-md-6">
            <div class="card-body">
                <div class="card-description">
                    <p><i class="fas fa-info-circle"></i> Informasi :
                        <ul>
                            <li>Gambar ditampilkan berupa tutorial pendaftaran sertifikasi.</li>
                            <li>Ukuran file gambar maksimal 2 mb.</li>
                            <li>Format file gambar PNG & JPG.</li>
                        </ul>
                    </p>
                </div>
                @foreach ($info2 as $asu2)
                    <div class="col-md-6">
                        <form action="{{ route('save_image', $asu2->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <label class="font-weight-bold text-primary" for="file"><i class="fas fa-images"></i> Input
                                Gambar</label>
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg, .pdf" name="image"
                                id="file">
                            <br>
                            <button type="submit" class="btn btn-rounded btn-success btn-block"><i class="fas fa-save"></i>
                                Simpan</button><br>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset($asu2->image) }}" width="550px" alt="">
                    </div><br>
                @endforeach
            </div>
        </div>
        <div class="card col-md-6">
            <div class="card-body">
                <div class="card-description">
                    <p><i class="fas fa-info-circle"></i> Informasi :
                        <ul>
                            <li>Video ditampilkan berupa tutorial pendaftaran sertifikasi.</li>
                            <li>Ukuran file Video maksimal 10 mb.</li>
                            <li>Format file Video MP4.</li>
                        </ul>
                    </p>
                </div>
                @foreach ($info as $asu)
                    <div class="col-md-12">
                        <div class="row">
                            <form action="{{ route('info.update', $asu->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="md-6">
                                    <label class="font-weight-bold text-primary" for="file"><i
                                            class="fas fa-images"></i> Input
                                        Link Video</label>
                                    <input type="text" class="form-control" placeholder="Link Video" maxlength="200" name="keterangan"
                                        id="file">
                                    <br>
                                </div>
                                <div style="margin-left: 3%" class="md-6">
                                    <label class="font-weight-bold text-primary" for="file"><i
                                            class="fas fa-images"></i>
                                        Input
                                        Video MP4</label>
                                    <input type="file" class="form-control" accept=".mp4" name="image" id="file">
                                    <br>
                                    <button type="submit" class="btn btn-rounded btn-success btn-block"><i class="fas fa-save"></i>
                                        Simpan</button><br>
                            </form>
                        </div>
                    </div>
            </div>

            <div class="col-md-5">
                <a href="{{ $asu->keterangan }}"><button class="btn btn-sm btn-dark">Link Video</button></a>
                <br><br>
                <video src="{{ asset($asu->image) }}" width="550px" alt="">
            </div><br>
            @endforeach
        </div>
    </div>
    </div>
@endsection
