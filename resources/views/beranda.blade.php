@extends('layout.client')
@section('judul')
    LSP Politeknik Negeri Ketapang
@endsection

@section('home')
    active
@endsection

@section('isi')
    <!-- ***** Bagian Konten Dimulai ***** -->
    <!-- Banner  -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            @foreach ($carousel as $asu)
                <div class="item item-1">
                    <div style="background-image: url('{{ asset($asu->image) }}')" class="img-fill">
                        {{-- <div class="text-content">
                        <h6>we are ready to help you</h6>
                        <h4>Financial Analysis<br>&amp; Consulting</h4>
                        <p>This finance HTML template is 100% free of charge provided by TemplateMo for everyone. This
                            is a multiple-page version with different HTML pages. <a href="one-page.html">One-page
                                version</a> is available as of 2021 February.</p>
                        <a href="contact.html" class="filled-button">contact us</a>
                    </div> --}}
                    </div>
                </div>
            @endforeach
            <!-- // Item -->
        </div>
    </div>

    <!-- Request -->
    <div class="request-form">
        <div class="container">
            @if (Auth::user())
                <div class="row">
                    <div class="col-md-8">
                        <h4>Selamat Bergabung, {{ Auth::user()->name }}....</h4>
                        <span>Formulir pengisian biodata registrasi disertai bukti lengkap secara online. </span>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('profil.edit2') }}" class="border-button">Daftar Sertifikasi</a>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-8">
                        <h4>Ayo Tingkatkan Kualitas Skill
                            Anda Bersama Kami</h4>
                        <span>Sebelum mendaftar sertifikasi pastikan anda telah memiliki akun terlebih dahulu...</span>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('reg') }}" class="border-button">Buat Akun anda</a>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Tentang -->
    <div class="more-info">
        <div class="container">
            <div class="section-heading">
                <h2>Tentang LSP-POLITAP<em></em></h2>
                <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-content">
                                    <span>Lembaga Sertifikasi Profesi Pihak Kesatu Politeknik Negeri Ketapang</span>
                                    <ul class="u-custom-font u-font-arial u-text u-text-2"
                                        data-animation-name="customAnimationIn" data-animation-duration="1000">
                                        <li> Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga
                                            sertifikasi profesi yang telah memperoleh sertifikat lisensi No.
                                            BNSP-LSP-1214-ID dari
                                            Badan Nasional Sertifikasi Profesi
                                            (BNSP). dan memiliki Nomor SK
                                            KEP. 0429/BNSP/IV/2018.</li><br>
                                        <li>Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema
                                            yang
                                            dimiliki LSP&nbsp; Politeknik Negeri Ketapang diselaraskan dengan Kerangka
                                            Kualifikasi
                                            Nasional Indonesia (KKNI) dan Standar Kualifikasi Kerja
                                            Nasional Indonesia (SKKNI).&nbsp; </li><br>
                                        <li>
                                            Memiliki
                                            10 skema, LSP&nbsp; Politeknik Negeri Ketapang siap melaksanakan uji
                                            kompetensi
                                            pada seluruh
                                            mahasiswa Politeknik Negeri Ketapang dari berbagai program
                                            studi dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang
                                            memiliki kompetensi mumpuni sesuai bidangnya dan memiliki nilai lebih di
                                            pasar tenaga kerja
                                            baik
                                            nasional maupun Internasional.
                                        </li><br>
                                    </ul>
                                    <a href="{{ route('tentang') }}" class="filled-button">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Berita -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Berita Terkini<em></em></h2>
                        <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
                    </div>
                </div>
                @foreach ($artikel as $asu)
                    <div class="col-md-4">
                        <div class="service-item">
                            <img src="{{ asset($asu->image) }}" alt="">
                            <div class="down-content">
                                <h4> {{ $asu->title }}</h4>
                                <p> {{ $asu->excerpt }} </p>
                                <a href="{{ route('berita_detail', Crypt::encryptString($asu->id)) }}"
                                    class="filled-button">selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Layanan -->
    <div style="background-image: url('{{ asset('general/assets/images/back1.jpg') }}')" class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-content">
                        <h2>Layanan yang tersedia <br><em></em></h2>
                        <p>
                            Dalam melaksanakan tugas dan fungsi LSP P1-POLITAP mengacu pada pedoman yang dikeluarkan oleh BNSP. Dalam pedoman tersebut ditetapkan persyaratan yang harus dipatuhi untuk menjamin agar lembaga sertifikasi menjalankan sistem sertifikasi secara konsisten dan profesional, sehingga dapat diterima di tingkat nasional yang relevan demi kepentingan pengembangan sumber daya manusia dalam aspek peningkatan kualitas dan perlindungan tenaga kerja.
                        </p>                        
                        {{-- <a href="{{ route('client_skema') }}" class="filled-button">Selengkapnya</a> --}}
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <p>
                        Saat ini LSP P1-POLITAP memiliki :
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('client_skema') }}">
                                <div class="count-area-content">
                                    <div class="count-digit">{{ $dataskema }}</div>
                                    <div class="count-title">Skema</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('client_tuk') }}">
                                <div class="count-area-content">
                                    <div class="count-digit">{{ $datatuk }}</div>
                                    <div class="count-title">TUK</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('client_asesor') }}">
                                <div class="count-area-content">
                                    <div class="count-digit">{{ $dataasesor }}</div>
                                    <div class="count-title">Asesor</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">{{ $dataasesi }}</div>
                                <div class="count-title">Asesi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengelola -->
    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Pengelola LSP-POLITAP<em> </em></h2>
                        <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
                    </div>
                </div>
                @foreach ($karyawan as $asu)
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="{{ $asu->image }}" alt="Avatar" style="width:230px; margin: 12px">
                            </div>
                            <div class="flip-card-back">
                                <br><br><br><br>
                                <img src="{{ $asu->image }}" width="70px" alt="">
                                <p class="text-white">{{ $asu->nama }}</p>
                                <p class="text-white">{{ $asu->keterangan }}</p>
                            </div>
                        </div>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @endforeach
            </div>
        </div>
    </div>

    {{-- <div class="callback-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Request a <em>call back</em></h2>
                        <span>Etiam suscipit ante a odio consequat</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject"
                                            placeholder="Subject" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="border-button">Send
                                            Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Lembaga Tertaut -->
    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Lembaga Tertaut<em> </em></h2>
                        <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
                    </div>
                    <table class="table">
                        <tr>
                            <td align="center" style="width: 200px"><a href="https://bnsp.go.id/" target="_blank"
                                    rel="noopener noreferrer"><img src="{{ asset('general/assets/images/bnsp.png') }}"
                                        height="100px"></a>
                            </td>
                            <td align="center" style="width: 200px"><a href="https://www.kemdikbud.go.id/"
                                    target="_blank" rel="noopener noreferrer"><img
                                        src="{{ asset('general/assets/images/kemendikbud_small.png') }}"
                                        height="100px"></a></td>
                            <td align="center" style="width: 200px"><a href="https://politap.ac.id/" target="_blank"
                                    rel="noopener noreferrer"><img
                                        src="{{ asset('general/assets/images/politap_small.png') }}"
                                        height="100px"></a>
                            </td>
                            <td align="center" style="width: 200px"><a href="{{ route('/') }}"><img
                                        src="{{ asset('general/assets/images/lsp_small.jpg') }}" height="100px"></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ***** Bagian Akhir Konten ***** -->
@endsection
