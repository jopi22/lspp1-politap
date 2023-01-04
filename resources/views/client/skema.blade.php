@extends('layout.client')
@section('judul')
    Skema | LSP POLITAP
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
                    <h1>Skema Sertifikasi</h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <br><br>
    <!-- ***** Koten ***** -->

    <body class="hm-gradient">
        <main>
            <div class="container mt-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <table id="example" class="table table-striped display">
                            <thead class="mdb-color darken-3">
                                <tr style="background-color: #c20303c5" class="text-white">
                                    <th>#</th>
                                    <th>Kode Skema</th>
                                    <th>Nama Skema</th>
                                    <th>Lihat Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($skema as $asu)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $asu->kode_skema }}</td>
                                        <td>{{ $asu->skema }}</td>
                                        <td><a href="{{ route('skema_detail', Crypt::encryptString($asu->id)) }}"
                                                class="btn btn-info"><i class="fa fa-search"></i> Lihat</a></td>
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
