-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2023 at 05:21 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'keyuri', '123456'),
(2, 'khushi', '234567'),
(3, 'diyansi', '456789');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
('C01', 'Hanging Light', 'A hanging light, sometimes called a drop or suspender, is a lone light fixture that hangs from the ceiling usually suspended by a cord, chain, or metal rod. Pendant lights are often used in multiples, hung in a straight line over kitchen countertops'),
('C02', 'Indoor Light', 'What is indoor lighting? These fixtures are exactly what you think they are: Any lamp, pendant, or fixture used to illuminate your home interiors. They are typically made not just to brighten your space, but to add decor and overall enhance your current'),
('C03', 'Wall Lamp', 'A Wall Light / Sconce is an indoor, decorative lighting fixture that is placed on walls to accent them or to provide direct or indirect lighting. The word, \'Sconce\' means a wall bracket that holds a candle or group of candles.'),
('C04', 'Decorative Light', 'Decorative Lighting – It is the fourth layer of lighting which helps you illuminate the entire room instead of focusing on one particular area/object of the room. They can also serve the purposes of accent or task lighting in some cases while being less i'),
('C05', 'Floor Lamp', 'Floor lamps can either be used as a stand-alone lighting solution to focus on a particular spot in a room or with other lights that are in the same family. They complement all types of lights – from romantic chandeliers to table lamps.'),
('C06', 'Gate Light', 'A gate or gateway is a point of entry to or from a space enclosed by walls. The word derived from old Norse \"gat\" meaning road or path; But other terms include yett and port. The concept originally referred to the gap or hole in the wall or fence, rather '),
('C07', 'Outdoor Light', 'A outdoor light or garden lantern is a free standing exterior light fixture in gardens and landscaped settings. They are usually illuminated by electricity, but occasionally natural gas, and are usually placed near an outdoor path or driveway to provide v');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_pincode` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_contactno` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_added_on` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_gender`, `customer_email`, `customer_password`, `customer_address`, `customer_pincode`, `customer_contactno`, `customer_added_on`) VALUES
(1, 'Keyuri Patel', 'female', 'patelkeyuri2002@gmail.com', '123456', 'B-07, Ambika Society, Near Khodiyar Tample, Chandlodiya, Ahmedabad', '382481', '8735467867', '2023-02-11 04:11:08'),
(2, 'Khush Chokshi', 'male', 'khush123@gmail.com', '456789', 'A/203, Aashka Elegunce, Vandematram, Gota, Ahmedabad', '382350', '9835462765', '2023-02-12 12:41:26'),
(3, 'Diyanshi Mangukiya', 'female', 'diyanshi123@gmail.com', 'diyanshi', 'E-02, Kailash Avenue, Drive-in Road, Ahmedabad', '368745', '8735467867', '2023-02-22 09:59:59'),
(4, 'Kaushal Mishtri', 'male', 'kaushal1999@gmail.com', 'kaushal', 'D-19, Bhramachari Vila, Behind Sola Bhagvat, Sola, Ahmedabad', '345678', '9256873019', '2023-02-27 01:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int NOT NULL AUTO_INCREMENT,
  `feedback_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `feedback_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `feedback_subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `feedback_message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `feedback_added_on` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_name`, `feedback_email`, `feedback_subject`, `feedback_message`, `feedback_added_on`) VALUES
(1, 'Keyuri Patel', 'patelkeyuri2002@gmail.com', 'About Your Service', 'I am really happy to your service. My festival is made very beautiful by your beautiful lights. I will do continue shopping with you. Really your products are very greatfull.', '2023-02-12 12:38:10'),
(2, 'Kaushal Mishtri', 'kaushal1999@gmail.com', 'Fast Delivery', 'Good value, quick delivery and plastic free packaging on the product I received - first time I ordered from this company but I hope they have plastic free packaging on other products too.', '2023-02-20 01:47:01'),
(3, 'Amit Gopal', 'amitgopal@gmail.com', 'Amazing Product', 'Looks fabulous in the kitchen, not over an island or table just suspended from the ceiling with the horizontal bar tweaked to an angle at the hinge. A beautifully engineered and designed light fitting - delighted with it. Robustly packed and promptly deli', '2023-02-20 01:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_pincode` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_contactno` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `added_on` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `customer_id_idx` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `customer_address`, `customer_pincode`, `customer_email`, `customer_contactno`, `payment_type`, `payment_status`, `order_status`, `total_price`, `added_on`) VALUES
(1, 1, 'B/27, Ambika Society, Near Khodiyar Temple, Chandlodiya, Ahmedabad', '382481', 'keyuri@gmail.com', '8367356712', 'creditcard', 'success', 'Shipped', '3747', '2023-02-22 03:43:50'),
(2, 2, 'A/203, Aashka Elegunce, Vandematram, Gota, Ahmedabad', '382421', 'kaushal1999@gmail.com', '9824563728', 'debitcard', 'pending', 'Canceled', '1598', '2023-02-25 04:22:05'),
(3, 3, 'E-02, Kailash Avenue, Drive-In Road, Ahmedabad', '382350', 'diyanshi123@gmail.com', '7234567878', 'creditcard', 'success', 'Processing', '3048', '2023-02-25 05:55:38'),
(4, 4, 'D-19, Bhramachari Vila, Behind Sola Bhagvat, Sola, Ahmedabad', '345678', 'kaushal1999@gmail.com', '8367356712', 'debitcard', 'pending', 'Processing', '10264', '2023-02-27 01:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_detail_id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` varchar(3) NOT NULL,
  `product_qauntity` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `added_on` varchar(255) NOT NULL,
  PRIMARY KEY (`order_detail_id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_id`, `product_id`, `product_qauntity`, `product_price`, `added_on`) VALUES
(1, 1, 'P13', '4', '1249', '2023-02-22 03:43:50'),
(2, 2, 'P44', '2', '799', '2023-02-25 04:22:05'),
(3, 3, 'P44', '2', '799', '2023-02-25 05:55:38'),
(4, 3, 'P50', '2', '725', '2023-02-25 05:55:38'),
(5, 4, 'P43', '1', '7900', '2023-02-27 01:09:11'),
(6, 4, 'P28', '1', '2364', '2023-02-27 01:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

DROP TABLE IF EXISTS `order_status`;
CREATE TABLE IF NOT EXISTS `order_status` (
  `id` int NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Shipped'),
(4, 'Canceled'),
(5, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `cardholder_name` varchar(255) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `expiry_month` varchar(255) NOT NULL,
  `expiry_year` varchar(255) NOT NULL,
  `payment_added_on` varchar(255) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `cardholder_name`, `card_number`, `cvv`, `expiry_month`, `expiry_year`, `payment_added_on`) VALUES
(1, 'Keyuri Patel', '8245339467102387', '345', '03', '29', '2023-02-22 01:21:25'),
(2, 'Khush Chokshi', '9267429367274536', '637', '11', '27', '2023-02-25 04:21:55'),
(3, 'Diyanshi Mangukiya', '6372835469203456', '546', '09', '30', '2023-02-25 05:54:35'),
(4, 'Kaushal Mishtri', '9826370489152738', '367', '08', '28', '2023-02-27 01:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `subcategory_id` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_image2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_image3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_image4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `subcategory_id` (`subcategory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `subcategory_id`, `product_name`, `product_price`, `product_quantity`, `product_description`, `product_image`, `product_image2`, `product_image3`, `product_image4`) VALUES
('P01', 'S01', 'BTR Craft Drum Hanging Lamp', '1329', '200', 'BTR Crafts is a brand provides wide range of lamp shades . We are manufacture & supplier all kind fabric, designed hanging lamp to décor your home, office, hotels, party, gardens , for occasions also etc.', 'C01product-1(1).webp', 'C01product-1(2).webp', 'C01product-1(3).webp', ''),
('P02', 'S01', 'Homesake Birds Hanging Lamp', '759', '200', 'The hanging light\'s metal Frame with anti-rust.Metal cage lights\'woven sepak takraw pendant light can soften the light to protect the eyes or dust-proof, The farmhouse light fixture is perfectly for hallyway,entryway,bedroom,bathroom,resturant, carport,is', 'C01product-2(1).webp', 'C01product-2(2).webp', 'C01product-2(3).webp', ''),
('P03', 'S01', 'Fos Lighting Hanging Lamp', '1137', '100', 'This single light ceiling hanging features a hand-stitched drum-shaped brown hanging shade wrapped in supple leather. Its stunning yet simple design provides a striking display of contemporary decor. It is an ideal choice for adding the finishing touch to', 'C01product-3(1).webp', 'C01product-3(2).webp', 'C01product-3(3).webp', ''),
('P04', 'S01', 'Crafts Green Hanging Lamp', '1029', '225', 'BTR Crafts is a brand provides wide range of lamp shades . We are manufacture & supplier all kind fabric, designed hanging lamp to décor your home, office, hotels, party, gardens , for occasions also etc.', 'C01product-4(1).webp', 'C01product-4(2).webp', 'C01product-4(3).webp', 'C01product-4(4).webp'),
('P05', 'S01', 'Cotton drum Hanging Lamp', '1399', '175', 'Devansh Fabric hanging Lamps are going to Enhnace the beauty of your House', 'C01product-5(1).webp', 'C01product-5(2).webp', 'C01product-5(3).webp', 'C01product-5(4).webp'),
('P06', 'S01', 'Retro Iron Chandelier', '1790', '210', 'Ceiling Lamp Light, Retro Industrial Chandelier Rustic Rope Hemp Dining Lighting Pendant Lamp (Bulb Not Included, Beige)', 'C01product-6.webp', '', '', ''),
('P07', 'S01', 'Nutcase Hanging Lights', '1599', '195', 'Now add a touch of design and color to your living room, bedroom or dining room with this center piece worthy designer ceiling hanging lamps/lights. Made with life-proof fabric this big shade is 15 inchesin size and drum shaped. Nutcase lamps look beautif', 'C01product-7(1).webp', 'C01product-7(2).webp', '', ''),
('P08', 'S01', 'Round Hanging Pendants', '2060', '100', 'Easily revitalize the look of any room in the house with the Addington Park Roaten Collection 3-Light Pendant. The traditional drum style gets a fresh twist with a layered shade effect. An outer cage of delicate circles surrounds a smaller inner shade of', 'C01product-8(1).webp', 'C01product-8(2).webp', 'C01product-8(3).webp', 'C01product-8(4).webp'),
('P09', 'S02', '3-Light Cage Pendant', '890', '175', 'Illuminate your dining room or living room with this striking cluster pendant features three graduated Cube shaped lights suspended from a round plate on black-finished rods artfully displayed at different heights. Rich, rustic, and unmistakably stylish, ', 'C02product-2(1).webp', 'C02product-2(2).webp', 'C02product-2(3).webp', 'C02product-2(4).webp'),
('P10', 'S02', 'Homesake Ceiling Lamp', '2659', '150', 'Illuminate your dining room or living room with this striking cluster pendant features three graduated Globe shaped Homesake fashionable and Modern aesthetic Design Pendant Hanging Light for Ceiling suspended from a round plate on black-finished strong wi', 'C02product-3(1).webp', 'C02product-3(2).webp', 'C02product-3(3).webp', 'C02product-3(4).webp'),
('P100', 'S20', 'Tradehood Dimmable Mirror Bulb', '999', '175', 'Easy to Install and USB Cable Design：The led mirror lights for vanity with strong 3M double-sided tapes can be directly sticked on the mirror or mirror frame and torn off without any trace. The USB cable design support multiple charging options (USB charg', 'S20product-5(1).webp', '', '', ''),
('P101', 'S20', 'KRIVAZ Glass Mirror Light', '1999', '165', 'KRIVAZ Glass Mirror Modern Led Light Mirror for Bathroom, Washbasin, Kitchen, Drawing Room Home Makeup Led Light Mirror Touch Sensor[Vertical] 18\" X24\"', 'S20product-6(1).webp', '', '', ''),
('P102', 'S20', 'SmileSellers Led Mirror Light', '2599', '195', 'Beautiful led wall mirror for dressing, bedroom, and living room practical, modern, and stylish combination of a led wall mirror.', 'S20product-7(1).webp', '', '', ''),
('P103', 'S21', 'Flush Mount Crystal Ceiling Light', '1965', '150', 'It comes with a handy installation bundle that makes it extremely simple to set up. This crystal ceiling light is appropriate for use in hallways, entryways, closet rooms, bedrooms, children\'s rooms, kitchens, aisles, hotels, and passageways, among other ', 'S21product-1(1).webp', 'S21product-1(2).webp', 'S21product-1(3).webp', ''),
('P104', 'S21', 'Mahganya Round Crystal Light', '490', '150', 'Fine vintage ambiance: add an elegant, vintage touch to your house with the rustic rope and edison bulbs. The warm light they give off recaptures the glorious days of antiquity. Any space with these nostalgic edison bulbs would turn into an instant conver', 'S21product-2(1).webp', 'S21product-2(2).webp', 'S21product-2(3).webp', 'S21product-2(4).webp'),
('P105', 'S21', 'Crystal Chandelier Modern Light', '2899', '100', 'This Chandelier is made up of Crystals to give yout living room/bed room/hall an aesthetically pleasing look;The ceiling fixture comes with a square base with lights that could be mounted up against the ceiling', 'S21product-3(1).webp', 'S21product-3(2).webp', '', ''),
('P106', 'S21', 'Modern Chandelier', '2999', '125', 'The ceiling fixture comes with a rectangular base with lights that could be mounted up against the ceiling', 'S21product-4(1).webp', 'S21product-4(2).webp', '', ''),
('P107', 'S21', 'Swanart Crystal Pendant', '2599', '170', 'This pendant lighting is designed with superior quality and hand-picked K9 crystals which make this chandelier extremely glittering and shinning which is far more stunning than the picture.', 'S21product-5(1).webp', 'S21product-5(2).webp', 'S21product-5(3).webp', 'S21product-5(4).webp'),
('P108', 'S21', 'Ganesharter Modern Crystal Light', '2299', '185', 'Ganesharter Modern Crystal Hanging Ring Foyer Circular Chandelier LED Light Fixtures Pendant Lights (8.5 inch Diameter, Warm White)', 'S21product-6(1).webp', 'S21product-6(2).webp', 'S21product-6(3).webp', ''),
('P109', 'S21', 'Crystal Chandelier', '1499', '100', '8 Inch K9 Crystal Chandelier For Living Room Ceiling Light (8 Inch, Warm White)(Ac)', 'S21product-7(1).webp', '', '', ''),
('P11', 'S02', 'Filament Bulb Pendants Lamp', '2374', '130', 'Illuminate your dining room or living room with this striking cluster pendant features three graduated Steel wire mesh lights suspended from a round plate on black-finished rods artfully displayed at different heights. Rich, rustic, and unmistakably styli', 'C02product-4(1).webp', 'C02product-4(2).webp', 'C02product-4(3).webp', 'C02product-4(4).webp'),
('P110', 'S21', 'Round Crystal Chandelier', '1999', '200', '8Inch 3LayerRound Warmwhite Crystal Chandelier for Living Room Modern Ceiling Light for Hall Dining Room Led Fixtures Hanging Ring Pendent', 'S21product-8(1).webp', 'S21product-8(2).webp', '', ''),
('P111', 'S22', 'Antique Turkish Pendant', '999', '175', 'This hanging light fixture comes fitted with an imported E-27 bulb holder and features a 40 inch fully adjustable cord, allowing you to customize the fixture to your lighting needs and desired look and a canopy for the ceiling', 'S22product-1(1).webp', 'S22product-1(2).webp', 'S22product-1(3).webp', 'S22product-1(4).webp'),
('P112', 'S22', 'Christmas Vintage Light', '499', '150', 'The outdoor decorative lantern equipped with brackets, you can not only put it on the tabletop, but also hang it on wall. The beautiful glow creats a soft and welcoming ambience.', 'S22product-2(1).webp', 'S22product-2(2).webp', '', ''),
('P113', 'S22', 'Gunendra Lamp', '899', '150', 'Made under MAKE IN INDIA initiative, with the primary aim of making India a major manufacuting hub in the world', 'S22product-3(1).webp', 'S22product-3(2).webp', '', ''),
('P114', 'S22', 'HusNain Wooden Lamp', '399', '135', 'These Are a Lovely Item for decoration You Can Use It Anywhere In Your Home, office, Restaurant , Home Decoration Item , Room Decoration item , Living room decor , Festival decoration item , Diwali Lights for Decoration , Diwali Gift Light Decoration etc.', 'S22product-4(1).webp', 'S22product-4(2).webp', 'S22product-4(3).webp', 'S22product-4(4).webp'),
('P115', 'S22', 'Antique Hanging', '499', '175', 'Designer International Antique Collection Decorative Sweetheart Square Hanging Lantern/Lamp with t-Light Candle, Set of 2 (SkyBlue)', 'S22product-5(1).webp', 'S22product-5(2).webp', '', ''),
('P116', 'S22', 'Mughal Style Retro Lamp', '699', '155', 'Prop It Up SGE Mughal Style Retro Glass Wall Lamp Light for Home Cafe', 'S22product-6(1).webp', 'S22product-6(2).webp', 'S22product-6(3).webp', 'S22product-6(4).webp'),
('P117', 'S23', 'Star Curtain LED Lights', '599', '175', 'Perfect to decorate your house, room, garden, tree,.6.6Ft x 3.3Ft star curtain string lights with 138 LEDs, power line length is 5.3Ft. For christmas, diwali, wedding ceremony, valentine\'s day, birthday party and other festivals or celebrations at home, r', 'S23product-1(1).webp', 'S23product-1(2).webp', '', ''),
('P118', 'S23', 'Yellow Blub Lights', '250', '150', '16 LEDs Spring Coil Light String Metal Lamp Shape Fairy String Lights Indoor,Party,Patio, Bedroom,Christmas Tree,Decorative Lights/Diwali String Light Golden', 'S23product-2(1).webp', 'S23product-2(2).webp', 'S23product-2(3).webp', ''),
('P119', 'S23', 'Yellow Bee Lights', '299', '125', 'A Unique and beautyful 5m Honey Bee fairy Light for Bedroom Home Decor Festival Birthday Occasion Wedding Party Valentine Dates Anniversary Christmas Decor Diwali , You can Easily Decorate your favorite places with this Honey Bee String Light, you can Mak', 'S23product-3(1).webp', 'S23product-3(2).webp', 'S23product-3(3).webp', ''),
('P12', 'S02', 'Lights Hanging Ceiling Lamp', '618', '175', 'Home Decor Set of 3 Pendant lights Chandelier. These stylish lights will give a rich look to your home as well as restaurant , office , bar, Cafe and shop.These stylish lights adds a luxurious touch to your place. Further, this pretty lamp will enrich the', 'C02product-5(1).webp', 'C02product-5(2).webp', 'C02product-5(3).webp', ''),
('P120', 'S23', 'Yellow Star Lights', '249', '165', 'Star string lights can be used for indoor/outdoor parties, Birthday, Diwali, Christmas, Navratri, Valentine Gift, Home Decoration, garden, trees, cafe, music bars, wedding, birthday, school party, concerts, stage, etc. star string lights can also be used ', 'S23product-4(1).webp', 'S23product-4(2).webp', 'S23product-4(3).webp', ''),
('P121', 'S24', 'Lord Ganesa Creative Shadow lamp', '2299', '125', 'Wrapped in soft paper and packed with bubble wrap and card board box for reaching you safely', 'S24product-1(1).webp', 'S24product-1(2).webp', 'S24product-1(3).webp', ''),
('P122', 'S24', 'Buddha Design Creative Shadow lamp', '2499', '125', 'Wrapped in soft paper and packed with bubble wrap and card board box for reaching you safely', 'S24product-2(1).webp', 'S24product-2(2).webp', 'S24product-2(3).webp', ''),
('P123', 'S24', 'Mandala Art Creative Shadow lamp', '2149', '125', 'Wrapped in soft paper and packed with bubble wrap and card board box for reaching you safely', 'S24product-3(1).webp', 'S24product-3(2).webp', 'S24product-3(3).webp', ''),
('P124', 'S24', 'Decorative Kalash Shadow Lamp', '2359', '125', 'Wrapped in soft paper and packed with bubble wrap and card board box for reaching you safely', 'S24product-4(1).webp', 'S24product-4(2).webp', 'S24product-4(3).webp', ''),
('P125', 'S24', 'Fly High Wings Shadow Lamp', '2099', '125', 'Wrapped in soft paper and packed with bubble wrap and card board box for reaching you safely', 'S24product-5(1).webp', 'S24product-5(2).webp', 'S24product-5(3).webp', ''),
('P126', 'S25', 'Cone Shade Swing Lamp', '1299', '175', '2-in-1 DESIGN: the 2-in-1 design of this fixture allows you to install it as a plug in so you can move it easily or hardwire it in place for a long lasting look！(94.5in plug wire is included)', 'S25product-1(1).webp', 'S25product-1(2).webp', 'S25product-1(3).webp', ''),
('P127', 'S25', 'Lyse Decor Swing Arm Light', '799', '100', 'India Brand:- Lyse Decor , Material: Steel & Glass, Color :- White & Silver; Bulb Type:- E-27 bulb holder (Bulb Not Included) , Want to Buy Suitable Bulb in 3 Lighting Modes Search These Words \" B08K4PW9PY \" ( Up to 14 Watt LED Bulb can be used with this ', 'S25product-2(1).webp', 'S25product-2(2).webp', '', ''),
('P128', 'S25', 'Antique Swing Light', '324', '150', 'A convenient installation pack - pendant light comes with everything you need to install (canopy, a black cord with metal base cap), around 15 minutes is enough to get the job done Decoration - best suited for dining table, kitchen, balcony, bar table, gi', 'S25product-3(1).webp', 'S25product-3(2).webp', 'S25product-3(3).webp', ''),
('P129', 'S25', 'Modern Black Arm Light', '1748', '165', 'Made of high-quality brass and iron and baking paint finish, our swing arm wall lamps are well build and very solid. They are anti-rust and won\'t fade', 'S25product-4(1).webp', 'S25product-4(2).webp', 'S25product-4(3).webp', ''),
('P13', 'S02', 'Antique Rope Chandelier', '1249', '150', 'Bright Lite Solution’s Antique Pendant Hanging Lamp Crafted From High Quality Metal & Rope , Provide A Perfect Match of Trending and Traditional look of Ceiling Lamp. It can be hang on the Ceiling of the Living Room or over your Dining Table etc. Height o', 'C02product-6(1).webp', 'C02product-6(2).webp', 'C02product-6(3).webp', 'C02product-6(4).webp'),
('P130', 'S25', 'Wood-Man Swing Arm Light', '599', '120', 'It\'s also a great size for mounting over a desk or study table. The swing arm design makes it easy to adjust the angle of the light, so you can position it where you need it most.;With features like a frosted white shade and best-in-class LEDs, this light', 'S25product-5(1).webp', 'S25product-5(2).webp', 'S25product-5(3).webp', 'S25product-5(4).webp'),
('P131', 'S25', 'Nauticaz Modern Swing Arm Lamp', '2200', '175', 'Modern Swing Arm Wall Lamp Brushed Brass Gold Metal Plug-in Light Fixture Adjustable Cylinder Down Living Room Home Hallway Dining', 'S25product-6(1).webp', 'S25product-6(2).webp', 'S25product-6(3).webp', 'S25product-6(4).webp'),
('P132', 'S25', 'Italian Swing Lamp', '2800', '100', '2 Light Italian wall Sconce - Handmade Brass Adjustable Wall Light Fixture', 'S25product-7(1).webp', 'S25product-7(2).webp', 'S25product-7(3).webp', 'S25product-7(4).webp'),
('P133', 'S25', 'DECOR Swing Arm Light', '450', '110', 'ATHARV DECOR Swing Arm Wall Light Wall Lamp Copper Antic E27 Holder Trendy', 'S25product-8(1).webp', 'S25product-8(2).webp', 'S25product-8(3).webp', 'S25product-8(4).webp'),
('P134', 'S26', 'Sky Dome Torchiere Light', '2399', '115', 'Super Bright LED Lighting: Brightech floor lamp built-in LED light with 3200 Lumens is enough to light your living room. Powered with 3 LED bulbs - 16W / 1600 lumens, 2 x 9.5W / 800 lumens- the floor lamp generates 3000K warm white colors. Whether you wan', 'S26product-1(3).webp', 'S26product-1(2).webp', 'S26product-1(1).webp', 'S26product-1(4).webp'),
('P135', 'S26', 'Susan Modern Light', '1599', '100', 'Floor Lamp by Light Accents - Susan Modern Standing Floor Lamp for Living Room/Office Lamp 72\" Tall - 150-watt with Side Reading Light - Torchiere (Black)', 'S26product-2(1).webp', 'S26product-2(2).webp', '', ''),
('P136', 'S26', 'Light Tree Floor Lamp', '2299', '125', '3 Lights each with its own rotary switch. Lamp shades rotate to change direction of lighting.', 'S26product-3(1).webp', 'S26product-3(2).webp', 'S26product-3(3).webp', 'S26product-3(4).webp'),
('P137', 'S26', 'CITRA Gold Floor Led Ring', '1699', '110', 'Classic Design: Flexible architect swing arm floor standing lamp which makes it easy to find the perfect lighting angle, perfectly for reading, also a classic decoration for your bedroom and office.', 'S26product-4(1).webp', 'S26product-4(2).webp', 'S26product-4(3).webp', 'S26product-4(4).webp'),
('P138', 'S27', 'Tier Shelf Storage Lamp', '2799', '100', 'Assembly - Product Required Mild Assembly of 5 mins, video of the same is also uploaded in the listing plus Instructions are also provided in the packet or you can also request for video in the number given inside the packet.', 'S27product-1(1).webp', 'S27product-1(2).webp', 'S27product-1(3).webp', 'S27product-1(4).webp'),
('P139', 'S27', 'Wooden Tripod Floor lamp', '1649', '140', 'Moon Light Decorative Wooden Tripod Floor lamp with Natural Jute Beige Shade 3 Tier Shelf for Home Decor, Living Room Study Room', 'S27product-4(1).webp', 'S27product-4(2).webp', 'S27product-4(3).webp', 'S27product-4(4).webp'),
('P14', 'S02', 'Clovefry Ceiling Hanging Light', '1200', '200', 'Product Type- Clovefry Ceiling Hanging/Pendant Light Lamps. Enhance the beauty of your Home/Office/Farm House with Clovefry Lamps Pendant Light. The Hanging Light lamp best suitable for Home, Bed Room, Living Room, Over the Dining Table, Restaurant ,Bar C', 'C02product-7(1).webp', 'C02product-7(2).webp', 'C02product-7(3).webp', ''),
('P140', 'S27', 'Moon Arcing Light', '1599', '115', 'Moon Light Decorative Wooden Tripod Floor lamp with Natural Jute Beige Shade 3 Tier Shelf for Home Decor, Living Room Study Room', 'S27product-2(1).webp', 'S27product-2(2).webp', 'S27product-2(3).webp', ''),
('P141', 'S27', 'Handicraft Lamp', '1899', '130', 'antique Light handicrafts Floor lamp in All New Fresh Colors. (Brown with Yellow)', 'S27product-3(1).webp', 'S27product-3(2).webp', 'S27product-3(3).webp', 'S27product-3(4).webp'),
('P142', 'S28', 'The Moroccan Designer Lamp', '2499', '200', 'This Modern Design Wood floor Lamp is made of height quality imported pine engineered wood and assembled by hands. The package includes a ready to hang lamp with warm white bulb. This hanging lamp will add a charisma to your home whether it\'s day or night', 'S28product-1(1).webp', 'S28product-1(2).webp', 'S28product-1(3).webp', 'S28product-1(4).jpg'),
('P143', 'S28', 'Mango Tower Lamp', '2299', '175', 'This beautiful floor lamp is beautiful in a corner, especially in a pair. With a little delicate banana fibre detail, the gorgeous hand-printed matka fabric glows when lit, making it the ideal floor lamp that throws out beautiful mood light.', 'S28product-2(1).webp', 'S28product-2(2).webp', 'S28product-2(3).webp', ''),
('P144', 'S28', 'Tower Wall Lamp', '2350', '160', 'Geometric cityscapes, depicted in a wall tower lamp, handcrafted from crushed lokta/banana fibre paper, to grace a wall in any living or hospitality space.', 'S28product-3(1).webp', 'S28product-3(2).webp', 'S28product-3(3).webp', ''),
('P145', 'S28', 'Vpllex MDF Hanging', '1599', '125', 'This lamp creates fantastic warm brightness to decorate your room, it is perfect home décor. Wooden One Light Hanging Ceiling Lamp for Living Room, ,Hanging Wicker Chandelier , Distressed MDF Wood Pendant Lighting Fixtures For Dining Room, Bedroom, Home, ', 'S28product-4(1).webp', 'S28product-4(2).webp', 'S28product-4(3).webp', ''),
('P146', 'S29', 'Palatial Gold Candelabra', '2999', '150', 'Fos Lighting Large Palatial Gold 5-Light Aluminium Candelabra Wall Sconce', 'S29product-1(1).webp', 'S29product-1(2).webp', 'S29product-1(3).webp', 'S29product-1(4).webp'),
('P147', 'S29', 'Classic Candelabra', '2799', '140', 'Fos Lighting Classic Wrought Aluminium 3-Lights Victorian Candelabra Wall Sconce', 'S29product-2(1).webp', 'S29product-2(2).webp', 'S29product-2(3).webp', 'S29product-2(4).webp'),
('P148', 'S29', 'Gold Lion Sculpted', '2449', '145', 'Fos Lighting Gold Lion Sculpted 10 Inch Cast Aluminium 2-Lights Candelabra Wall Light', 'S29product-3(1).webp', '', '', ''),
('P149', 'S29', 'Distressed Red Candelabra', '2500', '100', 'Fos Lighting Distressed Red 20 Inch 2-Lights Rustic Wooden Candelabra Wall Lamp', 'S29product-4(1).webp', 'S29product-4(2).webp', 'S29product-4(3).webp', ''),
('P15', 'S02', 'Modern Glass Globe Hanging Light', '3704', '180', 'Illuminate your dining room or living room with this striking cluster pendant features three graduated Glass Globe shaped lights suspended from a round plate on black finished rods artfully displayed at different heights. Rich, rustic, and unmistakably st', 'C02product-8(1).webp', 'C02product-8(2).webp', 'C02product-8(3).webp', 'C02product-8(4).webp'),
('P150', 'S29', 'Provincial-Style Candelabra', '2699', '120', 'Fos Lighting Provincial-Style Distressed Grey Wood & Wrought Iron 22 Inch 2-Light Candelabra Wall Lamp', 'S29product-5(1).webp', 'S29product-5(2).webp', 'S29product-5(3).webp', 'S29product-5(4).webp'),
('P151', 'S29', 'Knotted Candelabra', '2899', '130', 'Fos Lighting Knotted 14 Inch Distressed Creme Antique 2-Light Cast Aluminium Candelabra Wall Lamp', 'S29product-6(1).webp', 'S29product-6(2).webp', 'S29product-6(3).webp', 'S29product-6(4).webp'),
('P152', 'S29', 'Emerald Green Candelabra', '1799', '125', 'Fos Lighting Emerald Green Distressed Wooden 3-Light Candelabra Wall Lamp', 'S29product-7(1).webp', 'S29product-7(2).webp', 'S29product-7(3).webp', 'S29product-7(4).webp'),
('P153', 'S30', 'Tabletop Bonsai Tree Light', '999', '185', 'Beautiful for your Home Decor: Ignitate Bonsai tree lamp light is perfect for home decoration on the desk or table. With soft glow led and golden leaf that makes it an elegant addition for your any room. Soft warm light bright up your room with a comforta', 'S30product-1(1).webp', 'S30product-1(2).webp', 'S30product-1(3).webp', 'S30product-1(4).webp'),
('P154', 'S30', 'Cherry Blossom Tree Light', '699', '175', 'Christmas decorations are perfect gifts for children, friends, and family! We provide 100% service assurance. If you have any questions about our products at any time, we will try our best to help you solve them.', 'S30product-2(1).webp', 'S30product-2(2).webp', 'S30product-2(3).webp', 'S30product-2(4).webp'),
('P155', 'S30', 'Artificial Tree Lamp', '849', '190', 'The LED tree light is powered by USB and AA batteries. You can use USB power to embellish, or you can use 3 AA batteries (Doesn\'t include battery and appendage). Touch the detector switch, you can turn it on or off with a light touch. This is a necessary ', 'S30product-3(1).webp', 'S30product-3(2).webp', 'S30product-3(3).webp', 'S30product-3(4).webp'),
('P156', 'S30', 'Creative Tree Light', '649', '150', 'AtneP Tree Home Decoration 24 LED Lighting | Size 14 x 5 Inch | Festival Lamp Creative Gift Diwali Christmas Wedding Party Event - Multi Color', 'S30product-4(1).webp', 'S30product-4(2).webp', 'S30product-4(3).webp', 'S30product-4(4).webp'),
('P157', 'S30', 'Bonsai Desk Tree Light', '949', '175', 'The soft lighting makes the eyes comfortable and illuminates the entire room without glare or too dim. tree lamp LED bulbs will not be hot after long-term use, and there is no safety hazard.', 'S30product-5(1).webp', 'S30product-5(2).webp', 'S30product-5(3).webp', 'S30product-5(4).webp'),
('P158', 'S30', 'Yagviz Cherry Light', '849', '149', 'LED desktop tree light is composed of high-quality LED lights and crystal-like cherry blossoms. The LED lights will not heat up after long use. Cherry blossoms tree lights are very suitable for home, bedroom, living room, office, dining room, bar, desk, C', 'S30product-6(1).webp', 'S30product-6(2).webp', 'S30product-6(3).webp', ''),
('P159', 'S31', 'Traditional Outdoor Gate Light', '2499', '176', 'This is a aluminum casted outdoor gate pillar lamp post garden light with unbreakable fiber shade in antique finish. Best suitable for main gate pillar, bollard light, garden light, poll light, lamp post, table lamp, post top lantern, etc.', 'S31product-1(1).webp', 'S31product-1(2).jpg', '', ''),
('P16', 'S02', 'Antique Brass Hanging Light', '3229', '200', 'Illuminate your dining room or living room with this striking cluster pendant features three graduated Antique Brass Finish Oval Moroccan lights suspended from a round plate on white-finished rods artfully displayed at different heights. Rich, rustic, and', 'C02product-9(1).webp', 'C02product-9(2).webp', 'C02product-9(3).webp', ''),
('P160', 'S31', 'Acrylic Round Gate Light', '2399', '180', 'something elegant for your home entrances, balcony, or garden area? Made From A Premium Quality Material (Aluminium Casting), The product will be properly packed to ensure no damage in transit. Made in India. No. of holders - 1 Nos. Holder type B-22 suita', 'S31product-2(1).webp', 'S31product-2(2).webp', 'S31product-2(3).webp', 'S31product-2(4).webp'),
('P161', 'S31', 'Pillar Pole Gate lamp', '2649', '150', 'HOLDER TYPE/ Product Dimensions :Product Normal B22 BRASS holder for easy installations.make your work easy, designer lights for Gate Light USES FOR', 'S31product-3(1).webp', 'S31product-3(2).webp', '', ''),
('P162', 'S31', 'Acrylic Garden Lights', '2799', '135', 'PROP IT UP is a well-known brand in the Luxurious Wall Fitting Lights industry. Our products range from a wide variety of luxurious light mountings and fixtures to embracing your style of living. Our unique design makes it a perfect fit for any Indoor and', 'S31product-4(1).webp', '', '', ''),
('P163', 'S31', 'Aluminium Gate Light', '1899', '185', 'Looking for something elegant for your home entrances, balcony, or garden area? Made From A Premium Quality Material (Aluminium Casting), This Gate-Light is a wonderful way to welcome guests and light up your front porch. It is also a great choice for a s', 'S31product-5(1).webp', 'S31product-5(2).webp', 'S31product-5(3).webp', ''),
('P164', 'S31', 'ZOREZA Cast Aluminium Gate Lamps', '1950', '175', 'ZOREZA Looking for something elegant for your home entrances, Wall Lights, Wall lamp, House Gate lights , Gate Lamp, Night Light or garden area, This weather-proof Gate Lights and golden powder coated aluminum cast wall light / Wall lamp mount is a wonder', 'S31product-6(1).webp', 'S31product-6(2).webp', 'S31product-6(3).jpg', 'S31product-6(4).jpg'),
('P165', 'S32', 'Pillar Gate Lamp', '2399', '175', 'The outdoor pillar lantern lamp adopts aluminum，anti-corrosion, anti-rust, long service life, preferred materials for outdoor lighting! modern minimalist pillar garden lights.', 'S32product-1(1).webp', '', '', ''),
('P166', 'S32', 'Square Pillar Light', '2299', '150', 'The outdoor pillar lantern lamp adopts aluminum，anti-corrosion, anti-rust, long service life, preferred materials for outdoor lighting! modern minimalist pillar garden lights.', 'S32product-2(1).webp', '', '', ''),
('P167', 'S32', 'Acrylic Lantern Light', '1999', '145', 'Outdoor waterproof IP55 rated, protected against splashing water ,Not afraid of bad weather, rainproof, windproof and snowproof.', 'S32product-3(1).webp', 'S32product-3(2).webp', 'S32product-3(3).webp', ''),
('P168', 'S32', 'Modern Shape Pole Lamp', '1299', '125', 'kinis Modern Shape Pole Lamp/Gate Light/Outdoor Lamp/Outdoor Light/Pillar Light for Outdoor Home, Square Design, Grey and Milky, Pack of 2', 'S32product-4(1).webp', 'S32product-4(2).webp', 'S32product-4(3).webp', ''),
('P169', 'S32', 'Square China Gate Light', '1399', '100', 'Outdoor Lamp/Pillar Lamp/Pole Lamp/Exterior Lamp for Gate and Garden. Give Royal Feel to home, office, restaurants, hotels, shop, cafe, coffee shop from Outdoor or Door step.', 'S32product-5(1).webp', 'S32product-5(2).webp', '', ''),
('P17', 'S03', 'Glass Globe Pendant Light', '1424', '175', 'Vintage pendant with Filament-style Pearl PURE LED bulb wrapped in barn style clear glass. Vintage Edison bulbs have soared in popularity; clear glass has become the new chic as it allows the filament bulbs to be seen in all their glory. The light comes w', 'C03product-1(1).webp', 'C03product-1(2).webp', 'C03product-1(3).webp', 'C03product-1(4).webp'),
('P170', 'S32', 'Avior Square Lamp', '1299', '135', 'Avior Square Design Waterpoof Gate Light, Gate Lamps for Outdoor,Wall Gate Lights and Decorative Outdoor Lamps (Pack of 1)', 'S32product-6(1).webp', 'S32product-6(2).webp', 'S32product-6(3).webp', 'S32product-6(4).webp'),
('P171', 'S33', 'Antique Classic Gate Light', '1900', '195', 'volt light Antique Classic Gate Light for Home/Garden/Passage/Pillar/Main GATE/Balcony', 'S33product-1(1).webp', 'S33product-1(2).webp', 'S33product-1(3).webp', ''),
('P172', 'S33', 'Casting Metal Gate Light', '1999', '135', 'Beautiful Moorish Moroccan design on steel, perfect for bedroom,living room,dining room kitchen,foyers and more', 'S33product-2(1).webp', 'S33product-2(2).webp', 'S33product-2(3).webp', ''),
('P173', 'S33', 'Metallic Waterproff Gate Lamp', '1699', '185', 'Suitable for garden, porch, yard, roof, garden, stairway, driveways, entryway, and other outdoor places On the sides main entrances and boundaries of homes and other commercial buildings like Malls, Hotels, Culb, Pub for a elegant design and attractive lo', 'S33product-3(1).webp', 'S33product-3(2).webp', '', ''),
('P174', 'S33', 'Areezo Design Gate Light', '749', '165', 'Suitable for - Home-Bed Room, Living Room, Over the Dining Table, For Restaurant, Bar Counter, Hotels, Malls, Shops, Clubs, Pubs, Pool Table, even a foyer or entryway etc.', 'S33product-4(1).webp', 'S33product-4(2).webp', 'S33product-4(3).webp', ''),
('P175', 'S34', 'Homes Elite Gate Light', '849', '135', 'Unbreakable Outdoor Gate Lamp Black Metal Exterior Waterproof Outdoor/Gate/Garden/Pillar Lighting Home Main Entry Gate Decorative', 'S34product-1(1).webp', 'S34product-1(2).webp', 'S34product-1(3).webp', ''),
('P176', 'S34', 'Gray Metal Cast Lamp', '1159', '155', 'MATAL,MIDDLE part made of poly carbonate (unbreakablel Rust Resisting Powder Coating , Raining Water Protective Gate Light, Suitable for Up to 2.\' Inch Pipe', 'S34product-2(1).webp', 'S34product-2(2).webp', '', ''),
('P177', 'S34', 'Watts Modern Lamp', '749', '175', 'Gate Light, Outdoor Light, Garden Light, Pillar light, Light for Pillar, Light for Outdoor used at home entrance ; Gives Classy look to your Entrance', 'S34product-3(1).webp', 'S34product-3(2).webp', '', ''),
('P178', 'S34', 'Carsten Black Lamp', '1449', '195', 'This Gate Light Outdoor Light Pillar Light is used to to give rustic touch to your home entrance/Door Step.', 'S34product-4(1).webp', 'S34product-4(2).webp', 'S34product-4(3).webp', 'S34product-4(4).webp'),
('P179', 'S35', 'Solar Path Light', '2899', '150', 'Two Lighting Modes & High-Brightness : Garden Art Solar landscape lights have two lighting modes ,warm white mode and auto color changing mode.Warm white is suitable for daily lighting;Another mode suitable for festival decoration,which can auto changing ', 'S35product-1(1).webp', 'S35product-1(2).webp', 'S35product-1(3).webp', 'S35product-1(4).webp'),
('P18', 'S03', 'Crystal Hanging Lamp', '674', '195', 'Home Craft Theme Crystal Pendant Light Provides a vibrant look at your ambience. Stun evening gathering visitors when you add this gem pendant light to your lounge area or family room. With its altered cone shape and straightforward outline, this pendant ', 'C03product-2(1).webp', 'C03product-2(2).webp', 'C03product-2(3).webp', ''),
('P180', 'S35', 'Landscape Pathway Light', '2999', '125', 'Ultra-Bright SMD LEDs: 10 lumens output with 6 cool white SMD LEDs, which can provide excellent illumination and turn the dark space into a bright lighted space.', 'S35product-2(1).webp', 'S35product-2(2).webp', 'S35product-2(3).webp', 'S35product-2(4).webp'),
('P181', 'S35', 'Toriox Waterproof Light', '2599', '185', 'Natural Dancing Flames - The torch is a perfect outdoor accent for pathways, decks, patios, gardens, fences, and pools.', 'S35product-3(1).webp', 'S35product-3(2).webp', 'S35product-3(3).webp', 'S35product-3(4).webp'),
('P182', 'S35', 'hardoll Solar Light', '659', '165', 'Solar Garden Pathway Lights with its multi-colour changing option and the all-new design is ideal for lawn, garden pathways of your home, office and malls. When it lights up, a brilliant display of patterns would surround the light making it apt for decor', 'S35product-4(1).webp', 'S35product-4(2).webp', '', ''),
('P183', 'S35', 'Path Yard Light', '2759', '195', 'Outdoor Lights Landscape Lighting Night Light 10 Watt Pro Style Light Decorative Pathway Landscape LightsLow Voltage Pro Path Yard Lights for Garden Landscape Path Pathway Lights Lawn Lamp, Aged Brass', 'S35product-5(1).webp', 'S35product-5(2).webp', 'S35product-5(3).webp', 'S35product-5(4).webp'),
('P184', 'S36', 'Mountain Scene Modern', '2499', '125', 'Size 38x21x4 Cm Decorative Modern Led Wall Light Acrylic Sconce LED Wall Lamp For Wandlamp Living room Bedroom Bedside room Dining room Fixtures', 'S36product-1(1).webp', 'S36product-1(2).webp', 'S36product-1(3).webp', 'S36product-1(4).webp'),
('P185', 'S36', 'Watts Nature Scene Modern', '2349', '125', 'Size 45x25x4 Cm Decorative Modern Led Wall Light Acrylic Sconce LED Wall Lamp For Wandlamp Living room Bedroom Bedside room Dining room Fixtures', 'S36product-2(1).webp', 'S36product-2(2).webp', '', ''),
('P186', 'S36', 'Beach Scene Modern', '2479', '125', 'Size 45x25x4 Cm Decorative Modern Led Wall Light Acrylic Sconce LED Wall Lamp For Wandlamp Living room Bedroom Bedside room Dining room Fixtures', 'S36product-3(1).webp', 'S36product-3(2).webp', '', ''),
('P187', 'S36', 'Picnic Scene Modern', '2249', '125', 'Size 39x29x5 Cm Decorative Modern Led Wall Light Acrylic Sconce LED Wall Lamp For Wandlamp Living room Bedroom Bedside room Dining room Fixtures', 'S36product-4(1).webp', 'S36product-4(2).webp', '', ''),
('P188', 'S37', 'Solar Wall Lights', '449', '185', 'These wall light fixtures contains 2 LED bulbs both on up and down side. They are small but very sturdy, made of high quality ABS plastic, perfect to adapt to all kind of general weather condition. Waterproof IP65 level, safe to use as outdoor lights for ', 'S37product-1(1).webp', 'S37product-1(2).webp', 'S37product-1(3).webp', 'S37product-1(4).webp'),
('P189', 'S37', 'Solpex Solar Deck Lights', '2999', '165', 'Warm white led is enough for you to illuminate your patio, yard, wall or garden, which is safer for the whole family to go downstairs at night.', 'S37product-2(1).webp', 'S37product-2(2).webp', 'S37product-2(3).webp', 'S37product-2(4).webp'),
('P19', 'S03', 'Antique Globe Glass Lamp', '1745', '150', 'Modern Design: translucent Amber Glass Shade, classic shape and design. The creative design of the ceiling lights makes this Pendant ceiling light the perfect choice for any living area in your home. Material: Glass + iron, the lamp body is made of metal', 'C03product-3(1).png', 'C03product-3(2).webp', 'C03product-3(3).webp', ''),
('P190', 'S37', 'Outdoor Exterior Wall Lamp', '1159', '200', 'Premium 4 LED lamp beads make the wall light reaches 600-720 lumens, high lighting efficiency ,no UV or IR radiation ,no flash,soft light,eye protection.;Popular Modern design- perfect for decoration purpose in living room, bedroom, stairwells, restaurant', 'S37product-3(1).webp', 'S37product-3(2).webp', 'S37product-3(3).webp', 'S37product-3(4).webp'),
('P191', 'S37', 'Up Down Wall Light', '925', '100', 'The sealed lampshade is easy to clean and protects the LED inside. Soft diffuser shades soften the light without glare and create a beautiful lighting effect, increase your home security and stylish modern atmosphere', 'S37product-4(1).webp', '', '', ''),
('P192', 'S37', 'CITRA LED Outdoor Wall Lamp', '1349', '125', 'Size : 10x10x10 Cm All the wires of the wall lamp have passed the UL certification; Made of high-quality die-cast aluminum and acrylic lampshade, the one-piece molding is not easy to break compared with other products on the market; Surface frosted paint ', 'S37product-5(1).webp', '', '', ''),
('P193', 'S37', 'Waterproof Outdoor Wall Lights', '465', '150', 'Gesto 2W IP65 Waterproof Outdoor Wall Lights,Up and Down LED Porch Lights, Outdoor Wall Lamp Suitable for Garden & Patio Lights,Elevationl Light(Warm White)-Pack of 1', 'S37product-6(1).webp', 'S37product-6(2).webp', '', ''),
('P194', 'S37', 'Lumina Glintac Outdoor Light', '749', '200', 'The LED moisture-proof lamp is closer to the true and original color of the object, resulting in more accurate and vivid illumination than other lighting alternatives.', 'S37product-7(1).webp', 'S37product-7(2).webp', 'S37product-7(3).webp', 'S37product-7(4).webp'),
('P195', 'S37', 'Acrylic Wall lamp', '899', '175', 'Widely Use : Perfect in outdoor as well as indoor for hotels, doorways, garden, pathway, porches, stairs Wall, bathroom, bedroom, living room, working place, etc;Windproof, rainproof, dustproof : Now No need to worry about rain and humidity, excellent wat', 'S37product-8(1).webp', 'S37product-8(2).webp', '', ''),
('P196', 'S39', 'Antique Retro Metal Light', '1299', '190', 'Includes all mounting hardware for quick and easy installation. The pendant light design is a mix of current fashion and Vintage industrial style to complement your room’s decor.', 'S39product-1(1).webp', 'S39product-1(2).webp', 'S39product-1(3).webp', 'S39product-1(4).webp'),
('P197', 'S39', 'Flourish Rope Hanging Light', '1350', '185', 'SPN-22D31C Hanging Light : Fancy Light : Rope Light : Rope Hanging : Felament Light : decorative light', 'S39product-5(1).webp', 'S39product-5(2).webp', 'S39product-5(3).webp', 'S39product-5(4).webp'),
('P198', 'S39', 'Bamboo Rope Pendant Lamp', '1200', '175', 'MADE WITH RAREST SPECIES OF BAMBOO - Crafty Nation\'s \" BAMBU EXOTICA\" Pendant Lamp is designed by our artists keeping in mind about the warm ambience and Jolly moods . Thereby using a very rare species of Bamboo Known as Dendrocalamus Hamiltoni ( Kako Bah', 'S39product-6(1).webp', 'S39product-6(2).webp', 'S39product-6(3).webp', 'S39product-6(4).webp'),
('P199', 'S39', 'Bamboo Rope Cord Lamp', '1499', '145', 'Modern retro style: Modern vintage look makes your home unique, suitable for all kinds of decoration style such as fashion or retro.', 'S39product-7(1).webp', 'S39product-7(2).webp', 'S39product-7(3).webp', 'S39product-7(4).webp'),
('P20', 'S03', 'Wall Lamp Without Bulb', '799', '200', 'Get scintillate lighting in your home by decorating it with this amazing sconce shimmer wall lamp will impress anyone with its modern design and eye catching color. It is hand crafted by using high quality material that are known for their durable and ver', 'C03product-4(1).png', 'C03product-4(2).webp', '', ''),
('P200', 'S39', 'Retro LED Wall lamp', '2599', '195', 'New Style LED Lamp, best for living room, bedroom, staircase, balcony, bar kitchen, nursery, study, office, restaurants, hotels, shop, cafe, etc.', 'S39product-8(1).webp', 'S39product-8(2).webp', 'S39product-8(3).webp', ''),
('P21', 'S03', 'Globe Pendant Light', '999', '185', 'The eye-catching globe pendant light features a large white globe glass lampshade, classic and elegant. add a stylish look while illuminating your room to create the perfect', 'C03product-6(1).webp', 'C03product-6(2).webp', 'C03product-6(3).webp', ''),
('P22', 'S03', 'Modern Hanging Lamp', '1399', '195', 'The design perfectly show a timeless style and contemporary charm to any space. This pendent light with frosted jade white globe glass shade nordic feature and golden finish adds retro style.It\'s the perfect light fixture to install in beside room,kitchen', 'C03product-7(1).webp', 'C03product-7(2).webp', 'C03product-7(3).webp', ''),
('P23', 'S04', 'Led Ceiling Lamp', '2374', '150', 'Acco Led 38W LED Hanging Linear Profile Tube Light is one of the latest offering in our range. The efficency of the light gets enhanced as it offers you the ability to adjust the height from the ceiling. The light is a perfect fit for commercial and resid', 'C04product-1(1).webp', 'C04product-1(2).png', '', ''),
('P24', 'S04', 'Linear Hanging Lamp', '7125', '150', 'Acco Led Rectangle Linear Hanging Profile 45W Light (5035 Black | 4Feet | Neutral White, 4000K) 1. This 5035 Linear Hanging Led Light beautifuly given the shape of rectangle to efficently manage the lumen across all the dimensions 2.High Grade Aluminum Ex', 'C04product-2(1).webp', 'C04product-2(2).webp', '', ''),
('P25', 'S04', 'Black Chandelier Ceiling Lamp', '7600', '150', 'Modern Simple Yet Elegant Rectangle Chandelier.Style your Dining, Living and Bed rooms with', 'C04product-3(1).webp', 'C04product-3(2).webp', '', ''),
('P26', 'S04', 'Eclairs Shape Led Chandelier', '7495', '125', 'Style your Dining, Living and Office receptions, Conference rooms with \"What is IN STYLE\" Add some cozy vibes to your living, dinning and bedroom with the our modern range LED Chandelier', 'C04product-4(1).webp', 'C04product-4(2).webp', 'C04product-4(3).webp', ''),
('P27', 'S04', 'Unique Zig Zag Linear', '6799', '150', 'Acco Led Unique Zig Zag Linear Black Office Light in 5035 with Colour Temp -4000K, 45 Watt in the Length of 4 Feet and Width 1 Feet is a perfect addition for your office space/ reception/ work area as it is a perfect combination of aesthetics and function', 'C04product-5(1).webp', 'C04product-5(2).webp', 'C04product-5(3).webp', ''),
('P28', 'S05', 'Single Hanging Lights', '2364', '140', 'Jainsons Lights-Beautiful and unique designs of pendent lights, including clusters and single piece pendant, that are unique, sophisticated, pretty, stylish, homely and royal. Different styles of hanging lights to beautify your living room, dining room, b', 'C05product-1(1).webp', 'C05product-1(2).webp', 'C05product-1(3).webp', ''),
('P29', 'S05', 'Half Ball Pendant Light', '999', '125', 'AYMH Unique Metal Pendant Lamp - Aged Golden and White inside Finish Twisted Wire plugs into any wall outlet. Includes hooks & clamps. Elegant and beautiful shape room lighting which creates create a romantic atmosphere and give sparkle to brilliant eveni', 'C05product-2(1).webp', 'C05product-2(2).webp', 'C05product-2(3).webp', 'C05product-2(4).webp'),
('P30', 'S05', 'Bowl Shaped Unique Hanging Light', '622', '150', 'This Hanging Light Pendant Light for Ceiling used as indoor Outdoor Lightning to your Bed Room, Living Room, Over the Dining Table, For Restaurant ,Bar Counter, Hotels, Malls, Shops ,Clubs , Pubs, Pool Table, even a foyer or entryway etc.', 'C05product-3(1).webp', 'C05product-3(2).webp', 'C05product-3(3).webp', ''),
('P31', 'S05', 'Bowl Shaped Decorative Pendant Light', '449', '200', 'This Hanging Light Pendant Light for Ceiling used as indoor Outdoor Lightning to your Bed Room, Living Room, Over the Dining Table, For Restaurant ,Bar Counter, Hotels, Malls, Shops ,Clubs , Pubs, Pool Table, even a foyer or entryway etc.', 'C05product-4(1).webp', 'C05product-4(2).webp', 'C05product-4(3).webp', 'C05product-4(4).webp'),
('P32', 'S05', 'Decorative Hanging Lamp', '599', '200', 'PRODUCT COLOR -: Copper PRODUCT MATERIAL TYPE -: Product Consist of Aluminum PRODUCT LAMP HOLDER -: E27 Screw Type. We don’t provide bulbs with the product (BULB NOT INCLUDED)', 'C05product-5(1).webp', 'C05product-5(2).webp', 'product-5(3).webp', ''),
('P33', 'S05', 'Bowl Shaped Pendant Light', '999', '175', 'AYMH Unique Metal Pendant Lamp - Aged Golden and White inside Finish Twisted Wire plugs into any wall outlet. Includes hooks & clamps. Elegant and beautiful shape room lighting which creates create a romantic atmosphere and give sparkle to brilliant eveni', 'C05product-6(1).webp', 'C05product-6(2).webp', 'C05product-6(3).webp', 'C05product-6(4).webp'),
('P34', 'S05', 'Bowl Decorative Ceiling Light', '599', '200', 'PRODUCT COLOR -: Maroon PRODUCT MATERIAL TYPE -: Product Consist of Aluminum PRODUCT LAMP HOLDER -: E27 Screw Type. We don’t provide bulbs with the product (BULB NOT INCLUDED)', 'C05product-7(1).webp', 'C05product-7(2).webp', 'C05product-7(3).webp', 'C05product-7(4).webp'),
('P35', 'S06', 'Chandelier Lamp', '4050', '125', 'Modern design, 1 Spiral and cutting crystals crystal chandelier lighting will decorate and lighting your room. which could be Halloween and Christmas and Diwali decorations. 3w multi colour light in this chandelier, Great home decor! The crystal chandelie', 'C06product-1(1).webp', 'C06product-1(2).webp', '', ''),
('P36', 'S06', 'Chandelier Ceiling Lamp', '1899', '100', 'This uniquely designed Product is made of very fine quality material and comes in various ranges & varieties and hence fulfills the need of all.', 'C06product-2(1).webp', 'C06product-2(2).webp', 'C06product-2(3).webp', 'C06product-2(4).webp'),
('P37', 'S06', 'Duplex Height Chandeliers', '8523', '100', 'Why choose Prop It Up pendant light? Weesalife lighting Limited is a professional home lighting fixtures manufacturer. In order to serve our customers more effectively and produce a wide variety of high-quality products, the manufactory has modern facilit', 'C06product-3(1).webp', 'C06product-3(2).webp', 'C06product-3(3).webp', ''),
('P38', 'S06', 'Crystal Ceiling Lamp', '2339', '100', 'This uniquely designed Product is made of very fine quality material and comes in various ranges & varieties and hence fulfills the need of all.', 'C06product-4(1).webp', 'C06product-4(2).webp', 'C06product-4(3).webp', ''),
('P39', 'S06', 'LightWave Chandelier Lamp', '1709', '120', 'Material: Glass, Steel , Led Bulb. Light Color: Yellow, no. of Light - 6, Top plate size - Width - 20 cm, Length - 50 cm, Height - 30 cm Strong Built Quality. easy to install, Installation manual given with the chandelier, includes all necessary component', 'C06product-5(1).webp', '', '', ''),
('P40', 'S07', 'Mount Ceiling Light', '2899', '125', 'BULBS - Type: LED/CFL. Wattage Per Bulb: Max 60W. Bulb Base: E26 Bulbs. Number of Bulb: 6 Bulbs (Bulbs not Included). Easy to install: All the arms are pre-wired and the packages Includes all mounting hardware for quick and easy installation. Bulb Informa', 'C07product-1(1).webp', 'C07product-1(2).webp', '', ''),
('P41', 'S07', 'Century Modern Sputnik', '5230', '100', 'Inaya Handicraft,8 Lights Sputnik Chandelier Matte Black Mid Century Modern Sputnik Ceiling Light Fixture Industrial Vintage Pendant Lighting for Dining Room Living Room Bedroom Kitchen Mid Century Modern Design: The 8 light chandelier fixture adopt simpl', 'C07product-2(1).webp', 'C07product-2(2).webp', 'C07product-2(3).webp', 'C07product-2(4).webp'),
('P42', 'S07', 'Sputnik Light Modern', '6000', '125', 'Max Instruments Chandelier Light - Black Sputnik Light Modern Dining Room - Starburst - Pinwheel', 'C07product-3(1).webp', 'C07product-3(2).webp', '', ''),
('P43', 'S07', 'Brass Antique Mid Light', '7900', '100', 'Nauticaz Modern Sputnik Chandeliers 10-Light Brass Antique Mid Century Light Fixture Flush Mount Ceiling Light Pendant Light for Living Room Bedroom Foyer Hallway', 'C07product-4(1).webp', 'C07product-4(2).webp', 'C07product-4(3).webp', ''),
('P44', 'S08', 'Circle Dot Gold Hanging Lights', '799', '150', 'Add a great decor idea to your interior with handcrafted antique golden color metal made ceiling lamp. Today, they are a popular choice among designers due to their style and overall craftsmanship. These are totally handmade by Indian rural artisans. Havi', 'S08product-1(1).webp', 'S08product-1(2).webp', '', ''),
('P45', 'S08', 'bandhan WLRB5 Pendants', '192', '200', 'This Lamp Required Assembly Easy within a minute Assembly. QC Passed HI-Density HDF wood Material and Light Weight. Long Life Durability Attractive Look With Stylish Design & Colours. Upgrade The Looks Of Your Living Room/ office / restaurant With The Pur', 'S08product-2(1).webp', 'S08product-2(2).webp', 'S08product-2(3).webp', ''),
('P46', 'S08', 'Prop It Up Ceiling Lamp', '292', '100', 'Looking for something beautiful and elegant for your home entrances, hallways, porch, balcony, living or bed room? light with one lamps will intensify the allure and elegance of your area. It is beautiful both ways - with or without switching on the light', 'S08product-3(1).webp', 'S08product-3(2).webp', 'S08product-3(4).webp', ''),
('P47', 'S08', 'US DZIRE 162 Hanging lamp', '297', '175', 'Beautiful designs looks very elegant and can be mounted anywhere in your HOME, OFFICE, HOTEL, RESTAURANT, CAFE, RESORT looks very attractive, Upgrade The Looks Of Your Ceiling. Our Ceiling Lamp Will Remain The Same For Many Years. It Is Highly Durable And', 'S08product-4(1).webp', 'S08product-4(2).webp', 'S08product-4(3).webp', 'S08product-4(4).webp'),
('P48', 'S08', 'Gojeeva Wooden Pendant Lamp', '539', '150', 'Let your guests admire your rich taste in home decor accessories from the latest collection of Laxmi. Made from a premium quality material, this lamp can be used purely as a charming decorative piece. This amazingly beautiful lighting option has been crea', 'S08product-5(1).webp', 'S08product-5(2).webp', 'S08product-5(3).webp', 'S08product-5(4).webp'),
('P49', 'S08', 'Fancy Pendant Light', '300', '175', 'Beautiful designs looks very elegant and can be mounted anywhere in your HOME, OFFICE, HOTEL, RESTAURANT, CAFE, RESORT looks very attractive, Upgrade The Looks Of Your home. Our Lamp Will Remain The Same For Many Years. It Is Highly Durable And Light In W', 'S08product-6(1).webp', 'S08product-6(2).webp', 'S08product-6(3).webp', ''),
('P50', 'S08', 'HomesElite Metal Hanging Lamp', '725', '190', 'ADJUSTABLE HEIGHT: The length of the wire can be adjusted to give the light any look, from stacked to symmetrical. Best suited for Dining Room, Bedroom, Living Room, Bar, Restaurants, Study Room, Aisle, Corridor, Coffee Shop. Made in India and Exclusively', 'S08product-7(1).webp', 'S08product-7(2).webp', 'S08product-7(3).webp', ''),
('P51', 'S09', 'Warm White Track Lights', '429', '200', 'Led Spot Light/Focus light/picture Light/Highlighter Plug and Play, Divert Inbuilt- Super bright and Powerful LED Type: 100% High Quality-Amazing Lighting Effect-Long Working LIfe, excellent Stability-Long Life working Hours Electronic Comsumption .', 'S09product-1(1).webp', 'S09product-1(2).webp', 'S09product-1(3).webp', 'S09product-1(4).webp');
INSERT INTO `product` (`product_id`, `subcategory_id`, `product_name`, `product_price`, `product_quantity`, `product_description`, `product_image`, `product_image2`, `product_image3`, `product_image4`) VALUES
('P52', 'S09', 'Mirror Strip Track Lights', '745', '175', 'Curved LED Off-White / Warm White light Picture / Mirror light. Can be used as Picture/Mirror light/Wall Light.', 'S09product-2(1).webp', 'S09product-2(2).webp', 'S09product-2(3).webp', 'S09product-2(4).webp'),
('P53', 'S09', 'LED Bulb Track Lights', '1999', '100', 'Product size: Max.: 35 W Length: 36 cm (14 \") Wall fitting diameter: 13 cm (5 \") LED: Luminous flux: 200 lm Package quantity: 3 pack Care instructions: - GU10 400lm - Dust the lamp with a duster. Environment & materials: - We only offer LED lighting in ou', 'S09product-3(1).webp', 'S09product-3(2).webp', 'S09product-3(3).webp', ''),
('P54', 'S09', 'Bathroom Track Lights', '899', '150', 'ZOREZA is a well-known brand in the Luxurious Wall Fitting Lights industry. Our products range from a wide variety of luxurious light mountings and fixtures to embracing your style of living. Our unique design makes it a perfect fit for any Indoor and Out', 'S09product-4(1).webp', 'S09product-4(2).webp', 'S09product-4(3).webp', 'S09product-4(4).webp'),
('P55', 'S09', 'U-Mark Track Light', '320', '200', 'UV (Ultraviolet) light is a form of electromagnetic radiation. It has a wavelength shorter than that of visible light, which makes it invisible to the naked eye, although it can be detected via its effects on various substances.', 'S09product-5(1).webp', 'S09product-5(2).webp', '', ''),
('P56', 'S10', 'Round Panel Light', '349', '200', '12W Panel Round With Double colour effect. colors can be changed with the flip of the electric switch. 6w white light + 6 watt blue. colors can be set as per desired blue only or white only or both.', 'S10product-1(1).webp', 'S10product-1(2).webp', 'S10product-1(3).webp', ''),
('P57', 'S10', 'Round Surface Down Light', '590', '100', 'MVL believes in delivering the Quality product and building a Trust relationship with its Buyers. Thank you & Keep shopping with MVL on flipkart MVL LED Suitable for Bedroom, Drawing room, living hall kitchen lighting. it is Low power consumption , enviro', 'S10product-2(1).png', 'S10product-2(2).webp', '', ''),
('P58', 'S10', 'square surface super light', '499', '160', 'D’Mak presents slim square shaped LED lights for ceiling and equivalent flat surfaces The panel light is made from Die Cast Aluminium with Powder Coated White finish Power consumption for the light is 22w voltage specification is 235 V AC, while the lumin', 'S10product-3(1).webp', 'S10product-3(2).webp', 'S10product-3(3).webp', ''),
('P59', 'S10', 'Round Slim LED Panel Light', '272', '180', 'SUNERZY® 8-Watt Round LED Slim Recessed Panel Light for False Ceiling (Cool White Light)', 'S10product-4(1).webp', 'S10product-4(2).webp', 'S10product-4(3).webp', ''),
('P60', 'S11', 'led strip 60cm DRL Daytime Running Light', '375', '100', '60 CM Flexible White-Yellow Daytime Running Light For Cars, Bikes and Scooty. Now You can enjoy audi style LED DRL in your vehicle as well with Headlight Noen LED DRL Tube light which will give your vehicle unmatched stylish looks.', 'S11product-1(1).webp', 'S11product-1(2).webp', '', ''),
('P61', 'S11', 'Car Fancy Lights', '215', '125', 'Autopowerz bring\'s The Flow Led Strip Trunk , Dicky, Boot ,Tail Lights Streamer Brake Turn Signal Light. Ride in style with Autopowerz Flexible Trunk Light Strip Kit With Led Moving Flash Light, which will keep you ahead of all other cars on the road with', 'S11product-2(1).webp', 'S11product-2(2).webp', 'S11product-2(3).webp', ''),
('P62', 'S11', 'Ice Blue EL Wire Car', '469', '175', 'These Lights Consume Very Less Power Which Does Not Harm Your Car’s Battery & Provide You With Full Satisfaction.', 'S11product-3(1).webp', 'S11product-3(2).webp', 'S11product-3(3).webp', ''),
('P63', 'S11', 'RohanEshop Car Led Strip', '242', '200', 'Best waterproof led light universal for cars blue in colour.', 'S11product-4(1).webp', 'S11product-4(2).webp', 'S11product-4(3).webp', ''),
('P64', 'S12', 'Prop It Up led Work lamp', '3059', '100', 'American style Retro LED Table Lamp,Vintange Antique Copper Table Lights for Bedroom Studyroom Bedside Desk lamps For Home Features: 100% Brand New Material:Iron Light Source:LED Bulbs/Energy-saving lamp 1 Colors available:Show as the picture Certificatio', 'S12product-1(1).webp', 'S12product-1(2).webp', '', ''),
('P65', 'S12', 'Colour Mode LED Lamp', '598', '150', 'An LED lamp or LED light bulb is an electric light that produces light using light-emitting diodes (LEDs).', 'S12product-2(0).webp', 'S12product-2(2).webp', 'S12product-2(3).webp', 'S12product-2(4).webp'),
('P66', 'S12', 'Stylish Wooden Iron LED', '5430', '175', 'Three-color switching:White light, warm white, natural light three-color switching.You can choose the light color you like. Warm White Dimming:The brightness of the light can be adjusted to meet your different brightness needs Iron lampshade: It is made b', 'S12product-3(1).webp', 'S12product-3(2).webp', '', ''),
('P67', 'S12', 'Study lamp Rechargeable Led', '349', '125', 'Made of ABS, lightweight, durable and smooth texture feeling. The lamp has 3 level of brightness (High-medium-low). Easy to turn on and off in second by touch-sensitive controller.. 360 degree free twisted tube can be bent to direct light just where you w', 'S12product-4(1).webp', 'S12product-4(2).webp', 'S12product-4(3).webp', ''),
('P68', 'S12', 'Classic Rechargeable Table Lamp', '706', '175', 'A desk lamp is a portable task light that sits on a desk or table to provide targeted illumination for accomplishing tasks such as computer work, reading, writing, drafting, crafting, bookkeeping, sewing, knitting, and painting. Desk lamps provide adjusta', 'S12product-5(1).webp', '', '', ''),
('P69', 'S12', 'Touch Control Task Lamp', '388', '190', 'A circuit that closes a relay when two metal areas are bridged by a finger or hand.', 'S12product-6(1).webp', 'S12product-6(2).webp', '', ''),
('P70', 'S13', 'Modern Ceiling Light LED', '2299', '150', 'The ceiling light only fit 3-8m² room, pls measure your room before buy it. MININALIST GEOMETRY CEILING LIGHT: Melting modern geometric design and classic solid color into one, no extra fancy construction, creative layered design, perfectly for any home i', 'S13product-1(1).webp', 'S13product-1(2).webp', 'S13product-1(3).webp', ''),
('P71', 'S13', 'Light Round Modern Light', '8999', '140', 'L60cm*W40cm(4 Rings) 60W 4 Light Modern LED Chandelier For Dining Living Rooms Hanging suspension luminaire Chandeliers', 'S13product-2(1).jpg', 'S13product-2(2).jpg', '', ''),
('P72', 'S13', 'Rose Gold Square Ceiling Light', '8999', '125', 'LIGHT COLOR IS ADJUSTABLE COLOR CHANGES WHEN YOU SWITCH IT OFF AND ON - WARM WHITE NATURAL WHITE AND COOL WHITE led Light Modern LED Chandelier For Dining Living Room luminaire Chandeliers', 'S13product-3(1).jpg', '', '', ''),
('P73', 'S13', 'Triangle Modern Ceiling Light', '2999', '160', '900x900mm 12 Light Modern LED Chandelier For Dining Living Room lamparas colgantes pendientes Hanging suspension luminaire Chandeliers', 'S13product-4(1).jpg', 'S13product-4(2).jpg', '', ''),
('P74', 'S13', 'Rectangular Light', '2499', '190', '4 Light Modern LED Chandelier For Dining Living Room lamparas colgantes pendientes Hanging suspension luminaire Chandeliers High quality stainless steel chassis and clear crystals,smart IC driver design, durable and shining all the time, its service life ', 'S13product-5(1).jpg', 'S13product-5(2).jpg', '', ''),
('P75', 'S13', 'Dual Round White LED Lamp', '2199', '100', 'L60cm*W60cm*H16cm(6 Rings) 80W 6 Light Modern LED Chandelier For Dining Living Room lamparas colgantes pendientes Hanging suspension luminaire Chandeliers', 'S13product-6(1).jpg', 'S13product-6(2).jpg', '', ''),
('P76', 'S13', 'Small Modern Acrylic Lamp', '2999', '200', 'Size 33x16 Cm Modern industrial style one-light indoor wall fixture is perfect for use in restaurant, bedroom, living room, bedside, cafe, bar, corridor, balcony.', 'S13product-7(1).jpg', 'S13product-7(2).jpg', '', ''),
('P77', 'S13', 'Light Gold Spike LED', '1499', '175', '60W 20 Light Modern LED Chandelier For Dining Living Room luminaire Chandeliers', 'S13product-8(1).jpg', 'S13product-8(2).jpg', '', ''),
('P78', 'S14', 'Wooden Surface Wall Lamps', '799', '200', 'This lamp\'s exquisite design and high-quality material give a premium appearance to your home. Wall lamps are suitable for the dining room, bedroom, living room, bar, restaurant, study room, aisle, corridor, and coffee shop. Lighting can add charm to your', 'S14product-1(1).webp', 'S14product-1(2).webp', 'S14product-1(3).webp', 'S14product-1(4).webp'),
('P79', 'S14', 'Outdoor UP & Down Wall Light', '599', '180', 'Designed with UP & DOWN LED Light ,the Beam angle of Outdoor Wall Light is Adjustable, allowing you to Adjust the Light area Freely to reach the effect you Want.', 'S14product-2(1).webp', 'S14product-2(2).webp', 'S14product-2(3).webp', ''),
('P80', 'S14', 'Rectangular Acrylic LED Wall Lamp', '1799', '190', 'Size is 30x12x6 Cm Modern Simple Design : High-quality Die-cast aluminum alloy with no rust, surface frosted lacquer paint treatment, not easy to oxidation, don\'t fade. LED power saving and durable, which with up to 50,000h of life', 'S14product-3(1).webp', '', '', ''),
('P81', 'S14', 'Outdoor UP or Down Cylindrical Wall Light', '699', '175', 'Designed with UP or DOWN LED Light ,the Beam angle of Outdoor Wall Light is Adjustable, allowing you to Adjust the Light area Freely to reach the effect you Want.', 'S14product-4(1).webp', 'S14product-4(2).webp', 'S14product-4(3).webp', ''),
('P82', 'S14', 'Outdoor UP & Down Wall Lamp', '1099', '150', 'Designed with UP DOWN LED Light ,the Beam angle of Outdoor Wall Light is Adjustable, allowing you to Adjust the Light area Freely to reach the effect you Want.', 'S14product-5(1).webp', 'S14product-5(2).webp', '', ''),
('P83', 'S15', 'Tealight Holders Tealight', '175', '170', 'Only White glass received red glass is used for only photography. This is beautiful Decorative Tea light which provide a unique and vintage look of your home,office & room. This tealight holder is decorative, and it will be sure to add a subtle accent of ', 'S15product-1(1).webp', 'S15product-1(2).webp', '', ''),
('P84', 'S15', 'DULI Wall Candle Holder', '699', '200', 'DULI Presents a beautiful wall hanging sconce holder in a gorgeous vintage style that will add a warm glow to a room. In a very striking and unusual design with a black and golden finish, The gold backing in the sconce magnifies the glow from the tealight', 'S15product-2(1).webp', 'S15product-2(2).webp', 'S15product-2(3).webp', ''),
('P85', 'S15', 'Wall Hanging Twisted Petals', '950', '175', 'This beautiful candle holder is a decorative and practical addition to your home decorations. The simple, yet elegant design directs the eye to the center. This minimalist, modern piece works great alone, or as a set with multiple matching pieces. Stagger', 'S15product-3(1).webp', 'S15product-3(2).webp', 'S15product-3(3).webp', 'S15product-3(4).webp'),
('P86', 'S15', 'Golden Drop Wall Sconce', '280', '190', 'This beautiful drop shaped candle holder is a decorative and practical addition to your home decorations. The simple, yet elegant design directs the eye to the center. This minimalist, modern piece works great alone, or as a set with multiple matching pie', 'S15product-4(1).webp', 'S15product-4(2).webp', 'S15product-4(3).webp', ''),
('P87', 'S17', 'Moroccan Balls Battery Operated String Lights', '390', '180', 'EXCELLENT ILLUMINATION - 20 Warm white led bulbs create excellent illumination and a warm atmosphere. BALL DIMMENSIONS : 25mm (Diameter) COST EFFECTIVE & ENERGY EFFICIENT : Battery powered for light up or twinkle. Low power consumption with bright colors.', 'S17product-1(1).webp', 'S17product-1(2).webp', '', ''),
('P88', 'S17', 'Yellow Rice Lights', '300', '150', 'Pack of 5 Super Bright LED Cork Lights ideal for Diwali, Christmas, Newyear, Thanksgiving, Eid, You can Decorate your Bedrooms, Dining Hall, garden, Cafe, Restaurants, Pubs, and more with these LED Cork Lights. Easy to install and can be placed on every a', 'S17product-2(1).webp', '', '', ''),
('P89', 'S17', 'Mirror Balls Battery Operated String Lights', '400', '130', 'EXCELLENT ILLUMINATION - 20 RGB Automatic Blinking led bulbs create excellent illumination and a warm atmosphere. BALL DIMMENSIONS : 60mm (Diameter) COST EFFECTIVE & ENERGY EFFICIENT : Battery powered for light up or twinkle. Low power consumption with br', 'S17product-3(1).webp', 'S17product-3(2).webp', '', ''),
('P90', 'S19', 'Eyeshot Wall Lamp', '649', '160', 'Lemon Gold Classic Design Hand Crafted in India Round Globe Shaped Wall Light Lamp.Amazing looks to your Home Interior. A Useful Addition to Your Home Decor Arsenal. Crafted From High Quality Material, It has Long Life and Energy Efficient Wall Lamp, give', 'S19product-1(1).webp', '', '', ''),
('P91', 'S19', 'Swing Arm Wall Lamp', '399', '175', 'DIMMABLE: Fully dimmable with compatible dimmer switch to create the perfect atmosphere.Suitable for: Home> Bed Room, Living Room, Over the Dining Table, For Restaurant, Bar Counter, Hotels, Malls, Shops, Clubs, Pubs, Pool Table, even a foyer or entryway,', 'S19product-2(1).webp', '', '', ''),
('P92', 'S19', 'Wallchiere Wall Lamp', '1279', '200', 'Lemon Gold Classic Design Hand Crafted in India Round Globe Shaped Wall Light Lamp.Amazing looks to your Home Interior. A Useful Addition to Your Home Decor Arsenal. Crafted From High Quality Material, It has Long Life and Energy Efficient Wall Lamp, give', 'S19product-3(1).webp', 'S19product-3(2).webp', 'S19product-3(3).webp', 'S19product-3(4).webp'),
('P93', 'S19', 'Uplight Wall Lamp', '549', '190', 'We Preasent A new Attractive Decorative wall lamp Get brilliant lighting in your home by decorating it with this amazing white sconce wall lamp brought to you by  VAGallerKing  This lamp will impress anyone with its modern design and eye catching colour. ', 'S19product-4(1).webp', 'S19product-4(2).webp', '', ''),
('P94', 'S19', 'Wallchiere Wall Light', '1776', '200', 'A stylish lighting solution, this charming wall showcases a metallic finish and classic design. When it comes to good lighting, your fixture can make it or break it. Find the light you love with this wall sconce. Crafted from metal, the base features one ', 'S19product-5(1).webp', 'S19product-5(2).webp', 'S19product-5(3).webp', ''),
('P95', 'S19', 'Pendant Wall Lamp', '341', '150', 'One of the best ways to show off your prized artwork collection is to shine lighting on them. It will attract the attention you want. This is what art galleries do! Sold by VAGalleryKing', 'S19product-6(1).webp', 'S19product-6(2).webp', '', ''),
('P96', 'S20', 'Round Glass Mirror Light', '3280', '200', 'Touch control - Controlled by touch sensor switch on the mirror, turning LED lights and adjust color temperature and brightness whenever you want, to remember the last brightness when re-power on this unit.', 'S20product-1(1).webp', '', '', ''),
('P97', 'S20', 'Straight Mirror Light', '725', '170', 'Easy Installation Dartboard Ligh- Easy to install with provided screws. The picture light is perfect for lighting up wall paintings, photo frames, artworks, headboard pictures, wall decors, mirror, dartboard, portraits, photos, gallery, canvas, poster, di', 'S20product-2(1).webp', 'S20product-2(2).webp', '', ''),
('P98', 'S20', 'Fruglow Mirror Light', '2690', '120', 'Perfect Ambient Light.When you wake up at the midnight, when read book on the bed, when you watch TV on the sofa, you need the Soft Ambient Light. The wall light can emit the perfect light in any in various scenes. No flash, no dazzle, protect your eyes .', 'S20product-3(1).webp', 'S20product-3(2).webp', '', ''),
('P99', 'S20', 'CITRA Led Mirror Light', '2799', '190', 'This product is of slim design and the height is only 2.17in, one addiontal round cover is provided to cover the junction box in case there is junction box in the wallDesign : 3 In 1', 'S20product-4(1).webp', 'S20product-4(2).webp', 'S20product-4(3).webp', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcategory_id` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category_id` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subcategory_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subcategory_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`subcategory_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `category_id`, `subcategory_name`, `subcategory_description`) VALUES
('S01', 'C01', 'Drum Light', 'Drum Point Light is one of four surviving Chesapeake Bay screw-pile lighthouses. Originally located off Drum Point at the mouth of the Patuxent River, it is now an exhibit at the Calvert Marine Museum.'),
('S02', 'C01', 'Tribulb Light', 'A trouble light, also known as a rough service light, drop light, or inspection lamp, is a special lamp used to illuminate obscure places and able to handle moderate abuse. The light bulb is housed in a protective cage and a handle that are molded to form'),
('S03', 'C01', 'Globe Light', 'An incandescent light bulb, incandescent lamp or incandescent light globe is an electric light with a wire filament heated until it glows. The filament is enclosed in a glass bulb with a vacuum or inert gas to protect the filament from oxidation.'),
('S04', 'C01', 'Linear Light', 'If an optical system is linear, it has the following properties (among others): If monochromatic light enters an unchanging linear-optical system, the output will be at the same frequency. For example, if red light enters a lens, it will still be red when'),
('S05', 'C01', 'Bowl Light', 'The clear light bulb is enclosed in a plastic base made up of a \"bowl\" and a \"cap\", usually of different colors. Bubble lights are manufactured in just about any color, including the liquid in the tube. The plastics used are most commonly semi-opaque red,'),
('S06', 'C01', 'Spiral Light', 'Fluorescent light bulb in which the tube is folded or twisted into a spiral to concentrate the light output. Compact fluorescent lamps (CFLs) are typically three to four times as efficient as incandescent light bulbs and last 8–10 times as long.'),
('S07', 'C01', 'Sputnik Light', 'The light fixture is one of the most popular mid-century light designs, one that boasts multiple arms. Each one of these arms supports a single-light bulb. They typically radiate out from a central point, a globe or column.'),
('S08', 'C02', 'Pendants', 'A Pendant is a single, shaded light fixture that hangs from the ceiling, usually suspended by a cord, chain or metal rod.'),
('S09', 'C02', 'Track Light', 'Track lighting is a method of lighting where light fixtures are attached anywhere on a continuous track device which contains electrical conductors.'),
('S10', 'C02', 'Recessed Fixtures', 'A recessed light or downlight (also pot light in Canadian English, sometimes can light (for canister light) in American English) is a light fixture that is installed into a hollow opening in a ceiling.'),
('S11', 'C02', 'Ambient Light', 'Ambient lighting is essentially indirect lighting. A soft light that is reflected off the ceiling. It reduces the shadows on people\'s faces and fills the room with equal brightness, opening up the architecture and drawing people in. Ambient light may be p'),
('S12', 'C02', 'Task Light', 'Task lighting provides increased light for specific tasks in a room that may already have some ambient light.'),
('S13', 'C02', 'Ceiling Light', 'The lights directly mounted on the ceiling for the general illumination of the room or a specific section of it are called ceiling lights.'),
('S14', 'C02', 'Wall Sconces', 'A sconce, by definition, is typically a wall lighting fixture that is installed using the wall for support.'),
('S15', 'C03', 'Recessed Light Sconces', 'Recessed lights, also known as downlights or can lights, are a type of lighting fixture installed into the ceiling or wall. They are designed to sit flush with the surface for a sleek and polished finish. The housing and electrical wiring components are h'),
('S16', 'C03', 'Down-Light Configuration', 'A downlight is a light fitting (luminaire) that lights in a downward direction to light an area below. They are usually recessed into the ceiling so you see only a small part of fitting below the ceiling.'),
('S17', 'C03', 'Battery Operated Wall Sconces', 'Perfect for bathroom, vanity, kitchen, foyer, living room, bedroom, wall or window of the study, basement, workshop, farmhouse, and so on. You can dim it to match your environment and mood. They can be used as sconces, vanity lights, ceiling lights, readi'),
('S18', 'C03', 'Up-Light Configuration', 'Uplighting is the placement of individual light sources at the base of architectural details or points of interest, typically around the perimeter of a space, to draw attention to those details.'),
('S19', 'C03', 'Spotlight Sconces', 'A sconce, by definition, is typically a wall lighting fixture that is installed using the wall for support. Such lights are usually directed upwards and owe their existence to the pre-modern age, when fixtures like these were used to hold candles and torc'),
('S20', 'C04', 'Mirror Light', 'A mirror is a wave reflector. Light consists of waves, and when light waves reflect from the flat surface of a mirror, those waves retain the same degree of curvature and vergence, in an equal yet opposite direction, as the original waves.'),
('S21', 'C04', 'Chandeliers', 'A chandelier is a fancy light fixture that is often ornate and hanging suspended in the middle of a formal space.'),
('S22', 'C04', 'Mughal Lamp', 'Mughal architecture incorporates Hindu elements with Persian and Islamic elements. Some features common to many buildings are Large bulbous onion domes, sometimes surrounded by four smaller domes. Use of white marble and red sandstone.'),
('S23', 'C04', 'LED Series', 'A light-emitting diode (LED) is a semiconductor device that emits light when current flows through it. Electrons in the semiconductor recombine with electron holes, releasing energy in the form of photons.'),
('S24', 'C04', 'Shadow Light', 'Simply speaking, a shadow is an absence of light. If light cannot get through an object, the surface on the other side of that object (for example, the ground or a wall) will have less light reaching it. A shadow is not a reflection, even though it is oft'),
('S25', 'C05', 'Swing Arm Lamp', 'Functional swing arm lamps, like the one shown below, feature an adjustable arm that pivots and swings into a number of positions, allowing you to control the position of the lighting source. This makes them ideal for reading or other tasks.'),
('S26', 'C05', 'Torchiere Lamp', 'A floor lamp for indirect lighting, having its source of light within a reflecting bowl that directs the light upward.'),
('S27', 'C05', 'Arcing Lamp', 'An electric lamp that produces light by an arc made when a current passes between two incandescent electrodes surrounded by gas.'),
('S28', 'C05', 'Tower Lamp', 'Tower Lamp are an important type of signal light used in various industries and processes. These lights are distinguished by their columnar structure of several independent lights stacked on the top of each other.'),
('S29', 'C05', 'Candelabra Lamp', 'A chandelier is a branched ornamental light fixture designed to be mounted on ceilings or walls.'),
('S30', 'C05', 'Tree Lamp', 'A light tree is a point to point multipoint all optical channel, which may span multiple fiber links. Hence, a light tree enables single-hop communication between a source node and a set of destination nodes.'),
('S31', 'C06', 'Acrylic Light', 'Acrylic light diffusers control the brightness of harsh lighting to create a soft lighting effect. They can also protect lighting fixtures from dust and help conserve energy by providing more even lighting that reduces the need for additional fixtures.'),
('S32', 'C06', 'Square Light', 'A battery-powered electric light mounted on a headband so as to leave the hands free.'),
('S33', 'C06', 'Antique Light', 'Antique lamps are light fixtures from the past that have been re-purposed for current use. They may serve an aesthetic function when used in a room with an antique style, or a functional purpose when used to light a room.'),
('S34', 'C06', 'Dome Light', 'An interior cabin light with a dome-shaped cover attached to the ceiling of a car, vehicle, room or building. In a vehicle it is considered a safety feature, though usually fitted as standard. '),
('S35', 'C07', 'Path Light', 'Path lighting allows you to walk at night safely in conditions of low or no natural light. Rather than flooding the whole space with a blanket of light, you can provide localized pools of low light on the ground, right where you need it.'),
('S36', 'C07', 'Sconce Light', 'A sconce, by definition, is typically a wall lighting fixture that is installed using the wall for support. Such lights are usually directed upwards and owe their existence to the pre-modern age, when fixtures like these were used to hold candles and torc'),
('S37', 'C07', 'Deck Light', 'A skylight for a \'tween deck, built flush with the upper deck, any light for illuminating the deck of a ship.'),
('S38', 'C07', 'Step Light', 'The steplight is a type of lighting solution for indoor use with which to create luminous paths thanks to the installation of a number of splashes that will vary according to the size of the space to be illuminated.'),
('S39', 'C07', 'Retro Light', 'A rope light is primarily used as a decorative lighting fixture, featuring small light bulbs linked together and encased in a PVC jacket to create a string ...');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`subcategory_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
