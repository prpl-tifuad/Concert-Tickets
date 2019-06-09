-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2019 at 07:07 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `name`, `hp`) VALUES
('', '', '', ''),
('123455551', 'hajime@gmail.com', 'Hajimemashita', '098976283741'),
('123456', 'nana@gmail.com', 'Nanaku Nanami', '089768765453'),
('1234567890', 'caserimia@gmail.com', 'Caseri Mia', '089697934654'),
('1324535', 'crimea@gmail.com', 'Caseri Mia', '08979745327'),
('347105', 'kiara@gmail.com', 'Kiara Miami', '097876384651');

-- --------------------------------------------------------

--
-- Table structure for table `kategoritiket`
--

CREATE TABLE `kategoritiket` (
  `kodekategori` varchar(10) NOT NULL,
  `namakategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategoritiket`
--

INSERT INTO `kategoritiket` (`kodekategori`, `namakategori`) VALUES
('SEAT', 'Seating'),
('STN', 'Standing');

-- --------------------------------------------------------

--
-- Table structure for table `konser`
--

CREATE TABLE `konser` (
  `kodekonser` varchar(10) NOT NULL,
  `namakonser` varchar(100) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `waktu` int(11) NOT NULL,
  `poster` varchar(50) NOT NULL,
  `namatempat` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konser`
--

INSERT INTO `konser` (`kodekonser`, `namakonser`, `tanggal`, `waktu`, `poster`, `namatempat`, `deskripsi`) VALUES
('exo1', 'THE ELYXION', 1511478000, 1560009600, 'Aposter/konserexo.jpg', 'KOREA', 'The ElyXiOn adalah tur keempat boy band Korea Selatan-Cina, EXO. Tur ini secara resmi diumumkan pada 19 Oktober 2017 dan dimulai di Gocheok Sky Dome Seoul pada 24 November 2017'),
('miku', 'HATSUNE MIKU : MAGICAL MIRAI 2019', 1566943200, 1559975400, 'Aposter/miku2.jpg', 'JAPAN', 'Konser Hatsune Miku: Magical Mirai 2019 akan digelar pada Agustus~September 2019 di Osaka & Tokyo, Japan'),
('miku2', 'HATSUNE MIKU LIVE IN LOS ANGELES', 1573340400, 1560004200, 'Aposter/mikula.jpg', 'LOS ANGELES', 'Konser Live HATSUNE MIKU diadakan di Nokia Theatre Los Angeles, dan untuk bagian pameran Miku dan teman-temannya mengadakan pesta Halloween di Los Angeles Center Studios. Di pameran, Anda dapat menikmati karya seni yang ditampilkan, area bertema Halloween khusus, dan toko di mana Anda dapat membeli barang-barang eksklusif, termasuk barang-barang khusus Halloween!'),
('shvr', 'SHVR GROUND FESTIFAL 2019', 1567720800, 1559998800, 'Aposter/SHVR.jpg', 'INDONESIA', 'Pada kesempatan tahun ini #SGF2019 akan diadakan di Indonesia Convention Exhibition - ICE, BSD pada hari Jumat & Sabtu tanggal 6 & 7 September 2019.');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `kodebeli` int(11) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `id` varchar(20) NOT NULL,
  `kodetiket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`kodebeli`, `jumlah`, `id`, `kodetiket`) VALUES
(1, 2, '1234567890', 'mikumm2'),
(16, 2, '123456', 'exoly1'),
(20, 2, '123455551', 'mikula1'),
(21, 1, '347105', 'sgf1'),
(22, 1, '347105', 'sgf1'),
(23, 1, '347105', 'sgf1'),
(24, 1, '347105', 'sgf1'),
(25, 1, '347105', 'sgf1'),
(26, 1, '347105', 'sgf1'),
(27, 1, '347105', 'sgf1'),
(28, 1, '347105', 'sgf1'),
(29, 1, '347105', 'sgf1'),
(30, 1, '347105', 'sgf1'),
(31, 1, '347105', 'sgf1'),
(32, 1, '347105', 'sgf1');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `kodetiket` varchar(20) NOT NULL,
  `namatiket` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL,
  `kodekategori` varchar(10) NOT NULL,
  `kodekonser` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`kodetiket`, `namatiket`, `harga`, `kodekategori`, `kodekonser`) VALUES
('exoly1', 'PINK', 2250000, 'STN', 'exo1'),
('exoly2', 'BLUE', 2150000, 'STN', 'exo1'),
('exoly3', 'YELLOW', 1750000, 'STN', 'exo1'),
('exoly4', 'GREEN', 1250000, 'STN', 'exo1'),
('exoly5', 'PURPLE', 850000, 'STN', 'exo1'),
('mikula1', 'DIAMOND', 2150000, 'SEAT', 'miku2'),
('mikula2', 'EMERALD', 2000000, 'SEAT', 'miku2'),
('mikula3', 'SAPPHIRE', 1000000, 'STN', 'miku2'),
('mikula4', 'RUBY', 850000, 'STN', 'miku2'),
('mikumm1', 'PLATINUM', 1390000, 'SEAT', 'miku'),
('mikumm2', 'GOLD', 1000000, 'SEAT', 'miku'),
('mikumm3', 'SILVER', 700000, 'STN', 'miku'),
('mikumm4', 'BRONZE', 390000, 'STN', 'miku'),
('sgf1', 'VIP', 1300000, 'STN', 'shvr'),
('sgf2', 'ON THE DAY', 1000000, 'STN', 'shvr'),
('sgf3', 'GA', 700000, 'STN', 'shvr');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `namatempat` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`namatempat`, `img`) VALUES
('INDONESIA', 'Avenue/jakarta.jpg'),
('JAPAN', 'Avenue/japan.jpg'),
('KOREA', 'Avenue/korea.jpg'),
('LOS ANGELES', 'Avenue/LA.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoritiket`
--
ALTER TABLE `kategoritiket`
  ADD PRIMARY KEY (`kodekategori`);

--
-- Indexes for table `konser`
--
ALTER TABLE `konser`
  ADD PRIMARY KEY (`kodekonser`),
  ADD KEY `namatempat` (`namatempat`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`kodebeli`),
  ADD KEY `id` (`id`,`kodetiket`),
  ADD KEY `kodetiket` (`kodetiket`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`kodetiket`),
  ADD KEY `kodekategori` (`kodekategori`,`kodekonser`),
  ADD KEY `kodekonser` (`kodekonser`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`namatempat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `kodebeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konser`
--
ALTER TABLE `konser`
  ADD CONSTRAINT `konser_ibfk_1` FOREIGN KEY (`namatempat`) REFERENCES `venue` (`namatempat`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`kodetiket`) REFERENCES `tiket` (`kodetiket`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`kodekonser`) REFERENCES `konser` (`kodekonser`),
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`kodekategori`) REFERENCES `kategoritiket` (`kodekategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
