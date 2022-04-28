-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Kwi 2022, 13:53
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Baza danych: `sklep`
--
CREATE DATABASE IF NOT EXISTS `sklep` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sklep`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `adres`
--

CREATE TABLE `adres` (
  `id_adres` int(11) NOT NULL,
  `miasto` varchar(50) NOT NULL,
  `miejscowosc` varchar(50) NOT NULL,
  `wojewodztwo` varchar(50) NOT NULL,
  `kod_pocztowy` varchar(6) NOT NULL,
  `ulica` varchar(50) NOT NULL,
  `nr_dom_lokal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `adres`
--

INSERT INTO `adres` (`id_adres`, `miasto`, `miejscowosc`, `wojewodztwo`, `kod_pocztowy`, `ulica`, `nr_dom_lokal`) VALUES
(1, 'Częstochowa', 'Konopiska', 'Śląskie', '42-274', 'stawowa', '8');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dostawca`
--

CREATE TABLE `dostawca` (
  `id_dostawca` int(11) NOT NULL,
  `firma` int(11) NOT NULL,
  `NiP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `konto`
--

CREATE TABLE `konto` (
  `id_konto` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `haslo` varchar(20) NOT NULL,
  `emial` varchar(60) NOT NULL,
  `id_adres` int(11) NOT NULL,
  `uprawnienia` set('administrator','uzytkownik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `konto`
--

INSERT INTO `konto` (`id_konto`, `imie`, `nazwisko`, `haslo`, `emial`, `id_adres`, `uprawnienia`) VALUES
(1, 'Przemek', 'Rygał', 'xxvv11', 'xxbaniakxx@gmail.com', 1, 'uzytkownik'),
(2, 'asdasd', 'asd', 'xxvv11', 'xxvv11', 1, 'uzytkownik'),
(3, 'admin', 'admin', 'admin', 'admin', 1, 'administrator'),
(4, 'sdasd', 'asdasd', 'nieadmin', 'nieadmin', 1, 'uzytkownik');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `magazyn`
--

CREATE TABLE `magazyn` (
  `id_magazyn` int(11) NOT NULL,
  `id_adres` int(11) NOT NULL,
  `id_dostawca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id_produkty` int(11) NOT NULL,
  `kategoria` set('telewizory','komputery','smartfony','konsole','monitory','akcesoria','polecane') NOT NULL,
  `dane_techniczne` text NOT NULL,
  `ilosc` int(11) NOT NULL,
  `cena` float NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `obrazek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id_produkty`, `kategoria`, `dane_techniczne`, `ilosc`, `cena`, `nazwa`, `obrazek`) VALUES
(4, 'smartfony', 'asdsad', 1, 99999, 'Apple Iphone 16 pro max ultra hiper', 'img/iphone.jpg'),
(5, 'smartfony', 'asd', 66, 666, 'Huawei P50', 'img/huaweip50.jpg'),
(6, 'smartfony', 'asd', 12, 1299, 'Oppo RENO Z', 'img/opporeno.jpg'),
(7, 'smartfony', 'asd', 126, 1320, 'Realme GT 7', 'img/realme.jpg'),
(8, 'smartfony', 'asd', 23, 3982, 'Xiaomi Mi 11 Pro', 'img/xiaomimi11.jpg'),
(9, 'smartfony', 'asdasd', 23, 1799, 'Samsung Galaxy S21+', 'img/samsung.jpg'),
(10, 'telewizory', 'fasdf', 4, 1700, 'Philips 43PUS7506/12 Smart 4K UHD', 'img/philipstel.jpg'),
(11, 'telewizory', 'fsdafdsa', 7, 2700, 'Telewizor LED 55\" LG 55UN711C', 'img/lgtel.jpg'),
(12, 'telewizory', 'fasdfdasf', 8, 1900, 'Telewizor LED LG LG 43UP81003LR 43 \" 4K UHD', 'img/lgtel2.jpg'),
(13, 'telewizory', 'gdfsg', 6, 1600, 'Telewizor Samsung UE43AU7172 43\" 4K SmartTv', 'img/samsungtel.jpg'),
(14, 'telewizory', 'ghsfdg', 11, 2137, 'Telewizor Thomson LED 43 43UG6400', 'img/thomson.jpg'),
(15, 'telewizory', 'gdfas', 2, 3300, 'Telewizor SONY KD55X81JAEP 55\" LED 4K Android TV D', 'img/sony.jpg'),
(16, 'komputery', 'fasdf', 15, 1800, 'Komputer MSI Pro DP130 11-048XEU 6405U 8GB RAM 256', 'img/msikomp.jpg'),
(17, 'komputery', 'fsdaf', 22, 1500, 'KOMPUTER AIO MEDION P2005DR/YR/P8/S512 WINDOWS 10 ', 'img/aio.jpg'),
(18, 'komputery', 'fdsafsda', 0, 1100, 'Laptop Lenovo ThinkPad T450s i7 - 5600U / 8GB / 12', 'img/lenovo.jpg'),
(19, 'komputery', 'fsdafs', 11, 2500, 'Laptop Apple Macbook Pro A1398 i7 - 4770HQ / 16GB ', 'img/apple.jpg'),
(20, 'komputery', 'fsadfsda', 43, 11000, 'Komputer DELL Vostro', 'img/dell.jpg'),
(21, 'komputery', 'fdsfasd', 9, 5500, 'Komputer All-in-One HP 24-df0006nw 230S8EA', 'img/hpkomp.jpg'),
(25, 'konsole', 'gfdsgfd', 5, 3100, 'Sony PlayStation 5', 'img/ps5.jpg'),
(26, 'konsole', 'gdsfg', 21, 1450, 'Sony PlayStation 4 Slim 500gb', 'img/ps4s.jpg'),
(27, 'konsole', 'gsfdg', 11, 2500, 'Microsoft Xbox series X', 'img/xboxx.jpg'),
(28, 'konsole', 'gfdsg', 52, 1600, 'Nintendo Switch OLED White', 'img/nintendo.jpg'),
(29, 'konsole', 'gdsfgds', 12, 1300, 'Microsoft Xbox Series S', 'img/xboxs.jpg'),
(30, 'konsole', 'gsdfg', 19, 500, 'Sony PlayStation Classic', 'img/psc.jpg'),
(31, 'monitory', 'fadsf', 13, 1200, 'Monitor SAMSUNG Odyssey C27G55TQWR 27\" 2560x1440px', 'img/monitorsamsung.jpg'),
(32, 'monitory', 'gfdsgf', 21, 1700, 'Monitor GIGABYTE G32QC A 32\" 2560x1440px 165 Hz 1 ', 'img/monitorgiga.jpg'),
(33, 'monitory', 'gfds', 41, 950, 'Monitor IIYAMA G-Master G2470HSU 24\" 1920x1080px I', 'img/monitorii.jpg'),
(34, 'monitory', 'gsfd', 10, 1230, 'Monitor HP X27QC 27\" 2560x1440px IPS 165Hz 1 ms Cu', 'img/monitorhp.jpg'),
(35, 'monitory', 'gsfd', 21, 1500, 'Monitor LG UltraGear 27GP850 27\" 2560x1440px 165Hz', 'img/monitorlg.jpg'),
(36, 'monitory', 'gsfd', 31, 1500, 'Monitor SAMSUNG Smart S32AM700UR 32\" 3840x2160px', 'img/monitorsamsung2.jpg'),
(37, 'akcesoria', 'dasfads', 44, 420, 'Słuchawki STEELSERIES Arctis 5 2019 Edition Czarny', 'img/sluchawkiss.jpg'),
(38, 'akcesoria', 'fdsaf', 22, 160, 'Słuchawki RAZER Kraken X Lite', 'img/sluchawkirazer.jpg'),
(39, 'akcesoria', 'asfdsa', 42, 220, 'Klawiatura STEELSERIES Apex 3 TKL US', 'img/klawiaturass.jpg'),
(40, 'akcesoria', 'gfdsgds', 61, 230, 'Klawiatura RAZER Cynosa V2', 'img/klawiaturarazer.jpg'),
(41, 'akcesoria', 'gfadsgfads', 22, 150, 'Mysz RAZER DeathAdder Essential', 'img/myszkarazer.jpg'),
(42, 'akcesoria', 'gafdsg', 41, 330, 'Mysz STEELSERIES Aerox 3 Wireless Onyx', 'img/myszkass.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `adres`
--
ALTER TABLE `adres`
  ADD PRIMARY KEY (`id_adres`);

--
-- Indeksy dla tabeli `dostawca`
--
ALTER TABLE `dostawca`
  ADD PRIMARY KEY (`id_dostawca`);

--
-- Indeksy dla tabeli `konto`
--
ALTER TABLE `konto`
  ADD PRIMARY KEY (`id_konto`),
  ADD KEY `asd` (`id_adres`);

--
-- Indeksy dla tabeli `magazyn`
--
ALTER TABLE `magazyn`
  ADD PRIMARY KEY (`id_magazyn`),
  ADD KEY `dsa` (`id_dostawca`),
  ADD KEY `dfgs` (`id_adres`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id_produkty`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `adres`
--
ALTER TABLE `adres`
  MODIFY `id_adres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `dostawca`
--
ALTER TABLE `dostawca`
  MODIFY `id_dostawca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `konto`
--
ALTER TABLE `konto`
  MODIFY `id_konto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `magazyn`
--
ALTER TABLE `magazyn`
  MODIFY `id_magazyn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id_produkty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `konto`
--
ALTER TABLE `konto`
  ADD CONSTRAINT `asd` FOREIGN KEY (`id_adres`) REFERENCES `adres` (`id_adres`);

--
-- Ograniczenia dla tabeli `magazyn`
--
ALTER TABLE `magazyn`
  ADD CONSTRAINT `dfgs` FOREIGN KEY (`id_adres`) REFERENCES `adres` (`id_adres`),
  ADD CONSTRAINT `dsa` FOREIGN KEY (`id_dostawca`) REFERENCES `dostawca` (`id_dostawca`);
COMMIT;
