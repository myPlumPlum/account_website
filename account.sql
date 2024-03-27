-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 09:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(4) NOT NULL,
  `name_TH` text NOT NULL,
  `name_EN` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `name_TH`, `name_EN`, `status`) VALUES
(0, 'ชื่อธนาคาร(ไทย)', 'ชื่อธนาคาร(อังกฤษ)', 0),
(1, 'ธนาคารแห่งประเทศไทย', 'BANK OF THAILAND', 0),
(2, 'ธ. กรุงเทพ จำกัด (มหาชน)', 'BANGKOK BANK PUBLIC COMPANY LTD.', 0),
(4, 'ธ. กสิกรไทย จำกัด (มหาชน)', 'KASIKORNBANK PUBLIC COMPANY LTD.', 0),
(5, 'ธ. เดอะรอยัลแบงก์อ๊อฟสกอตแลนด์ เอ็น.วี.', 'THE ROYAL BANK OF SCOTLAND N.V.,', 0),
(6, 'ธ. กรุงไทย จำกัด (มหาชน)', 'KRUNG THAI BANK PUBLIC COMPANY LTD.', 0),
(8, 'ธ. เจพีมอร์แกน เชส', 'JPMORGAN CHASE BANK, NATIONAL ASSOCIATION', 0),
(9, 'ธ. โอเวอร์ซี-ไชนีสแบงกิ้งคอร์ปอเรชั่น จำกัด', 'OVER SEA-CHINESE BANKING CORPORATION LIMITED', 0),
(10, 'ธ. แห่งโตเกียว-มิตซูบิชิ ยูเอฟเจ จำกัด', 'THE BANK OF TOKYO-MITSUBISHI UFJ, LTD.', 0),
(11, 'ธ. ทหารไทย จำกัด (มหาชน)', 'TMB BANK PUBLIC COMPANY LIMITED', 0),
(14, 'ธ. ไทยพาณิชย์ จำกัด (มหาชน)', 'SIAM COMMERCIAL BANK PUBLIC COMPANY LTD.', 0),
(15, 'ธ. นครหลวงไทย จำกัด (มหาชน)', 'THE SIAM CITY BANK PUBLIC COMPANY LTD.', 0),
(17, 'ธ. ซิตี้แบงก์', 'CITIBANK, N.A.', 0),
(18, 'ธ. ซูมิโตโม มิตซุย แบงกิ้ง คอร์ปอเรชั่น', 'SUMITOMO MITSUI BANKING CORPORATION', 0),
(20, 'ธ. สแตนดาร์ดชาร์เตอร์ด (ไทย) จำกัด (มหาชน)', 'STANDARD CHARTERED BANK (THAI) PUBLIC COMPANY LIMITED', 0),
(23, 'ธ. อาร์ เอช บี จำกัด', 'RHB BANK BERHAD', 0),
(24, 'ธ. ยูโอบี จำกัด (มหาชน)', 'UNITED OVERSEAS BANK (THAI) PUBLIC COMPANY LIMITED', 0),
(25, 'ธ. กรุงศรีอยุธยา จำกัด (มหาชน)', 'BANK OF AYUDHYA PUBLIC COMPANY LTD.', 0),
(26, 'ธ. เมกะ สากลพาณิชย์ จำกัด (มหาชน)', 'MEGA  INTERNATIONAL COMMERCIAL BANK PUBLIC COMPANY LIMITED', 0),
(27, 'ธ. แห่งอเมริกาเนชั่นแนลแอสโซซิเอชั่น', 'BANK OF AMERICA, NATIONAL ASSOCIATION', 0),
(28, 'ธ. เครดิต อะกริกอล คอร์ปอเรทแอนด์อินเวสเมนท์แบงก์', 'CREDIT AGRICOLE CORPORATE AND INVESTMENT BANK', 0),
(29, 'ธ. อินเดียนโอเวอร์ซีส์', 'INDIAN OVERSEA BANK', 0),
(30, 'ธ. ออมสิน', 'THE GOVERNMENT SAVINGS BANK', 0),
(31, 'ธ. ฮ่องกงและเซี่ยงไฮ้แบงกิ้งคอร์ปอเรชั่น จำกัด', 'THE HONGKONG AND SHANGHAI BANKING CORPORATION LTD.', 0),
(32, 'ธ. ดอยซ์แบงก์', 'DEUTSCHE BANK AG.', 0),
(33, 'ธ. อาคารสงเคราะห์', 'THE GOVERNMENT HOUSING BANK', 0),
(34, 'ธ. เพื่อการเกษตรและสหกรณ์การเกษตร', 'BANK FOR AGRICULTURE AND AGRICULTURAL COOPERATIVES', 0),
(35, 'ธ. เพื่อการส่งออกและนำเข้าแห่งประเทศไทย', 'EXPORT-IMPORT BANK OF THAILAND', 0),
(39, 'ธ. มิซูโฮ คอร์ปอเรต จำกัด', 'MIZUHO CORPORATE BANK, LTD.', 0),
(45, 'ธ. บีเอ็นพี พารีบาส์', 'BNP PARIBAS', 0),
(52, 'ธ. แห่งประเทศจีน จำกัด', 'BANK OF CHINA LIMITED', 0),
(65, 'ธ. ธนชาต จำกัด (มหาชน)', 'THANACHART BANK PUBLIC COMPANY LTD.', 0),
(66, 'ธ. อิสลามแห่งประเทศไทย', 'ISLAMIC BANK OF THAILAND', 0),
(67, 'ธ. ทิสโก้ จำกัด (มหาชน)', 'TISCO BANK PUBLIC COMPANY LIMITED', 0),
(69, 'ธ. เกียรตินาคิน จำกัด (มหาชน)', 'KIATNAKIN BANK PUBLIC COMPANY LIMITED', 0),
(71, 'ธ. ไทยเครดิต เพื่อรายย่อย จำกัด (มหาชน)', 'THE THAI CREDIT RETAIL BANK PUBLIC COMPANY LIMITED', 0),
(73, 'ธ. แลนด์ แอนด์ เฮ้าส์ จำกัด (มหาชน)', 'LAND AND HOUSES PUBLIC COMPANY LIMITED', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tracking_doc`
--

CREATE TABLE `tracking_doc` (
  `id_tracking` int(10) NOT NULL,
  `dega_ID` text NOT NULL,
  `number_form` text NOT NULL,
  `list_item` text NOT NULL,
  `total_cost` int(10) NOT NULL,
  `type_pay` int(2) NOT NULL,
  `department` text NOT NULL,
  `status_doc` int(2) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tracking_doc`
--

INSERT INTO `tracking_doc` (`id_tracking`, `dega_ID`, `number_form`, `list_item`, `total_cost`, `type_pay`, `department`, `status_doc`, `id_user`) VALUES
(1, 'aaasss123456', '0', 'for medicine', 1200, 3, 'OIC', 0, 3),
(2, 'cccc1234', 'cccc1235', 'เบิกสำหรับค่าเทอมเด็กๆ ', 17100, 2, 'แผนกการเงิน ', 0, 3),
(3, 'abc1234', 'cccc1235', 'for medicine', 9000, 3, 'OIC', 0, 3),
(4, '2567/001', '2567/01-89', 'เบิกค่าเดินทางดูงาน', 120000, 1, 'คลังสินค้า', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(10) NOT NULL,
  `userID` text DEFAULT NULL,
  `passwordID` text NOT NULL,
  `FullyName` text NOT NULL,
  `bank_name` text NOT NULL,
  `acc_number` text NOT NULL,
  `role_user` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `userID`, `passwordID`, `FullyName`, `bank_name`, `acc_number`, `role_user`) VALUES
(1, 'admin', 'abc1234', '', '', '0', 0),
(2, '0550129999', 'abc@789', 'Elsa of arendelle', '6', '878-696-7895', 1),
(3, '12345', '1234', 'into the unknow', '4', '888-888-9999', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `tracking_doc`
--
ALTER TABLE `tracking_doc`
  ADD PRIMARY KEY (`id_tracking`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tracking_doc`
--
ALTER TABLE `tracking_doc`
  MODIFY `id_tracking` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
