-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2017 at 03:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_i1booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `dest_id` bigint(20) NOT NULL,
  `destinations` varchar(250) DEFAULT NULL,
  `dest_landmark` varchar(250) DEFAULT NULL,
  `dest_description` varchar(250) DEFAULT NULL,
  `dest_interest` mediumtext,
  `thing_todo` mediumtext,
  `country` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`dest_id`, `destinations`, `dest_landmark`, `dest_description`, `dest_interest`, `thing_todo`, `country`) VALUES
(1, 'Ho Chi Minh City', 'Ho Chi Minh City.jpg', 'history, culture, markets', 'history, culture, markets', 'history, culture, markets', 'Vietnam '),
(2, 'Hanoi', 'Hanoi.jpg', 'history, culture, markets', 'history, culture, markets', 'history, culture, markets', 'Vietnam '),
(3, 'Siem Reap', 'Siem Reap.jpg', 'Prices in Siem Reap for your dates are the lowest we''ve seen in 40 days! ', 'temples, history, culture', 'history, culture, markets', 'Cambodia'),
(4, 'Phnom Penh', 'Phnom Penh.jpg', 'Prices in Siem Reap for your dates are the lowest we''ve seen in 40 days! ', 'history, culture, markets', 'history, culture, markets', 'Cambodia'),
(5, 'Bank Kok', 'Bank Kok.jpg', 'Prices in Siem Reap for your dates are the lowest we''ve seen in 40 days! ', 'beaches, sandy beaches, relaxation', 'beaches, sandy beaches, relaxation', 'Thailand'),
(6, 'Cheang Mai', 'Cheang Mai.jpg', 'Prices in Siem Reap for your dates are the lowest we''ve seen in 40 days! ', 'temples, history, culture', 'temples, history, culture', 'Thailand');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` bigint(30) NOT NULL,
  `h_name` varchar(250) DEFAULT NULL,
  `h_slug` varchar(250) DEFAULT NULL,
  `h_feature_image` varchar(250) DEFAULT NULL,
  `h_description` text,
  `h_meta_key` text,
  `h_deatail` longtext,
  `h_facilities` longtext,
  `h_address` varchar(250) DEFAULT NULL,
  `h_create` timestamp NULL DEFAULT NULL,
  `dest_id` bigint(20) DEFAULT NULL,
  `province` varchar(250) DEFAULT NULL,
  `whylike` longtext,
  `lang_spoken` longtext,
  `map` longtext,
  `what_todo` longtext,
  `h_id_cod` varchar(250) DEFAULT NULL COMMENT 'code login',
  `h_email` varchar(250) DEFAULT NULL COMMENT 'email login',
  `h_contact_name` varchar(250) DEFAULT NULL COMMENT 'Name Contact',
  `h_pass` varchar(250) DEFAULT NULL COMMENT 'Pass Login',
  `h_contact_phone` varchar(250) DEFAULT NULL COMMENT 'who controll web',
  `contact_fax` varchar(250) DEFAULT NULL COMMENT 'Hotel Fax',
  `star_rating` varchar(250) DEFAULT NULL COMMENT '5 Stars',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Date Register',
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'When Some one update',
  `h_online_status` enum('Y','N') DEFAULT NULL COMMENT 'Y for You online(Login)',
  `hotel_blocked` enum('Y','N') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `h_name`, `h_slug`, `h_feature_image`, `h_description`, `h_meta_key`, `h_deatail`, `h_facilities`, `h_address`, `h_create`, `dest_id`, `province`, `whylike`, `lang_spoken`, `map`, `what_todo`, `h_id_cod`, `h_email`, `h_contact_name`, `h_pass`, `h_contact_phone`, `contact_fax`, `star_rating`, `create_date`, `update_date`, `h_online_status`, `hotel_blocked`) VALUES
(1, 'Borie Angkor Hotel', 'ree-hotel', 'hotel_0003.jpg', 'Ree Hotel siem Reap Angkor', 'Ree Hotel,Hotel Siem Reap', 'Detail Ree Hotels', '<i class="fa fa-wifi fa-2x"></i>,\r\n<i class="fa fa-coffee fa-2x" aria-hidden="true"></i>,\r\n<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>,\r\n\r\n', 'Sala Lodge Rd, Sala Kamroeuk Village, Siem Reap, Cambodia ', '2017-06-13 12:18:46', 3, 'Siem Reap', 'Why People Like Us', 'Khmer, English', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.8118580552687!2d103.86732571398757!3d13.361971909809283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110179e476ef0d7%3A0x6ae2692e799bdcfb!2sRPITSSR!5e0!3m2!1sen!2skh!4v1500999271143" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, NULL, '(855)92771244', '(855)92771244', '2', '2017-08-24 18:30:45', '2017-08-24 18:30:45', NULL, 'N'),
(2, 'Tanei Boutique Villa agoda 2', 'ree-hotel', 'hotel_0004.jpg', 'Ree Hotel siem Reap Angkor', 'Ree Hotel,Hotel Siem Reap', 'Detail Ree Hotels', '<i class="fa fa-wifi fa-2x"></i>,\r\n<i class="fa fa-coffee fa-2x" aria-hidden="true"></i>,\r\n<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>,\r\n\r\n', 'Sala Lodge Rd, Sala Kamroeuk Village, Siem Reap, Cambodia ', '2017-06-13 12:18:46', 3, 'Siem Reap', 'Why People Like Us', 'Khmer, English', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.8118580552687!2d103.86732571398757!3d13.361971909809283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110179e476ef0d7%3A0x6ae2692e799bdcfb!2sRPITSSR!5e0!3m2!1sen!2skh!4v1500999271143" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, NULL, '(855)92771244', '(855)92771244', '3', '2017-08-19 14:40:37', '2017-08-19 14:40:37', NULL, 'N'),
(3, 'Popular Residence Hotel 3', 'ree-hotel', 'hotel_0005.jpg', 'Featuring an outdoor pool, Popular Residence offers elegant and comfortable accommodation with free WiFi access in its public areas. It operates a 24-hour front desk and provides free bike rentals.\r\n\r\nThe property is within 2 km from Angkor Trade Centre and the famous Pub Street. The UNESCO World Heritage Site of Angkor Wat Temples are 8 km away, while Siem Reap International Airport is accessible with a 10 km drive. The property offers complimentary airport transfers and one-way shuttle services to the city centre.', 'Ree Hotel,Hotel Siem Reap', '\r\n\r\nFitted with parquet flooring, air-conditioned rooms and suites include a balcony, in-room safe, a flat-screen cable TV and seating area. Electric kettle, a fridge, minibar and ironing facilities are also provided. Offering shower facility, the en suite bathroom also has bathtub, free toiletries and bathrobes.\r\n\r\nAt Popular Residence, guests may utilise the sauna facility and enjoy a relaxing massage at the spa. The friendly staff is happy to assist with laundry services, tour arrangements and business facilities. Airport transfer and shuttle service is available at a surcharge. The property offers free use of bicycles for guests who wish to explore the surrounding area.\r\n\r\nThe in-house restaurant serves a variety of local and international dishes. Barbecue facilities are provided while drinks are offered at the bar.\r\n\r\nCouples in particular like the location – they rated it 8 for a two-person trip.\r\n\r\nThis property is also rated for the best value in Siem Reap! Guests are getting more for their money when compared to other properties in this city.\r\n\r\nWe speak your language!\r\n\r\nPopular Residence Hotel has been welcoming Booking.com guests since Oct 20, 2014', '<i class="fa fa-wifi fa-2x"></i>,\r\n<i class="fa fa-coffee fa-2x" aria-hidden="true"></i>,\r\n<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>,\r\n\r\n', 'Sala Lodge Rd, Sala Kamroeuk Village, Siem Reap, Cambodia ', '2017-06-13 12:18:46', 5, 'Bank Kok', 'Why People Like Us', 'Khmer, English', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.8118580552687!2d103.86732571398757!3d13.361971909809283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110179e476ef0d7%3A0x6ae2692e799bdcfb!2sRPITSSR!5e0!3m2!1sen!2skh!4v1500999271143" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, NULL, '(855)92771244', '(855)92771244', '2', '2017-08-19 14:40:42', '2017-08-19 14:40:42', NULL, 'N'),
(4, 'Soka Angkor Hotel', 'ree-hotel', 'hotel_0007.jpg', 'Located only 7 km from the stunning Angkor Wat ruins, Le Tigre Hotel is a statuesque colonial-style villa in the heart of Siem Reap. It has an in-house restaurant and features a tropical garden and a saltwater pool. Free Wi-Fi is available.\r\n\r\nRooms feature tiled floors and blends traditional woodwork panelling with contempory furnishing. Its air-conditioned rooms offer 24-inch flat-screen TVs. There is also a well-stocked minibar and a safe box in each room.', 'Ree Hotel,Hotel Siem Reap', '\r\n\r\nLe Tigre Hotel is located in the heart of Siem Reap on Sok San Road, a lively area abundant with restaurants and locally-owned shops. It is a 3-minute ride to the Old Market, Pub Street and the Night Market. Angkor Wat is approximately 20 minutes away.\r\n\r\nGuests can enjoy many dining options at the hotel''s in-house restaurant and bar nestled within the gardens.\r\n\r\nLe Tigre offers free scheduled tuk tuk rides to Pub Street and Old Market. Staff at the reception desk can provide bicycle and car rentals.\r\n\r\nThis is our guests'' favorite part of Siem Reap, according to independent reviews.\r\n\r\nCouples in particular like the location – they rated it 9 for a two-person trip.\r\n\r\nThis property is also rated for the best value in Siem Reap! Guests are getting more for their money when compared to other properties in this city.\r\n\r\nWe speak your language!\r\n\r\nLe Tigre Hotel has been welcoming Booking.com guests since Jul 28, 2011', '<i class="fa fa-wifi fa-2x"></i>,\r\n<i class="fa fa-coffee fa-2x" aria-hidden="true"></i>,\r\n<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>,\r\n\r\n', 'Sok San Road, Steung tmay villa Siem Reap, Cambodia, Siem Reap, Cambodia ', '2017-06-13 12:18:46', 3, 'Siem Reap', 'Why People Like Us', 'Khmer, English', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.8118580552687!2d103.86732571398757!3d13.361971909809283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110179e476ef0d7%3A0x6ae2692e799bdcfb!2sRPITSSR!5e0!3m2!1sen!2skh!4v1500999271143" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, NULL, '(855)92771244', '(855)92771244', '4', '2017-08-24 18:29:10', '2017-08-24 18:29:10', NULL, 'N'),
(5, 'Green Botique Hotel', 'ree-hotel', 'hotel_0003.jpg', 'Ree Hotel siem Reap Angkor', 'Ree Hotel,Hotel Siem Reap', 'Detail Ree Hotels', '<i class="fa fa-wifi fa-2x"></i>,\r\n<i class="fa fa-coffee fa-2x" aria-hidden="true"></i>,\r\n<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>,\r\n\r\n', 'Sala Lodge Rd, Sala Kamroeuk Village, Siem Reap, Cambodia ', '2017-06-13 12:18:46', 2, 'Siem Reap', 'Why People Like Us', 'Khmer, English', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.8118580552687!2d103.86732571398757!3d13.361971909809283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110179e476ef0d7%3A0x6ae2692e799bdcfb!2sRPITSSR!5e0!3m2!1sen!2skh!4v1500999271143" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, NULL, '(855)92771244', '(855)92771244', '2', '2017-08-24 18:29:28', '2017-08-24 18:29:28', NULL, 'N'),
(6, 'Laresidan Hotel', 'ree-hotel', 'hotel_0003.jpg', 'Ree Hotel siem Reap Angkor', 'Ree Hotel,Hotel Siem Reap', 'In a striking building of Bangkok''s skyline, Amari Boulevard is in Sukhumvit 5, only a quarter mile from Nana BTS Skytrain Station. It features a roof-top pool and modern rooms with floor-to-ceiling windows and free WiFI access in all areas.', '<i class="fa fa-wifi fa-2x"></i>,\r\n<i class="fa fa-coffee fa-2x" aria-hidden="true"></i>,\r\n<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>,\r\n\r\n', 'Sala Lodge Rd, Sala Kamroeuk Village, Siem Reap, Cambodia ', '2017-06-13 12:18:46', 1, 'Siem Reap', 'Why People Like Us', 'Khmer, English', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.8118580552687!2d103.86732571398757!3d13.361971909809283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110179e476ef0d7%3A0x6ae2692e799bdcfb!2sRPITSSR!5e0!3m2!1sen!2skh!4v1500999271143" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, NULL, '(855)92771244', '(855)92771244', '0', '2017-08-24 18:29:52', '2017-08-24 18:29:52', NULL, 'N'),
(7, 'Phnom Penh Hotel', 'ree-hotel', 'hotel_0003.jpg', 'Ree Hotel siem Reap Angkor', 'Ree Hotel,Hotel Siem Reap', 'In a striking building of Bangkok''s skyline, Amari Boulevard is in Sukhumvit 5, only a quarter mile from Nana BTS Skytrain Station. It features a roof-top pool and modern rooms with floor-to-ceiling windows and free WiFI access in all areas.', '<i class="fa fa-wifi fa-2x"></i>,\r\n<i class="fa fa-coffee fa-2x" aria-hidden="true"></i>,\r\n<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>,\r\n\r\n', 'Sala Lodge Rd, Sala Kamroeuk Village, Siem Reap, Cambodia ', '2017-06-13 12:18:46', 4, 'Siem Reap', 'Why People Like Us', 'Khmer, English', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.8118580552687!2d103.86732571398757!3d13.361971909809283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110179e476ef0d7%3A0x6ae2692e799bdcfb!2sRPITSSR!5e0!3m2!1sen!2skh!4v1500999271143" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, NULL, '(855)92771244', '(855)92771244', '4', '2017-08-24 18:30:04', '2017-08-24 18:30:04', NULL, 'N'),
(8, 'Ree Hotel ', 'ree-hotel', 'hotel_0003.jpg', 'Ree Hotel siem Reap Angkor', 'Ree Hotel,Hotel Siem Reap', 'In a striking building of Bangkok''s skyline, Amari Boulevard is in Sukhumvit 5, only a quarter mile from Nana BTS Skytrain Station. It features a roof-top pool and modern rooms with floor-to-ceiling windows and free WiFI access in all areas.', '<i class="fa fa-wifi fa-2x"></i>,\r\n<i class="fa fa-coffee fa-2x" aria-hidden="true"></i>,\r\n<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>,\r\n\r\n', 'Sala Lodge Rd, Sala Kamroeuk Village, Siem Reap, Cambodia ', '2017-06-13 12:18:46', 1, 'Siem Reap', 'Why People Like Us', 'Khmer, English', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.8118580552687!2d103.86732571398757!3d13.361971909809283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110179e476ef0d7%3A0x6ae2692e799bdcfb!2sRPITSSR!5e0!3m2!1sen!2skh!4v1500999271143" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, NULL, '(855)92771244', '(855)92771244', '2', '2017-08-24 18:30:10', '2017-08-24 18:30:10', NULL, 'N'),
(9, 'Kemara Hotel', 'ree-hotel', 'hotel_0003.jpg', 'Ree Hotel siem Reap Angkor', 'Ree Hotel,Hotel Siem Reap', 'In a striking building of Bangkok''s skyline, Amari Boulevard is in Sukhumvit 5, only a quarter mile from Nana BTS Skytrain Station. It features a roof-top pool and modern rooms with floor-to-ceiling windows and free WiFI access in all areas.', '<i class="fa fa-wifi fa-2x"></i>,\r\n<i class="fa fa-coffee fa-2x" aria-hidden="true"></i>,\r\n<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>,\r\n\r\n', 'Sala Lodge Rd, Sala Kamroeuk Village, Siem Reap, Cambodia ', '2017-06-13 12:18:46', 1, 'Siem Reap', 'Why People Like Us', 'Khmer, English', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.8118580552687!2d103.86732571398757!3d13.361971909809283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110179e476ef0d7%3A0x6ae2692e799bdcfb!2sRPITSSR!5e0!3m2!1sen!2skh!4v1500999271143" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, NULL, '(855)92771244', '(855)92771244', '4', '2017-08-24 18:30:19', '2017-08-24 18:30:19', NULL, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_booking`
--

CREATE TABLE `hotel_booking` (
  `booking_id` bigint(20) NOT NULL,
  `hroom_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `room_type` varchar(250) NOT NULL,
  `max_adult` int(11) DEFAULT NULL,
  `max_child` int(11) DEFAULT NULL,
  `cus_email` varchar(250) DEFAULT NULL,
  `cus_passport` varchar(250) DEFAULT NULL,
  `cus_pickup` varchar(250) DEFAULT NULL,
  `check_in` datetime DEFAULT NULL,
  `check_out` datetime DEFAULT NULL,
  `max_day_stay` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `booking_status` set('Confirmed','Pendding','Cancelled') DEFAULT NULL,
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_facilities`
--

CREATE TABLE `hotel_facilities` (
  `hfacility_id` bigint(20) NOT NULL,
  `hotel_id` bigint(20) NOT NULL,
  `hf_name` varchar(250) DEFAULT NULL,
  `hf_image` varchar(250) DEFAULT NULL,
  `status` enum('Y','N') DEFAULT NULL,
  `hot_facilities` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_facilities`
--

INSERT INTO `hotel_facilities` (`hfacility_id`, `hotel_id`, `hf_name`, `hf_image`, `status`, `hot_facilities`) VALUES
(1, 1, ' Free Wi-Fi in all rooms', 'wifi.png', 'Y', 'Y'),
(2, 1, 'Free breakfast', 'Free breakfast.png', 'Y', 'Y'),
(3, 1, 'Spa service', 'Spa service.png', 'Y', 'Y'),
(4, 1, 'Free parking', 'Free parking.png', 'Y', 'Y'),
(5, 1, ' Sauna service', ' Sauna service.png', 'Y', 'N'),
(6, 1, ' Swimming pool', ' Swimming pool.png', 'Y', 'Y'),
(7, 1, ' Smoking area', ' Smoking area.png', 'Y', 'N'),
(8, 1, 'Hair dryer', 'Hair dryer.png', 'Y', 'Y'),
(9, 1, ' Restaurant', ' Restaurant.png', 'Y', 'N'),
(10, 1, ' Airport transfer', ' Airport transfer.png', 'Y', 'Y'),
(11, 1, 'Laundry service ', 'Laundry service .png', 'Y', 'N'),
(12, 1, '24-hour front desk', '24-hour front desk.png', 'Y', 'N'),
(13, 1, 'Casino', 'Casino.png', 'Y', 'N'),
(14, 1, 'Business center', 'Business center.png', 'Y', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_gallery`
--

CREATE TABLE `hotel_gallery` (
  `hgallery_id` bigint(20) NOT NULL,
  `hotel_id` bigint(20) NOT NULL,
  `hg_img1` varchar(250) DEFAULT NULL,
  `hg_img2` varchar(250) DEFAULT NULL,
  `hg_img3` varchar(250) DEFAULT NULL,
  `hg_img4` varchar(250) DEFAULT NULL,
  `hg_img5` varchar(250) DEFAULT NULL,
  `hg_img6` varchar(250) DEFAULT NULL,
  `hg_img7` varchar(250) DEFAULT NULL,
  `hg_img8` varchar(250) DEFAULT NULL,
  `hg_img9` varchar(250) DEFAULT NULL,
  `hg_img10` varchar(250) DEFAULT NULL,
  `hg_img11` varchar(250) DEFAULT NULL,
  `hg_img12` varchar(250) DEFAULT NULL,
  `hg_img13` varchar(250) DEFAULT NULL,
  `hg_img14` varchar(250) DEFAULT NULL,
  `hg_img15` varchar(250) DEFAULT NULL,
  `hg_img16` varchar(250) DEFAULT NULL,
  `hg_img17` varchar(250) DEFAULT NULL,
  `hg_img18` varchar(250) DEFAULT NULL,
  `hg_img19` varchar(250) DEFAULT NULL,
  `hg_img20` varchar(250) DEFAULT NULL,
  `hg_img21` varchar(250) DEFAULT NULL,
  `hg_img22` varchar(250) DEFAULT NULL,
  `hg_img23` varchar(250) DEFAULT NULL,
  `hg_img24` varchar(250) DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_gallery`
--

INSERT INTO `hotel_gallery` (`hgallery_id`, `hotel_id`, `hg_img1`, `hg_img2`, `hg_img3`, `hg_img4`, `hg_img5`, `hg_img6`, `hg_img7`, `hg_img8`, `hg_img9`, `hg_img10`, `hg_img11`, `hg_img12`, `hg_img13`, `hg_img14`, `hg_img15`, `hg_img16`, `hg_img17`, `hg_img18`, `hg_img19`, `hg_img20`, `hg_img21`, `hg_img22`, `hg_img23`, `hg_img24`, `last_update`) VALUES
(1, 1, 'angkor-attic-villa-1.jpg', 'angkor-attic-villa-4.jpg', 'angkor-attic-villa-3.jpg', 'angkor-attic-villa-4.jpg', 'angkor-attic-villa-5.jpg', 'angkor-attic-villa-6.jpg', 'angkor-attic-villa-7.jpg', 'angkor-attic-villa-8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-31 20:06:32'),
(2, 2, 'angkor-attic-villa-1.jpg', 'angkor-attic-villa-2.jpg', 'angkor-attic-villa-3.jpg', 'angkor-attic-villa-4.jpg', 'angkor-attic-villa-5.jpg', 'angkor-attic-villa-6.jpg', 'angkor-attic-villa-7.jpg', 'angkor-attic-villa-8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-31 19:34:03'),
(3, 3, 'angkor-attic-villa-1.jpg', 'angkor-attic-villa-2.jpg', 'angkor-attic-villa-3.jpg', 'angkor-attic-villa-4.jpg', 'angkor-attic-villa-5.jpg', 'angkor-attic-villa-6.jpg', 'angkor-attic-villa-7.jpg', 'angkor-attic-villa-8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-31 19:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_rooms`
--

CREATE TABLE `hotel_rooms` (
  `hroom_id` bigint(20) NOT NULL,
  `hotel_id` bigint(20) NOT NULL,
  `rt_id` bigint(20) NOT NULL COMMENT 'Room Type',
  `hr_name` varchar(250) DEFAULT NULL,
  `hr_image` varchar(250) DEFAULT NULL,
  `hr_description` mediumtext,
  `amenities` mediumtext COMMENT 'What is there in this room',
  `hr_max` int(11) DEFAULT NULL COMMENT 'How many rooms?',
  `hr_base_rate` decimal(10,2) DEFAULT NULL COMMENT 'Base Rate For Sell',
  `hr_status` enum('Y','N') DEFAULT NULL COMMENT 'Y for Sell, N not Sell'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_rooms`
--

INSERT INTO `hotel_rooms` (`hroom_id`, `hotel_id`, `rt_id`, `hr_name`, `hr_image`, `hr_description`, `amenities`, `hr_max`, `hr_base_rate`, `hr_status`) VALUES
(1, 1, 1, 'Deluxe Room', '1 (1).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 2, '200.00', 'N'),
(2, 1, 2, 'Twin Room', '1 (2).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(3, 1, 3, 'Twin Room', '1 (3).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(4, 2, 1, 'Twin Room', '1 (4).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(5, 2, 2, 'Twin Room', '1 (5).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(6, 2, 3, 'Twin Room', '1 (6).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(7, 3, 1, 'Twin Room', '1 (1).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(8, 3, 2, 'Twin Room', '1 (1).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(9, 3, 3, 'Twin Room', '1 (1).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(10, 4, 1, 'Twin Room', '1 (3).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(11, 4, 2, 'Twin Room', '1 (3).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(12, 5, 3, 'Twin Room', '1 (3).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(13, 5, 1, 'Twin Room', '1 (6).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y'),
(14, 6, 2, 'Twin Room', '1 (6).jpg', 'adfsdfasdfsd', 'WiFi,Car Park', 3, '220.00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room_gallery`
--

CREATE TABLE `hotel_room_gallery` (
  `hrgallery_id` bigint(20) NOT NULL,
  `hroom_id` bigint(20) NOT NULL,
  `hrg_image1` varchar(250) DEFAULT NULL,
  `hrg_image2` varchar(250) DEFAULT NULL,
  `hrg_image3` varchar(250) DEFAULT NULL,
  `hrg_image4` varchar(250) DEFAULT NULL,
  `hrg_image5` varchar(250) DEFAULT NULL,
  `hrg_image6` varchar(250) DEFAULT NULL,
  `hrg_image7` varchar(250) DEFAULT NULL,
  `hrg_image8` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`) VALUES
(16, 'Title 1', 'Description'),
(17, 'Title 2', 'Description'),
(18, 'Title 3', 'Description');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created`, `modified`, `status`) VALUES
(1, 'Title 1', 'Content 1', '2017-08-10 09:19:47', '2017-08-10 09:19:48', 1),
(2, 'Title 2', 'Content  2', '2017-08-10 09:19:47', '2017-08-10 09:19:48', 1),
(3, 'Title 3', 'Content 3', '2017-08-10 09:19:47', '2017-08-10 09:19:48', 1),
(4, 'Title 4', 'Content 3', '2017-08-10 09:19:47', '2017-08-10 09:19:48', 1),
(5, 'Title 5', 'Content 3', '2017-08-10 09:19:47', '2017-08-10 09:19:48', 1),
(6, 'Title 6', 'Content 3', '2017-08-10 09:19:47', '2017-08-10 09:19:48', 1),
(7, 'Title 7', 'Content 3', '2017-08-10 09:19:47', '2017-08-10 09:19:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `rt_id` int(11) NOT NULL,
  `rt_name` varchar(250) DEFAULT NULL,
  `rt_image` varchar(250) DEFAULT NULL,
  `rt_note` varchar(250) DEFAULT NULL,
  `rt_status` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`rt_id`, `rt_name`, `rt_image`, `rt_note`, `rt_status`) VALUES
(1, 'Room Type 1', 'bed1.png', NULL, 'Y'),
(2, 'Room Type 2', 'bed2.png', NULL, 'Y'),
(3, 'Room Type 3', 'bed3.png', NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `selling_rooms`
--

CREATE TABLE `selling_rooms` (
  `sell_room_id` bigint(20) NOT NULL,
  `hroom_id` bigint(20) NOT NULL,
  `hotel_id` bigint(20) NOT NULL,
  `rt_id` bigint(20) NOT NULL COMMENT 'Room Type ID',
  `sell_day` varchar(50) DEFAULT NULL,
  `sell_month` varchar(50) DEFAULT NULL,
  `sell_year` year(4) DEFAULT NULL,
  `sell_date` datetime DEFAULT NULL,
  `base_rate` decimal(10,2) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `room_sell` int(11) DEFAULT NULL COMMENT 'Room For Sell',
  `room_sold` int(11) DEFAULT NULL COMMENT 'Room Already Sell',
  `room_closed` enum('Y','N') DEFAULT NULL,
  `room_status` enum('Y','N') DEFAULT NULL COMMENT 'Room Avalable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` bigint(20) NOT NULL,
  `gro_id` int(11) DEFAULT NULL,
  `unique_id` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `encrypted_password` varchar(50) DEFAULT NULL,
  `salt` varchar(50) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  `note` text,
  `user_create` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_update` varchar(50) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `image` varchar(150) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `gro_id`, `unique_id`, `name`, `email`, `encrypted_password`, `salt`, `status`, `note`, `user_create`, `created_date`, `user_update`, `updated_date`, `image`) VALUES
(8, 3, '15150909161614739471431473947143', 'anhsheth', 'anhsheth@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, b'1', NULL, 3, '2016-09-16 11:18:20', NULL, NULL, 'default.jpg'),
(11, 3, '15150909161614739481911473948191', 'SENG Sourng', 'sourng@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, b'1', NULL, 3, '2016-09-16 11:18:22', NULL, NULL, 'default.jpg'),
(12, 3, '19190909161614742620121474262012', 'anhsheth', 'anhsheth@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, b'1', NULL, 3, '2016-09-19 05:13:32', NULL, NULL, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id_group` smallint(4) UNSIGNED NOT NULL,
  `level` int(11) NOT NULL,
  `group_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `description` tinytext COLLATE utf8_unicode_ci,
  `controller_id` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='0.9.7';

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id_group`, `level`, `group_name`, `status`, `description`, `controller_id`) VALUES
(1, 1, 'Admin', b'1', 'Who Register Admin User', '1'),
(3, 3, 'Guest', b'1', 'Who Register Online', '3'),
(4, 2, 'Teacher', b'1', 'Who Register Admin User', '2'),
(5, 4, 'Student', b'1', 'Who Register Online', '4');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_list_hotels`
--
CREATE TABLE `v_list_hotels` (
`hotel_id` bigint(30)
,`h_name` varchar(250)
,`h_feature_image` varchar(250)
,`h_address` varchar(250)
,`h_facilities` longtext
,`h_description` text
,`star_rating` varchar(250)
,`destinations` varchar(250)
,`amenities` mediumtext
,`hr_base_rate` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Structure for view `v_list_hotels`
--
DROP TABLE IF EXISTS `v_list_hotels`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_list_hotels`  AS  select `h`.`hotel_id` AS `hotel_id`,`h`.`h_name` AS `h_name`,`h`.`h_feature_image` AS `h_feature_image`,`h`.`h_address` AS `h_address`,`h`.`h_facilities` AS `h_facilities`,`h`.`h_description` AS `h_description`,`h`.`star_rating` AS `star_rating`,`dest`.`destinations` AS `destinations`,`hr`.`amenities` AS `amenities`,`hr`.`hr_base_rate` AS `hr_base_rate` from ((`hotels` `h` join `destinations` `dest` on((`dest`.`dest_id` = `h`.`dest_id`))) join `hotel_rooms` `hr` on((`h`.`hotel_id` = `hr`.`hotel_id`))) where (`h`.`hotel_blocked` = 'N') group by `h`.`hotel_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`dest_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_booking`
--
ALTER TABLE `hotel_booking`
  ADD PRIMARY KEY (`booking_id`,`hroom_id`,`customer_id`);

--
-- Indexes for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  ADD PRIMARY KEY (`hfacility_id`,`hotel_id`);

--
-- Indexes for table `hotel_gallery`
--
ALTER TABLE `hotel_gallery`
  ADD PRIMARY KEY (`hgallery_id`,`hotel_id`);

--
-- Indexes for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  ADD PRIMARY KEY (`hroom_id`,`hotel_id`,`rt_id`);

--
-- Indexes for table `hotel_room_gallery`
--
ALTER TABLE `hotel_room_gallery`
  ADD PRIMARY KEY (`hrgallery_id`,`hroom_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`rt_id`);

--
-- Indexes for table `selling_rooms`
--
ALTER TABLE `selling_rooms`
  ADD PRIMARY KEY (`sell_room_id`,`hroom_id`,`hotel_id`,`rt_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `unique_id` (`unique_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `dest_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hotel_booking`
--
ALTER TABLE `hotel_booking`
  MODIFY `booking_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  MODIFY `hfacility_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `hotel_gallery`
--
ALTER TABLE `hotel_gallery`
  MODIFY `hgallery_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  MODIFY `hroom_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `hotel_room_gallery`
--
ALTER TABLE `hotel_room_gallery`
  MODIFY `hrgallery_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `rt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `selling_rooms`
--
ALTER TABLE `selling_rooms`
  MODIFY `sell_room_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id_group` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
