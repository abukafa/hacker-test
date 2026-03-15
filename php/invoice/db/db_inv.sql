-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 09:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` varchar(10) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `subject` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `for_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `issue_date`, `due_date`, `subject`, `from`, `for_id`) VALUES
('13016463', '2023-01-01', '2023-01-08', 'Iklan & Pemasaran', 'EBS - Client Acquisition', 13),
('43897307', '2023-01-03', '2023-01-10', 'Kebutuhan Kantor', 'EBS - Finance Business Partner', 4),
('48246319', '2023-01-01', '2023-01-08', 'Pelayanan', 'PT. Esensi Solusi Buana', 12),
('84556450', '2023-01-02', '2023-01-08', 'Tools', 'EBS - Software Engineer', 10);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `invoice_id` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `invoice_id`, `type`, `description`, `quantity`, `price`, `amount`) VALUES
(22, '84556450', 'Installation', 'Server & Jaringan', 1, 2500000, 2500000),
(23, '84556450', 'Service', 'Maintain PC', 10, 50000, 500000),
(33, '13016463', 'Partnership', 'Paid Promote Marketing', 2, 100000, 200000),
(34, '43897307', 'Expenses', 'Perlengkapan Kantor', 15, 25000, 375000),
(35, '43897307', 'Service', 'Maintain AC', 6, 75000, 450000),
(36, '48246319', 'Partnership', 'Layanan Tamu', 3, 250000, 750000),
(37, '48246319', 'Taxes', 'Pajak Usaha', 1, 7500000, 7500000),
(38, '13016463', 'Expenses', '5x1 Banner', 2, 100000, 200000),
(39, '13016463', 'Expenses', 'A4 Flayer', 200, 1000, 200000),
(40, '13016463', 'Expenses', 'Atribut', 15, 75000, 1125000);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `name`, `address`) VALUES
(3, 'PT Waluyo Tbk', 'Jr. Tambun No. 742, Denpasar 27560, Gorontalo'),
(4, 'PD Susanti Hidayanto Tbk', 'Ki. R.M. Said No. 92, Cilegon 31954, SumUt'),
(5, 'PT Zulaika Tbk', 'Jr. Sadang Serang No. 555, Administrasi Jakarta Barat 14600, Maluku'),
(6, 'Perum Irawan Pudjiastuti', 'Jln. Pahlawan No. 683, Tidore Kepulauan 78179, Bali'),
(7, 'UD Latupono Habibi', 'Psr. Bass No. 770, Bau-Bau 52743, SulTra'),
(8, 'Perum Wijaya Tbk', 'Ds. Warga No. 530, Serang 57552, Jambi'),
(9, 'PD Januar Firgantoro', 'Ds. Bass No. 296, Padang 93507, NTB'),
(10, 'PT Pratama Usamah', 'Ds. Baya Kali Bungur No. 706, Lubuklinggau 43968, Banten'),
(11, 'CV Nasyidah Tbk', 'Gg. Bagis Utama No. 406, Palembang 64387, Lampung'),
(12, 'CV Hutagalung', 'Jr. Barasak No. 991, Sorong 54114, SulBar'),
(13, 'Perum Pradana Zulkarnain (Persero) Tbk', 'Jln. Bawal No. 915, Kendari 18428, Maluku'),
(14, 'CV Purnawati Zulaika', 'Kpg. Abdul No. 186, Medan 77145, DKI'),
(15, 'CV Oktaviani Rahmawati Tbk', 'Ds. Sutami No. 198, Bengkulu 36776, DKI'),
(16, 'PD Pudjiastuti (Persero) Tbk', 'Gg. Suryo No. 201, Ternate 18486, JaBar'),
(17, 'CV Simanjuntak Rahmawati', 'Psr. Dr. Junjunan No. 694, Malang 71567, Gorontalo'),
(18, 'CV Saragih', 'Psr. Bak Air No. 952, Solok 20678, Jambi'),
(19, 'Perum Purnawati', 'Dk. Jambu No. 632, Subulussalam 51589, DIY'),
(20, 'PD Nugroho', 'Jln. Rajawali Timur No. 85, Padangsidempuan 63751, SulBar'),
(21, 'PT Prasasta (Persero) Tbk', 'Ki. Krakatau No. 530, Tasikmalaya 49060, Lampung'),
(22, 'Perum Hutasoit Fujiati', 'Jln. Cihampelas No. 605, Yogyakarta 26207, DKI'),
(23, 'Perum Tampubolon (Persero) Tbk', 'Dk. Bakhita No. 545, Sukabumi 68281, SulTra'),
(24, 'PT Prasetyo (Persero) Tbk', 'Jr. Babah No. 650, Dumai 17141, Riau'),
(25, 'Perum Wijaya', 'Kpg. BKR No. 599, Banjarmasin 13903, MalUt'),
(26, 'Perum Zulkarnain Mardhiyah (Persero) Tbk', 'Kpg. Babadan No. 401, Bontang 23949, JaTim'),
(27, 'Perum Pudjiastuti Januar (Persero) Tbk', 'Jr. Bazuka Raya No. 294, Sukabumi 59122, SumUt'),
(28, 'PD Susanti', 'Jln. Laksamana No. 584, Palangka Raya 72720, DKI'),
(29, 'PD Palastri Susanti', 'Gg. Bak Air No. 547, Bontang 62057, Lampung'),
(30, 'PD Siregar Mandasari (Persero) Tbk', 'Ds. Bagas Pati No. 766, Administrasi Jakarta Timur 25226, Gorontalo'),
(31, 'CV Uyainah', 'Ki. Suryo No. 523, Bima 80838, Papua'),
(32, 'PD Uyainah', 'Jr. Ters. Jakarta No. 969, Probolinggo 33515, KalBar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `for_id` (`for_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
