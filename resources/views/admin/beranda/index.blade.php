@extends('layout/admin2')
@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h3>
            <i class="fas fa-cogs"></i> Setting Banner
        </h3>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                {{-- <li class="breadcrumb-item">
                <a href="#"> </a>
            </li> --}}
                <li class="breadcrumb-item active" aria-current="page">Setting Banner</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- MAIN WEBSITE --}}
    <!-- /////////////////////////////////// -->

    <div class="row">
        <div class="card">
            @foreach ($skema as $asu)
                <div class="card-body col-md-6">
                    <form action="{{ route('sett-beranda.update', $asu->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <label class="text-primary font-weight-bold" for="file"><i class="fas fa-images"></i> Input
                            Banner Skema</label>
                        <input type="file" class="form-control" name="image" accept=".png, .jpg, .jpeg" id="file">
                        <br>
                        <button type="submit" class="btn btn-info btn-block"><i class="fas fa-save"></i>
                            Update</button>
                    </form><br>
                    <img src="{{ asset($asu->image) }}" width="550px" alt="">
                </div>
            @endforeach
        </div>
        <div class="card">
            @foreach ($tuk as $asu)
                <div class="card-body col-md-6">
                    <form action="{{ route('sett-beranda.update', $asu->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <label class="text-primary font-weight-bold" for="file"><i class="fas fa-images"></i> Input
                            Banner TUK</label>
                        <input type="file" class="form-control" name="image" accept=".png, .jpg, .jpeg" id="file">
                        <br>
                        <button type="submit" class="btn btn-info btn-block"><i class="fas fa-save"></i>
                            Update</button><br>
                    </form>
                    <img src="{{ asset($asu->image) }}" width="550px" alt="">
                </div>
            @endforeach
        </div>
    </div>
@endsection
