-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 01:41 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satukopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(2, 'Indomie', 'indomie sleraku', 'Makanan', 500000, 1, 'pp.jpg'),
(3, 'es teh', 'minuman segar', 'Minuman', 5000000, 8, 'kitten01.jpg'),
(4, 'roti bakar', 'roti bakar spesial', 'Makanan', 1000000, 7, '1.jpg'),
(5, 'americano', 'rasakan kopi yang strong', 'Minuman', 700000, 8, '2.jpg'),
(6, 'nasi goreng', 'nasi goreng spesial', 'Makanan', 600000, 9, '3.jpg'),
(15, 'capucino', 'kopi nikmat nyaman di lambung', 'Minuman', 1250000, 10, '4.jpg'),
(16, 'nasi uduk', 'ikan nya tongkol', 'Makanan', 2000000, 10, '5.jpeg'),
(42, 'kopi', 'kopi hitam', 'Minuman', 2000, 8, 'Mas Ker-01.png'),
(43, 'kentang', 'mirip kaya kentang', 'Makanan', 123123, 12, 'kitten01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(34, 'eko', 'cibinong', '2021-07-19 06:32:30', '2021-07-20 06:32:30'),
(35, 'ali', 'kalisari', '2021-07-19 06:33:52', '2021-07-20 06:33:52'),
(36, 'azis', 'depok', '2021-07-19 06:39:08', '2021-07-20 06:39:08'),
(37, 'bambang', 'jakarta', '2021-07-19 06:40:37', '2021-07-20 06:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`) VALUES
(23, 34, 2, 'Indomie', 1, 500000),
(24, 34, 3, 'es teh', 1, 5000000),
(25, 35, 6, 'nasi goreng', 1, 600000),
(26, 35, 42, 'kopi', 1, 2000),
(27, 36, 4, 'roti bakar', 1, 1000000),
(28, 36, 5, 'americano', 1, 700000),
(29, 37, 42, 'kopi', 1, 2000),
(30, 37, 15, 'capucino', 1, 1250000);

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '$2a$10$qKtCF8hNjgewVJFVbt/dh.hNKCMU2KxHEx3rmeVjQXl', 1),
(2, 'Farid Aziz', 'farid', 'a1d12da42d4302e53d510954344ad164', 2),
(10, 'Violet', 'Violet', '80f1187112e2e5e0403499147f7014b8', 2),
(11, 'budi', 'budi', '00dfc53ee86af02e742515cdcf075ed3', 2),
(12, 'farid', 'farid', 'a1d12da42d4302e53d510954344ad164', 2),
(13, 'junaidi', 'junaidi', '3fc0a7acf087f549ac2b266baf94b8b1', 2),
(14, 'eko', 'eko', 'e5ea9b6d71086dfef3a15f726abcc5bf', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_brg` (`id_brg`),
  ADD KEY `id_invoice` (`id_invoice`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`id_brg`) REFERENCES `tb_barang` (`id_brg`),
  ADD CONSTRAINT `tb_pesanan_ibfk_2` FOREIGN KEY (`id_invoice`) REFERENCES `tb_invoice` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
