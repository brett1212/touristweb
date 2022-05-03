-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2022 at 02:22 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist_attractions`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments_pic`
--

DROP TABLE IF EXISTS `comments_pic`;
CREATE TABLE IF NOT EXISTS `comments_pic` (
  `com_id` int(3) NOT NULL AUTO_INCREMENT,
  `image_id` int(3) NOT NULL,
  `comments` varchar(500) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_pic`
--

INSERT INTO `comments_pic` (`com_id`, `image_id`, `comments`) VALUES
(10, 21, 'Uploader: brett_andrews  <br><br> love it would be back'),
(11, 22, 'Uploader: rayya_andrews  <br><br> was very relaxing would recommend'),
(15, 21, 'Uploader: rayya_andrews  <br><br> looks exciting'),
(16, 23, 'Uploader: kyle_sam  <br><br> sound of the falls was so relaxing '),
(17, 22, 'Uploader: kyle_sam  <br><br> hmm looks like something i\'ll be into :)'),
(18, 21, 'Uploader: kyle_sam  <br><br> would love to go there sometime '),
(19, 24, 'Uploader: rachel_sadsa  <br><br> love all the different birds '),
(20, 23, 'Uploader: rachel_sadsa  <br><br> looks refreshing lol'),
(21, 23, 'Uploader: brett_andrews  <br><br> looks exciting'),
(22, 22, 'Uploader: brett_andrews  <br><br> and it\'s good for the skin'),
(24, 21, 'Uploader: rachel_sadsa  <br><br> it was ok'),
(25, 22, 'Uploader: rachel_sadsa  <br><br> yes!!! my skin is glowing'),
(26, 24, 'Uploader: rayya_andrews  <br><br> looks gorgeous'),
(27, 23, 'Uploader: rayya_andrews  <br><br> never been'),
(28, 24, 'Uploader: brett_andrews  <br><br> looks exciting'),
(29, 24, 'Uploader: kyle_sam  <br><br> all the colours wowww'),
(30, 22, 'Uploader: david_andre  <br><br> i hated this'),
(31, 28, 'Uploader: david_andre  <br><br> this was good'),
(32, 28, 'Uploader: david_andre  <br><br> nice!!!!!'),
(33, 21, 'Uploader: brett_andrews  <br><br> love it would be back'),
(34, 22, 'Uploader: rayya_andrews  <br><br> was very relaxing would recommend');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(35) NOT NULL,
  `feed` varchar(255) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `title`, `feed`) VALUES
(3, 'love your site', 'i have no complains well be back'),
(4, 'more pics', 'can we get more pics on the home page?');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(35) NOT NULL,
  `image_name` varchar(35) DEFAULT NULL,
  `image_des` varchar(900) DEFAULT NULL,
  `tag` varchar(250) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `user`, `image_name`, `image_des`, `tag`, `image`) VALUES
(21, 'Uploader: brett_andrews', 'Buccoo reef', 'Located on the South American Continental Shelf, Tobago is washed from the south by the turbulent Guyana Current and from the open Atlantic to the east by the North Equatorial Current. The mixing of these currents, combined with periodic pulses of nutrient-rich water from the Orinoco River in the rainy season (June-December), generates an abundance of plankton. This plankton is the base for the unusually abundant and varied life found on Tobagoâ€™s reefs.', '#tobago #buccoreef', 0x3c696d6720636c6173733d22696d673422207372633d222e2e2f696d672f627563636f6f726565662e6a7067223e),
(22, 'Uploader: rayya_andrews', 'Mud Volcano', 'Have you visited the Lâ€™eau Michel Mud Volcano and felt the sensation of floating in that pool of mud and wondered, what is a mud volcano exactly? Or perhaps you have seen photos and wondered how they are made and where the mud is coming from? Well, according to The University of the West Indies (UWI) Seismic Research Centre, mud volcanoes are not actually real volcanoes at all. They are vents or fractures through which warm mud is emitted and are not as hazardous as real volcanoes (The UWI Seismic Research Centre). Mud volcanoes require leakage of natural gas from deep in the ground to the surface. When the gas is mixed with salt water, and a relatively soft clay type soil, the mud if formed.', '#mud #trinidad #volcano', 0x3c696d6720636c6173733d22696d673422207372633d222e2e2f696d672f4d7564766f6c63616e6f2e6a7067223e),
(23, 'Uploader: kyle_sam', 'Aryle waterfall', 'At 175 feet (54 metres), Argyle, Tobagoâ€™s highest waterfall attracts locals and foreigners to its cascade of cool, crisp water that flows down from three dramatic levels. Located on the northeast side of Tobago, the falls are just outside Roxborough, on the Scarborough road (only a few hundred metres from the road to Bloody Bay along the Caribbean coast). The Roxborough Visitor Service Co-op office serves as the entrance. Encircled by lush green foliage, the waterfall is accessed after a 15-20 minute trek along a clearly marked trail. Along the way you are greeted by butterflies and a variety of birds. But before heading off you must pay an entrance fee of TT$60 at the office. If you wish you can hire a guide for an additional fee. With 3 levels, the thunderous sound of the waterfall is heard long before you see it. ', '#waterfall #trinidad #water', 0x3c696d6720636c6173733d22696d673422207372633d222e2e2f696d672f617267796c65776174657266616c6c2e6a7067223e),
(24, 'Uploader: rachel_sadsa', 'Caroni Swamp', 'The Caroni Swamp is an estuarine system comprising 5,611 hectares of mangrove forest and herbaceous marsh, interrupted by numerous channels, and brackish and saline lagoons, and with extensive intertidal mudflats on the seaward side. This swamp is an important wetland since it is ecologically diverse, consisting of marshes, mangrove swamp and tidal mudflats in close proximity. The wetland provides a variety of habitats for flora and faunal species and as such, supports a rich biodiversity. It is highly productive system that provides food and protection and is a nursery for marine and freshwater species.', '#CaroniSwamp #trinidad #animals', 0x3c696d6720636c6173733d22696d673422207372633d222e2e2f696d672f4361726f6e69205377616d702e6a7067223e),
(25, 'Uploader: brett_andrews', 'Pitch Lake', 'It is the largest commercial deposit of natural asphalt in the world â€“ one of only three in known existence â€“ and holds approximately 10 million tonnes of asphalt. A recent study connected to the European Space Agency, discovered there are living microbes beneath the asphaltâ€™s surface, which may one day help answer the question whether or not life exists on other planets! Spanning some 109 acres, the lake appears like a huge oval-shaped car park, but on closer inspection, it looks like very dark clay, with rough undulating patches.   Its asphalt has been used to pave roads and airport runways around the world, including the roadway in front of Buckingham Palace in England, La Guardia Airport in New York, the Lincoln Tunnel which connects New York to New Jersey, as well as numerous roads in several countries.', '#pitchlake #trinidad #pitch', 0x3c696d6720636c6173733d22696d673422207372633d222e2e2f696d672f70697463686c616b652e6a7067223e),
(26, 'Uploader: kyle_sam', 'Gasparee Caves', 'Gasparee Caves is a natural system of limestone caverns and caves created by millions of years of wave action and slightly acid rain on the island of Gaspar Grande. The largest of these caves is known as the Blue Grotto and was open to the public in 1981. At the bottom of the Blue Grotto (100 feet underground) you will find a mysterious clear tidal pool. Although swimming is officially prohibited, if you are lucky your guide may allow you to take a quick dip â€“ which is an awe inspiring experience for those so lucky. ', '#Gasparee Caves #trini', 0x3c696d6720636c6173733d22696d673422207372633d222e2e2f696d672f476173706172656543617665732e6a7067223e),
(27, 'Uploader: rachel_sadsa', 'Monos Island', 'Monos is an island in the Republic of Trinidad and Tobago. It is one of the \"Bocas Islands\", which lie in the Bocas del DragÃ³n between Trinidad and Venezuela. It is so named as the island was once home to noisy red howler monkeys.', '#Monos #trinidad #fun', 0x3c696d6720636c6173733d22696d673422207372633d222e2e2f696d672f4d6f6e6f732e6a7067223e),
(28, 'Uploader: david_andre', 'Nylon Pool ', 'Nylon Pool is an in-sea shallow white ground coral pool that is located off Pigeon Point, Tobago, and is accessible by boat. Its name is derived from its resemblance to a swimming pool. It is close to the Buccoo Reef, a protected area full of coral reefs.', '#nylonpool #trinidad #tobago', 0x3c696d6720636c6173733d22696d673422207372633d222e2e2f696d672f6e796c6f6e20706f6f6c2e6a7067223e);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `title` varchar(5) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(6) NOT NULL,
  `vhobby` varchar(60) NOT NULL,
  `user` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pword` varchar(35) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`title`, `fname`, `lname`, `address`, `gender`, `vhobby`, `user`, `email`, `pword`) VALUES
('Mrs.', 'rachel', 'sadsa', 'i love to cook and look after kids', 'Female', 'Hiking, Taking Photos', 'rachel_sadsa', 'rachel@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('Mr.', 'brett', 'andrews', 'i love to play games and code', 'Male', 'Hiking, Taking Photos', 'brett_andrews', 'brett.stephen@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('Mr.', 'david', 'andre', 'i love to read and', 'Male', 'Hiking, Taking Photos', 'david_andre', 'david@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('Mr.', 'kyle', 'sam', 'i love to play football', 'Male', 'Hiking, Taking Photos', 'kyle_sam', 'kyle@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('Mrs.', 'rayya', 'andrew', 'i love to bake', 'Male', 'Hiking, Swimming, Taking Photos', 'rayya_andrews', 'rayya@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
