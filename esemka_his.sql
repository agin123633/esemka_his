-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2021 pada 14.30
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esemka_his`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'esemka-his', '2deb2be2578d34c02511eeb568da1bb2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(80) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('350d394e-0933-41f3-9dff-15c7c2c7379b', 'Dr. Indra', 'Penyakit Dalam', 'Jati', '1234567'),
('a0cff5de-a297-4a07-9540-0a24ad9a7937', 'Dr. Bambang', 'Penyakit Jantung', 'Trenggalek', '098765');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `harga_obat` text NOT NULL,
  `ket_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `harga_obat`, `ket_obat`) VALUES
('38622d67-9104-4615-8c9d-c51f5f0b23b2', 'spasminal', '5000', 'Obat Sakit Perut'),
('393e3629-20db-4efd-a8a9-f4aa573bdc8e', 'ambroxol syr', '29.000', 'Obat Hidung\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `no_identitas` varchar(30) NOT NULL,
  `nama_pasien` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `tgl_daftar`, `no_identitas`, `nama_pasien`, `tgl_lahir`, `jk`, `alamat`, `no_hp`, `status`) VALUES
('6acf2e65-5de1-491a-8696-6e137e84f76a', '2021-08-29', '1', 'Andri', '2003-05-06', 'Laki-laki', 'Karangan', '123', 'Daftar'),
('a5c706f8-4a2e-408b-8c7f-cb6601a09cfb', '2021-08-29', '2', 'www', '0022-02-22', 'Perempuan', 'wqs', '222', 'Daftar'),
('fb1dbba6-2c2e-499a-82c6-199b9c4dcc36', '2021-08-29', '3', 'aaa', '2021-08-28', 'Laki-laki', 'aa', '342', 'Daftar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli`
--

CREATE TABLE `poli` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`, `gedung`) VALUES
('5fcf543b-47cf-4a7a-97de-3cd4d2c0cf10', 'Poli Umum', 'R. Melati Lt. 3'),
('c985500e-38fe-4b16-8ac3-cb6c75917669', 'Poli Hidung', 'R. Kenanga Lt. 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekammedis`
--

CREATE TABLE `rekammedis` (
  `id_rm` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `id_poli` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `tinggi_badan` varchar(50) NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `tindakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekammedis`
--

INSERT INTO `rekammedis` (`id_rm`, `id_pasien`, `id_dokter`, `id_poli`, `tgl_periksa`, `tinggi_badan`, `berat_badan`, `keluhan`, `diagnosa`, `tindakan`) VALUES
('1', '6acf2e65-5de1-491a-8696-6e137e84f76a', '350d394e-0933-41f3-9dff-15c7c2c7379b', 'tht', '2021-04-05', '8', '8', 'aa', 'asd', 'dwsa'),
('2fccabe2-1e8f-476b-aa44-33e8ece8b2f4', 'fb1dbba6-2c2e-499a-82c6-199b9c4dcc36', '350d394e-0933-41f3-9dff-15c7c2c7379b', 'c985500e-38fe-4b16-8ac3-cb6c75917669', '2021-08-30', '', '', 'aaa', 'asas', ''),
('3c730e99-bc16-4cea-a1d2-20bd9754fecd', '6acf2e65-5de1-491a-8696-6e137e84f76a', 'a0cff5de-a297-4a07-9540-0a24ad9a7937', 'c985500e-38fe-4b16-8ac3-cb6c75917669', '2021-08-30', '', '', 'ddd', 'wqdqwa', ''),
('490b3e63-f4fc-4f61-a164-27a0b4d94b68', 'a5c706f8-4a2e-408b-8c7f-cb6601a09cfb', '350d394e-0933-41f3-9dff-15c7c2c7379b', 'c985500e-38fe-4b16-8ac3-cb6c75917669', '2021-08-30', '', '', 'ddd', 'wqdqwa', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_obat`
--

CREATE TABLE `rm_obat` (
  `id` int(11) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rm_obat`
--

INSERT INTO `rm_obat` (`id`, `id_rm`, `id_obat`) VALUES
(0, '2fccabe2-1e8f-476b-aa44-33e8ece8b2f4', '393e3629-20db-4efd-a8a9-f4aa573bdc8e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indeks untuk tabel `rm_obat`
--
ALTER TABLE `rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rm` (`id_rm`),
  ADD KEY `id_obat` (`id_obat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD CONSTRAINT `rekammedis_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `rekammedis_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Ketidakleluasaan untuk tabel `rm_obat`
--
ALTER TABLE `rm_obat`
  ADD CONSTRAINT `rm_obat_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `rekammedis` (`id_rm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
