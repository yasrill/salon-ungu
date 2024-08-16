-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 05:47 AM
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
-- Database: `salonungu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `Nama_admin` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `Nama_admin`, `Username`, `Email`, `Password`) VALUES
(1, 'Speedy', 'Jonas', 'jamal@gmail.com', '12345'),
(2, 'yoi', 'yeah', 'yoi@yeah', '54321'),
(7, 's', 'ss', 'yoi@yeahss', '54321ss'),
(8, 's', 'ss', 'yoi@yeah', '54321'),
(9, 'Rafif', 'rafif', '', '12345'),
(10, 'dd', 'dd', 'yoi@yeahdd', '54321dd');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Tanggal_Booking` date NOT NULL,
  `Jam_Booking` time NOT NULL,
  `Metode_pembayaran` varchar(255) NOT NULL,
  `Catatan` text NOT NULL,
  `Status_booking` varchar(255) NOT NULL,
  `Bukti_bayar` varchar(255) NOT NULL,
  `Alasan_batal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_pelanggan`, `id_layanan`, `Nama`, `Tanggal_Booking`, `Jam_Booking`, `Metode_pembayaran`, `Catatan`, `Status_booking`, `Bukti_bayar`, `Alasan_batal`) VALUES
(262, 2, 7, 'Rafif', '2023-06-22', '15:13:00', 'Online', 'sss', 'Terkonfirmasi', '1687072191_dccdfb6f87f2b8314d46.png', ''),
(264, 2, 9, 'Rafif', '2023-06-23', '13:24:00', 'Online', 'yurico', 'Terkonfirmasi', '1687152074_4b50689e6e20a42c0224.jpg', ''),
(266, 2, 4, 'Rafif', '2023-06-30', '23:49:00', 'Online', 'xx', '', '', ''),
(267, 2, 5, 'Rafif', '2023-06-23', '21:40:00', 'Offline', 'bn', '', '', ''),
(268, 2, 5, 'Rafif', '2023-06-08', '21:51:00', 'Online', 'nbvc', '', '', ''),
(269, 2, 5, 'Rafif', '2023-06-08', '21:51:00', 'Offline', 'nbvc', '', '', ''),
(270, 2, 6, 'Rafif', '2023-06-15', '22:45:00', 'Online', 'bbb', '', '', ''),
(271, 2, 6, 'Rafif', '2023-06-15', '22:45:00', 'Online', 'bbb', '', '', ''),
(273, 2, 3, 'Rafif', '2023-06-08', '02:17:00', 'Offline', 's', 'Terkonfirmasi', '', ''),
(274, 2, 3, 'Rafif', '2023-06-08', '02:17:00', 'Online', 's', '', '', ''),
(275, 2, 7, 'Rafif', '2023-06-08', '02:17:00', 'Offline', 's', '', '', ''),
(276, 2, 10, 'Rafif', '2023-06-08', '02:17:00', 'Online', 'sasdfghjkl;sdfffffffffffffffffffffffffffffffffffffffffffffff', 'Dibatalkan', '', ''),
(277, 2, 10, 'Rafif', '2023-06-08', '02:17:00', 'Offline', 'sasdfghjkl;sdfffffffffffffffffffffffffffffffffffffffffffffff', 'Dibatalkan', '', 'nn'),
(278, 2, 7, 'Rafif', '2023-06-09', '02:31:00', 'Online', 'fd', 'Terkonfirmasi', '1687285733_6d086ee092bba9796f2d.png', ''),
(279, 2, 4, 'Rafif', '2023-06-16', '02:32:00', 'Online', 'x', 'Dibatalkan', '', 'nn'),
(280, 2, 3, 'Rafif', '2023-06-11', '02:32:00', 'Offline', 'n', 'Dibatalkan', '', 'jj'),
(281, 2, 5, 'Rafif', '2023-06-16', '07:51:00', 'Offline', 'x', 'Dibatalkan', '', 'xx'),
(282, 2, 4, 'Rafif', '2023-06-20', '11:16:00', 'Offline', 'vd', '', '', ''),
(283, 2, 4, 'Rafif', '2023-06-20', '11:16:00', 'Online', 'vd', '', '', ''),
(284, 2, 4, 'Rafif', '2023-06-20', '11:16:00', 'Offline', 'vd', '', '', ''),
(285, 2, 4, 'Rafif', '2023-06-20', '11:16:00', 'Online', 'vd', '', '', ''),
(286, 2, 4, 'Rafif', '2023-06-20', '11:16:00', 'Offline', 'vd', 'Dibatalkan', '', 'm;as\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `No_Telpon` text NOT NULL,
  `Pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `Nama`, `Email`, `No_Telpon`, `Pesan`) VALUES
(18, 'bg', '09737373', 'rickuzo999@gmail.com', 'vbn');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `Nama_layanan` varchar(255) NOT NULL,
  `Harga` int(20) NOT NULL,
  `Durasi` text NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `Nama_layanan`, `Harga`, `Durasi`, `Keterangan`) VALUES
(1, 'Pangkas ', 30000, '30 menit', 'Pangkas saja'),
(2, 'Pangkas + Cuci Kering', 40000, '50 menit', 'Pangkas dulu lalu cuci rambut'),
(3, 'Hair Mask', 145000, '60 menit', 'perawatan rambut terenak'),
(4, 'Creambath', 50000, '60 menit', 'Dijamin puas'),
(5, 'Ombre/Highlight', 120000, '65 menit', 'membuat anda terlihat cantik'),
(6, 'Coloring', 180000, '70 menit', 'Warnai rambut anda membuat slayy'),
(7, 'Smothing', 300000, '60 menit', 'Luruskan rambut'),
(8, 'Keratin Treatment', 500000, '120 menit', 'Mengembalikan lapisan keratin yang hilang pada rambut'),
(9, 'Ozone Treatment', 125000, '15 menit', 'Menguatkan akar rambut dan memberikan volume pada rambut'),
(10, 'Blow', 50000, '30 menit', 'Blow rambut membuat anda terlihat rapi');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `Nama_pelanggan` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `No_Handphone` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `Nama_pelanggan`, `Email`, `Alamat`, `No_Handphone`, `Password`) VALUES
(2, 'Rafif', 'Rafif@gmail.com', 'Jend.sudirman', '087524563526', '12345'),
(15, 'wahyu ds', 'wahyu@gmail', 'bon', '12345678', '12345hh'),
(17, 'ssjhsjs', 'yoi@yeahs', 'ss', '765432', '543214');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
