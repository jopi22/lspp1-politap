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
                    <h1><i class="fas fa-mobile"></i> Kontak Kami</h1>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <div class="right-content">
                                    <span>our solid background on finance</span>
                                    <h2>Get to know about <em>our company</em></h2>
                                    <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac
                                        dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula
                                        tellus, sit amet malesuada justo sem.
                                        <br><br>Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend,
                                        ullamcorper dui nec, luctus quam.
                                    </p>
                                    <a href="" class="filled-button">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-image">
                                    <img src="{{ asset('general/assets/images/head1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- ***** Akhir Konten ***** -->
@endsection
