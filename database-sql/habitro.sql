-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2024 at 06:55 AM
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
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `page_heading` text NOT NULL,
  `bannerimage` varchar(255) NOT NULL,
  `heading` text NOT NULL,
  `banner_p` text NOT NULL,
  `component` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `page_heading`, `bannerimage`, `heading`, `banner_p`, `component`) VALUES
(1, 'Home Page', 'https://ik.imagekit.io/habitro/slider/tr:w-1520,h-790/home.webp?updatedAt=1706606262984', 'Where your Dream Space take a Concrete Shape!', 'Make your \'Dream Come True\' moments A Reality! With our residential & commercial constructions and renovations!', 1),
(2, 'Residential Page', 'https://ik.imagekit.io/habitro/slider/residential.webp?updatedAt=1706606262850', 'Crafting homes where love, laughter and luxury reside!', 'Our residential services make sure your family deserves a hearty and healthy home. ', 0),
(3, 'Commercial Page', 'https://ik.imagekit.io/habitro/slider/commercial.webp?updatedAt=1706606262907', 'Your Business Deserves a Bold & Beloved Space!', 'Make your entrepreneurial mark with our business-elevating and trendsetting spaces.', 1),
(4, 'Construction Page', 'https://ik.imagekit.io/habitro/slider/construction.webp?updatedAt=1706606262912', 'Constructing Buildings to Crafting Masterpieces with Skill and Will! ', 'We ideate and execute your ideal space with an inspiring touch.', 1),
(5, 'Renovation Page', 'https://ik.imagekit.io/habitro/slider/renovation.webp?updatedAt=1706606262944', 'Re-Innovate Your Way To Your Desired Space.', 'Revamp your space for a refreshed and rejuvenated look and feel!', 1),
(6, 'Contact Page', 'https://ik.imagekit.io/habitro/slider/contact.webp?updatedAt=1706606263010', 'Get in touch to build better together! ', '', 0),
(8, 'Error Page', 'https://ik.imagekit.io/habitro/slider/error-page.webp?updatedAt=1706606262531', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `title`, `content`, `date`) VALUES
(4, 'https://ik.imagekit.io/habitro/blogs/blog-1.jpg?updatedAt=1711364713524', 'Architecture in india', '<p>Architecture in India surveys the contemporary condition of the countrys built environment, showcasing a range of innovative projects and the diverse materials.</p><p><strong>Evoking the simplicity of rural life</strong></p><p>Perched in Kurumbagaram, a quaint little village in India, House on a Farm is a vacation home for city dwellers. The design by Architecture Interspace strives to satisfy the clients wish for tranquility and reflection. Thus, snuggled amongst the shade of sandalwood trees, fruit orchards, and paddy fields, the house provides a place far away from the bustle and hustle of urban life for weekend getaways.</p><p>The final composition takes shape as two concrete cuboids linked with a transition space, establishing multiple escapes to nature. Therefore, the house embraces rustic aesthetics using timeless design and materials but also adopts contemporary finishes to enable comfortable work from home at weekends.</p><p>The two cuboids host the living and cooking space on one side, and the bedrooms on the other all images by Architecture Interspace</p><p><strong>EVOKING THE SIMPLICITY OF RURAL LIFE</strong></p><p>For this project, the architects primary idea was to create a space that allows its residents to connect not only with its surroundings but also with their inner souls. Designed for a newly married couple and their parents, House on a Farm respects the raw natural beauty of this tiny village while framing its amazing lush views. The house also harbors ancestral ties, capturing the emotions and energies of the land, which once supported a family of ten brothers and their mothers meditation practices.</p><p>The core idea of the project was to revive the rural way of life that the ancestors had, interpreting it into a present-day culture and context. Within this concept, set far back from the street, the house allows for a beautifully landscaped buffer breathing space that gives only a sneak peek of the residence. Meanwhile, the building footprint is kept at 140 sqm to minimize the impact on local vegetation and for an efficient microclimate.</p>', '2024-02-24'),
(3, 'https://ik.imagekit.io/habitro/blogs/blog-2.jpg?updatedAt=1711364713735', 'House on a farms Architectural Arrangement', '<p>Architecture in India surveys the contemporary condition of the countrys built environment, showcasing a range of innovative projects and the diverse materials.</p><p><strong>Evoking the simplicity of rural life</strong></p><p>Perched in Kurumbagaram, a quaint little village in India, House on a Farm is a vacation home for city dwellers. The design by Architecture Interspace strives to satisfy the clients wish for tranquility and reflection. Thus, snuggled amongst the shade of sandalwood trees, fruit orchards, and paddy fields, the house provides a place far away from the bustle and hustle of urban life for weekend getaways.<br><br>The final composition takes shape as two concrete cuboids linked with a transition space, establishing multiple escapes to nature. Therefore, the house embraces rustic aesthetics using timeless design and materials but also adopts contemporary finishes to enable comfortable work from home at weekends.<br><br>The two cuboids host the living and cooking space on one side, and the bedrooms on the other, all images by Architecture Interspace.</p>', '2024-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`) VALUES
(10, 'https://ik.imagekit.io/habitro/construction/1.png?updatedAt=1707734018154'),
(11, 'https://ik.imagekit.io/habitro/construction/2.png?updatedAt=1707734017651'),
(12, 'https://ik.imagekit.io/habitro/construction/3.png?updatedAt=1707734018180'),
(13, 'https://ik.imagekit.io/habitro/construction/4.png?updatedAt=1707734018013'),
(14, 'https://ik.imagekit.io/habitro/construction/5.png?updatedAt=1707734018078'),
(15, 'https://ik.imagekit.io/habitro/construction/6.png?updatedAt=1707734018073'),
(16, 'https://ik.imagekit.io/habitro/construction/7.png?updatedAt=1707734017961'),
(17, 'https://ik.imagekit.io/habitro/construction/8.png?updatedAt=1707734018307'),
(18, 'https://ik.imagekit.io/habitro/construction/9.png?updatedAt=1707734018005');

-- --------------------------------------------------------

--
-- Table structure for table `calltoaction`
--

CREATE TABLE `calltoaction` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `copyhead` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `calltoaction`
--

INSERT INTO `calltoaction` (`id`, `page_title`, `copyhead`) VALUES
(1, 'Home Page', 'Building Your Dream Space is Just a Button Away!'),
(2, 'Residential Page', 'Building Your Dream Home is Just a Button Away! '),
(3, 'Commercial Page', 'Kickstart Your Business Build Today!'),
(4, 'Construction Page', 'Embark on your Construction Journey Today!'),
(5, 'Renovation Page', 'Get your Space a Revalidation through our Renovations');

-- --------------------------------------------------------

--
-- Table structure for table `commercial`
--

CREATE TABLE `commercial` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` text NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `commercial`
--

INSERT INTO `commercial` (`id`, `image`, `heading`, `paragraph`) VALUES
(1, 'https://ik.imagekit.io/habitro/commercial/tr:w-700,h-800/hospitality.jpg?updatedAt=1707124329192', 'Hospitality', 'Indulge your guests in a commercial finesse, irresistible interiors, and an inviting ambience, to give them a warm, welcoming hug with Habitro.'),
(2, 'https://ik.imagekit.io/habitro/commercial/tr:w-700,h-800/offices.jpg?updatedAt=1707124329210', 'Offices', 'From worthwhile workstations, sensational conference halls to cosy cafeterias,  we spruce up your work culture and productivity with our functional & fantabulous office spaces.'),
(3, 'https://ik.imagekit.io/habitro/commercial/tr:w-700,h-800/retail.jpg?updatedAt=1707124326446', 'Retail', 'Give your customers an ecstatic experience with our well - designed, dramatic retail spaces that boldly flaunt your brand & business identity.');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content_type` enum('Image','Text','Link','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `heading`, `content`, `content_type`) VALUES
(1, 'logo', 'https://ik.imagekit.io/habitro/company/logo.png?updatedAt=1706605809509', 'Image'),
(2, 'Sticky Logo', 'https://ik.imagekit.io/habitro/company/sticky-logo.png?updatedAt=1706601985466', 'Image'),
(3, 'Email', 'studio@habitro.com', 'Text'),
(4, 'Address', 'Habitro Design Spaces, 185, Grace towers 3rd floor, Thoraipakkam, OMR, Chennai-600097', 'Text'),
(5, 'Phone No', '+91 91500 86333', ''),
(6, 'Facebook', 'https://www.facebook.com/habitrodesignspace', 'Link'),
(7, 'Instagram', 'https://www.instagram.com/ihabitro/', ''),
(8, 'Linkedin', 'https://in.linkedin.com/', ''),
(9, 'Youtube', 'https://www.youtube.com/@habitro3511', '');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `data_filter` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `data_filter`) VALUES
(1, 'https://ik.imagekit.io/habitro/gallery/interiors/34.jpg?', 'work'),
(2, 'https://ik.imagekit.io/habitro/gallery/interiors/31.jpg?', 'work'),
(3, 'https://ik.imagekit.io/habitro/gallery/interiors/17.jpg?', 'work'),
(4, 'https://ik.imagekit.io/habitro/gallery/interiors/10.jpg?', 'work'),
(5, 'https://ik.imagekit.io/habitro/gallery/interiors/7.jpg?', 'work'),
(6, 'https://ik.imagekit.io/habitro/gallery/interiors/4.jpg?', 'work'),
(22, 'https://ik.imagekit.io/habitro/gallery/inspire/tv-wall-1.jpg?', 'tv-wall'),
(21, 'https://ik.imagekit.io/habitro/gallery/inspire/tv-wall.jpg?', 'tv-wall'),
(20, 'https://ik.imagekit.io/habitro/gallery/inspire/kitchen-2.jpg?', 'kitchen'),
(19, 'https://ik.imagekit.io/habitro/gallery/inspire/kitchen-1.jpg?', 'kitchen'),
(18, 'https://ik.imagekit.io/habitro/gallery/inspire/kitchen.jpg?', 'kitchen'),
(17, 'https://ik.imagekit.io/habitro/gallery/inspire/wardrobes-2.jpg?', 'wardrobe'),
(16, 'https://ik.imagekit.io/habitro/gallery/inspire/wardrobes.jpg?', 'wardrobe'),
(15, 'https://ik.imagekit.io/habitro/gallery/inspire/wardrobes-1.jpg?', 'wardrobe'),
(23, 'https://ik.imagekit.io/habitro/gallery/inspire/tv-wall-2.jpg?', 'tv-wall'),
(24, 'https://ik.imagekit.io/habitro/gallery/inspire/bedroom.jpg?', 'bedroom'),
(25, 'https://ik.imagekit.io/habitro/gallery/inspire/bedroom-1.jpg?', 'bedroom'),
(26, 'https://ik.imagekit.io/habitro/gallery/inspire/bedroom-2.jpg?', 'bedroom'),
(27, 'https://ik.imagekit.io/habitro/gallery/inspire/false%20ceiling.jpg?', 'falseceiling'),
(28, 'https://ik.imagekit.io/habitro/gallery/inspire/false%20ceiling-1.jpg?', 'falseceiling'),
(29, 'https://ik.imagekit.io/habitro/gallery/inspire/false%20ceiling-2.jpg?', 'falseceiling'),
(30, 'https://ik.imagekit.io/habitro/gallery/inspire/foyer-wall.jpg?', 'foyerwall'),
(31, 'https://ik.imagekit.io/habitro/gallery/inspire/foyer-wall-1.jpg?', 'foyerwall'),
(32, 'https://ik.imagekit.io/habitro/gallery/inspire/foyer-wall-2.jpg?', 'foyerwall'),
(33, 'https://ik.imagekit.io/habitro/gallery/inspire/pooja-unit.jpeg?', 'poojaroom'),
(34, 'https://ik.imagekit.io/habitro/gallery/inspire/pooja-room-3.jpg?', 'poojaroom'),
(35, 'https://ik.imagekit.io/habitro/gallery/inspire/poojaroom-2.jpg?', 'poojaroom');

-- --------------------------------------------------------

--
-- Table structure for table `leadform`
--

CREATE TABLE `leadform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'New',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `meta_title` text NOT NULL,
  `meta_content` text NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `meta_title`, `meta_content`, `slug`) VALUES
(1, 'Residential', '', '', 'residential'),
(2, 'Commercial', '', '', 'commercial'),
(3, 'Construction', '', '', 'construction'),
(4, 'Renovation', '', '', 'renovation'),
(5, 'Gallery Wall', '', '', 'gallery-wall'),
(6, 'Contact', '', '', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `title`, `content`, `package`) VALUES
(1, 'Design & Drawing', '<ol><li>2D Floor Plans</li><li>3D Elevations&nbsp;</li><li>Working Drawings For Execution</li></ol>', 'standard'),
(2, 'Design & Drawing', '<ol><li>2D Floor Plans</li><li>3D Elevation &amp; Walkthrough</li><li>Structural Drawing</li><li>Plumbing &amp; Electrical Layout</li><li>Furniture Layout&nbsp;</li><li>Working Drawings For Execution, Schedule Of Openings &amp; Sectional Drawings</li></ol>', 'premium'),
(3, 'Design & Drawing', '<ol><li>2D Floor Plans&nbsp;</li><li>3D Elevations All Sides &amp; Walkthrough&nbsp;</li><li>Structural Drawing&nbsp;</li><li>Plumbing &amp; Electrical Layout&nbsp;</li><li>Furniture Layout&nbsp;</li><li>Working Drawings For Execution, Schedule Of Openings &amp; Sectional Drawings</li></ol>', 'luxury'),
(10, 'Flooring & Wall Tiling', '<ol><li>Living, Kitchen, Dining &amp; Bedroom Tiles Upto Rs 50/ - Per Sqft</li><li>Staircase - Tiles Upto Rs 50 /- Per Sqft Balconies &amp; Sitout Areas - Anti Skid Tiles Upto Rs 45 /- Per Sqft</li><li>Bathroom/Toilet Wall &amp; Flooring Upto Rs 45/- Per Sqft</li><li>Parking Floor Upto Rs 45/- Per Sqft</li></ol>', 'standard'),
(11, 'Flooring & Wall Tiling', '<ol><li>Living, Kitchen, Dining &amp; Bedroom Tiles Upto Rs 75/- Per Sqft</li><li>Staircase - Tiles Upto Rs 75/- Per Sqft Balconies &amp; Sitout Areas - Anti Skid Tiles Upto Rs 60 /- Per Sqft</li><li>Bathroom/Toilet Wall &amp; Flooring Upto Rs 60/- Per Sqft</li><li>Parking Floor Upto Rs 60/- Per Sqft</li></ol>', 'premium'),
(12, 'Flooring & Wall Tiling', '<ol><li>Living, Kitchen, Dining &amp; Bedroom Tiles Upto Rs 120/- Per Sqft</li><li>Staircase - Granite Upto Rs 250/- Per Sqft Balconies &amp; Sitout Areas - Anti Skid Tiles Upto Rs 75/- Per Sqft</li><li>Bathroom/Toilet Wall &amp; Flooring Upto Rs 75/- Per Sqft</li><li>Parking Floor Upto Rs 75/- Per Sqft</li></ol>', 'luxury'),
(9, 'Structure & Core Materials', '<ol><li>Steel: JSW / TATA Or Equivalent Brand Cement: Ramco / Ultratech / Coromandel Or Equivalent Brand</li><li>Concrete Mix: RMC &nbsp;- M25 Grade</li><li>Blocks - 6 &amp; 4 Inches | Bricks 9 &amp; 4.5 Aggregates: 20MM &amp; 40MM</li><li>M - Sand: Blockwork &amp; P - Sand: Plastering Basement height: Upto 3.6 feet</li><li>Ceiling Height: 11 Feet (Floor to Floor) Waterproofing: Dr Fixit / FOSROC</li></ol>', 'luxury'),
(7, 'Structure & Core Materials', '<ol><li>Steel: GBR / Sumangala / Thirumala / ARS / Kamachi Or Equivalent Brand</li><li>Cement: Zuari / Penna / Chettinad Or Equivalent Brand</li><li>Concrete Mix: RMC - M20 Grade</li><li>Blocks - 6 &amp; 4 Inches | Bricks 9 &amp; 4.5 Aggregates: 20MM &amp; 40MM</li><li>M - Sand: Blockwork &amp; P - Sand: Plastering Basement height: Upto 2.6 feet</li><li>Ceiling Height: 10 Feet (Floor to Floor) Waterproofing: Dr Fixit</li></ol>', 'standard'),
(8, 'Structure & Core Materials', '<ol><li>Steel: ARS / Kamachi Or Equivalent Brand Cement: Ramco / Ultratech / Coromandel Or Equivalent Brand</li><li>Concrete Mix: RMC - M20 Grade</li><li>Blocks - 6 &amp; 4 Inches | Bricks 9 &amp; 4.5 Inches Aggregates: 20MM &amp; 40MM</li><li>M - Sand: Blockwork &amp; P - Sand: Plastering Basement height: Upto 3 feet</li><li>Ceiling Height: 10.5 Feet (Floor to Floor) Waterproofing: Dr Fixit<br>&nbsp;</li></ol>', 'premium'),
(16, 'Doors & Windows', '<ol><li>Bathroom Doors Will Be PVC Doors</li><li>2 Track Aluminium Windows With 5mm Plain Glass</li><li>2 - High strength bolt Safety Digital Locks or equivalent mechanical locks</li><li>Only One Main Door Per Unit: Teak Wood Frame Of 5″X3″ Inches With Teak Door Shutter - Per Door Including Fittings Upto Rs 35000 /-</li><li>Internal Doors: WPC Or Sal Frame Of 4″X3″ With Membrane Door Shutter - Per Door Including Fittings Like Handles, Locks, Aldrops, Hinges &amp; Tower Bolts Upto Rs 10000/-</li></ol>', 'standard'),
(17, 'Doors & Windows', '<ol><li>Only One Main Door Per Unit: Teak Wood Frame Of 6″X4″ Inches With Teak Door Shutter - Per Door Including Fittings Upto Rs 50000/-</li><li>Internal Doors: Wpc Or Sal Frame Of 4″X3″ With Membrane Door Shutter - Per Door Including Fittings Like Handles, Locks, Aldrops, Hinges &amp; Tower Bolts Upto Rs 12000/-</li><li>Bathroom Doors Will Be Wpc Doors</li><li>3 Track Upvc Windows With 5mm Glass Along With Ms Grill With A Budget Of Rs 600/- Per Sqft</li><li>4 - High strength bolt Safety Digital Locks or equivalent mechanical locks</li></ol>', 'premium'),
(18, 'Doors & Windows', '<ol><li>Only One Main Door Per Unit: Teak Wood Frame Of 6″X4″ Inches With Teak Door Shutter - Per Door Including Fittings Upto Rs 70000/-</li><li>Internal Doors: Wpc Or Sal Frame Of 5″X3″ With Laminate Door Shutter - Per Door Including Fittings Like Handles, Locks, Aldrops, Hinges &amp; Tower Bolts Upto Rs 15000/-</li><li>Bathroom Doors Will Be Wpc Doors</li><li>3 Track Upvc Windows With 5mm Glass Along With Ms Grill With A Budget Of Rs 700 /- Per Sqft Or Option Of Sal Wood Frames With Shutters</li><li>4 - High strength bolt Safety Digital Locks or equivalent mechanical locks</li></ol>', 'luxury'),
(19, 'Painting', '<ol><li>Wall &amp; Ceiling - 2 Coats Of Putty + 1 Coat Of Primer &amp; Painted With 2 Coats Of Asian Tractor Emulsion</li><li>Exterior Walls: 1 Coat Primer + 2 Coats Of Ace Emulsion</li><li>2 Coats of Enamel Paint For The Windows MS Grills Only</li><li>Brands Considered Are Asian/Berger/Dulux As Per Owner Choice</li></ol>', 'standard'),
(20, 'Painting', '<ol><li>Wall &amp; Ceiling - 2 Coats Of Putty + 1 Coat Of Primer &amp; Painted With 2 Coats Of Asian Premium Emulsion</li><li>Exterior Walls: 1 Coat Primer + 2 Coats Of Ace Emulsion</li><li>2 Coats of Enamel Paint For The Windows MS Grills Only</li><li>Brands Considered Are Asian/Berger/Dulux As Per Owner Choice</li></ol>', 'premium'),
(21, 'Painting', '<ol><li>Wall &amp; Ceiling - 2 Coats Of Putty + 1 Coat Of Primer &amp; Painted With 2 Coats Of Asian Royale Emulsion</li><li>Exterior Walls: 1 Coat Primer + 2 Coats Of Apex Emulsion</li><li>2 Coats of Enamel Paint For The</li><li>Windows MS Grills Only</li><li>Brands Considered Are Asian/Berger/Dulux As Per Owner Choice</li></ol>', 'luxury'),
(22, 'Kitchen & Bathroom Fixtures', '<ol><li>SS Kitchen Sink Of Worth Upto Rs 2000/- Kitchen Faucet &amp; Towel Ring Upto Rs 1500/-</li><li>Bathroom Sanitary Ware &amp; Cp Fitting Upto Rs 20000/- Per 1000 Sqft</li><li>Bathroom Accessories: Ewc, Health Faucet, Wash Basin, Diverter &amp; Overhead Shower</li><li>Brands Considered Are Parryware/Cera/EscoBasic models As Per Owner Choice</li></ol>', 'standard'),
(23, 'Kitchen & Bathroom Fixtures', '<ol><li>SS Kitchen Sink Of Worth Upto Rs 3000/- Kitchen Faucet &amp; Towel Ring Upto Rs 2500/-</li><li>Bathroom Sanitary Ware &amp; Cp Fitting Upto Rs 35000/- Per 1000 Sqft</li><li>Bathroom Accessories: Ewc, Health Faucet, Wash Basin, Diverter &amp; Overhead Shower</li><li>Brands Considered Are Hindware/Jaquar/Cera As Per Owner Choice</li></ol>', 'premium'),
(24, 'Kitchen & Bathroom Fixtures', '<ol><li>SS Or Carysil Kitchen Sink Of Worth Upto Rs 7000/-</li><li>Kitchen Faucet &amp; Towel Ring Upto Rs 4500/-</li><li>Bathroom Sanitary Ware &amp; Cp Fitting Upto Rs 60000/- Per 1000 Sqft</li><li>Bathroom Accessories: Ewc, Health Faucet, Wash Basin, Diverter &amp; Overhead Shower</li><li>Brands Considered Are</li><li>Jaquar/Grohe/Toto As Per Owner Choice</li></ol>', 'luxury'),
(25, 'Fabrication works', '<ol><li>MS Staircase</li><li>Railing MS Balcony Railing&nbsp;</li></ol>', 'standard'),
(26, 'Fabrication works', '<ol><li>MS Staircase</li><li>Railing MS Balcony Railing&nbsp;</li></ol>', 'premium'),
(27, 'Fabrication works', '<ol><li>SS Staircase</li><li>Railing SS Balcony Railing&nbsp;</li></ol>', 'luxury'),
(28, 'Electrical', '<ol><li>Wires: Finolex/Orbit</li><li>Switches: Anchor Roma/High Fi/Elleys Bedroom: 1 switch box with switches for 1 fan, 2 lights and 1 five amps socket with switch near door and another switch box with same set of switches near bed for two way control. 1 AC point, 1 fan point and 2 lights point</li><li>Bathroom: 1 switch box with 1 switch for light and 1 switch for heater near door &amp; 15 amps socket for heater 1 switch box with 1 five amps socket for hair dryer near mirror</li><li>Hall: 1 switch box near door for 2 fans, 2 lights &amp; 1 five amps socket and another switch box with same set of switches near sofa 1 switch box with 2 five amps sockets and switches along with cable point for TV connection</li><li>Dining: 1 switch box with switches for 1 fan &amp; 1 light</li><li>Pooja: 1 switch box with switch for 1 light Kitchen: 1 switch box with switch for 2 lights, 1 exhaust fan 1 switch point for chimney 1 switch box with 15 amps socket &amp; switch for refrigerator 1 switch box with two 15 amps socket &amp; switch for mixie/ oven</li><li>Service: 1 switch for light, 1 switch box with 15 amps socket &amp; switch for washing machine</li><li>Extras: One 5 amps switch &amp; socket for computer</li></ol>', 'standard'),
(29, 'Electrical', '<ol><li>Wires: Finolex/Orbit</li><li>Switches: Anchor Roma/High Fi/Elleys</li><li>Bedroom: 1 switch box with switches for 1 fan, 2 lights and 1 five amps socket with switch near door and another switch box with same set of switches near bed for two-way control. 1 AC point, 1 fan point and 2 lights point</li><li>Bathroom: 1 switch box with 1 switch for light and 1 switch for heater near the door &amp; 15 amps socket for heater. 1 switch box with 1 five amps socket for hair dryer near the mirror</li><li>Hall: 1 switch box near the door for 2 fans, 2 lights &amp; 1 five amps socket and another switch box with same set of switches near sofa. 1 switch box with 2 five amps sockets and switches along with cable point for TV connection</li><li>Dining: 1 switch box with switches for 1 fan &amp; 1 light</li><li>Pooja: 1 switch box with switch for 1 light</li><li>Kitchen: 1 switch box with switch for 2 lights, 1 exhaust fan. 1 switch point for chimney. 1 switch box with 15 amps socket &amp; switch for refrigerator. 1 switch box with two 15 amps socket &amp; switch for mixie/ oven.</li><li>Service: 1 switch for light, 1 switch box with 15 amps socket &amp; switch for washing machine</li><li>Extras: One 5 amps switch &amp; socket for computer</li></ol>', 'premium'),
(30, 'Electrical', '<ol><li>Wires: Finolex/Orbit</li><li>Switches: Anchor Roma/High Fi/Elleys</li><li>Bedroom: 1 switch box with switches for 1 fan, 2 lights and 1 five amps socket with switch near door and another switch box with same set of switches near bed for two-way control. 1 AC point, 1 fan point, and 2 lights point</li><li>Bathroom: 1 switch box with 1 switch for light and 1 switch for heater near the door &amp; 15 amps socket for heater. 1 switch box with 1 five amps socket for hair dryer near the mirror</li><li>Hall: 1 switch box near the door for 2 fans, 2 lights &amp; 1 five amps socket and another switch box with same set of switches near sofa. 1 switch box with 2 five amps sockets and switches along with cable point for TV connection</li><li>Dining: 1 switch box with switches for 1 fan &amp; 1 light</li><li>Pooja: 1 switch box with switch for 1 light</li><li>Kitchen: 1 switch box with switch for 2 lights, 1 exhaust fan. 1 switch point for chimney. 1 switch box with 15 amps socket &amp; switch for refrigerator. 1 switch box with two 15 amps socket &amp; switch for mixie/ oven.</li><li>Service: 1 switch for light, 1 switch box with 15 amps socket &amp; switch for washing machine</li><li>Extras: One 5 amps switch &amp; socket for computer</li></ol>', 'luxury'),
(31, 'Extra Charges', '<ol><li>CPVC/PVC: Ashirwad/Supreme/Astral</li><li>Bathroom Accessories: EWC, Health Faucet, Wash Basin, 2 in 1 Wall Mixer, Overhead Shower</li><li>All bathroom fittings are white color &amp; basic model in Parryware/Cera</li><li>Bathroom: 1 wash basin with tap, 1 shower with wall mixer for hot &amp; cold water, 1 floor mount western closet with health faucet.</li><li>Dining: 1 wash basin with tap</li><li>Kitchen: single stainless steel sink with 1 taps. 1 RO point</li><li>Service: 1 tap point &amp; water outlet point for washing machine</li></ol>', 'standard'),
(32, 'Extra Charges', '<ol><li>CPVC/PVC/UPVC: Ashirwad/Supreme/Astral</li><li>Bathroom Accessories: EWC, Health Faucet, Wash Basin, 2 in 1 Wall Mixer, Overhead Shower</li><li>All bathroom fittings are white color &amp; basic model in Jaquar/Parryware/Hindware</li><li>Bathroom: 1 wash basin with tap, 1 shower with wall mixer for hot &amp; cold water, 1 floor mount western closet with health faucet.</li><li>Dining: 1 wash basin with tap</li><li>Kitchen: Double stainless steel sink with 1 taps. 1 RO point</li><li>Service: 1 tap point &amp; water outlet point for washing machine</li></ol>', 'premium'),
(33, 'Extra Charges', '<ol><li>CPVC/PVC/UPVC: Ashirwad/Supreme/Astral</li><li>Bathroom Accessories: EWC, Health Faucet, Wash Basin, 3 in 1 Wall Mixer, Overhead Shower &amp; 1- Hand shower</li><li>All bathroom fittings are white color &amp; basic model in Jaquar/Kohler/Hindware Italian</li><li>Bathroom: 1 wash basin with tap, 1 shower with wall mixer for hot &amp; cold water, 1 floor mount western closet with health faucet.</li><li>Dining: 1 wash basin with tap</li><li>Kitchen: Double stainless steel sink with 1 taps. 1 RO point</li><li>Service: 1 tap point &amp; water outlet point for washing machine</li></ol>', 'luxury'),
(34, 'Others', '<ol><li>1 Loft in each bedroom &amp; kitchen room on the shorter side of the wall</li><li>Parapet Wall 3 Feet High (included if headroom is built)</li></ol>', 'standard'),
(35, 'Others', '<ol><li>1 Loft in each bedroom &amp; kitchen room on the shorter side of the wall</li><li>Parapet Wall 3 Feet High (included if headroom is built)</li></ol>', 'premium'),
(36, 'Others', '<ol><li>1 Loft in each bedroom &amp; kitchen room on the shorter side of the wall</li><li>Parapet Wall 3 Feet High (included if headroom is built)</li></ol>', 'luxury'),
(37, 'Warranty Period', '<ol><li>10 Year Of Warranties on Structure &amp; 1 Year of Waterproofing</li><li>Fixture Warranties As Per Brand Makes</li></ol>', 'standard'),
(38, 'Warranty Period', '<ol><li>10 Year Of Warranties on Structure &amp; 1 Year of Waterproofing</li><li>Fixture Warranties As Per Brand Makes</li></ol>', 'premium'),
(39, 'Warranty Period', '<ol><li>10 Year Of Warranties on Structure &amp; 1 Year of Waterproofing</li><li>Fixture Warranties As Per Brand Makes</li></ol>', 'luxury'),
(40, 'Extra Charges', '<ol><li>Compound Wall</li><li>Lift</li><li>Carpentry &amp; other wooden work</li><li>EB Connections &amp; Charges</li><li>Govt. approval charges</li><li>Water Connections &amp; Charges</li><li>Underground water storage Sump Rs 25 Per Litre</li><li>Overhead concrete tank Rs 35 per litre</li><li>Gates</li><li>Elevation Work Extra</li><li>Water recycling tank based on the requirement.</li><li>Terrace weathering course</li><li>Additional foundation height</li><li>Soil Testing</li><li>Structural designing</li><li>Electrical/plumbing drawings</li><li>Interior 3D view or walkthrough</li><li>Outer area development (setback)</li><li>CCTV Camera wiring &amp; Setup</li><li>Main door area, back side area &amp; Terrace safety gate</li></ol>', 'standard'),
(41, 'Extra Charges', '<ol><li>Compound Wall</li><li>Lift</li><li>Carpentry &amp; other wooden work</li><li>EB Connections &amp; Charges</li><li>Govt. approval charges</li><li>Water Connections &amp; Charges Underground water storage Sump Rs 25 Per Litre</li><li>Overhead concrete tank Rs 35 per litre Gates</li><li>Elevation Work Extra</li><li>Water recycling tank based on the requirement.</li><li>Additional foundation height</li><li>Soil Testing</li><li>Outer area development (setback) CCTV Camera wiring &amp; Setup</li><li>Main door area, back side area &amp; Terrace safety gate</li></ol>', 'premium'),
(42, 'Extra Charges', '<ol><li>Compound Wall</li><li>Lift</li><li>Carpentry &amp; other wooden work</li><li>EB Connections &amp; Charges</li><li>Govt. approval charges</li><li>Water Connections &amp; Charges Underground water storage Sump Rs 25 Per Litre</li><li>Overhead concrete tank Rs 35 per litre Gates</li><li>Elevation Work Extra</li><li>Water recycling tank based on the requirement.</li><li>Additional foundation height</li><li>Soil Testing</li><li>Outer area development (setback) CCTV Camera wiring &amp; Setup</li><li>Main door area, back side area &amp; Terrace safety gate</li></ol>', 'luxury');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_1bhk`
--

CREATE TABLE `pricing_1bhk` (
  `id` int(11) NOT NULL,
  `variant` enum('basic','premium','luxury') NOT NULL,
  `bhks` varchar(255) NOT NULL,
  `includes` text NOT NULL,
  `pricing` varchar(255) NOT NULL,
  `amountinwords` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pricing_1bhk`
--

INSERT INTO `pricing_1bhk` (`id`, `variant`, `bhks`, `includes`, `pricing`, `amountinwords`, `caption`) VALUES
(1, 'basic', '2bhk', '<ol><li>2 X Wardrobe | Modular Kitchen | Crockery Unit | Pooja unit | TV Unit | Foyer unit | Laundry Unit</li><li>BWP grade ply for kitchen &amp; Commercial Ply for wardrobes</li><li>EBCO Fittings</li><li>1 mm &nbsp;Laminate Finish outer surface</li><li>0.8 mm Laminate Finish Inner surface</li></ol>', '4,81,500', '', ''),
(2, 'premium', '2bhk', '<ol><li>2 X Wardrobe | Modular Kitchen | Crockery Unit | Pooja unit | TV Unit | Foyer unit | Laundry Unit</li><li>BWP grade ply for kitchen &amp; Commercial Ply for wardrobes</li><li>Hettich or Hafele Fittings</li><li>1.25 mm Acrylic Finish</li><li>0.8 mm Laminate Finish Inner surface</li></ol>', '5,77,800', '', ''),
(3, 'luxury', '2bhk', '<ol><li>2 X Wardrobe | Modular Kitchen | Crockery Unit | Pooja unit | TV Unit | Foyer unit | Laundry Unit</li><li>BWP grade ply for kitchen &amp; HDHMR for wardrobes</li><li>Hettich or Hafele Fittings</li><li>1.25 mm Lacquered glass or PU Finish</li><li>0.8 mm Laminate Finish Inner surface</li></ol>', '7,06,200', '', ''),
(4, 'basic', '3bhk', '<ol><li>3 X Wardrobe | Modular Kitchen | Crockery Unit | Pooja unit | TV Unit | Foyer unit | Laundry Unit</li><li>BWP grade ply for kitchen &amp; Commercial Ply for wardrobes</li><li>EBCO Fittings</li><li>1 mm &nbsp;Laminate Finish outer surface</li><li>0.8 mm Laminate Finish Inner surface</li></ol>', '5,65,500', '', ''),
(5, 'premium', '3bhk', '<ol><li>3 X Wardrobe | Modular Kitchen | Crockery Unit | Pooja unit | TV Unit | Foyer unit | Laundry Unit</li><li>BWP grade ply for kitchen &amp; Commercial Ply for wardrobes</li><li>Hettich or Hafele Fittings</li><li>1.25 mm Acrylic Finish</li><li>0.8 mm Laminate Finish Inner surface</li></ol>', '6,78,600', '', ''),
(6, 'luxury', '3bhks', '<ol><li>3 X Wardrobe | Modular Kitchen | Crockery Unit | Pooja unit | TV Unit | Foyer unit | Laundry Unit</li><li>BWP grade ply for kitchen &amp; HDHMR for wardrobes</li><li>Hettich or Hafele Fittings</li><li>1.25 mm Lacquered glass or PU Finish</li><li>0.8 mm Laminate Finish Inner surface</li></ol>', '8,29,400', '', ''),
(7, 'basic', '4bhk', '<ol><li>4 X Wardrobe | Modular Kitchen | Crockery Unit | Pooja unit | TV Unit | Foyer unit | Laundry Unit</li><li>BWP grade ply for kitchen &amp; Commercial Ply for wardrobes</li><li>EBCO Fittings</li><li>1 mm &nbsp;Laminate Finish outer surface</li><li>0.8 mm Laminate Finish Inner surface</li></ol>', '6,49,500', '', ''),
(8, 'premium', '4bhk', '<ol><li>4 X Wardrobe | Modular Kitchen | Crockery Unit | Pooja unit | TV Unit | Foyer unit | Laundry Unit</li><li>BWP grade ply for kitchen &amp; Commercial Ply for wardrobes</li><li>Hettich or Hafele Fittings</li><li>1.25 mm Acrylic Finish</li><li>0.8 mm Laminate Finish Inner surface</li></ol>', '7,79,400', '', ''),
(9, 'luxury', '4bhk', '<ol><li>4 X Wardrobe | Modular Kitchen | Crockery Unit | Pooja unit | TV Unit | Foyer unit | Laundry Unit</li><li>BWP grade ply for kitchen &amp; HDHMR for wardrobes</li><li>Hettich or Hafele Fittings</li><li>1.25 mm Lacquered glass or PU Finish</li><li>0.8 mm Laminate Finish Inner surface</li></ol>', '9,52,600', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `recentwork`
--

CREATE TABLE `recentwork` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `video` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `recentwork`
--

INSERT INTO `recentwork` (`id`, `image`, `video`) VALUES
(1, 'https://ik.imagekit.io/habitro/commercial/tr:w-400,h-400/recent-1.webp?updatedAt=1706621516226', 'https://www.youtube.com/watch?v=7e90gBu4pas'),
(2, 'https://ik.imagekit.io/habitro/commercial/tr:w-400,h-400/recent-2.webp?updatedAt=1706621517402', 'https://www.youtube.com/watch?v=7e90gBu4pas'),
(3, 'https://ik.imagekit.io/habitro/commercial/tr:w-400,h-400/recent-3.webp?updatedAt=1706621516874', 'https://www.youtube.com/watch?v=7e90gBu4pas');

-- --------------------------------------------------------

--
-- Table structure for table `renovation`
--

CREATE TABLE `renovation` (
  `id` int(11) NOT NULL,
  `first` varchar(255) NOT NULL,
  `second` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `renovation`
--

INSERT INTO `renovation` (`id`, `first`, `second`) VALUES
(1, 'https://ik.imagekit.io/habitro/renovation/tr:w-700,h-400/before.jpg?updatedAt=1706624131321', 'https://ik.imagekit.io/habitro/renovation/tr:w-700,h-400/after.jpg?updatedAt=1706624131325'),
(2, 'https://ik.imagekit.io/habitro/renovation/before-2.jpg?updatedAt=1708688278707', 'https://ik.imagekit.io/habitro/renovation/after-2.jpg?updatedAt=1708688278371');

-- --------------------------------------------------------

--
-- Table structure for table `residentialbrands`
--

CREATE TABLE `residentialbrands` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residentialbrands`
--

INSERT INTO `residentialbrands` (`id`, `image`) VALUES
(9, 'https://ik.imagekit.io/habitro/residential/brands/2.png?updatedAt=1707730655800'),
(10, 'https://ik.imagekit.io/habitro/residential/brands/5.png?updatedAt=1707730655602'),
(11, 'https://ik.imagekit.io/habitro/residential/brands/3.png?updatedAt=1707730655616'),
(12, 'https://ik.imagekit.io/habitro/residential/brands/4.png?updatedAt=1707730655598'),
(13, 'https://ik.imagekit.io/habitro/residential/brands/6.png?updatedAt=1707730655624'),
(14, 'https://ik.imagekit.io/habitro/residential/brands/8.png?updatedAt=1707730655629'),
(15, 'https://ik.imagekit.io/habitro/residential/brands/7.png?updatedAt=1707730655564');

-- --------------------------------------------------------

--
-- Table structure for table `residentialcard`
--

CREATE TABLE `residentialcard` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `descripition` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `residentialcard`
--

INSERT INTO `residentialcard` (`id`, `image`, `content`, `descripition`) VALUES
(1, 'https://ik.imagekit.io/habitro/residential/paln.jpg?updatedAt=1708416385128', 'Plan', 'This stage of turnkey says, Your wish is our command. Your expectations and desires for your dream home are taken into account while we draft a plan.'),
(2, 'https://ik.imagekit.io/habitro/residential/execute.jpg?updatedAt=1708416386213', 'Execute ', 'Once you approve the plan, we pamper your home from laying foundations and layouts to final interior touches.'),
(3, 'https://ik.imagekit.io/habitro/residential/handover.jpg?updatedAt=1708415741825', 'Hand over', 'Finally, we hand over the completed masterpiece to you, ensuring all your needs and wishes are whole-heartedly fulfilled.');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `data_filter` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `image`, `service_name`, `data_filter`) VALUES
(1, '1.png', 'Space Planning', 'residential'),
(2, '2.png', 'Home Automation', 'residential'),
(3, '3.png', 'Customized Woodworks Interiors', 'residential'),
(4, '4.png', 'Balcony Makeovers', 'residential'),
(5, '5.png', 'False Ceilings', 'residential'),
(6, '6.png', 'Artworks', 'residential'),
(7, '7.png', 'Furniture and Fixtures', 'commercial'),
(8, '8.png', 'Lighting', 'commercial'),
(9, '9.png', 'Color Scheme', 'commercial'),
(10, '10.png', 'Flooring', 'commercial'),
(11, '11.png', 'Technology Integration', 'commercial'),
(12, '12.png', 'Brand Identity', 'commercial'),
(13, '13.png', 'Planning and Design', 'construction'),
(14, '14.png', 'Site Preparation', 'construction'),
(15, '15.png', 'Foundation Construction', 'construction'),
(16, '16.png', 'Frame Construction', 'construction'),
(17, '17.png', 'Enclosure', 'construction'),
(18, '18.png', 'Interior Finishes', 'construction'),
(19, '19.png', 'Demolition', 'renovation'),
(20, '20.png', 'Structural Repairs', 'renovation'),
(21, '21.png', 'Plumbing and Electrical Updates', 'renovation'),
(22, '22.png', 'Insulation and Energy Efficiency', 'renovation'),
(23, '23.png', 'Interior Finishes', 'renovation'),
(24, '24.png', 'Exterior Improvements', 'renovation');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `thumbnail` text NOT NULL,
  `video` text NOT NULL,
  `testimonial` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `thumbnail`, `video`, `testimonial`, `company`) VALUES
(1, '', '', 'I recommend Habitro for any construction or interior design project. Highest quality work and they are incredibly organized and efficient in project management. They delivered our project on time, and their team was professional and trustworthy throughout', 'Arvind'),
(2, '', '', 'Habitro team transformed our space with incredible skill and efficiency. We appreciated their transparent communication and felt in good hands from start to finish. A trustworthy service we did happily engage in again.', 'Sofiya Fathima '),
(3, '', '', 'From start to finish, Habitro attention to detail in the construction and design was remarkable. They took up and managed our home interiors with the utmost professionalism, delivering on time and without any hidden costs.', 'Ashwanth Subramani'),
(4, '', '', 'Working with Habitro was great. They made our home beautiful and listened to what we wanted at every step. Everything was done well and on time. We trusted them and they didnt let us down. They are the best partner we could have hoped for interiors.', 'Bharath Kumar'),
(5, '', '', 'Habitro did an amazing job in our office. Their designs and the quality are amazing. They made sure our space was both beautiful and functional. The team was always there to help and really earned our trust.', 'Kishore Gupta');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contact`, `password`, `role_id`, `status`) VALUES
(1, 'habitro', 'admin', '+91 89390 93259', '1a1dc91c907325c69271ddf0c944bc72', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calltoaction`
--
ALTER TABLE `calltoaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial`
--
ALTER TABLE `commercial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leadform`
--
ALTER TABLE `leadform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_1bhk`
--
ALTER TABLE `pricing_1bhk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recentwork`
--
ALTER TABLE `recentwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renovation`
--
ALTER TABLE `renovation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residentialbrands`
--
ALTER TABLE `residentialbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residentialcard`
--
ALTER TABLE `residentialcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `calltoaction`
--
ALTER TABLE `calltoaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commercial`
--
ALTER TABLE `commercial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `leadform`
--
ALTER TABLE `leadform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pricing_1bhk`
--
ALTER TABLE `pricing_1bhk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recentwork`
--
ALTER TABLE `recentwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `renovation`
--
ALTER TABLE `renovation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `residentialbrands`
--
ALTER TABLE `residentialbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `residentialcard`
--
ALTER TABLE `residentialcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
