-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 10:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dunia_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `narasi`
--

CREATE TABLE `narasi` (
  `id` varchar(10) NOT NULL,
  `narasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `narasi`
--

INSERT INTO `narasi` (`id`, `narasi`) VALUES
('lv1_1a', 'Bukankah ini terlalu besar?!'),
('lv1_1b', 'Mungkin kau salah tag?'),
('lv1_1c', 'Kau benar, inilah nama duniaku!'),
('lv1_1d', 'Ini terlalu biasa untuk judul halaman!'),
('lv1_1o', 'Tunggu, sepertinya ini untuk membuat judul dunia ini. Kira-kira bagaimana ya cara membuatnya?'),
('lv1_2a', 'Kau tidak dapat menggabungkan tag tersebut!'),
('lv1_2b', 'Bukankah ini terbalik?'),
('lv1_2c', 'Kau membuat ini menjadi pintu'),
('lv1_2d', 'Tidak lupa dengan sapaan kepada orang lain'),
('lv1_2o', 'Eh, apakah dunia ini ingin menyapa? Sepertinya ia sangat semangat sampai membuatnya dengan tulisan tebal.'),
('lv1_3a', 'Tulisan ini terlalu besar!'),
('lv1_3b', 'Duniaku memang seharusnya selalu menyambut tamu'),
('lv1_3c', 'Elementnya menjadi tidak berbentuk'),
('lv1_3d', 'Lagi-lagi kita membuat pintu!'),
('lv1_3o', 'Hai ada tulisan disana!! Kira-kira tulisan apa itu?'),
('lv1_4a', 'Terlalu banyak menggunakan tag!'),
('lv1_4b', 'Banyak sekali hal misteri didunia ini!'),
('lv1_4c', 'Kau kurang teliti, ayo coba lagi!'),
('lv1_4d', 'Mungkin belum sesuai tagnya?'),
('lv1_4o', 'Sepertinya sama seperti sebelumnya. Apa itu tulisannya?'),
('lv1_e1', 'Ah sekarang aku ingat. Kita berada di Dunia Web'),
('lv1_e2', 'Tapi sepertinya masih banyak yang harus dijelajahi di dunia ini.'),
('lv1_e3', 'Mari kita pecahkan!!!'),
('lv_o1', 'Kamu terbangun ke dalam sebuah halaman kosong...'),
('lv_o2', 'Dari kejauhan, kamu melihat seorang wanita berkacamata mendekatimu...'),
('lv_o3', 'Hai, apa kamu tidak apa-apa?'),
('lv_o4', 'Sepertinya kamu bukan orang sini'),
('lv_o5', 'Kalau kamu penasaran, kita sekarang ada di....\r\nHmmm.....'),
('lv_o6', 'Maaf aku melupakannya, maukah kamu bantu aku untuk mengingat tempat ini bersama?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `narasi`
--
ALTER TABLE `narasi`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
