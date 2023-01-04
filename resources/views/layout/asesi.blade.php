<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('judul')</title>
    <!-- /////////////////////////////////// -->
    <!-- ASSETS -->
    <!-- /////////////////////////////////// -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="shortcut icon" href="{{ asset('general/assets/images/lsp_small.jpg') }}" />
</head>

<body class="@yield('sidebar')">
    <div class="container-scroller">
        <!-- /////////////////////////////////// -->
        <!-- LOGO NAVIGASI -->
        <!-- /////////////////////////////////// -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ route('dashasesi.index') }}"><img
                        src="{{ asset('assets/images/logo/lsp1.png') }}" alt="logo" /></a>
                <!-- /////////////////////////////////// -->
                <!-- LOGO MINI -->
                <!-- /////////////////////////////////// -->
                <a class="navbar-brand brand-logo-mini" href="#"><img
                        src="{{ asset('assets/images/logo/mini3.png') }}" alt="logo" /></a>
            </div>
            <!-- /////////////////////////////////// -->
            <!-- MENU NAVIGASI -->
            <!-- /////////////////////////////////// -->
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button style="color: #fff" class="navbar-toggler  align-self-center" type="button" data-toggle="minimize">
                    <span class="fas fa-bars"></span></button>
                <!-- /////////////////////////////////// -->
                <!-- JUDUL BARIS -->
                <!-- /////////////////////////////////// -->
                <ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#map" data-toggle="dropdown">
                            <i class="fas fa-map-marker mx-0"></i>
                        </a> -->
                    </li>
                    <li>
                        <div class="card-subtitle2">
                            <h5> <i class="fas fa-user"></i> WEBSITE ASESI - LEMBAGA SERTIFIKASI PROFESI POLITEKNIK
                                NEGERI KETAPANG</h5>
                        </div>
                    </li>
                </ul>
                <!-- /////////////////////////////////// -->
                <!-- ICON SOSIAL MEDIA -->
                <!-- /////////////////////////////////// -->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <a class="nav-link count-indicator" id="notificationDropdown" target="_blank"
                            href="{{ url('/') }}">
                            <i class="fas fa-home mx-0"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown"
                            aria-expanded="false">
                            @if (Auth::user()->image)
                                <img src="{{ asset(Auth::user()->image) }}" alt="profile">
                            @else
                                <img src="{{ asset('general/assets/images/photo.jpg') }}" alt="profile">
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            {{-- <a class="dropdown-item">
                    <i class="fas fa-cog text-primary"></i>
                    Settings
                </a> --}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i
                                    class="fas fa-power-off text-primary"></i>
                                {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <!-- /////////////////////////////////// -->
            <!-- TEMA WEBSITE -->
            <!-- /////////////////////////////////// -->
            {{-- <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close fa fa-times"></i>
            <p class="settings-heading">Tema Sidebar</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                    <p class="settings-heading mt-2">Tema Navigasi</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div> --}}

            <!-- /////////////////////////////////// -->
            <!-- SIDEBAR -->
            <!-- /////////////////////////////////// -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <!-- NAMA PENGGUNA -->
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="profile-image">
                                @if (Auth::user()->image)
                                    <img src="{{ asset(Auth::user()->image) }}" alt="profile">
                                @else
                                    <img src="{{ asset('general/assets/images/photo.jpg') }}" alt="profile">
                                @endif
                            </div>
                            <div class="profile-name">
                                <p class="name">
                                    {{ Auth::user()->name }}
                                </p>
                                <p class="designation text-center">
                                    Asesi
                                </p>
                            </div>
                        </div>
                    </li>
                    <!-- /////////////////////////////////// -->
                    <!-- MENU SIDEBAR -->
                    <!-- /////////////////////////////////// -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashasesi.index') }}">
                            <i class="fa fa-th-large  menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('edit') }}">
                            <i class="fa fa-user-circle menu-icon"></i>
                            <span class="menu-title">Profil Anda</span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
                            aria-controls="sidebar-layouts">
                            <i class="fab fa-pagelines menu-icon"></i>
                            <span class="menu-title">Assesment</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="sidebar-layouts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('info.skema') }}">Info Skema</a>
                                </li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('profil.edit2') }}">Pendaftaran Sertifikasi</a>
                                </li>
                            </ul>
                            {{-- <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('formulirapl2.edit') }}">Registrasi
                                Sertifikasi</a>
                            </li>
                        </ul> --}}
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('koleksi.sertifikat') }}">Koleksi
                                        Sertifikat</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- /////////////////////////////////// -->
            <!-- MAIN WEBSITE -->
            <!-- /////////////////////////////////// -->
            <div class="main-panel">
                <div class="content-wrapper">



                    <!-- ///////////////////////////////////////////////////////////////////// -->
                    <!-- ///////////////////////////////////////////////////////////////////// -->
                    <!-- ISI WEBSITE -->
                    @yield('isi')
                    <!-- ///////////////////////////////////////////////////////////////////// -->
                    <!-- ///////////////////////////////////////////////////////////////////// -->



                </div>
            </div>
        </div>
    </div>

    <!-- /////////////////////////////////// -->
    <!-- FOOTER -->
    <!-- /////////////////////////////////// -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text text-white text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022
                &diamondsuit; All Right Reserved
                </span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-white text-center">Designed & Developed By <a href="http://informatika.politap.ac.id/" target="_blank">Teknik Informatika</a> <a href="https://politap.ac.id/" target="_blank">Politeknik Negeri
                Ketapang</a>.</span>
        </div>
    </footer>


    <!-- /////////////////////////////////// -->
    <!-- JAVASCRIPTS -->
    <!-- /////////////////////////////////// -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/js/google-maps.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/formpickers.js') }}"></script>
    <script src="{{ asset('assets/js/form-addons.js') }}"></script>
    <script src="{{ asset('assets/js/x-editable.js') }}"></script>
    <script src="{{ asset('assets/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-file-upload.js') }}"></script>
    <script src="{{ asset('assets/js/formpickers.js') }}"></script>
    <script src="{{ asset('assets/js/form-repeater.js') }}"></script>
    <script src="{{ asset('assets/js/alerts.js') }}"></script>
    <script src="{{ asset('assets/js/avgrund.js') }}"></script>
    <script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tinymce/themes/modern/theme.js') }}"></script>
    <script src="{{ asset('assets/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets/js/bt-maxLength.js') }}"></script>
    <script src="{{ asset('assets/js/wizards.js') }}"></script>
    <script src="{{ asset('assets/js/js-grid.js') }}"></script>
    <script src="{{ asset('assets/js/db.js') }}"></script>
    <script src="{{ asset('assets/js/tooltips.js') }}"></script>
    <script src="{{ asset('assets/js/popover.js') }}"></script>
    <script src="{{ asset('assets/js/modal-demo.js') }}"></script>
    <script src="{{ asset('assets/js/alerts.js') }}"></script>
    <script src="{{ asset('assets/js/avgrund.js') }}"></script>
</body>


</html>
