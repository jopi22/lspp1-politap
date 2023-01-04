@extends('layout.client')
@section('judul')
    Struktur | LSP POLITAP
@endsection

@section('profil')
    active
@endsection

@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-sitemap"></i> Struktur Organisasi</h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Koten ***** -->
    <!-- Logo -->
    <div id="logo" class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="col-md-8 align-self-center">
                        </div>
                        <div class="col-md-12">
                            @foreach ($struktur as $asu)
                                <img src="{{ asset($asu->image) }}" width="100%" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br>
    <!-- ***** Akhir Konten ***** -->
@endsection
