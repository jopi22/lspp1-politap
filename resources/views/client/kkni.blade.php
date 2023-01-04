@extends('layout/client')
@section('judul')
    KKNI | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('client/css/Download.css') }}">
@endsection
@section('isi')
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-ceb4">
        <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div
                                class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"><span
                                        class="u-file-icon u-icon u-text-white u-icon-1"><img
                                            src="{{ asset('images/logo2/16.png') }}" alt=""></span>&nbsp;KKNI

                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="u-align-center u-clearfix u-expand-resize u-grey-10 u-video-cover u-section-3" id="carousel_c631"><br>
        @foreach ($file as $asu)
                <h2>{{ $asu->file }}</h2>
                <embed src="{{ asset($asu->image) }}" width="75%" height="300px"><br><br>
        @endforeach
    </section>

@endsection
