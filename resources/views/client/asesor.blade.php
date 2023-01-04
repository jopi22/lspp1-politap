@extends('layout.client')
@section('judul')
    Asesor | LSP POLITAP
@endsection

@section('layanan')
    active
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                pagingType: 'full_numbers',
            });
        });
    </script>
@endsection

@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-users"></i> Asesor </h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Konten ***** -->
    <!-- Asesor -->


    <body class="hm-gradient">
        <main>
            <div class="container mt-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <table id="example" class="table table-striped display">
                            <thead>
                                <tr class="header" style="background-color: #c20303c5">
                                    <th style="width:10px; color: #ddd">#</th>
                                    <th style="width:60%; color: #ddd">Nama</th>
                                    <th style="width:40%; color: #ddd">Kode Asesor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asesor as $asu)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $asu->nama }}</td>
                                        <td>{{ $asu->nik }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <!-- ***** Akhir Konten ***** -->
@endsection
