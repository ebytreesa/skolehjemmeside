-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 10. 08 2016 kl. 10:13:35
-- Serverversion: 10.1.13-MariaDB
-- PHP-version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `examId` int(11) NOT NULL,
  `gradeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `results`
--

INSERT INTO `results` (`id`, `studentId`, `examId`, `gradeId`) VALUES
(1, 1, 1, 7),
(2, 1, 2, 7),
(3, 1, 3, 6),
(4, 2, 1, 4),
(6, 2, 2, 1),
(7, 2, 3, 2),
(8, 3, 3, 5),
(9, 3, 2, 7),
(10, 1, 1, 1),
(11, 5, 5, 7),
(12, 4, 5, 6),
(13, 4, 2, 6);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
