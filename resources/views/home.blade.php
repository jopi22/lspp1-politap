<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WELCOME</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/lsp.png') }}" />
</head>

<body style="background-image: url('{{ asset('images/back/1.jpg') }}')">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div  style="background-image: url('{{ asset('images/back/1.jpg') }}'); background-size: cover" class="content-wrapper d-flex align-items-center auth lock-full-bg">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <form class="pt-5">
                            <div class="mt-3 text-center">
                                <h2 for="examplePassword1" class="text text-danger">Selamat Bergabung...</h2>
                            </div>
                            <div class="mt-5">
                                <a class="btn btn-block btn-info btn-lg font-weight-medium"
                                    href="{{ route('dashasesi.index') }}"><i class="fas fa-user"></i> Halaman Asesi</a>
                            </div>
                            <div class="mt-5">
                                <a class="btn btn-block btn-danger btn-lg font-weight-medium"
                                    href="{{ route('admin') }}"><i class="fas fa-cogs"></i> Halaman Admin</a>
                            </div>
                            <div class="mt-5">
                                <a class="btn btn-block btn-primary btn-lg font-weight-medium"
                                    href="{{ route('/') }}"><i class="fas fa-home"></i> Ke Halaman Beranda</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/wizards.js') }}"></script>

</body>


</html>
