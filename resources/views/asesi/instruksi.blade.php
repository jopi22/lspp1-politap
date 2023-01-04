@extends('layout/asesi1')
@section('isi')
<div class="page-header">
    <h4>
        <i class="fas fa-question-circle"></i>  Tutorial Pendaftaran Sertifikasi
    </h4>
    <!-- /////////////////////////////////// -->
    <!-- BREADCRUMB -->
    <!-- /////////////////////////////////// -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-danger">
            <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('dashasesi.index') }}">Dashboard</a></li>
            <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Tutorial Pendaftaran Sertifikasi</li>
        </ol>
    </nav>
</div><br>
    <!-- /////////////////////////////////// -->
    <!-- TAMPILAN DATA -->
    <!-- /////////////////////////////////// -->
    @foreach ($info as $asu)
    <div class="media">
        <video width="1000px" controls>
            <source src="{{ asset($asu->image) }}" type="video/mp4">
        </video>
        <div class="media-body" data-aos="fade-left" data-aos-delay="200">
        </div>
    </div>
@endforeach
@endsection
