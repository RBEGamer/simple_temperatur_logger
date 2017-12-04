-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 04. Dez 2017 um 15:03
-- Server Version: 5.5.57-0+deb8u1
-- PHP-Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `templogger`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(11) NOT NULL,
  `temperature` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visible` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `data`
--

INSERT INTO `data` (`id`, `temperature`, `time`, `visible`) VALUES
(49, 19, '2017-12-04 14:50:30', 1),
(50, 19.1, '2017-12-04 14:51:02', 1),
(51, 19.1, '2017-12-04 14:51:35', 1),
(52, 19.1, '2017-12-04 14:52:07', 1),
(53, 19.2, '2017-12-04 14:52:42', 1),
(54, 19.2, '2017-12-04 14:53:14', 1),
(55, 19.2, '2017-12-04 14:53:46', 1),
(56, 19.3, '2017-12-04 14:54:19', 1),
(57, 19.3, '2017-12-04 14:54:51', 0),
(58, 19.3, '2017-12-04 14:55:23', 1),
(59, 19.3, '2017-12-04 14:55:56', 1),
(60, 19.3, '2017-12-04 14:56:28', 1),
(61, 19.3, '2017-12-04 14:57:00', 0),
(62, 19.3, '2017-12-04 14:57:33', 1),
(63, 19.3, '2017-12-04 14:58:05', 1),
(64, 19.3, '2017-12-04 14:58:37', 1),
(65, 19.3, '2017-12-04 14:59:10', 1),
(66, 19.3, '2017-12-04 14:59:42', 1),
(67, 19.3, '2017-12-04 15:00:14', 1),
(68, 19.2, '2017-12-04 15:00:47', 1),
(69, 19.2, '2017-12-04 15:01:19', 1),
(70, 19.3, '2017-12-04 15:01:52', 1),
(71, 19.5, '2017-12-04 15:02:24', 1),
(72, 19.7, '2017-12-04 15:02:56', 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `data`
--
ALTER TABLE `data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
