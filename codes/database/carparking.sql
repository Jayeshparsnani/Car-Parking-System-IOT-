-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 08:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carparking`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `amount1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`amount1`) VALUES
(500);

-- --------------------------------------------------------

--
-- Table structure for table `current`
--

CREATE TABLE `current` (
  `number` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `slot` varchar(50) NOT NULL,
  `count` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `current`
--

INSERT INTO `current` (`number`, `phone`, `email`, `otp`, `slot`, `count`, `date`, `amount`) VALUES
('ML-01\n\noe', '9834692325', 'deepakmo2808@gmail.com', 'LtdtFu', 'slot1', 1, '2019-10-10', 500),
('| Mh-\n\n05 iia,', '9834692325', '2017.deepak.mulwani@ves.ac.in', 'csANiv', 'slot2', 1, '2019-10-03', 500),
('', '', '', '', 'slot3', 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `number` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `slot` varchar(50) NOT NULL,
  `count` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`number`, `phone`, `email`, `otp`, `slot`, `count`, `date`, `amount`) VALUES
('AY-20000', '9567897654', '2017.gaurav.parwani@ves.ac.in', '67abQ6', 'slot1', 1, '2018-11-21', 500),
('BY-20890', '9578907654', '2017.jai.mulani@ves.ac.in', '12TRn8', 'slot2', 1, '2018-12-05', 500),
('CY-89890', '9087654321', '2017.tarun.chawla@ves.ac.in', 'AQ23r5', 'slot3', 1, '2019-01-05', 500),
('DY-86790', '9345678909', '2017.tarun.parwani@ves.ac.in', 'bw23r5', 'slot1', 1, '2019-03-05', 500),
('EY-90909', '9876543210', '2017.deepak.parsnani@ves.ac.in', 'ER56T6', 'slot2', 1, '2019-06-22', 500),
('AY-20000', '9567897654', '2017.gaurav.parwani@ves.ac.in', '78yt67', 'slot3', 2, '2019-08-03', 500),
('EY-28900', '9569090654', '2017.anshul.bhatani@ves.ac.in', '7WER67', 'slot1', 1, '2019-08-06', 500),
('BY-20890', '9578907654', '2017.jai.mulani@ves.ac.in', 'WE7867', 'slot2', 2, '2019-08-10', 500),
('AY-20000', '9567897654', '2017.Gaurav.parwani@ves.ac.in', '7RT867', 'slot3', 3, '2019-08-12', 500),
('FY-89500', '9123432156', '2017.lalu.parwani@ves.ac.in', '905TW7', 'slot1', 1, '2019-08-26', 500),
('CY-89890', '9087654321', '2017.tarun.chawla@ves.ac.in', 'LK9090', 'slot2', 2, '2019-09-05', 500),
('DY-86790', '9345678909', '2017.tarun.parwani@ves.ac.in', 'ij6190', 'slot3', 2, '2019-09-08', 500),
('TY-76543', '9675898909', '2017.vansh.tarwani@ves.ac.in', 'ity740', 'slot1', 1, '2019-09-16', 500),
('LY-65643', '9676767409', '2017.ganesh.taro@ves.ac.in', 'ty7870', 'slot2', 1, '2019-09-20', 500),
('LY-65643', '9676767409', '2017.ganesh.taro@ves.ac.in', 'ty7870', 'slot2', 1, '2019-09-20', 500),
('AY-20000', '9567897654', '2017.gaurav.parwani@ves.ac.in', 'tuiu70', 'slot3', 4, '2019-09-29', 500),
('SY-40000', '9588887654', '2017.jayesh.parwani@ves.ac.in', 'yuyu70', 'slot1', 1, '2019-10-01', 500),
('HY-20069', '9834692325', 'deepakmo2808@gmail.com', 'b4EkIc', 'slot1', 1, '2019-10-03', 500),
('HY-20069', '8805964929', '2017.jayesh.parsnani@ves.ac.in', 'uwGSOv', 'slot1', 2, '2019-10-03', 500),
('HY-20069', '8805964929', '2017.jayesh.parsnani@ves.ac.in', 'JUmETE', 'slot1', 3, '2019-10-03', 375),
('HY-20069', '9834692325', 'deepakmo2808@gmail.com', 'qgWiy3', 'slot1', 4, '2019-10-03', -2000),
('MH-05 123,', '9834692325', 'deepakmo2808@gmail.com', 'S2jB86', 'slot1', 1, '2019-10-03', 500),
(', MH-05 13', '9834692325', 'deepakmo2808@gmail.com', '8EpDOo', 'slot1', 1, '2019-10-03', 500),
('| Mh-\n\n05 iia,', '9834692325', '2017.deepak.mulwani@ves.ac.in', 'csANiv', 'slot2', 1, '2019-10-03', 500),
('| MH-05 45\n\n\"|', '9834692325', '2017.deepak.mulwani@ves.ac.in', 'g9wrUO', 'slot1', 1, '2019-10-03', 500),
('| M05 4\n\n.)', '9834692325', '2017.jayesh.parsnani@ves.ac.in', '52oS6V', 'slot1', 1, '2019-10-03', 500),
('', '9834692325', '2017.deepak.mulwani@ves.ac.in', 'Axw0MJ', 'slot1', 1, '2019-10-03', 500),
('M05 2\n\n2', '9834692325', 'deepakmo2808@gmail.com', '4nKqfn', 'slot1', 1, '2019-10-03', 500),
('| Mt-05 123)', '9834692325', 'deepakmo2808@gmail.com', '1IVMRx', 'slot1', 1, '2019-10-03', 500),
('| Mi-05 123)', '9834692325', '2017.deepak.mulwani@ves.ac.in', 'wJVmva', 'slot1', 1, '2019-10-03', 500),
('his 246', '9834692325', 'deepakmo2808@gmail.com', 'eTNn9R', 'slot1', 1, '2019-10-10', 500),
('i 146', '9834692325', 'deepakmo2808@gmail.com', '3pkXvt', 'slot1', 1, '2019-10-10', 500),
('bois 613', '9834692325', 'deepakmo2808@gmail.com', 'lsDRGf', 'slot1', 1, '2019-10-10', 500),
('bois 613', '9834692325', 'deepakmo2808@gmail.com', 'kC6QUM', 'slot1', 2, '2019-10-10', 500),
('rs 246', '9834692325', 'deepakmo2808@gmail.com', 'omO3du', 'slot1', 1, '2019-10-10', 500),
('', '9834692325', 'deepakmo2808@gmail.com', 'JgQV97', 'slot1', 2, '2019-10-10', 500),
('MH-OS', '983462325', 'deepakmo2808@gmail.com', 'RLFmia', 'slot1', 1, '2019-10-10', 500),
('MH-50', '9823492325', 'deepakmo2808@gmail.com', 'ASSAfe', 'slot1', 1, '2019-10-10', 500),
('ie ae', '9834692325', 'deepakmo2808@gmail.com', 'xpEkx9', 'slot1', 1, '2019-10-10', 500),
('ML-01', '9834692325', 'deepakmo@gmail.com', 'LErhWK', 'slot1', 1, '2019-10-10', 500),
('ML-01', '8805964929', 'deepakmo2808@gmail.com', 'OPHOlK', 'slot1', 2, '2019-10-10', 500),
('ML-O1', '9834692325', 'deepakmo2808@gmail.com', 'xTxY8L', 'slot1', 1, '2019-10-10', 500),
('ML-01\n\noe', '9834692325', 'deepakmo2808@gmail.com', 'LtdtFu', 'slot1', 1, '2019-10-10', 500);

-- --------------------------------------------------------

--
-- Table structure for table `dicount`
--

CREATE TABLE `dicount` (
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dicount`
--

INSERT INTO `dicount` (`amount`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`number`) VALUES
('hey');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `slotno` varchar(50) NOT NULL,
  `info` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`slotno`, `info`) VALUES
('slot1', 0),
('slot2', 0),
('slot3', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
