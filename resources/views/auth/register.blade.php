<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register | LSP POLITAP</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/auth.css')}}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/shotcut.jpg') }}" />
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script>
</head>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="{{asset('assets/images/logo/bnsp.png')}}" class="logo">
                            <img src="{{asset('assets/images/logo/kemendikbud_small.png')}}" class="logo3">
                            <img src="{{asset('assets/images/logo/politap_small.png')}}" class="logo3">
                            <img src="{{asset('assets/images/logo/lsp_small.jpg')}}" class="logo2"><br><br>
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="{{ asset('assets/images/auth/register.jpg') }}" class="image3">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden" name="role" value="User">
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row mb-4 px-3">
                                <h6 class="mb-0 mr-4 mt-2">Lembaga Sertifikasi Profesi Pihak Ke Satu Politektik Negeri Ketapang</h6>
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Nama Lengkap</h6></label>
                                <input type="text" maxlength="50" name="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Nomor Induk Mahasiswa</h6></label>
                                <input type="number" required minlength="9" maxlength="50" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Email</h6></label>
                                <input type="email" maxlength="50" name="email2">
                                @error('email2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Jurusan</h6></label>
                                <select class="form-control form-control-lg" name="jurusan_id">
                                    <option value="" holder></option>
                                    @foreach ($jurusan as $result)
                                    <option value="{{ $result->id }}">
                                        {{ $result->jurusan }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('jurusan_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                                <input type="password" required
                                autocomplete="new-password"
                                class="@error('password') is-invalid @enderror" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Password Konfirmasi</h6></label>
                                <input type="password"
                                name="password_confirmation"
                                required autocomplete="new-password"
                                id="exampleInputPassword">
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3 mb-4">
                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn btn-block btn-danger text-center">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div  style="background-color: #ec3732;" class="bg text-white py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. Designed & Developed By <a href="http://informatika.politap.ac.id/" target="_blank"> Teknik
                    Informatika </a> <a href="https://politap.ac.id/" target="_blank">Politeknik Negeri
                    Ketapang</small>
                </div>
            </div>
        </div>
    </div>
</body>


</html>
