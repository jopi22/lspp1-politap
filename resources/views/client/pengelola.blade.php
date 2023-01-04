@extends('layout.client')
@section('judul')
    Pengelola | LSP-POLITAP
@endsection

@section('css')
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <style type="text/css">
        @import "https://fonts.googleapis.com/css?family=Open+Sans:300,400";

        .content {
            position: relative;
            animation: animatop 0.9s cubic-bezier(0.425, 1.14, 0.47, 1.125) forwards;
        }

        .card {
            width: 500px;
            min-height: 100px;
            padding: 20px;
            border-radius: 3px;
            background-color: white;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .card:after {
            content: '';
            display: block;
            width: 190px;
            height: 300px;
            background: #b80303c5;
            position: absolute;
            animation: rotatemagic 0.75s cubic-bezier(0.425, 1.04, 0.47, 1.105) 1s both;
        }

        .badgescard {
            padding: 10px 20px;
            border-radius: 3px;
            background-color: #980404e7;
            color: #fff;
            width: 480px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            position: absolute;
            z-index: -1;
            left: 10px;
            bottom: 10px;
            animation: animainfos 0.5s cubic-bezier(0.425, 1.04, 0.47, 1.105) 0.75s forwards;
        }

        .badgescard span {
            font-size: 1.6em;
            margin: 0px 6px;
            color: #fff opacity: 0.6;
        }

        .firstinfo {
            flex-direction: row;
            z-index: 2;
            position: relative;
        }

        .firstinfo img {
            border-radius: 50%;
            width: 100px;
            height: 120px;
        }

        .firstinfo .profileinfo {
            padding: 0px 20px;
        }

        .firstinfo .profileinfo h1 {
            font-size: 1.8em;
        }

        .firstinfo .profileinfo h3 {
            font-size: 1.2em;
            color: #000000;
            /* font-style: italic; */
        }

        .firstinfo .profileinfo p.bio {
            padding: 10px 0px;
            color: #000000;
            line-height: 1.2;
            font-style: initial;
        }

        @keyframes animatop {
            0% {
                opacity: 0;
                bottom: -500px;
            }

            100% {
                opacity: 1;
                bottom: 0px;
            }
        }

        @keyframes animainfos {
            0% {
                bottom: 10px;
            }

            100% {
                bottom: -42px;
            }
        }

        @keyframes rotatemagic {
            0% {
                opacity: 0;
                transform: rotate(0deg);
                top: -24px;
                left: -253px;
            }

            100% {
                transform: rotate(-30deg);
                top: -24px;
                left: -78px;
            }
        }
    </style>
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-user"></i> Pengelola SDM</h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Koten ***** -->
    <!-- Pengelola -->
    <div class="more-info">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    @foreach ($pengelola as $asu)
                        <div style="margin-bottom: 7%; margin-right: 3%" class="content">
                            <div class="card">
                                <div class="firstinfo"><img src="{{ $asu->image }}" />
                                    <div class="profileinfo">
                                        <h1 class="font-weight-bold text-dark">{{ $asu->nama }}</h1>
                                        <h3 class="font-weight-bold">{{ $asu->keterangan }}</h3>
                                        <p class="bio"><i class="fab fa-whatsapp"></i> {{ $asu->no_hp }}</p>
                                        <p class="bio"><i class="fa fa-envelope"></i> {{ $asu->email }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="badgescard">
                                <a style="color: #fff" href="{{ $asu->facebook }}"><span class="fa fa-facebook"></span></a>
                                <a style="color: #fff" href="{{ $asu->twitter }}"><span class="fa fa-twitter"> </span></a>
                                <a style="color: #fff" href="{{ $asu->instagram }}"><span class="fa fa-instagram"></span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <!-- ***** Akhir Konten ***** -->
@endsection
