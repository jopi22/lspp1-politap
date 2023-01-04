<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/format.min.css') }}">
    <script>
        window.addEventListener("load", window.print());
    </script>
</head>

<body>
    <div class="col-12">
        <div class="card">
            <!-- ----------------------- HEADER  ----------------------- -->
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Rekap Pendaftaran Sertifikasi Skema</h3><br>
                <h3 class="card-title font-weight-bold">Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</h3>
            </div>
            <div class="card-body">
                <p class="font-weight-bold">Data Sertifikasi</p>
                <table class="table table-bordered">
                    <tr>
                        <td style="width: 600px" class="text-muted">Kode Registrasi </td>
                        <td style="width: 1000px">{{ $validasi->id }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Skema yang Diambil </td>
                        <td style="width: 1000px">{{ $validasi->skema_name }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Kode Skema </td>
                        <td style="width: 1000px">{{ $validasi->kode_skema }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Tujuan Sertifikasi </td>
                        <td style="width: 1000px">{{ $validasi->jenis }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Tanggal Mendaftar </td>
                        <td style="width: 1000px">{{ $validasi->created_at->format('d-M-Y') }}</td>
                    </tr>
                </table><br>
                <p class="font-weight-bold">Data Pribadi</p>
                <table class="table table-bordered">
                    <tr>
                        <td style="width: 600px" class="text-muted">Nama Asesi</td>
                        <td style="width: 1000px">{{ $validasi->user_name }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">NIM</td>
                        <td style="width: 1000px">{{ $validasi->nim }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Tempat Lahir</td>
                        <td style="width: 1000px">{{ $validasi->tmpt_lahir }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Tanggal Lahir</td>
                        <td style="width: 1000px">{{ $validasi->tgl_lahir->format('d-M-Y') }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Jenis Kelamin</td>
                        <td style="width: 1000px">{{ $validasi->sex->sex }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Kewarganegaraan</td>
                        <td style="width: 1000px">{{ $validasi->negara }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Alamat</td>
                        <td style="width: 1000px">{{ $validasi->alamat }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Kode Post</td>
                        <td style="width: 1000px">{{ $validasi->kode_post }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Email</td>
                        <td style="width: 1000px">{{ $validasi->surel }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Nomor Handphone</td>
                        <td style="width: 1000px">{{ $validasi->no_hp }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">No Telp Rumah</td>
                        <td style="width: 1000px">{{ $validasi->rmh }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">No Telp Kantor</td>
                        <td style="width: 1000px">{{ $validasi->ktr }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Pendidikan Terakhir</td>
                        <td style="width: 1000px">{{ $validasi->tmt }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Jurusan</td>
                        <td style="width: 1000px">{{ $validasi->jurusan->jurusan }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Semester Kuliah</td>
                        <td style="width: 1000px">{{ $validasi->semester->semester }}</td>
                    </tr>
                </table><br>
                <p class="font-weight-bold">Data Pekerjaan Sekarang</p>
                <table class="table table-bordered">
                    <tr>
                        <td style="width: 600px" class="text-muted">Nama Institusi/Perusahaan</td>
                        <td style="width: 1000px">{{ $validasi->institusi }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Jabatan</td>
                        <td style="width: 1000px">{{ $validasi->jabatan }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Alamat Kantor</td>
                        <td style="width: 1000px">{{ $validasi->alamat_kantor }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">Kode Post Kantor</td>
                        <td style="width: 1000px">{{ $validasi->postal }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">No Telp Kantor</td>
                        <td style="width: 1000px">{{ $validasi->telp }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">No Telp Kantor</td>
                        <td style="width: 1000px">{{ $validasi->email3 }}</td>
                    </tr>
                    <tr>
                        <td style="width: 600px" class="text-muted">No Fax Kantor</td>
                        <td style="width: 1000px">{{ $validasi->fax }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
