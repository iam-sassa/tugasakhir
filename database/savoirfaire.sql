-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 09:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `savoirfaire`
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Harry Potter', 'gryffindor', '310681', 'choosenone@gmail.com', 'admin', '2022-12-13 01:34:34', '2022-12-12 23:51:03'),
(9, 'Draco Malfoy', 'deatheater', '5679', 'yordrake@gmail.com', 'admin', '2022-12-12 22:34:06', NULL),
(10, 'Hermione Granger', 'knowitall', '1909', 'hermiyoonee@gmail.com', 'admin', '2022-12-12 22:40:45', NULL),
(13, 'Lilianne Mather', 'liliyy', '39020', 'lilianne@gmail.com', 'user', '2022-12-13 03:25:12', NULL),
(14, 'sassa', 'our', '$2y$10$AiC', 'shd@gmail.com', 'user', '2022-12-15 22:43:52', NULL),
(15, 'siti nurelysa', 'sasa', '$2y$10$ipO', 'sitinurelysaa@gmail.com', 'user', '2022-12-16 01:29:03', NULL);

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`id`, `trx_date`, `client_id`, `program_id`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '2022-12-13 01:16:48', 1, 2, 0, '2022-12-13 01:16:48', NULL),
(2, '2022-12-13 01:17:13', 2, 1, 0, '2022-12-13 07:17:13', '2022-12-13 01:17:13');

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `name`, `category`, `founded_year`, `address`, `collab_id`, `available_seats`, `created_at`, `updated_at`) VALUES
(1, 'SF Language Center', 'Education', 1987, 'Liamnim flatter, Jl Lavender, Kabupaten Ponorogo, Jawa Timur', 1, 10, '2022-12-13 00:30:20', '2022-12-13 00:32:40'),
(2, 'SF Morning Coffe', 'Food and Beverages', 2002, 'Huangdon Square, Jl Lima Perkara, Pasuruan, Jawa Timur', 5, 5, '2022-12-13 00:32:43', NULL),
(5, 'nemo', 'Famtasy', 2002, 'Lily Street No. 40,  Privet Drive', 4, 5, '2022-12-15 08:14:00', NULL);

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Alaste Arche', '+62 5647 4857 9', 'Grown of Meiion, Kota Tangerang Selatan, Banten ', '2022-12-13 00:10:27', '2022-12-13 00:10:41'),
(4, 'Samudra Sea', '+65748 3883 89', 'Kokorionnne Central park, Jl Lavender 24, Bandung', '2022-12-15 03:36:35', '2022-12-31 07:17:00'),
(7, 'sassa', '+64638948899', 'Lily Street No. 40,  Privet Drive', '2022-12-15 22:33:36', NULL),
(8, 'sasasasa', '090909', 'Lily Street No. 40,  Privet Drive', '2022-12-16 01:28:27', NULL);

--
-- Dumping data for table `collaboration`
--

INSERT INTO `collaboration` (`id`, `name`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'PT Mantappu Berkat Digital', 'Millennium Centennial Center, Jl. Jenderal Sudirman No. Kav. 25, Kecamatan Setiabudi, Kota Jakarta S', 'contact@mantappu.com', '(+62) 822 3019 ', '2022-12-12 23:00:22', '2022-12-12 23:47:25'),
(5, 'PT IQ Edukasi', 'Colearn Headquarter, GoWork Millenium Centennial Center Lt. 42 Jl Jendral Sudirman Kav.25 Jakarta Se', 'info@colearn.id', '+62 817 2352 35', '2022-12-12 23:43:11', NULL);

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `booking_id`, `created_at`) VALUES
(1, 1, '2022-12-13 01:36:45'),
(2, 2, '2022-12-13 01:58:29');

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `branch`, `category`, `location`, `issue_date`, `due_date`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Barista training', 'SF Morning Caffe', 'Cooking and Serving', 'Liamnim flatter, Jl Lavender, Kabupaten Ponorogo, Jawa Timur', '2022-12-13', '2022-12-13', 1000000, '2022-12-13 00:56:54', NULL),
(2, 'English Mentor', 'SF Language Center', 'Education', 'Huangdon Square, Jl Lima Perkara, Pasuruan, Jawa Timur', '2022-12-13', '2022-12-13', 500000, '2022-12-13 00:57:04', '2022-12-13 00:57:59'),
(4, 'Full Stack Developer', 'SF Tech Id', 'Information Technology', 'Kebayoran Arcade 2, Bintaro Tangerang Selatan Banten', '2022-12-27', '2023-03-30', 500000, '2022-12-16 08:23:03', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
