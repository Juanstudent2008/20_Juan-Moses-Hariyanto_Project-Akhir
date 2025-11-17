-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Nov 2025 pada 13.52
-- Versi server: 8.0.43
-- Versi PHP: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `join`
--

CREATE TABLE `join` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `umur` int NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `nopung` int NOT NULL,
  `alamat` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `notelp` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `join`
--

INSERT INTO `join` (`id`, `nama`, `umur`, `email`, `nopung`, `alamat`, `notelp`) VALUES
(4, 'uan', 19, 'juan@gmail.com', 5, 'gacor', 543234543),
(5, 'YANTO', 15, 'joni@gmail.com', 7, 'VTT', 123456724),
(9, 'bernard', 18, '2020070528@student.pppkpetra.sch.id', 4, 'wiyung', 987654765);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('yanto', '$2y$10$TdoZOSByulcllXAU.dXw/uCtFq/LTmyFmzfw7gVW4/VkWoVMsW4hG'),
('yanto', '$2y$10$lX0LN5967YhvNxgSvUuN.uVVin7eEN8tSM.i.tugTMQ67XIX0prdy'),
('yanto', '$2y$10$c.vyRh0ccFfSuRZEoyFng.bRykpvNxPTdcfCtZbLgBes8h2S0sS02'),
('yanto', '$2y$10$OVeq1KAFmZQUVHH5icNqge9/bf1GeOkx2c14DVQNu5.wJ8SesECuC'),
('yanto', '$2y$10$4vlbtMeyK/DOxQib27etfedfwS5pK4aL9ybR60CmTdR1xpv9tARzm'),
('yanto', '$2y$10$i9dk.ZwfFi0bQWXVIOkrUOu5jdR2DEC1BJnLoEXfXd2JDD7ZMblcm'),
('yanto', '$2y$10$384RNTmxNYcvWevv1OWrTOIezx5n774ckzTsJeNPHdG9WYvoBwg72'),
('yanti', '$2y$10$CRr.u9zsVH6FMRpBl9Zyye/7EaWSIi/267DWOX8gGrzp6mnFyFXv2'),
('fffff', '$2y$10$I9.lUO7o16fEAJ6bFuwOnud6hXPAgRSaI5Z9NVj9DcUySGEXGPV3O');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `join`
--
ALTER TABLE `join`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `join`
--
ALTER TABLE `join`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
