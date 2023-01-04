-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 02:05 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `asesor`
--

CREATE TABLE `asesor` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama` varchar(75) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `no_hp` varchar(20) DEFAULT NULL,
  `skema` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asesor`
--

INSERT INTO `asesor` (`id`, `nik`, `nama`, `image`, `alamat`, `sex`, `email`, `status`, `updated_at`, `created_at`, `no_hp`, `skema`) VALUES
(1, '-', '-', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', NULL, NULL),
(24, 'MET.000.010629 2017', 'Adha Panca Wardanu, S.TP., M.P', NULL, '-', 'Laki-laki', 'cino7130@gmail.com', 'Aktif', '2022-07-03 10:27:13.000000', '2022-07-03 17:27:13.598353', '034529', '-'),
(25, 'MET.000.009812 2021', 'Ahmad Ravi, S.Pd., M.Pd', NULL, 'Luwu Utara, Sulawesi Selatan', NULL, NULL, 'Aktif', '2022-06-24 01:45:49.000000', '2022-06-24 08:45:49.214812', NULL, NULL),
(26, 'MET.000.004633 2020', 'Alfath Desita Jumiar, S.P., M.Si', NULL, 'Kota Pontianak, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:46:51.000000', '2022-06-24 08:46:51.168584', NULL, NULL),
(27, 'MET.000.010618 2017', 'Ar-Razy Muhammad, S.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:47:19.000000', '2022-06-24 08:47:19.457959', NULL, NULL),
(28, 'MET.000.010613 2017', 'Beny Setiawan, S.Tp., M.P', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:47:59.000000', '2022-06-24 08:47:59.462946', NULL, NULL),
(29, 'MET.000.009818 2021', 'Darmanto, S.Kom., M.Kom', NULL, 'Lamandau, Kalimantan Tengah', NULL, NULL, 'Aktif', '2022-06-24 01:48:39.000000', '2022-06-24 08:48:39.058245', NULL, NULL),
(30, 'MET.000.009815 2021', 'Erick Radwitya, S.S.T., M.T', NULL, 'sddsds', 'Laki-laki', 'cino7130ds@gmail.com', 'Aktif', '2022-07-22 05:03:57.000000', '2022-07-22 12:03:57.590140', '082150040132', 'Teknik Seribu Bayangan'),
(31, 'MET.000.009816 2021', 'Fachrul Rozie, S.T., M.Tr.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:49:54.000000', '2022-06-24 08:49:54.065927', NULL, NULL),
(32, 'MET.000.009813 2021', 'Firmanilah Kamil, S.Pd., M.Pd', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:51:47.000000', '2022-06-24 08:51:47.995468', NULL, NULL),
(34, 'MET.000.010619 2017', 'Irfan Cholid, S.P., M.MA', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:54:17.000000', '2022-06-24 08:54:17.968855', NULL, NULL),
(35, 'MET.000.009819 2021', 'Kharisma, S.Kom., M.Kom', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:54:48.000000', '2022-06-24 08:54:48.944209', NULL, NULL),
(36, 'MET.000.009824 2021', 'Maya Santi, S.Pd., M.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:55:19.000000', '2022-06-24 08:55:19.401027', NULL, NULL),
(37, 'MET.000.009821 2021', 'Nenengsih Verawati, S.TP., M.P', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:55:54.000000', '2022-06-24 08:55:54.633013', NULL, NULL),
(38, 'MET.000.009820 2021', 'Rosmalinda, S.ST., M.P', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:56:23.000000', '2022-06-24 08:56:23.286903', NULL, NULL),
(39, 'MET.000.010604 2017', 'Saifudin Usman, S.T., M.Tr.Kom', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:56:55.000000', '2022-06-24 08:56:55.623026', NULL, NULL),
(40, 'MET.000.010608 2017', 'Venti Jatsiyah, S.P., M.Si', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:57:39.000000', '2022-06-24 08:57:39.193338', NULL, NULL),
(41, 'MET.000.009814 2021', 'Yudi Chandra, S.ST., M.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:58:21.000000', '2022-06-24 08:58:21.279745', NULL, NULL),
(42, 'MET.000.010614 2017', 'Yusuf, S.ST., M.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:58:49.000000', '2022-06-24 08:58:49.705848', NULL, NULL),
(43, 'MET.000.009817 2021', 'M. Jimi Rizaldi, S.ST., M.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:59:53.000000', '2022-06-24 08:59:53.499269', NULL, NULL),
(44, 'MET.000.010609 2017', 'Encik Eko Rifkowaty, S.TP., M.P', NULL, 'Kota Pontianak, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 02:00:39.000000', '2022-06-24 09:00:39.218082', NULL, NULL),
(45, 'MET.000.01512 2022', 'Eka Wahyudi, S.Pd., M.Cs', NULL, NULL, 'Laki-laki', NULL, 'Aktif', '2022-06-24 02:01:25.000000', '2022-06-24 09:01:25.436973', NULL, NULL),
(46, 'MET.OOO.008402 2021', 'A. Nova Zulfahmi, S.Pi., M.Sc', NULL, NULL, 'Laki-laki', NULL, 'Aktif', '2022-06-24 02:02:59.000000', '2022-06-24 09:02:59.333408', NULL, NULL),
(47, 'MET.000.008401 2021', 'Budi Pratomo Sibuea, S.ST., M.ST', NULL, NULL, 'Laki-laki', NULL, 'Aktif', '2022-06-24 02:03:33.000000', '2022-06-24 09:03:33.979241', NULL, NULL),
(49, 'MET.000.009823 2021', 'M. Iwan Toro, A.Md', NULL, NULL, 'Laki-laki', NULL, 'Aktif', '2022-06-24 02:04:30.000000', '2022-06-24 09:04:30.622465', NULL, NULL),
(50, 'MET.000.004637 2020', 'Novi Indah Pradasari, S.Kom., M.Kom', NULL, NULL, 'Perempuan', NULL, 'Aktif', '2022-06-24 02:07:20.000000', '2022-06-24 09:07:20.366150', NULL, NULL),
(51, 'MET.000.004642 2020', 'Sartika, S.Si., M.T', NULL, NULL, NULL, NULL, 'Aktif', '2022-06-24 02:07:50.000000', '2022-06-24 09:07:50.930562', NULL, NULL),
(52, 'MET.000.004645 2020', 'Sy. Indra Septiansyah, S.Si., M.T', NULL, NULL, NULL, NULL, 'Aktif', '2022-06-24 02:08:27.000000', '2022-06-24 09:08:27.711489', NULL, NULL),
(53, 'MET.000.004643 2020', 'Syarifah Aqla, S.Pd., M.T', NULL, NULL, NULL, NULL, 'Aktif', '2022-06-24 02:09:18.000000', '2022-06-24 09:09:18.147761', NULL, NULL),
(54, 'MET.000.004644 2020', 'Firman, S.Pd., M.P.Fis', NULL, NULL, NULL, NULL, 'Aktif', '2022-06-24 02:09:54.000000', '2022-06-24 09:09:54.330513', NULL, NULL),
(61, 'MET.000.010610 2017', 'Halimansyah, A.Md', NULL, NULL, NULL, NULL, 'Aktif', '2022-07-25 03:04:14.000000', '2022-07-25 03:04:14.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Skema', 'uploads/info/16563141241655040701index.png', '2022-06-27 00:15:24.000000', '2022-06-27 07:15:24.820887'),
(2, 'TUK', 'uploads/info/16563145261655040767WhatsApp Image 2022-03-10 at 16.14.59.jpeg', '2022-06-27 00:22:06.000000', '2022-06-27 07:22:06.496930');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(5) UNSIGNED NOT NULL,
  `kategori_id` int(5) NOT NULL,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `kategori_id`, `title`, `excerpt`, `body`, `image`, `status`, `updated_at`, `created_at`) VALUES
(46, 1, 'Lembaga Sertifikasi Profesi Pihak Kesatu Politeknik Negeri Ketapang', 'Lembaga Sertifikasi Profesi Pihak Kesatu Politekni', '<p><span>Lembaga Sertifikasi Profesi Pihak Kesatu Politeknik Negeri Ketapang</span>\r\n                                    </p><ul class=\"u-custom-font u-font-arial u-text u-text-2\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1000\"><li> Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga\r\n                                            sertifikasi profesi yang telah memperoleh sertifikat lisensi No.\r\n                                            BNSP-LSP-1214-ID dari\r\n                                            Badan Nasional Sertifikasi Profesi\r\n                                            (BNSP). dan memiliki Nomor SK\r\n                                            KEP. 0429/BNSP/IV/2018.</li><br><li>Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema\r\n                                            yang\r\n                                            dimiliki LSP&nbsp; Politeknik Negeri Ketapang diselaraskan dengan Kerangka\r\n                                            Kualifikasi\r\n                                            Nasional Indonesia (KKNI) dan Standar Kualifikasi Kerja\r\n                                            Nasional Indonesia (SKKNI).&nbsp; </li><br><li>\r\n                                            Memiliki\r\n                                            10 skema, LSP&nbsp; Politeknik Negeri Ketapang siap melaksanakan uji\r\n                                            kompetensi\r\n                                            pada seluruh\r\n                                            mahasiswa Politeknik Negeri Ketapang dari berbagai program\r\n                                            studi dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang\r\n                                            memiliki kompetensi mumpuni sesuai bidangnya dan memiliki nilai lebih di\r\n                                            pasar tenaga kerja\r\n                                            baik\r\n                                            nasional maupun Internasional.\r\n                                        </li></ul>', 'uploads/berita/165705014616553907293-min.jpg', '<label class=\"badge badge-info\">Posting</label>', '2022-07-05 13:09:45', '2022-07-05 12:42:26'),
(47, 1, 'Layanan LSP POLITAP', 'Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang(LSP-POLITAP) adalah lembaga pendukung BNSP...', '<div class=\"entry-content\">\r\n\r\n      <p>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang(LSP-POLITAP) adalah lembaga pendukung BNSP yang bertanggung jawab \r\nmelaksanakan sertifikasi kompetensi profesi.</p>\r\n\r\n<p>LSP P1-POLITAPdibentuk dengan Surat Keputusan Direktur Politeknik \r\nNegeri Jember Nomor: 7730/PL.17/SK/OT/2014 tanggal 12 September 2014. \r\nDalam pembentukkanya LSP P1-POLITAP mendapat dukungan dari Pemerintah \r\nmelalui Direktorat Jenderal Pendidikan Tinggi Kementerian Pendidikan dan\r\n Kebudayaan.</p>\r\n\r\n<p>Dalam melaksanakan tugas dan fungsi LSP P1-POLITAP mengacu pada \r\npedoman yang dikeluarkan oleh BNSP. Dalam pedoman tersebut ditetapkan \r\npersyaratan yang harus dipatuhi untuk menjamin agar lembaga sertifikasi \r\nmenjalankan sistem sertifikasi secara konsisten dan profesional, \r\nsehingga dapat diterima di tingkat nasional yang relevan demi \r\nkepentingan pengembangan sumber daya manusia dalam aspek peningkatan \r\nkualitas dan perlindungan tenaga kerja.</p>\r\n\r\n<p>Saat ini LSP P1-POLIJE memiliki :</p>\r\n\r\n<ol><li>Skema sejumlah 10 skema</li><li>Asesor sejumlah 30 asesor</li><li>TUK (tempat uji kompetensi) sejumlah 8 TUK</li></ol>\r\n      </div>', 'uploads/berita/1658507375VOgFySD.jpeg', '<label class=\"badge badge-info\">Posting</label>', '2022-07-22 09:29:35', '2022-07-05 12:49:14'),
(48, 1, 'Junior Web Developer', 'Skema sertifikasi Junior Web Developer adalah skema sertifikasi yang  dikembangkan oleh Komite......', '<div class=\"entry-content\">\r\n		\r\n<p>Skema sertifikasi Junior Web Developer adalah skema sertifikasi yang&nbsp;\r\n dikembangkan oleh Komite Skema LSP Teknologi Informatika memenuhi \r\nkebutuhan sertifikasi kompetensi kerja di LSP Teknologi Informatika. \r\nKemasan yang digunakan mengacu pada Standar Kompetensi Kerja Nasional \r\nIndonesia berdasarkan Keputusan Menteri Ketenagakerjaan Republik \r\nIndonesia Nomor 282 Tahun 2016 Skema sertifikasi ini digunakan sebagai \r\nacuan pada pelaksanaan assesmen oleh Asesor kompetensi LSP Teknologi \r\nInformatika dan memastikan kompetensi pada jabatan Junior Web Developer.</p>\r\n\r\n\r\n\r\n<p>Jenis Skema &nbsp; : <s>KKNI </s>/ Okupasi / <s>Klaster</s></p>\r\n\r\n\r\n\r\n<p>Nama Skema : Junior Web Developer</p>\r\n\r\n\r\n\r\n<p>Rincian Unit Kompetensi :<strong></strong></p>\r\n\r\n\r\n\r\n<figure class=\"wp-block-table\"><table><thead><tr><td><strong>NO</strong></td><td><strong>KODE UNIT</strong></td><td><strong>JUDUL UNIT KOMPETENSI</strong><strong></strong></td></tr></thead><tbody><tr><td>1</td><td>J.620100.005.02&nbsp;</td><td>Mengimplementasikan user interface</td></tr><tr><td>2</td><td>J.620100.010.01</td><td>Menerapkan perintah eksekusi bahasa pemrograman berbasis teks, grafik, dan multimedia</td></tr><tr><td>3</td><td>J.620100.015.01</td><td>Menyusun fungsi, file atau sumber daya pemrograman yang lain dalam organisasi yang rapi</td></tr><tr><td>4</td><td>J.620100.016.01&nbsp;</td><td>Menulis kode dengan prinsip sesuai guidelines dan best practices</td></tr><tr><td>5</td><td>J.620100.017.02&nbsp;</td><td>Mengimplementasikan pemrograman terstruktur</td></tr><tr><td>6</td><td>J.620100.019.02&nbsp;</td><td>Menggunakan library atau komponen pre-existing</td></tr></tbody></table></figure>\r\n\r\n\r\n\r\n<ul><li><strong>Persyaratan Dasar Pemohon Sertifikasi</strong><ol><li>Minimal Pemegang Sertifikat Pelatihan bidang Web Developer, atau;</li><li>Peserta Didik SMK/MAK Kelas XII Jurusan RPL, kompetensi&nbsp; sesuai Skema Web Developer junior, atau;</li><li>SMA<strong>/</strong>MA Sederajat memiliki Sertifikat Pelatihan bidang Web Developer, atau;</li><li>Mahasiswa&nbsp; Semester IV Program Studi Ilmu Komputer sesuai bidang web developer, atau;</li><li>Lulusan Diploma/Sarjana yang memiliki Sertifikat Pelatihan bidang web developer, atau;</li><li>Pekerja Profesional di bidang Pengembangan Web Developer minimal 1 Tahun pengalaman.</li></ol></li></ul>\r\n\r\n			</div><p></p>', 'uploads/berita/1658507229M16-JUNIOR-WEB-DEVELOPER-COURSE.jpg', '<label class=\"badge badge-info\">Posting</label>', '2022-07-22 09:27:09', '2022-07-05 12:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `judul`, `keterangan`, `image`, `updated_at`, `created_at`) VALUES
(77, NULL, NULL, 'uploads/carousel/1658508635IMG_0136.JPG', '2022-07-22 09:50:35.000000', '2022-07-22 16:50:35.881049'),
(78, NULL, NULL, 'uploads/carousel/1658508618IMG_0149.JPG', '2022-07-22 09:50:18.000000', '2022-07-22 16:50:18.849524'),
(79, NULL, NULL, 'uploads/carousel/165704977916567587716-min.png', '2022-07-05 12:36:19.000000', '2022-07-05 12:36:19.000000');

-- --------------------------------------------------------

--
-- Table structure for table `cek_pendaftarans`
--

CREATE TABLE `cek_pendaftarans` (
  `5` bigint(20) UNSIGNED NOT NULL,
  `cek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_registers`
--

CREATE TABLE `data_registers` (
  `id` bigint(20) NOT NULL,
  `skema_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmpt_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `sex_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_post` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `nim` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asesor_id` int(11) DEFAULT NULL,
  `tuk_id` bigint(20) DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_skema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_skema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koreksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rmh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institusi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_kantor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_registers_backup`
--

CREATE TABLE `data_registers_backup` (
  `id` bigint(20) NOT NULL,
  `skema_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmpt_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `sex_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_post` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `nim` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asesor_id` int(11) DEFAULT NULL,
  `tuk_id` bigint(20) DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_skema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_skema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koreksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rmh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institusi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_kantor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen__uploads`
--

CREATE TABLE `dokumen__uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokumen__uploads`
--

INSERT INTO `dokumen__uploads` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Photo Identitas', '2022-05-05 17:06:57', '2022-07-05 05:59:53'),
(2, 'Kartu Tanda Penduduk', '2022-05-05 17:06:57', '2022-05-05 17:06:57'),
(3, 'Kartu Tanda Mahasiswa', '2022-05-05 17:07:37', '2022-05-05 17:07:37'),
(4, 'Kartu Hasil Studi', '2022-05-05 17:07:37', '2022-05-05 17:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `elemen`
--

CREATE TABLE `elemen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unikom_id` int(5) UNSIGNED NOT NULL,
  `asesmen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kriteria` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `elemen`
--

INSERT INTO `elemen` (`id`, `unikom_id`, `asesmen`, `kriteria`, `created_at`, `updated_at`) VALUES
(49, 80, 'Menyiapkan Fasilitas Pengelasan', '<p>1.1 Alat Pelindung diri, consummable materials dan perlatan pengelasandi idenfitikasi</p><p>1.2 Alat pelindung diri / PPE diidentifikasi dan diterapkan berdasarkan SOP</p><p>1.3 Jenis dan ukuran bahan dan elektroda las</p><p>1.4 Perlatan utama dan pendukung disiapkan berdasarkan tuntunan pekerja atau WPS<br></p><p><br></p>', '2022-05-09 00:56:38', '2022-05-09 16:15:51'),
(50, 80, 'Melaksanakan pengelasan pipa pada posisis sumbu miring tidak dapat diputar', '<p>2.1 karakteristik mesin las dan teknik pengelasan dipahami sesuai dengan kebutuhan pengelasan</p><p>2.2 besarnya arus listrik diatur berdasarkan jenis dan ukuran elektroda las yang digunakan atau WPS yang di tentukan</p><p>2.3 Las Cantum ( tack weld ) dibuat dengan ukuran dan jumlah sesuai dengan ukuran bahan yang dilas</p><p>2.4 pengelasan pipa pada pelat posisi sumbu miring tidak dapat diputar didemonstrasikan sesuai dengan teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3</p><p>2.5 pengelasan Pipa sambungan tumpul kampuh V posisi sumbu miring tidak dapat diputar di demonstrasikan sesuai dengan Teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3<br></p>', '2022-05-09 01:14:47', '2022-05-09 01:14:47'),
(51, 80, 'Melakasanakan pemeriksaan hasil pengelasan secara visual', '<p>3.1 Alat uji dan alat ukur hasil pengelasan diidentifikasi disiapkan dan diperiksa fungsi dan validasinnya</p><p>3.2 Seluruh hasil pengelasan diperiksa secara visual dan dibandingkan dengan standar baku</p><p>3.3 Hasil pemeriksaan visual disimpulkan dan ditafsirkan</p><p>3.4 Perbaikan hasil las (bila diperlukan) dilakukan secara SOP<br></p>', '2022-05-09 01:18:16', '2022-05-09 01:18:16'),
(52, 80, 'Melaporkan hasil pengelasan', '<p>4.1 Instrumen Pengamatan proses dan pengukuran hasil las ( WPQR ) dipahami</p><p>4.2 Data hasil pengamatan dan pengukuran diinput dalam instrumen</p><p>4.3 Laporan hasil pengamatan dan pengukuran diserahkan kepada yang berhak sesuai dengan SOP<br></p>', '2022-05-09 01:21:02', '2022-05-09 01:21:02'),
(58, 109, 'Mengidentifikasi  konsep data dan struktur data', '<p>1.1 Konsep data dan struktur data diidentifikasi sesuai dengan konteks permasalahan.<br>1.2 Alternatif struktur data dibandingkan kelebihan dan kekurangannya untuk konteks permasalahan yang diselesaikan.<br></p>', '2022-05-11 13:11:52', '2022-05-11 13:11:52'),
(59, 109, 'Menerapkan struktur data dan akses terhadap struktur data tersebut', '2.1 Struktur data diimplementasikan sesuai dengan bahasa pemrograman yang akan dipergunakan.<br>2.2 Akses terhadap data dinyatakan dalam algoritma yang efisiensi sesuai bahasa pemrograman yang akan dipakai. <br>', '2022-05-11 13:13:11', '2022-05-11 13:13:11'),
(60, 110, 'Mengidentifikasi rancangan user interface', '<p>1.1 Rancangan user interface diidentifikasi sesuai kebutuhan. <br>1.2 Komponen user interface dialog diidentifikasi sesuai konteks rancangan proses.<br>1.3 Urutan dari akses komponen user interface dialog dijelaskan.<br>1.4 Simulasi (mock-up) dari aplikasi yang akan dikembangkan dibuat. <br></p>', '2022-05-11 13:14:49', '2022-05-11 13:14:49'),
(61, 110, 'Melakukan implementasi rancangan user interface', '<p>2.1 Menu program sesuai dengan rancangan program diterapkan.<br>2.2 Penempatan user interface dialog diatur secara sekuensial.<br>2.3 Setting aktif-pasif komponen user interface dialog disesuaikan dengan urutan alur proses.<br>2.4 Bentuk style dari komponen user interface ditentukan. <br>2.5 Penerapan simulasi dijadikan suatu proses yang sesungguhnya.<br></p>', '2022-05-11 13:15:31', '2022-05-11 13:15:31'),
(62, 111, 'Memilih tools pemrograman yang sesuai dengan kebutuhan', '<p>1.1 Platform (lingkungan) yang akan digunakan untuk menjalankan tools pemrograman&nbsp; diidentifikasi sesuai&nbsp; dengan kebutuhan.</p><p>1.2 Tools bahasa pemrogram dipilih sesuai dengan kebutuhaan dan lingkungan pengembangan.<br></p>', '2022-05-11 13:17:14', '2022-05-11 13:18:18'),
(63, 111, 'Instalasi tool pemrograman', '<p>2.1 Tools pemrogaman ter-install sesuai dengan prosedur. &nbsp; </p><p>2.2 Tools pemrograman bisa dijalankan di lingkungan pengembangan yang telah ditetapkan.<br></p>', '2022-05-11 13:18:00', '2022-05-11 13:18:00'),
(64, 111, 'Menerapkan hasil pemodelan kedalam eksekusi script sederhana', '<p>3.1 Script (source code) sederhana dibuat&nbsp; sesuai tools pemrogaman yang di-install </p><p>3.2 Script dapat dijalankan dengan benar dan menghasilkan keluaran sesuai skenario yang diharapkan <br></p>', '2022-05-11 13:18:49', '2022-05-11 13:19:12'),
(65, 112, 'Menerapkan codingguidelines dan best  practices dalam  penulisan program  (kode sumber)', '<p>1.1 Kode sumber dituliskan mengikuti coding-guidelines dan best practices.&nbsp; </p><p>1.2 Struktur program yang sesuai dengan konsep paradigmanya dibuat.&nbsp; </p><p>1.3 Galat/error ditangani. <br></p>', '2022-05-11 13:20:15', '2022-05-11 13:20:15'),
(66, 112, 'Menggunakan ukuran performansi dalam menuliskan kode sumber', '<p>2.1 Efisiensi penggunaan resources oleh kode dihitung. </p><p>2.2 Kemudahan interaksi selalu diimplementasikan&nbsp; sesuai standar yang berlaku.<br></p>', '2022-05-11 13:20:47', '2022-05-11 13:20:47'),
(67, 113, 'Menggunakan tipe data dan control program', '<p>1.1 Tipe data yang sesuai standar ditentukan . </p><p>1.2 Syntax program yang dikuasai digunakan sesuai standar. </p><p>1.3 Struktur kontrol program yang dikuasai digunakan sesuai standar.<br></p>', '2022-05-11 13:22:02', '2022-05-11 13:22:02'),
(68, 113, 'Membuat program sederhana', '<p>2.1 Program baca tulis untuk memasukkan data dari keyboard dan menampilkan ke layar monitor termasuk variasinya sesuai standar masukan/keluaran telah dibuat. </p><p>2.2 Struktur kontrol percabangan dan pengulangan dalam membuat program telah digunakan.<br></p>', '2022-05-11 13:22:37', '2022-05-11 13:22:37'),
(69, 113, 'Membuat program menggunakan prosedur dan fungsi', '<p>3.1 Program dengan menggunakan prosedur dibuat sesuai aturan penulisan program. </p><p>3.2 Program dengan menggunakan fungsi dibuat sesuai aturan penulisan program. </p><p>3.3 Program dengan menggunakan prosedur dan fungsi secara bersamaan dibuat sesuai aturan penulisan program. </p><p>3.4 Keterangan untuk setiap prosedur dan fungsi telah diberikan. <br></p>', '2022-05-11 13:23:15', '2022-05-11 13:23:15'),
(70, 113, 'Membuat program menggunakan array', '<p>4.1 Dimensi array telah ditentukan. </p><p>4.2 Tipe data array telah ditentukan. </p><p>4.3 Panjang array telah&nbsp; ditentukan. </p><p>4.4 Pengurutan array telah digunakan.<br></p>', '2022-05-11 13:23:47', '2022-05-11 13:24:17'),
(71, 113, 'Membuat program untuk akses file', '<p>5.1 Program untuk menulis data dalam media penyimpan telah dibuat. </p><p>5.2 Program untuk membaca data dari media penyimpan telah dibuat.<br></p>', '2022-05-11 13:24:48', '2022-05-11 13:24:48'),
(72, 114, 'Melakukan pemilihan unit-unit reuse yang potensial', '<p>1.1 Class unit-unit reuse (dari aplikasi lain) yang sesuai dapat diidentifikasi. </p><p>1.2 Keuntungan efisiensi dari pemanfaatan komponen reuse dapat dihitung. </p><p>1.3 Lisensi, Hak cipta dan hak paten tidak dilanggar dalam pemanfaatan komponen reuse tersebut<br></p>', '2022-05-11 13:25:59', '2022-05-11 13:25:59'),
(73, 114, 'Melakukan integrasi library atau komponen pre-existing dengan source code yang ada', '<p>2.1 Ketergantungan antar unit diidentifikasi. </p><p>2.2 Penggunaan komponen yang sudah obsolete dihindari. </p><p>2.3 Program yang dihubungkan dengan library diterapkan.<br></p>', '2022-05-11 13:26:30', '2022-05-11 13:26:30'),
(74, 114, 'Melakukan pembaharuan library atau komponen preexisting yang  digunakan', '<p>3.1 Cara-cara pembaharuan library atau komponen pre-existing diidentifikasi. </p><p>3.2 Pembaharuan library atau komponen preexisting berhasil dilakukan.<br><br><br></p>', '2022-05-11 13:27:24', '2022-05-11 13:27:24'),
(75, 115, 'Melakukan identifikasi kode program', '<p>1.1 Modul program diidentifikasi </p><p>1.2 Parameter&nbsp; yang&nbsp; dipergunakan&nbsp; diidentifikasi&nbsp; </p><p>1.3 Algoritma dijelaskan cara kerjanya </p><p>1.4 Komentar setiap baris kode termasuk data, eksepsi, fungsi, prosedur dan class (bila ada) diberikan <br></p>', '2022-05-11 13:28:31', '2022-05-11 13:28:31'),
(76, 115, 'Membuat dokumentasi modul program', '<p>2.1 Dokumentasi modul dibuat sesuai dengan identitas untuk memudahkan pelacakan </p><p>2.2 Identifikasi dokumentasi diterapkan </p><p>2.3 Kegunaan modul dijelaskan&nbsp; </p><p>2.4 Dokumen direvisi sesuai perubahan kode program<br></p>', '2022-05-11 13:29:22', '2022-05-11 13:29:22'),
(77, 115, 'Membuat dokumentasi fungsi, prosedur atau method program', '<p>3.1 Dokumentasi fungsi, prosedur atau metod dibuat&nbsp; </p><p>3.2 Kemungkinan eksepsi dijelaskan&nbsp; </p><p>3.3 Dokumen direvisi sesuai perubahan kode program <br></p>', '2022-05-11 13:30:12', '2022-05-11 13:30:12'),
(78, 115, 'Men-generate dokumentasi', '<p>4.1 Tools untuk generate dokumentasi diidentifikasi </p><p>4.2 Generate dokumentasi dilakukan <br></p>', '2022-05-11 13:31:03', '2022-05-11 13:31:03'),
(79, 116, 'Mempersiapkan kode program', '<p>1.1 Kode program sesuai spesifikasi disiapkan. </p><p>1.2 Debugging tools untuk melihat proses suatu modul dipersiapkan. <br></p>', '2022-05-11 13:32:47', '2022-05-11 13:32:47'),
(80, 116, 'Melakukan debugging', '<p>2.1 Kode program dikompilasi sesuai bahasa pemrograman yang digunakan. </p><p>2.2 Kriteria lulus build dianalisis. </p><p>2.3 Kriteria eksekusi aplikasi dianalisis. </p><p>2.4 Kode kesalahan dicatat. <br></p>', '2022-05-11 13:33:17', '2022-05-11 13:33:17'),
(81, 116, 'Memperbaiki program', '<p>3.1 Perbaikan terhadap kesalahan kompilasi maupun build dirumuskan. </p><p>3.2 Perbaikan dilakukan. <br></p>', '2022-05-11 13:33:50', '2022-05-11 13:33:50'),
(87, 124, 'Elemen1', '<p>Kriteria1</p>', '2022-06-26 10:57:29', '2022-06-26 10:57:41'),
(88, 125, 'Elemen2', '<p>Kriteria2<br></p>', '2022-06-26 10:58:20', '2022-06-26 10:58:20'),
(90, 126, 'sdasd', '<p>asd</p>', '2022-06-28 11:59:47', '2022-06-28 11:59:47'),
(92, 128, 'Elemen1', '<p>-</p>', '2022-07-04 12:41:53', '2022-07-22 21:55:34'),
(93, 136, 'Elemen1', NULL, '2022-07-04 12:52:25', '2022-07-22 21:56:35'),
(94, 128, 'Elemen2', NULL, '2022-07-22 21:55:46', '2022-07-22 21:55:46'),
(95, 128, 'Elemen3', NULL, '2022-07-22 21:56:00', '2022-07-22 21:56:00'),
(96, 136, 'Elemen2', NULL, '2022-07-22 21:56:53', '2022-07-22 21:56:53'),
(97, 136, 'Elemen3', NULL, '2022-07-22 21:57:03', '2022-07-22 21:57:03'),
(98, 141, 'Elemen1', NULL, '2022-07-22 22:12:22', '2022-07-22 22:12:22'),
(99, 141, 'Elemen2', NULL, '2022-07-22 22:12:29', '2022-07-22 22:12:29'),
(100, 141, 'Elemen3', NULL, '2022-07-22 22:12:38', '2022-07-22 22:12:38'),
(101, 40, 'Elemen1', NULL, '2022-07-22 22:18:45', '2022-07-22 22:18:45'),
(102, 40, 'Elemen2', NULL, '2022-07-22 22:18:51', '2022-07-22 22:18:51'),
(103, 40, 'Elemen3', NULL, '2022-07-22 22:18:58', '2022-07-22 22:18:58'),
(104, 86, 'Elemen1', NULL, '2022-07-22 22:19:25', '2022-07-22 22:19:25'),
(105, 86, 'Elemen2', NULL, '2022-07-22 22:19:32', '2022-07-22 22:19:32'),
(106, 86, 'Elemen3', NULL, '2022-07-22 22:19:39', '2022-07-22 22:19:39'),
(107, 94, 'Elemen1', NULL, '2022-07-22 22:20:36', '2022-07-22 22:20:36'),
(108, 94, 'Elemen2', NULL, '2022-07-22 22:20:42', '2022-07-22 22:20:42'),
(109, 94, 'Elemen3', NULL, '2022-07-22 22:20:49', '2022-07-22 22:20:49'),
(110, 154, 'Elemen1', NULL, '2022-07-22 22:21:25', '2022-07-22 22:21:25'),
(111, 154, 'Elemen2', NULL, '2022-07-22 22:21:36', '2022-07-22 22:21:36'),
(112, 154, 'Elemen3', NULL, '2022-07-22 22:21:43', '2022-07-22 22:21:43'),
(113, 175, 'Elemen1', NULL, '2022-07-22 22:22:48', '2022-07-22 22:22:48'),
(114, 175, 'Elemen2', NULL, '2022-07-22 22:22:56', '2022-07-22 22:22:56'),
(115, 175, 'Elemen3', NULL, '2022-07-22 22:23:04', '2022-07-22 22:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fileapl2s`
--

CREATE TABLE `fileapl2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filelains`
--

CREATE TABLE `filelains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filelains`
--

INSERT INTO `filelains` (`id`, `file`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Design Frontend', 'uploads/file/1658506923Design Frontend LSP-POLITAP.pdf', '2022-07-22 09:22:04', '2022-07-22 09:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file`, `image`, `created_at`, `updated_at`) VALUES
(13, 'FR.APL.01. Permohonan Sertifikasi Kompetensi', 'uploads/file/16570547101. FR.APL.01. Permohonan Sertifikasi Kompetensi.pdf', '2022-07-05 13:58:30', '2022-07-05 13:58:30'),
(14, 'FR.APL.02. Asesmen Mandiri.', 'uploads/file/16570547532. FR.APL.02. Asesmen Mandiri.pdf', '2022-07-05 13:59:13', '2022-07-05 13:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `formapl2s`
--

CREATE TABLE `formapl2s` (
  `id` int(11) UNSIGNED NOT NULL,
  `skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formapl2s`
--

INSERT INTO `formapl2s` (`id`, `skema`, `kode`, `created_at`, `updated_at`) VALUES
(6, 'Asisten Kebun Kelapa Sawit', 'gdfg', '2022-06-28 01:12:02', '2022-06-28 01:12:02'),
(7, 'Asisten Kebun Kelapa Sawit', 'SS.AKKS/LSPP/001/2022', '2022-06-28 01:13:41', '2022-06-28 01:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `formapl2_children`
--

CREATE TABLE `formapl2_children` (
  `id` int(11) UNSIGNED NOT NULL,
  `formapl2_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elemen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formapl2_children`
--

INSERT INTO `formapl2_children` (`id`, `formapl2_id`, `unit`, `elemen`, `created_at`, `updated_at`) VALUES
(1, '7', 'qweqw', 'qweqwe', '2022-06-28 01:27:56', '2022-06-28 01:27:56'),
(2, '1', 'sdas', '<p>dasdasd<br></p>', '2022-06-28 01:45:25', '2022-06-28 01:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `f_profil`
--

CREATE TABLE `f_profil` (
  `id` int(11) NOT NULL,
  `profil` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `motto` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_profil`
--

INSERT INTO `f_profil` (`id`, `profil`, `isi`, `visi`, `misi`, `motto`, `image`, `updated_at`, `created_at`) VALUES
(1, '<h3 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Comic Sans MS&quot;;\">Profil Lembaga Sertifikasi Politeknik Negeri Ketapang</span></span></h3><h5 style=\"text-align: left;\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></h5><h5 style=\"text-align: left;\"><span style=\"font-family: &quot;Arial&quot;;\">Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga \r\nsertifikasi profesi yang telah memperoleh sertifikat lisensi No. </span><span style=\"font-family: &quot;Arial&quot;;\">BNSP-LSP-1214-ID dari Badan Nasional Sertifikasi Profesi\r\n (BNSP). dan memiliki Nomor SK </span>\r\n						KEP. 0429/BNSP/IV/2018&nbsp; <span style=\"font-family: &quot;Arial&quot;;\">Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema yang dimiliki LSP&nbsp; </span><span style=\"font-family: &quot;Arial&quot;;\">Politeknik Negeri Ketapang</span><span style=\"font-family: &quot;Arial&quot;;\"> diselaraskan dengan Kerangka Kualifikasi Nasional Indonesia (KKNI) dan Standar Kualifikasi Kerja\r\n            Nasional Indonesia (SKKNI).&nbsp; </span></h5><h5 style=\"text-align: left;\"><span style=\"font-family: &quot;Arial&quot;;\">Memiliki\r\n 6 skema, LSP&nbsp; Politeknik Negeri Ketapang  siap melaksanakan uji \r\nkompetensi\r\n            pada seluruh\r\n            mahasiswa  Politeknik Negeri Ketapang dari berbagai program \r\nstudi dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang \r\nmemiliki kompetensi mumpuni sesuai bidangnya dan memiliki nilai lebih di\r\n pasar tenaga kerja\r\n            baik\r\n            nasional maupun internasional.</span></h5><h3 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Comic Sans MS&quot;;\"></span> </span></h3>', '<br>', '<h2 align=\"center\"><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Visi</span></span></span></h2><p align=\"center\"><br></p><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">\"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam </span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">menjamin kompetensi sumberdaya manusia agar mampu bersaing </span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">di era globalisasi.\"</span><br></h4>', '<h2 align=\"center\"><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Misi</span></b></span></h2><h2 align=\"center\"><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></b></span></h2><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">1. Melaksanakan Uji Kompetensi yang sistematis dan konsisten</span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">2. Mengembangkan sumber daya manusia di LSP Politeknik Negeri </span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">&nbsp;&nbsp; Ketapang dan </span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">seluruh asesor</span> <span style=\"font-family: &quot;Comic Sans MS&quot;;\">kompetensi menjadi tenaga profesional</span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">3. Mengembangkan skema dan perangkat asesmen secara berkelanjutan</span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">4. Mengembangkan sarana dan prasarana uji kompetensi </span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">5.</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"> Mengembangkan </span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">sistem </span></span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">informasi website untuk kepen</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">tingan internal </span></span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">&nbsp;&nbsp; dan</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"> eksternal LSP POLITAP </span></span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">6. Mengembangkan jejaring dan kerjasama yang sinergis dengan stakeholder </span></h4><h5 align=\"justify\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></h5><h5 align=\"justify\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"></span></h5><h5><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h5><h4><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h4><h4><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h4><h4><span style=\"font-family: &quot;Comic Sans MS&quot;;\">﻿</span><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h4>', '<h4 style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Impact&quot;;\">MOTTO</span></h4><h3 style=\"   text-align: center;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">﻿</span><span style=\"font-family: &quot;Courier New&quot;;\">\"Kompeten , Unggul dan, Profesional\"</span><span style=\"color: rgb(255, 0, 0); font-family: &quot;Impact&quot;;\"><br></span></h3>', 'public/uploads/f_profil/1650562467lsp.png', '2022-06-08 07:13:35.000000', '2022-06-08 14:13:35.591045'),
(2, '<ul><li style=\"text-align: justify;\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga \r\nsertifikasi profesi yang telah memperoleh sertifikat lisensi No. </span></span><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">BNSP-LSP-1214-ID dari Badan Nasional Sertifikasi Profesi\r\n (BNSP). dan memiliki Nomor SK </span></span><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">\r\n						KEP. 0429/BNSP/IV/2018.</span></span></li><li style=\"text-align: justify;\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema yang dimiliki LSP</span><span style=\"font-family: &quot;Arial&quot;;\"> - </span></span><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">Politeknik Negeri Ketapang</span></span><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\"> diselaraskan dengan Kerangka Kualifikasi Nasional Indonesia (KKNI) dan Standar Kualifikasi Kerja\r\n            Nasional Indonesia (SKKNI).</span></span></span></li><li style=\"text-align: justify;\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">Memiliki 6 skema, LSP&nbsp; Politeknik Negeri Ketapang  siap melaksanakan uji kompetensi\r\n            pada seluruh\r\n            mahasiswa  Politeknik Negeri Ketapang dari berbagai program studi dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang memiliki kompetensi mumpunisesuai bidangnya dan memiliki nilai lebih di pasar tenaga kerja\r\n            baik\r\n            nasional maupun internasional.</span></span></span></li></ul>', '<h6 align=\"center\"><span style=\"background-color: inherit; --darkreader-inline-bgcolor: inherit;\" data-darkreader-inline-bgcolor=\"\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Arial&quot;; --darkreader-inline-color: #ff1a1a;\" data-darkreader-inline-color=\"\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">Makna Logo</span><br></span></span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">1. LSP, merupakan singkatan dari Lembaga Sertifikasi Profesi; </span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">2. POLITAP, merupakan singkatan dari Politeknik Negeri Ketapang;</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">3. Latar belakang tulisan warna merah-putih seperti bendera negara, melambangkan perjuangan Lembaga Sertifikasi Profesi Politeknik </span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;Negeri Ketapang (LSP POLITAP) yang tiada henti untuk menjadi lembaga sertifikasi profesi yang profesional dan terpercaya; </span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">4. Lingkaran berwarna merah seperti bola dunia, menunjukkan eksistensi perjuangan Lembaga Sertifikasi Profesi Politeknik Negeri </span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">&nbsp;&nbsp;&nbsp; Ketapang (LSP POLITAP) hingga ketingkat internasional; </span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">5. Simbol centang berwarna merah di dalam lingkaran, merupakan gambaran dari komitmen perjuangan Lembaga Sertifikasi Profesi</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp; Politeknik Negeri Ketapang (LSP-POLITAP) untuk menghasilkan sumberdaya manusia yang berkualitas. </span></span></h6>', '<div align=\"center\"><h6><span style=\"font-family: &quot;Arial&quot;;\">﻿</span><span style=\"color: rgb(255, 0, 0); --darkreader-inline-color: #ff1a1a;\" data-darkreader-inline-color=\"\"><span style=\"font-size: 1.875rem;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">Visi</span><span style=\"font-family: &quot;Arial&quot;;\"> </span></span></span></h6><h6><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">\"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam menjamin kompetensi sumberdaya\r\n                            manusia agar mampu bersaing di era globalisasi.\"</span></h6><h4><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\"><br></span></h4><h4><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\"><br></span></h4></div>', '<div align=\"center\"><h6><span style=\"color: rgb(255, 0, 0); --darkreader-inline-color: #ff1a1a;\" data-darkreader-inline-color=\"\"><span style=\"font-size: 30px; font-family: &quot;Arial&quot;;\">Misi</span></span></h6></div><h6><span style=\"font-family: &quot;Arial&quot;;\">\r\n                             </span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">1. Melaksanakan Uji Kompetensi yang sistematis dan konsisten.</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">2. Mengembangkan\r\n                            sumber daya manusia di LSP Politeknik Negeri &nbsp;&nbsp; Ketapang dan seluruh asesor\r\n                            kompetensi menjadi tenaga profesional.</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">3. Mengembangkan skema dan perangkat asesmen\r\n                            secara berkelanjutan.</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">4. Mengembangkan sarana dan prasarana uji kompetensi .</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">5.\r\n                            Mengembangkan sistem informasi website untuk kepentingan internal &nbsp;&nbsp; dan eksternal\r\n                            LSP POLITAP .</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">6. Mengembangkan jejaring dan kerjasama yang sinergis dengan stakeholder .\r\n                        </span></span></h6><h4 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></span></h4><h4 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></span></h4>', '<div style=\"text-align: center;\"><h6><span style=\"color: rgb(255, 0, 0); --darkreader-inline-color: #ff1a1a;\" data-darkreader-inline-color=\"\"><span style=\"font-size: 30px;\">Motto</span></span></h6><h6><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">\"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam menjamin kompetensi sumberdaya\r\n                            manusia agar mampu bersaing di era globalisasi.\"\r\n                        </span></h6><h4><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\"><br></span></h4><h4><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\"><br></span></h4></div>', 'uploads/f_profil/1655616860lsp.png', '2022-07-02 04:54:10.000000', '2022-07-02 11:54:10.744916');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_fotos`
--

CREATE TABLE `galeri_fotos` (
  `id` int(11) UNSIGNED NOT NULL,
  `group_galeri_id` int(5) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_galeris`
--

CREATE TABLE `group_galeris` (
  `id` int(5) UNSIGNED NOT NULL,
  `galeri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_galeris`
--

INSERT INTO `group_galeris` (`id`, `galeri`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Kegiatan Mahasiswa', 'uploads/group-galeri/1657054305Kegiatan Mahasiswa (10).jpeg', '2022-05-09 19:39:55', '2022-07-05 13:51:45'),
(11, 'Pelatihan Askom', 'uploads/group-galeri/1657054064IMG_0147.JPG', '2022-07-02 07:46:52', '2022-07-05 13:47:44'),
(12, 'Rapat Penetapan Skema', 'uploads/group-galeri/1657054361Rapat Penetapan Skema LSP PI Politap (14).jpeg', '2022-07-05 13:52:41', '2022-07-05 13:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `info2`
--

CREATE TABLE `info2` (
  `id` int(5) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info2`
--

INSERT INTO `info2` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/info/1658291099Manual Book SI LSP POLITAP.pdf', '2022-07-20 04:24:59', '2022-07-19 21:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(5) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `keterangan`, `image`, `created_at`, `updated_at`) VALUES
(1, 'https://youtu.be/yJB1bOVFaLA', 'uploads/info/1656770319165504730416522939352022-05-11 23-36-57.mp4', '2022-04-20 07:58:52', '2022-07-22 09:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`, `updated_at`, `created_at`) VALUES
(1, 'Teknik Pertambangan', '2022-04-02 11:54:46.000000', '2022-04-02 11:54:46.000000'),
(2, 'Teknik Mesin', '2022-04-02 11:54:46.000000', '2022-04-02 11:54:46.000000'),
(3, 'Teknik Pertanian/ Pengelolahan Hasil Perkebunan', '2022-04-02 11:59:07.000000', '2022-04-02 11:59:07.000000'),
(4, 'Teknik Informatika', '2022-04-02 12:00:20.000000', '2022-04-02 12:00:20.000000'),
(5, 'Teknik Elektro', '2022-04-02 12:00:40.000000', '2022-04-02 12:00:40.000000'),
(6, 'Teknik Sipil', '2022-04-02 12:00:40.000000', '2022-04-02 12:00:40.000000');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(5) UNSIGNED NOT NULL,
  `kategori` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Artikel/Berita', '2022-04-19 19:33:27', '2022-04-19 19:33:27'),
(2, 'Pengumuman', '2022-04-19 19:33:57', '2022-04-19 19:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `kknis`
--

CREATE TABLE `kknis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_31_053712_create_permission_tables', 1),
(6, '2022_04_04_064735_create_skemas_table', 2),
(7, '2022_04_04_065104_create_unikoms_table', 2),
(8, '2022_04_04_142623_create_skemas_table', 3),
(9, '2022_04_04_162549_create_ases_mandiri_table', 4),
(10, '2022_04_05_035640_create_skemas_table', 5),
(11, '2022_04_05_035931_create_unikoms_table', 5),
(12, '2022_04_05_040007_create_asesman_table', 5),
(13, '2022_04_05_040903_create_asesman_table', 6),
(14, '2022_04_05_041003_create_unikoms_table', 6),
(15, '2022_04_05_184320_create_unikoms_table', 7),
(16, '2022_04_05_194410_create_asesmens_table', 8),
(17, '2022_04_06_112234_create_formulirs_table', 9),
(18, '2022_04_07_070821_create_xnxxes_table', 10),
(19, '2022_04_08_154429_create_posts_table', 11),
(20, '2022_04_09_084617_create_tokens_table', 12),
(21, '2022_04_10_063220_create_data_registers_table', 13),
(22, '2022_04_10_104413_create_xnxxes_table', 14),
(23, '2022_04_10_104856_add_new_post_id_table', 15),
(24, '2022_04_10_105849_add_new_posdfst_id_table', 16),
(25, '2022_04_10_115354_create_xnxxes_table', 17),
(26, '2022_04_10_120142_create_xnxxes_table', 18),
(27, '2022_04_10_120226_add_new_psdfosdfst_id_table', 19),
(28, '2022_04_10_122844_create_xnxxes_table', 20),
(29, '2022_04_10_124409_add_new_psdfosdfst_id_tablefgdfgffgf', 21),
(30, '2022_04_10_124454_add_new_psdfosdfst_id_tablefgdfgffgfsdssd', 22),
(31, '2022_04_11_063629_create_upload_files_table', 23),
(32, '2022_04_11_064002_add_data_table', 24),
(33, '2022_04_12_135433_asu', 25),
(34, '2022_04_12_180546_create_sertifikasis_table', 26),
(35, '2022_04_15_043313_create_group_galeris_table', 27),
(36, '2022_04_15_071246_create_galeri_fotos_table', 28),
(37, '2022_04_16_081140_create_beritas_table', 29),
(38, '2022_04_19_193029_create_kategoris_table', 30),
(39, '2022_04_20_133815_create_infos_table', 31),
(40, '2022_04_26_053611_create_files_table', 32),
(41, '2022_04_28_170453_create_notes_table', 33),
(42, '2022_05_03_142051_create_asus_table', 34),
(43, '2022_05_05_170426_create_dokumen__uploads_table', 34),
(44, '2022_06_10_170400_create_skknis_table', 35),
(45, '2022_06_10_172828_create_kknis_table', 36),
(46, '2022_06_10_173640_create_fileapl2s_table', 37),
(47, '2022_06_10_174907_create_filelains_table', 38),
(48, '2022_06_15_043550_create_cek_pendaftarans_table', 39),
(49, '2022_06_15_114759_create_verifikasi_skemas_table', 39),
(50, '2022_06_28_045703_create_formapl2s_table', 39),
(51, '2022_06_28_064228_create_formapl2_children_table', 40);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ponzzy22@gmail.com', '$2y$10$X9tJwwncpiLX.J2cT.zXV./xyKJgE.mfyGFm6RaRoehjPwmp2l/KW', '2022-06-10 23:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`id`, `nama`, `keterangan`, `image`, `no_hp`, `email`, `updated_at`, `created_at`, `facebook`, `twitter`, `instagram`) VALUES
(36, 'Budi Pratomo Sibuea, S.ST., M.ST', 'Ketua LSP', 'uploads/pengelola/16570524644-min.jpg', NULL, NULL, '2022-07-05 13:21:04.000000', '2022-07-05 20:21:04.647425', NULL, NULL, NULL),
(37, 'A. Nova Zulfahmi, S.Pi., M.Sc', 'Manajer Sertifikasi', 'uploads/pengelola/16570524513-min.jpg', NULL, NULL, '2022-07-05 13:20:51.000000', '2022-07-05 20:20:51.124637', NULL, NULL, NULL),
(38, 'Ahmad Ravi, S.Pd., M.Pd', 'Manajer Mutu', 'uploads/pengelola/16570524342-min.jpg', NULL, NULL, '2022-07-05 13:20:34.000000', '2022-07-05 20:20:34.688643', NULL, NULL, NULL),
(39, 'Firmanilah Kamil, S.Pd., M.Pd', 'Manajer Administrasi', 'uploads/pengelola/16570524171-min.jpg', NULL, NULL, '2022-07-05 13:20:17.000000', '2022-07-05 20:20:17.019486', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `status`, `published_at`, `created_at`, `updated_at`, `user_id`) VALUES
(4, 'sas', 'dsadasdas', 'sadas', NULL, '2022-04-08 11:10:17', '2022-04-08 11:10:17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(6) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `prodi`, `updated_at`, `created_at`) VALUES
(11, 'D III Teknik Pertambangan', '2022-04-25 00:45:12.000000', '2022-04-25 00:45:12.000000'),
(12, 'D III Teknologi Pengolahan Hasil Perkebunan', '2022-04-25 00:45:47.000000', '2022-04-25 00:45:47.000000'),
(13, 'D III Teknik Informatika', '2022-04-25 00:46:01.000000', '2022-04-25 00:46:01.000000'),
(14, 'D III Agroindustri', '2022-04-25 00:46:26.000000', '2022-04-25 00:46:26.000000'),
(15, 'D III Teknik Elektro', '2022-04-25 00:46:41.000000', '2022-04-25 00:46:41.000000'),
(16, 'D IV Rekontruksi Jalanan dan Jembatan', '2022-04-25 00:48:32.000000', '2022-04-25 00:48:32.000000'),
(17, 'D IV Budidaya Tanaman Perkebunan', '2022-04-25 00:49:00.000000', '2022-04-25 00:49:00.000000'),
(19, 'D III Perawatan dan Perbaikan Mesin', '2022-07-25 02:50:11.000000', '2022-07-25 02:50:11.000000');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_register` bigint(20) DEFAULT NULL,
  `skema_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `skema_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-03-31 01:01:51', '2022-03-31 01:01:51'),
(2, 'user', 'web', '2022-03-31 01:01:51', '2022-03-31 01:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` int(11) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`, `updated_at`, `created_at`) VALUES
(1, 1, '2022-04-02 12:03:06.000000', '2022-04-02 12:03:06.000000'),
(2, 2, '2022-04-02 12:03:21.000000', '2022-04-02 12:03:21.000000'),
(3, 3, '2022-04-02 12:03:21.000000', '2022-04-02 12:03:21.000000'),
(4, 4, '2022-04-02 12:03:49.000000', '2022-04-02 12:03:49.000000'),
(5, 5, '2022-04-02 12:03:49.000000', '2022-04-02 12:03:49.000000'),
(6, 6, '2022-04-02 12:04:16.000000', '2022-04-02 12:04:16.000000');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasis`
--

CREATE TABLE `sertifikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE `sex` (
  `id` int(11) NOT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`id`, `sex`, `updated_at`, `created_at`) VALUES
(1, 'Laki-laki', '2022-04-03 01:40:39', '2022-04-03 01:40:40'),
(2, 'Perempuan', '2022-04-03 01:40:40', '2022-04-03 01:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `simadu__pegawai`
--

CREATE TABLE `simadu__pegawai` (
  `id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar_depan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_belakang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `simadu__pegawai`
--

INSERT INTO `simadu__pegawai` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `created_at`, `updated_at`) VALUES
('02b2a632-7432-4eaa-9898-b2ea879ff373', NULL, '19780803 201509 168', NULL, NULL, 'Heri Darmawan', NULL, 'S.T', 'Ketapang', '1978-08-03', 'Laki-laki', '', '$2y$10$YfqqLjj.dGWiHsEArBdFmuKAAMTaF1dQfnbkMGA7RzPjUgRdQr0vG', '2022-07-05 01:52:09', '2022-07-05 01:52:09'),
('02fb52d1-876d-4dca-83d5-a8d769842eb5', NULL, '19890614 201302 129', NULL, NULL, 'M. Riduan', NULL, 'A.Md', 'Ketapang', '1989-06-14', 'Laki-laki', 'Islam', '$2y$10$SGuEeraBx9VGhU1cqo5BEO3PeCt3d8IAgj28HRvnd4uhmFqL24HBy', '2022-07-05 01:52:09', '2022-07-05 01:52:09'),
('03968e4c-1c63-4e6e-8d6a-4c31651cb5ac', '19850516 202121 2 004', NULL, NULL, NULL, 'Eva Susana', NULL, 'A.Md', 'Ketapang', '1985-05-16', 'Perempuan', '', '$2y$10$rM/WRNCXDGxGb2XPuXgT9.D6jIWP/wIkh50ApU9SNDEEB49xJ2tim', '2022-07-05 01:52:09', '2022-07-05 01:52:09'),
('03c8bbe4-15b5-4fa5-8024-dcc8abd2f9ac', NULL, NULL, NULL, NULL, 'Vensya Aswal Anugerah Panca Poetri', NULL, 'A.Md', 'Pontianak', '1993-03-31', 'Perempuan', 'Islam', '$2y$10$fPeuQu29XZ8oOf7Rtad37ev5hDXcKn3m7iD7u/HqPJrjTVLIz0BNu', '2022-07-05 01:52:09', '2022-07-05 01:52:09'),
('045cfd08-9a76-4c18-a1eb-b43a99f48c57', NULL, '19920717 201512 174', NULL, NULL, 'Devi Elvira', NULL, 'S.Pd', 'Ketapang', '1992-07-17', 'Perempuan', '', '$2y$10$LPZPR6X1kSg4hAUPvwG7zexRMn2eUaxEhbQxCLXoc4hXZbyXYf4re', '2022-07-05 01:52:09', '2022-07-05 01:52:09'),
('0854e795-2c48-484e-b919-675b7be7dc7c', '19830917 202121 1 001', NULL, NULL, NULL, 'Adha Panca Wardanu', NULL, 'S.TP.,M.P', 'Pontianak', '1983-09-17', 'Laki-laki', 'Islam', '$2y$10$CfSd7FSllgs7kVucsyYph.MAzcFbOUrGtBuTGJq9itiwo6aUkK32i', '2022-07-05 01:52:09', '2022-07-05 01:52:09'),
('093cca9b-a773-4867-a5f6-a665467f791b', NULL, '19890622 201601 95', NULL, NULL, 'Juniarti', NULL, 'A.Md', 'Ketapang', '1989-06-22', 'Perempuan', '', '$2y$10$6acohI.eAoA8ngAyvzjQxey6st3lFlQuItKdUWE795eK80QL9TCL2', '2022-07-05 01:52:09', '2022-07-05 01:52:09'),
('0a89879b-7875-4420-ab42-4ec9cb00e86e', '19910217 202121 1 002', NULL, NULL, NULL, 'Fajar Pebriyono', NULL, 'A. Md', 'Ketapang', '1991-02-17', 'Laki-laki', '', '$2y$10$KTcD/E6Zj.h0DxTDaR/2xO6kzjaY3XZhdqyXvygWylPVcbD7a.znC', '2022-07-05 01:52:09', '2022-07-05 01:52:09'),
('0ed02966-83fd-4b68-b3e6-077f75582dd2', NULL, '19961119 202107 260', '6171035911960020', NULL, 'Dyah Novia Nugraheni', NULL, 'S.Tr.Ak.,M.Ak.', 'pontianak', '1996-11-19', 'Perempuan', 'Islam', '$2y$10$p7qt4lJ9s5W949LBs5r5sei2Mw5AnSA1XkuloR9CSYzQKova8Hx/6', '2022-07-05 01:52:10', '2022-07-05 01:52:10'),
('13c7279b-9d2e-4afa-a641-ca2ebc14f151', NULL, NULL, NULL, NULL, 'Moh Rokim', NULL, '', 'Purworejo', '1970-01-01', 'Laki-laki', '', '$2y$10$LOe3fgo8OaTugt.DUFmvY.K5vCfqxDm2EPGd7TLtrv34pg9KnN6re', '2022-07-05 01:52:10', '2022-07-05 01:52:10'),
('13dd745d-221f-421f-b78b-138131893d28', NULL, NULL, NULL, NULL, 'Dedi Kurniadi', NULL, '', 'Ketapang', '1970-01-01', 'Laki-laki', '', '$2y$10$VHyeSKhfH42y.Vcg50G5bu3v8RkU.YqzNPo2u4MsUV.ixjuOVhYzi', '2022-07-05 01:52:10', '2022-07-05 01:52:10'),
('143f2dec-fc53-45e6-a700-989bdf50c019', '19851008 202121 1 005', NULL, NULL, NULL, 'Erick Radwitya', NULL, 'S.ST., MT', 'Ketapang', '1985-10-08', 'Laki-laki', 'Islam', '$2y$10$bbLY0PzbuRks3mhj6Q2DqOa4HUdmZ/GJBhbC0.XF0gLYIGtj3vgKa', '2022-07-05 01:52:10', '2022-07-05 01:52:10'),
('14e636c6-3ca1-4e24-9072-3b0b707abc99', NULL, NULL, NULL, NULL, 'M. Randi Hardiyanto', NULL, '', 'Ketapang', '1993-05-25', 'Laki-laki', '', '$2y$10$tYp0/7JVMpDbCRVS9rYeVuWnTGsxQBTLxWLG2tlI8sxeMvDbWV/dG', '2022-07-05 01:52:10', '2022-07-05 01:52:10'),
('15417e2f-797e-43fe-ac3f-54b550f683ad', '19710324 202121 1 001', NULL, NULL, NULL, 'Molyadi', NULL, 'A.Md', 'Ketapang', '1971-03-24', 'Laki-laki', 'Islam', '$2y$10$WrVHeBii50MgiR.oJo0TkuQQc17qhpPmEUdI9BME1KQCxpNjxaoCq', '2022-07-05 01:52:10', '2022-07-05 01:52:10'),
('159c1ff3-499e-4acc-84c2-bc844f8da135', '19820310 202121 1 003', NULL, NULL, NULL, 'Trian Adimarta', NULL, 'S.TP., M.Sc', 'Surabaya', '1982-03-10', 'Laki-laki', 'Islam', '$2y$10$lc9u6ITXBm.vfutZdkjTrOjYgaa0ZOWYyUhnlPnrgaKFCKJh4AJFq', '2022-07-05 01:52:10', '2022-07-05 01:52:10'),
('16cb2f5a-392a-48bf-b846-bcf548ded51f', NULL, '19920521 201512 175', NULL, NULL, 'Muhamad Reza Lukmana', NULL, 'A.Md', 'Ketapang', '1992-05-21', 'Laki-laki', 'Islam', '$2y$10$47rm6K1amLGfvQcL/iLTaOWaGVcZ/txBYKDXWjocQSj8DB1kppzbu', '2022-07-05 01:52:10', '2022-07-05 01:52:10'),
('18413e6f-09d1-4ae5-b32e-cb0d2c2f4427', NULL, NULL, NULL, NULL, 'Supiandi', NULL, '', 'Ketapang', '1980-06-09', 'Laki-laki', '', '$2y$10$qAfAFN0BwVgZ8.7WoXqiXu81Mme7IoZmCkKsJd0jeNos0gwAnkrnC', '2022-07-05 01:52:11', '2022-07-05 01:52:11'),
('18514bb6-0287-4061-b323-05247b4132c4', '19720918 202121 2 002', NULL, NULL, NULL, 'Heni Haryani', NULL, NULL, 'Ketapang', '1972-09-18', 'Perempuan', '', '$2y$10$MO.nQ.rfBKzhlN9vD5BmG.ux.T/FIsEW3jy12ba6v9soRyo0N1J1W', '2022-07-05 01:52:11', '2022-07-05 01:52:11'),
('189bd94f-5fd1-451a-8a00-031840e9a07a', NULL, NULL, NULL, NULL, 'Khairil', NULL, 'S.P.,M.P', 'Samili', '1981-09-17', 'Laki-laki', 'Islam', '$2y$10$Rg6EYTOHG2X29d2Tcq67v.UwTA35inTLSmEqAJzEgUCNBOCA2vj5K', '2022-07-05 01:52:11', '2022-07-05 01:52:11'),
('18eebaa7-84fd-48ac-9c61-81dfe56e8074', '19770221 200803 1 001', NULL, NULL, NULL, 'Uti Rustam Efendi', NULL, 'S.T., M.T', NULL, '1977-02-21', 'Laki-laki', 'Islam', '$2y$10$SHz3wBLzZg9CCflCy5c6o.16TI/Mbdwl52VX3SkAE7y0s7iz4ifbq', '2022-07-05 01:52:11', '2022-07-05 01:52:11'),
('193ca687-65a0-4711-b0c0-1927043c277d', NULL, '19930528 201603 202', NULL, NULL, 'Fachrul Rozie', NULL, 'S.T, M.Tr.T', 'Ketapang', '1993-05-28', 'Laki-laki', 'Islam', '$2y$10$40wPcyRG2pJpA.z7cD.1aext1Nhnp/DnvpnyOgS6D9iEJv67Iz14m', '2022-07-05 01:52:11', '2022-07-05 01:52:11'),
('1a3344f4-7b24-487e-a9fb-5ad326c13fff', '19900802 201903 1 003', NULL, NULL, NULL, 'Kondhang Dhika Kusuma', NULL, 'A.Md', 'Surakarta', '1990-08-02', 'Laki-laki', 'Islam', '$2y$10$/cIauHa5Mf/f567UdwigD.qzRD5bwQ/87.lDrTt1gabiEwBLQwUl.', '2022-07-05 01:52:11', '2022-07-05 01:52:11'),
('1a9c1f07-2017-4492-a4f6-0dc243e7d999', '19911112 201903 1 014', NULL, NULL, NULL, 'Kasrianto Wijaya', NULL, 'A.Md', 'Palopo', '1991-11-12', 'Laki-laki', 'Islam', '$2y$10$yWMgSBMROVx.auKVQL2EUuOy7HIle9egI7AlRok7ZPljkShNGB2re', '2022-07-05 01:52:11', '2022-07-05 01:52:11'),
('1b0267f4-d517-4512-a4c3-301a96372d12', '19890623 201903 2 015', NULL, NULL, NULL, 'Syarifah Aqla', NULL, 'S.Pd.,M.T', 'Pontianak', '1989-06-23', 'Perempuan', 'Islam', '$2y$10$ROPRB.I.AbV93gqP2kAgAuXkiOiK3P3zmWcAAJPygXwM7WQ8nRDki', '2022-07-05 01:52:11', '2022-07-05 01:52:11'),
('1b483074-16f8-4c4a-908a-ba3e3ee8e7e1', '19780511 202121 1 003', NULL, NULL, NULL, 'Helanianto', NULL, 'S.T.,M.T', 'Randau', '1978-05-11', 'Laki-laki', 'Katholik', '$2y$10$KwCBB9IRVUQedfa2hFiiDunBVWRXFr3AAN/BEhQ8/25vjwfr4uIVO', '2022-07-05 01:52:11', '2022-07-05 01:52:11'),
('1ba7321f-8186-4fbb-8cff-ff1d597d4336', '19760921 202121 1 002', NULL, NULL, NULL, 'Normansyah', NULL, 'S.T.,M.T', 'Ketapang', '1976-09-21', 'Laki-laki', 'Islam', '$2y$10$Y/cn9rNBclWuPlw.HJBt6.KrE2OywO.iIeYl.ABeb9piWLE.Uuh02', '2022-07-05 01:52:11', '2022-07-05 01:52:11'),
('1d5b7688-73c1-4142-99f3-94bbae58ed79', '19880501 201903 1 007', NULL, NULL, NULL, 'Budi Pratomo Sibuea', NULL, 'S.ST.,M.ST', 'Tebing Karimun', '1988-05-01', 'Laki-laki', 'Kristen', '$2y$10$nk4A27ngV76mg7XNtKZx3OGwfSgMOiMjjpCENLtQP/iCFqVNJ823u', '2022-07-05 01:52:12', '2022-07-05 01:52:12'),
('1e0985f8-2c11-4f3f-845b-6bf9a09c3b2d', NULL, '19930128 201609 210', NULL, NULL, 'Ar-Razy Muhammad', NULL, 'S.T', 'Pontianak', '1993-01-28', 'Laki-laki', 'Islam', '$2y$10$YiREa03DChkZAcgs7yAroOoeSonUF9pJ93MSt8VL0R6KMcerGXLU6', '2022-07-05 01:52:12', '2022-07-05 01:52:12'),
('1e9dc080-4487-494e-9225-72b737e726c3', NULL, '19880328 201802 230', NULL, NULL, 'Muhammad Fadli', NULL, 'A.Md', 'Semarang', '1988-03-28', 'Laki-laki', 'Islam', '$2y$10$5QkmmoW9vmLBb.WcigxYDOXej.epoKXVDTQM.ggS53VtP0fNc9kae', '2022-07-05 01:52:12', '2022-07-05 01:52:12'),
('1f160b23-2073-4ad4-9ffc-1e417dc85cc9', NULL, '19900109 201512 171', NULL, NULL, 'Sarwendah Ratnawati Hermanto', NULL, 'S.Pd., M.Sc', 'Surakarta', '1990-01-09', 'Perempuan', 'Islam', '$2y$10$/jijGwEJ0O1CCeltjv0WHu.fHAiRC7BZZWlgLE0oG0URuOH8nOQ2u', '2022-07-05 01:52:12', '2022-07-05 01:52:12'),
('20ab0593-f9f5-405f-86ff-a3f3c50d804b', NULL, '19910413 201509 161', NULL, NULL, 'Rika Fitry Ramanda', NULL, 'M.P', 'Ketapang', '1991-04-13', 'Perempuan', 'Islam', '$2y$10$vjjWaXFXsPNo2u8eOSiwrueYTF8KPSDHdIyLG4..H32obpHEznLVW', '2022-07-05 01:52:12', '2022-07-05 01:52:12'),
('20c6f98d-f528-4fc2-9016-ef526e32b7ba', NULL, '19830327 201701 215', NULL, NULL, 'Uray Sriyani', NULL, '', 'Balai Karangan', '1983-03-27', 'Perempuan', '', '$2y$10$kY7GoURBk2JU1.R1.bIvju6fXD/wugoWJCF8DwDIYOcCY7XeGWpL6', '2022-07-05 01:52:12', '2022-07-05 01:52:12'),
('2189d7cd-773e-4845-84a5-fffaa1ea901f', '19880315 201903 2 011', NULL, NULL, NULL, 'Maya Santi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-03-15', 'Perempuan', 'Islam', '$2y$10$ny0KAGSHBOmqQchh5u2pVui.og9eaZq2zn7GwWbKTlFS4xesDnAx6', '2022-07-05 01:52:12', '2022-07-05 01:52:12'),
('22bf31f9-6306-425e-9d54-89ace70ccda4', '19880424 201903 2 012', NULL, NULL, NULL, 'Hurul\'ain', 'Ir.', 'S.T.,M.T', 'Pemangkat', '1988-04-24', 'Perempuan', 'Islam', '$2y$10$3rQaz2jsLrsUrxvcM3mcTei8/./VknMwVnIQ9ZdIaUbyMwpdV6t/e', '2022-07-05 01:52:12', '2022-07-05 01:52:12'),
('22e45ac1-e10f-4134-8739-23fd2faa507c', '19840605 202121 1 005', NULL, NULL, NULL, 'Effendi', NULL, ' A.Md', 'Ketapang', '1984-06-05', 'Laki-laki', '', '$2y$10$4a5z569hwglXXfw1HUNHe.KRBzX426HoCpNB0zn4pKqp2QB/6tG9u', '2022-07-05 01:52:12', '2022-07-05 01:52:12'),
('252e762f-e81d-4c33-8aae-11b68c651c17', NULL, NULL, NULL, NULL, 'Ibnu Hajar', NULL, '', 'Ketapang', '1969-01-29', 'Laki-laki', '', '$2y$10$jqAxgJ6GxHVhjbIofMIoQeM.Rg93vG0w2uG2.Ixf73CDifRlvIb4.', '2022-07-05 01:52:12', '2022-07-05 01:52:12'),
('26f5893c-c355-4040-9ae4-6e53187c725f', '19740722 202121 1 005', NULL, NULL, NULL, 'Muh Anhar', NULL, 'S.T.,M.T', 'Boyolali', '1974-07-22', 'Laki-laki', 'Islam', '$2y$10$YU9gs4WARWnA1Pk4XbvjwuEsf97yHulgg1UFFdE.Jz.4fTBRoynvy', '2022-07-05 01:52:13', '2022-07-05 01:52:13'),
('28e2a56e-3c76-4d19-844f-a3092954f0b7', '19850217 201504 2 002', NULL, NULL, NULL, 'Encik Eko Rifkowaty', NULL, 'S.TP.,M.P', 'Pontianak', '1985-02-17', 'Perempuan', 'Islam', '$2y$10$LJeKz9pSyONXaiZ1okiIZuujsCE2dop8EpJQ3wg6IuUlIgnxQ/ON2', '2022-07-05 01:52:13', '2022-07-05 01:52:13'),
('29157361-a115-43a4-86ed-fbe66964c0d7', '19810521 202121 1 006', NULL, NULL, NULL, 'Dedi Sartono', NULL, 'A.Md', 'Ketapang', '1981-05-21', 'Laki-laki', '', '$2y$10$n./ox.f6W4lLuS/JWquWW.2t/s2MP5vyt5y3U..cLHtcShENZNU5S', '2022-07-05 01:52:13', '2022-07-05 01:52:13'),
('295e592a-3426-40a6-899c-8860e5929164', NULL, '19911010 201507 155', NULL, NULL, 'Lita Nurpuspita Sari', NULL, 'S.Sos.', 'Singkawang', '1991-10-10', 'Perempuan', 'Islam', '$2y$10$AecipZa1HqG8WON4hDnQXuSbcKfvAKraaUVduzzk8EwyQiUKHYIHC', '2022-07-05 01:52:13', '2022-07-05 01:52:13'),
('29cb26c6-4361-4341-971d-07be567f2a6f', NULL, '19820601 201602 198', NULL, NULL, 'Lusia Romana', NULL, 'S.IP', 'Pantan', '1982-06-01', 'Perempuan', '', '$2y$10$Hf21MfMLSomvD2hr92bU4uSem1ffMnKPWPz5o5XKEj7TjqJTtsKrS', '2022-07-05 01:52:13', '2022-07-05 01:52:13'),
('30ccea2e-48be-4213-ae9a-379abd41a42c', NULL, '19821217 201509 164', NULL, NULL, 'Beny Setiawan', NULL, 'S.TP.,M.P', 'Pontianak', '1982-12-17', 'Laki-laki', 'Islam', '$2y$10$fxDQ1y4HZurv26w2mBDKkOqWT70Ej9yLLn5aOiXygF1rQbe799pbO', '2022-07-05 01:52:13', '2022-07-05 01:52:13'),
('30f2648e-3a3a-45a0-bdc2-e984af4abb7f', '19890705 202121 1 002', NULL, NULL, NULL, 'M. Iwan Toro', NULL, 'A.Md.', 'Pebihingan', '1989-07-05', 'Laki-laki', 'Islam', '$2y$10$qoy5V/DVmysIo3QkTsfQc.qt.5WsRmNEnk/y3wK8zFt4N2vRmwOa2', '2022-07-05 01:52:13', '2022-07-05 01:52:13'),
('31236e8b-5191-4433-95a9-0390e1e13ac1', NULL, '19931213 201601 183', NULL, NULL, 'Yunita', NULL, 'A.Md', 'Ketapang', '1993-12-13', 'Perempuan', 'Islam', '$2y$10$Ufv9w5immxWCF3mo1c9gaufwLyZFhn2o9aKoNLPInsscWZY8SZKO6', '2022-07-05 01:52:13', '2022-07-05 01:52:13'),
('321326cb-17cd-4634-bdc8-619c26d4aea3', NULL, '19911112 201411 146', NULL, NULL, 'Winda Arlianty', NULL, 'S.Kom.', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$RRAkNcKx6jVbA0QFPjLgo.CWKL89S7xnq1xZluRV9nmNBF4R/a7Ne', '2022-07-05 01:52:13', '2022-07-05 01:52:13'),
('32d16bd7-58b5-487a-aab3-66cbb4801605', '19761218 202121 1 004', NULL, NULL, NULL, 'Abang Suryadi', NULL, 'A.Md', 'Putussibau', '1976-12-18', 'Laki-laki', 'Islam', '$2y$10$Zr5biZRbrENAaVUnv6hbO.WK/axnd25osALvYhKnUjJGvw.tsMM3m', '2022-07-05 01:52:13', '2022-07-05 01:52:13'),
('35a66251-da37-4d69-b652-7eee40512ca2', '19820521 202121 1 003', NULL, NULL, NULL, 'Refid Ruhibnur', NULL, 'S.ST., M.M.', 'Pontianak', '1982-05-21', 'Laki-laki', 'Islam', '$2y$10$jUgEcHX18fYxhJLP4Ayv/OE.YBbmYbQyW19ZPqi0LnI29eRXPvcN.', '2022-07-05 01:52:14', '2022-07-05 01:52:14'),
('384a1c52-c826-4a58-9dac-effcab2e701a', NULL, '19901117 201604 205', NULL, NULL, 'Uci Novianti', NULL, 'S.Pd', 'Ketapang', '1990-11-17', 'Perempuan', '', '$2y$10$FirbxosmvDaOtsZmwaX0j.fUZV2g4/xuBsKbUZA1dwt2c6xX0V7z.', '2022-07-05 01:52:14', '2022-07-05 01:52:14'),
('38e42c98-b490-4f03-a289-35939e035cfa', NULL, '19900123 201601 178', NULL, NULL, 'Irfan Cholid', NULL, 'S.P.,M.MA', 'Ketapang', '1990-01-23', 'Laki-laki', 'Islam', '$2y$10$KW2RJGaonTNOpC6Es6TFWeUKDilNckeAUwKH6h4ru0ADn78eH0pAG', '2022-07-05 01:52:14', '2022-07-05 01:52:14'),
('3a1f1872-c67a-4bc7-9f92-0c852f44e1ec', NULL, NULL, NULL, NULL, 'Agus Sudrajat', NULL, '', 'Banyumas', '1979-06-08', 'Laki-laki', '', '$2y$10$OUZmEXcN93dS2k3cvN1l2.MuJrol9ugt46/JDmLooBZzU6Ahq76ge', '2022-07-05 01:52:14', '2022-07-05 01:52:14'),
('3ae1bb68-15ef-4eaa-a153-0d7dd87c6654', NULL, NULL, NULL, NULL, 'Rosnila', NULL, '', 'Sembelangaan', '1967-01-05', 'Perempuan', '', '$2y$10$zwRjz3ZVcbZ9cx35wlTT6uGsrYoURlEZ1S.Z52GOyOe2.SARFvmS.', '2022-07-05 01:52:14', '2022-07-05 01:52:14'),
('3bb510ed-d9cc-4ae5-bf83-ecb726cbc832', '19640914 198601 1 003', NULL, NULL, NULL, 'Temy Akhyar', NULL, NULL, NULL, NULL, 'Laki-laki', 'Islam', '$2y$10$087Ur0M1a.BoCeNso4elFeF1DARV/cE..hVWlG8Xr9ebJSKJT4ydy', '2022-07-05 01:52:14', '2022-07-05 01:52:14'),
('3c7a9d69-339d-4ee3-9943-b9acec923fc5', NULL, '19871107 201507 156', NULL, NULL, 'Lukman Faisal', NULL, 'S.H.', 'Singkawang', '1987-11-07', 'Laki-laki', 'Islam', '$2y$10$GonO0P7pwGQC5/53c2M0eeyJgfWkRfyl4BGlDEjy3OjMZwSZczgbq', '2022-07-05 01:52:14', '2022-07-05 01:52:14'),
('3eeb6e49-8f87-483b-b811-e7b91dc94a8d', NULL, '19911121 201701 214', NULL, NULL, 'Anugrah Bayu Saputra', NULL, 'A.Md', 'Pontianak', '1991-11-21', 'Laki-laki', 'Islam', '$2y$10$3MzVkdpqER0ySnrBZ6PZaOeGY6qtfW29wv1OdsM47xivwEkPcDsii', '2022-07-05 01:52:14', '2022-07-05 01:52:14'),
('3f60bbb2-e5e2-4297-b003-62fe2ffebf43', NULL, '19980609 202104 252', '6104120906980003', 'junaidiju4109@gmail.com', 'Junaidi', NULL, 'A.Md.Kom', 'Ketapang', '1998-06-09', 'Laki-laki', 'Islam', '$2y$10$RHVivF8KQgYHcmY62.rayOVhDSHnqpVs.VpxAVRK/UvWGbMwmubVK', '2022-07-05 01:52:14', '2022-07-05 01:52:14'),
('42e5ae5d-611b-4c00-833e-ea735145b325', NULL, '19930216 201809 240', NULL, NULL, 'Ira Arianti', NULL, 'S.P.,M.P', 'Ketapang', '1993-02-16', 'Perempuan', '', '$2y$10$PcAJSMT.p6KO6nklItFGGOROCThFWWy2JGzC4cR96HOwXNeBd3GGK', '2022-07-05 01:52:14', '2022-07-05 01:52:14'),
('436521dd-c443-4db6-89ae-9e237e349402', '19791002 202121 2 008', NULL, NULL, NULL, 'Erma Novita', NULL, 'A.Md', 'Ketapang', '1979-10-02', 'Perempuan', 'Islam', '$2y$10$iKF/FoQxiMc6tXQLk9UNEuHnRMFfryebaoTS0t4/8W.b04b8mFe.u', '2022-07-05 01:52:14', '2022-07-05 01:52:14'),
('43a2c3e2-6794-4fe3-a410-260d71bec47d', NULL, '19840207 201001 092', NULL, NULL, 'M. Hanif Faisal', NULL, 'M.T.', 'Pontianak', '1984-02-07', 'Laki-laki', '', '$2y$10$zXCahEzkUm67Es7WH1ugquItGQRfPU3IOkdXymT9X3ljmUYxPdoke', '2022-07-05 01:52:15', '2022-07-05 01:52:15'),
('4408ed64-f04d-48df-ba7f-9b082c9438fc', NULL, NULL, NULL, NULL, 'Ary Rubiyanto', NULL, '', 'Ketapang', '1989-02-18', 'Laki-laki', '', '$2y$10$jZzOoQ0f1Wp9bfiVMbxmXeS5/3bmhCre4lDv9C3tAd1r.dJzeUEUa', '2022-07-05 01:52:15', '2022-07-05 01:52:15'),
('44c7b811-eae2-42cb-b1d6-243f09822b99', '19890816 201903 1 002', NULL, NULL, NULL, 'Ahmad Ravi', NULL, 'S.Pd.,M.Pd', 'Masamba', '1989-08-16', 'Laki-laki', 'Islam', '$2y$10$tjU8.OwnKerpOyCpDKvaku2SnkLBJ6.dJ4cYnLq/xZTjib2OtRW.G', '2022-07-05 01:52:15', '2022-07-05 01:52:15'),
('458c592c-348c-46d1-b344-b792fb64d42c', NULL, '19980908 202008 241', '6104174809980004', NULL, 'Shela Krisdayanti', NULL, 'A.Md.P', NULL, '1998-09-08', 'Perempuan', 'Islam', '$2y$10$9vbY6dT3Nmx.CoFf0N9YF.HH/K9tRQQjZ8XlOPgfuHyhd6XmkbUFi', '2022-07-05 01:52:15', '2022-07-05 01:52:15'),
('47ceee1a-b33b-4239-9a46-1e58b5a672ad', NULL, '19830627 201512 176', NULL, NULL, 'Wienda Soesanti Putri', NULL, 'SE', 'Surabaya', '1983-06-27', 'Perempuan', 'Islam', '$2y$10$ZoGnGGQ3PsU8agm1dtk9QujBjy.ajLr2vResRsREF1FtCdr571n5u', '2022-07-05 01:52:15', '2022-07-05 01:52:15'),
('4839ee6d-2c3e-426a-9354-7db9e48ae439', '19880808 202121 1 001', NULL, NULL, NULL, 'Erwin', NULL, 'A.Md', 'Ketapang', '1988-08-08', 'Laki-laki', 'Islam', '$2y$10$Rv4t64f4UdGFDx4o2L1XU.T2OcmFWtvXKyB8I.YU2NGj6eA7FpGpO', '2022-07-05 01:52:15', '2022-07-05 01:52:15'),
('488fb59f-f26b-48f9-96a9-fad9e800e4d1', '19891023 202121 1 001', NULL, NULL, NULL, 'A.Yani', NULL, 'SP', 'Ketapang', '1989-10-23', 'Laki-laki', 'Islam', '$2y$10$br2/IzG5m6uGx0YROmPTbeLlOsu864QFsuOb80yTQghm9PZoQ4kFa', '2022-07-05 01:52:15', '2022-07-05 01:52:15'),
('49ce6c30-837f-45c3-8e2c-6f9870ebc2e9', '19750116 202121 1 003', NULL, NULL, NULL, 'Tardi Kurniawan', NULL, 'S.Sos,.M.Si', 'Pontianak', '1975-01-16', 'Laki-laki', 'Islam', '$2y$10$tJ5yr3LLOONouh6sBgWOE.fSRk0Q91UeaojDXPpF/W4dTQ4eSch2u', '2022-07-05 01:52:15', '2022-07-05 01:52:15'),
('4c3d0071-440e-4e4a-837f-59eea1cc348e', NULL, NULL, NULL, NULL, 'Sy. Adly', NULL, '', 'Ketapang', '1980-09-04', 'Laki-laki', '', '$2y$10$P7Ic2Jg8ru9Re6OCfQ.pUeXcbD8nSnhJBSFhoDn9uzEO4dfWbgZVW', '2022-07-05 01:52:15', '2022-07-05 01:52:15'),
('4d744851-78a2-40b9-ada0-0a17f50d990e', '19790626 202121 1 006', NULL, NULL, NULL, 'Sy. Ishak Alkadri', NULL, 'S.ST., M.T', 'Pontianak', '1979-06-26', 'Laki-laki', 'Islam', '$2y$10$0KH0JpxZCaU2rTVfKc0Xw.SjmxiMG7QuhODpaGZu0b4eB08ckA5em', '2022-07-05 01:52:15', '2022-07-05 01:52:15'),
('4e441045-7e87-46c6-8f0c-68298b2934ae', NULL, '19770627 201601 187', NULL, NULL, 'Masyhudi', NULL, 'SE', 'Jakarta', '1977-06-27', 'Laki-laki', 'Islam', '$2y$10$rz4eqee1FmMuDNqOakOjiuzj9Com0lSI5HSvUJMfBy2oS/5INQYZ2', '2022-07-05 01:52:16', '2022-07-05 01:52:16'),
('4eae5a1d-bc44-4301-afd8-833a1bd0f6cf', '19880919 201903 1 014', NULL, NULL, NULL, 'Herman', NULL, 'S.Si.,M.T', 'Singkawang', '1988-09-19', 'Laki-laki', 'Budha', '$2y$10$OY6ufRpquqiNrfevZ4XMD.sRgp.pwpAAuJoeu9D6X0GdH2Iq03Cre', '2022-07-05 01:52:16', '2022-07-05 01:52:16'),
('50660972-640c-49bd-b4f3-b988cfa241ec', '19910414 201903 1 008', NULL, NULL, NULL, 'Sy. Muhammad Zaki', NULL, 'SST', 'Ketapang', '1991-04-14', 'Laki-laki', 'Islam', '$2y$10$w1kMBrlibkkxGTvQkBYBNeHa9oXPMobOF05UCFvtc13WhUB49i4/W', '2022-07-05 01:52:16', '2022-07-05 01:52:16'),
('5123ac8d-c8fb-436a-b417-28a153cf6c16', '19921021 201903 2 017', NULL, NULL, NULL, 'Diani Dwi Oktavianti', NULL, 'S.ST', 'Putussibau', '1992-10-21', 'Perempuan', 'Islam', '$2y$10$KadhGO5qLfKSFYQMyM1z/OsY2zfK5MsItc2VY0Iz8p9CZEtjUr9Ei', '2022-07-05 01:52:16', '2022-07-05 01:52:16'),
('51a80ae5-f512-4310-8243-2a4abe75a345', NULL, NULL, NULL, NULL, 'Sy. Abdurrahman', NULL, '', 'Pontianak', '1980-05-09', 'Laki-laki', '', '$2y$10$kLUv3OirDPthboWi9nWQQO4lN5nRUQtt.i.VH2aHeyf4F49WPPY2O', '2022-07-05 01:52:16', '2022-07-05 01:52:16'),
('53765b6c-4322-4c67-956a-12f6b811fdbc', NULL, '19910102 201406 134', NULL, NULL, 'Januarso', NULL, 'S.P.', 'Ketapang', '1991-01-02', 'Laki-laki', 'Islam', '$2y$10$QIjNYSrdS2r4lEyZJhUdmem460ZKOC6/a88HTRdvDUYcYJL5RMnSu', '2022-07-05 01:52:16', '2022-07-05 01:52:16'),
('54981c04-da78-4aa6-93db-6b30fb625794', NULL, NULL, NULL, NULL, 'Uti Nailul Auhar', NULL, '', 'Ketapang', '1983-06-16', 'Laki-laki', '', '$2y$10$C6u.Yqvf47Cx8BfQGS34.ez9m91ORTyRytv14MRRjFMkgZLOYCYDK', '2022-07-05 01:52:16', '2022-07-05 01:52:16'),
('56391bb3-7220-4c57-97d8-c5e72987d775', NULL, NULL, NULL, NULL, 'Zulinda', NULL, '', 'Ketapang', '1979-09-28', 'Laki-laki', '', '$2y$10$mS1GpkVaRvqoBqUCsgC0/.y.fXLIr5em8TUV/ffmf0WrbIDdkk9Cu', '2022-07-05 01:52:16', '2022-07-05 01:52:16'),
('56d27921-8de3-4a64-8db0-fa30ec6d9a85', '19820701 202121 2 009', NULL, NULL, NULL, 'Novia Dhian Yulita', NULL, 'A.Md', 'Ketapang', '1982-07-01', 'Perempuan', 'Islam', '$2y$10$RzJq1z8uSbZcOb2Zu4jY/eLWGqlehwqc4rEirCzlbjRksGlNjKku.', '2022-07-05 01:52:16', '2022-07-05 01:52:16'),
('57e7dded-12ef-41c3-a728-71bee06f9526', NULL, '19941011 201803 239', NULL, NULL, 'Alan Purtanto', 'Ir.', 'M.T', 'Sintang', '1994-10-11', 'Laki-laki', 'Katholik', '$2y$10$SdCs98fgLoe6wlsS.o68t.BwNS19a7.qdbox038SEbFEiZnC9U9cS', '2022-07-05 01:52:16', '2022-07-05 01:52:16'),
('58563118-abc4-4d1b-93a4-58e327972409', NULL, NULL, NULL, NULL, 'Desy Putri Syafrianti', NULL, 'S.Kom', 'Sekadau', '1991-12-02', 'Perempuan', 'Islam', '$2y$10$1bkD2kZWBy8hD/3LLomVjOSbH3kDkzmn2LXJD/owxUvz1G0kVUUoi', '2022-07-05 01:52:16', '2022-07-05 01:52:16'),
('589661c7-7bc4-4517-aeda-812297d91c0c', '19940812 201903 2 019', NULL, NULL, NULL, 'Fionna Araminta Fabiola', NULL, 'S.E', 'Ketapang', '1994-08-12', 'Perempuan', 'Islam', '$2y$10$Cxt/0O7UGvCaATFsnT9Li.joSscGfQK8peyOh53VEfg4oTWKlfzhm', '2022-07-05 01:52:17', '2022-07-05 01:52:17'),
('5997603c-54d6-4b59-bb77-0fda630ee588', NULL, '19910127 201509 166', NULL, NULL, 'Pusparini Akhmad', NULL, 'S.Si', 'Palembang', '1987-01-27', 'Perempuan', 'Islam', '$2y$10$CjAsEC9FyiO/cL8eGXeDo.dKupMnHUWXZz8G4qDLHYMHUZ4LQVp0m', '2022-07-05 01:52:17', '2022-07-05 01:52:17'),
('5cde66a2-643d-46ea-83b0-7b1de9399637', NULL, '19890404 201512 117', NULL, NULL, 'Irfan', NULL, 'A.Md', 'Teluk Melano', '1989-04-04', 'Laki-laki', '', '$2y$10$ixFTwIs8gYfXQ5MG6JZ7cOinkxjS7mQ4wFkQwezCJn7Vlfz1TIXD.', '2022-07-05 01:52:17', '2022-07-05 01:52:17'),
('5e418a66-3916-43d2-aabb-6ff1908d25f4', '19741026 202121 2 003', NULL, NULL, NULL, 'Utin Ida Fitriana', NULL, 'SE', 'Ketapang', '1974-10-26', 'Perempuan', 'Islam', '$2y$10$vmtZzWpXXrpnZ2QLUNXYCOHo5ozDhGALwVog4bJQpZfc10HO4RwTu', '2022-07-05 01:52:17', '2022-07-05 01:52:17'),
('5e636dc2-6006-420e-88ac-18b7521e50bb', NULL, '19961218 202008 250', '6104175812960003', NULL, 'AMANDA TIARA REZKI', NULL, 'SM', NULL, '1996-12-18', 'Perempuan', 'Islam', '$2y$10$9FTkg06PwDQHcV58.zk1seVq9wa368QnqftKerUehBMcMJsd4pjVS', '2022-07-05 01:52:17', '2022-07-05 01:52:17'),
('5eb61db0-c4dc-4013-b48d-7aaafd73b9b6', NULL, NULL, NULL, NULL, 'Suherman', NULL, '', 'Ketapang', '1988-10-12', 'Laki-laki', '', '$2y$10$UFGqZsPLhqyDUIc4hmpn5OOJl.nEAIzTFdu1Vay5ao923HIGyyyW6', '2022-07-05 01:52:17', '2022-07-05 01:52:17'),
('5fb62dca-5b17-44ef-8849-257eaf4c8cc2', '19840105 202121 1 003', NULL, NULL, NULL, 'Epriyandi', NULL, 'S.T.,M.T', 'Ketapang', '1984-01-05', 'Laki-laki', 'Islam', '$2y$10$UwWKUZGcF0eL7CvZM0u1n.F35tcGYsWYgSgivXUEo1/jpZSYo0Qk.', '2022-07-05 01:52:17', '2022-07-05 01:52:17'),
('5ffd6435-601b-4276-8c73-53c7cecdd701', '19801126 202121 2 005', NULL, NULL, NULL, 'Novitawati', NULL, 'A.Md', 'Ketapang', '1980-11-26', 'Perempuan', 'Islam', '$2y$10$M9Dnj4fT8EA3jchUiGQXpO7ww4pjIPWmPoCTN8pVARLW231MdyviS', '2022-07-05 01:52:17', '2022-07-05 01:52:17'),
('6351842b-6db4-4549-94c6-587f7e8d3883', '19840425 202121 1 001', NULL, NULL, NULL, 'Khairul Muttaqin', NULL, 'S.Pd.I.,M.Ag.', 'Singkawang', '1984-04-25', 'Laki-laki', 'Islam', '$2y$10$0qSuT3wtlMatyI8JDdE/XOBc5trSWoU0mI5WcWym9BuVjsw2edBnS', '2022-07-05 01:52:17', '2022-07-05 01:52:17'),
('643a252e-3129-4f67-aba4-8ad6cbaca0c8', '19930818 201903 2 026', NULL, NULL, NULL, 'Firmanilah Kamil', NULL, ' S.Pd.,M.Pd', 'Malang', '1993-08-18', 'Perempuan', '', '$2y$10$j0SIt9tSxx9mBafqcvNJ7.jphHgheknJnP3fpfcatXiOuA5IOYAo2', '2022-07-05 01:52:17', '2022-07-05 01:52:17'),
('652d3790-71e1-449e-88fb-a380428c0135', '19900619 202121 1 001', NULL, NULL, NULL, 'Zulpandi', NULL, 'A.Md', 'Ketapang', '1990-06-19', 'Laki-laki', 'Islam', '$2y$10$o9ODuwpSJfW.YfJ2EDrbLOJbjy0GbRgFweRyWhBUnnUaUMu4fTWmK', '2022-07-05 01:52:17', '2022-07-05 01:52:17'),
('68117ca1-bd03-47f2-849f-08f9d7c0d593', NULL, '19870311 201601 179', NULL, NULL, 'Sopiana', NULL, 'S.P.,M.Si', 'Mentibar', '1987-03-11', 'Perempuan', 'Islam', '$2y$10$1X4fY8GD.OWv07.QCbn6oudv//gp4tctSEiU52yDG6B7V92k5oola', '2022-07-05 01:52:18', '2022-07-05 01:52:18'),
('6885f19d-bc29-4b2b-9062-c2fedf8efc79', NULL, '19820623 201509 169', NULL, NULL, 'Saifudin Usman', NULL, 'S.T., M.Tr.Kom', 'Pontianak', '1982-06-23', 'Laki-laki', 'Islam', '$2y$10$1TbD504k5H3pk.oZ4M5tlenVPed8GOwj8zeM4ZYl0hntzKKTU2vq2', '2022-07-05 01:52:18', '2022-07-05 01:52:18'),
('6c395ad5-e91f-47f3-aa21-bc294c185ada', '19880830 201803 2 001', NULL, NULL, NULL, 'Venti Jatsiyah', NULL, 'S.P.,M.Si', 'Sambas', '1988-08-30', 'Perempuan', '', '$2y$10$IY9iN9ddGshPeOvP8EiYs.Xq6cw.lrd3ZX0lA1HLD7RKEzMaYhSxy', '2022-07-05 01:52:18', '2022-07-05 01:52:18'),
('6d42c4a4-f4de-4a38-9b96-bc7f1ee1bea4', NULL, '19790731 201211 123', NULL, NULL, 'Henny Yulianti', NULL, 'A.Md.', 'Ketapang', '1979-07-31', 'Perempuan', 'Islam', '$2y$10$SLmLW9uK0wZsWryAZa.BXea8kIiFyq/KniFzSs7FRN4Rf3YNvyIRG', '2022-07-05 01:52:18', '2022-07-05 01:52:18'),
('6da9d71f-9c64-40cf-b6b7-2d0657767ca4', '19771006 199703 1 003', NULL, NULL, NULL, 'Untoro Budi Harjanto', NULL, NULL, 'Yogyakarta', '1977-10-06', 'Laki-laki', 'Islam', '$2y$10$e1vEqQBMjAOLR48.fhGnOuIWTMSZUN8ClQQXHWpFATmcLQ8hopEd.', '2022-07-05 01:52:18', '2022-07-05 01:52:18'),
('6ed6b0f9-dc4b-4b84-90b6-099cfdd2e1c2', '19721212 202121 2 006', NULL, NULL, NULL, 'Utin Aimanul Habasiah', NULL, 'S.Sos', 'Ketapang', '1972-12-12', 'Perempuan', 'Islam', '$2y$10$7zCnALdzNQt2fXhiGvc2AueR0OI9blQoz9Ll12cfSnyctWVor5dgC', '2022-07-05 01:52:18', '2022-07-05 01:52:18'),
('6f6de946-5158-424c-8bfe-aa4b8a9c4df6', '19811225 201503 1 001', NULL, NULL, NULL, 'M. Rangga CH', NULL, 'S.Kom', 'Ketapang', '1981-12-25', 'Laki-laki', 'Islam', '$2y$10$IgNkc.rzDv0JBAGf8CWXTOsf3t1.Dizroh4qkbF1fQfLIa.d7nzla', '2022-07-05 01:52:18', '2022-07-05 01:52:18'),
('709b3b4e-969a-4c04-9e92-5e5654ea1172', '19861031 202121 1 001', NULL, NULL, NULL, 'M. Jimi Rizaldi', NULL, 'S.ST.,M.T', 'Ketapang', '1986-10-31', 'Laki-laki', 'Islam', '$2y$10$556RMhGgyUrHnKobQJjs0.KeKFRJ8gNZlckuMcG88Ktp52dMHtHbS', '2022-07-05 01:52:18', '2022-07-05 01:52:18'),
('71b2657e-188b-4504-b605-6a488d35875a', NULL, '19871218 201512 173', NULL, NULL, 'Assrorudin', NULL, 'S.Pd.,M.Pd', 'Sidoarejo', '1987-12-18', 'Laki-laki', 'Islam', '$2y$10$hAvLbl5AKNT/UL215yDZj.I/qj2sTTHQA0uLHsDXQImXg4mePNrM6', '2022-07-05 01:52:18', '2022-07-05 01:52:18'),
('73d67075-744c-43c1-b3db-90e635121b08', NULL, NULL, NULL, NULL, 'Almiana', NULL, '', 'Ketapang', '1974-05-07', 'Perempuan', '', '$2y$10$3dy0Ufotfnd.Oph31O2UZeH0cIsKapnFCBYqxvnvnh3VKaC1vPANe', '2022-07-05 01:52:18', '2022-07-05 01:52:18'),
('769cc3ea-a955-4af8-9d8b-1509351aded3', '19910704 201903 1 015', NULL, NULL, NULL, 'Darmanto', NULL, 'M.Kom', 'Ngawi', '1991-07-04', 'Laki-laki', 'Islam', '$2y$10$PKZS4eEa5d4xthrQYkc/sudlSLOqto7F7zAgiTPPW20J/273n1nTK', '2022-07-05 01:52:19', '2022-07-05 01:52:19'),
('78b3c200-ec4f-427c-be1e-eb899e259673', '19810822 202121 1 002', NULL, NULL, NULL, 'Awang Roy Lesmana', NULL, 'A.Md', 'Pontianak', '1981-08-22', 'Laki-laki', '', '$2y$10$x6GPN0f5KUu21P8HPEksUeHlO06OF9xvGKheUIz16kHMEZV3OpgS.', '2022-07-05 01:52:19', '2022-07-05 01:52:19'),
('792d0bfd-2dc1-4f35-8a26-83a306dacfdc', '19900921 202203 1 005', '19900920 201603 201', NULL, NULL, 'Ivan Suwanda', NULL, 'M.T', 'Pontianak', '1990-09-20', 'Laki-laki', 'Islam', '$2y$10$4qFIhm5gbHtZKQ8zF1W7jOUpbLJzNn49VCY1YGilXq9kxbT8ona9q', '2022-07-05 01:52:19', '2022-07-05 01:52:19'),
('799b456b-0e87-49de-8367-d2e78e9e74ae', NULL, '19841114 200801 047', NULL, NULL, 'Ningrum Dwi Hastuti', NULL, 'S.TP.,M.P', 'Klaten', '1984-11-14', 'Perempuan', '', '$2y$10$SvdaAQ.DrPNse2THcwY1ce2./c20dveRzMAE0nd0USSJICrzclMiC', '2022-07-05 01:52:19', '2022-07-05 01:52:19'),
('79ae72a0-23be-4b20-ba79-703fb35a5eca', '19840504 201903 1 007', NULL, NULL, NULL, 'AKHDIYATUL', NULL, 'S.ST.,M.T', 'Ketapang', '1984-05-04', 'Laki-laki', 'Islam', '$2y$10$gs6FcmmTRzqFf7haNOo.4eT9jmMmT.DwqoTkovAy1xkKHHvRHwt82', '2022-07-05 01:52:19', '2022-07-05 01:52:19'),
('7a8c08a9-467b-4afe-8abf-07f6c2431afb', NULL, '19860615 200810 025', NULL, NULL, 'Endi', NULL, 'SE', 'Mambuk', '1986-07-15', 'Laki-laki', 'Islam', '$2y$10$HXn3Q90xHljHozjYpJZyXOXoZHOjGmDcWG9bYD2FzmHdSnbWM1J46', '2022-07-05 01:52:19', '2022-07-05 01:52:19'),
('7acb40e6-5725-40ae-a4ec-02f6ed63bd94', '19830526 201504 1 001', NULL, NULL, NULL, 'Anto Susanto', NULL, 'SST, M.P', 'Bandung', '1983-05-26', 'Laki-laki', 'Islam', '$2y$10$ZsWiMQ4OjwGfT28zTWlKbeyKrEaWk/yEiDkEALL35MHCrhomH94om', '2022-07-05 01:52:19', '2022-07-05 01:52:19'),
('7bd1033c-7dfe-4f83-9aad-e11c292b1d84', NULL, NULL, NULL, NULL, 'Satira', NULL, '', 'Ketapang', '1974-09-06', 'Perempuan', '', '$2y$10$cnCGA0uJhMtP2.CuCJ7RCu8BYDG8kduJhq0bIY6KQJbvCWEBhN93a', '2022-07-05 01:52:19', '2022-07-05 01:52:19'),
('7bea437a-8777-4c94-bf63-8e0ca9651691', '19640610 202121 1 004', NULL, NULL, NULL, 'Uti Sahibul Hekmi', NULL, 'A.Md', 'Ketapang', '1964-06-10', 'Laki-laki', 'Islam', '$2y$10$QzN0ie1CH1ymWqfxk7dPku4D5JWjt50mlmXL.pH5JNdIb/ZVo0VF.', '2022-07-05 01:52:19', '2022-07-05 01:52:19'),
('7c7c26c8-47b9-48b3-8499-7ef04f7564ec', '19831001 202121 2 004', NULL, NULL, NULL, 'Nely Kurnila', NULL, 'S.Pd., M.Pd', 'Ketapang', '1983-10-01', 'Perempuan', 'Katholik', '$2y$10$LyI1ons9w.VAXQ0VmrUaYuBgTaeR0qToQo6gmM7jVj/ug9IwoFJXK', '2022-07-05 01:52:20', '2022-07-05 01:52:20'),
('7e03dfc9-498e-4b16-8bce-d4823ce87ba8', NULL, '19860710 201204 118', NULL, NULL, 'Mustapa', NULL, ' A. Md', 'Ketapang', '1986-07-10', 'Laki-laki', '', '$2y$10$iAIrLUcu0a1LzXAVzfKiOO3xcIM/OBwASMGT9M028FETRddiErB9C', '2022-07-05 01:52:20', '2022-07-05 01:52:20'),
('8084ae53-5ac6-40a7-9f5f-dea40fa2aab5', '19870114 201903 1 007', NULL, NULL, NULL, 'Eka Wahyudi', NULL, 'S.Pd., M.Cs', 'Mekar Asri', '1987-01-14', 'Laki-laki', 'Islam', '$2y$10$R0HkgGq7ukYs3l3pZCQKWO4WmJDmcYtesl3I8/JDxAvAQ89IfbNEa', '2022-07-05 01:52:20', '2022-07-05 01:52:20'),
('86f15cfc-fcb7-47a6-ae81-5129f6ef4ddc', '19910310 202121 1 001', NULL, NULL, NULL, 'Sarijanto', NULL, 'A.Md', 'Ketapang', '1991-03-10', 'Laki-laki', '', '$2y$10$FNxNPcGsXZphOjxoJSwT9.E4sNdc05Byh92wAdhmgtADe0LxqGEa2', '2022-07-05 01:52:20', '2022-07-05 01:52:20'),
('87284e92-8239-44a0-86cd-2040f3406f47', '19870716 202121 1 001', NULL, NULL, NULL, 'Deden Nugraha', NULL, 'S.P', 'Sukaresmi', '1987-07-16', 'Laki-laki', 'Islam', '$2y$10$xaEz8THZthPXltMfZkzzSOGeyXlEJNiOkjA9mCsQux28e9OlvczE6', '2022-07-05 01:52:20', '2022-07-05 01:52:20'),
('8784ed8e-9d88-44a6-bb02-3f085de35b8c', NULL, '19890124 201512 172', NULL, NULL, 'Firman', NULL, 'S.Pd., M.P.Fis', 'Ketapang', '1989-01-24', 'Laki-laki', 'Islam', '$2y$10$FLwbQLO556vj4jPbr4OsZ.bk2Y5AWPyMRDKfCPnulBZzSFxxMDt3W', '2022-07-05 01:52:20', '2022-07-05 01:52:20'),
('891f6a6b-8bd9-4ad4-bdd6-13c7b2d46782', NULL, '19950704 201708 222', NULL, NULL, 'Utin Kurnia Putri', NULL, 'A.Md', 'Semarang', '1995-07-04', 'Perempuan', 'Islam', '$2y$10$6zGzk2J0EJHMJJSvJ.4KUO2TSDi0JHZaPjXxZmLn3PULHhZ2gUFs6', '2022-07-05 01:52:20', '2022-07-05 01:52:20'),
('89286b3a-69ef-47dc-8038-34175938abbc', NULL, '19880611 201601 196', NULL, NULL, 'Maya Andriana', NULL, 'SE', 'Teluk Melano', '1988-06-11', 'Perempuan', '', '$2y$10$XU2SOmIZEK8xY3XOMPXsNu4S7hcFo4G9G6PmU7898/PuYYmpO/lEm', '2022-07-05 01:52:20', '2022-07-05 01:52:20'),
('8961f1e3-2848-4d15-b6b9-d79fdaa8a107', NULL, NULL, NULL, NULL, 'Karmila', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$smxMu4euDCnHwHDTBGkyeu60kKmIErzq/PhJus4kxJ9bPFb0A6yTu', '2022-07-05 01:52:20', '2022-07-05 01:52:20'),
('8a2a0fc9-7adb-47bc-978f-a12b9db859aa', '19860414 201903 2 011', NULL, NULL, NULL, 'Rosmalinda', NULL, 'S.ST.,M.P', 'Karang Baru', '1986-04-14', 'Perempuan', 'Islam', '$2y$10$RNQy9BNbYhy8sZguxImmmOib3llJvlZXKzSD8JYoq3PemvPY/tEFi', '2022-07-05 01:52:20', '2022-07-05 01:52:20'),
('8a593376-eea9-4931-b0d7-86b72fd79b74', NULL, NULL, NULL, NULL, 'Henni', NULL, '', 'Ketapang', '1985-07-05', 'Perempuan', '', '$2y$10$mFZxCFt6.8o1u.TDJFcGO.Z3BuyWfc9lkUIR2QeazkChXP4kHhbMm', '2022-07-05 01:52:21', '2022-07-05 01:52:21'),
('8a75b21c-c073-4a58-8bf6-de1a0f9b5438', '19860125 201803 1 001', NULL, NULL, NULL, 'Yusuf', NULL, 'S.ST., M.T', 'Ketapang', '1986-01-25', 'Laki-laki', 'Islam', '$2y$10$NexXuKZSlmavkwrM9Sckaesi/e3Q4EKRFEnufG8EeWlXdNyqhH3im', '2022-07-05 01:52:21', '2022-07-05 01:52:21'),
('8c2e117d-01ad-4da2-a049-5490e078db83', '19770906 202121 1 003', NULL, NULL, NULL, 'Edi Rahmanto', NULL, ' SE', 'Kelampai', '1977-09-06', 'Laki-laki', '', '$2y$10$dCYYZi8AMIW/GOlnYhWY8ufvTd05.oGvYeq.OByxJkTd8jm2muJ6S', '2022-07-05 01:52:21', '2022-07-05 01:52:21'),
('8c6fdd85-dccf-4df8-888d-61910ca28761', '19891028 201903 2 011', NULL, NULL, NULL, 'Roida Oktovia Sihombing', NULL, 'SE', 'Pontianak', '1989-10-28', 'Perempuan', 'Kristen', '$2y$10$iWl9rkxeDuObIRuPW2R/qeXLbq/042ft9x/c0ysm8uwWKE.ccQM1C', '2022-07-05 01:52:21', '2022-07-05 01:52:21'),
('8d1a9392-ee5b-4086-a103-c86dbf04d2c6', NULL, NULL, NULL, NULL, 'ADMIN EVENT', NULL, NULL, 'BUMI', '2021-01-01', 'Laki-laki', 'Islam', '$2y$10$GTFvPhJYQCFwx2bdpsPgxuANWtHPvapX6rFnLAF/yApnlELQkycS.', '2022-07-05 01:52:21', '2022-07-05 01:52:21'),
('8da944a0-f7df-43a4-8bda-cc6c2b01cb5f', '19841207 201903 1 005', NULL, NULL, NULL, 'Munawar Kholil', NULL, 'S.Si.,M.Pd', 'Pamekasan', '1984-12-07', 'Laki-laki', 'Islam', '$2y$10$MaVKf9D4Aeeo.DFTdNsaM.WP5l8QxJ45GaQR0G8DIig7oPCgkz/7S', '2022-07-05 01:52:21', '2022-07-05 01:52:21'),
('8dbaf7b4-fdc6-4664-ad8f-28925262baaf', NULL, '19900126 201409 141', NULL, NULL, 'Syarifah Mastura', NULL, 'S.Pd.', 'Ketapang', '1990-01-26', 'Perempuan', 'Islam', '$2y$10$Leego2/SUtLYIHs7ZuwQs.iEvUXRiq9F4g0mdj8QC1FOGHRvOMlKi', '2022-07-05 01:52:21', '2022-07-05 01:52:21'),
('8e33ce55-5330-4cb2-836e-a22a0800b01c', '19890424 202121 1 002', NULL, NULL, NULL, 'Halimansyah', NULL, 'A.Md.', 'Kendawangan', '1989-04-24', 'Laki-laki', '', '$2y$10$/WsCXt2vYfYZm45WfJDf4eSv6BUPc2zmwUOQFnP2irzO4Z2Yr4w7m', '2022-07-05 01:52:21', '2022-07-05 01:52:21'),
('8eea1d3b-f883-435d-a8a9-453e46053607', '19831217 201903 2 008', NULL, NULL, NULL, 'Alfath Desita Jumiar', NULL, 'S.P.,M.Si', 'Pontianak', '1983-12-17', 'Perempuan', 'Islam', '$2y$10$pLug91A4MnTYeU8uNy41y.MDcvQ0Zf7/lh9gbdWq1FtrbrHdFgaiy', '2022-07-05 01:52:21', '2022-07-05 01:52:21'),
('8fdecaee-a3ef-4096-9165-26476c4e4753', '19710814 200604 1 005', NULL, NULL, NULL, 'Hidayat', NULL, NULL, 'Ketapang', '1971-08-14', 'Laki-laki', 'Islam', '$2y$10$rqMYM3X/ss4VrqXFpHpDKeYrSVgREkwjbQ0HvelBd0ts6N.unKrSq', '2022-07-05 01:52:21', '2022-07-05 01:52:21'),
('8ffd423c-6a57-454d-b643-d1f134117073', NULL, '19780510 200801 055', NULL, NULL, 'Asep Ruchiyat', NULL, 'S.T.,M.T', 'Bengkayang', '1978-05-10', 'Laki-laki', 'Islam', '$2y$10$jaKR5yJA2Zr5743TYXu1HeDj/OuDqNS7KyQ0jipk1at0lXTnfZHIS', '2022-07-05 01:52:22', '2022-07-05 01:52:22'),
('908b7dcc-8b5f-4d2a-b745-3caacb11c1c9', '19900614 202121 2 001', NULL, NULL, NULL, 'Kurnia Dewi Permata Sari', NULL, ' A.Md', 'Ketapang', '1990-06-14', 'Perempuan', '', '$2y$10$BMf0d/FjKZHOj3oyBH3C8eCn1Gdl7xD0cBRALkpEbqti/fGD/kJ9O', '2022-07-05 01:52:22', '2022-07-05 01:52:22'),
('92408291-4e21-41bc-ba91-b632dbc03201', '19630804 198601 1 005', NULL, NULL, NULL, 'Safi\'ie', NULL, 'SE', NULL, '1963-08-04', 'Laki-laki', 'Islam', '$2y$10$mphKeqcTviKmsk52x7x78OpdvaOGUwKzGioNIZI6nALpI8HcQZ7nW', '2022-07-05 01:52:22', '2022-07-05 01:52:22'),
('966bb315-7f59-470d-aaae-c9a60336c823', NULL, NULL, '3318091606890003', NULL, 'Rois Indriawan', NULL, NULL, 'Pati', '1989-06-16', 'Laki-laki', 'Islam', '$2y$10$yGjxAFvKrqRIoDscddMF9.RmxhaQCTPCLmgj.XpNie..FKjviG6me', '2022-07-05 01:52:22', '2022-07-05 01:52:22'),
('966bb413-e9b5-46d7-9d60-6361134df0ea', NULL, NULL, '6172016207870003', NULL, 'Dewi Nurmayasari', NULL, NULL, NULL, NULL, 'Perempuan', '', '$2y$10$iw4qjWz2tRhGj87CXcj48eWrkwGMeDDlTMDCpT4krbhMJIeY9Y2Ry', '2022-07-05 01:52:22', '2022-07-05 01:52:22'),
('968a0145-7799-46f2-b501-e4a26899ac9a', NULL, '19881026 201707 221', NULL, NULL, 'Redika Maulidya', NULL, 'ST', 'Ketapang', '1988-10-26', 'Perempuan', '', '$2y$10$9lwMS7FnocziukW88J07R.9BpOisOnJYUf3cDYnuzaR0Yx0TGq4.C', '2022-07-05 01:52:22', '2022-07-05 01:52:22'),
('97693558-91bc-4335-b3cb-0311f337a795', '19631008 199603 1 003', NULL, NULL, NULL, 'Suratmin', 'Ir.', 'M.T', 'Ketapang', '1963-10-08', 'Laki-laki', 'Islam', '$2y$10$5ThLJY5zxovpG.dM0pGaBe7TpSU10edMCxcD5l2LIZGkfm2zrN06.', '2022-07-05 01:52:22', '2022-07-05 01:52:22'),
('98ae6c59-c188-498e-83e4-e511251529b7', NULL, '19840310 200801 017', NULL, NULL, 'Rustiarni', NULL, 'M.H', 'Ketapang', '1984-03-10', 'Perempuan', 'Islam', '$2y$10$xjYgl3EBBP.jtzorvQ5HXOMmolv8tC03BknWHs4G4Q5IpRcof/ruK', '2022-07-05 01:52:22', '2022-07-05 01:52:22'),
('98baf7ed-28bf-4a5d-8f4b-c0e789081d91', NULL, NULL, NULL, NULL, 'Muhammad Sa\'ari', NULL, '', 'Ketapang', '1963-06-23', 'Laki-laki', '', '$2y$10$j1fuoy7kC9hzM47LpMnx3esJGY1e7OTzVwq9TOmMaMoQOx8HaJBH6', '2022-07-05 01:52:22', '2022-07-05 01:52:22'),
('98db1f9b-7be6-446f-a5ab-46208a47867b', '19861109 201903 1 005', NULL, NULL, NULL, 'Rosi Arrasyid', NULL, 'A.Md', 'Sentebang', '1986-11-09', 'Laki-laki', 'Islam', '$2y$10$nMZKs1300UcPo8kicAljQ.ZGI42hkee4ZayStsSt/ocmphhfsxCf6', '2022-07-05 01:52:22', '2022-07-05 01:52:22'),
('99bba172-f59c-4bf4-a7df-31b6d3b00050', '19860923 201903 1 005', NULL, NULL, NULL, 'Yudi Chandra', NULL, 'S.ST., M.T', 'Ketapang', '1986-09-23', 'Laki-laki', 'Islam', '$2y$10$6QDE0pK7I6qDBSVB1LPazuQ/X8S/DzKXey8c.YgWs/YWHTlAFQbba', '2022-07-05 01:52:22', '2022-07-05 01:52:22'),
('9a8e0752-f115-4c47-a7bc-49f8c1a862b4', '19880901 201903 1 010', NULL, NULL, NULL, 'Sy. Indra Septiansyah', NULL, 'S.Si.,M.T', 'Pontianak', '1988-09-01', 'Laki-laki', 'Islam', '$2y$10$NDzwwKk1BXIGShT1608C/e3ctPVWhtuZJDx7SabP5MWVBiBLIVo3i', '2022-07-05 01:52:23', '2022-07-05 01:52:23'),
('9b26a021-e661-4f49-ab22-6f49afe9cd9b', NULL, '19790910 200801 058', NULL, NULL, 'Hairian Rahmadi', NULL, 'S.T.,M.T', 'Sungai Jaga B', '1979-09-10', 'Laki-laki', 'Islam', '$2y$10$gijzFjOkrYBM3lFohlhxF.kh4BYFdaFt2I/XdaQBrIcU7iHOdND6S', '2022-07-05 01:52:23', '2022-07-05 01:52:23'),
('9b7afb74-0772-48e9-acee-2720557d1384', NULL, NULL, NULL, NULL, 'Ahmad Riduan', NULL, '', 'Ketapang', '1996-02-24', 'Laki-laki', '', '$2y$10$OwiAQTB4y98BSLzHvzFm.e3KLPNDs3Y.oPxVRaec3POk2BJocHL9C', '2022-07-05 01:52:23', '2022-07-05 01:52:23'),
('9cc7f277-d556-4fae-8d75-68e64bcfcad4', NULL, '19820404 201611 213', NULL, NULL, 'Nurhayati', NULL, 'S.P.,M.Si', 'Pedada', '1982-04-04', 'Perempuan', 'Islam', '$2y$10$AsO4sgIfYOy6DVfKNwYnNe4jIwq9qejkL7tvjp.FheIcXZ2jKBCba', '2022-07-05 01:52:23', '2022-07-05 01:52:23'),
('9ebea3d2-60b0-4817-9e36-661f71d69e73', NULL, '19950203 202107 259', '6104174302950003', NULL, 'Heni Rahmadianingsih', NULL, 'M.Pd', NULL, NULL, 'Perempuan', '', '$2y$10$kM3CLHb5dEu5zvw8IjkPOuqZ85U9oGDXXbIc.XJVmv1GVU2zVHErG', '2022-07-05 01:52:23', '2022-07-05 01:52:23'),
('9faa86a0-147d-4657-9592-160f9bb9d06f', '19850805 202121 2 009', NULL, NULL, NULL, 'Nur Aida', NULL, 'S.Pd.,M. Pd', 'Ketapang', '1985-08-05', 'Perempuan', 'Islam', '$2y$10$CogHEGNoSVtBtquHUinKMuBhmfMjVmCphjgrakch6zs2OcRZo.el.', '2022-07-05 01:52:23', '2022-07-05 01:52:23'),
('a12f6e04-c76b-44d0-ad59-7427ac275be8', '19931228 201903 1 012', NULL, NULL, NULL, 'Rahmat Aryanto', NULL, 'A.Md', 'Ketapang', '1993-12-28', 'Laki-laki', 'Islam', '$2y$10$RkBEDrr0FGJkpZ82iMY01OxP0cw.dIb28iflgpbSntbXOjnPG5tzq', '2022-07-05 01:52:23', '2022-07-05 01:52:23'),
('a15ebfc3-4700-4231-b982-f6fd6f150f1f', NULL, NULL, NULL, NULL, 'Evi Mellianti', NULL, 'SST', 'Ketapang', '1993-06-02', 'Perempuan', 'Islam', '$2y$10$yukIX2fHX5chI9GvjriVUupC7T4brzb35INYxJMImNAtZaJ.mb3Y6', '2022-07-05 01:52:23', '2022-07-05 01:52:23'),
('a1c5ae62-36d7-4d2e-b207-999afa6a6103', NULL, '19740401 201311 132', NULL, NULL, 'Ahmadin', NULL, 'S.Sos.', 'Pontianak', '1974-04-01', 'Laki-laki', '', '$2y$10$2BpqUp0.Db2NybvNdWHFwefGSbfPuKjJO/Kt/QO/.G14UTqVYcch2', '2022-07-05 01:52:23', '2022-07-05 01:52:23'),
('a1f6271f-46a8-4f4d-ad97-b11ed9ecca1b', NULL, '19860505 201602 203', NULL, NULL, 'Ade Herlinda', NULL, 'S.Pd', 'Ketapang', '1986-05-05', 'Perempuan', 'Islam', '$2y$10$f4u.W1smOEfTlMXJmoNRReMGfmFrs1osznhmmQWdEW3XIPTLpSOqC', '2022-07-05 01:52:23', '2022-07-05 01:52:23'),
('a3cf6b37-c6e0-411e-ab87-9333e5f9e84a', '19800518 202121 1 007', NULL, NULL, NULL, 'Fathurrahmi', NULL, 'SE.,MM.', 'Ketapang', '1980-05-18', 'Laki-laki', 'Islam', '$2y$10$ws8TkTeCXqVLeoCyO/YHneH97rD.F9dbufeEmdY0aahCjgpqOh8R6', '2022-07-05 01:52:24', '2022-07-05 01:52:24'),
('a64ec6c9-f25d-40c9-acf2-f8054184f6c5', '19820520 202121 1 005', NULL, NULL, NULL, 'Ardiansyah Putra', NULL, 'A.Md.', 'Pontianak', '1982-05-20', 'Laki-laki', 'Islam', '$2y$10$JmrBRxaecHWXTK2b0uAFCOb1BeSi646blcl5ckJ9oRtpOim8YZ0xC', '2022-07-05 01:52:24', '2022-07-05 01:52:24'),
('a7ab3156-4a6a-4d34-b4fd-ecdee3e951de', '19840926 201903 1 008', NULL, NULL, NULL, 'Irianto SP', NULL, 'S.ST.,M.MA', 'Pontianak', '1984-09-26', 'Laki-laki', 'Islam', '$2y$10$djolCfMeCrHbf6nqeoKv6eUkzwG5UtE8/0k9ix5FeheXJBw.Bo.6G', '2022-07-05 01:52:24', '2022-07-05 01:52:24'),
('a8025fce-d1b8-4acf-80c2-ace804464787', NULL, NULL, NULL, NULL, 'Andri Gunawan', NULL, '', 'Ketapang', '1988-01-01', 'Laki-laki', '', '$2y$10$vaTtE0ZTg82/A3O.Ho3Lquemmibl/NWr24YMHbDxr9rdRfM7ykFCK', '2022-07-05 01:52:24', '2022-07-05 01:52:24'),
('ac0df63f-204d-400a-83bd-66b7fc7d1d8d', '19770503 202121 1 004', NULL, NULL, NULL, 'Yudi Adlia', NULL, 'SE', 'Ketapang', '1977-05-03', 'Laki-laki', 'Islam', '$2y$10$9tkaBbpbsQytUddL1KQcyOYERsDl/tOf0788lSpDiC/LaInEwlgCm', '2022-07-05 01:52:24', '2022-07-05 01:52:24'),
('aeb5d395-09f4-42b1-8680-75663045684e', NULL, NULL, NULL, NULL, 'Supardi', NULL, '', 'Ketapang', '1979-01-17', 'Laki-laki', '', '$2y$10$glCs2mX2NapIHF33bsHEMO3MiZIH2rh1bf4iWooT98b4zxSxVimpW', '2022-07-05 01:52:24', '2022-07-05 01:52:24'),
('af76d150-7435-4f3a-bf5f-3fb3d991c626', '19920106 201903 2 015', NULL, NULL, NULL, 'Betti Ses Eka Polonia', NULL, 'S.Pd.,M.Pd', 'Lamongan', '1992-01-06', 'Perempuan', 'Islam', '$2y$10$.ruXbT8GlDnwCdJzwQx1L./CKwvIL6dhDkyqBreGs7kKdH1hICBRu', '2022-07-05 01:52:24', '2022-07-05 01:52:24'),
('b14b7e81-2fc3-45e5-adc1-750cc73f0fb2', NULL, '19740510 200801 041', NULL, NULL, 'Isye Selvianti', NULL, 'SH.,M.AP', 'Solo', '1974-05-10', 'Perempuan', 'Islam', '$2y$10$MKpClNgQIG0a5.3jq3PJmupFchJP8aD6BqZi7vt.1ebXKIWEKYjIa', '2022-07-05 01:52:24', '2022-07-05 01:52:24'),
('b2035d20-b83c-479d-a032-ecdef5bf9eb0', '19780324 202121 1 005', NULL, NULL, NULL, 'Rodiansyah', NULL, 'A.Md', 'Ketapang', '1978-03-24', 'Laki-laki', 'Islam', '$2y$10$XhAtvccj6rI/q/A/YWK0ueJ0Du6BFvfZV4xcHXi0F7c8wPRCs/vXu', '2022-07-05 01:52:24', '2022-07-05 01:52:24'),
('b2c740a8-348b-4e2e-9713-38c9712fe1d8', '19910617 201903 2 022', NULL, NULL, NULL, 'Saima Putrini R Harahap', NULL, 'S.Pd.,M.Pd', 'Padang Sidimpuan', '1991-06-17', 'Perempuan', 'Islam', '$2y$10$wxUjQXUVI0bfnXNspNkCJOLZh.x3Vkocby2vBDnwDqEWo7Hvfz9l6', '2022-07-05 01:52:24', '2022-07-05 01:52:24'),
('b2f3b1cc-0b55-4c9d-9e5b-0e6c7fac9c8b', '19750619 202121 2 006', NULL, NULL, NULL, 'Rohyati', NULL, 'A.Md', 'Trenggalek', '1975-06-19', 'Perempuan', '', '$2y$10$2V6PsTllHUzOPG9lROFZle9bXLKEbRdHfldX5s2Vlgh0ePz1LrvWm', '2022-07-05 01:52:25', '2022-07-05 01:52:25'),
('b3b814f5-e354-47b3-a000-156679809080', '19901105 201903 1 007', NULL, NULL, NULL, 'A. Nova Zulfahmi', NULL, 'S.Pi.,M.Sc', 'Kediri', '1990-11-05', 'Laki-laki', 'Islam', '$2y$10$fVDF1L0YnaWiYtEuUa.FV.Lu1R9sWobbl1J2LkArOEa8xCRlfJTUO', '2022-07-05 01:52:25', '2022-07-05 01:52:25'),
('b5f4d025-952e-4260-a45b-ab50e561a491', NULL, '19890730 201601 189', NULL, NULL, 'Nurhanudin', NULL, 'A.Md', 'Ketapang', '1989-07-30', 'Laki-laki', 'Islam', '$2y$10$JhXUSrt25ltM.lyzlMb3j.vvUBVRi.efF1KsXH8W4YWFjurbgTyjm', '2022-07-05 01:52:25', '2022-07-05 01:52:25'),
('b6308b4f-7569-47c1-980f-f266d255b293', '19780926 202121 1 003', NULL, NULL, NULL, 'Martanto', NULL, 'ST., MT', 'Sleman', '1978-09-26', 'Laki-laki', 'Islam', '$2y$10$1FcmbZK46xsrzNxbPlAF/O/PfElZf37TvpQB0pD1oQNFM8HT.G.mu', '2022-07-05 01:52:25', '2022-07-05 01:52:25'),
('b674c34c-18d8-4f2e-b78d-ba263ecb6f03', NULL, '19890711 201601 188', NULL, NULL, 'Nanang Hartoni', NULL, 'A.Md', 'Ketapang', '1989-07-11', 'Laki-laki', 'Islam', '$2y$10$knawOHGHLjTIYOwk25CBMu91fHepFk5uIFocnrACYy847voq3qqcW', '2022-07-05 01:52:25', '2022-07-05 01:52:25'),
('b67e1667-7681-4ba7-8eb7-49df4cae2eed', '19890316 202121 1 001', NULL, NULL, NULL, 'Faisal', NULL, 'A.Md.', 'Ketapang', '1989-03-16', 'Laki-laki', 'Islam', '$2y$10$wdTnVHiDy.jUvhFTS6ly2Op1pkPN2r/mEtLntSZc1m/fRLeerWXJ2', '2022-07-05 01:52:25', '2022-07-05 01:52:25'),
('b7369622-3dd7-487f-8add-b67d8512a6c3', NULL, '19911112 201601 184', NULL, NULL, 'Eva Prawinda', NULL, 'S.Pd', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$Nlj770L5zlhQksemaaTfyu.EB5bdA8LPdU.7U1vows8.puoCyXvoW', '2022-07-05 01:52:25', '2022-07-05 01:52:25'),
('b77f8f84-beb9-4d27-8a5f-475ac4fd520b', '19900228 202121 2 001', NULL, NULL, NULL, 'Nisa Zahara', NULL, 'A.Md', 'Ketapang', '1990-02-28', 'Perempuan', 'Islam', '$2y$10$zTdFOMyQNOXG2XSjrfaCV.9lWGw0top2CPMDBpQf7ysv/du6Cyd66', '2022-07-05 01:52:25', '2022-07-05 01:52:25'),
('b83e233a-d9b4-459d-93de-d33523c566b0', NULL, '19890424 201509 165', NULL, NULL, 'Indra Pratiwi', NULL, 'M.Pd', 'Ketapang', '1989-04-24', 'Perempuan', 'Islam', '$2y$10$fQ0YdCue.0iYBLqrnCEC2ehlGz05xQmCcLZKawCfqmDqztY.lD/Gy', '2022-07-05 01:52:25', '2022-07-05 01:52:25'),
('b95679cb-9866-4c31-8c5b-960b8ecec93c', NULL, NULL, NULL, NULL, 'Reino Muhammad', NULL, 'ST., M.Cs', 'Indonesia', '1945-08-18', 'Perempuan', '', '$2y$10$N6kJg7Go7Y7IV23RCl4pIO1VhECEIQG6ykwW2Z311L24fZI0p6752', '2022-07-05 01:52:25', '2022-07-05 01:52:25'),
('bc1f265d-00ef-485c-867a-a32b2899a4e8', NULL, '19951222 202104 253', '6104182212950004', NULL, 'Teguh Eko Saputra', NULL, 'A.Md.Kom', 'Mayak', '1995-12-22', 'Laki-laki', 'Islam', '$2y$10$RS71L/sapYX1wA/0Xt2ApeJ0kaNMm4w7xrh00Qbor1BMqEt0Uk186', '2022-07-05 01:52:26', '2022-07-05 01:52:26'),
('c0a53e24-a714-47cc-8651-1f413b8b72fe', NULL, '19881113 201601 182', NULL, NULL, 'Noprizan Azmi', NULL, 'ST', 'Simpang Empat', '1988-11-13', 'Laki-laki', 'Islam', '$2y$10$oyotFecMaH2CzIU0mmaf1eEb/Zd1Z97PycQuOi5T7G4mLksEnn.ii', '2022-07-05 01:52:26', '2022-07-05 01:52:26'),
('c37724c8-36bf-4bbf-82ad-bac50ce9078a', NULL, '19940929 201601 193', NULL, NULL, 'Lia Kurnia', NULL, 'SP', 'Ketapang', '1994-09-29', 'Perempuan', 'Islam', '$2y$10$MOYm4rZyN/SJhZINqQKZv.wCDIueEcnllNFBoiikU/Pb9QD.3lQwa', '2022-07-05 01:52:26', '2022-07-05 01:52:26'),
('c5bc3f89-addd-4737-bd78-ac8b414679da', '19750808 202121 1 005', NULL, NULL, NULL, 'Sahardi', NULL, 'SE', 'Ketapang', '1975-08-08', 'Laki-laki', '', '$2y$10$a4wQPOkJPa1g97vhEO5P..qjfgr4MpXdiZAfhP91u.Tjc/ZSXYcqm', '2022-07-05 01:52:26', '2022-07-05 01:52:26'),
('cc37bab9-4d25-4dff-9ac9-3552e5921705', NULL, '19890424 201507 158', NULL, NULL, 'Aprianda Ibrahim', NULL, 'S.Kom', NULL, '1989-04-24', 'Laki-laki', 'Islam', '$2y$10$WtbTT4HJIdOYrKbx.jnczuoX4wIx.apB1Jc1wC8X7CYG1nCpRszbW', '2022-07-05 01:52:26', '2022-07-05 01:52:26'),
('cda69cea-4502-4db3-9954-70f92c28f2f1', NULL, '19860410 201502 153', NULL, NULL, 'Arman', NULL, 'A.Md.', 'Ketapang', '1986-04-10', 'Laki-laki', 'Islam', '$2y$10$yWb1l.eqp.3XguhG.QR2JOpJQsTPC96NftB9hpVsRWHDDFPVpgPSK', '2022-07-05 01:52:26', '2022-07-05 01:52:26'),
('cda9609b-0bed-49c5-96cc-e46831985dc7', NULL, '19950219 201708 220', NULL, NULL, 'Rahmadi', NULL, 'A.Md', 'Ketapang', '1995-02-19', 'Laki-laki', 'Islam', '$2y$10$UHGTPrVnCvQC.3T5vqnRbub7LBcSkJRu6JwVO8bpT5caskLBV8YKm', '2022-07-05 01:52:26', '2022-07-05 01:52:26'),
('cdb42c37-d361-44aa-9d90-85dc5c02cc4c', NULL, '19891220 201404 133', NULL, NULL, 'Emy Arahman', NULL, 'S.Pd., M.Pd', 'Pontianak', '1989-12-20', 'Perempuan', 'Islam', '$2y$10$5ZXe8STvtmpZ2qiy2pXt1OM22T/MR7azEx2bjQ2BG6X/tJyyzueeC', '2022-07-05 01:52:26', '2022-07-05 01:52:26'),
('d039bc2d-7c92-4349-ae77-e67fd4dcea7f', '19830501 202121 1 002', NULL, NULL, NULL, 'Muhammad Rizal', NULL, 'A.Md', 'Ketapang', '1983-05-01', 'Laki-laki', 'Islam', '$2y$10$mumRWjjbfdtiYjTgHsAf8uqiWIRxuJTmK3FkQtSRL3fX88GpjBGim', '2022-07-05 01:52:27', '2022-07-05 01:52:27'),
('d04a0a35-e772-4766-abc3-d90346ecc0a9', NULL, NULL, NULL, NULL, 'Zulkarnaen', NULL, '', 'Ketapang', '1988-09-24', 'Laki-laki', '', '$2y$10$cfaN9Nsdihwzdy3jn6QYrOd5ucgGq79T0SmpQcARxvPHg0CwrjuSi', '2022-07-05 01:52:27', '2022-07-05 01:52:27'),
('d2bc54ef-e3ec-46ae-adcf-8f856bbd35fc', '19901230 202121 1 001', NULL, NULL, NULL, 'Nasriadi', NULL, 'A.Md.', 'Watampone', '1990-12-30', 'Laki-laki', 'Islam', '$2y$10$4aB4Z5sjq1x2UyOimnHaoun1EqMbplptOhsBgxj1XV/eoaLFd5cuO', '2022-07-05 01:52:27', '2022-07-05 01:52:27'),
('d307a54a-f25e-4a3b-95e5-75c0a78fe2e2', NULL, '19890807 201302 128', NULL, NULL, 'Diah Chairunisa', NULL, 'SE.', 'Ketapang', '1989-08-07', 'Perempuan', 'Islam', '$2y$10$q5RgpDyjdnQE0bHJEBmk6udcCfXUJ0tp/NyttuS42knWJJibFbJhG', '2022-07-05 01:52:27', '2022-07-05 01:52:27'),
('d399b985-7411-4a15-8eed-fbdb43b44dbc', '19891109 201803 2 001', NULL, NULL, NULL, 'Rizqia Lestika Atimi', NULL, 'S.T., M.T', 'Pontianak', '1989-11-09', 'Perempuan', 'Islam', '$2y$10$yXBZtn8dbKyDqDv2ArwiOeIYbUoqi.xikBuCHvKphiGwIbm1H4Zvm', '2022-07-05 01:52:27', '2022-07-05 01:52:27'),
('d4845c8d-dcda-421c-99ec-545bf9527ca1', NULL, '19940130 201601 185', NULL, NULL, 'Utin Asiyatin Nur', NULL, 'SE', 'Ketapang', '1994-01-30', 'Perempuan', 'Islam', '$2y$10$aq1m2PxZEsF96Hv/U12Q9euhDPHFbeMPAPunBXTv0ZL94Qwb5eLJK', '2022-07-05 01:52:27', '2022-07-05 01:52:27'),
('d5090102-10f3-42ae-903d-0e583097ed02', NULL, '19911222 201409 144', NULL, NULL, 'Ningli Diniyati', NULL, 'S, ST', 'Teluk Melano', '1991-12-22', 'Perempuan', 'Islam', '$2y$10$bvJbwaC4B2s7NKF7thU6Pe9WP2LdjZjYsM4K9iYv4O9EsMb.fdgi6', '2022-07-05 01:52:27', '2022-07-05 01:52:27'),
('d8987bf5-6238-4cc0-9be7-305f922cc657', NULL, NULL, NULL, NULL, 'Ernawati', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$PgeG0QIpYqToJ6aTILAhcO8vANfCm6II6AMZdr12QWe1SxYk2eqGG', '2022-07-05 01:52:27', '2022-07-05 01:52:27');
INSERT INTO `simadu__pegawai` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `created_at`, `updated_at`) VALUES
('da2352ee-66c7-41f4-b95a-ebfbc4f231ad', '19821107 202121 2 007', NULL, NULL, NULL, 'Dian Fitriarni', NULL, 'S.ST.,M.Sc', 'Ketapang', '1982-11-07', 'Perempuan', 'Islam', '$2y$10$jfeby.TIdQoLOmElAT4VeeQW./af9wnrKY8d5Go84V8sSrerNE.3e', '2022-07-05 01:52:27', '2022-07-05 01:52:27'),
('da94c955-4436-4ea5-bb45-b8fce9a4b154', NULL, '19910219 201507 154', NULL, NULL, 'Kharisma', NULL, 'S.Kom. M.Kom', 'Ketapang', '1991-02-19', 'Laki-laki', '', '$2y$10$MsqWY/vAP3pp252awAqjre.qX4c56/gPMnYZpCNr3kSsgfbk9ZSIq', '2022-07-05 01:52:27', '2022-07-05 01:52:27'),
('db6d49db-22b0-409f-8450-1beb34250905', '19901111 201903 2 018', NULL, NULL, NULL, 'Novi Indah Pradasari', NULL, 'S.Kom., M.Kom', 'Ketapang', '1990-11-11', 'Perempuan', 'Islam', '$2y$10$jE/DBqvZYMlPCsFPVpxJ5udQ83QAjllZYP7H048WiSHkfGJBIhaxq', '2022-07-05 01:52:28', '2022-07-05 01:52:28'),
('dc497585-9080-4954-8417-89be283b4665', '19881104 201903 1 004', NULL, NULL, NULL, 'Idris Herkan Afandi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-11-04', 'Laki-laki', 'Islam', '$2y$10$vSXkcbFSheVVgLrm3PPaFuotRjHMMDpib1KxLYixELeSFcFPKTOcm', '2022-07-05 01:52:28', '2022-07-05 01:52:28'),
('de4b9779-eb40-42bf-8bfd-6bb1125c1703', NULL, '19840327 201110 103', NULL, NULL, 'Muhammad Taufik', NULL, ' S.T', 'Mempawah', '1984-03-27', 'Laki-laki', '', '$2y$10$I5bfBYTtgoQH0occwD/hU.jkwmmuZ8GnOoN97.n5liRZJ.IdcpYdW', '2022-07-05 01:52:28', '2022-07-05 01:52:28'),
('de9a5fdb-117c-45fe-8b46-ae4ce536270f', NULL, 'NIP.1985 070720 080', NULL, NULL, 'Julyan Purnomo', NULL, 'S.ST., M.T.', 'Ketapang', '1985-07-07', 'Laki-laki', '', '$2y$10$OjVorP5O1vXgdulX7bfdr.3Bk731LfbdEIAKaA6PCjo1uNtdZyFxa', '2022-07-05 01:52:28', '2022-07-05 01:52:28'),
('dee9fbb6-7eda-4464-8d26-1a41838a13d5', NULL, '19940702 201709 223', NULL, NULL, 'Agung Iswandi', NULL, 'ST', 'Ketapang', '1994-07-02', 'Laki-laki', 'Islam', '$2y$10$a7IfcgSc01RIBQdOGYgMe.3t1xn405tQGyXVBDXVq4t5849sx/c12', '2022-07-05 01:52:28', '2022-07-05 01:52:28'),
('e22b1a40-7094-48a7-8a1b-a7407d679e4c', '19771010 200811 1 024', NULL, NULL, NULL, 'Harsusani', NULL, 'S.T., M.T', NULL, '1970-01-01', 'Perempuan', '', '$2y$10$bK022TTvphPNqGbyAqokY./.N7lZ32A41f3iZlK2W3LhEMYNw.eJK', '2022-07-05 01:52:28', '2022-07-05 01:52:28'),
('e32d5a13-49c3-481a-9485-2ad0789512cc', '19880513 202121 1 001', NULL, NULL, NULL, 'Citro Handoyo', NULL, 'S.T', 'Pontianak', '1988-05-13', 'Laki-laki', 'Islam', '$2y$10$F08V/sf5AV.F1uEOPDKgqOUb4V2Hum9YCpxVNrYgKJ4ynUYyvIK7O', '2022-07-05 01:52:28', '2022-07-05 01:52:28'),
('e3825cea-49cf-4e22-8b9e-6927099e859f', NULL, NULL, NULL, NULL, 'Syarif Niswah', NULL, '', 'Ketapang', '1975-05-05', 'Laki-laki', '', '$2y$10$3idi3L461H3HCAZWbRdXCO/f65hdztJTPajFou2fHSApPpcqaGqXm', '2022-07-05 01:52:28', '2022-07-05 01:52:28'),
('e6ba9e74-e855-4438-b2de-32099b533aa2', NULL, '19880402 201601 191', NULL, NULL, 'Mulyo Hadi Santoso', NULL, ' A.Md', 'Jelai Hulu', '1988-04-02', 'Laki-laki', '', '$2y$10$KegylRC8pAL1dOnndfDREO9oDux9psSm1EPn0J1r8ijGLlI4kWvLW', '2022-07-05 01:52:28', '2022-07-05 01:52:28'),
('e70044c4-9afe-4ba9-88dc-67ece46c36f8', NULL, NULL, NULL, NULL, 'Nurmalawati', NULL, '', 'Ketapang', '1973-04-13', 'Perempuan', '', '$2y$10$ULLqxVfBmtu63TUaA1NvEeTzk/QWSQIVC6JU2I7sXZxh.CJH4YDpK', '2022-07-05 01:52:28', '2022-07-05 01:52:28'),
('e8e2dbb1-c651-4a0a-8dea-0926135e428b', '19900121 201803 2 001', NULL, NULL, NULL, 'Sartika', NULL, 'S.Si.,M.T', 'Pontianak', '1990-01-21', 'Perempuan', 'Islam', '$2y$10$R2ifuomKEaVLunQsXyk3cuOalWs1FM2qCEXAQtVjc8JmriuJ9zjPq', '2022-07-05 01:52:29', '2022-07-05 01:52:29'),
('e8fd3915-260d-4079-8962-6608c6550e77', '19901203 202121 1 001', NULL, NULL, NULL, 'Wahyu Iswanto', NULL, 'A.Md', 'Ketapang', '1990-12-03', 'Laki-laki', 'Islam', '$2y$10$uLVV7wHj1f76Eblot7/0Gu.cvy2OGpNirKnGaHc7uxfMIzA2kulB.', '2022-07-05 01:52:29', '2022-07-05 01:52:29'),
('e9b3eaac-e378-4e61-a660-c06a4f47490a', '19820310 202121 2 011', NULL, NULL, NULL, 'Nenengsih Verawati', NULL, 'S.TP.,M.P', 'Bima', '1982-03-10', 'Perempuan', 'Islam', '$2y$10$GJ6TuEdC4/.aEO7QkhwuKOYwUWcum8BPZ3BNkrbHkTQbgKm9oTk.S', '2022-07-05 01:52:29', '2022-07-05 01:52:29'),
('eb09439a-7370-4b1e-b765-252298ab31a8', NULL, NULL, NULL, NULL, 'M. Hidayat', NULL, '', 'Ketapang', '1978-10-26', 'Laki-laki', '', '$2y$10$j4Y.XCYXubxBFjL4RGFbPOkOIkB8g03f6vZSsQWZIX4N9FETOi1Cy', '2022-07-05 01:52:29', '2022-07-05 01:52:29'),
('ed7828d3-b34d-4d25-8378-7e3b75a08f66', NULL, '19850220 201601 192', NULL, NULL, 'Abdul Hafid', NULL, 'S.T', 'Nanga Tayap', '1985-02-20', 'Laki-laki', 'Islam', '$2y$10$6PnltwFYyNUdzgyf8H2OUOiuUbhhj2mxj33WcgBfPvo1iH8z.pmze', '2022-07-05 01:52:29', '2022-07-05 01:52:29'),
('ef103381-4e22-4d34-a141-83dfeb98340f', '19741101 202121 2 005', NULL, NULL, NULL, 'Sri Handayani', NULL, 'A.Md', 'Ketapang', '1974-11-01', 'Perempuan', 'Islam', '$2y$10$h7KK2j/LjhgtLcZmOV.dMOflBffAIPcfxb7alp8.6NeNHN8p4Yk7K', '2022-07-05 01:52:29', '2022-07-05 01:52:29'),
('f34be033-0f08-4655-b2ba-b68f4139017f', '19770505 202121 1 007', NULL, NULL, NULL, 'Ismael Marjuki', NULL, 'S.T.,M.T', 'Ampalu Tinggi', '1977-05-05', 'Laki-laki', 'Islam', '$2y$10$oe1UvkwH9M7CiHJz1TErGuG0M2GgrVO/gnJCSyA4quNjK7lBzskgq', '2022-07-05 01:52:29', '2022-07-05 01:52:29'),
('f585f46a-98ed-4663-9f26-28891e3127cc', NULL, '19900611 201604 204', NULL, NULL, 'Ari Budiansyah', NULL, 'SE', 'Ketapang', '1990-06-11', 'Laki-laki', 'Islam', '$2y$10$34wXhayXEq0qOjdnz35I2uY08ThGCe/ECFYQkUKeyf.iKH0TJybcW', '2022-07-05 01:52:29', '2022-07-05 01:52:29'),
('f59fa54b-a4e7-4bc2-90c3-6ec9f03a928b', '19681030 200112 1 002', NULL, NULL, NULL, 'Endang Kusmana', NULL, 'S.E.,M.M.,Ak,CA', 'Ciamis', '1968-10-30', 'Laki-laki', 'Islam', '$2y$10$g02r4LZ9L4qZmlw7FWCZ8O36jng9uAXIgndx5pnRypgTgvOEvfszi', '2022-07-05 01:52:30', '2022-07-05 01:52:30'),
('f7c75340-cf0b-4402-963f-e8aca8e5936b', NULL, '19920917 202104 251', '6104171709920003', NULL, 'M. Alpiani', NULL, 'S.T', NULL, NULL, 'Laki-laki', '', '$2y$10$zo00d6eP9gyUzXaoh5ixYeZKxUwo6WriRZgTQfKHwqsd5KaJwGBe6', '2022-07-05 01:52:30', '2022-07-05 01:52:30'),
('f851e7bd-cc56-49dc-ab9b-97944d6041cd', NULL, '19810817 200801 042', NULL, NULL, 'Syf. Umi Kalsum', NULL, 'S.Sos.,M.AP', 'Ketapang', '1981-08-17', 'Perempuan', 'Islam', '$2y$10$HtD0cn1Na/9SX66BOlmfhe.QFDaOudPv1/zFAk12QJCRkzvrlX3P.', '2022-07-05 01:52:30', '2022-07-05 01:52:30'),
('f97a9a05-82df-4dea-af31-c8014d4ca784', NULL, NULL, NULL, NULL, 'Rico Anugrah', NULL, '', 'Ketapang', '1994-09-01', 'Laki-laki', '', '$2y$10$YMLirr9MDaswG2Ajoh5IueGstardb4JkMbp2sVqqRav7uc/u7K0qW', '2022-07-05 01:52:30', '2022-07-05 01:52:30'),
('fcf015d0-91e5-4808-8aa3-a8cf44bd547b', '19891017 202121 2 001', NULL, NULL, NULL, 'Tri Kumala', NULL, 'SP', 'Ketapang', '1989-10-17', 'Perempuan', 'Islam', '$2y$10$zNV80fB7jxs7JxUx/YwhduP8UeUHaU9lBcmJMRACLoaiHrUEo19Oe', '2022-07-05 01:52:30', '2022-07-05 01:52:30'),
('fd63b679-ae5a-46da-9ac2-3759ece0eac6', '19920414 201903 2 025', NULL, NULL, NULL, 'Mia Anggreini', NULL, 'A.Md', 'Nanga Keduai', '1992-04-14', 'Perempuan', 'Islam', '$2y$10$cBx2Ip.b4zzJsW63fCq.DeXf6tHm/361Eq374yJI4pdlzHdy6iOzK', '2022-07-05 01:52:30', '2022-07-05 01:52:30'),
('fea080ab-8d56-4ba0-99f2-5ed8f0d4e1d5', NULL, '19811111 200801 012', NULL, NULL, 'Marisa Nopriyanti', NULL, 'STP., M.P.', 'Ketapang', '1981-11-11', 'Perempuan', 'Islam', '$2y$10$H.wmEpI9Xy6bEVJXuCiLOe7.LvHm.6TEF0mLuoTayRrRfUImKpczG', '2022-07-05 01:52:30', '2022-07-05 01:52:30'),
('fed5ef8b-675f-46be-9dc4-947c09e14dac', NULL, '19911104 201601 190', NULL, NULL, 'Nurimansyah', NULL, ' SP', 'Ketapang', '1991-11-04', 'Laki-laki', '', '$2y$10$TweRz1bDNX7gyUzSfdPJbu7Tvh9WnmEV859Z4fB12DnPOEOMQAJeK', '2022-07-05 01:52:30', '2022-07-05 01:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `skemas`
--

CREATE TABLE `skemas` (
  `id` bigint(20) NOT NULL,
  `kode_skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_id` int(5) UNSIGNED NOT NULL,
  `status_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuk_id` int(5) UNSIGNED NOT NULL,
  `asesor_id` int(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skemas`
--

INSERT INTO `skemas` (`id`, `kode_skema`, `skema`, `prodi_id`, `status_id`, `tuk_id`, `asesor_id`, `created_at`, `updated_at`) VALUES
(8, 'SS.AKKS/LSPP/001/2022', 'Asisten Kebun Kelapa Sawit', 17, '1', 19, 38, '2022-04-05 11:26:03', '2022-07-25 02:52:15'),
(10, 'SS.TL/LSPP/002/2022', 'Teknisi Laboratorium', 12, '1', 18, 44, '2022-04-11 09:44:53', '2022-07-25 02:52:00'),
(13, 'SS.KI/LSPP/003/2022', 'Kewirausahaan Industri', 14, '1', 1, 34, '2022-04-17 05:37:07', '2022-06-24 01:29:44'),
(14, 'SS.SPPTR/LSPP/009/2022', 'Supervisor Pemeliharaan Pemanfaatan Tegangan Rendah', 15, '1', 24, 30, '2022-04-17 05:43:24', '2022-07-25 02:51:13'),
(15, 'SS.WS/LSPP/007/2022', 'Welding Supervisor', 19, '1', 22, 25, '2022-04-17 05:45:23', '2022-07-25 02:50:51'),
(16, 'SS.PPJ/LSPP/010/2022', 'Pelaksanaan Pemeliharaan Jalan', 14, '1', 25, 24, '2022-05-11 12:19:42', '2022-07-25 02:48:11'),
(17, 'SS.TKKK/LSPP/008/2022', 'Teknisi Keselamatan dan Kesehatan Kerja (K3)', 11, '1', 23, 53, '2022-05-11 12:25:10', '2022-07-25 02:47:50'),
(18, 'SS.NAM/LSPP/004/2022', 'Network Administrator Muda', 13, '1', 21, 45, '2022-05-11 12:27:05', '2022-07-25 02:47:36'),
(19, 'SS.JWP/LSPP/005/2022', 'Junior Web Programmer', 13, '1', 21, 27, '2022-05-11 12:28:20', '2022-07-25 02:47:24'),
(20, 'SS.DGM/LSPP/006/2022', 'Desainer Grafis Muda', 13, '1', 21, 29, '2022-05-11 12:28:43', '2022-07-25 02:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `skknis`
--

CREATE TABLE `skknis` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skknis`
--

INSERT INTO `skknis` (`id`, `file`, `skema_id`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Kewirausahaan Industri', 13, 'uploads/skkni/1665705832165705448499. Skema - Kewirausahaan Industri.(Ver.8) docx.pdf', '2022-10-13 17:03:52', '2022-10-13 17:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(5) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `keterangan`, `updated_at`, `created_at`) VALUES
(1, 'Aktif', '<label class=\"badge badge-info\">Aktif</label>', '2022-07-03 14:41:16', '2022-07-03 14:41:16'),
(2, 'Nonaktif', '<label class=\"badge badge-danger\">Tidak Aktif</label>', '2022-07-03 14:43:03', '2022-07-03 14:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `strorg`
--

CREATE TABLE `strorg` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strorg`
--

INSERT INTO `strorg` (`id`, `keterangan`, `image`, `updated_at`, `created_at`) VALUES
(1, NULL, 'uploads/strorg/165705260216550410041649792551Struktur LSP_1-min.jpg', '2022-07-05 13:23:22', '2022-07-05 20:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 89, 8, '2022-04-09 01:54:48', '2022-04-09 01:54:48'),
(2, 82, 8, '2022-04-09 01:58:08', '2022-04-09 01:58:08'),
(4, 85, 8, '2022-04-09 02:05:41', '2022-04-09 02:05:41'),
(5, 52, 5, '2022-04-09 06:53:34', '2022-04-09 06:53:34'),
(6, 59, 5, '2022-04-09 07:24:17', '2022-04-09 07:24:17'),
(7, 53, 5, '2022-04-09 07:25:43', '2022-04-09 07:25:43'),
(8, 58, 5, '2022-04-09 07:48:50', '2022-04-09 07:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `tuk`
--

CREATE TABLE `tuk` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `pengelola` varchar(50) DEFAULT NULL,
  `tuk` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuk`
--

INSERT INTO `tuk` (`id`, `kode`, `pengelola`, `tuk`, `alamat`, `image`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '-', 'images/back/Gedung-Kuliah-I-Laboratorium-Politeknik-Negeri-Ketapang.jpg', '2022-06-19 04:20:59.214903', '2022-06-19 04:20:59.214903'),
(18, NULL, 'Rosmalinda, S.ST., M.P', 'Laboratorium Uji Mutu', NULL, NULL, '2022-06-26 22:35:54.000000', '2022-06-27 05:35:54.926688'),
(19, NULL, 'Sopiana, S.P., M.Si', 'TUK Kebun Praktik', NULL, NULL, '2022-06-24 01:15:12.000000', '2022-06-24 01:15:12.000000'),
(20, NULL, 'Dian Fitriarni, S.ST., M.Sc', 'TUK Manajemen', NULL, NULL, '2022-06-24 01:16:38.000000', '2022-06-24 01:16:38.000000'),
(21, NULL, 'Darmanto, S.Kom., M.Kom', 'TUK Teknik Informatika', NULL, NULL, '2022-06-24 01:17:45.000000', '2022-06-24 01:17:45.000000'),
(22, NULL, 'Asepp Ruchiyat, S.T., M.T', 'TUK Teknik Mesin', NULL, NULL, '2022-06-24 01:18:53.000000', '2022-06-24 01:18:53.000000'),
(23, NULL, 'Syarifah Aqla, S.Pd., M.T', 'TUK Teknik Pertambangan', NULL, NULL, '2022-06-24 01:19:44.000000', '2022-06-24 01:19:44.000000'),
(24, NULL, 'Ivan Suwanda, S.T., M.T', 'TUK Teknik Elektro', NULL, NULL, '2022-06-24 01:20:25.000000', '2022-06-24 01:20:25.000000'),
(25, NULL, 'Abdul Hafid, S.T', 'TUK Teknik Sipil', NULL, NULL, '2022-06-24 01:21:02.000000', '2022-06-24 01:21:02.000000');

-- --------------------------------------------------------

--
-- Table structure for table `unikoms`
--

CREATE TABLE `unikoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_unikom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema_id` int(5) NOT NULL,
  `unikom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unikoms`
--

INSERT INTO `unikoms` (`id`, `kode_unikom`, `skema_id`, `unikom`, `created_at`, `updated_at`) VALUES
(40, 'JIP.SM01.001.01', 15, 'Melakukan Komunikasi Timbal Balik', '2022-04-17 06:50:03', '2022-04-26 00:52:48'),
(41, 'JIP.SM01.002.01', 15, 'Mengidentifikasi Prinsip-prinsip Keselamatan dan  Kesehatan Kerja (K3)', '2022-04-26 00:57:53', '2022-04-26 01:06:45'),
(42, 'JIP.SM02.001.01', 15, 'Mengukur dengan alat ukur mekanika dasar', '2022-04-26 01:04:26', '2022-04-26 01:07:41'),
(43, 'JIP.SM02.002.01', 15, 'Membaca sketsa dan/atau gambar kerja sederhana', '2022-04-26 01:08:39', '2022-04-26 01:08:39'),
(44, 'JIP.SM02.003.01', 15, 'Menggunakan peralatan tangan dan mesin-mesin ringan', '2022-04-26 01:09:06', '2022-04-26 01:09:06'),
(45, 'JIP.SM02.004.01', 15, 'Melaksanakan pemotongan secara mekanik', '2022-04-26 01:09:35', '2022-04-26 01:09:35'),
(46, 'JIP.SM02.005.01', 15, 'Melaksanakan pemotongan dengan gas', '2022-04-26 01:10:24', '2022-04-26 01:10:24'),
(47, 'JIP.SM02.008.01', 15, 'Melaksanakan rutinitas (dasar) pengelasan dengan proses  las busur manual', '2022-04-26 01:11:14', '2022-04-26 01:11:14'),
(48, 'JIP.SM02.009.01', 15, 'Mengelas pelat posisi di bawah tangan / Flat dengan proses  las busur manual', '2022-04-26 01:11:58', '2022-04-26 01:11:58'),
(49, 'JIP.SM02.010.01', 15, 'Mengelas pelat posisi mendatar / Horizontal dengan proses  las busur manual', '2022-04-26 01:12:25', '2022-04-26 01:12:25'),
(50, 'JIP.SM03.001.01', 15, 'Membuat laporan', '2022-04-26 01:13:02', '2022-04-26 01:13:02'),
(51, 'JIP.SM03.002.01', 15, 'Melakukan perhitungan dasar teknik', '2022-04-26 01:13:25', '2022-04-26 01:13:25'),
(52, 'JIP.SM01.003.01', 15, 'Melakukan pekerjaan secara tim', '2022-04-26 01:13:44', '2022-04-26 01:13:44'),
(53, 'JIP.SM01.004.01', 15, 'Menerapkan Keselamatan dan Kesehatan Kerja serta  Lingkungan Hidup (K3L)', '2022-04-26 01:14:09', '2022-04-26 01:14:09'),
(54, 'JIP.SM01.006.01', 15, 'Mengukur dengan alat ukur mekanik presisi', '2022-04-26 01:15:42', '2022-04-26 01:15:42'),
(55, 'JIP.SM01.007.01', 15, 'Membaca gambar teknik dan simbol las', '2022-04-26 01:16:02', '2022-04-26 01:16:02'),
(56, 'JIP.SM02.011.01', 15, 'Mengelas pelat posisi tegak/ Vertical dengan proses las  busur manual', '2022-04-26 01:16:22', '2022-04-26 01:16:22'),
(57, 'JIP.SM02.012.01', 15, 'Mengelas pelat posisi di atas kepala / Overhead dengan  proses las busur manual', '2022-04-26 01:16:48', '2022-04-26 01:16:48'),
(58, 'JIP.SM02.013.01', 15, 'Mengelas pipa posisi sumbu mendatar dapat diputar dengan  proses las busur manual', '2022-04-26 01:17:11', '2022-04-26 01:17:11'),
(59, 'JIP.SM02.014.01', 15, 'Mengelas pipa posisi sumbu tegak dapat diputar dengan  proses las busur manual', '2022-04-26 01:17:32', '2022-04-26 01:17:32'),
(60, 'JIP.SM03.003.01', 15, 'Menafsirkan literatur berbahasa inggris', '2022-04-26 01:17:53', '2022-04-26 01:17:53'),
(61, 'JIP.SM03.004.01', 15, 'Mengoperasikan komputer', '2022-04-26 01:18:12', '2022-04-26 01:18:12'),
(62, 'JIP.SM01.005.01', 15, 'Menerapkan sistem mutu', '2022-04-26 01:18:33', '2022-04-26 01:18:33'),
(78, 'JIP.SM01.006.01', 15, 'Merencanakan tugas rutin', '2022-04-26 01:44:26', '2022-04-26 01:44:26'),
(79, 'JIP.SM02.015.01', 15, 'Mengelas pipa posisi sumbu mendatar tidak dapat diputar  dengan proses las busur manual', '2022-04-26 01:49:49', '2022-04-26 01:49:49'),
(80, 'JIP.SM02.016.01', 15, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', '2022-04-26 01:50:14', '2022-04-26 01:50:14'),
(81, 'JIP.SM02.017.01', 15, 'Mengelas pelat dan/atau pipa segala posisi dengan proses  kombinasi TIG (GTAW) dan las busur manual', '2022-04-26 01:50:42', '2022-04-26 01:50:42'),
(82, 'JIP.SM03.005.01', 15, 'Menerapkan penanganan material', '2022-04-26 01:51:05', '2022-04-26 01:51:05'),
(83, 'JIP.SM03.006.01', 15, 'Mengenal karakteristik dan penggunaan bahan', '2022-04-26 01:51:31', '2022-04-26 01:51:31'),
(84, 'JIP.SM03.007.01', 15, 'Melakukan pemeliharaan mesin dan perlengkapan las', '2022-04-26 01:52:04', '2022-04-26 01:52:04'),
(85, 'JIP.SM03.008.01', 15, 'Menerapkan Metalurgi Las', '2022-04-26 01:52:26', '2022-04-26 01:52:26'),
(86, 'M.702090.001.02', 14, 'Melakukan komunikasi dengan pihak IKM', '2022-04-26 01:54:48', '2022-04-26 01:54:48'),
(87, 'M.702090.002.02', 14, 'Melakukan inventarisasi masalah pada IKM', '2022-04-26 01:55:19', '2022-04-26 01:55:19'),
(88, 'M.702090.003.02', 14, 'Memberikan jasa konsultasi kepada pihak IKM', '2022-04-26 01:55:43', '2022-04-26 01:55:43'),
(89, 'M.702090.004.02', 14, 'Melakukan evaluasi pelaksanaan konsultasi', '2022-04-26 01:56:15', '2022-04-26 01:56:15'),
(90, 'M.702090.017.02', 14, 'Menggunakan 7 alat QC pada manajemen mutu', '2022-04-26 01:56:40', '2022-04-26 01:56:40'),
(91, 'M.702090.018.02', 14, 'Melakukan inspeksi penerapan QC', '2022-04-26 01:57:07', '2022-04-26 01:57:07'),
(92, 'M.702090.019.02', 14, 'Melaksanakan perbaikan mutu produk/ Jasa', '2022-04-26 01:57:32', '2022-04-26 01:57:32'),
(93, 'M.702090.020.02', 14, 'Menerapkan prinsip-prinsip SMM dan TQC', '2022-04-26 01:57:52', '2022-04-26 01:57:52'),
(94, 'M.749000.020.01', 13, 'Menerima sampel yang akan dianalisis', '2022-04-26 01:59:48', '2022-04-26 01:59:48'),
(95, 'M.749000.021.01', 13, 'Mengambil sampel uji (sub-sampling) dari sampel  lapangan', '2022-04-26 02:00:07', '2022-04-26 02:00:07'),
(96, 'M.749000.022.01', 13, 'Menyiapkan sampel untuk analisa kimia', '2022-04-26 02:00:26', '2022-04-26 02:00:26'),
(97, 'M.749000.023.01', 13, 'Mengarsipkan sampel', '2022-04-26 02:00:49', '2022-04-26 02:00:49'),
(98, 'M.749000.025.01', 13, 'Menyajikan data analisis kimia', '2022-04-26 02:01:11', '2022-04-26 02:01:11'),
(99, 'M.749000.026.01', 13, 'Melaksanakan analisis titrimetri konvensional mengikuti  prosedur', '2022-04-26 02:01:41', '2022-04-26 02:01:41'),
(100, 'M.749000.027.01', 13, 'Melaksanakan analisis gravimetri konvensional mengikuti  prosedur', '2022-04-26 02:01:59', '2022-04-26 02:01:59'),
(101, 'M.749000.031.01', 13, 'Melaksanakan analisis fisiko-kimia mengikuti prosedur', '2022-04-26 02:02:41', '2022-04-26 02:02:41'),
(102, 'M.749000.033.01', 13, 'Melaksanakan analisis secara spektrofotometri mengikuti  prosedur', '2022-04-26 02:03:30', '2022-04-26 02:03:30'),
(103, 'M.749000.035.01', 13, 'Melaksanakan analisis organoleptik mengikuti prosedur', '2022-04-26 02:03:51', '2022-04-26 02:03:51'),
(104, 'M.749000.036.01', 13, 'Melaksanakan analisis proksimat (konvensional) mengikuti  prosedur', '2022-04-26 02:04:19', '2022-04-26 02:04:19'),
(109, 'J.620100.004.02', 20, 'Menggunakan Struktur Data', '2022-05-11 13:05:11', '2022-06-26 23:25:21'),
(110, 'J.620100.005.02', 20, 'Mengimplementasikan User Interface', '2022-05-11 13:05:31', '2022-06-15 23:26:44'),
(111, 'J.620100.011.01', 20, 'Melakukan instalasi Software Tools Pemrograman', '2022-05-11 13:06:23', '2022-05-11 13:06:23'),
(112, 'J.620100.016.01', 20, 'Menulis Kode dengan Prinsip Sesuai Guidelines dan Best Practices', '2022-05-11 13:06:40', '2022-05-11 13:06:40'),
(113, 'J.620100.017.02', 20, 'Mengimplementasikan Pemrograman Terstruktur', '2022-05-11 13:07:09', '2022-05-11 13:07:09'),
(114, 'J.620100.019.02', 20, 'Menggunakan Library atau Komponen Pre-Existing', '2022-05-11 13:07:37', '2022-05-11 13:07:37'),
(115, 'J.620100.023.02', 20, 'Membuat Dokumen Kode Program', '2022-05-11 13:07:52', '2022-05-11 13:07:52'),
(116, 'J.620100.025.02', 20, 'Melakukan Debugging', '2022-05-11 13:08:18', '2022-05-11 13:08:18'),
(128, 'J.620100.004.02', 19, 'Menggunakan Struktur Data', '2022-07-04 07:25:19', '2022-07-04 07:25:19'),
(129, 'J.620100.005.02', 19, 'Mengimplementasikan User Interface', '2022-07-04 07:25:43', '2022-07-04 07:25:43'),
(130, 'J.620100.011.01', 19, 'Melakukan instalasi Software Tools Pemrograman', '2022-07-04 07:26:13', '2022-07-04 07:26:13'),
(131, 'J.620100.016.01', 19, 'Menulis Kode dengan Prinsip Sesuai Guidelines dan Best Practices', '2022-07-04 07:26:37', '2022-07-04 07:26:37'),
(132, 'J.620100.017.02', 19, 'Mengimplementasikan Pemrograman Terstruktur', '2022-07-04 07:26:59', '2022-07-04 07:26:59'),
(133, 'J.620100.019.02', 19, 'Menggunakan Library atau Komponen Pre-Exiting', '2022-07-04 07:27:20', '2022-07-04 07:27:20'),
(134, 'J.620100.023.02', 19, 'Membuat Dokumen Kode Program', '2022-07-04 07:27:44', '2022-07-04 07:27:44'),
(135, 'J.620100.025.02', 19, 'Melakukan Debugging', '2022-07-04 07:28:03', '2022-07-04 07:28:03'),
(136, 'J.611000.004.01', 18, 'Merancang Pengalamatan Jaringan', '2022-07-04 07:29:07', '2022-07-04 07:29:07'),
(137, 'J.611000.010.02', 18, 'Memasang Jaringan Nirkabel', '2022-07-04 07:29:33', '2022-07-04 07:29:33'),
(138, 'J.611000.012.02', 18, 'Mengkonfigurasi Switch pada Jaringan', '2022-07-04 07:30:18', '2022-07-04 07:30:18'),
(139, 'J.611000.013.02', 18, 'Mengkonfigurasi Routing pada Perangkat  Jaringan dalam satu Autonomous System', '2022-07-04 07:30:43', '2022-07-04 07:30:43'),
(140, 'J.611000.014.02', 18, 'Mengkonfigurasi Routing pada Perangkat  Jaringan antar Autonomous System', '2022-07-04 07:31:02', '2022-07-04 07:31:02'),
(141, 'M.71KKK01.001.1', 17, 'Merancang Strategi Pengendalian Risiko K3 di Tempat Kerja', '2022-07-04 07:31:51', '2022-07-04 07:31:51'),
(142, 'M.71KKK01.002.1', 17, 'Merancang Sistem Tanggap Darurat', '2022-07-04 07:32:07', '2022-07-04 07:32:07'),
(143, 'M.71KKK01.003.1', 17, 'Melakukan Komunikasi K3', '2022-07-04 07:32:27', '2022-07-04 07:32:27'),
(144, 'M.71KKK01.004.1', 17, 'Mengawasi Pelaksanaan Izin Kerja', '2022-07-04 07:32:44', '2022-07-04 07:32:44'),
(145, 'M.71KKK01.005.1', 17, 'Melakukan Pengukuran Faktor Bahaya di Tempat kerja', '2022-07-04 07:33:03', '2022-07-04 07:33:03'),
(146, 'M.71KKK01.006.1', 17, 'Mengelola Pertolongan Pertama pada Kecelakaan Kerja (P3K) di Tempat Kerja', '2022-07-04 07:33:24', '2022-07-04 07:33:24'),
(147, 'M.71KKK01.007.1', 17, 'Mengelola Tindakan Tanggap Darurat', '2022-07-04 07:33:40', '2022-07-04 07:33:40'),
(148, 'M.71KKK01.008.1', 17, 'Mengelola Alat Pelindung Diri (APD) di Tempat Kerja', '2022-07-04 07:33:57', '2022-07-04 07:33:57'),
(149, 'M.71KKK01.009.1', 17, 'Menerapkan Program Pelayanan Kesehatan Kerja', '2022-07-04 07:34:25', '2022-07-04 07:34:25'),
(150, 'M.71KKK01.010.1', 17, 'Mengelola Sistem Dokumentasi K3', '2022-07-04 07:34:51', '2022-07-04 07:34:51'),
(151, 'M.71KKK01.011.1', 17, 'Menerapkan Manajemen Risiko K3', '2022-07-04 07:35:18', '2022-07-04 07:35:18'),
(152, 'M.71KKK01.012.1', 17, 'Mengevaluasi Pemenuhan Persyaratan dan Prosedur K3', '2022-07-04 07:35:36', '2022-07-04 07:35:36'),
(153, 'M.71KKK01.013.1', 17, 'Melakukan Investigasi Kecelakaan Kerja', '2022-07-04 07:35:56', '2022-07-04 07:35:56'),
(154, 'MSAENV472B', 10, 'Menerapkan dan memantau praktek kerja ramah lingkungan', '2022-07-04 07:39:35', '2022-07-04 07:39:35'),
(155, 'MSL913001A', 10, 'Berkomunikasi dengan orang lain', '2022-07-04 07:40:01', '2022-07-04 07:40:01'),
(156, 'MSL913002A', 10, 'Merencanakan dan melaksanakan pekerjaan laboratorium/ lapangan', '2022-07-04 07:40:37', '2022-07-04 07:40:37'),
(157, 'MSL915001A', 10, 'Memberikan Informasi kepada Pelanggan', '2022-07-04 07:40:54', '2022-07-04 07:40:54'),
(158, 'MSL924001A', 10, 'Mengolah dan menginterpretasikan data', '2022-07-04 07:41:12', '2022-07-04 07:41:12'),
(159, 'MSL924002A', 10, 'Menggunakan software aplikasi laboratorium', '2022-07-04 07:41:31', '2022-07-04 07:41:31'),
(160, 'MSL925001A', 10, 'Menganalisis data dan melaporkan hasil', '2022-07-04 07:41:50', '2022-07-04 07:41:50'),
(161, 'MSL934002A', 10, 'Menerapkan sistem mutu dan proses peningkatan yang berkelanjutan', '2022-07-04 07:42:23', '2022-07-04 07:42:23'),
(162, 'MSL944001A', 10, 'Maintain laboratory/field workplace safety', '2022-07-04 07:42:39', '2022-07-04 07:42:39'),
(163, 'MSL915002A', 10, 'Membuat Jadwal Kerja Laboratorium Untuk Tim Kecil', '2022-07-04 07:42:58', '2022-07-04 07:42:58'),
(164, 'MSL935001A', 10, 'Memantau mutu hasil dan data pengujian', '2022-07-04 07:43:13', '2022-07-04 07:43:13'),
(165, 'MSL935004A', 10, 'Memelihara instrumen dan peralatan', '2022-07-04 07:43:28', '2022-07-04 07:43:28'),
(166, 'MSL975005A', 10, 'Melakukan analisis sensor', '2022-07-04 07:43:47', '2022-07-04 07:43:47'),
(167, 'MSL975022A', 10, 'Melakukan analisa pangan', '2022-07-04 07:44:07', '2022-07-04 07:44:07'),
(168, 'MSL973002A', 10, 'Menyiapkan larutan kerja', '2022-07-04 07:44:28', '2022-07-04 07:44:28'),
(169, 'MSL973003A', 10, 'Menyiapkan media Kultur', '2022-07-04 07:44:45', '2022-07-04 07:44:45'),
(170, 'MSL973004A', 10, 'Melakukan teknik aseptik', '2022-07-04 07:45:07', '2022-07-04 07:45:07'),
(171, 'MSL974001A', 10, 'Menyiapkan, menstandardisasi, dan menggunakan larutan', '2022-07-04 07:45:22', '2022-07-04 07:45:22'),
(172, 'MSL974003A', 10, 'Melakukan pengujian dan prosedur kimia', '2022-07-04 07:45:50', '2022-07-04 07:45:50'),
(173, 'MSL974005A', 10, 'Melakukan Pengujian Fisik', '2022-07-04 07:46:26', '2022-07-04 07:46:26'),
(174, 'MSL916001A', 10, 'Mengembangkan dan memelihara dokumen laboratorium', '2022-07-04 07:46:42', '2022-07-04 07:46:42'),
(175, 'TAN. KS01.001.01', 8, 'Menerapkan Keselamatan Kerja dan  Kesehatan Kerja Serta Lingkungan Kerja', '2022-07-04 07:47:50', '2022-07-04 07:47:50'),
(176, 'TAN. KS01.002.01', 8, 'Mengorganisasikan Pekerjaan', '2022-07-04 07:48:22', '2022-07-04 07:48:22'),
(177, 'TAN. KS01.003.01', 8, 'Melakukan Komunikasi Efektif', '2022-07-04 07:48:46', '2022-07-04 07:48:46'),
(178, 'TAN. KS01.004.01', 8, 'Membina Masyarakat di Lingkungan  Kebun', '2022-07-04 07:49:05', '2022-07-04 07:49:05'),
(179, 'TAN. KS02.001.01', 8, 'Mengelola Penyiapan Lahan', '2022-07-04 07:49:27', '2022-07-04 07:49:27'),
(180, 'TAN. KS02.002.01', 8, 'Mengelola Penyiapan Bahan Tanam', '2022-07-04 07:49:46', '2022-07-04 07:49:46'),
(181, 'TAN. KS02.003.01', 8, 'Mengelola Pekerjaan Penanaman', '2022-07-04 07:50:05', '2022-07-04 07:50:05'),
(182, 'TAN. KS02.004.01', 8, 'Mengelola Pekerjaan Peremajaan  Tanaman', '2022-07-04 07:50:41', '2022-07-04 07:50:41'),
(183, 'TAN. KS02.005.01', 8, 'Mengelola Pemeliharaan Tanaman Belum  Menghasilkan (TBM)', '2022-07-04 07:51:08', '2022-07-04 07:51:08'),
(184, 'TAN. KS02.006.01', 8, 'Mengelola Pemeliharaan Tanaman  Menghasilkan (TM)', '2022-07-04 07:51:24', '2022-07-04 07:51:24'),
(185, 'TAN. KS02.007.01', 8, 'Mengelola Panen', '2022-07-04 07:51:42', '2022-07-04 07:51:42'),
(186, 'TAN. KS02.008.01', 8, 'Mengelola Fungsi Lingkungan Kebun', '2022-07-04 07:52:02', '2022-07-04 07:52:02'),
(187, 'TAN. KS02.009.01', 8, 'Mengelola Anggaran', '2022-07-04 07:52:19', '2022-07-04 07:52:19'),
(188, 'TAN. KS02.010.01', 8, 'Membuat Laporan', '2022-07-04 07:52:37', '2022-07-04 07:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_register_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `y` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `z` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode` bigint(20) DEFAULT NULL,
  `koreksi` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `role` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institusi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tamatan_id` int(11) DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_kantor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rmh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_post` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `proses` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `kode`, `tgl_lahir`, `negara`, `sex_id`, `alamat`, `no_hp`, `institusi`, `tamatan_id`, `jabatan`, `jurusan_id`, `semester_id`, `email2`, `email3`, `tempat_lahir`, `alamat_kantor`, `postal`, `telp`, `fax`, `ktp`, `ktr`, `tmt`, `rmh`, `kode_post`, `image`, `remember_token`, `password`, `email_verified_at`, `proses`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Admin LSP-POLITAP', 'admin', NULL, '2022-06-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yqTCIM0MxLApZWMl8Qkj2V5DOvdo6oftHKlzmelQ52lXfmPWgr82kkwXvgje', '$2y$10$a6Qikrsxntmq5ZDBuk8/N.x7dMPqm4FlJd.9jLzx9JyUZoftdvvC2', NULL, NULL, '2022-06-29 04:59:35', '2022-07-22 21:48:55'),
(33, 'User', 'Ponsianus Jopi', '3042020058', NULL, '2022-06-29', 'Indonesia', '1', 'Ketapang', '081256390909', 'Pegadaian', NULL, 'Penaksir', 4, 4, 'ponzy22@gmail.com', 'pegadaian@gmail.com', 'Ketapang', 'dimana dak tau', '781221', '081234566789', '303007', NULL, '-', 'SMA', '-', '7888111', 'uploads/beranda_img2/1658550646campus.png', 'J8C0TkBuSeAB8HGrLOAEY19afXPkNvlUrV9YqusNy7dsmqJdO66PcmZMjjer', '$2y$10$DZAYsDTZOFnuSXuoNuEpZOT7ry2NTYEYWa4B9K9uTDO8Awx4AE4TS', NULL, NULL, '2022-06-29 04:59:35', '2022-07-22 21:30:46'),
(39, 'User', 'Dwi Ramadahani', '3042020047', NULL, '2022-06-29', 'Indonesia', '1', 'Ketapang', '081256390906', 'Pegadaian', NULL, 'Penaksir', 4, 4, 'ponzy232@gmail.com', 'pegadaian@gmail.com', 'Ketapang', 'dimana dak tau', '781221', '081234566789', '303007', NULL, '-', 'SMA', '-', '78881112', 'uploads/beranda_img2/1658550646campus.png', 'KdoD7zDKlt18t7qVmowlvQbNfzUsipc75DbKmIyEVS64x6ta5AbooIMV5AcF', '$2y$10$DZAYsDTZOFnuSXuoNuEpZOT7ry2NTYEYWa4B9K9uTDO8Awx4AE4TS', NULL, NULL, '2022-06-29 04:59:35', '2022-07-22 21:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_skemas`
--

CREATE TABLE `verifikasi_skemas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `xnxxes`
--

CREATE TABLE `xnxxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_elemen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kriteria` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `unikom_id` bigint(20) DEFAULT NULL,
  `unikom_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asesmen_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_id` bigint(20) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `data_register_id` bigint(20) DEFAULT NULL,
  `kode` bigint(20) DEFAULT NULL,
  `koreksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unikom_kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cek_pendaftarans`
--
ALTER TABLE `cek_pendaftarans`
  ADD PRIMARY KEY (`5`);

--
-- Indexes for table `data_registers`
--
ALTER TABLE `data_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_registers_backup`
--
ALTER TABLE `data_registers_backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen__uploads`
--
ALTER TABLE `dokumen__uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elemen`
--
ALTER TABLE `elemen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asesmens_unikom_id_foreign` (`unikom_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fileapl2s`
--
ALTER TABLE `fileapl2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filelains`
--
ALTER TABLE `filelains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formapl2s`
--
ALTER TABLE `formapl2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formapl2_children`
--
ALTER TABLE `formapl2_children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_profil`
--
ALTER TABLE `f_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_fotos`
--
ALTER TABLE `galeri_fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_galeris`
--
ALTER TABLE `group_galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info2`
--
ALTER TABLE `info2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kknis`
--
ALTER TABLE `kknis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_register` (`kode_register`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikasis`
--
ALTER TABLE `sertifikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simadu__pegawai`
--
ALTER TABLE `simadu__pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skemas`
--
ALTER TABLE `skemas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skknis`
--
ALTER TABLE `skknis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strorg`
--
ALTER TABLE `strorg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tokens_token_unique` (`token`);

--
-- Indexes for table `tuk`
--
ALTER TABLE `tuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unikoms`
--
ALTER TABLE `unikoms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unikoms_skema_id_foreign` (`skema_id`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upload_files_data_register_foreign` (`data_register_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verifikasi_skemas`
--
ALTER TABLE `verifikasi_skemas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xnxxes`
--
ALTER TABLE `xnxxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xnxxes_data_register_id_foreign` (`data_register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asesor`
--
ALTER TABLE `asesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `cek_pendaftarans`
--
ALTER TABLE `cek_pendaftarans`
  MODIFY `5` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumen__uploads`
--
ALTER TABLE `dokumen__uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `elemen`
--
ALTER TABLE `elemen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fileapl2s`
--
ALTER TABLE `fileapl2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `filelains`
--
ALTER TABLE `filelains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `formapl2s`
--
ALTER TABLE `formapl2s`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `formapl2_children`
--
ALTER TABLE `formapl2_children`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `f_profil`
--
ALTER TABLE `f_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri_fotos`
--
ALTER TABLE `galeri_fotos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `group_galeris`
--
ALTER TABLE `group_galeris`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `info2`
--
ALTER TABLE `info2`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kknis`
--
ALTER TABLE `kknis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sertifikasis`
--
ALTER TABLE `sertifikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skemas`
--
ALTER TABLE `skemas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `skknis`
--
ALTER TABLE `skknis`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `strorg`
--
ALTER TABLE `strorg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tuk`
--
ALTER TABLE `tuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `unikoms`
--
ALTER TABLE `unikoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=866;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `verifikasi_skemas`
--
ALTER TABLE `verifikasi_skemas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xnxxes`
--
ALTER TABLE `xnxxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1121;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD CONSTRAINT `upload_files_data_register_foreign` FOREIGN KEY (`data_register_id`) REFERENCES `data_registers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `xnxxes`
--
ALTER TABLE `xnxxes`
  ADD CONSTRAINT `xnxxes_data_register_id_foreign` FOREIGN KEY (`data_register_id`) REFERENCES `data_registers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
