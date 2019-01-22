-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jan 2019 um 17:18
-- Server-Version: 10.1.37-MariaDB
-- PHP-Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `test`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(0, 'admin', '123');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `id` int(11) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `w1` varchar(32) DEFAULT NULL,
  `w2` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`id`, `user`, `pass`, `w1`, `w2`) VALUES
(91, 'mala', 'fsefsef', NULL, NULL),
(92, 'peter', 'ydfgarg', NULL, NULL),
(93, 'maifes', 'garegadrf', NULL, NULL),
(94, '123', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `berufe`
--

CREATE TABLE `berufe` (
  `id` int(11) NOT NULL,
  `head` varchar(10) NOT NULL,
  `besch` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `berufe`
--

INSERT INTO `berufe` (`id`, `head`, `besch`) VALUES
(1, '', ''),
(2, '', ''),
(3, 'awdawdwaaw', 'dawdawd'),
(4, 'adwwadawd', 'awdawdawdw'),
(5, '123', '123'),
(6, 'wwwwwwwwww', 'dawwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `excel`
--

CREATE TABLE `excel` (
  `excel_id` int(11) NOT NULL,
  `excel_name` varchar(250) NOT NULL,
  `excel_email` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `excel`
--

INSERT INTO `excel` (`excel_id`, `excel_name`, `excel_email`) VALUES
(130, '24;1', ''),
(129, '23;1', ''),
(128, '22;1', ''),
(127, '21;1', ''),
(126, '20;1', ''),
(125, '19;1', ''),
(124, '18;1', ''),
(123, '17;1', ''),
(122, '16;1', ''),
(121, '15;1', ''),
(120, '14;1', ''),
(119, '13;1', ''),
(118, '12;1', ''),
(117, '11;1', ''),
(116, '10;1', ''),
(115, '9;1', ''),
(114, '8;1', ''),
(113, '7;1', ''),
(112, '6;1', ''),
(111, '5;1', ''),
(110, '4;1', ''),
(109, '3;1', ''),
(108, '2;1', ''),
(107, '1;1', ''),
(106, '0;1', ''),
(105, 'id;name', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indizes für die Tabelle `berufe`
--
ALTER TABLE `berufe`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `excel`
--
ALTER TABLE `excel`
  ADD PRIMARY KEY (`excel_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT für Tabelle `berufe`
--
ALTER TABLE `berufe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `excel`
--
ALTER TABLE `excel`
  MODIFY `excel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
