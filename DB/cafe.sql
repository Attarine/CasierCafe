-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2022 pada 08.13
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `core_food`
--

CREATE TABLE `core_food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(100) DEFAULT '',
  `food_price` int(10) DEFAULT 0,
  `data_store` int(1) DEFAULT 0,
  `created_id` int(10) DEFAULT 0,
  `created_on` datetime DEFAULT NULL,
  `updated_id` int(1) DEFAULT 0,
  `updated_on` datetime DEFAULT NULL,
  `deleted_id` int(10) DEFAULT 0,
  `deleted_on` datetime DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `core_food`
--

INSERT INTO `core_food` (`food_id`, `food_name`, `food_price`, `data_store`, `created_id`, `created_on`, `updated_id`, `updated_on`, `deleted_id`, `deleted_on`, `last_update`) VALUES
(1, 'Nasi Goreng', 10000, 0, 5, '2022-02-19 06:49:50', 0, NULL, 0, NULL, '2022-02-19 05:49:50'),
(2, 'Soto Daging Sapi', 7000, 0, 5, '2022-02-19 06:53:30', 0, NULL, 0, NULL, '2022-02-19 05:53:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role_id` int(1) DEFAULT NULL,
  `data_state` int(1) DEFAULT 0,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `username`, `password`, `role_id`, `data_state`, `created_on`, `updated_on`, `deleted_on`, `last_updated`) VALUES
(1, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 1, 0, NULL, NULL, NULL, '2022-02-17 05:09:36'),
(2, 'Attarine Cicio Ramadhan', 'Ramadhan', 'e10adc3949ba59abbe56e057f20f883e', 1, 0, NULL, NULL, NULL, '2022-02-17 05:11:49'),
(3, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, 0, NULL, NULL, NULL, '2022-02-17 05:13:47'),
(4, 'Salma Dien Nurjanah', 'Salma', 'e10adc3949ba59abbe56e057f20f883e', 1, 0, NULL, NULL, NULL, '2022-02-19 02:41:33'),
(5, 'Winarno', 'win', 'e10adc3949ba59abbe56e057f20f883e', 3, 0, '2022-02-19 03:59:04', NULL, NULL, '2022-02-19 02:59:04'),
(6, 'Zahran Harith Sidqi', 'Zahran', 'e10adc3949ba59abbe56e057f20f883e', 2, 0, '2022-02-19 05:19:12', NULL, NULL, '2022-02-19 04:19:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'Kasir'),
(2, 'Admin'),
(3, 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `core_food`
--
ALTER TABLE `core_food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `data_state` (`data_state`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `core_food`
--
ALTER TABLE `core_food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
