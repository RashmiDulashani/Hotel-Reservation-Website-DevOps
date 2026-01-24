-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2026 at 10:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `devops`

-- --------------------------------------------------------
-- Table structure for table `user_cred`
-- --------------------------------------------------------

CREATE TABLE `user_cred` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenum` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Generic Test Data for Team Testing
-- --------------------------------------------------------

INSERT INTO `user_cred` (`id`, `name`, `email`, `address`, `phonenum`, `dob`, `password`, `status`) VALUES
(1, 'Test User', 'test@example.com', '123 Hotel Lane', '0112345678', '1995-01-22', '$2y$10$ArdamJI5VLQDdEiK/8Qtu.blGop3OmIDvOYQGLPiOpRoWKtyZ8UY.', 1),

-- --------------------------------------------------------
-- Indexes and Constraints
-- --------------------------------------------------------

ALTER TABLE `user_cred`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_cred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;