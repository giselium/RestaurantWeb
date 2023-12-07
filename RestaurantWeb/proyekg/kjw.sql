-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 11:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kjw`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `subtotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id`, `id_pesanan`, `id_menu`, `jumlah`, `harga`, `subtotal`) VALUES
(1, 1, 1, 5, 15, NULL),
(2, 1, 3, 5, 15, NULL),
(3, 1, 6, 15, 15, NULL),
(4, 2, 2, 4, 15, NULL),
(5, 2, 3, 2, 15, NULL),
(6, 3, 1, 1, 15, NULL),
(7, 3, 5, 0, 15, NULL),
(8, 3, 5, -1, 15, NULL),
(11, 4, 2, 1, 15, 15),
(12, 4, 3, 2, 15, 30);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user1', 'user1', 'user'),
(3, 'user2', 'user2', 'user'),
(4, 'aaa', 'aaa', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `Id` int(11) NOT NULL,
  `id_meja` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `Id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`Id`, `id_meja`, `status`, `Id_user`) VALUES
(1, 1, 1, 0),
(2, 2, 1, 0),
(3, 3, 1, 0),
(4, 4, 1, 0),
(5, 5, 1, 0),
(6, 6, 1, 0),
(7, 7, 1, 0),
(8, 8, 1, 0),
(9, 9, 1, 0),
(10, 10, 1, 0),
(11, 11, 1, 0),
(12, 12, 1, 0),
(13, 13, 1, 0),
(14, 14, 1, 0),
(15, 15, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `food_id` varchar(5) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `food_id`, `food_name`, `price`, `image`, `kategori`, `info`) VALUES
(2, '2', 'Nasi Sop', 15, 'sop.png', 'food', 'Nasi + Sop'),
(3, '3', 'Nasi Lodeh', 15, 'lodeh.png', 'food', 'Nasi + Lodeh'),
(4, '4', 'Nasi Pecel', 15, 'pecel.png', 'food', 'Nasi + Pecel'),
(5, '5', 'Nasi Soto', 15, 'soto.png', 'food', 'Nasi + Soto'),
(6, '6', 'Nasi Kikil', 15, 'kikil.png', 'food', 'Nasi + Kikil'),
(7, '7', 'Nasi Campur', 12, 'campur.png', 'food', 'Nasi + Ayam + Telur + Sayur + Mie'),
(8, '8', 'Nasi Ayam Geprek', 10, 'geprek.png', 'food', 'Nasi + Ayam geprek + Sambel'),
(9, '9', 'Nasi Pecel Lele', 20, 'pecellele.png', 'food', 'Nasi + Lele + Sambel + Tahu '),
(10, '10', 'Nasi Ayam Bakar', 24, 'ayambakar.png', 'food', 'Nasi + Ayam Bakar'),
(11, '11', 'Nasi Empal', 15, 'empal.png', 'food', 'Nasi + Empal + Sambel'),
(12, '12', 'Nasi Gudeg', 15, 'gudeg.png', 'food', 'Nasi + gudeg ayam + telur'),
(13, '13', 'Nasi Gulai Kambing', 25, 'gulai.png', 'food', 'Nasi + Gulai Kambing + Sambal'),
(14, '14', 'Nasi Pepes Ayam', 13, 'pepes.png', 'food', 'Nasi + pepesan ayam'),
(15, '15', 'Nasi Kucing', 5, 'kucing.png', 'food', 'Nasi + ayam + mie tempe bacem dengan porsi kecil'),
(16, '16', 'Tempe Goreng', 5, 'tempe.png', 'Snack', 'Tempe Goreng Biasa/Tepung'),
(17, '17', 'Tahu Goreng', 5, 'tahu.png', 'Snack', 'Tahu Goreng Biasa/Tepung'),
(18, '18', 'Jamur Crispy', 10, 'jamur.png', 'Snack', 'Jamur Goreng Tepung'),
(19, '19', 'Kentang Goreng', 10, 'kentang.png', 'Snack', 'Kentang Goreng Biasa/Bumbu'),
(20, '20', 'Milo Panas/Dingin', 4, 'milo.png', 'Drinks', 'Milo Panas / Dingin'),
(21, '21', 'Pop Ice', 4, 'popes.png', 'Drinks', 'Pop Ice berbagai rasa'),
(22, '22', 'Teh Tawar Panas/Dingin', 3, 'tawar.png', 'Drinks', 'Teh tanpa gula'),
(23, '23', 'Es Soda Gembira', 7, 'soda.png', 'Drinks', 'Es soda dengan tambahan sirup dan susu kental manis'),
(24, '24', 'Teh Panas/Dingin', 3, 'teh.png', 'Drinks', 'Teh manis'),
(25, '25', 'Jeruk Panas/Dingin', 3, 'jeruk.png', 'Drinks', 'Jeruk Peras'),
(26, '26', 'Kopi Panas/Dingin', 4, 'kopi.png', 'Drinks', 'Kopi Hitam/Manis'),
(78, '', '', 0, '', 'food', '');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `user`, `status`) VALUES
(3, 2, 'S'),
(4, 2, 'S');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `Rating` float NOT NULL,
  `Review` varchar(300) NOT NULL,
  `food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `nama` varchar(50) NOT NULL,
  `isi` varchar(300) NOT NULL,
  `submit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`nama`, `isi`, `submit`) VALUES
('sdadas', 'sdasdasdasdas', '03:02:00pm'),
('Kevin Danendra Budianto', 'jeky dan andre pergi ke pasar', '03:53:12pm'),
('yuan', 'enakkkk', '04:09:40pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
