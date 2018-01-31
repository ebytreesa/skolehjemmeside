-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 10. 08 2016 kl. 10:13:28
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
-- Struktur-dump for tabellen `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `description` text NOT NULL,
  `relate` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `grade`
--

INSERT INTO `grade` (`id`, `grade`, `description`, `relate`) VALUES
(1, -3, 'Den ringe prÃ¦station', 'F'),
(2, 0, 'Den utilstrÃ¦kkelige prÃ¦station', 'Fx'),
(3, 2, 'Den tilstrÃ¦kkelige prÃ¦station', 'E'),
(4, 4, 'Den jÃ¦vne prÃ¦station', 'D'),
(5, 7, 'Den gode prÃ¦station', 'C'),
(6, 10, 'Den fortrinlige prÃ¦station', 'B'),
(7, 12, 'Den fremragende prÃ¦station', 'A');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
