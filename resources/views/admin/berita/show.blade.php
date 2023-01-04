@extends('layout/admin')

@section('judul')
    {{ $berita->title }} | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-icon-only
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-bullhorn"></i> Edit & Detail Berita
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page"> {{ $berita->id }}</li>
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
                        &plus; Klik disini Untuk Mengubah Berita
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{ route('berita.update', $berita->id) }}" enctype="multipart/form-data" method="POST"
                        class="form-control">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <h4 class="card-title"><i class="fas fa-plus"></i> Edit Berita</h4>
                            <div class="col-md-12">
                                <label for="image-upload" id="image-label">Pilih Gambar , Format gambar JPG <i class="fas fa-image"></i></label>
                                <input type="file" name="image" accept=".jpg, .jpeg">
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Kategori</label>
                                <select class="form-control" name="kategori_id">
                                    <option value="" holder></option>
                                    @foreach ($kategori as $result)
                                        <option value="{{ $result->id }}"
                                            @if ($berita->kategori_id == $result->id) selected @endif>{{ $result->kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Status Berita</label>
                                <select class="form-control" name="status">
                                    <option value="{{ $berita->status }}" holder>{!! $berita->status !!}</option>
                                    <option value='<label class="badge badge-info">Posting</label>'>Posting</option>
                                    <option value='<label class="badge badge-danger">Tidak di Posting</label>'>Tidak Di Posting</option>
                                </select>
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Judul Berita</label>
                                <input type="text" class="form-control" placeholder="Judul berita" name="title"
                                    maxlength="75" value="{{ $berita->title }}">
                            </div><br>
                            <div class="col-md-12">
                                <label for="">Excerpt</label>
                                <input type="text" class="form-control" maxlength="100" placeholder="Excerpt"
                                    name="excerpt" value="{{ $berita->excerpt }}">
                            </div><br>
                            <div class="col-md-6">
                                <label for="">Isi Konten Berita</label>
                                <textarea class="summernote" name="body">{{ $berita->body }}</textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-rounded btn-info btn-block"><i class="fas fa-upload"></i>
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
    <div class="card col-md-8">
        <div class="card-body">
            <div class="card-title">
                <h4>Preview</h4>
            </div>
            <img class="card-img-top" src="{{ asset($berita->image) }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">{{ $berita->title }}</h4>
                <p class="card-text">{!! $berita->body !!}</p>
            </div>
        </div>
    </div>
@endsection
