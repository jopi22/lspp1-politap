@extends('layout.client')
@section('judul')
    Pengelola | {{ $pengelola->nama }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('/client/Detail-TUK.css') }}" media="screen">
@endsection
@section('isi')
<section style="background-image: url('{{ asset('/images/back/1.jpg') }}')" class="u-clearfix u-image u-section-1" id="carousel_6766" data-image-width="1600" data-image-height="1067">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-gradient u-shape u-shape-circle u-shape-1"></div>
        <div class="u-align-left u-container-style u-expanded-width-xs u-group u-radius-20 u-shape-round u-white u-group-1"
            data-animation-name="customAnimationIn" data-animation-duration="1000">
            <div class="u-container-layout u-container-layout-1">
                <h2 class="u-custom-font u-font-merriweather u-text u-text-1">{{ $pengelola->nama }}</h2>
                <p class="u-text u-text-2">{{ $pengelola->keterangan }}</p>
                <p class="u-text u-text-3">{{ $pengelola->no_hp }}</p>
                <p class="u-text u-text-3">{{ $pengelola->email }}</p>
                <p class="u-text u-text-3">{{ $pengelola->facebook }}</p>
            </div>
        </div>
        <div class="u-container-style u-group u-group-2" data-animation-name="customAnimationIn"
            data-animation-duration="1000" data-animation-direction="X">
            <div class="u-container-layout u-container-layout-2">
                <img class="u-image u-image-1"
                    src="{{ asset($pengelola->image) }}"
                    data-image-width="1280" data-image-height="853">
            </div>
        </div>
    </div>
</section>
@endsection
