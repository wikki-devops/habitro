-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2024 at 04:02 AM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `habitro`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_slug` varchar(255) DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_banner` varchar(255) DEFAULT NULL,
  `blog_short_description` varchar(255) DEFAULT NULL,
  `blog_content` text DEFAULT NULL,
  `blog_sorting` int(11) NOT NULL,
  `blog_page_title` varchar(255) DEFAULT NULL,
  `blog_meta_keyword` varchar(255) DEFAULT NULL,
  `blog_meta_description` varchar(255) DEFAULT NULL,
  `blog_status` enum('Yes','No') NOT NULL,
  `blog_add_on` datetime DEFAULT NULL,
  `blog_updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_slug`, `blog_title`, `blog_banner`, `blog_short_description`, `blog_content`, `blog_sorting`, `blog_page_title`, `blog_meta_keyword`, `blog_meta_description`, `blog_status`, `blog_add_on`, `blog_updated_on`) VALUES
(1, 'architecture in india sdfs', 'Architecture in india', '1665210833blog-1l.jpg', 'architecture in india surveys the contemporary condition of the country&rsquo;s built environment, showcasing a range of innovative projects and the diverse materials.', '<h2>Evoking the simplicity of rural life</h2>\r\n\r\n<p>Perched in Kurumbagaram, a quaint little village in India, &lsquo;House on a Farm&rsquo; is a vacation home for city dwellers. The design by Architecture Interspace strives to satisfy the client&rsquo;s wish for tranquility and reflection. Thus, snuggled amongst the shade of sandalwood trees, fruit orchards, and paddy fields, the house provides a place far away from the bustle and hustle of urban life for weekend getaways.</p>\r\n\r\n<p>The final composition takes shape as two concrete cuboids linked with a transition space, establishing multiple escapes to nature. Therefore, the house embraces rustic aesthetics using timeless design and materials but also adopts contemporary finishes to enable comfortable work from home at weekends.</p>\r\n<img alt=\"\" src=\"img/blog-2lg.jpg\" />\r\n<p>The two cuboids host the living and cooking space on one side, and the bedrooms on the other all images by Architecture Interspace</p>\r\n\r\n<h2>EVOKING THE SIMPLICITY OF RURAL LIFE</h2>\r\n\r\n<p>For this project, the architects&rsquo; primary idea was to create a space that allows its residents to connect not only with its surroundings but also with their inner souls. Designed for a newly married couple and their parents, &lsquo;House on a Farm&rsquo; respects the raw natural beauty of this tiny village while framing its amazing lush views. The house also harbors ancestral ties, capturing the emotions and energies of the land, which once supported a family of ten brothers and their mother&rsquo;s meditation practices.</p>\r\n\r\n<p>The core idea of the project was to revive the rural way of life that the ancestors had interpreting it into a present-day culture and context. Within this concept, set far back from the street, the house allows for a beautifully landscaped buffer breathing space that gives only a sneak peek of the residence. Meanwhile, the building footprint is kept at 140 sqm to minimize the impact on local vegetation and for an efficient microclimate.</p>', 1, 'Architecture in india', 'Architecture in india', 'Architecture in india', 'Yes', '2022-11-07 05:43:00', '2022-11-07 05:43:26'),
(2, 'evoking the simplicity of rural life', 'Evoking the simplicity of rural life', '1665216050blog-2.jpg', 'architecture in india surveys the contemporary condition of the country&rsquo;s built environment, showcasing a range of innovative projects and the diverse materials.', '<h2>Evoking the simplicity of rural life</h2>\r\n\r\n<p>Perched in Kurumbagaram, a quaint little village in India, &lsquo;House on a Farm&rsquo; is a vacation home for city dwellers. The design by Architecture Interspace strives to satisfy the client&rsquo;s wish for tranquility and reflection. Thus, snuggled amongst the shade of sandalwood trees, fruit orchards, and paddy fields, the house provides a place far away from the bustle and hustle of urban life for weekend getaways.</p>\r\n\r\n<p>The final composition takes shape as two concrete cuboids linked with a transition space, establishing multiple escapes to nature. Therefore, the house embraces rustic aesthetics using timeless design and materials but also adopts contemporary finishes to enable comfortable work from home at weekends.</p>\r\n<img alt=\"\" src=\"img/blog-2lg.jpg\" />\r\n<p>The two cuboids host the living and cooking space on one side, and the bedrooms on the other all images by Architecture Interspace</p>\r\n\r\n<h2>EVOKING THE SIMPLICITY OF RURAL LIFE</h2>\r\n\r\n<p>For this project, the architects&rsquo; primary idea was to create a space that allows its residents to connect not only with its surroundings but also with their inner souls. Designed for a newly married couple and their parents, &lsquo;House on a Farm&rsquo; respects the raw natural beauty of this tiny village while framing its amazing lush views. The house also harbors ancestral ties, capturing the emotions and energies of the land, which once supported a family of ten brothers and their mother&rsquo;s meditation practices.</p>\r\n\r\n<p>The core idea of the project was to revive the rural way of life that the ancestors had interpreting it into a present-day culture and context. Within this concept, set far back from the street, the house allows for a beautifully landscaped buffer breathing space that gives only a sneak peek of the residence. Meanwhile, the building footprint is kept at 140 sqm to minimize the impact on local vegetation and for an efficient microclimate.</p>', 2, 'Blog | Evoking the simplicity of rural life', 'Blog | Evoking the simplicity of rural life', 'Blog | Evoking the simplicity of rural life', 'Yes', '2022-11-07 05:42:00', '2022-11-07 05:42:41'),
(3, 'house on a farms architectural arrangement', '&lsquo;House on a farm&rsquo;s&rsquo; Architectural Arrangement', '1665235526blog-3l.jpg', 'architecture in india surveys the contemporary condition of the country&rsquo;s built environment, showcasing a range of innovative projects and the diverse materials.', '<h2>&nbsp;Evoking the simplicity of rural life</h2>\r\n\r\n<p>Perched in Kurumbagaram, a quaint little village in India, &lsquo;House on a Farm&rsquo; is a vacation home for city dwellers. The design by Architecture Interspace strives to satisfy the client&rsquo;s wish for tranquility and reflection. Thus, snuggled amongst the shade of sandalwood trees, fruit orchards, and paddy fields, the house provides a place far away from the bustle and hustle of urban life for weekend getaways.<br />\r\n<br />\r\nThe final composition takes shape as two concrete cuboids linked with a transition space, establishing multiple escapes to nature. Therefore, the house embraces rustic aesthetics using timeless design and materials but also adopts contemporary finishes to enable comfortable work from home at weekends.<br />\r\n<br />\r\nThe two cuboids host the living and cooking space on one side, and the bedrooms on the other all images by Architecture Interspace.</p>', 3, 'Blog | House on a farms architectural arrangement', 'House on a farms architectural arrangement', 'House on a farms architectural arrangement', 'Yes', '2023-12-27 07:26:00', '2023-12-27 06:26:40'),
(4, 'materiality and design', 'Materiality and Design', '1665235862blog-4l.jpg', 'architecture in india surveys the contemporary condition of the country&rsquo;s built environment, showcasing a range of innovative projects and the diverse materials.', '<h2>Evoking the simplicity of rural life</h2>\n\n<p>Perched in Kurumbagaram, a quaint little village in India, &lsquo;House on a Farm&rsquo; is a vacation home for city dwellers. The design by Architecture Interspace strives to satisfy the client&rsquo;s wish for tranquility and reflection. Thus, snuggled amongst the shade of sandalwood trees, fruit orchards, and paddy fields, the house provides a place far away from the bustle and hustle of urban life for weekend getaways.&nbsp;</p>\n\n<p>The final composition takes shape as two concrete cuboids linked with a transition space, establishing multiple escapes to nature. Therefore, the house embraces rustic aesthetics using timeless design and materials but also adopts contemporary finishes to enable comfortable work from home at weekends.</p>\n&lt;img src=&quot;http://localhost/girish/anil/website/img/blog-4l.jpg&quot; alt=&quot;&quot;&gt;\n\n<p>The two cuboids host the living and cooking space on one side, and the bedrooms on the other all images by Architecture Interspace.</p>\n\n<h2>&nbsp;EVOKING THE SIMPLICITY OF RURAL LIFE</h2>\n\n<p>For this project, the architects&rsquo; primary idea was to create a space that allows its residents to connect not only with its surroundings but also with their inner souls. Designed for a newly married couple and their parents, &lsquo;House on a Farm&rsquo; respects the raw natural beauty of this tiny village while framing its amazing lush views. The house also harbors ancestral ties, capturing the emotions and energies of the land, which once supported a family of ten brothers and their mother&rsquo;s meditation practices.</p>\n\n<p>The core idea of the project was to revive the rural way of life that the ancestors had interpreting it into a present-day culture and context. Within this concept, set far back from the street, the house allows for a beautifully landscaped buffer breathing space that gives only a sneak peek of the residence. Meanwhile, the building footprint is kept at 140 sqm to minimize the impact on local vegetation and for an efficient microclimate.</p>', 4, 'materiality and design', 'materiality and design', 'materiality and design', 'Yes', '2022-10-08 15:31:00', '2022-10-08 14:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `home_content_heading` varchar(50) DEFAULT NULL,
  `home_content` text DEFAULT NULL,
  `home_content_type` enum('Image','Text') NOT NULL,
  `home_page` varchar(10) NOT NULL,
  `home_updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `home_content_heading`, `home_content`, `home_content_type`, `home_page`, `home_updated_on`) VALUES
(1, 'Web Banner', '1664539453home-banner.jpg', 'Image', 'Home', '2022-09-30 12:04:13'),
(2, 'Mobile Banner', '1664539479home-banner-m.jpg', 'Image', 'Home', '2022-09-30 12:04:39'),
(3, 'KNOW MORE ABOUT US', 'Design studio specialising in<br />\r\narchitecture, illustration<br />\r\nand photography.', 'Text', 'Home', '2022-10-06 21:54:53'),
(4, 'First Heading', 'An active lifestyle', 'Text', 'Home', '2022-09-30 12:23:14'),
(5, 'SECOND HEADING', 'Bridging<br />\r\nthe gap between<br />\r\nimeless interior<br />\r\ndesign &amp; Traditional<br />\r\ncraftmenship.', 'Text', 'Home', '2022-10-07 07:45:03'),
(6, 'ABOUT US PHOTO 1', '1664540689surround-1.jpg', 'Image', 'Home', '2022-09-30 12:24:49'),
(7, 'ABOUT US PHOTO 2', '1664540718surround-2.jpg', 'Image', 'Home', '2022-09-30 12:25:18'),
(8, 'ABOUT US PHOTO 3', '1664540732surround-3.jpg', 'Image', 'Home', '2022-09-30 12:25:32'),
(9, 'ABOUT US PHOTO 4', '1664540749surround-4.jpg', 'Image', 'Home', '2022-09-30 12:25:49'),
(10, 'ABOUT US PHOTO 5', '1664540766surround-5.jpg', 'Image', 'Home', '2022-09-30 12:26:06'),
(11, 'ABOUT US PHOTO 6', '1664540791surround-6.jpg', 'Image', 'Home', '2022-09-30 12:26:31'),
(12, 'ABOUT US PHOTO 7', '1664540814surround-7.jpg', 'Image', 'Home', '2022-09-30 12:26:54'),
(13, 'ABOUT US PHOTO 8', '1664540829surround-8.jpg', 'Image', 'Home', '2022-09-30 12:27:09'),
(14, 'THIRD HEADING', 'SURROUND<br />\r\nYOURSELF<br />\r\nWITH LOVE', 'Text', 'Home', '2022-10-07 07:51:11'),
(15, 'Forth Heading', 'SELECT<br />\r\nAN APARTMENT', 'Text', 'Home', '2022-10-07 08:52:00'),
(16, 'Page Title', 'Habitro | Home', 'Text', 'Home', '2022-10-06 21:43:50'),
(17, 'Meta Description', 'Habitro', 'Text', 'Home', '2022-09-30 12:33:20'),
(18, 'Meta Keywords', 'Habitro', 'Text', 'Home', '2022-09-30 12:33:27'),
(19, 'About heading', 'Bridging the gap between timeless interior design &amp; Traditional craftmenship. test test', 'Text', 'About Us', '2023-12-15 12:42:14'),
(20, 'About Us Photo', '1664539503jayachandran.jpg', 'Image', 'About Us', '2022-09-30 12:05:03'),
(21, 'Name', 'JAYACHANDRAN SUBRAMANIYAM', 'Text', 'About Us', '2022-09-30 12:05:36'),
(22, 'Position', 'ARCHITECT & INTERIOR DESIGNER', 'Text', 'About Us', '2022-09-30 12:34:10'),
(23, 'About Us', 'Inspiriert durch die Barbier-Kultur aus den USA, England und den Niederlanden, designt Seaver Rada im Jahre 2015 während seines Psychologie Studiums den ersten Hagi’s Store im zeitlosen Stil der 20er Jahre. Mit der Vision einen holistischen Rückzugsort für den Mann zu schaffen, verbrachte Seaver Tage und Nächte damit die perfekten Design-Elemente zu finden. Heute führen Hagi und seine Söhne zwei Barber Shops, die eine Hommage an den Vater Hagi darstellen.', 'Text', 'About Us', '2022-09-30 11:59:28'),
(24, 'Footer Text', 'HAGI & SÖHNE. EIN FAMILIEN- UNTERNEHMEN WIE AUS DEM BUCHE.', 'Text', 'About Us', '2022-09-30 12:00:53'),
(25, 'Meta Tag', 'Habitro', 'Text', 'Home', '2022-09-30 12:32:00'),
(26, 'Page Title', 'Habitra | About us', 'Text', 'About Us', '2022-09-30 12:35:03'),
(27, 'Meta Description', 'Habitro about us', 'Text', 'About Us', '2022-09-30 12:36:02'),
(28, 'Meta Keywords', 'Habirtro About us', 'Text', 'About Us', '2022-09-30 12:36:25'),
(29, 'Meta Tag', 'Habitro', 'Text', 'About Us', '2022-09-30 12:37:19'),
(30, 'CONTACT', 'Jayachandran Subramaniyam', 'Text', 'Contact', '2023-12-27 06:15:36'),
(31, 'Email', 'STUDIO@HABITRO.COM', 'Text', 'Contact', '2022-09-30 12:50:12'),
(32, 'Mobile', '+91 99529 37110', 'Text', 'Contact', '2022-09-30 12:50:34'),
(33, 'Location', 'KODAMBAKKAM CHENNAI', 'Text', 'Contact', '2022-09-30 12:50:55'),
(34, 'Before', 'before.jpg', 'Image', 'Home', '2023-12-27 06:33:37'),
(35, 'After', 'after.jpg', 'Image', 'Home', '2023-12-27 06:33:45'),
(36, 'SELECT 1', '1665132984select-1.jpg', 'Image', 'Home', '2022-10-07 08:56:24'),
(37, 'SELECT 2', '1665133016select-2.png', 'Image', 'Home', '2022-10-07 08:56:56'),
(38, 'SELECT 3', '1665133033select-3.jpg', 'Image', 'Home', '2022-10-07 08:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `proejct_photos`
--

CREATE TABLE `proejct_photos` (
  `project_photo_id` int(11) NOT NULL,
  `project_photo` varchar(255) NOT NULL,
  `project_photo_proid` int(11) DEFAULT NULL,
  `project_photo_sorting` int(11) DEFAULT NULL,
  `project_photo_status` enum('Yes','No') DEFAULT NULL,
  `project_photo_added` datetime DEFAULT NULL,
  `project_photo_updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proejct_photos`
--

INSERT INTO `proejct_photos` (`project_photo_id`, `project_photo`, `project_photo_proid`, `project_photo_sorting`, `project_photo_status`, `project_photo_added`, `project_photo_updatedon`) VALUES
(1, '1665215309project-1.jpg', 1, 1, 'Yes', '2022-10-08 09:48:00', '2022-10-08 07:48:29'),
(2, '1665215327project-2.jpg', 1, 2, 'Yes', '2022-10-08 09:48:00', '2022-10-08 07:48:47'),
(3, '1665215342project-3.jpg', 1, 3, 'Yes', '2022-10-08 09:49:00', '2022-10-08 07:49:02'),
(4, '1665215496project-1.jpg', 2, 1, 'Yes', '2022-10-08 09:51:00', '2022-10-08 07:51:36'),
(5, '1665215512project-2.jpg', 2, 2, 'Yes', '2022-10-08 09:51:00', '2022-10-08 07:51:52'),
(6, '1665215532project-3.jpg', 2, 3, 'Yes', '2022-10-08 09:52:00', '2022-10-08 07:52:12'),
(7, '1665215651project-1.jpg', 3, 1, 'Yes', '2022-10-08 09:54:00', '2022-10-08 07:54:11'),
(8, '1665215671project-2.jpg', 3, 2, 'Yes', '2022-10-08 09:54:00', '2022-10-08 07:54:31'),
(9, '1665215690project-3.jpg', 3, 3, 'Yes', '2022-10-08 09:54:00', '2022-10-08 07:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_slug` varchar(100) NOT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `project_banner` varchar(255) DEFAULT NULL,
  `project_banner_mobile` varchar(255) NOT NULL,
  `project_banner_text` varchar(200) DEFAULT NULL,
  `project_description` varchar(255) DEFAULT NULL,
  `project_homepage` enum('Yes','No') DEFAULT NULL,
  `project_sorting` int(11) DEFAULT NULL,
  `project_page_title` varchar(255) DEFAULT NULL,
  `project_meta` varchar(255) DEFAULT NULL,
  `project_meta_description` varchar(255) DEFAULT NULL,
  `project_status` enum('Yes','No') DEFAULT NULL,
  `project_added` datetime DEFAULT NULL,
  `project_updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_slug`, `project_name`, `project_banner`, `project_banner_mobile`, `project_banner_text`, `project_description`, `project_homepage`, `project_sorting`, `project_page_title`, `project_meta`, `project_meta_description`, `project_status`, `project_added`, `project_updatedon`) VALUES
(1, 'YOGA-STUDIO-WITH-HAMMOCKS', 'Yoga studio <br> \r\nWith Hammocks', '1665215237yoga-studio.jpg', '1665215237yoga-studio-m.jpg', 'POKLONNAYA 9 HAS A SEPARATE QUITE YOGA ROOM WHERE NOTHING WILL DISTURB YOUR PEACE. A YOGA SESSION IN HAMMOCKS IS A GREAT ALTERNATIVE TO STRETCHING AND GIVE YOU THOSE FEW EXTRA CENTIMETERS TO ACHIEVE Y', '<p>WHAT IS LUXURY IN THE 21ST CENTURY? THE ANSWER IS: TIME. AT THE SPA YOU CAN DEDICATE TIME ONLY TO YOURSELF. AFTER A RELAXING WORKOUT IN THE PANORAMIC POOL, PAMPER YOURSELF IN THE HAMMAM AND HAVE A MASSAGE. TRANSPORT YOURSELF TO A RESORT, ALL WITHOUT LE', 'Yes', 1, 'Habitro | yoga studio with hammocks', 'Habitro,yoga studio with hammocks', 'Habitro,yoga studio with hammocks', 'Yes', '2022-10-08 09:47:00', '2023-11-04 18:46:17'),
(2, 'Design studio specialising in architecture and photography', 'Design studio specialising in architecture, and ph', '1665215480yoga-studio.jpg', '1665215480yoga-studio-m.jpg', 'POKLONNAYA 9 HAS A SEPARATE QUITE YOGA ROOM WHERE NOTHING WILL DISTURB YOUR PEACE. A YOGA SESSION IN HAMMOCKS IS A GREAT ALTERNATIVE TO STRETCHING AND GIVE YOU THOSE FEW EXTRA CENTIMETERS TO ACHIEVE Y', 'WHAT IS LUXURY IN THE 21ST CENTURY? THE ANSWER IS: TIME. AT THE SPA YOU CAN DEDICATE TIME ONLY TO YOURSELF. AFTER A RELAXING WORKOUT IN THE PANORAMIC POOL, PAMPER YOURSELF IN THE HAMMAM AND HAVE A MASSAGE. TRANSPORT YOURSELF TO A RESORT, ALL WITHOUT LEAVI', 'Yes', 2, 'Habitro | Design studio specialising in architecture and photography', 'Habitro | Design studio specialising in architecture and photography', 'Habitro | Design studio specialising in architecture and photography', 'Yes', '2022-10-08 09:51:00', '2022-10-08 07:51:20'),
(3, 'evoking the simplicity of rural life', 'Evoking the simplicity of rural life', '1665215635yoga-studio.jpg', '1665215635yoga-studio-m.jpg', 'POKLONNAYA 9 HAS A SEPARATE QUITE YOGA ROOM WHERE NOTHING WILL DISTURB YOUR PEACE. A YOGA SESSION IN HAMMOCKS IS A GREAT ALTERNATIVE TO STRETCHING AND GIVE YOU THOSE FEW EXTRA CENTIMETERS TO ACHIEVE Y', 'WHAT IS LUXURY IN THE 21ST CENTURY? THE ANSWER IS: TIME. AT THE SPA YOU CAN DEDICATE TIME ONLY TO YOURSELF. AFTER A RELAXING WORKOUT IN THE PANORAMIC POOL, PAMPER YOURSELF IN THE HAMMAM AND HAVE A MASSAGE. TRANSPORT YOURSELF TO A RESORT, ALL WITHOUT LEAVI', 'Yes', 3, 'Habitro | Evoking the simplicity of rural life', 'Habitro | Evoking the simplicity of rural life', 'Habitro | Evoking the simplicity of rural life', 'Yes', '2022-10-08 09:53:00', '2022-10-08 07:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` int(11) NOT NULL,
  `services_name` varchar(255) DEFAULT NULL,
  `services_description` varchar(255) DEFAULT NULL,
  `services_icon` varchar(255) DEFAULT NULL,
  `services_sorting` int(11) DEFAULT NULL,
  `services_page_title` varchar(255) DEFAULT NULL,
  `services_meta` varchar(255) DEFAULT NULL,
  `services_meta_description` varchar(255) DEFAULT NULL,
  `services_status` enum('Yes','No') DEFAULT NULL,
  `services_created_on` datetime DEFAULT NULL,
  `services_updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `services_name`, `services_description`, `services_icon`, `services_sorting`, `services_page_title`, `services_meta`, `services_meta_description`, `services_status`, `services_created_on`, `services_updated_on`) VALUES
(10, 'Interior 3D Design', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.', '1665132515Interior-3D-Design.svg', 1, 'Habitro ', 'Habitro', 'Habitro', 'Yes', NULL, '2022-10-07 09:07:41'),
(11, 'Interior Works', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.', '1665132285Interior-Works.svg', 2, 'Interior Works', 'Habitro', 'Interior Works', 'Yes', NULL, '2022-10-07 09:07:33'),
(12, 'Renovations / Construction services', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.', '1665133758Renovations.svg', 3, 'Renovations / Construction services', 'Renovations / Construction services', 'Renovations / Construction services', 'Yes', NULL, '2022-10-07 09:10:04'),
(13, 'Consultations', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.', '1665133905Consultations.svg', 4, 'Consultations', 'Consultations', 'Consultations', 'Yes', NULL, '2022-10-07 09:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_updated_on`) VALUES
(1, 'Admin', 'jc@habitro.com', 'habitro123bc0052636bddbdb96276174ab72e3d23c1a784df123456', '2023-12-27 06:22:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `proejct_photos`
--
ALTER TABLE `proejct_photos`
  ADD PRIMARY KEY (`project_photo_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `proejct_photos`
--
ALTER TABLE `proejct_photos`
  MODIFY `project_photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
