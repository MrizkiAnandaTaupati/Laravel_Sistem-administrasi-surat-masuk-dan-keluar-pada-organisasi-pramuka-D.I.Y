-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 10:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bs5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `status_admin` enum('aktif','nonaktif') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `username_admin`, `password_admin`, `nama_admin`, `status_admin`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Intan Permatasari', 'aktif', '2023-11-08 03:16:56', '2023-11-16 02:53:40'),
(2, 'admin1', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', 'Chanyeol', 'nonaktif', '2023-11-08 03:17:22', '2023-11-08 03:17:44'),
(3, 'admin2', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', 'Adya Gita', 'nonaktif', '2023-11-30 05:11:23', '2023-11-30 05:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `disposisis`
--

CREATE TABLE `disposisis` (
  `id_disposisi` bigint(20) UNSIGNED NOT NULL,
  `id_unit` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `catatan_disposisi` text NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_11_04_084743_create_surat_masuk_table', 1),
(6, '2023_11_04_093314_create_surat_masuks_table', 2),
(7, '2023_11_05_124406_create_surat_keluars_table', 3),
(8, '2023_11_06_080849_create_units_table', 4),
(9, '2023_11_06_092527_tambah_kolom_status', 5),
(10, '2023_11_08_070515_create_sekretariss_table', 6),
(11, '2023_11_08_070515_create_sekretaris_table', 7),
(12, '2023_11_08_073624_create_sekretaris_table', 8),
(13, '2023_11_08_090938_tambah_kolom_status_sekretaris', 9),
(14, '2023_11_08_091726_create_sekretariats_table', 10),
(15, '2023_11_08_100853_create_admins_table', 11),
(16, '2023_11_09_042134_create_user_units_table', 12),
(17, '2023_11_13_030822_tambah_kolom_status_surat', 13),
(18, '2023_11_13_035740_create_notulens_table', 14),
(19, '2023_11_13_042754_create_notulens_table', 15),
(20, '2023_11_15_071256_create_ringkasan_kegiatans_table', 16),
(21, '2023_11_16_030040_tambah_kolom_kelas', 17),
(22, '2023_11_16_031449_tambah_kolom_file_surat_keluar', 18),
(23, '2023_11_17_043757_create_surat_keluars_table', 19),
(24, '2023_11_17_044247_tambah_kolom_file_surat_keluar', 20),
(25, '2023_11_23_033658_create_disposisis_table', 21),
(26, '2023_11_23_035457_tambah_kolom_posisi_surat', 22),
(27, '2023_11_25_083852_tambah_kolom_alasan_ditolak', 23),
(28, '2023_11_26_032609_tambah_kolom_alasan_ditolak', 24),
(29, '2023_11_26_073129_tambah_kolom_status_kegiatan', 25),
(30, '2023_11_29_083635_tambah_kolom_alasan_ditolak', 26);

-- --------------------------------------------------------

--
-- Table structure for table `notulens`
--

CREATE TABLE `notulens` (
  `id_notulen` bigint(20) UNSIGNED NOT NULL,
  `unit` int(11) DEFAULT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_notulen` enum('aktif','nonaktif') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notulens`
--

INSERT INTO `notulens` (`id_notulen`, `unit`, `nama_kegiatan`, `tanggal_kegiatan`, `waktu`, `tempat`, `isi`, `status_notulen`, `created_at`, `updated_at`) VALUES
(1, 5, 'Rapat Koordinasi', '2023-11-23', '18:28:21', 'Buper', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet justo nibh, sit amet ultrices lorem porttitor et. Aenean tincidunt non lacus ac placerat. Donec posuere odio in lorem ullamcorper scelerisque. Integer ut odio sit amet sem auctor ullamcorper eu sed lorem. Cras sit amet diam id sapien aliquet tempor. Maecenas pulvinar diam non sodales ultricies. Nullam lobortis vulputate ex nec tincidunt.\r\nMaecenas ultricies, elit sed egestas dignissim, dolor urna pulvinar augue, quis pellentesque ex mauris at lacus. Mauris mi risus, porta vitae elementum nec, finibus vitae velit. Aliquam efficitur ligula et nunc hendrerit, venenatis interdum sem ornare. Praesent sed consectetur leo, id cursus nunc. Suspendisse mauris lectus, facilisis ac sem non, congue viverra nibh. Duis quam orci, vestibulum ac pharetra non, semper nec leo. Phasellus id porta mauris, ut pulvinar ipsum.', 'aktif', NULL, '2023-11-23 19:38:29'),
(2, 6, 'Kunjungan Kerja', '2023-11-23', '20:59:00', 'Bumi Perkemahan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet justo nibh, sit amet ultrices lorem porttitor et. Aenean tincidunt non lacus ac placerat. Donec posuere odio in lorem ullamcorper scelerisque. Integer ut odio sit amet sem auctor ullamcorper eu sed lorem. Cras sit amet diam id sapien aliquet tempor. Maecenas pulvinar diam non sodales ultricies. Nullam lobortis vulputate ex nec tincidunt.\r\nMaecenas ultricies, elit sed egestas dignissim, dolor urna pulvinar augue, quis pellentesque ex mauris at lacus. Mauris mi risus, porta vitae elementum nec, finibus vitae velit. Aliquam efficitur ligula et nunc hendrerit, venenatis interdum sem ornare. Praesent sed consectetur leo, id cursus nunc. Suspendisse mauris lectus, facilisis ac sem non, congue viverra nibh. Duis quam orci, vestibulum ac pharetra non, semper nec leo. Phasellus id porta mauris, ut pulvinar ipsum.', 'aktif', '2023-11-23 07:02:16', '2023-11-23 19:59:22'),
(3, 1, 'Kunjungan Kerja', '2023-11-14', '21:06:00', 'Bumi Perkemahan', 'catatanb', 'aktif', '2023-11-23 07:04:30', '2023-11-23 07:39:10'),
(4, 3, 'Rapat Internal KWARDA', '2023-11-02', '21:04:00', 'BUPER', 'catatan rapat', 'nonaktif', '2023-11-23 07:59:20', '2023-11-23 08:00:36'),
(5, 3, 'Kunjungan Kerja', '2023-11-24', '09:52:00', 'Bumi Perkemahan', 'asss', 'aktif', '2023-11-23 19:52:08', '2023-11-23 19:52:08'),
(6, 11, 'Rapat Imternal', '2023-11-30', '09:00:00', 'Bumi Perkemahan', 'Loream ipsum', 'aktif', '2023-11-30 04:09:59', '2023-11-30 04:09:59'),
(7, NULL, 'ds', '2023-12-04', '10:06:00', 'asd', 'dsa', 'aktif', '2023-12-03 20:06:09', '2023-12-03 20:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ringkasan_kegiatans`
--

CREATE TABLE `ringkasan_kegiatans` (
  `id_ringkasan_kegiatan` bigint(20) UNSIGNED NOT NULL,
  `id_unit` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_ringkasan` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ringkasan_kegiatans`
--

INSERT INTO `ringkasan_kegiatans` (`id_ringkasan_kegiatan`, `id_unit`, `nama_kegiatan`, `tanggal_kegiatan`, `waktu`, `tempat`, `isi`, `created_at`, `updated_at`, `status_ringkasan`) VALUES
(1, 1, 'HUT RI ', '2023-08-17', '12:56:09', 'Gedung DPR', 'Menghadiri Rapat', NULL, NULL, 'aktif'),
(2, 3, 'kegiatan', '2023-11-23', '18:28:21', 'kegiatan', 'kegiatan', NULL, NULL, 'nonaktif'),
(3, 11, 'Kunjungan Kerja', '2023-11-30', '10:10:00', 'Kunjungan Kerja', 'bbbbbbbbb', '2023-11-29 20:11:17', '2023-11-29 20:11:36', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `sekretariats`
--

CREATE TABLE `sekretariats` (
  `id_sekretariat` bigint(20) UNSIGNED NOT NULL,
  `username_sekretariat` varchar(255) NOT NULL,
  `password_sekretariat` varchar(255) NOT NULL,
  `nama_sekretariat` varchar(255) NOT NULL,
  `email_sekretariat` varchar(255) NOT NULL,
  `status_sekretariat` enum('aktif','nonaktif') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekretariats`
--

INSERT INTO `sekretariats` (`id_sekretariat`, `username_sekretariat`, `password_sekretariat`, `nama_sekretariat`, `email_sekretariat`, `status_sekretariat`, `created_at`, `updated_at`) VALUES
(1, 'Sekretariat2', '06c596af0d61e0364d7c39f6f89e63c31d2626e7', 'Adya Gita Syaira', 'adya123@gmail.com', 'aktif', '2023-11-08 02:29:31', '2023-11-08 20:24:52'),
(2, 'sekretariat3', '79c5725bf5bc11b1fc0ea5398deee970b95d622d', 'deni', 'deni@gmail.com', 'nonaktif', '2023-11-08 02:38:09', '2023-11-08 02:39:37'),
(3, 'sekretariat', 'b45238b6e7ee5c3344a196ef4f8f925c3981b073', 'Intan Permatasari', 'intanpermata@gmail.com', 'nonaktif', '2023-11-08 20:37:23', '2023-11-22 06:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `sekretaris`
--

CREATE TABLE `sekretaris` (
  `id_sekretaris` bigint(20) UNSIGNED NOT NULL,
  `username_sekretaris` varchar(255) NOT NULL,
  `password_sekretaris` varchar(255) NOT NULL,
  `nama_sekretaris` varchar(255) NOT NULL,
  `email_sekretaris` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_sekretaris` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekretaris`
--

INSERT INTO `sekretaris` (`id_sekretaris`, `username_sekretaris`, `password_sekretaris`, `nama_sekretaris`, `email_sekretaris`, `created_at`, `updated_at`, `status_sekretaris`) VALUES
(1, 'Sekretaris1', 'ab63de4fba59f9f6026d8823192e49cdc9df0cac', 'Dimas Alfian Syah Putra', 'dimas@gmail.com', '2023-11-08 00:37:40', '2023-11-08 20:22:20', 'aktif'),
(3, 'Sekretaris2', 'f6c99911a0a3e4891a45171dda196e4f09908454', 'Intan Permatasari', 'intanpermatasari663@students.amikom.ac.id', '2023-11-08 02:14:29', '2023-11-08 02:14:38', 'nonaktif'),
(4, 'sekretaris1', '774f20626cb5c2bb13cb5402f2834b630f0b6592', 'Intan Permatasari', 'intan@gmail.com', '2023-11-21 10:25:00', '2023-11-22 06:41:26', 'aktif'),
(5, 'sekretaris', '43597fbcd8f6df40ddaac1df1f79ac017a9d1cce', 'Adya Gita Syaira', 'Adya@gmail.com', '2023-11-21 03:27:53', '2023-11-22 20:05:10', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluars`
--

CREATE TABLE `surat_keluars` (
  `no_surat` varchar(255) NOT NULL,
  `jenis_surat` enum('Surat Umum/Edaran','Surat Undangan','Surat Tugas','Surat Kuasa','Surat Izin','Surat Keterangan','Surat Perjalanan Dinas','Surat Pengantar','Surat Panggilan','Surat Rekomendasi','Surat Pengumuman','Nota Dinas') NOT NULL,
  `sifat_surat` enum('Rahasia','Terbatas','Biasa') NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `isi_surat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status_surat` enum('Diolah','Disetujui','Ditolak') NOT NULL,
  `kelas` enum('aktif','nonaktif') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alasan_ditolak` text DEFAULT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_keluars`
--

INSERT INTO `surat_keluars` (`no_surat`, `jenis_surat`, `sifat_surat`, `tujuan`, `perihal`, `isi_surat`, `tanggal`, `status_surat`, `kelas`, `created_at`, `updated_at`, `alasan_ditolak`, `id_unit`) VALUES
('10', 'Surat Umum/Edaran', 'Biasa', 'asd', 'asd', 'asd', '2023-12-09', 'Disetujui', 'aktif', '2023-12-02 02:15:21', '2023-12-02 02:16:17', NULL, 11),
('7', 'Surat Undangan', 'Rahasia', 'AMIKOM', 'aaaaaa', 'aaaa', '2023-12-01', 'Ditolak', 'aktif', '2023-12-01 00:29:26', '2023-12-01 02:06:31', 'alasan disini', 11),
('8', 'Surat Tugas', 'Rahasia', 'aaaaa', 'aaaa', 'aaaaaaa', '2023-12-01', 'Ditolak', 'nonaktif', '2023-12-01 00:34:26', '2023-12-01 19:42:53', 'Surat salah', 11),
('9', 'Surat Umum/Edaran', 'Rahasia', 'PT.JAYA ABADI', 'Kerja sama', 'Surat berisi untuk mengajak kerja sama', '2023-12-02', 'Diolah', 'aktif', '2023-12-01 19:03:53', '2023-12-01 19:41:32', NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuks`
--

CREATE TABLE `surat_masuks` (
  `id_surat_masuk` bigint(20) UNSIGNED NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `klasifikasi` enum('Rahasia','Terbatas','Biasa') NOT NULL,
  `sifat_surat` enum('Sangat Segera','Segera','Biasa') NOT NULL,
  `asal_surat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `file_surat_masuk` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_surat` enum('aktif','nonaktif') NOT NULL,
  `posisi_surat` enum('tercatat','disposisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_masuks`
--

INSERT INTO `surat_masuks` (`id_surat_masuk`, `no_surat`, `klasifikasi`, `sifat_surat`, `asal_surat`, `tanggal`, `lampiran`, `perihal`, `file_surat_masuk`, `created_at`, `updated_at`, `status_surat`, `posisi_surat`) VALUES
(7, '10', 'Rahasia', 'Sangat Segera', 'asd', '2023-12-02', 'asd', 'dsa', 'aa.pdf', '2023-12-02 09:21:58', '2023-12-02 02:30:46', 'aktif', 'disposisi'),
(8, 'e12/31', 'Rahasia', 'Sangat Segera', 'asd', '2023-12-25', 'dsa', 'asd', 'lalalalalalalala.pdf', '2023-12-03 21:24:12', '2023-12-03 21:24:12', 'aktif', 'tercatat');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id_unit` bigint(20) UNSIGNED NOT NULL,
  `tipe_unit` enum('Pimpinan','Bidang','Badan') NOT NULL,
  `nama_unit` varchar(255) NOT NULL,
  `kode_unit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_unit` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id_unit`, `tipe_unit`, `nama_unit`, `kode_unit`, `created_at`, `updated_at`, `status_unit`) VALUES
(1, 'Bidang', 'Bidang Pembinaan Anggota Dewasa', 'C', NULL, '2023-11-06 02:35:18', 'aktif'),
(2, 'Bidang', 'Bidang Pembinaan Anggota Muda', 'B', '2023-11-06 01:49:54', '2023-11-06 02:32:48', 'nonaktif'),
(3, 'Pimpinan', 'Sekretaris', 'A', '2023-11-06 02:35:35', '2023-11-28 06:14:16', 'nonaktif'),
(4, 'Bidang', 'Bidang Pembinaan Anggota Muda', 'B', '2023-11-06 02:35:45', '2023-11-06 02:35:47', 'nonaktif'),
(5, 'Badan', 'Dewan Kerja Daerah', 'D', '2023-11-08 21:11:28', '2023-11-28 05:48:38', 'nonaktif'),
(6, 'Pimpinan', 'Sekretaris', 'A', '2023-11-10 07:16:57', '2023-11-28 06:14:19', 'nonaktif'),
(7, 'Bidang', 'Sekretaris', 'D', '2023-11-20 09:35:23', '2023-11-28 05:48:46', 'nonaktif'),
(8, 'Bidang', 'Dewan Kerja Daerah', 'D', '2023-11-22 01:19:47', '2023-11-27 00:10:22', 'nonaktif'),
(9, 'Pimpinan', 'Sekretaris', 'A', '2023-11-27 00:15:20', '2023-11-28 06:14:20', 'nonaktif'),
(10, 'Pimpinan', 'Sekretaris', 'A', '2023-11-27 00:16:43', '2023-11-28 06:14:22', 'nonaktif'),
(12, 'Pimpinan', 'Sekretaris', 'A', '2023-11-28 06:14:33', '2023-11-28 06:14:33', 'aktif'),
(13, 'Bidang', 'Bidang Pembinaan Anggota Muda', 'B', '2023-11-30 05:13:08', '2023-11-30 05:13:08', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_units`
--

CREATE TABLE `user_units` (
  `id_user_unit` bigint(20) UNSIGNED NOT NULL,
  `id_unit` int(11) NOT NULL,
  `username_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `status_user` enum('aktif','nonaktif') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_units`
--

INSERT INTO `user_units` (`id_user_unit`, `id_unit`, `username_user`, `password_user`, `nama_user`, `email_user`, `status_user`, `created_at`, `updated_at`) VALUES
(23, 1, 'bidang1', '431031e751c77d33b9ac184a1c01a7009a4c58db', 'BIDANG 1.0', 'bidang1@gmail.com', 'aktif', '2023-12-04 03:13:28', NULL),
(24, 1, 'bidang2', '7e1c0511bbf9883c7c3c6cbd055069cc7bac28ee', 'bidang2.0', 'bidnag2@gmail.com', 'aktif', '2023-12-04 04:03:43', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `disposisis`
--
ALTER TABLE `disposisis`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notulens`
--
ALTER TABLE `notulens`
  ADD PRIMARY KEY (`id_notulen`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ringkasan_kegiatans`
--
ALTER TABLE `ringkasan_kegiatans`
  ADD PRIMARY KEY (`id_ringkasan_kegiatan`);

--
-- Indexes for table `sekretariats`
--
ALTER TABLE `sekretariats`
  ADD PRIMARY KEY (`id_sekretariat`);

--
-- Indexes for table `sekretaris`
--
ALTER TABLE `sekretaris`
  ADD PRIMARY KEY (`id_sekretaris`);

--
-- Indexes for table `surat_keluars`
--
ALTER TABLE `surat_keluars`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `surat_masuks`
--
ALTER TABLE `surat_masuks`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_units`
--
ALTER TABLE `user_units`
  ADD PRIMARY KEY (`id_user_unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `disposisis`
--
ALTER TABLE `disposisis`
  MODIFY `id_disposisi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notulens`
--
ALTER TABLE `notulens`
  MODIFY `id_notulen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ringkasan_kegiatans`
--
ALTER TABLE `ringkasan_kegiatans`
  MODIFY `id_ringkasan_kegiatan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sekretariats`
--
ALTER TABLE `sekretariats`
  MODIFY `id_sekretariat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sekretaris`
--
ALTER TABLE `sekretaris`
  MODIFY `id_sekretaris` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surat_masuks`
--
ALTER TABLE `surat_masuks`
  MODIFY `id_surat_masuk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id_unit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_units`
--
ALTER TABLE `user_units`
  MODIFY `id_user_unit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
