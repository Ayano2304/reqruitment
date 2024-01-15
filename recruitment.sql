-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2024 pada 21.21
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_operator`
--

CREATE TABLE `data_operator` (
  `id` int(11) NOT NULL,
  `ktp` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `status_nikah` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_operator`
--

INSERT INTO `data_operator` (`id`, `ktp`, `nama`, `alamat`, `kota`, `provinsi`, `tempat_lahir`, `tgl_lahir`, `kelamin`, `status_nikah`, `posisi`) VALUES
(1, 12312312, '', '', '', '', '', '0000-00-00', 'laki-laki', 'Lajang', 'Operator Sewing'),
(2, 656456431, 'Ayano', 'Dusun Cisaruan', 'Karawang', 'Jawa Barat', 'Bekasi', '2000-05-12', 'perempuan', 'Menikah', 'Operator Cutting'),
(3, 0, 'sawerer', '', '', '', '', '0000-00-00', 'laki-laki', 'Lajang', 'Operator Sewing'),
(4, 0, 'r34534534', '', '', '', '', '0000-00-00', 'laki-laki', 'Lajang', 'Operator Sewing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator_jobs`
--

CREATE TABLE `operator_jobs` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `expired_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `operator_jobs`
--

INSERT INTO `operator_jobs` (`id`, `job_title`, `description`, `expired_date`) VALUES
(1, 'Operator Sewing', 'Berpengalaman minimal 1 tahun di posisi yang sama Bersedia di tempatkan di Purwakarta, Jawa Barat', '2023-08-31'),
(3, 'Operator Assembling', 'Berpengalaman minimal 1 tahun diposisi yang sama Bersedia di tempatkan di Purwakarta, Jawa Barat', '2023-08-31'),
(4, 'Operator Cutting', 'Berpengalaman minimal 1 tahun di posisi yang sama Bersedia di tempatkan di Purwakarta, Jawa Barat', '2023-08-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff_jobs`
--

CREATE TABLE `staff_jobs` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `expired_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `staff_jobs`
--

INSERT INTO `staff_jobs` (`id`, `job_title`, `description`, `expired_date`) VALUES
(1, 'IT Specialist', 'Pendidikan minimal S1 Teknik Informatika/Sistem Informasi\r\nMenguasai bahasa Pemrograman PHP, HTML, CSS, JavaScript, JQuery\r\nMenguasai Framework LARAVEL, CodeIgniter\r\nFamiliar dengan RDBMS MySQL, SQL Server\r\nMenguasai troubleshooting Software dan Hardware\r', '2024-01-21'),
(8, 'Development', 'Pengalaman di Bagian Development sepatu minmal 3 tahun Bersedia ditempatkan di Purwakarta, Jawa barat', '2023-10-31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_operator`
--
ALTER TABLE `data_operator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `operator_jobs`
--
ALTER TABLE `operator_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staff_jobs`
--
ALTER TABLE `staff_jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_operator`
--
ALTER TABLE `data_operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `operator_jobs`
--
ALTER TABLE `operator_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `staff_jobs`
--
ALTER TABLE `staff_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
