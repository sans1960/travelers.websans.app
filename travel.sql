-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 09:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `valor_cookie` varchar(255) DEFAULT NULL,
  `fecha_conexion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `valor_cookie`, `fecha_conexion`) VALUES
(1, 'admin', 'asansliment@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Nature'),
(2, 'Architecture'),
(3, 'Gourmet'),
(4, 'Monuments'),
(5, 'Shopping'),
(6, 'Leisure'),
(7, 'Sightseeing');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `destination_id`, `region_id`) VALUES
(1, 'Italy', 1, 5),
(2, 'Austria', 1, 3),
(3, 'Australia', 2, NULL),
(4, 'China', 3, NULL),
(5, 'Japan', 3, NULL),
(6, 'Indonesia', 4, NULL),
(7, 'Malaysia', 4, NULL),
(8, 'Spain', 1, 4),
(9, 'France', 1, 2),
(10, 'Germany', 1, 3),
(11, 'Iceland', 1, 1),
(12, 'Poland', 1, 3),
(13, 'Portugal', 1, 4),
(14, 'Mexico', 7, NULL),
(15, 'Norway', 1, 1),
(16, 'Nigeria', 13, NULL),
(17, 'South Africa', 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`) VALUES
(1, 'Europe'),
(2, 'Oceania'),
(3, 'North-East Asia'),
(4, 'South-East Asia'),
(7, 'Mexico & Central America'),
(8, 'The Caribbean'),
(9, 'South America'),
(10, 'Central Asia'),
(11, 'South Asia'),
(12, 'Middle Est & Magheb'),
(13, 'Subsaharan Africa & Sahel');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `extract` text NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `extract`, `body`, `image`, `destination_id`, `country_id`, `category_id`, `region_id`, `date`) VALUES
(1, 'The Vienna Hofburg: Austria\'s Imperial Palace', 'The spectacular Hofburg Palace in Vienna was for centuries the seat of Austria\'s monarchy, the powerful Habsburgs. Now the President conducts state business in the same rooms that once belonged to Emperor Joseph II.', 'The spectacular Hofburg Palace in Vienna was for centuries the seat of Austria\'s monarchy, the powerful Habsburgs. Now the President conducts state business in the same rooms that once belonged to Emperor Joseph II. Nearly every Austrian ruler since 1275 ordered additions or alterations, resulting in many different architectural influences, including Gothic, Renaissance, Baroque, Rococo, and Classicism.\r\n\r\nTogether with its many attractive squares and gardens, the entire Hofburg complex occupies 59 acres encompassing 19 courtyards and 2,600 rooms. Highlights of a visit include the Imperial Silver Collection and an array of dining services giving a taste of the lavish imperial banquets that once took place here; the Sisi Museum, focusing on the life and times of Empress Elisabeth; and the Imperial Apartments, a series of 19 rooms once occupied by Emperor Franz Joseph and his wife.\r\n\r\nAddress: Michaelerkuppel, 1010 Vienna', 'vienna.webp', 1, 2, 2, 3, '2021-09-16'),
(3, 'The Pantheon in Rome', 'The Roman Pantheon is the monument with the greatest number of records: the best preserved, with the biggest brick dome in the history of architecture and is considered the forerunner of all modern places of worship. It is the most copied and imitated ', 'The name comes from two Greek words pan, “everything” and theon, “divine”. Originally, the Pantheon was a small temple dedicated to all Roman gods. Built between 25 and 27 B.C. by the consul Agrippa, Prefect of the Emperor Augustus, the present building is the result of subsequent, heavy restructuring. Domitian, in 80 A.D., rebuilt it after a fire; thirty years later it was hit by lightening and caught fire again.\r\n\r\nIt was then rebuilt in its present shape by the Emperor Hadrian; under his reign, Rome reached its maximum splendour and the present structure is probably the fruit of his eclectic genius and exotic tastes. In fact, the Pantheon combines a clearly Roman, cylindrical structure with the splendid outer colonnade of Greek inspiration.\r\n\r\nAlthough the new structure was very different from the original, Hadrian wanted a Latin inscription on the façade, that translated means: “It was built by Marcus Agrippa, son of Lucius, consul for the third time”.\r\n\r\nWhat is extraordinary about the Pantheon is not only its architecture or external beauty, but also the fact that it represents a true cultural revolution. It was the first temple built for the common people. Today, this could seem an obvious concept, but in ancient times temples were forbidden places, only for vestals and priests.\r\n\r\nThe term temple comes from the Latin templum, which means “delimited space”; inside was sacred and with often just enough space for a sacrificial altar or a brazier for divine fire; temples were conceived to be beautiful and imposing outside and everyone was denied access; the penalty for access was death.\r\n\r\nThe Pantheon overturns this concept and for the first time the idea of a place of worship open to everyone was conceived, where the faithful could spiritually communicate with the Gods.\r\n\r\nTo enter, we cross the pronaos with its imposing granite column forest. There are sixteen, monoliths, more than 14 metres high, some grey others in pink granite from Aswan, the latter brought from ancient Egypt by transport that would be considered exceptional even today. The Bronze door at the end of the columns is just as impressive in size, 7 metres high, a real record for the times.\r\n\r\nOn entering the door, the effect you feel is meant to be overwhelming. You suddenly find yourself in this huge empty space which causes vertigo and makes you feel tiny. This is how you were supposed to feel in front of the Gods.', 'panteon.webp', 1, 1, 2, 5, '2021-09-17'),
(4, 'Colosseum', 'The Colosseum is the main symbol of Rome. It is an imposing construction that, with almost 2,000 years of history, will bring you back in time to discover the way of life in the Roman Empire.', 'During the Roman Empire and under the motto of \"Bread and Circuses\" the Roman Colosseum (known then as Flavian Amphitheatre) allowed more than 50,000 people to enjoy its finest spectacles. The exhibitions of exotic animals, executions of prisoners, recreations of battles and gladiator fights kept the Roman people entertained for years.\r\n\r\nThe Colosseum remained active for over 500 years. The last recorded games in history were celebrated in the 6th century.\r\n\r\nSince the 6th century the Colosseum has suffered lootings, earthquakes and even bombings during World War Two. Demonstrating a great survival instinct, the Colosseum was used for decades as a storehouse, church, cemetery and even a castle for nobility.\r\n\r\n    The original name \"Flavian Amphitheatre\" was changed to the Colosseum due to the great statue of Nero that was located at the entrance of the Domus Aurea, \"The Colossus of Nero\". The Domus Aurea was a great palace built under the orders of Nero after the Fire of Rome.\r\n    The emperor Titus inaugurated the Colosseum with 100 days of games, which took the life of more than 2,000 gladiators.\r\n    The Colosseum had a canvas ceiling to protect people from the sun. The machinery and cages were located beneath the arena.\r\n    There are some theories that the Colosseum was filled with water for naval battle recreations, although for the moment there have not been conclusive investigations.\r\n    Every Good Friday the Pope leads the Way of the Cross procession in the Colosseum. This place has always been closely connected with the church and on this day the early Christians that died in the arena are remembered.\r\n', 'rome.jpg', 1, 1, 2, 5, '2021-09-18'),
(5, 'Walled city of Toledo', 'The town was granted arms in the 16th century, which by special royal privilege was based on the royal of arms of Spain.', 'The so-called City of the Three Cultures, is a mixture of times and settlers, of cultures and religions; all styles are in their monuments. \r\n\r\nAll the peoples that have come to the Iberian Peninsula have left a mark of their culture in this city already defined by the Roman Tito Livio as \"parva urbs, sed loco munitia\" (small but well fortified place).\r\n\r\nThe former capital of the Spanish Empire, not far from Madrid, is a city with a great heritage and history, which make it practically unmissable on any visit to the Iberian Peninsula.', 'alcazar.webp', 1, 8, 2, 4, '2021-09-05'),
(6, 'Mont Saint-Michel', 'The architecture of Mont-Saint-Michel Abbey is evidence of the mastery and expertise of several generations of builders.', 'The prodigious architecture of Mont Saint-Michel and its bay make it the busiest tourist site in Normandy and one of the first in France.\r\n\r\nThis particular rocky mound surrounded by a wonderful bay, in addition to the magnificent abbey dedicated to the cult of the Archangel Saint Michael on the walled town, is the theater of the greatest tides in continental Europe.\r\n\r\nWhen the tide rises, the Mount becomes an island, for a few hours, generating a spectacular landscape!', 'mont.jpg', 1, 9, 2, 2, '2021-09-02'),
(8, 'Poland’s Crooked Forest', '<p><strong>What force twisted dozens of these pine trees into identical J-shapes? Aliens? Gravitation hijinks? Or something much, much simpler?</strong></p>\r\n', '<p>Located in the Pomerania region, northwest of Poland, we can find a forest whose trees have strange curvatures.</p>\r\n\r\n<p>Known as the Crooked Forest, about 400 pines protrude from the ground vertically until, suddenly, they grow horizontally and form a right angle with the ground. Most bend north.</p>\r\n\r\n<p>To this day it is not known why they have this curious shape, and although there are countless theories, the most accepted is that this forest was planted in the 30s with the purpose of cutting down the trees once they were grown, and that some farmers manipulated the growth of pine trees in order to later be able to use the wood to make curved furniture, as well as for the construction of naval hulls.</p>\r\n', 'crooked.jpg', 1, 12, 1, 3, '2021-09-19'),
(12, 'Sagrada Familia, Barcelona', '<p>The Sagrada Fam&iacute;lia is a one-of-a-kind temple, for its origins, foundation and purpose. Fruit of the work of genius architect Antoni Gaud&iacute;, the project was promoted by the people for the people. Five generations now have watched the Temple progress in Barcelona. Today, more than 135 years after the laying of the cornerstone, construction continues on the Basilica.</p>\r\n', '<p>It&rsquo;s one of the most visited monuments in Spain and the most visited church in Europe next to the Basilica of Saint Peter in the Vatican.</p>\r\n\r\n<p>It&rsquo;s the Gaud&iacute;&#39;s masterpiece, and the greatest exponent of Catalan modernist architecture. This architectural style is part of a general trend that emerged throughout Europe between the late nineteenth and early twentieth centuries, and stands out for being an organic style, imitating the forms of nature, where ruled geometric forms abound.</p>\r\n\r\n<p>Each of the details that make up this majestic church has a high symbolic content, both in architecture and sculpture, dedicating a religious meaning to each part of the temple.</p>\r\n\r\n<p>It boasts three facades dedicated to the Nativity, Passion and Glory of Jesus, although during Gaud&iacute;&#39;s life the Nativity fa&ccedil;ade was only partially completed. The works continued after his death without plans, only through drawings, models and the indications that Gaud&iacute; would leave in writing.</p>\r\n\r\n<p>To this day it is still under construction, more than 130 years after its inception, and when it is completed it will be the tallest Christian church in the world.</p>\r\n', 'barcelona-2647714_960_720.jpg', 1, 8, 4, NULL, '2021-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `destination_id`) VALUES
(1, 'Northern Europe\r\n', 1),
(2, 'Western Europe', 1),
(3, 'Central Europe', 1),
(4, 'Southwest Europe\r\n', 1),
(5, 'Southern Europe\r\n', 1),
(6, 'Southeast Europe', 1),
(7, 'Eastern Europe', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `destination_id` (`destination_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `countries`
--
ALTER TABLE `countries`
  ADD CONSTRAINT `countries_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `countries_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `posts_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_ibfk_4` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`);

--
-- Constraints for table `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `regions_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
