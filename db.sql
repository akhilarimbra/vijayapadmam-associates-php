-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2016 at 01:35 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vijayapadmam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(20) DEFAULT NULL,
  `passcode` varchar(30) DEFAULT NULL,
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `passcode`) VALUES
('akhilarimbra', 'arimbra143#'),
('vijayapadmam', 'pass123#');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `Name` varchar(99) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `Contact Number` varchar(20) NOT NULL,
  `Product` varchar(99) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Name`, `ID`, `Contact Number`, `Product`) VALUES
('SundialCharterdCourier&Logistics', 'SCL.Cok', '4844022525', 'CargoItems');

-- --------------------------------------------------------

--
-- Table structure for table `clientbill`
--

CREATE TABLE IF NOT EXISTS `clientbill` (
  `ID` varchar(99) NOT NULL,
  `Date` date NOT NULL,
  `Start` float NOT NULL,
  `End` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `ID` varchar(99) NOT NULL,
  `Name` varchar(99) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `Name`) VALUES
('Voda-NNW', 'Vodafone - Non Net Work');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `date` date NOT NULL,
  UNIQUE KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`date`) VALUES
('2016-01-01'),
('2016-01-30'),
('2016-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE IF NOT EXISTS `distributor` (
  `ID` varchar(99) NOT NULL,
  `Name` varchar(99) NOT NULL,
  `Company` varchar(99) NOT NULL,
  `Location` varchar(99) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`ID`, `Name`, `Company`, `Location`) VALUES
('Alakkode-01', 'A&S Associates', 'Voda-NNW', 'Alakkode'),
('Ambalavayal-01', 'Misri Communication', 'Voda-NNW', 'Ambalavayal'),
('Angadippuram-01', 'PK Marketing', 'Voda-NNW', 'Angadippuram'),
('Areekkode-01', 'Gihon Communication', 'Voda-NNW', 'Areekkode'),
('Atholi-01', 'Ace Marketing', 'Voda-NNW', 'Atholi'),
('Badiadka-01', 'Life Pharmacy', 'Voda-NNW', 'Badiadka'),
('Badoor-01', 'Hibbah Communication', 'Voda-NNW', 'Badoor'),
('Balussery-01', 'Fiafi Communication', 'Voda-NNW', 'Balussery'),
('Balussery-02', 'NKK Associates', 'Voda-NNW', 'Balussery'),
('Bellur-01', 'Bismillah Communication', 'Voda-NNW', 'Bellur'),
('Biyyam-01', 'JZ Associates', 'Voda-NNW', 'Biyyam, Ponnani'),
('BP Angadi-01', 'DMG Associates', 'Voda-NNW', 'BP Angadi'),
('Chakkarakkallu-01', 'Fasil Associates', 'Voda-NNW', 'Chakkarakkallu'),
('Changaramkulam-01', 'VNJ Associates', 'Voda-NNW', 'Changaramkulam'),
('Changaramkulam-02', 'MARS Associates', 'Voda-NNW', 'Changaramkulam'),
('Chelakkad-01', 'Focus Communication', 'Voda-NNW', 'Chelakkad'),
('Chelannur-01', 'Nakshath Ventures', 'Voda-NNW', 'Chelannur'),
('Chelari-01', 'Fresco Marketing', 'Voda-NNW', 'Chelari'),
('Chemmad-01', 'NJ Communication', 'Voda-NNW', 'Chemmad'),
('Cherupuzha-01', 'Mulapra Trading Agency', 'Voda-NNW', 'Cherupuzha'),
('Cherupuzha-02', 'T Point Agencies', 'Voda-NNW', 'Cherupuzha'),
('Cheruvadi-01', 'Base Marketing', 'Voda-NNW', 'Cheruvadi'),
('Cheruvannur-Feroke-01', 'Saudi Marketing', 'Voda-NNW', 'Cheruvannur, Feroke'),
('Cheruvannur-Kozhikkode-01', 'Herald Communications', 'Voda-NNW', 'Cheruvannur, Kozhikkode'),
('Cheruvathur-01', 'FM Communication', 'Voda-NNW', 'Cheruvathur, Kannur'),
('Chullikkara-01', 'A3 Group Trading Agency', 'Voda-NNW', 'Chullikkara'),
('Chungathara-01', 'BR Communication', 'Voda-NNW', 'Chungathara'),
('Connection-Kannur', 'Connection Point', 'Voda-NNW', 'Chala, Kannur'),
('Edakkara-01', 'KPM Marketing', 'Voda-NNW', 'Edakkara'),
('Edappal-01', 'Volga Tele Services', 'Voda-NNW', 'Edappal'),
('Edavanna-01', 'Rosh Communication', 'Voda-NNW', 'Edavanna'),
('Edavannappara-01', 'Tati Communication', 'Voda-NNW', 'Edavannappara'),
('Elathur-01', 'Elarhur Traders', 'Voda-NNW', 'Elathur'),
('Engapuzha-01', 'Galaxy Marketing', 'Voda-NNW', 'Engapuzha'),
('Engapuzha-02', 'Twister Marketing', 'Voda-NNW', 'Engapuzha'),
('IG Road-01', 'Noble Trade Line', 'Voda-NNW', 'IG Road, Kozhikkode'),
('Iritty-01', 'Excel Associates', 'Voda-NNW', 'Iritty'),
('Kadampuzha-01', 'OK Communication', 'Voda-NNW', 'Kadampuzha'),
('Kadavathur-01', 'Lets Talk', 'Voda-NNW', 'Kadavathur'),
('Kadungathukund-01', 'Nunu Communication', 'Voda-NNW', 'Kadungathukundu'),
('Kadungooth-01', 'Euroline Agencies', 'Voda-NNW', 'Kadungooth'),
('Kakkad-Mukkam-01', 'Awaaz Communication', 'Voda-NNW', 'Kakkad, Mukkam'),
('Kalamthode-01', 'XE Marketing', 'Voda-NNW', 'Kalamthodu'),
('Kalikavu-01', 'Big Telecom', 'Voda-NNW', 'Kalikavu'),
('Kalikavu-02', 'ARD Communication', 'Voda-NNW', 'Kalikavu'),
('Kalpetta-01', 'Southern Communication', 'Voda-NNW', 'Kalpetta'),
('Kambalakkad-01', 'Calicut Communication', 'Voda-NNW', 'Kambalakkad'),
('Kanghangad-01', 'PAG Agencies', 'Voda-NNW', 'Kanghangad'),
('Kanghangad-02', 'SA Communication', 'Voda-NNW', 'Kanghangad'),
('Kannur-01', 'Hindustan Associates', 'Voda-NNW', 'Kannur'),
('Karingallathani-01', 'Telcos Marketing', 'Voda-NNW', 'Karingallathani'),
('Karingallathani-02', 'Ponneth Agencies', 'Voda-NNW', 'Karingallathani'),
('Karivellur-01', 'PKV Communication', 'Voda-NNW', 'Karivellur'),
('Karuvanchal-01', 'Essar Communication', 'Voda-NNW', 'Karuvanchal'),
('Karuvarakkundu-01', '4G Communication', 'Voda-NNW', 'Karuvarakkundu'),
('Kasargod-01', 'Kasargod Power House', 'Voda-NNW', 'Kasargod'),
('Kattippara-01', 'Udhaya Marketing', 'Voda-NNW', 'Kattippara'),
('Kavanoor-01', 'Jaff Communication', 'Voda-NNW', 'Kavanoor'),
('Kelakam-01', 'Supertech', 'Voda-NNW', 'Kelakam'),
('Kenichira-01', 'Kuningarath Communication', 'Voda-NNW', 'Kenichira'),
('Kizhissery-01', 'Maloos Communication', 'Voda-NNW', 'Kizhissery'),
('Koduvally-01', 'Days Enterprises', 'Voda-NNW', 'Koduvally'),
('Kondotty-01', 'Nihal Communication', 'Voda-NNW', 'Kondotty'),
('Koothuparamba-01', 'Sterling Agencies', 'Voda-NNW', 'Koothuparamba'),
('Kottakkal-01', 'H2Z Communication', 'Voda-NNW', 'Kottakkal'),
('Kottapparamba-01', 'Dreams Communication', 'Voda-NNW', 'Kottapparamba East'),
('Kottappuram-01', 'Ring Agencies', 'Voda-NNW', 'Kottappuram'),
('KOTTOLI-01', 'SREELAKSHMI DISTRIBUTORS', 'Voda-NNW', 'Kottoli'),
('Koyilandy-01', 'Grid Sigma Associates', 'Voda-NNW', 'Koyilandy'),
('Kozhichina-01', 'PP Tele Biz', 'Voda-NNW', 'Kozhichina, Valakkulam'),
('Kozhikkode-01', 'VVS Associates', 'Voda-NNW', 'Kozhikkode'),
('Kumaranalloor-01', 'Two Star Marketing', 'Voda-NNW', 'Kumaranalloor'),
('Kundamkuzhi-01', 'Hello Communication', 'Voda-NNW', 'Kundamkuzhi'),
('Kunhippally-01', 'U-Matic Enterprises', 'Voda-NNW', 'Kunhippally'),
('Kunnamangalam-01', 'Nice Marketing', 'Voda-NNW', 'Kunnamangalam'),
('Kunnathupalam-01', 'Friends Agencies', 'Voda-NNW', 'Kunnathupalam, Kozhikkode'),
('Kunnumpuram-01', 'Shizan Distributors', 'Voda-NNW', 'Kunnumpuram'),
('Kurukathani-01', 'Kavarodi Communication', 'Voda-NNW', 'Kurukathani'),
('Kuttikkol-01', 'Anaswara Communication', 'Voda-NNW', 'Kuttikkol'),
('Kuttippala-01', 'SLH Marketing', 'Voda-NNW', 'Kuttippala'),
('Kuttyadi-01', 'ATC Marketing', 'Voda-NNW', 'Kuttyadi'),
('Madayi-01', 'We Eleven Enterprises', 'Voda-NNW', 'Madayi, Kannur'),
('Mahe-01', 'Lets Talk', 'Voda-NNW', 'Mahe'),
('Mahe-02', 'Mahe Trade Link', 'Voda-NNW', 'Mahe'),
('Makkaraparamba-01', 'PKS Agencies', 'Voda-NNW', 'Makkaraparamba'),
('Makkiyad-01', 'AK Communication', 'Voda-NNW', 'Makkiyad'),
('Mambaram-01', 'V-Gallery', 'Voda-NNW', 'Mambaram'),
('Mananthavadi-01', 'Has Distributors', 'Voda-NNW', 'Mananthavadi'),
('Mananthavadi-02', 'Shakthi Mobile Agencies', 'Voda-NNW', 'Mananthavadi'),
('Manathana-01', 'BS Agencies', 'Voda-NNW', 'Manathana, Peravoor'),
('Mangalam-01', 'MGM Associates', 'Voda-NNW', 'Mangalam, Purathur'),
('Mangalpadi-01', 'BMA Communication', 'Voda-NNW', 'Mangalpadi, Kasargod'),
('Manjery-01', 'Medtrans', 'Voda-NNW', 'Manjery'),
('Manjery-02', 'MR Associates', 'Voda-NNW', 'Manjery'),
('Mankada-01', 'Zamzam Marketing', 'Voda-NNW', 'Mankada'),
('Mankada-02', 'Sini Communication', 'Voda-NNW', 'Mankada'),
('Mattannur-01', 'Tele Talk', 'Voda-NNW', 'Mattannur'),
('Mavoor Road-01', 'Needs Marketing', 'Voda-NNW', 'Mavoor Road, Kozhikkode'),
('Mavoor-01', 'Micro Marketing', 'Voda-NNW', 'Mavoor'),
('Medical College-Kozhikkode-01', 'Fifo Marketing', 'Voda-NNW', 'Medical College, Kozhikkode'),
('Melattur-01', 'AKM Communication', 'Voda-NNW', 'Melattur'),
('Meppadi-01', 'Jyothis Communication', 'Voda-NNW', 'Meppadi'),
('Mukkam-01', 'Nest Marketing', 'Voda-NNW', 'Mukkam'),
('Mukkam-02', 'Best Marketing', 'Voda-NNW', 'Mukkam'),
('Muliyar-01', 'Mugarithottam Enterprises', 'Voda-NNW', 'Muliyar'),
('Mulleria-01', 'Yem Yes Communication', 'Voda-NNW', 'Mulleria'),
('Munduparamba-01', 'Geo Associates', 'Voda-NNW', 'Munduparamba'),
('Nadapuram-01', 'Reveal Communication', 'Voda-NNW', 'Nadapuram'),
('Naduvannur-01', 'City Agencies', 'Voda-NNW', 'Naduvannur'),
('Naduvannur-02', 'KC Communication', 'Voda-NNW', 'Naduvannur'),
('Naikketty-01', 'ATP Communication', 'Voda-NNW', 'Naikketty'),
('Nallalam-01', 'CK Agencies', 'Voda-NNW', 'Nallalam, Kozhikkode'),
('Nanmanda-01', 'Nature Life Agencies', 'Voda-NNW', 'Nanmanda'),
('Narikkuni-01', 'Dynamic Marketing', 'Voda-NNW', 'Narikkuni'),
('Neeleshwar-01', 'Messers National Communication', 'Voda-NNW', 'Neeleshwar, Kannur'),
('Nellikatta-01', 'Naveen Communication', 'Voda-NNW', 'Nellikatta'),
('Nilambur-01', 'Space Marketing', 'Voda-NNW', 'Nilambur'),
('Nilambur-02', 'Insat Communication', 'Voda-NNW', 'Nilambur'),
('Nilambur-03', 'Fidha Distributor', 'Voda-NNW', 'Chandakunnu, Nilambur'),
('Office', 'Vijayapadmam Associates', 'Voda-NNW', 'Kottaram, Valanchery'),
('Omassery-01', 'Pulse Marketing', 'Voda-NNW', 'Omassery'),
('Orkkattery-01', 'Malabar Agencies', 'Voda-NNW', 'Orkkattery'),
('Padapparamba-01', 'Rakhi Enterprises', 'Voda-NNW', 'Padapparamba'),
('Palakkunnu-01', 'Ayan Infocom', 'Voda-NNW', 'Palakkunnu'),
('Palloor-01', 'Easy World', 'Voda-NNW', 'Palloor'),
('Panathur-01', 'Rose Communication', 'Voda-NNW', 'Panathur'),
('Pandikkad-01', 'Elite Corporates', 'Voda-NNW', 'Pandikkad'),
('Panneermukku-01', 'Oasis Enterprises', 'Voda-NNW', 'Panneermukku, Kannur'),
('Parappanangadi-01', 'Royal Marketing', 'Voda-NNW', 'Parappanangadi'),
('Parappanangadi-02', 'Yamin Marketing', 'Voda-NNW', 'Parappanangadi'),
('Pathayakkunnu-01', 'Amar 4G Communication', 'Voda-NNW', 'Pathayakkunnu'),
('Pattarnadakkavu-01', 'SR Communication', 'Voda-NNW', 'Pattarnadakkavu'),
('Payyannur-01', 'Talk At One Communication', 'Voda-NNW', 'Payyannur'),
('Payyannur-02', 'Shine Textiles', 'Voda-NNW', 'Payyannur'),
('Payyavoor-01', 'Cell Star', 'Voda-NNW', 'Payyavoor'),
('Payyoli-01', 'Star Asia', 'Voda-NNW', 'Payyoli'),
('Pazhayangadi-01', 'Omega Strategic Service', 'Voda-NNW', 'Pazhayangadi, Kannur'),
('Perambra-01', 'K&K Associates', 'Voda-NNW', 'Perambra'),
('Peravoor-01', 'Net N Office', 'Voda-NNW', 'Peravoor'),
('Peringathur-01', 'Pearl Communication', 'Voda-NNW', 'Peringathur'),
('Perinthalmanna-01', 'Fathima Enterprises', 'Voda-NNW', 'Perinthalmanna'),
('Periyambalam-01', 'Aman Communication', 'Voda-NNW', 'Periyambalam'),
('Ponnani-01', 'Pink Telecom', 'Voda-NNW', 'Ponnani'),
('Ponnani-02', 'Concept Marketing', 'Voda-NNW', 'Ponnani'),
('Ponnani-03', 'Fathima Marketing', 'Voda-NNW', 'Ponnani'),
('Pookkottupadam-01', 'Sams Communication', 'Voda-NNW', 'Pookkottupadam'),
('Poonur-01', 'Dreams Marketing', 'Voda-NNW', 'Poonur'),
('Pottammal-01', 'Mihir Enterprises', 'Voda-NNW', 'Pottammal, Kozhikkode'),
('Pulamanthole-01', 'KPS Communication', 'Voda-NNW', 'Pulamanthole'),
('Pulpally-01', 'Manorama Distributors', 'Voda-NNW', 'Pulpally'),
('Puthanathani-01', 'Ideal Big Talk', 'Voda-NNW', 'Puthanathani'),
('Puthanathani-02', 'Saf Communication', 'Voda-NNW', 'Puthanathani'),
('Puthiyapalam-01', 'SP Agencies', 'Voda-NNW', 'Puthiyapalam, Kozhikkode'),
('Puthuppadi-01', 'Star Communication', 'Voda-NNW', 'Puthuppadi'),
('Ramanattukara-01', 'Popular Marketing', 'Voda-NNW', 'Ramanattukara'),
('Ramanattukara-02', 'Welcome Computers', 'Voda-NNW', 'Ramanattukara'),
('Sreekandapuram-01', 'Telec Communication', 'Voda-NNW', 'Sreekandapuram'),
('Sreekandapuram-02', 'Tele Care', 'Voda-NNW', 'Sreekandapuram'),
('Sulthanbathery-01', 'Koyilat Communication', 'Voda-NNW', 'Sulthanbathery'),
('Tanur-01', 'Blaze Marketing', 'Voda-NNW', 'Tanur'),
('Tanur-02', 'Wechat Marketing', 'Voda-NNW', 'Tanur'),
('Thalassery-01', 'Mayiza Communication', 'Voda-NNW', 'Thalassery'),
('Thalassery-02', 'Jhans Enterprises', 'Voda-NNW', 'Thalassery'),
('Thalassery-03', 'Harisree Distributors', 'Voda-NNW', 'Thalassery'),
('Thalassery-04', 'Nasco Mobile Enterprises', 'Voda-NNW', 'Thalassery'),
('Thaliparamba-01', 'Delta Communication', 'Voda-NNW', 'Thaliparamba'),
('Thamarassery-01', 'Teleca Networks', 'Voda-NNW', 'Thamarassery'),
('Thamarassery-02', 'Vadakkedath Communication', 'Voda-NNW', 'Thamarassery'),
('Theekkuni-01', 'MM Agencies', 'Voda-NNW', 'Theekkuni'),
('Thenhipalam-01', 'Cherumadathil Marketing', 'Voda-NNW', 'Thenhipalam'),
('Thirunavaya-01', 'Sha Enterprises', 'Voda-NNW', 'Thirunavaya'),
('Thiruvallur-01', 'Vibes Communication', 'Voda-NNW', 'Thiruvallur'),
('Thiruvambadi-01', 'Illikkal Associates', 'Voda-NNW', 'Thiruvambadi'),
('Thootha-01', 'Naaz Enterprises', 'Voda-NNW', 'Thootha'),
('Thottilpalam-01', 'Geo Communication', 'Voda-NNW', 'Thottilpalam'),
('Tirur-01', 'National Enterprises', 'Voda-NNW', 'Tirur'),
('Ulliyeri-01', 'Babitha Agencies', 'Voda-NNW', 'Ulliyeri'),
('Uppala-01', 'ANS Care Tele Services', 'Voda-NNW', 'Uppala, Kasargod'),
('Vadakara-01', 'Sumam Enterprises', 'Voda-NNW', 'Vadakara'),
('Vadakara-02', 'KT Agencies', 'Voda-NNW', 'Vadakara'),
('Vailathur-01', 'Maxcell Services', 'Voda-NNW', 'Vailathur'),
('Valanchery-01', 'Unicon Distributors', 'Voda-NNW', 'Valanchery'),
('Vallithode-01', 'Tele Star Associates', 'Voda-NNW', 'Vallithode'),
('Valluvambram-01', 'KVM Marketing Co', 'Voda-NNW', 'Valluvambram'),
('Valluvambram-02', 'Space Marketing', 'Voda-NNW', 'Valluvambram'),
('Valluvambram-03', 'Mankara Communication', 'Voda-NNW', 'Valluvambram'),
('Vanimal-01', 'Ashwin Communication', 'Voda-NNW', 'Kallachi, Vanimal'),
('Vanimal-02', 'Aksa Communication', 'Voda-NNW', 'Vanimal'),
('Vaniyambalam-01', 'Callza Telecom', 'Voda-NNW', 'Vaniyambalam'),
('Vazhikkadavu-01', 'VPH Agencies', 'Voda-NNW', 'Vazhikkadavu'),
('Vellarikundu-01', 'Smart Group Trading Agency', 'Voda-NNW', 'Vellarikundu'),
('Vengad-01', 'Cholayil Communication', 'Voda-NNW', 'Vengad'),
('Vengara-01', 'Kairos Marketing', 'Voda-NNW', 'Vengara'),
('Vengara-02', 'KM Telecorp', 'Voda-NNW', 'Vengara'),
('Villiyapalli-01', 'Fame Communication', 'Voda-NNW', 'Valliyapalli'),
('Wandoor-01', 'Chillies Telecom', 'Voda-NNW', 'Wandoor'),
('Warehouse-Kzd', 'Vodafone Warehouse', 'Voda-NNW', 'Kozhikkode');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Name` varchar(99) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `Contact Number` varchar(99) NOT NULL,
  `Personnel Number` varchar(99) NOT NULL,
  `Licence` varchar(99) NOT NULL,
  `Badge` varchar(99) NOT NULL,
  `Account Number` varchar(99) NOT NULL,
  `Bank` varchar(99) NOT NULL,
  `Branch` varchar(99) NOT NULL,
  `IFSC` varchar(99) NOT NULL,
  `S/O` varchar(99) NOT NULL,
  `Address` varchar(99) NOT NULL,
  `Sex` varchar(9) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Name`, `ID`, `Contact Number`, `Personnel Number`, `Licence`, `Badge`, `Account Number`, `Bank`, `Branch`, `IFSC`, `S/O`, `Address`, `Sex`) VALUES
('Ajish.M', 'Ajish.M', '9544087733', '9656987708', '55/10209/2005', '55/3027/2009', '31023769479', 'StateBankOfIndia', 'Valanchery', 'SBIN0010709', 'Appunni.M', 'PazhurHouse.Marankunnu.ValancheryPost.Malappuram.PIN676552', 'Male'),
('Anees.ET', 'Anees.ET', '0', '8943249553', '55/9848/2013', '55/1748/2015', '229801000007602', 'IndianOverseasBank', 'Valanchery', 'IOBA0002298', 'Aboobakar.ET', 'EmbranThodiHouse, Vendalloor, IrimbiliyamPost, Malappuram, PIN : 679572', 'Male'),
('Ansar.P', 'Ansar.P', '0', '7736666726', '55/1457/2008', '0', '4612101001711', 'CanaraBank', 'Puthanathani', 'CNRB0004612', 'Moideen.P', 'PokkatHouse.Athirumada.KalpakancheryPost.Malappuram.PIN676551', 'Male'),
('AbdulAsees.KM', 'Asees.KM', '0', '9645699094', '52/2412/1994', '52/250/2004', '229801000007163', 'IndianOverseasBank', 'Valanchery', 'IOBA0002298', 'KunhuMuhammed.KM', 'KayamkulamHouse.Naduvattom.KaippuramPost.Palakkad.679308', 'Male'),
('SayyidAliAshkarThangal', 'Askar.Than', '9544127744', '9746668861', '0', '0', '0', '0', '0', '0', '0', '0', 'Male'),
('Balakrishnanunni.TN', 'Balu.TN', '9544003344', '9544002244', '55/1432/1997', '55/3401/2013', '67028880372', 'StateBankOfTravancore', 'Valanchery', 'SBTR0000637', 'Vijayaraghavan.M', 'BibaSadhan.Madathil.Vendalloor.IrimbiliyamPost.Malappuram.PIN679572', 'Male'),
('Binoy M', 'Binoy.M', '9544077744', '8907025889', '55/14620/2013', '55/1556/2015', '67198805886', 'StateBankOfTravancore', 'Valanchery', 'SBTR0000637', 'Balan.M', 'MaruthilHouse.Kadampuzha.KadampuzhaPost.Malappuram.PIN676553', 'Male'),
('Faisal.CP', 'Faisal.CP', '0', '9546338720', '52/2595/2012', '52/973/2014', '14680100112054', 'FederalBank', 'Valanchery', 'FDRL0001468', 'Ummar.CP', 'ChakiriyamParambilHouse.Kaippuram.NaduvattomPost.Palakkad.PIN679308', 'Male'),
('SelmaualFaris.PK', 'Faris.PK', '0', '8593812795', '55/0483/2010', '55/1757/2013', '859101055881', 'CanaraBank', 'Valanchery', 'CNRB0000859', 'AbdulHameed.PK', 'PavaruKuzhiyilHouse.Irimbiliyam.IrimbiliyamPost.Malappuram.PIN679572', 'Male'),
('Noushad.KK', 'Noushad.KK', '0', '9895381775', '52/9738/2002', '55/843/2004', '32933068213', 'StateBankOfIndia', 'Valanchery', 'SBIN0010709', 'KunhiMohammed.KK', 'KuttiKattilHouse,Marankunnu.ValancheryPost.Malappuram.PIN676552', 'Male'),
('Prasanth.P', 'Prasanth.P', '0', '9744675280', '46/1469/2003', '51/612/2005', '20216475472', 'StateBankOfIndia', 'Cheruplassery', 'SBIN0010702', 'RadhaKrishnan.P', 'ParakkalHouse.Kalathumkundu.KaralmannaPost.Palakkad', 'Male'),
('Rafeek.K', 'Rafeek.K', '0', '9846283210', '55/4621/2007', '55/1412/2007', '33006845518', 'StateBankOfIndia', 'Valanchery', 'SBIN0010709', 'Hamza.K', 'KunnathHouse,Painkanniyoor.PainkanniyoorPost.Malappuram.PIN679571', 'Male'),
('Riyas.K', 'Riyas.K', '0', '9745701439', '52/208/2003', '52/134/2010', '67207264510', 'StateBankOfTravancore', 'Valanchery', 'SBTR0000637', 'Koyanni.K', 'KozhikkattilHouse.Naduvattom.KaippuramPost.Palakkad.PIN-679302', 'Male'),
('Shihabudheen.K', 'Sabu.K', '0', '9747688582', '55/1357/2014', '0', '0', '0', '0', '0', 'Hamza.K', 'KattachiraHouse.Vendalloor.IrimbiliyamPost.Malappuram.PIN679572', 'Male'),
('MohamedAbdulSaleem.CH', 'Salim.CH', '0', '7559066660', '52/1186/2007', '52/682/2014', '31028490639', 'StateBankOfIndia', 'Valanchery', 'SBIN0010709', 'MuhamedKutty.CH', 'ChangamPallyHouse.Pailippuram.ThiruvegappuraPost.Palakkad', 'Male'),
('Shafeek.AP', 'Shafeek.AP', '0', '9747383854', '55/9263/2007', '55/2351/2007', '229801000001776', 'IndianOverseasBank', 'Valanchery', 'IOBA0002298', 'Kabeer.AP', 'AngadiparambilHouse,Valanchery.ValancheryPost.Malappuram.PIN676552', 'Male'),
('MuhammedShaheed.KK', 'Shaheed.KK', '9544057788', '7558010784', '55/13356/2009', '0', '35075326197', 'StateBankOfIndia', 'Valanchery', 'SBIN0010709', 'Kunhalavi.KK', 'KuttiKattilHouse,Marankunnu.ValancheryPost.Malappuram.PIN676552', 'Male'),
('Sudheep.K', 'Sudheep.K', '9544027788', '9747201076', '53/4111/2012', '53/377/2014', '16900100049280', 'FederalBank', 'Kolathur', 'FDRL0001690', 'GovindhaKrishnan.K', 'KannankuzhiHouse,Kolathur.KolathurPost.Malappuram.PIN679338', 'Male'),
('Sulaiman.V', 'Sulaiman.V', '9544017733', '9388125024', '55/5829/1994', '55/3038/1994', '165201000001542', 'IndianOverseasBank', 'Kottakkal', 'IOBA0001652', 'Abdurahman.V', 'VeloorHouse.Kavumpuram.ThozhuvanoorPost.Malappuram.PIN676557', 'Male'),
('SumayyathBaby', 'Sumayya.B', '0', '9048771100', '0', '0', '229801000007680', 'IndianOverseasBank', 'Valanchery', 'IOBA0002298', 'Abdulla.K', 'KurungattilHouse.Irimbiliyam.IrimbiliyamPost.Malappuram.PIN679572', 'Female'),
('Thajudheen.K', 'Thaju.K', '9544047722', '9633269070', '55/8013/2011', '55/1838/2011', '14680100120875', 'FederalBank', 'Valanchery', 'FDRL0001468', 'Hamza.K', 'KattachiraHouse.Vendalloor.IrimbiliyamPost.Malappuram.PIN679572', 'Male'),
('Usman.N', 'Usman.N', '0', '9809217775', '55/15526/2009', '55/2464/2014', '32654268128', 'StateBankOfIndia', 'Valanchery', 'SBIN0010709', 'Musthafa.N', 'NambrathHouse.Vendalloor.IrimbiliyamPost.Malappuram.PIN679572', 'Male'),
('Vishnu.P', 'Vishnu.P', '9544067733', '9539285109', '53/4398/2009', '53/776/2012', '5971101001043', 'CanaraBank', 'Kolathur', 'CNRB0005971', 'RamaChandran.P', 'PattayikkalHouse.Kolathur.KolathurPost.Malappuram', 'Male'),
('AhammedZekki.KP', 'Zeki.KP', '0', '9809038858', '55/13165/2009', '55/3008/2013', '67166532745', 'StateBankOfTravancore', 'Valanchery', 'SBTR0000637', 'Pareekkutty.KP', 'KoottappilakkalHouse,Irimbiliyam,IrimbiliyamPost.Malappuram.PIN679572', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `emppayment`
--

CREATE TABLE IF NOT EXISTS `emppayment` (
  `ID` varchar(99) NOT NULL,
  `Vehicle` varchar(99) NOT NULL,
  `Date` date NOT NULL,
  `Basic` float NOT NULL,
  `Advance` float NOT NULL,
  `Allowance` float NOT NULL,
  `StartKM` float NOT NULL,
  `EndKM` float NOT NULL,
  `Work` varchar(99) NOT NULL,
  `Starting Time` varchar(99) NOT NULL,
  `Ending Time` varchar(99) NOT NULL,
  `Day` float NOT NULL,
  `Night` float NOT NULL,
  `Stay` float NOT NULL,
  `Number of Work` float NOT NULL,
  `Office Work` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Employee Work Information';

--
-- Dumping data for table `emppayment`
--

INSERT INTO `emppayment` (`ID`, `Vehicle`, `Date`, `Basic`, `Advance`, `Allowance`, `StartKM`, `EndKM`, `Work`, `Starting Time`, `Ending Time`, `Day`, `Night`, `Stay`, `Number of Work`, `Office Work`) VALUES
('Vishnu.P', 'KL-55-M-6287', '2016-01-30', 0, 0, 0, 113243, 113817, 'A-Kgd-01', '23:00', '6:00', 12, 7, 0, 1, 0),
('Binoy.M', 'OFFICE', '2016-03-03', 0, 0, 0, 0, 0, 'OFFICE', '9:30', '7:00', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
  `type` varchar(99) NOT NULL,
  `rate` float NOT NULL,
  UNIQUE KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`type`, `rate`) VALUES
('basic', 150),
('billkm', 9),
('day', 40),
('duty', 150),
('km', 10),
('night', 80),
('nwork', 11),
('officehour', 10),
('stay', 100);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `ID` varchar(99) NOT NULL,
  `Company` varchar(99) NOT NULL,
  `Distributor` varchar(99) NOT NULL,
  `SIM` float NOT NULL,
  `RCV` float NOT NULL,
  `Promo/Other` float NOT NULL,
  `Date` date NOT NULL,
  `KM` float NOT NULL,
  `Time` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`ID`, `Company`, `Distributor`, `SIM`, `RCV`, `Promo/Other`, `Date`, `KM`, `Time`) VALUES
('B-Mlp-Con', 'Voda-NNW', 'Office', 1, 2, 0, '2015-12-29', 0, '4.00'),
('B-Mlp-Con', 'Voda-NNW', 'Warehouse-Kzd', 0, 0, 0, '2015-12-29', 70, '5.30'),
('B-Mlp-Con', 'Voda-NNW', 'Office', 0, 0, 0, '2015-12-29', 70, '8.00'),
('B-Mlp-Con', 'Voda-NNW', 'Office', 0, 0, 0, '2016-01-01', 10, '2'),
('A-Kgd-00', 'Voda-NNW', 'Alakkode-01', 1, 2, 3, '2016-01-17', 4, '5'),
('A-Kgd-00', 'test', 'dis', 1, 2, 3, '2016-01-17', 4, '5'),
('A-Kgd-00', 'Voda-NNW', 'Alakkode-01', 1, 1, 1, '2016-01-17', 10, '1'),
('B-Mlp-01', 'Voda-NNW', 'Office', 0, 0, 0, '2016-01-18', 0, '8.30'),
('B-Mlp-01', 'Voda-NNW', 'Office', 0, 0, 0, '2016-01-18', 0, '8.3'),
('B-Mlp-01', 'Voda-NNW', 'Kottappuram-01', 0, 0, 1, '2016-01-18', 22, '9.10'),
('B-Mlp-01', 'Voda-NNW', 'Padapparamba-01', 0, 0, 1, '2016-01-18', 8, '9.40'),
('B-Mlp-01', 'Voda-NNW', 'Perinthalmanna-01', 0, 0, 1, '2016-01-18', 16, '10.30'),
('A-Mlp-01', 'Voda-NNW', 'Valanchery-01', 1, 3, 0, '2016-05-27', 2, '10 minut');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `ID` varchar(99) NOT NULL,
  `Name` varchar(99) NOT NULL,
  `Type` varchar(10) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`ID`, `Name`, `Type`) VALUES
('KL-13-Z-7024', 'Nano(Tata)', 'Rented'),
('KL-48-D-5426', 'AceHT(Tata)', 'Owned'),
('KL-52-D-2753', 'Indica(Tata)', 'Owned'),
('KL-55-H-6158', 'Nano(Tata)', 'Owned'),
('KL-55-M-2704', 'IrisMagic(Tata)', 'Owned'),
('KL-55-M-6287', 'SuperAce(Tata)', 'Owned'),
('KL-55-M-8351', 'IrisZip(Tata)', 'Owned'),
('KL-55-S-9832', 'Ace(HT)', 'Owned'),
('KL-56-G-1957', 'AceHT(Tata)', 'Owned'),
('KL-59-H-0787', 'IrisMagic(Tata)', 'Owned'),
('OFFICE', 'OFFICE', 'Owned');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleexpense`
--

CREATE TABLE IF NOT EXISTS `vehicleexpense` (
  `ID` varchar(99) NOT NULL,
  `Date` date NOT NULL,
  `Maintance` double NOT NULL,
  `Worker` varchar(99) NOT NULL,
  `Payment Status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicleexpense`
--

INSERT INTO `vehicleexpense` (`ID`, `Date`, `Maintance`, `Worker`, `Payment Status`) VALUES
('KL-59-H-0787', '2016-01-01', 2400, 'Tyre-Topgear', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `ID` varchar(99) NOT NULL,
  `Name` varchar(99) NOT NULL,
  `Type` varchar(99) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`ID`, `Name`, `Type`) VALUES
('A-Kgd-00', 'Kasargod', 'Route'),
('A-Kgd-01', 'Kasargod One', 'Route'),
('A-Kgd-02', 'Kasargod Two', 'Route'),
('A-Kgd-Con', 'Kasargod Connection', 'Route'),
('A-Kzd-00', 'Kozhikkode', 'Route'),
('A-Kzd-01', 'Kozhikkode One', 'Route'),
('A-Mlp-00', 'Malappuram', 'Route'),
('A-Mlp-01', 'Malappuram One', 'Route'),
('A-Mlp-02', 'Malappuram Two', 'Route'),
('A-Mlp-03', 'Malappuram Three', 'Route'),
('A-Mlp-Con', 'Malappuram Connection', 'Route'),
('A-Wyd-00', 'Wayanad', 'Route'),
('A-Wyd-01', 'Wayanad One', 'Route'),
('A-Wyd-02', 'Wayanad Two', 'Route'),
('B-Kgd-00', 'Kasargod', 'Route'),
('B-Kgd-01', 'Kasargod One', 'Route'),
('B-Kgd-02', 'Kasargod Two', 'Route'),
('B-Kgd-Con', 'Kasargod Connection', 'Route'),
('B-Kzd-00', 'Kozhikkode', 'Route'),
('B-Kzd-01', 'Kozhikkode One', 'Route'),
('B-Mlp-00', 'Malappuram', 'Route'),
('B-Mlp-01', 'Malappuram One', 'Route'),
('B-Mlp-02', 'Malappuram Two', 'Route'),
('B-Mlp-03', 'Malappuram Three', 'Route'),
('B-Mlp-Con', 'Malappuram Connection', 'Route'),
('B-Wyd-00', 'Wayanad', 'Route'),
('B-Wyd-01', 'Wayanad One', 'Route'),
('B-Wyd-02', 'Wayanad Two', 'Route'),
('KZD-WYD', 'KOZHIKKODE-WAYANAD', 'Route'),
('OFFICE', 'OFFICE', 'Work');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `ID` varchar(99) NOT NULL,
  `Name` varchar(99) NOT NULL,
  `Contact` varchar(99) NOT NULL,
  `Location` varchar(99) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`ID`, `Name`, `Contact`, `Location`) VALUES
('Electrical-Jayan', 'Friends Auto Electrical', '09744312868', 'Valiyakunnu'),
('FUEL', 'PETROL', '0', '0'),
('FUEL DIESEL', 'DIESEL', '0', '0'),
('Parts-Pandi-Valanchery', 'Pandi Automobiles', '09446597796', 'Valanchery'),
('Tyre-Topgear', 'Top Gear Tyres', '9746996666', 'Valanchery'),
('Workshop-Jayan', 'Jayan', '09946229897', 'Mukkilpeedika, Painkannur, Valanchery');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
