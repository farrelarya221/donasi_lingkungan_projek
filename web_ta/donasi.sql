-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2025 at 10:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2025 at 07:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `password`) VALUES
('admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `jumlah_donasi` int(11) NOT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id`, `nama_depan`, `nama_belakang`, `email`, `telepon`, `jumlah_donasi`, `pesan`) VALUES
(4, 'kasino', 'dhono', 'dhono@gmail.com', '082136632702', 850000, 'done bosku\r\n'),
(6, 'kapap', 'putat', 'gpthomes97@gmail.com', '082136632734', 850000, 'alhamdulillah'),
(7, 'santosa gans', 'kolo', 'kolokante@gmail.com', '0893322444', 20000, 'yes sir\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `password`) VALUES
('Shiin12', 'ShiinDesu12!'),
('farrel10', 'farrel123'),
('dhini', 'dhini123'),
('mbakrahayu', 'rahayu12'),
('farrelarya', 'farrel123'),
('farrel10', 'farrel123'),
('jaka', 'jaka123'),
('aa@gmail.com', 'aa123'),
('aa@gmail.com', 'gaming123'),
('gpthomes97@gmail.com', 'gol123'),
('gpthomes97@gmail.com', 'gol123'),
('124240196@student.upnyk.ac.id', 'bambang123'),
('aa121@gmail.com', 'tata34'),
('kaya@gmail.com', 'kaya123'),
('shiin', 'awwsadf');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(11, 'Reboisasi Hutan', 'Program penanaman kembali hutan-hutan yang telah rusak untuk menjaga keanekaragaman hayati. ', 'reboisasi.jpg'),
(13, 'Edukasi Lingkungan', 'Meningkatkan kesadaran masyarakat tentang pentingnya menjaga lingkungan hidup.\r\n', 'edukasi lingkungan.jpg'),
(15, 'Konservasi Pesisir', 'Perlindungan terhadap ekosistem pesisir termasuk mangrove, terumbu karang, dan padang lamun.\r\n\r\n', 'pesisir.jpg'),
(16, 'Pemulihan Habitat', 'Dengan memulihkan habitat, kita memberi ruang bagi kehidupan untuk tumbuh kembali.', 'habitat.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `password`) VALUES
('admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `jumlah_donasi` int(11) NOT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id`, `nama_depan`, `nama_belakang`, `email`, `telepon`, `jumlah_donasi`, `pesan`) VALUES
(2, 'farrel10', 'dhini', 'dhono@gmail.com', '082136632702', 100000, 'jos'),
(3, 'rahayu', 'dhini', 'dhono@gmail.com', '082136632702', 80000, 'alhamdulillah');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `password`) VALUES
('admin1', 'admin01'),
('Shiin12', 'ShiinDesu12!'),
('farrel10', 'farrel123'),
('dhini', 'dhini123'),
('rahayu', 'rahayu123'),
('mbakrahayu', 'rahayu12'),
('farrelarya', 'farrel123'),
('rahayu', 'rahayu123'),
('farrel10', 'farrel123'),
('jaka', 'jaka123'),
('aa@gmail.com', 'aa123'),
('aa@gmail.com', 'gaming123'),
('gpthomes97@gmail.com', 'gol123'),
('gpthomes97@gmail.com', 'gol123'),
('124240196@student.upnyk.ac.id', 'bambang123'),
('aa121@gmail.com', 'tata34');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(11, 'Reboisasi Hutan', 'Program penanaman kembali hutan-hutan yang telah rusak untuk menjaga keanekaragaman hayati. \r\n', 'reboisasi.jpg'),
(13, 'Edukasi Lingkungan', 'Meningkatkan kesadaran masyarakat tentang pentingnya menjaga lingkungan hidup.', 'edukasi lingkungan.jpg'),
(15, 'Konservasi Pesisir', 'Perlindungan terhadap ekosistem pesisir termasuk mangrove, terumbu karang, dan padang lamun.\r\n\r\n', 'pesisir.jpg'),
(16, 'Pemulihan Habitat', 'Dengan memulihkan habitat, kita memberi ruang bagi kehidupan untuk tumbuh kembali.', 'habitat.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
