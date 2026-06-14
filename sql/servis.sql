-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 13.Jún 2026, 12:55
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `servis`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `consent` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `message`, `consent`, `created_at`) VALUES
(1, 'radimo', 'olikbielik147@gmail.com', '0940791100', 'iuvhfpaESHDFQIDHQIQDW', 1, '2026-06-13 10:52:23');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `image`) VALUES
(1, 'Pravidelný servis a údržba', 'Výmena oleja, filtrov a pravidelná kontrola vozidla podľa servisného intervalu.', '🔧', 'img/Servis a údržba.jpg'),
(2, 'Diagnostika vozidla', 'Elektronická diagnostika riadiacich jednotiek, mazanie chýb a kontrola systémov.', '📊', 'img/Diagnostika.jpg'),
(3, 'Opravy motora', 'Odborné opravy motorov, rozvodov, tesnení a chladiaceho systému.', '⚙️', 'img/Opravy motora.jpg'),
(4, 'Servis klimatizácie', 'Plnenie, dezinfekcia a opravy klimatizačných systémov vo vozidlách.', '❄️', 'img/Klimatizácia.jpg'),
(5, 'Elektrika a elektronika', 'Diagnostika elektrických porúch, batérie, štartéry, alternátory a svetlá.', '⚡', 'img/Elektrika.jpg'),
(6, 'Karoséria a lak', 'Opravy poškodení karosérie, lakovanie a antikorózna ochrana.', '🚗', 'img/Karoséria a lak.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` varchar(100) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_pwd` varchar(255) NOT NULL,
  `users_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_email`, `users_pwd`, `users_created_at`) VALUES
(1, 'MAREK', 'ostalsomsinohy@gmail.drk', '$2y$10$d.7hG9Q1Pyb8InJx.hWP/Oj36CarXxx5sYPHwVBBPOTKIfYGHUiwO', '2026-06-13 10:53:08'),
(2, 'admin', 'admin@gmail.com', '$2y$10$LtOlm.ni/jXyl2QeDg7qaeTj7IXUsYVztWQlfCTLat3wQa5cFznhm', '2026-06-13 10:53:55');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `users_uid` (`users_uid`),
  ADD UNIQUE KEY `users_email` (`users_email`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pre tabuľku `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
