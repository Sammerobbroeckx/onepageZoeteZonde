-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 apr 2016 om 02:29
-- Serverversie: 10.1.10-MariaDB
-- PHP-versie: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoetezonde`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `broodjes`
--

CREATE TABLE `broodjes` (
  `IDbroodjes` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `broodjes`
--

INSERT INTO `broodjes` (`IDbroodjes`, `omschrijving`, `prijs`) VALUES
(1, 'club ham kaas', 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dessert`
--

CREATE TABLE `dessert` (
  `IDdessert` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `dessert`
--

INSERT INTO `dessert` (`IDdessert`, `omschrijving`, `prijs`) VALUES
(1, 'chocolade pudding', 3),
(3, 'aardbei ijs', 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kleinehap`
--

CREATE TABLE `kleinehap` (
  `IDkleinehap` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `kleinehap`
--

INSERT INTO `kleinehap` (`IDkleinehap`, `omschrijving`, `prijs`) VALUES
(2, 'croque monsieur', 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `makelij`
--

CREATE TABLE `makelij` (
  `IDmakelij` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `makelij`
--

INSERT INTO `makelij` (`IDmakelij`, `omschrijving`, `prijs`) VALUES
(1, 'stoofvlees met fritten', 15);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ontbijt`
--

CREATE TABLE `ontbijt` (
  `IDontbijt` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `ontbijt`
--

INSERT INTO `ontbijt` (`IDontbijt`, `omschrijving`, `prijs`) VALUES
(6, 'koffie koeken', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `salades`
--

CREATE TABLE `salades` (
  `IDsalades` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `salades`
--

INSERT INTO `salades` (`IDsalades`, `omschrijving`, `prijs`) VALUES
(1, 'ijsberg salade', 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `soepen`
--

CREATE TABLE `soepen` (
  `IDsoepen` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `soepen`
--

INSERT INTO `soepen` (`IDsoepen`, `omschrijving`, `prijs`) VALUES
(1, 'tomaten soep', 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `IDuser` int(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `paswoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`IDuser`, `mail`, `paswoord`) VALUES
(1, 'mail@mail.com', '3dd28c5a23f780659d83dd99981e2dcb82bd4c4bdc8d97a7da50ae84c7a7229a6dc0ae8ae4748640a4cc07ccc2d55dbdc023a99b3ef72bc6ce49e30b84253dae');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `broodjes`
--
ALTER TABLE `broodjes`
  ADD PRIMARY KEY (`IDbroodjes`);

--
-- Indexen voor tabel `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`IDdessert`);

--
-- Indexen voor tabel `kleinehap`
--
ALTER TABLE `kleinehap`
  ADD PRIMARY KEY (`IDkleinehap`);

--
-- Indexen voor tabel `makelij`
--
ALTER TABLE `makelij`
  ADD PRIMARY KEY (`IDmakelij`);

--
-- Indexen voor tabel `ontbijt`
--
ALTER TABLE `ontbijt`
  ADD PRIMARY KEY (`IDontbijt`);

--
-- Indexen voor tabel `salades`
--
ALTER TABLE `salades`
  ADD PRIMARY KEY (`IDsalades`);

--
-- Indexen voor tabel `soepen`
--
ALTER TABLE `soepen`
  ADD PRIMARY KEY (`IDsoepen`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDuser`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `broodjes`
--
ALTER TABLE `broodjes`
  MODIFY `IDbroodjes` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `dessert`
--
ALTER TABLE `dessert`
  MODIFY `IDdessert` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `kleinehap`
--
ALTER TABLE `kleinehap`
  MODIFY `IDkleinehap` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `makelij`
--
ALTER TABLE `makelij`
  MODIFY `IDmakelij` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `ontbijt`
--
ALTER TABLE `ontbijt`
  MODIFY `IDontbijt` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `salades`
--
ALTER TABLE `salades`
  MODIFY `IDsalades` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `soepen`
--
ALTER TABLE `soepen`
  MODIFY `IDsoepen` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `IDuser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
