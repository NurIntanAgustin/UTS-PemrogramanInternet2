-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 12:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblabsen`
--

CREATE TABLE `tblabsen` (
  `idabsen` int(5) NOT NULL,
  `tglabsen` date NOT NULL,
  `masuk` time NOT NULL,
  `keluar` time NOT NULL,
  `kodedosen` varchar(5) NOT NULL,
  `sesi` char(1) NOT NULL,
  `kelassesi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblabsen`
--

INSERT INTO `tblabsen` (`idabsen`, `tglabsen`, `masuk`, `keluar`, `kodedosen`, `sesi`, `kelassesi`) VALUES
(3, '2021-05-12', '09:45:00', '11:30:00', 'D03', '1', 'Pagi'),
(4, '2021-05-13', '09:50:00', '11:35:00', 'D01', '1', 'Pagi'),
(5, '2021-05-14', '07:35:00', '09:30:00', 'D07', '1', 'Pagi'),
(6, '2021-05-14', '09:35:00', '11:35:00', 'D01', '1', 'Pagi'),
(7, '2021-05-17', '09:35:00', '11:30:00', 'D05', '1', 'Pagi');

-- --------------------------------------------------------

--
-- Table structure for table `tbldosen`
--

CREATE TABLE `tbldosen` (
  `kodedosen` varchar(5) NOT NULL,
  `nids` varchar(12) NOT NULL,
  `nipy` varchar(12) NOT NULL,
  `namadosen` varchar(30) NOT NULL,
  `kodeprodi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldosen`
--

INSERT INTO `tbldosen` (`kodedosen`, `nids`, `nipy`, `namadosen`, `kodeprodi`) VALUES
('D01', '0421', '0241', 'Lena Magdalena, M.MSI., S.kom.', 'A'),
('D02', '0452', '0542', 'Muhammad Hatta, M.Kom., S.Kom.', 'A'),
('D03', '0213', '1203', 'Reza Ilyasa M.Kom.', 'A'),
('D05', '0415', '0154', 'Marsani Asfi, M.Si., S. Si, M.', 'A'),
('D07', '0417', '0147', 'Rifqi Fahrudin, M.Kom, S,Kom,M', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbljadwal`
--

CREATE TABLE `tbljadwal` (
  `id` int(11) NOT NULL,
  `jadwalid` int(4) NOT NULL,
  `kodedosen` varchar(5) NOT NULL,
  `hari` varchar(8) NOT NULL,
  `thnakademik` varchar(10) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `kodemk` varchar(15) NOT NULL,
  `sesi` char(1) NOT NULL,
  `jammasuk` time NOT NULL,
  `jamkeluar` time NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `ruang` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `kelassesi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbljadwal`
--

INSERT INTO `tbljadwal` (`id`, `jadwalid`, `kodedosen`, `hari`, `thnakademik`, `semester`, `kodemk`, `sesi`, `jammasuk`, `jamkeluar`, `kelas`, `ruang`, `status`, `kelassesi`) VALUES
(1, 101, 'D03', 'Rabu', '2021', '4', 'SI01', '1', '09:30:00', '11:30:00', 'SIB', '102', 1, 'Pagi'),
(2, 102, 'D05', 'Senin', '2021', '4', 'SI02', '2', '09:30:00', '11:30:00', 'SIB', 'Lab 1', 1, 'Pagi'),
(3, 103, 'D07', 'Jumat', '2021', '4', 'SI03', '1', '07:30:00', '09:30:00', 'SIB', 'Lab 1', 1, 'Pagi'),
(4, 104, 'D01', 'Kamis', '2021', '4', 'SI04', '1', '09:30:00', '11:30:00', 'SIB', 'Lab 3', 1, 'Pagi'),
(5, 105, 'D01', 'Jumat', '2021', '4', 'SI05', '1', '09:30:00', '11:30:00', 'SIB', 'Lab 3', 1, 'Pagi');

-- --------------------------------------------------------

--
-- Table structure for table `tblmkuliah`
--

CREATE TABLE `tblmkuliah` (
  `kodemk` varchar(15) NOT NULL,
  `namamk` varchar(60) NOT NULL,
  `sks` int(2) NOT NULL,
  `smt` int(2) NOT NULL,
  `kodeprodi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmkuliah`
--

INSERT INTO `tblmkuliah` (`kodemk`, `namamk`, `sks`, `smt`, `kodeprodi`) VALUES
('SI01', 'Pemrograman Internet 2', 3, 4, 'A'),
('SI02', 'Bisnis Intelegensia', 2, 4, 'A'),
('SI03', 'UI & UX Design', 3, 4, 'A'),
('SI04', 'Rekayasa Perangkat Lunak', 3, 4, 'A'),
('SI05', 'Analisa Berorientasi Objek', 3, 4, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tblprodi`
--

CREATE TABLE `tblprodi` (
  `kodeprodi` varchar(1) NOT NULL,
  `namaprodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprodi`
--

INSERT INTO `tblprodi` (`kodeprodi`, `namaprodi`) VALUES
('A', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblabsen`
--
ALTER TABLE `tblabsen`
  ADD PRIMARY KEY (`idabsen`),
  ADD KEY `tblabsen_ibfk_1` (`kodedosen`);

--
-- Indexes for table `tbldosen`
--
ALTER TABLE `tbldosen`
  ADD PRIMARY KEY (`kodedosen`);

--
-- Indexes for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodedosen` (`kodedosen`),
  ADD KEY `kodemk` (`kodemk`);

--
-- Indexes for table `tblmkuliah`
--
ALTER TABLE `tblmkuliah`
  ADD PRIMARY KEY (`kodemk`),
  ADD KEY `kodeprodi` (`kodeprodi`);

--
-- Indexes for table `tblprodi`
--
ALTER TABLE `tblprodi`
  ADD PRIMARY KEY (`kodeprodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblabsen`
--
ALTER TABLE `tblabsen`
  MODIFY `idabsen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11405;

--
-- AUTO_INCREMENT for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblabsen`
--
ALTER TABLE `tblabsen`
  ADD CONSTRAINT `tblabsen_ibfk_1` FOREIGN KEY (`kodedosen`) REFERENCES `tbldosen` (`kodedosen`) ON DELETE CASCADE;

--
-- Constraints for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD CONSTRAINT `tbljadwal_ibfk_1` FOREIGN KEY (`kodedosen`) REFERENCES `tbldosen` (`kodedosen`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbljadwal_ibfk_2` FOREIGN KEY (`kodemk`) REFERENCES `tblmkuliah` (`kodemk`) ON DELETE CASCADE;

--
-- Constraints for table `tblmkuliah`
--
ALTER TABLE `tblmkuliah`
  ADD CONSTRAINT `tblmkuliah_ibfk_1` FOREIGN KEY (`kodeprodi`) REFERENCES `tblprodi` (`kodeprodi`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
