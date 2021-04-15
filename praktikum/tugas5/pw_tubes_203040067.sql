-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 04.59
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040067`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `game`
--

CREATE TABLE `game` (
  `id` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `about` varchar(3000) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `game`
--

INSERT INTO `game` (`id`, `image`, `name`, `date`, `about`, `price`) VALUES
(1, '1.jpg', 'Resident Evil 4', '28 Feb, 2014', 'Special agent Leon S. Kennedy is sent on a mission to rescue the U.S. President’s daughter who has been kidnapped. Finding his way to a rural village in Europe, he faces new threats that are a departure from the traditional lumbering zombie enemies of the earlier instalments in the series.', 230860),
(2, '2.jpg', 'Resident Evil 5', '16 Sep, 2009', 'The Umbrella Corporation and its crop of lethal viruses have been destroyed and contained. But a new, more dangerous threat has emerged. Years after surviving the events in Raccoon City, Chris Redfield has been fighting the scourge of bio-organic weapons all over the world.', 192697),
(3, '3.jpg', 'Resident Evil 6', '22 Mar, 2013', 'Blending action and survival horror, Resident Evil 6 promises to be the dramatic horror experience of 2013. Resident Evil favorites Leon S. Kennedy, Chris Redfield and Ada Wong are joined by new characters, including Jake Muller, to face a new horror, the highly virulent C-virus, as the narrative moves between North America, the war-torn Eastern European state of Edonia and the Chinese city of Lanshiang.', 289094),
(4, '4.jpg', 'Resident Evil 7', '24 Jan, 2017', 'Resident Evil 7 biohazard is the next major entry in the renowned Resident Evil series and sets a new course for the franchise as it leverages its roots and opens the door to a truly terrifying horror experience. A dramatic new shift for the series to first person view in a photorealistic style powered by Capcom’s new RE Engine, Resident Evil 7 delivers an unprecedented level of immersion that brings the thrilling horror up close and personal.', 239999),
(5, '5.jpg', 'Resident Evil 8', '7 May,2021', 'Set a few years after the horrifying events in the critically acclaimed Resident Evil 7 biohazard, the all-new storyline begins with Ethan Winters and his wife Mia living peacefully in a new location, free from their past nightmares. Just as they are building their new life together, tragedy befalls them once again.', 1130999);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
