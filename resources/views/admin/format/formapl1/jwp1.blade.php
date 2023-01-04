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
                <h3 class="card-title font-weight-bold">FR.APL.01. PERMOHONAN SERTIFIKASI KOMPETENSI</h3><br><br>
                <h4 class="card-title font-weight-bold">Bagian 1 : Rincian Data Pemohon Sertifikasi</h4><br>
                <p>Pada bagian ini, cantumlan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat
                    ini.</p>
            </div>
            <!-- ----------------------- TABLE 1 - BAGIAN 1 ----------------------- -->
            <table class="table" style="border-style: hidden;">
                <tr>
                    <td class="font-weight-bold" style="width: 10px; border-style: hidden;">a.</td>
                    <td class="font-weight-bold" style="width: 300px; border-style: hidden;">Data Pribadi</td>
                    <td style="width: 500px; border-style: hidden;"></td>
                    <td style="width: 300px; border-style: hidden;"></td>
                    <td style="width: 10px; border-style: hidden;"></td>
                    <td style="width: 400px; border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">Nama lengkap</td>
                    <td style="border-style: hidden;">: &nbsp; {{$validasi->user_name}}</td>
                    <td style="border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">No. KTP/NIK/Paspor </td>
                    <td style="border-style: hidden;">: &nbsp; {{$validasi->nim}}</td>
                    <td style="border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">Tempat / tgl. Lahir</td>
                    <td style="border-style: hidden;">: &nbsp; {{$validasi->tmpt_lahir}},&nbsp;{{$validasi->tgl_lahir->format('d-m-Y')}}</td>
                    <td style="border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">Jenis kelamin</td>
                    <td style="border-style: hidden;">: &nbsp; {{$validasi->sex->sex}}</td>
                    <td style="border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">Kebangsaan</td>
                    <td style="border-style: hidden;">: &nbsp; {{$validasi->negara}}</td>
                    <td style="border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">Alamat rumah</td>
                    <td style="border-style: hidden;">: &nbsp; {{$validasi->alamat}}</td>
                    <td style="border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">Kode pos : &nbsp; {{$validasi->kode_post}}</td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">: &nbsp; Rumah : &nbsp; {{$validasi->rmh}}</td>
                    <td style="border-style: hidden;">Kantor : &nbsp; {{$validasi->ktr}}</td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">No. Telepon/E-mail</td>
                    <td style="border-style: hidden;">: &nbsp; HP : &nbsp; {{$validasi->no_hp}} </td>
                    <td style="border-style: hidden;">E-mail :  &nbsp; {{$validasi->surel}}</td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">Kualifikasi Pendidikan </td>
                    <td style="border-style: hidden;">: &nbsp; {{$validasi->tmt}}</td>
                    <td style="border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">*Coret yang tidak perlu</td>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;"></td>
                </tr>
            </table><br>
            <!-- ----------------------- TABLE 2 - BAGIAN 2   ----------------------- -->
            <table class="table" style="border-style: hidden;">
                <tr>
                    <td class="font-weight-bold" style="width: 10px; border-style: hidden;">b.</td>
                    <td class="font-weight-bold" style="width: 300px; border-style: hidden;">Data Pekerjaan Sekarang
                    </td>
                    <td style="width: 500px; border-style: hidden;"></td>
                    <td style="width: 300px; border-style: hidden;"></td>
                    <td style="width: 10px; border-style: hidden;"></td>
                    <td style="width: 400px; border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">Nama Institusi / Perusahaan </td>
                    <td style="border-style: hidden;">:  &nbsp; {{$validasi->institusi}}</td>
                    <td style="border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">Jabatan</td>
                    <td style="border-style: hidden;">:  &nbsp; {{$validasi->jabatan}}</td>
                    <td style="border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">Alamat kantor</td>
                    <td style="border-style: hidden;">:  &nbsp; {{$validasi->alamat_kantor}}</td>
                    <td style="border-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">Kode pos :&nbsp;  &nbsp; {{$validasi->postal}}</td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">No. Telepon/E-mail </td>
                    <td style="border-style: hidden;">: &nbsp; Telp :  &nbsp; {{$validasi->telp}}</td>
                    <td style="border-style: hidden;">Fax :  &nbsp; {{$validasi->fax}}</td>
                </tr>
                <tr>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;"></td>
                    <td style="border-style: hidden;">&nbsp; &nbsp; E-mail :  &nbsp; {{$validasi->email3}}</td>
                    <td style="border-style: hidden;"></td>
                </tr>
            </table><br>

            <div class="card-header">
                <h4 class="card-title font-weight-bold">Bagian 2 : Data Sertifikasi</h4><br>
                <p>Tuliskan Judul dan Nomor Skema Sertifikasi yang anda ajukan berikut Daftar Unit Kompetensi sesuai
                    kemasan pada skema sertifikasi untuk mendapatkan pengakuan sesuai dengan latar belakang
                    pendidikan, pelatihan serta pengalaman kerja yang anda miliki.</p>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td rowspan="2" style="width: 400px;">Skema Sertifikasi (KKNI/Okupasi/Klaster)</td>
                    <td style="width: 200px;"> Judul</td>
                    <td style="width: 10px;">:</td>
                    <td style="width: 800px;">  &nbsp; Junior Web Programemr</td>
                </tr>
                <tr>
                    <td style="width: 200px;">Nomor</td>
                    <td style="width: 10px;">:</td>
                    <td style="width: 800px;">  &nbsp; SS.JWP/LSPP/005/2022 </td>
                </tr>
                <tr>
                    <td rowspan="5" colspan="2" style="width: 400px;">Tujuan Asesmen</td>
                    <td style="width: 10px;"><i class="fas fa-check"></i></td>
                    <td style="width: 800px;">Sertifikasi</td>
                </tr>
                <tr>
                    <td style="width: 10px;"></td>
                    <td style="width: 800px;">Sertifikasi Ulang</td>
                </tr>
                <tr>
                    <td style="width: 10px;"></td>
                    <td style="width: 800px;">Pengakuan Kompetensi Terkini (PKT)</td>
                </tr>
                <tr>
                    <td style="width: 10px;"></td>
                    <td style="width: 800px;">Rekognisi Pembelajaran Lampau</td>
                </tr>
                <tr>
                    <td style="width: 10px;"></td>
                    <td style="width: 800px;">Lainnya</td>
                </tr>
            </table><br>
            <!-- ----------------------- TABLE 3 - UNIT   ----------------------- -->
            <div class="card-header"><br>
                <h5 class="card-title font-weight-bold">Daftar Unit Kompetensi sesuai kemasan: </h5><br>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td align="center" class="font-weight-bold" style="width: 10px;">No.</td>
                        <td align="center" class="font-weight-bold" style="width: 400px;">Kode Unit</td>
                        <td align="center" class="font-weight-bold" style="width: 700px;">Judul Unit</td>
                        <td align="center" class="font-weight-bold" style="width: 200px;">Jenis Standar (Standar
                            Khusus/Standar Internasional/SKKNI)</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>J.620100.004.02 </td>
                        <td>Menggunakan Struktur Data</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>J.620100.005.02 </td>
                        <td>Mengimplementasikan User Interface</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>J.620100.011.01 </td>
                        <td>Melakukan instalasi Software Tools Pemrograman</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>J.620100.016.01 </td>
                        <td>Menulis Kode dengan Prinsip Sesuai Guidelines dan Best Practices</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>J.620100.017.02 </td>
                        <td>Mengimplementasikan Pemrograman Terstruktur</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>J.620100.019.02 </td>
                        <td>Menggunakan Library atau Komponen Pre-Existing</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>J.620100.023.02 </td>
                        <td>Membuat Dokumen Kode Program</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>J.620100.025.02 </td>
                        <td>Melakukan Debugging</td>
                        <td></td>
                    </tr>
                </tbody>
            </table><br>
            <!-- ----------------------- TABLE 4 - BAGIAN 3   ----------------------- -->
            <div class="card-header"><br>
                <h4 class="card-title font-weight-bold">Bagian 3 : Bukti Kelengkapan Pemohon </h4><br>
                <p>Bukti Persyaratan Dasar Pemohon</p>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="font-weight-bold" align="center" style="width: 10px;" rowspan="2">No.</td>
                        <td class="font-weight-bold" align="center" style="width: 700px;" rowspan="2">Bukti
                            Persyaratan Dasar</td>
                        <td class="font-weight-bold" align="center" colspan="2">Ada</td>
                        <td class="font-weight-bold" align="center" style="width: 200px;" rowspan="2">Tidak Ada
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" align="center" style="width: 200px;">Memenuhi Syarat </td>
                        <td class="font-weight-bold" align="center" style="width: 200px;">Tidak Memenuhi Syarat
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($validasi->upload_files as $asu)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$asu->name}}</td>
                            <td align="center">{!!$asu->y!!}</td>
                            <td align="center">{!!$asu->n!!}</td>
                            <td align="center">{!!$asu->z!!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table><br>
            <!-- ----------------------- TABLE 5 - PENUTUP   ----------------------- -->
            <table class="table table-bordered">
                <tr>
                    <td style="width: 500px;" rowspan="3">
                        <p class="font-weight-bold">Rekomendasi (diisi oleh LSP):</p>
                        <p>Berdasarkan ketentuan persyaratan dasar, maka pemohon:</p>
                        <p class="font-weight-bold">Diterima/ <del>Tidak diterima</del> *)</p>
                        <p>sebagai peserta sertifikasi* coret yang tidak sesuai</p>
                    </td>
                    <td class="font-weight-bold" colspan="2">Pemohon/ Kandidat :</td>
                </tr>
                <tr>
                    <td style="width: 300px;">Nama</td>
                    <td style="width: 300px;">{{$validasi->user_name}}</td>
                </tr>
                <tr>
                    <td>Tanda tangan/Tanggal
                        <br><br><br><br><br>
                    </td>
                    <td align="right">
                        Ketapang, {{$validasi->updated_at->format('d-m-Y')}}
                    </td>
                </tr>
            </table>
            <table class="table table-bordered">
                <tr>
                    <td  class="font-weight-bold" rowspan="5">Catatan :
                        <p></p>
                    </td>
                    <td class="font-weight-bold"  colspan="2">Admin LSP :</td>
                </tr>
                <tr>
                    <td style="width: 300px;">Nama</td>
                    <td style="width: 300px;">{{Auth::user()->name}}</td>
                </tr>
                <tr>
                    <td style="width: 300px;">No. Reg</td>
                    <td style="width: 300px;"></td>
                </tr>
                <tr>
                    <td style="width: 300px;">Tanda tangan/Tanggal
                        <br><br><br><br><br>
                    </td style="width: 300px;">
                    <td style="width: 300px;" align="RIGHT">
                        Ketapang, {{$validasi->updated_at->format('d-m-Y')}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
