-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 02:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `60003263002_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(2, 'Kajoketare99', '96385274101');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memID` int(5) NOT NULL,
  `memName` varchar(100) NOT NULL,
  `mUsename` varchar(15) NOT NULL,
  `mPassword` varchar(15) NOT NULL,
  `mAddrerss` text NOT NULL,
  `mEmail` varchar(50) NOT NULL,
  `mTel` varchar(12) NOT NULL,
  `mSex` varchar(10) NOT NULL,
  `mDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memID`, `memName`, `mUsename`, `mPassword`, `mAddrerss`, `mEmail`, `mTel`, `mSex`, `mDate`) VALUES
(12, '', '', 'd41d8cd98f00b20', '      ', '', '', '', '2019-05-02 08:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `OrderDate` datetime NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Tel` varchar(13) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderDate`, `Name`, `Address`, `Tel`, `Email`) VALUES
(00028, '2019-05-02 13:46:00', 'มูฮะมัด อาบูซารีย์ฟา', '49 ม.8 ต.สะโลว์บูกิตยือแร์ อ.รือเสาะ จ.นราธิวาส', '0875544921', 'MuHamud441@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `DetailID` int(5) NOT NULL,
  `OrderID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `ProductID` int(5) NOT NULL,
  `Qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`DetailID`, `OrderID`, `ProductID`, `Qty`) VALUES
(32, 00028, 48, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `Price` decimal(8,2) NOT NULL,
  `Picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `Price`, `Picture`) VALUES
(048, 'M16A1 เวียดนามเหล็กแท้', '7700.00', 'M16A1_Vietnam.jpg'),
(052, 'JG M16A2 เหล็กแท้', '7850.00', 'JGM16A2.jpg'),
(053, 'JG M16A3 เหล็กแท้', '6700.00', 'JGM16A3.jpg'),
(054, 'GoldenEagle M16A4 เหล็กแท้', '6500.00', 'GEM16A4.jpg'),
(055, 'JG M14 เวียดนามไม้แท้', '7100.00', 'M14.jpg'),
(056, 'JG M14 EBR เหล็กแท้ ', '8400.00', 'M14EBR.jpg'),
(057, 'E&C M16A2Cabine เหล็กแท้', '7550.00', 'EandCM16A2C.jpg'),
(058, 'AGE M60ขนาดหนักขาทราย3ขา ', '25000.00', 'AGE_HMG_M60.jpg'),
(059, 'AGE M60 LMG เหล็กแท้', '12500.50', 'AGE_m60.jpg'),
(061, 'E&C Aug A3 แรงได้ใจ', '8600.75', 'E&C_AUG_A3.jpg'),
(062, 'Cyma AK 47 ไม้แท้เหล็กแท้', '7800.00', 'CymaAK47.jpg'),
(063, 'Cyma AKM ไม้แท้เหล็กแท้', '7600.75', 'CymaAKm.jpg'),
(064, 'Cyma Galil IDF เหล็กแท้', '5500.00', 'CymaGalil.jpg'),
(065, 'Cyma Galil 7.62 เหล็กแท้', '6300.00', 'CymaGalil7.62.jpg'),
(066, 'Cyma G36C ', '6900.00', 'CYMA_G36C_CM011.jpg'),
(068, 'JG RPk ไม้แท้เหล็กแท้', '8400.00', 'JKRPK.jpg'),
(069, 'HK33 ปืนขวัญใจร.ด.', '6500.00', 'HK33.jpg'),
(071, 'TokyoMarui Famas เหล็กแท้', '12300.50', 'FamasTyMarui.jpg'),
(073, 'M79 เครื่องยิงลูกระเบิด', '10000.00', 'M79.jpg'),
(074, 'MP5 กระชับมือ เหมาะCQB', '4500.00', 'MP5.jpg'),
(075, 'ClassicArmy M249 Para พานท้ายเ', '13500.00', 'ClassicArmy_M249_ParaSAW.jpg'),
(077, 'LCT RPD เวียดนามไม้แท้', '13200.50', 'LCTRPDMG.jpg'),
(078, 'Marui Howa Type 64 เหล็กและไม้', '13500.75', 'TyType64.jpg'),
(079, 'TokyoMarui Type89 เหล็กแท้', '11500.50', 'TYMaruiType89.jpg'),
(080, 'AGE L1A1ไม้แท้ ', '8900.00', 'ARES-AR-024-W-1L1A1AGE.jpg'),
(082, 'KingArms Thompson M1A1', '6500.00', 'KAThompson.jpg'),
(083, 'A&K M249 รัวได้ใจ สายปืนกล', '15600.00', 'AK_M249_MK2__S_A_W_Full_Metal.jpg'),
(085, 'DP28 ตีตราโซเวียตแท้', '19500.50', 'DP28.jpg'),
(086, 'ICS M1 Garand ขวัญใจร.ด.ภาคสนา', '11000.75', 'ICS.jpg'),
(087, 'Marushin M1 cabineไม้แท้ ขวัญใ', '11300.00', 'MarushinM1c.jpg'),
(088, 'ป.ก.ท.บ.ไทย M2 Browing', '23500.00', 'M2Browing.jpg'),
(089, 'Marui Mac10', '9500.00', 'TYMaruiMac10.jpg'),
(091, 'G&P M870สั้นTactical ', '7100.00', 'GandP_M870สั้น.jpg'),
(092, 'Cyma M870 ไม้แท้', '6500.00', 'CA_M870.jpg'),
(093, 'G&P M870 Tactical ', '7550.00', 'GandPM870T.jpg'),
(094, 'Cyma Spas12 ยิงสะใจ สายลูกซอง', '7250.00', 'Spas12.jpg'),
(095, 'Cyma Spas15 สายซองออโต้ถูกใจสิ', '7850.00', 'Spas15.jpg'),
(096, 'L2A1 เหล็กแท้ยุคเวียดนาม', '8350.00', 'ST_sterling__00288.1442657629.400.400.jpg'),
(097, 'SnowWolf M24 สีดำเซาะร่อง', '7500.00', 'M24.jpg'),
(098, 'SnowWolf AWM L96 แรงจัด', '8900.00', 'AWM.jpg'),
(099, 'Makarov PM ตีตราโซเวียตแท้', '1490.00', 'Kwc.jpg'),
(100, 'WE M92F ยอดนิยมทหารG.I.', '2300.00', 'WE_M92F_Bk.jpg'),
(101, 'WE M92F V.Resident Evil', '3500.00', 'WE_M92F_Samurai_Edge_Barry_Burton_MOD_Full_Auto.jpg'),
(103, 'WE Browing Hi Power', '2300.00', 'WeBrowingHiPower.jpg'),
(104, 'KSC USP.45', '4500.00', 'ksc29.jpg'),
(105, 'RP46 ปืนกลดัดแปลงDP28', '26000.00', 'RP46.jpg'),
(106, 'เลเซอร์ติดปืนพก +ความแม่นยำHip', '500.00', 'sku_283731_1.jpg'),
(107, 'เลเซอร์ติดไรเฟิล +ความแม่นย', '700.00', 'เลเซอร์ติดปืนไรเฟิล.jpg'),
(108, 'AEG M4A1 เหล็กแท้', '7100.00', 'M4A1.jpg'),
(109, 'M1911 TacOps', '2100.00', 'M1911TacOPS.jpg'),
(110, 'กริปแนวตั้งตั้ง', '950.00', 'VerticalGrip.jpg'),
(111, 'กริปแนวตั้งตั้งแบบอ้วน', '900.00', 'RaiVerticalGrip.jpg'),
(112, 'กริปแนวนอน เล็งเร็วขึ้น', '800.00', 'angleGrip.jpg'),
(113, 'กริปหัวแม่มือ ยกเร็ว คุมปืนง่า', '850.00', 'Icon_attach_Thumb_Grip.png'),
(114, 'กริปจับแบบครึ่งมือ', '400.00', 'HalfGrip.jpg'),
(115, 'กริปจับน้ำหนักเบา', '600.00', 'LightwehitGrip.jpg'),
(116, 'กล้องx8ปรับระยะได้', '2500.00', 'คูณ8ปรับระยะได้.jpg'),
(118, 'กล้องHolo EchoTech', '1450.00', 'EchoTech.png'),
(120, 'กล้องReddot', '1350.00', 'Reddot.jpg'),
(121, 'กล้องReddotV.2', '1350.00', 'Red_Dot_Scope_R6S.png'),
(122, 'กล้องติดปืนสำหรับM16', '2350.00', 'ColtScope.jpg'),
(123, 'Marui M4Sopmod แต่งได้ตามใจ', '9250.00', 'M4Sopmod.jpg'),
(124, 'ACog x2.5  ', '3200.00', '71zmcSDD7DL._SX425_.jpg'),
(125, 'AEG HK 416 ', '8300.00', 'HK416.jpg'),
(126, 'AGE HK 417 DMR แต่งสไนได้', '6900.00', 'HK417DMR.jpeg'),
(127, 'AEG SR 25 แต่งได้ตามใจ', '8500.00', 'SR25.jpg'),
(128, 'Harris Bipod ขาตั้งสไนสั้น', '650.00', 'Harris_Bipod_Model_S-BR_6-9_large.jpg'),
(129, 'ขาตั้งสไนเปอร์3ขา', '5000.00', 'Tripod.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memID`,`mUsename`,`mPassword`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`DetailID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `DetailID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
