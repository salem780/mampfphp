-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Dez 2019 um 21:41
-- Server-Version: 10.4.8-MariaDB
-- PHP-Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mampf`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE `login` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `login`
--

INSERT INTO `login` (`name`, `email`, `password`) VALUES
('leonie', 'lr@web.de', '1234'),
('salina', 'salina@moser.de', 'abcd');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `lunch`
--

CREATE TABLE `lunch` (
  `restaurant` varchar(255) NOT NULL,
  `dish` varchar(500) NOT NULL,
  `veg` varchar(4) NOT NULL,
  `price` decimal(4,2) UNSIGNED NOT NULL,
  `dishday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `lunch`
--

INSERT INTO `lunch` (`restaurant`, `dish`, `veg`, `price`, `dishday`) VALUES
('Humpis', 'Allgäuer Käsespätzle mit Zwiebelschmelze und Beilagensalat\r\n', 'ja', '8.00', '2019-12-11'),
('Humpis', 'Tafelspitz vom Kalb mit Meerrettich-Senf-Soße, Wurzelgemüse und Petersilienkartoffeln', 'nein', '8.00', '2019-12-12'),
('Humpis', 'Wochensalat: Gemischter Salat mit karamelisiertem Ziegenköse, Birne, gerösteten Nüssen und Kartoffeldressing', 'ja', '7.50', '2019-12-10'),
('Humpis', 'Wochensalat: Gemischter Salat mit karamelisiertem Ziegenköse, Birne, gerösteten Nüssen und Kartoffeldressing', 'ja', '7.50', '2019-12-11'),
('Humpis', 'Wochensalat: Gemischter Salat mit karamelisiertem Ziegenköse, Birne, gerösteten Nüssen und Kartoffeldressing', 'ja', '7.50', '2019-12-12'),
('Humpis', 'Wochensalat: Gemischter Salat mit karamelisiertem Ziegenköse, Birne, gerösteten Nüssen und Kartoffeldressing', 'ja', '7.50', '2019-12-13'),
('Humpis', 'Süsskartoffelgnochi mit Zitronenbutter und Paprikagemüse', 'ja', '7.00', '2019-12-12'),
('Humpis', 'Steinpilzmaultäschle mit Schnittlauchrahm, Gemüsestreifen und Grana Padano', 'ja', '6.50', '2019-12-13'),
('Humpis', 'Putensteak vom Grill mit Kräuerbutter und mediterranem Gemüse', 'nein', '8.50', '2019-12-13'),
('Humpis', 'Saure Linsen mit Spätzle und Saitenwurst', 'nein', '7.00', '2019-12-11'),
('Humpis', 'Schupfnudelpfanne mit Streifen von der Hähnchenbrust, Rahmoße und mit dreierlei Käse überbacken', 'nein', '7.80', '2019-12-10'),
('Humpis', 'Dinnete mit Grillgemüse', 'ja', '6.50', '2019-12-10'),
('Mensa DHBW Ravensburg', 'Tomatenstrudel mit Gorgonzolasauce', 'ja', '1.90', '2019-12-10'),
('Mensa DHBW Ravensburg', 'Seelachsfilet mit Wildreis, Kräuterrahmsauce und Gurkensalat', 'nein', '3.40', '2019-12-10'),
('Mensa DHBW Ravensburg', 'Currywurst mit Pommes frites und Salat aus Karotten, Zuccini & Rettich', 'nein', '3.40', '2019-12-11'),
('Mensa DHBW Ravensburg', 'Gemüsebagel mit Avocadodip', 'ja', '1.90', '2019-12-11'),
('Mensa DHBW Ravensburg', 'Mexikanische Reispfanne mit roten Bohnen, Mais und Paprika und Weißkrautsalat', 'ja', '3.40', '2019-12-12'),
('Mensa DHBW Ravensburg', 'Hackbällchen mit Champignonrahmsauce und Kartoffelpüree', 'nein', '2.65', '2019-12-12'),
('Mensa DHBW Ravensburg', 'Gebratene Gnocchi mit Käse-Salbeisauce und Krautsalat mit Endivie & Radieschen', 'ja', '3.40', '2019-12-13'),
('Mensa DHBW Ravensburg', 'Schweinegeschnetzeltes \"Züricher Art\" mit Spätzle und Bohnen', 'nein', '3.40', '2019-12-13'),
('Walfisch', 'Risotto Bolognese mit Hackfleisch & Sahnesauce', 'nein', '6.10', '2019-12-10'),
('Walfisch', 'Pizza Margherita', 'ja', '5.90', '2019-12-10'),
('Walfisch', 'Penne Tarantino mit Tintenfisch & frischen Tomaten ', 'nein', '6.10', '2019-12-11'),
('Walfisch', 'Pizza Champignon', 'ja', '5.90', '2019-12-11'),
('Walfisch', 'Spaghetti del Pastore mit Schafkäse in Tomatensauce', 'ja', '6.10', '2019-12-12'),
('Walfisch', 'Pizza Salami', 'nein', '5.90', '2019-12-12'),
('Walfisch', 'Insalata del Marinaio: Gemischter Salat mit Gebratenem Rotbarsch', 'nein', '7.20', '2019-12-13'),
('Walfisch', 'Pizza Schinken', 'nein', '5.90', '2019-12-13'),
('Slainte Irish Pub', 'Spare Ribs mit einem BBQ-Dip, gereicht mit Steak-House-Pommes und einer Salatgarnitur ', 'nein', '8.40', '2019-12-10'),
('Slainte Irish Pub', 'Chicken-Quesadilla', 'nein', '6.50', '2019-12-11'),
('Slainte Irish Pub', 'Burge Classic mit Curly Fries', 'nein', '7.10', '2019-12-12'),
('Slainte Irish Pub', 'Falafel Burger mit Avocadocreme und Zwiebel-Salat', 'ja', '6.80', '2019-12-13');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `restaurant`
--

CREATE TABLE `restaurant` (
  `name` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `plz` varchar(5) NOT NULL,
  `town` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `restaurant`
--

INSERT INTO `restaurant` (`name`, `street`, `plz`, `town`) VALUES
('Humpis', 'Marktstraße 47', '88212', 'Ravensburg'),
('Mensa DHBW Ravensburg', 'Marienplatz 2', '88212', 'Ravensburg'),
('Slainte Irish Pub', 'Eichelstrasse 4', '88212', 'Ravensburg'),
('Walfisch', 'Bachstraße 5', '88212', 'Ravensburg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
