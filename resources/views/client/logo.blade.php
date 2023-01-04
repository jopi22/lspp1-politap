@extends('layout.client')
@section('judul')
    Logo | LSP-POLITAP
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('client/css/Logo.css') }}" media="screen">
@endsection
@section('isi')
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-ceac">
        <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-top u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"><span
                                        class="u-file-icon u-icon u-text-white u-icon-1"><img
                                            src="{{ asset('images/logo3/14.png') }}" alt=""></span>Logo LSP -
                                    POLITAP
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="u-clearfix u-grey-5 u-section-2" id="sec-73aa">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    @foreach ($logo as $asu)
                    <div class="u-layout-row" style="">
                        <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-24 u-size-xs-60 u-layout-cell-1"
                            src="">
                            <div class="u-container-layout u-container-layout-1" src="">
                                <img class="u-image u-image-1" src="{{ asset($asu->image) }}" data-image-width="362"
                                    data-image-height="220">
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-left-cell u-size-36 u-size-xs-60 u-white u-layout-cell-2"
                            src="">
                            <div class="u-container-layout u-valign-top u-container-layout-2">
                                <p class="u-align-center u-text u-text-1">
                                    {!! $asu->isi !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
