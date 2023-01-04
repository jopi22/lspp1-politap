<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/format.min.css')}}">
    <script>
        window.addEventListener("load", window.print());
    </script>
</head>

<body>
    <div class="col-12">
        <div class="card">
            <!-- ----------------------- HEADER  ----------------------- -->
            <div class="card-header">
                <h3 class="card-title font-weight-bold">FR.APL.02. ASESMEN MANDIRI</h3>
            </div>
            <div class="card-body">
                <!-- ----------------------- TABLE 1 - SKEMA ----------------------- -->
                <table class="table table-bordered">
                    <tr>
                        <td style="width: 200px;" rowspan="2">Skema Sertifikasi (KKNI/Okupasi/Klaster)</td>
                        <td style="width: 100px;">Judul DGM</td>
                        <td style="width: 10px;">:</td>
                        <td>{{$validasi->skema_name}}</td>
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                </table><br>
                <!-- ----------------------- TABLE 2 - PANDUAN  ----------------------- -->
                <table class="table table-bordered">
                    <tr>
                        <td class="font-weight-bold" style="background-color: rgb(185, 211, 153);">PANDUAN ASESMEN
                            MANDIRI</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="font-weight-bold">Instruksi: </p>
                            <ul>
                                <li>Baca setiap pertanyaan di kolom sebelah kiri</li>
                                <li>Beri tanda centang (V) pada kotak jika Anda yakin dapat melakukan tugas yang
                                    dijelaskan.</li>
                                <li>Isi kolom di sebelah kanan dengan mendaftar bukti yang Anda miliki untuk menunjukkan
                                    bahwa Anda melakukan tugas-tugas ini.</li>
                            </ul>
                        </td>
                    </tr>
                </table><br>
                <!-- ----------------------- TABLE 3 - UNIT  ----------------------- -->
                <table class="table table-bordered">
                    <tr>
                        <td class="font-weight-bold" style="width: 200px;">Unit Kompetensi:</td>
                        <td></td>
                    </tr>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td class="font-weight-bold" style="width: 650px;">Dapatkah Saya ................?</td>
                            <td class="font-weight-bold" style="width: 40px;">K</td>
                            <td class="font-weight-bold" style="width: 40px;">BK</td>
                            <td class="font-weight-bold">Bukti yang relevan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>1. Elemen :</p>
                                <ul>
                                    <li>Kriteria Unjuk Kerja:</li>
                                    <ul>
                                        <li>1.1</li>
                                    </ul>
                                </ul>

                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p>2. Elemen :</p>
                                <ul>
                                    <li>Kriteria Unjuk Kerja:</li>
                                    <ul>
                                        <li>2.1</li>
                                    </ul>
                                </ul>

                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table><br>
                <!-- ----------------------- TABLE 4 - KETERANGAN  ----------------------- -->
                <table class="table table-bordered">
                    <tr>
                        <td style="width: 400px;"> Nama Asesi:</td>
                        <td style="width: 400px;"> Tanggal:</td>
                        <td style="width: 400px;"> Tanda Tangan Asesi: <br><br><br><br><br></td>
                    </tr>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td class="font-weight-bold" style="background-color: rgb(185, 211, 153);">Ditinjau oleh Asesor:
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td style="width: 400px;"> Nama Asesor:</td>
                        <td style="width: 400px;"> Rekomendasi: Asesmen dapat dilanjutkan/ tidak dapat dilanjutkan
                        </td>
                        <td style="width: 400px;"> Tanda Tangan dan Tanggal: <br><br><br><br><br></td>
                    </tr>
                </table>
                <!-- ----------------------- FOOTER  ----------------------- -->
                <p>Diadaptasi dari template yang disediakan di Departemen Pendidikan dan Pelatihan, Australia. Merancang
                    instrumen asesmen dalam VET. 2008</p>
            </div>
        </div>
    </div>
</body>

</html>
