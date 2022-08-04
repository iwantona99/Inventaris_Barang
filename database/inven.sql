-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 05.49
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori2`
--

CREATE TABLE `kategori2` (
  `kodebarang` varchar(19) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `jenisbarang` varchar(225) NOT NULL,
  `noregister` varchar(100) NOT NULL,
  `merktype` varchar(90) NOT NULL,
  `tahunpembelian` varchar(8) NOT NULL,
  `asalusul` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `kondisi` enum('Baik','Kurang Baik','Rusak') NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `foto_pegawai` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori2`
--

INSERT INTO `kategori2` (`kodebarang`, `namabarang`, `jenisbarang`, `noregister`, `merktype`, `tahunpembelian`, `asalusul`, `harga`, `kondisi`, `keterangan`, `foto_pegawai`) VALUES
('45637', 'LED TV', 'Elektronik', '958646', 'Samsung', '2019', 'Pembelian', '1500000', 'Baik', 'Ruangan Camat', '608f5793d5ba3.jpg'),
('9811', 'Dispenser Air', 'Elektronik', '0911', 'Miyako', '2019', 'Pembelian', '500000', 'Baik', 'Dapur', '60af0f9a85168.jpg'),
('9855', 'Adapter Wifi', 'Elektronik', '0955', 'Tenda', '2021', 'Pembelian', '690000', 'Baik', 'Ruangan Kantor', '60af119158230.jpg'),
('9866', 'Kompor Gas', 'Elektronik', '0966', 'Rinnai', '2019', 'Pembelian', '450000', 'Baik', 'Dapur', '60af0fd7d2692.jpg'),
('9911', 'Antena Radio', 'Elektronik', '0011', 'Baegazden 010', '2014', 'Pembelian', '700000', 'Kurang Baik', 'Gudang', '60af08cf5f1a2.jpg'),
('9912', 'Pengeras Suara', 'Elektronik', '0012', 'Avidio 990', '2016', 'Pembelian', '1600000', 'Rusak', 'Gudang', '60af097a0df02.jpg'),
('9914', 'Speaker', 'Elektronik', '0014', 'Bombass Bluetoth 788', '2015', 'Pembelian', '1800000', 'Kurang Baik', 'Gudang', '60af09bb65cf9.jpg'),
('9932', 'Voltage Stabilizer', 'Alat Listrik', '0032', 'Samoto 7500V', '2016', 'Pembelian', '2865000', 'Kurang Baik', 'Ruangan Adm Kantor', '60af07178fb7b.jpg'),
('9933', 'Speaker Aktif', 'Elektronik', '0033', 'Sonicgear Karaoke 12200', '2019', 'Pembelian', '2450000', 'Baik', 'Ruangan Kantor', '60af092f84d6d.jpg'),
('9956', 'Speaker Mini', 'Elektronik', '0056', 'Cidio 1200V', '2015', 'Pembelian', '980000', 'Baik', 'Ruangan Kantor', '60af0a1e0554b.jpg'),
('9966', 'Printerr', 'Elektronik', '0066', 'Epson L876 ', '2017', 'Pembelian', '1700000', 'Kurang Baik', 'Gudang', '60af07d5b1e20.jpg'),
('9972', 'Mesin Printer', 'Elektronik', '0072', 'Epson L120', '2019', 'Hibah', '2100000', 'Baik', 'Ruangan Kantor', '60af08693e527.jpg'),
('9977', 'Printer', 'Elektronik', '0077', 'Canon E986 P', '2018', 'Pembelian', '1750000', 'Rusak', 'Gudang', '60af076fb5be7.jpg'),
('9978', 'Printer HP', 'Elektronik', '0078', 'HP Inject 9210', '2020', 'Pembelian', '4800000', 'Baik', 'Ruangan Sekcam', '60af0827b84d7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori3`
--

CREATE TABLE `kategori3` (
  `kodebarang` varchar(50) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `jenisbarang` varchar(50) NOT NULL,
  `noregister` varchar(50) NOT NULL,
  `merktype` varchar(50) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `bahan` varchar(100) NOT NULL,
  `tahunpembelian` varchar(100) NOT NULL,
  `asalusul` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `kondisi` enum('Baik','Kurang Baik','Rusak') NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `foto_pegawai` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori3`
--

INSERT INTO `kategori3` (`kodebarang`, `namabarang`, `jenisbarang`, `noregister`, `merktype`, `ukuran`, `bahan`, `tahunpembelian`, `asalusul`, `harga`, `kondisi`, `keterangan`, `foto_pegawai`) VALUES
('07452', 'Meja Stap Biasa', 'Meja', '97462', 'Sejahtera', '2x1', 'Kayu', '2020', 'Pembelian', '450000', 'Rusak', 'Gudang', '608f5df485552.jpg'),
('0972', 'KURSI STAP', 'Kursi', '567384', 'IKEA', '1,5x1', 'Kayu', '2019', 'Hibah', '400000', 'Baik', 'Ruangan Camat', '608f5d605f3ad.jpg'),
('9833', 'Kursi Kondangan', 'Mebelair', '0933', 'Napoly', '-', 'Plastik', '2017', 'Hibah', '87000', 'Baik', 'Gudang', '60af11635b9cf.jpg'),
('9844', '1 Set Mebelair', 'Mebelair', '0944', 'Tempahan', '-', 'Kayu,Kain', '2020', 'Pembelian', '4500000', 'Baik', 'Ruangan Camat', '60af1206637cc.jpg'),
('9865', 'Kursi Tempahan 02', 'Mebelair', '0965', 'Tempahan', '-', 'Metal,Kain', '2020', 'Pembelian', '1200000', 'Baik', 'Ruangan Camat', '60af11034eb82.jpg'),
('9876', 'Lemari Piagam', 'Lemari', '0976', '-', '0,5x2', 'Metal', '2018', 'Pembelian', '1600000', 'Baik', 'Ruangan Kantor', '60af102d43c32.jpg'),
('9877', 'Lemari Berkas', 'Lemari', '0977', '-', '-', 'Metal', '2018', 'Pembelian', '900000', 'Baik', 'Ruangan Kantor', '60af10702afc7.jpg'),
('9907', 'Lemari Arsip', 'Lemari', '0007', 'Tempahan', '1x2', 'Kaca,Metal', '2014', 'Pembelian', '1450000', 'Baik', 'Ruangan Sekcam', '60af0ee27fe35.jpg'),
('9911', 'Meja Strap Kayu', 'Mebelair', '0011', 'Tomson', '2x1', 'kayu', '2020', 'Pembelian', '1600000', 'Baik', 'Ruangan Camat', '60af0c7301af2.jpg'),
('9932', 'Kursi Tempahan Kecil', 'Mebelair', '0032', 'Tempahan', '1x1', 'Kain,Kayu', '2018', 'Pembelian', '700000', 'Kurang Baik', 'Ruangan Kantor', '60af0bc1354c7.jpg'),
('9934', 'Kursi Strap', 'Mebelair', '0034', 'Chairman', '-', 'Metal,Busa,Kain', '2019', 'Pembelian', '530000', 'Kurang Baik', 'Ruangan Kantor', '60af0aa9c7af6.jpg'),
('9945', 'Meja Kayu', 'Mebelair', '0045', 'Donati', '2x1', 'kayu', '2019', 'Pembelian', '760000', 'Baik', 'Ruangan Kantor', '60af0d6e7497e.jpg'),
('9946', 'Meja Kayu 02', 'Mebelair', '0046', 'Ikea', '2x1', 'Kayu', '2018', 'Pembelian', '400000', 'Kurang Baik', 'Gudang', '60af0dc22f906.jpg'),
('9951', 'Kursi Biasa', 'Mebelair', '0051', 'Osaka', '-', 'Besi,Kain', '2018', 'Pembelian', '500000', 'Baik', 'Ruangan Kantor', '60af0b41994ed.jpg'),
('9955', 'Kursi', 'Mebelair', '0055', 'Osaka', '-', 'Metal,Kain', '2019', 'Pembelian', '900000', 'Baik', 'Ruangan Kantor', '60af0b057752e.jpg'),
('9962', 'Kursi Tempahan', 'Mebelair', '0062', 'Tempahan', '3x1', 'Kain,Kayu', '2019', 'Pembelian', '1105000', 'Baik', 'Ruangan Depan', '60af0b83bfd9f.jpg'),
('9977', 'Meja Kayu', 'Mebelair', '0077', 'Ikea', '2x1', 'Kayu', '2020', 'Pembelian', '600000', 'Baik', 'Ruangan Depan', '60af0c3d00d4e.jpg'),
('9990', 'Meja Kaca', 'Mebelair', '0090', 'Tempahan', '2x1', 'Kaca', '2020', 'Oembelian', '870000', 'Baik', 'Ruangan Depan', '60af0bf2b91e1.jpg'),
('9992', 'Meja Kayu 03', 'Mebelair', '0092', '-', '2x1', 'Kayu', '2018', 'Pembelian', '450000', 'Baik', 'Ruangan Kantor', '60af0e889bfb7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konn`
--

CREATE TABLE `konn` (
  `kondisi` enum('Baik','Kurang Baik','Rusak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `kodebarang` varchar(19) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `jenisbarang` varchar(255) NOT NULL,
  `noregister` text NOT NULL,
  `merktype` varchar(90) NOT NULL,
  `ukurancc` varchar(100) NOT NULL,
  `bahan` varchar(15) NOT NULL,
  `tahunpembelian` varchar(50) NOT NULL,
  `nopabrik` varchar(60) NOT NULL,
  `norangka` text NOT NULL,
  `nomesin` varchar(100) NOT NULL,
  `nopolisi` varchar(100) NOT NULL,
  `nobpkb` varchar(100) NOT NULL,
  `asalusul` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `kondisi` enum('Baik','Kurang Baik','Rusak') NOT NULL,
  `keterangan` varchar(110) NOT NULL,
  `foto_pegawai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`kodebarang`, `namabarang`, `jenisbarang`, `noregister`, `merktype`, `ukurancc`, `bahan`, `tahunpembelian`, `nopabrik`, `norangka`, `nomesin`, `nopolisi`, `nobpkb`, `asalusul`, `harga`, `kondisi`, `keterangan`, `foto_pegawai`) VALUES
('64762', 'Honda CB 150 R', 'kendaraan bermotor', '9865', 'HONDA', '150', 'Plastik dan Bes', '2019', '86645738475', '98764-846464-84664-84465', '94758463', 'BL 1756 GP', '87353182', 'Pembelian', 35000000, 'Baik', 'Kendaraan Dinas', '608f5eb36e9ef.jpg'),
('9907', 'Mesin Semprot', 'Mesin', '0078', 'Firman SKS 16 H', '-', 'Plastik', '2020', '-', '-', '-', '-', '-', 'Pembelian', 850000, 'Kurang Baik', 'Gudang', '60af00b94af7a.jpg'),
('99089', 'Brush Cutter', 'Mesin', '0098', 'TESLA BG 305', '-', 'Metal', '2019', '-', '-', '-', '-', '-', 'Pembelian', 3350000, 'Baik', 'Gudang', '60af002c762a4.jpg'),
('9945', 'Pemotong Rumput', 'Mesin', '0045', 'Tasco 05', '-', 'metal,Plastik', '2017', '-', '-', '-', '-', '-', 'Pembelian', 2950000, 'Rusak', 'Gudang', '60af05a65b3f8.jpg'),
('9965', 'Sepeda Motor', 'Kendaraan Bermotor', '00544', 'Honda Revo ', '110 CC', 'Metal, Plastik', '2014', '7654638389', '8876446687777 5568', '876544567', 'BL 6745 GP', '223453426634', 'Hibah', 14500000, 'Rusak', 'Gudang', '60af0236cc66a.jpg'),
('9968', 'Brush Cutter', 'Mesin', '0068', 'Tasco 04', '-', 'Metal', '2017', '-', '-', '-', '-', '-', 'Pembelian', 2900000, 'Rusak', 'Gudang', '60af02fe85ad2.jpg'),
('9976', 'Gerobak Sorong', 'Gerobak', '0076', 'Sakai', '-', 'Metal', '2019', '-', '-', '-', '-', '-', 'Pembelian', 600000, 'Kurang Baik', 'Pekerjaan Lapangan', '60af0f43e255d.jpg'),
('9977', 'Brush Cutter', 'Mesin', '0077', 'Tasco 05', '-', 'Metal, Plastik', '2017', '-', '-', '-', '-', '-', 'Pembelian', 2990000, 'Rusak', 'Gudang', '60af038193e00.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$OHk2a6CP3zV00xwWv6r9QOhMcdCoLOJP7nbeB2rWXlGpzSfmskR7G');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori2`
--
ALTER TABLE `kategori2`
  ADD PRIMARY KEY (`kodebarang`);

--
-- Indeks untuk tabel `kategori3`
--
ALTER TABLE `kategori3`
  ADD PRIMARY KEY (`kodebarang`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`kodebarang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
