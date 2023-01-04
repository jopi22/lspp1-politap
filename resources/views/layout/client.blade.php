<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>@yield('judul')</title>
    <link rel="shortcut icon" href="{{ asset('general/assets/images/shortcut.jpg') }}" />

    <!-- Bootstrap & CSS Utama -->
    <link href="{{ asset('general/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Tambahan CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('general/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('general/assets/css/lsp.css') }}">
    <link rel="stylesheet" href="{{ asset('general/assets/css/owl.css') }}">

    <!-- CSS Spesial -->
    @yield('css')

    <!-- Flip Card -->
    <style>
        .flip-card {
            background-color: transparent;
            width: 260px;
            height: 330px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: rgba(75, 69, 69, 0.463);
            color: rgb(255, 255, 255);
        }

        .flip-card-back {
            background-color: #9b0000e2;
            color: white;
            transform: rotateY(180deg);
        }
    </style>

    <!-- Dropdown menu -->
    <style>
        .dropbtn {}

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #9b0000e2;
            min-width: 300px;
            box-shadow: 0px 8px 16px 0px rgba(41, 32, 32, 0.46);
            z-index: 1;
        }

        .dropdown-content a {
            color: rgb(255, 255, 255);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: rgb(0, 0, 0);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #05040400;
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <ul class="left-info">
                        <li><a href="#"><i class="fa fa-university"></i>Lembaga Sertifikasi Profesi
                                Politeknik Negeri Ketapang</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                        <li><a href="https://www.instagram.com/lsppolitap/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul style="padding-left: 1%">
                        <li class="nav-item">
                            <img style="margin: 10px" src="{{ asset('general/assets/images/bnsp.png') }}"
                                height="40px">
                            <img style="margin: 10px" src="{{ asset('general/assets/images/kemendikbud_small.png') }}"
                                height="40px">
                            <img style="margin: 10px" src="{{ asset('general/assets/images/politap_small.png') }}"
                                height="40px">
                            <img style="margin: 10px" src="{{ asset('general/assets/images/lsp_small.jpg') }}"
                                height="40px">
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="dropdown @yield('home') nav-item">
                            <a class="nav-link dropbtn" href="{{ route('/') }}">HOME</a>
                        </li>
                        <li class="nav-item @yield('profil') dropdown">
                            <a class="nav-link dropbtn">PROFIL <i class="fa  fa-chevron-down"></i></a>
                            <div class="dropdown-content">
                                <a href="{{ route('tentang') }}">Tentang LSP-POLITAP</a>
                                <a href="{{ route('struktur') }}">Struktur Organisasi</a>
                                <a href="{{ route('pengelola') }}">Pengelola LSP-POLITAP</a>
                            </div>
                        </li>
                        <li class="nav-item @yield('layanan') dropdown">
                            <a class="nav-link dropbtn">LAYANAN <i class="fa  fa-chevron-down"></i></a>
                            <div class="dropdown-content">
                                <a href="{{ route('client_skema') }}">Skema</a>
                                <a href="{{ route('client_tuk') }}">Tempat
                                    Uji Kompetensi</a>
                                <a href="{{ route('client_asesor') }}">Asesor</a>
                                <a href="{{ route('tutorial') }}">Prosedur Pendaftaran
                                    Sertifikasi</a>
                            </div>
                        </li>
                        <li class="nav-item @yield('berita')">
                            <a class="nav-link" href="{{ route('client_berita') }}">BERITA</a>
                        </li>
                        <li class="nav-item @yield('galeri')">
                            <a class="nav-link" href="{{ route('client_galeri') }}">GALERI</a>
                        </li>
                        <li class="nav-item @yield('download')">
                            <a class="nav-link" href="{{ route('download') }}">DOKUMEN</a>
                        </li>
                        @if (Auth::user())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropbtn" style="color: #40124fda"><i class="fa fa-user"></i>
                                {{ Auth::user()->role }}
                                </a>
                                <div class="dropdown-content">
                                    <a href="{{ route('profil.edit2') }}">Daftar Sertifikasi</a>
                                    <a href="{{ route('dashasesi.index') }}">Dashboard Asesi</a>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="{{ route('login') }}"><i
                                        class="fa fa-user"></i>
                                    LOGIN</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- ***** Bagian Konten Dimulai ***** -->
    @yield('isi')
    <!-- ***** Bagian Akhir Konten Dimulai ***** -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item">
                    <h4><i class="fa fa-mobile-phone"></i> Kontak Admin</h4>
                    <ul class="menu-list">
                        <li><i class="fa fa-whatsapp"></i> Whatsapp : 08965386474683</li>
                        <li><i class="fa fa-envelope"></i> Email : lsp@politap.ac.id</li>
                    </ul>
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="https://www.instagram.com/lsppolitap/" target="_blank"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4><i class="fa fa-university"></i> Lembaga Tertaut</h4>
                    <ul class="menu-list">
                        <li><a href="https://politap.ac.id/">Politeknik Negeri Ketapang</a></li>
                        <li><a href="http://informatika.politap.ac.id/">Teknologi Informatika POLITAP</a></li>
                        <li><a href="https://www.kemdikbud.go.id/">Kementerian
                                Pendidikan, Kebudayaan,
                                Riset, dan Teknologi</a></li>
                        <li><a href="/">Lembaga Sertifikasi Profesi POLITAP</a></li>
                        <li><a href="https://bnsp.go.id/">Badan Nasional Sertifikasi Profesi</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4><i class="fa fa-map-marker"></i> Alamat</h4>
                    <p>Gedung Kuliah POLITAP Lantai
                        1 ,<br>Jalan Rangge
                        Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan
                        Barat 78112.</p>
                </div>
                <div class="col-md-3 footer-item last-item">
                    <div class="contact-form">
                        <form id="contact footer-contact" action="" method="post">
                            <iframe height="220px" class="embed-responsive-item"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15951.250339779255!2d109.988631!3d-1.8168375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe05ee65e3627ba6c!2sPoliteknik%20Negeri%20Ketapang!5e0!3m2!1sid!2sid!4v1650546915934!5m2!1sid!2sid"
                                data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWVtYmVkJTIyJTJDJTIyYWRkcmVzcyUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZS5jb20lMkZtYXBzJTJGZW1iZWQlM0ZwYiUzRCExbTE0ITFtOCExbTMhMWQxNTk1MS4yNTAzMzk3NzkyNTUhMmQxMDkuOTg4NjMxITNkLTEuODE2ODM3NSEzbTIhMWkxMDI0ITJpNzY4ITRmMTMuMSEzbTMhMW0yITFzMHgwJTI1M0EweGUwNWVlNjVlMzYyN2JhNmMhMnNQb2xpdGVrbmlrJTI1MjBOZWdlcmklMjUyMEtldGFwYW5nITVlMCEzbTIhMXNpZCEyc2lkITR2MTY1MDU0NjkxNTkzNCE1bTIhMXNpZCEyc2lkJTIyJTJDJTIyem9vbSUyMiUzQW51bGwlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCUyQyUyMmVtYmVkJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEITFtMTQhMW04ITFtMyExZDE1OTUxLjI1MDMzOTc3OTI1NSEyZDEwOS45ODg2MzEhM2QtMS44MTY4Mzc1ITNtMiExaTEwMjQhMmk3NjghNGYxMy4xITNtMyExbTIhMXMweDAlMjUzQTB4ZTA1ZWU2NWUzNjI3YmE2YyEyc1BvbGl0ZWtuaWslMjUyME5lZ2VyaSUyNTIwS2V0YXBhbmchNWUwITNtMiExc2lkITJzaWQhNHYxNjUwNTQ2OTE1OTM0ITVtMiExc2lkITJzaWQlMjIlN0Q="></iframe>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright © 2022
                        &diamondsuit; All Right Reserved</a><br>
                        Designed & Developed By : <a href="http://informatika.politap.ac.id/">Teknik Informatika</a>
                        <a href="https://politap.ac.id/">Politeknik Negeri Ketapang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap & Jquery Script -->
    <script src="{{ asset('general/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('general/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Scrip tambahan -->
    <script src="{{ asset('general/assets/js/custom.js') }}"></script>
    <script src="{{ asset('general/assets/js/owl.js') }}"></script>
    <script src="{{ asset('general/assets/js/slick.js') }}"></script>
    <script src="{{ asset('general/assets/js/accordions.js') }}"></script>

    <!-- Scrip tambahan -->
    @yield('javascript')


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0;

        function clearField(t) {
            if (!cleared[t.id]) {
                cleared[t.id] = 1;
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>
</body>

</html>
