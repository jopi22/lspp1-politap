<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login-Asesi | LSP POLITAP</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/auth.css') }}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/shotcut.jpg') }}" />
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('general/assets/images/shortcut.jpg') }}" />
</head>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="{{ asset('assets/images/logo/bnsp.png') }}" class="logo">
                            <img src="{{ asset('assets/images/logo/kemendikbud_small.png') }}" class="logo3">
                            <img src="{{ asset('assets/images/logo/politap_small.png') }}" class="logo3">
                            <img src="{{ asset('assets/images/logo/lsp_small.jpg') }}" class="logo2"><br><br>
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="{{ asset('assets/images/auth/login_asesi.png') }}" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row mb-4 px-3">
                                <h6 class="mb-0 mr-4 mt-2">Lembaga Sertifikasi Profesi Pihak Ke Satu Politektik Negeri
                                    Ketapang</h6>
                            </div>
                            <div class="row px-3 mb-4 w3-panel w3-border-bottom">
                                <label style="padding-left: 35%;">Login Mahasiswa</label>
                            </div>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">NIM</h6>
                                </label>
                                <input type="number"
                                    class="form-control @error('email') is-invalid @enderror form-control-lg border-left-0"
                                    id="email" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" placeholder="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label>
                                <input type="password" class="@error('password') is-invalid @enderror" name="password"
                                    form-control-lg border-left-0" required autocomplete="current-password"
                                    id="exampleInputPassword" placeholder="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input"
                                        {{ old('remember') ? 'checked' : '' }}>
                                </div>
                                <label class="form-check-label  text-muted" for="remember">Ingatkan saya</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="ml-auto mb-0 text-sm">Lupa
                                        Password?</a>
                                @endif


                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn btn-danger text-center">Login</button>
                            </div>
                            <div class="row mb-4 px-3">
                                <small class="font-weight-bold">Belum punya akun? <a href="{{ route('reg') }}"
                                        class="text-danger ">Daftar disini</a></small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div style="background-color: #ec3732;" class="bg text-white py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. Designed & Developed By <a
                            href="http://informatika.politap.ac.id/" target="_blank"> Teknik
                            Informatika </a> <a href="https://politap.ac.id/" target="_blank">Politeknik Negeri
                            Ketapang</small>
                </div>
            </div>
        </div>
    </div>
</body>


</html>
