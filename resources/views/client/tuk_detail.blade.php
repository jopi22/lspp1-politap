@extends('layout/client')
@section('judul')
    TUK | {{ $tuk->tuk }}
@endsection

@section('layanan')
    active
@endsection

@section('isi')
    <div style="margin-top: 8%; margin-bottom: 8%" class="more-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left-image">
                                    @if ($tuk->image)
                                    <img src="{{ asset($tuk->image) }}" alt="">
                                    @else
                                    <img src="{{ asset('general/assets/images/Gedung-Kuliah-I-Laboratorium-Politeknik-Negeri-Ketapang.jpg') }}" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="right-content">
                                    <span>Tempat Uji Kompetensi</span>
                                    <h2>{{ $tuk->tuk }}</h2>
                                    <h4><i class="fas fa-user"></i> Pengelola : {{ $tuk->pengelola }}</h4><br>
                                    <h6>
                                        <i class="fas fa-map"></i> Alamat : {{ $tuk->alamat }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <section style="background-image: url('{{ asset('images/back/1.jpg') }}')" class="u-align-center u-clearfix u-image u-section-1" id="sec-035d" data-image-width="4000"
        data-image-height="2667">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-row" style="">
                        <div style="box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4);" class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1"
                            src="" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">
                            <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-1"
                                src="">
                                <img class="u-expanded-width u-image u-image-1" src="{{ asset($tuk->image) }}" data-image-width="1080"
                                    data-image-height="1080" data-animation-name="bounceIn" data-animation-duration="1000"
                                    data-animation-direction="">
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-layout-cell u-radius-16 u-right-cell u-shape-round u-size-30 u-size-xs-60 u-white u-layout-cell-2"
                            data-href="https://nicepage.com" data-animation-name="customAnimationIn"
                            data-animation-duration="1000">
                            <div class="u-container-layout u-container-layout-2">
                                <h2 class="u-custom-font u-font-merriweather u-text u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-direction="">{{ $tuk->tuk }}</h2>
                                <p class="u-text u-text-2" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">Kode TUK : {{ $tuk->kode }}</p>
                                <p class="u-text u-text-3" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-delay="0"> Pengelola : {{ $tuk->pengelola }}</p>
                                <p class="u-text u-text-4" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-delay="0">Alamat : {{ $tuk->alamat }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
