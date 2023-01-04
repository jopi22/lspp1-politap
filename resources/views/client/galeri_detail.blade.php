@extends('layout/client')
@section('judul')
    Galeri | {{ $galeri->galeri }}
@endsection

@section('css')
    {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        /* .container{
                 width:90%
                 margin:10px auto;
                } */
        .portfolio-menu {
            text-align: center;
        }

        .portfolio-menu ul li {
            display: inline-block;
            margin: 0;
            list-style: none;
            padding: 10px 15px;
            cursor: pointer;
            -webkit-transition: all 05s ease;
            -moz-transition: all 05s ease;
            -ms-transition: all 05s ease;
            -o-transition: all 05s ease;
            transition: all .5s ease;
        }

        .portfolio-item {
            /*width:100%;*/
        }

        .portfolio-item .item {
            /*width:303px;*/
            float: left;
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('javascript')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

    <script>
        // $('.portfolio-item').isotope({
        //  	itemSelector: '.item',
        //  	layoutMode: 'fitRows'
        //  });
        $('.portfolio-menu ul li').click(function() {
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter: selector
            });
            return false;
        });
        $(document).ready(function() {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
@endsection

@section('galeri')
    active
@endsection

@section('isi')
    <div style="margin-top: 10%" class="container">
        {{-- <div class="row">
            <div class="col-lg-12 text-center my-2">
                <h3 class="py-3"><a href="https://spreeowl.com/">Spreeowl</a></h3>
                <h4>Isotope filter magical layouts with Bootstrap 4</h4>
            </div>
        </div>
        <div class="portfolio-menu mt-2 mb-4">
            <ul>
                <li class="btn btn-outline-dark active" data-filter="*">All</li>
                <li class="btn btn-outline-dark" data-filter=".gts">Girls T-shirt</li>
                <li class="btn btn-outline-dark" data-filter=".lap">Laptops</li>
                <li class="btn btn-outline-dark text" data-filter=".selfie">selfie</li>
            </ul>
        </div> --}}
        <div class="section-heading">
            <h2>{{ $galeri->galeri }}<em></em></h2>
            <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
        </div>
        <div style="margin-top: 40px; margin-bottom: 40px" class="portfolio-item row">
            @foreach ($galeri->galeri_fotos as $foto)
                <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="{{ asset($foto->image) }}" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="{{ asset($foto->image) }}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>




    {{-- <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_95bf">
        <div class="u-expanded-width u-grey-5 u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-align-center u-container-style u-group u-shape-rectangle u-group-1">
            <div class="u-container-layout">
                <h2 class="u-align-center u-text u-text-1"> {{ $galeri->galeri }}</h2>
            </div>
        </div>
        <div class="u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
            <div class="u-gallery-inner u-gallery-inner-1">
                @foreach ($galeri->galeri_fotos as $foto)
                <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
                    <div class="u-back-slide" data-image-width="1380" data-image-height="920">
                        <img class="u-back-image u-expanded" src="{{ asset($foto->image) }}">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-1">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <p class="u-align-right u-text u-text-custom-color-1 u-text-2">{{ $galeri->created_at }} </p>
    </section> --}}
@endsection
