@extends('layout.client')
@section('judul')
    Prosedur Sertifikasi | LSP POLITAP
@endsection

@section('layanan')
    active
@endsection

@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-pencil-square"></i> Prosedur Pendaftaran Sertifikasi </h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Konten ***** -->
    <!-- Gambar -->
    <div id="logo" class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="col-md-8 align-self-center">
                        </div>
                        <div class="col-md-12">
                            @foreach ($tutorial2 as $asu)
                                @if ($asu->image)
                                    <embed src="{{ asset($asu->image) }}" width="100%" height="700px"
                                        type="application/pdf">
                                @else
                                    <h1>Tidak Ada File</h1>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <!-- Video -->
    <div id="logo" class="more-info about-info">
        <div class="container">
            <div class="section-heading">
                @foreach ($tutorial as $asu)
                    <a href="{!! $asu->keterangan !!}" target="_blank" rel="noopener noreferrer">
                        <h2 style="color: blue; font-style: italic">Video Tutorial <em>Pendaftaran Sertifikasi </em></h2>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <br><br><br>
    <!-- ***** Akhir Konten ***** -->
@endsection
