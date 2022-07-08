-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 05:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothes_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(70) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `merk_produk` varchar(30) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `kategori_produk` varchar(25) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `merk_produk`, `stok`, `kategori_produk`, `supplier`) VALUES
(1, 'Jeans Highwaist Loose 813', 157000, 'JINISO', 150, 'Celana Wanita', 'JINISO Official Shop'),
(2, 'Erigo Short Shirt Jazlyn Black', 150000, 'ERIGO', 50, 'Kemeja Pria', 'ERIGO Official Shop'),
(3, 'Daisy Leaves Tunik', 194000, 'Bayleaf.id', 115, 'Atasan Tunik', 'Bayleaf.id Official Shop'),
(4, 'Sepatu Full White Wanita', 450000, 'PVN', 20, 'Sepatu', 'PVN Official Shop'),
(8, 'Topi Pantai Pelindung Anti UV', 78000, 'Bitzen', 100, 'Topi', 'Bitzen Official Shop'),
(22, 'Nike Air Max Ap Shoes', 1429000, 'Nike', 20, 'Sepatu Pria', 'Zalora');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
