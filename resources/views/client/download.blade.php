@extends('layout/client')
@section('judul')
    Download Dokumen | LSP POLITAP
@endsection

@section('download')
    active
@endsection

@section('css')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Oswald:300,400,500,700");
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800");

        .gr-1 {
            background: linear-gradient(170deg, #01E4F8 0%, #1D3EDE 100%);
        }

        .gr-2 {
            background: linear-gradient(170deg, #B4EC51 0%, #429321 100%);
        }

        .gr-3 {
            background: linear-gradient(170deg, #C86DD7 0%, #3023AE 100%);
        }

        * {
            transition: 0.5s;
        }

        em{
            color: #de1d1d
        }

        .h-100 {
            height: 100vh !important;
        }

        .align-middle {
            position: relative;
            margin: 20% transform: translateY(-50%);
        }

        .column {
            margin-top: 3rem;
            padding-left: 3rem;
        }

        .column:hover {
            padding-left: 0;
        }

        .column:hover .card .txt {
            margin-left: 1rem;
        }

        .column:hover .card .txt h1,
        .column:hover .card .txt p {
            color: white;
            opacity: 1;
        }

        .column:hover a {
            color: white;
        }

        .column:hover a:after {
            width: 10%;
        }

        .card {
            min-height: 170px;
            margin: 0;
            padding: 1.7rem 1.2rem;
            border: none;
            border-radius: 0;
            color: black;
            letter-spacing: 0.05rem;
            font-family: "Oswald", sans-serif;
            box-shadow: 0 0 21px rgba(0, 0, 0, 0.27);
        }

        .card .txt {
            margin-left: 1px;
            z-index: 1;
        }

        .card .txt h1 {
            font-size: 1.5rem;
            font-weight: 300;
            /* text-transform: uppercase; */
        }

        .card .txt p {
            font-size: 0.7rem;
            font-family: "Open Sans", sans-serif;
            letter-spacing: 0rem;
            margin-top: 33px;
            opacity: 0;
            color: white;
        }

        .card a {
            z-index: 3;
            font-size: 0.7rem;
            color: black;
            margin-left: 1rem;
            position: relative;
            bottom: -0.5rem;
            text-transform: uppercase;
        }

        .card a:after {
            content: "";
            display: inline-block;
            height: 0.5em;
            width: 0;
            margin-right: -100%;
            margin-left: 10px;
            border-top: 1px solid white;
            transition: 0.5s;
        }

        .card .ico-card {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .card i {
            position: relative;
            right: -50%;
            top: 60%;
            font-size: 12rem;
            line-height: 0;
            opacity: 0.2;
            color: white;
            z-index: 0;
        }
    </style>
@endsection

@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-file-alt"></i> File Dokumen </h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Konten ***** -->
    <!-- Download -->
    <div style="margin-top: 40px" class="section-heading">
        <h2>Folder <em> Dokumen</em></h2>
        <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
    </div>
    <div style="margin-top: 0%" class="container h-100">
        <div class="row align-middle">
            <!-- SKKNI -->
            <div class="col-md-6 col-lg-4 column">
                <div class="card gr-3">
                    <div class="txt">
                        <h1 class="font-weight-bold">SKKNI</h1>
                        <p>Standar Kompetensi Kerja Nasional Indonesia</p>
                    </div>
                    <a href="{{ route('client_skkni') }}" class="">Lihat Detail</a>
                    <div class="ico-card">
                        <i class="fa fa-empire"></i>
                    </div>
                </div>
            </div>
            <!-- Formulir Pendaftaran -->
            <div class="col-md-6 col-lg-4 column">
                <div class="card gr-1">
                    <div class="txt">
                        <h1 class="font-weight-bold">Formulir Pendaftaran</h1>
                        <p>Formulir APL-01 & APL-02</p>
                    </div>
                    <a href="{{ route('clien_fileapl2') }}" class="">Lihat Detail</a>
                    <div class="ico-card">
                        <i class="fa fa-rebel"></i>
                    </div>
                </div>
            </div>
            <!-- Dokumen LAIN -->
            <div class="col-md-6 col-lg-4 column">
                <div class="card gr-2">
                    <div class="txt">
                        <h1 class="font-weight-bold">Dokumen Lain</h1>
                        <p>-</p>
                    </div>
                    <a href="{{ route('client_filelain') }}" class="">more</a>
                    <div class="ico-card">
                        <i class="fa fa-codepen"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Konten ***** -->
@endsection
