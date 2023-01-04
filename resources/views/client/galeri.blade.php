@extends('layout.client')
@section('judul')
    Galeri | LSP POLITAP
@endsection

@section('galeri')
    active
@endsection

@section('css')
    <style>
        em {
            color: #b00909
        }

        .flip-boxes {
            justify-content: center;
        }

        .flip-box {
            display: flex;
            align-content: stretch;
            min-height: 200px;
            flex-wrap: wrap;
            position: relative;
            border: 10px solid transparent;
            padding: 0;
            border-top: 0;
            -webkit-perspective: 1000;
            perspective: 1000;
        }

        .flip-box:hover .back {
            transform: rotateY(0deg);
            z-index: 10;
        }

        .flip-box:hover .front {
            transform: rotateY(180deg);
            z-index: -1;
        }

        .flip-box .back,
        .flip-box .front {
            position: relative;
            background-color: #1b2d61;
            color: white;
            display: flex;
            justify-content: center;
            align-content: center;
            flex: 0 0 100%;
            -webkit-transition: all 1s cubic-bezier(0.5, 1, 0.5, 1);
            transition: all 1s cubic-bezier(0.5, 1.3, 0.5, 1.3);
            transform-style: preserve-3d;
            background-size: cover;
            background-position: center;
        }

        .flip-box .back {
            background-color: #a50b0bb5;
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            z-index: -1;
            transform: rotateY(-180deg);
        }

        .flip-box .back:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 30px;
            height: 30px;
            border: 15px solid transparent;
            border-bottom-color: white;
            border-left-color: white;
        }

        .flip-box .front {
            z-index: 10;
        }

        .flip-box .front .content {
            font-size: 2rem;
        }

        .flip-box .front:after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            width: 30px;
            height: 30px;
            border: 15px solid #cecece;
            border-bottom-color: white;
            border-right-color: white;
        }

        .flip-box .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            -webkit-transform: translateZ(50px);
            transform: translateZ(50px);
            text-shadow: 0px 0px 2px black;
        }
    </style>
@endsection

@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-images"></i> Galeri Kegiatan </h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Konten ***** -->
    <!-- Galeri -->
    <div style="margin-top: 60px; margin-bottom: 60px" class="">
        <div class="container">
            <div class="section-heading">
                <h2>Album <em> Kegiatan</em></h2>
                <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
            </div>
            <div class="row">
                @foreach ($galeri as $asu)
                    <a href="{{ route('galeri_detail', Crypt::encryptString($asu->id)) }}"
                        class="col-md-3 col-sm-4 col-8 flip-box">
                        @if ($asu->image)
                        <div class="front" style="background-image: url('{{ asset($asu->image) }}');">
                            <div class="content text-center">
                                {{ $asu->galeri }}
                                <br>
                                <span class="click-for-more">
                                </span>
                            </div>
                        </div>
                        @else
                        <div class="front" style="background-image: url('https://picsum.photos/1000/800/?random');">
                            <div class="content text-center">
                                {{ $asu->galeri }}
                                <br>
                                <span class="click-for-more">
                                </span>
                            </div>
                        </div>
                        @endif
                        <div class="back">
                            <div class="content">
                                {{ $asu->galeri }} <br>
                                {{ $asu->created_at->format('d-M-Y') }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ***** Akhir Konten ***** -->
@endsection
