-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2020 pada 07.56
-- Versi Server: 5.5.27
-- Versi PHP: 7.0.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `ci_sangkuriang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_admin`
--

CREATE TABLE IF NOT EXISTS `akun_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `akun_admin`
--

INSERT INTO `akun_admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'deky@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'samin', 'samin@gmail.com', 'c403af0bede78cb556e7d13dbf9d34e9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_login`
--

CREATE TABLE IF NOT EXISTS `akun_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `akun_login`
--

INSERT INTO `akun_login` (`id`, `username`, `email`, `password`) VALUES
(1, 'Alex17', 'dekyalexander200@gmail.com', '42209958f5ec5781dd5a2e3a03131d75'),
(2, 'dekyalexander', 'jeckyalexander@rocketmail.com', '6f3c226dc2d9fcc627587919406f0ed8'),
(3, 'alex', 'alexander@gmail.com', '2b4233ebec7a45e1fb8ddd1aab794f7b'),
(4, 'admin', 'admin@example.com', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'user', 'user@gmail.com', 'user'),
(7, 'jaka', 'jaka@gmail.com', 'jaka'),
(8, 'dadan', 'dadan@gmail.com', 'fd68e8922a6705a916b19669fb356cce'),
(9, 'felix', 'felix@gmail.com', 'bd4facb0cb3f5c7b680462af8b540aba'),
(10, 'alan', 'alan@gmail.com', 'alan'),
(11, 'anam', 'anam@gmail.com', 'anam'),
(12, 'isal', 'isal@gmail.com', 'isal'),
(13, 'jai', 'jai@gmail.com', 'jai'),
(14, 'fery', 'fery@gmail.com', 'fery'),
(15, 'ida', 'ida@gmail.com', '7f78f270e3e1129faf118ed92fdf54db');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `artikel` text,
  `gambar` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan_gambar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `artikel`, `gambar`, `tanggal`, `keterangan_gambar`) VALUES
(1, 'Presiden Jokowi Berkunjung Ke Budidaya Lele Sindang Sari', '<p>Kedatangan presiden jokowi dodo pada acara HUT Budidaya Lele Sindang Sari menarik antusias warga kelurahan sindang sari, presiden menyatakan penting nya melakukan pembudidayaan terhadap bibit-bibit ikan yang unggul dalam memenuhi kebutuhan pasar domestik dan kebutuhan gizi bagi penikmat sajian ikan lele.</p>\r\n', 'jokowi1.jpg', '2020-02-13', 'Presiden RI Ke 7 Jokowi Widodo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` text,
  `nohp` varchar(12) NOT NULL,
  `pendidikan` varchar(10) DEFAULT NULL,
  `pekerjaan` varchar(15) DEFAULT NULL,
  `photo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `alamat`, `nohp`, `pendidikan`, `pekerjaan`, `photo`) VALUES
(39, 'Johny Christ', 'Hunington Beach', '085771229064', 'SMP', 'Seniman', '1566095232279.jpg'),
(40, 'Abu Jahal', 'Mesir', '087771229065', 'SMA', 'Buruh', '1566102096479.jpg'),
(41, 'Abu Lahab', 'Pakistan', '087765123456', 'SMP', 'Wirausaha', '1566102157878.jpg'),
(42, 'Samuel', 'Tangerang', '087771229076', 'S1', 'Pegawai Negri', '1566102401979.jpg'),
(43, 'Andra Ramadhan', 'Jakarta', '087771229064', 'S1', 'Seniman', '1571284975678.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_order`
--

CREATE TABLE IF NOT EXISTS `tbl_detail_order` (
  `id_detail_order` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `produk` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_detail_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Bibit'),
(2, 'Indukan'),
(3, 'Pakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text,
  `nohp` varchar(12) DEFAULT NULL,
  `kurir` varchar(20) DEFAULT NULL,
  `paket` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE IF NOT EXISTS `tbl_produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(30) DEFAULT NULL,
  `deskripsi` text,
  `harga` varchar(15) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `kategori`) VALUES
(1, 'Bibit Lele', 'Bibit Lele Sangkuriang Umur 1 Minggu Berat 1 Kilogram', '100000', 'bibit.jpg', 'Bibit'),
(2, 'Indukan Lele', 'Indukan Lele Sangkuriang Umur 1 Tahun Berat 5 Kilogram', '500000', 'indukan.jpg', 'Indukan'),
(3, 'Pakan Lele', 'Pelet MS PREO CATFISH FLOATING FEED Berat 30 Kilogram', '200000', 'pelet.jpg', 'Pakan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
