-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07. Avg 2019. u 12:08
-- Verzija servera: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Struktura tabele `knjiga`
--

CREATE TABLE `knjiga` (
  `id` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `zanr` varchar(20) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `izdavac` varchar(30) NOT NULL,
  `zanr_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Prikaz podataka tabele `knjiga`
--

INSERT INTO `knjiga` (`id`, `naziv`, `zanr`, `autor`, `izdavac`, `zanr_id`) VALUES
(14, 'Milenijum', 'triler', 'Stig Lason', 'Laguna', 1),
(17, 'Odani', 'triler', 'Harlan Koben', 'Laguna', 1),
(18, 'Poruka u boci', 'triler', 'Jusi Adler Olsen', 'Vulkan', 1),
(19, 'Ukus osvete', 'triler', 'Jusi Adler Olsen', 'Vulkan', 1),
(20, 'Selfi', 'triler', 'Jusi Adler Olsen', 'Vulkan', 1),
(21, 'Uhvaceni', 'triler', 'Harlan Koben', 'Laguna', 1);

-- --------------------------------------------------------

--
-- Struktura tabele `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `telefon` int(11) NOT NULL,
  `adresa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Prikaz podataka tabele `member`
--

INSERT INTO `member` (`id`, `ime`, `prezime`, `email`, `password`, `username`, `telefon`, `adresa`) VALUES
(1, 'Ljiljana', 'Erakovic', 'ljiljana.jelovic@gmail.com', 'skriveni', 'ljiki', 60, 'Beogradska 1'),
(2, 'Aleksa', 'Erakovic', 'aleksa.house@gmail.com', 'mojljiki', 'Aki', 61, 'Beogradska 1'),
(3, '', '', '', '', '', 0, ''),
(4, 'Natasa', 'Davidovic', 'naca.nata@gmail.com', 'naki', 'naca', 61222333, 'Beogradska 4');

-- --------------------------------------------------------

--
-- Struktura tabele `zanrovi`
--

CREATE TABLE `zanrovi` (
  `id` int(11) NOT NULL,
  `zanr` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Prikaz podataka tabele `zanrovi`
--

INSERT INTO `zanrovi` (`id`, `zanr`) VALUES
(1, 'triler'),
(2, 'istorijski roman'),
(3, 'ljubavni roman'),
(4, 'memoari'),
(5, 'Naucna fantastika'),
(7, 'Naucna fantastika'),
(8, 'Epska fantastika'),
(9, 'Horor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `knjiga`
--
ALTER TABLE `knjiga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `knjiga_ibfk_1` (`zanr_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zanrovi`
--
ALTER TABLE `zanrovi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `knjiga`
--
ALTER TABLE `knjiga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zanrovi`
--
ALTER TABLE `zanrovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograničenja za izvezene tabele
--

--
-- Ograničenja za tabele `knjiga`
--
ALTER TABLE `knjiga`
  ADD CONSTRAINT `knjiga_ibfk_1` FOREIGN KEY (`zanr_id`) REFERENCES `zanrovi` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
