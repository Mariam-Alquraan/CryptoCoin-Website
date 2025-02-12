-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 07:12 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_business`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Rev` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `Rev_seq` int(100) NOT NULL,
  `util_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Rev`, `username`, `Rev_seq`, `util_name`) VALUES
('Great!!!', 'mariam quraan', 1, ''),
('awesome', 'mariam quraan', 2, ''),
('Great', 'mariam quraan', 19, 'Currency Exchange');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ser_id` int(10) NOT NULL,
  `ser_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ser_id`, `ser_name`) VALUES
(1, 'ALL'),
(2, 'BUY'),
(3, 'SELL'),
(4, 'EXCHANGE');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `amount` decimal(3,0) NOT NULL,
  `status` varchar(10) NOT NULL,
  `trans` varchar(100) NOT NULL,
  `currency` varchar(4) NOT NULL,
  `TransDateTime` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `items` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ID`, `FirstName`, `LastName`, `amount`, `status`, `trans`, `currency`, `TransDateTime`, `username`, `items`) VALUES
(1, '', '', '1', 'Completed', '81S09600TP003690L', 'USD', '1700222707', '', ''),
(2, '', '', '11', 'Completed', '0KW27902YS137184W', 'USD', '1700222784', '', ''),
(3, '', '', '13', 'Completed', '73K04817DU0413820', 'USD', '1700224447', '', ''),
(4, '', '', '1', 'Completed', '45N20872FU934345F', 'USD', '1700224683', '', ''),
(5, '', '', '1', 'Completed', '45N20872FU934345F', 'USD', '1700224712', '', ''),
(6, '', '', '1', 'Completed', '8JT90314DX3963059', 'USD', '1700224794', '', ''),
(7, '', '', '11', 'Completed', '81D668867A0040818', 'USD', '1700244979', '', ''),
(8, '', '', '1', 'Completed', '3M548642ST195911K', 'USD', '1700322604', '', ''),
(9, '', '', '2', 'Completed', '6LD94499NK8256155', 'USD', '1700379647', '', ''),
(10, '', '', '52', 'Completed', '4T7223570U209264D', 'USD', '1700387195', '', ''),
(11, '', '', '13', 'Completed', '2UB81458M1598753Y', 'USD', '1703076293', '', ''),
(12, '', '', '24', 'Completed', '7H6445772V689654B', 'USD', '1703091813', '', ''),
(13, '', '', '13', 'Completed', '2UJ51985HV297843S', 'USD', '1703096050', 'mariam', 'util_2:1<br/>'),
(14, '', '', '13', 'Completed', '0ND7268085764284F', 'USD', '1703097273', 'mariam', 'util_2:1<br/>'),
(15, '', '', '1', 'Completed', '0AL2248401987505X', 'USD', '1703097545', 'mariam2', 'util_1:1<br/>'),
(16, '', '', '1', 'Completed', '7D905326HB107002G', 'USD', '1703099395', 'mariam', 'util_1:1<br/>'),
(17, '', '', '13', 'Completed', '02807946NM1304110', 'USD', '1703134665', 'mariam', 'util_5:1<br/>'),
(18, '', '', '13', 'Completed', '01W64899R94285057', 'USD', '1704555533', '', 'util_2:1<br/>'),
(19, '', '', '1', 'Completed', '74V99631W19482503', 'USD', '1704556059', '', 'util_1:1<br/>'),
(20, '', '', '1', 'Completed', '2YL16855NY191184L', 'USD', '1704556883', 'mry2200258', 'util_1:1<br/>'),
(21, '', '', '2', 'Completed', '8R043404NY7738906', 'USD', '1704560084', 'mariam', 'util_1:2<br/>'),
(22, '', '', '14', 'Completed', '7X646383HH9376341', 'USD', '1704563957', 'mariam2', 'util_2:1<br/>util_1:1<br/>'),
(23, '', '', '1', 'Completed', '5R8786471U263603A', 'USD', '1704613718', 'mariam2', 'util_1:1<br/>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `userFullName` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `userFullName`, `password`, `Admin`) VALUES
(1, 'Mariam', '', '698d51a19d8a121ce581499d7b701668', 0),
(2, 'Mariam2', '', '147', 1),
(3, 'Mariam6', 'mariam quraan', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `utilities`
--

CREATE TABLE `utilities` (
  `util_id` int(10) NOT NULL,
  `util_name` varchar(100) NOT NULL,
  `util_desc` varchar(1000) NOT NULL,
  `util_s_desc` varchar(250) NOT NULL,
  `util_pri` float NOT NULL,
  `uti_qty` int(10) NOT NULL,
  `util_img` varchar(250) NOT NULL,
  `ser_util_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilities`
--

INSERT INTO `utilities` (`util_id`, `util_name`, `util_desc`, `util_s_desc`, `util_pri`, `uti_qty`, `util_img`, `ser_util_id`) VALUES
(1, 'Currency Wallet\r\n', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ut enim ac dictum. Duis gravida velit eros, varius consectetur velit imperdiet nec. Sed vel varius neque. Aenean ac felis in diam congue commodo. Duis porta, risus sit amet malesuada congue, dui dolor sollicitudin lectus, nec bibendum mauris ipsum quis mauris. Sed rhoncus iaculis lorem, ut fermentum tortor blandit vel. Fusce at odio arcu', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo\r\n', 1, 1, 'img/icon-7.png', 2),
(2, 'Currency Transaction', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ut enim ac dictum. Duis gravida velit eros, varius consectetur velit imperdiet nec. Sed vel varius neque. Aenean ac felis in diam congue commodo. Duis porta, risus sit amet malesuada congue, dui dolor sollicitudin lectus, nec bibendum mauris ipsum quis mauris. Sed rhoncus iaculis lorem, ut fermentum tortor blandit vel. Fusce at odio arcu', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo', 12.8, 1, 'img/icon-3.png', 2),
(3, 'Bitcoin Investment', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ut enim ac dictum. Duis gravida velit eros, varius consectetur velit imperdiet nec. Sed vel varius neque. Aenean ac felis in diam congue commodo. Duis porta, risus sit amet malesuada congue, dui dolor sollicitudin lectus, nec bibendum mauris ipsum quis mauris. Sed rhoncus iaculis lorem, ut fermentum tortor blandit vel. Fusce at odio arcu', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo', 14.99, 12, 'img/icon-9.png', 2),
(4, 'Currency Exchange', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ut enim ac dictum. Duis gravida velit eros, varius consectetur velit imperdiet nec. Sed vel varius neque. Aenean ac felis in diam congue commodo. Duis porta, risus sit amet malesuada congue, dui dolor sollicitudin lectus, nec bibendum mauris ipsum quis mauris. Sed rhoncus iaculis lorem, ut fermentum tortor blandit vel. Fusce at odio arcu', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo', 10.99, 3, 'img/icon-5.png', 4),
(5, 'Bitcoin Escrow', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ut enim ac dictum. Duis gravida velit eros, varius consectetur velit imperdiet nec. Sed vel varius neque. Aenean ac felis in diam congue commodo. Duis porta, risus sit amet malesuada congue, dui dolor sollicitudin lectus, nec bibendum mauris ipsum quis mauris. Sed rhoncus iaculis lorem, ut fermentum tortor blandit vel. Fusce at odio arcu', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo', 12.99, 1, 'img/icon-2.png', 3),
(6, 'Token Sale', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ut enim ac dictum. Duis gravida velit eros, varius consectetur velit imperdiet nec. Sed vel varius neque. Aenean ac felis in diam congue commodo. Duis porta, risus sit amet malesuada congue, dui dolor sollicitudin lectus, nec bibendum mauris ipsum quis mauris. Sed rhoncus iaculis lorem, ut fermentum tortor blandit vel. Fusce at odio arcu', 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo', 24.99, 1, 'img/icon-8.png', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Rev_seq`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `utilities`
--
ALTER TABLE `utilities`
  ADD PRIMARY KEY (`util_id`),
  ADD KEY `ser_util_id` (`ser_util_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Rev_seq` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `utilities`
--
ALTER TABLE `utilities`
  ADD CONSTRAINT `utilities_ibfk_1` FOREIGN KEY (`ser_util_id`) REFERENCES `service` (`ser_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
