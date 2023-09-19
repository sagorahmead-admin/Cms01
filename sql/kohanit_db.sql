-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 08:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kohanit_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `_contactinfo`
--

CREATE TABLE `_contactinfo` (
  `pageid` int(11) NOT NULL,
  `phone1` varchar(25) NOT NULL,
  `phone2` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `tw_link` varchar(255) NOT NULL,
  `ln_link` varchar(255) NOT NULL,
  `be_link` varchar(255) NOT NULL,
  `modified_count` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_contactinfo`
--

INSERT INTO `_contactinfo` (`pageid`, `phone1`, `phone2`, `email`, `address`, `fb_link`, `tw_link`, `ln_link`, `be_link`, `modified_count`, `modified_date`, `created`) VALUES
(6, '+880 566 1111 985', '+880 657 1111 576', ' Kohanit@gmail.com join@kohanit.com', '168/170, Avenue 01, USA', '#', '#', '#', '#', 27, '2023-05-27 20:26:25', '2023-05-08 10:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `_contactpage`
--

CREATE TABLE `_contactpage` (
  `cid` int(11) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `cemail` varchar(25) NOT NULL,
  `cnumber` varchar(14) NOT NULL,
  `csubject` varchar(25) NOT NULL,
  `ctext` text NOT NULL,
  `cstatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_contactpage`
--

INSERT INTO `_contactpage` (`cid`, `cname`, `cemail`, `cnumber`, `csubject`, `ctext`, `cstatus`) VALUES
(8, 'faruk', 'only1faruk84@gmail.com', '01684285963', 'Other', 'test2', 'Pending'),
(9, 'faruk', 'only1faruk84@gmail.com', '01684285963', 'Support', 'test3', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `_counter`
--

CREATE TABLE `_counter` (
  `id` int(11) NOT NULL,
  `counter_icon` varchar(255) NOT NULL,
  `counter_name` varchar(255) NOT NULL,
  `count` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_counter`
--

INSERT INTO `_counter` (`id`, `counter_icon`, `counter_name`, `count`, `date`) VALUES
(8, 'count-1.png', 'Project Completed', '250', '2023-05-29 17:46:15'),
(9, 'count-2.png', 'Satisfied Clients', '250', '2023-05-29 17:46:42'),
(10, 'count-3.png', 'Expert Teams', '150', '2023-05-29 17:47:02'),
(11, 'count-4.png', 'Win Awards', '28', '2023-05-29 17:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `_logo`
--

CREATE TABLE `_logo` (
  `id` int(11) NOT NULL,
  `logoname` varchar(25) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_logo`
--

INSERT INTO `_logo` (`id`, `logoname`, `file`) VALUES
(1, 'menulogo', 'logomain.png'),
(2, 'footerlogo', 'logomain.png');

-- --------------------------------------------------------

--
-- Table structure for table `_page1`
--

CREATE TABLE `_page1` (
  `pageid` int(11) NOT NULL,
  `cont1_title1` varchar(255) NOT NULL,
  `cont2_text1` text NOT NULL,
  `cont3_img` varchar(255) NOT NULL,
  `cont3_img2` varchar(255) NOT NULL,
  `cont4_text2` text NOT NULL,
  `cont5_title2` varchar(255) NOT NULL,
  `cont6_text3` text NOT NULL,
  `cont7_title3` varchar(255) NOT NULL,
  `cont8_pt1` varchar(60) NOT NULL,
  `cont9_pt2` varchar(60) NOT NULL,
  `cont10_pt3` varchar(60) NOT NULL,
  `cont11_pt4` varchar(50) NOT NULL,
  `cont12_pp1` int(3) NOT NULL,
  `cont13_pp2` int(3) NOT NULL,
  `cont14_pp3` int(3) NOT NULL,
  `cont15_pp4` int(3) NOT NULL,
  `modified_count` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_page1`
--

INSERT INTO `_page1` (`pageid`, `cont1_title1`, `cont2_text1`, `cont3_img`, `cont3_img2`, `cont4_text2`, `cont5_title2`, `cont6_text3`, `cont7_title3`, `cont8_pt1`, `cont9_pt2`, `cont10_pt3`, `cont11_pt4`, `cont12_pp1`, `cont13_pp2`, `cont14_pp3`, `cont15_pp4`, `modified_count`, `modified_date`, `created`) VALUES
(1, 'Direction with our company', 'When looking for a Low Current Service provider in USA that is KohanIt Approved and has exceptional after sale service, we are the name to rely on. With extensive experience, our professionals are qualified and fully insured to ensure your safety. Whether you need a surveillance system for your home or business or SMATV installation, we can cater to all your security needs.\r\n\r\nWe understand that the security industry is very dynamic. We ensure that we are developed according to the latest technology. We try our best to provide you with security solutions for all types of residential and commercial sites. Our wide range of security services ensures that all your security needs are met.\r\n\r\nHaving been in the security industry for a significant amount of time, Al-Khoory Solutions is one of the top service providers for all and any security needs that you might have. We have effectively secured numerous properties to perfection as our entire team consists of highly trained and SIRA Approved.\r\n\r\nAl Khoory Solutions creates tailored security solutions throughout the UAE, implementing the latest technology to maximise protection. Our story began in 2008 and over the last one decade we’ve grown to deliver the highest quality and most technologically advanced security systems, whilst we’re regularly completing CCTV and burglar alarm installations, offering bespoke services to domestic and commercial clients at competitive prices.', 'about-bottom.jpg', 'about-top.png', 'https://www.youtube.com/watch?v=0O2aH4XLbto', 'valuable-skill.jpg', 'kohanit Surveillance provides professional security camera installation services to Minnesota, Wisconsin, and Iowa businesses. We also offer do-it-yourself packages that come with free remote support. When looking into a security system for your business, something to consider is the installation. You may be able to install a system yourself, but in many cases professional expertise is helpful – especially when upgrading or adding components that were not a part of a previous system. kohanit Surveillance will provide you with the expertise needed to make sure the system is correctly installed. kohanit provides services to help customers determine the best installation options. Do you need security cameras both inside and outside your business? Is it best to keep your security cameras concealed or visible? Is it better to have a pan-tilt-zoom surveillance camera in a specific location so the camera can cover more ground in surveilling the property, or are standard surveillance cameras more appropriate? Do you require audio? kohanit Surveillance will work with you to find the right installation solutions for your business. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.', 'Our Skills', 'SECURITY CAMERA INSTALL', 'STRUCTURED CABLING INSTALL', 'LOW_VOLTAGE_SYSTEM', 'INTERCOMS', 100, 100, 70, 80, 31, '2023-05-05 21:13:53', '2023-05-05 21:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `_page2`
--

CREATE TABLE `_page2` (
  `pageid` int(2) NOT NULL,
  `cont1_title1` varchar(100) NOT NULL,
  `cont2_title2` varchar(100) NOT NULL,
  `cont3_text1` text NOT NULL,
  `cont3_img` varchar(255) NOT NULL,
  `cont4_img` varchar(255) NOT NULL,
  `cont5_text2` text NOT NULL,
  `cont6_text3` text NOT NULL,
  `cont7_img` varchar(255) NOT NULL,
  `cont7_title3` varchar(50) NOT NULL,
  `cont7_text` text NOT NULL,
  `cont8_slider1` varchar(50) NOT NULL,
  `cont9_title4` varchar(50) NOT NULL,
  `cont10_text4` text NOT NULL,
  `cont11_slider2` varchar(50) NOT NULL,
  `cont12_img` text NOT NULL,
  `cont12_title` text NOT NULL,
  `cont12_text` text NOT NULL,
  `cont13_img` text NOT NULL,
  `cont13_title` text NOT NULL,
  `cont13_text` text NOT NULL,
  `cont14_img` text NOT NULL,
  `cont14_title` text NOT NULL,
  `cont14_text` text NOT NULL,
  `modified_count` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_page2`
--

INSERT INTO `_page2` (`pageid`, `cont1_title1`, `cont2_title2`, `cont3_text1`, `cont3_img`, `cont4_img`, `cont5_text2`, `cont6_text3`, `cont7_img`, `cont7_title3`, `cont7_text`, `cont8_slider1`, `cont9_title4`, `cont10_text4`, `cont11_slider2`, `cont12_img`, `cont12_title`, `cont12_text`, `cont13_img`, `cont13_title`, `cont13_text`, `cont14_img`, `cont14_title`, `cont14_text`, `modified_count`, `modified_date`, `created`) VALUES
(2, 'Security Camera Installation', 'Protecting people, property and assets', 'Our comprehensive range of advanced CCTV surveillance systems can work in isolation or as part of an integrated security solution, protecting property, people and assets from the risk of theft and fire across all sectors, from single sites to the most complex multi-site operations. Whether you need to have eyes on your vacant properties or sites, have mains connectivity issues, or need a smarter CCTV surveillance system, the Clearway team is on hand with a range of business CCTV measures to suit your requirements. View our range of products below.', 'hik-vision-cctv-camera-at-best-prices.png', 'cctv-towers-clearway-e1642775564634-700x550.webp', 'Temporary CCTV Tower (solar or mains)', 'Clearway inView CCTV Towers are a unique development from Clearway’s stable of innovations and run on mains or solar power; have wide coverage and provide a highly visible deterrent factor. With connection to multiple remote sensors placed around sites of almost any size, they will detect movement and instruct the mast-mounted camera to rotate, zoom, focus and live-record the event.', 'installation1.jpg', 'Temporary CCTV', 'Often, a client requires increased security for a vacant property or temporary site – which is exposed to illegal entry when not guarded. There are multiple reasons criminals might target these locations and the impact can be extensive in terms of downtime, the costs of repairs, managing insurance claims, and the stress and working hours required to recover from a security breach.\r\n\r\nIn many cases, our clients utilise a new locality on a short-term basis and want to offer their personnel the same level of protection, as they would expect on a permanent site. In these instances, temporary CCTV is an excellent solution for keeping your premises secure despite the challenging environment. However, it can be used by businesses of all kinds who appreciate the flexibility that temporary CCTV provides.\r\nTemporary CCTV systems are commonly for shorter-term use.\r\nTemporary CCTV is an excellent shorter-term solution as it offers great flexibility and value for money. Being simple and quick to install/remove these solutions are ideal where coverage is required for a shorter period, such as festivals, construction sites or vacant properties awaiting refurbishment.', '', 'Our Latest Project', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  ', '', 'fixed-cctv-solutions-700x466.webp', 'Hardwired/Fixed CCTV – Permanent Fixed CCTV', 'CCTV plays a key role in keeping customers, employees and physical premises safe. The presence of a well set up, visible camera system can deter criminals before they even consider a break-in or theft. They give the people in and around your premises a sense of security. If something does go wrong, there will be a record of what happens.\r\n\r\nProfessional fixed CCTV cameras and wired CCTV systems are an ideal way of keeping your property protected continuously. No matter if you want to prevent unauthorised access and trespassing, vandalism, theft or any other illegal activity, fixed CCTV systems help ensure your organisation is protected from day one.', 'industri.jpg', 'Industrial CCTV', 'CCTV for industrial sites such as depots, warehouses, manufacturing plants and production lines is necessarily complex, with a wide range of variables that dictate the right cameras, technology, recording system and viewing acce\r\n\r\nMany industrial businesses have countless assets exposed to criminal theft, such as tools, vehicles, machinery, equipment and materials. They require continual active surveillance in order to deter prospective intruders, guarantee the safety of business-critical components and provide oversight of ongoing work processes.\r\nClearway’s industrial CCTV solutions can be as simple or as advanced as required, with options such as:\r\n\r\n1. Short-term CCTV hire periods for particularly high-risk activities such as taking delivery of valuable machine tooling parts or during time-sensitive work programmes.\r\n\r\n2. Static industrial CCTV cameras with tamper-proof fixings to monitor entranceways, loading bays, emergency exits and roller shutter doors.\r\n\r\n3. Mast-mounted CCTV to cover large expanses of land with pan, tilt and zoom functionality to assist in evaluating whether an activity is suspicious.\r\n\r\nBusiness owners may also wish to integrate analytics such as vehicle number plate recognition for the highest level of security. These systems can automate entrance gates, raise entrance barriers to permit entry to authorised vehicles or deliveries, and prevent access to any vehicle that has not been logged in a pre-approved database.', 'routine-cctv-maintenance.webp', 'CCTV Maintenance', 'Without routine, preventative maintenance, your CCTV system is far more likely to develop faults or, worse still, fail completely. If CCTV monitors are not manned you may even be unaware a problem exists until the time evidence is required from the cameras.\r\n\r\nIf you’re aware the CCTV system is not functioning correctly you’re left to rely solely on the visual deterrent effect of CCTV but, without being able to access or use crucial CCTV footage when you need it as evid', 38, '0000-00-00 00:00:00', '2023-05-06 22:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `_page3`
--

CREATE TABLE `_page3` (
  `pageid` int(11) NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `content3` text NOT NULL,
  `content4` text NOT NULL,
  `content5` text NOT NULL,
  `content6` text NOT NULL,
  `content7` text NOT NULL,
  `content8` text NOT NULL,
  `content9` text NOT NULL,
  `content10` text NOT NULL,
  `content11` text NOT NULL,
  `content12` text NOT NULL,
  `content13` text NOT NULL,
  `content14` text NOT NULL,
  `content15` text NOT NULL,
  `content16` text NOT NULL,
  `content17` text NOT NULL,
  `modified_count` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_page3`
--

INSERT INTO `_page3` (`pageid`, `content1`, `content2`, `content3`, `content4`, `content5`, `content6`, `content7`, `content8`, `content9`, `content10`, `content11`, `content12`, `content13`, `content14`, `content15`, `content16`, `content17`, `modified_count`, `modified_date`, `created`) VALUES
(3, 'structured+cabling.jpg', 'structured cabling  installation', 'No matter what business or industry you’re in, you need reliable communications cabling contractors for professional structured cabling solutions. Network wiring requires technical expertise and knowledge of structured cabling installation, and The Network Installers knows how to do it best. Creating a physical link between source and terminal equipment, data communication cabling allows for flexibility and speed in running multiple applications.', 'cabling.PNG', 'Communications Cabling Contractors.', 'No matter what business or industry you’re in, you need reliable communications cabling contractors for professional structured cabling solutions. Network wiring requires technical expertise and knowledge of structured cabling installation, and The Network Installers knows how to do it best. Creating a physical link between source and terminal equipment, data communication cabling allows for flexibility and speed in running multiple applications.', 'Structured Cabling System Design', 'In today’s digital world, an efficient structured cabling system design is highly essential to companies and businesses. This type of cabling provides data transmission that is fast and free from external interference, while also adhering to the use of quality materials. A robust structured cabling installation is key to achieving a high-speed data network that is cost-effective and low maintenance.', 'electrical-data-cabling.png.webp', 'CT_S-scaled.webp', 'Structured Cabling Vendors', 'With certified and experienced field technicians in-house, The Network Installers will provide you quality structured wiring and network solutions. As structured cabling vendors, we have years of industry experience in network and structured cabling installation for offices, residences, commercial properties and industrial complexes. We provide the best services for your structured cabling infrastructure. Connect with us today!', 'Cisco-meraki-installers.webp', 'https://www.youtube.com/66f1abec-48ef-4bb2-a0f7-20e1aa3e0b29', 'Here to provide you quality service and support, we take pride in the brands we install, ensuring a custom fit to your needs. As verified providers of structured cabling solutions, we handle your structured cabling installation requirements for a robust network.', 'Install Your Structured Cabling!!', 'Connect with our experts today to know more about structured cabling or network wiring solutions for your business.', 120, '2023-06-01 16:42:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `_page4`
--

CREATE TABLE `_page4` (
  `pageid` int(11) NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `content3` text NOT NULL,
  `content4` text NOT NULL,
  `content5` text NOT NULL,
  `content6` text NOT NULL,
  `content7` text NOT NULL,
  `content8` text NOT NULL,
  `content9` text NOT NULL,
  `content10` text NOT NULL,
  `content11` text NOT NULL,
  `content12` text NOT NULL,
  `modified_count` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_page4`
--

INSERT INTO `_page4` (`pageid`, `content1`, `content2`, `content3`, `content4`, `content5`, `content6`, `content7`, `content8`, `content9`, `content10`, `content11`, `content12`, `modified_count`, `modified_date`, `created`) VALUES
(4, 'INTERCOM SYSTEM INSTALLATION', 'Communicate more conveniently and enhance protection at your home, office or business with top of the line intercom systems. As intercom systems installers in NYC, Vertex Security delivers effective and simple-to-use intercom systems featuring camera and video, remote control and mobile App. We offer end-to-end design, installation, repair and maintenance of wired and wireless intercom system', 'Intercom-system-maintenance-1110x737.jpg', 'comelit-video-intercom-unit.jpg', 'Kohanit is a leading security company and intercom installer based in New York City. We specialize in installation, upgrade, replacement, repair and maintenance of audio/video intercom systems from the world’s most trusted brands, including Comelit, Aiphone, Siedle and others.\r\n\r\nFrom residential intercom systems for apartment buildings to commercial intercom systems for offices, businesses, schools, hospitals and more, our top of the line intercom solutions are an efficient way to better security and visitor identification at your facility, whether performing a system upgrade, replacing an existing system or installing a complete new system.', 'VIDEO INTERCOM SYSTEMS', 'Compared to audio only intercoms, video intercom systems hold a clear advantage- users can visually identify visitors and communicate with them either over the intercom unit or via smartphone App.\r\n\r\nkohanit custom designable video intercom systems come with the latest features such as color imagery, video memory, and pan, tilt and zoom views. In addition, many of today’s advanced systems feature integration with apps for both iOS and Android mobile devices.', 'video-intercom-app.jpg', 'intercom-repair-1.jpg', 'Intercom-repair.jpg', 'The Benefits of Intercom Repair & Maintenance with ClearView', 'Regular intercom repair, service, and maintenance keeps your intercom fully functional at all times, ensuring the highest level of security for your premises, staff and equipment.\r\n\r\nThe benefits of our intercom system maintenance services include:\r\nComplete peace of mind with a fully functional intercom system Guaranteed fast response from one of our highly trained engineers Reliable and cost-effective maintenance of your intercom equipment Prolonged life of your equipment due to regular maintenance 24-hours a day, 7-days a week helpline for advice and support', 40, '2023-06-01 19:32:32', '2023-06-01 17:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `_page5`
--

CREATE TABLE `_page5` (
  `pageid` int(11) NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `content3` text NOT NULL,
  `content4` text NOT NULL,
  `content5` text NOT NULL,
  `content6` text NOT NULL,
  `content7` text NOT NULL,
  `content8` text NOT NULL,
  `content9` text NOT NULL,
  `content10` text NOT NULL,
  `content11` text NOT NULL,
  `content12` text NOT NULL,
  `content13` text NOT NULL,
  `content14` text NOT NULL,
  `content15` text NOT NULL,
  `content16` text NOT NULL,
  `content17` text NOT NULL,
  `modified_count` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_page5`
--

INSERT INTO `_page5` (`pageid`, `content1`, `content2`, `content3`, `content4`, `content5`, `content6`, `content7`, `content8`, `content9`, `content10`, `content11`, `content12`, `content13`, `content14`, `content15`, `content16`, `content17`, `modified_count`, `modified_date`, `created`) VALUES
(5, 'low voltage access control solutions', 'Access Control Technologies welcomes the opportunity to provide our experienced Low Voltage System Design services for your next building or residential community project. Your project will begin with a thorough site and operations evaluation with one of our expert low voltage engineers to determine and review various types of structured cabling systems. Pre-baked templates don’t work. Your business requires a unique mix of technologies. We will consult with you to learn about any current operational challenges and discuss your business goals to deliver a scalable, low voltage system design you can depend on for years to come', 'Access-Control-Cloud-SDM-03.jpg', 'IMG_20181121_132256.webp', 'OUR LOW VOLTAGE SYSTEM DESIGN SERVICES INCLUDE:', 'KohanIt is proud to provide complete intercom services for all major brands and types of intercoms. We provide intercom installation, intercom repair, intercom system sales, intercom integration with security systems, smart intercom services, and much more. We serve all areas of New York City and many regions surrounding New York', 'Do I need a low voltage specialty technician or a general electrician?', 'Low voltage systems are a sub-specialty to the general commercial electrical trade, requiring expertise and knowledge about fast-changing technologies that many non-specialty electrical contractors do not maintain. Low voltage systems are critical infrastructures to support safety and deter theft specifically when it comes to warehouse and logistics facilities, self-storage, MDU/apartment. There are unlimited factors to know and understand when designing a low voltage network. Access control, camera surveillance, network, telephone, Wi-Fi access, video and audio components require a wiring network that is separate and apart from standard electrical wiring. We are experts at designing and installing low voltage systems that provide efficient pathways for all your access control and digital security technology systems to connect, communicate, and share your business data. Explore our Frequently Asked Questions section below to learn more about low voltage system design', 'person-holding-prox-card-to-reader.webp', 'Lanmor-Automated-Access-Control-Solution-Installations.jpg', 'ADD SECURITY AND SMART LOW VOLTAGE SYSTEM DESIGN:', 'Horizontal Cabling Low Voltage System Design Vertical (Backbone) Cabling Low Voltage System Design Telecommunications Enclosure Low Voltage System Design Entrance Facility Low Voltage System Design Work Area Components Low Voltage System Design Consolidation Point Low Voltage System Design', 'Cisco-meraki-installers.webp', 'https://www.youtube.com/66f1abec-48ef-4bb2-a0f7-20e1aa3e0b29', 'Here to provide you quality service and support, we take pride in the brands we install, ensuring a custom fit to your needs. As verified providers of structured cabling solutions, we handle your structured cabling installation requirements for a robust network.', 'Install Low Voltage Access Control', 'Connect with our experts today to know more about structured cabling or\r\nnetwork wiring solutions for your business.', 39, '2023-06-01 20:41:00', '2023-06-01 18:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `_pages`
--

CREATE TABLE `_pages` (
  `id` int(11) NOT NULL,
  `priority_id` int(11) NOT NULL,
  `pagetitle` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_pages`
--

INSERT INTO `_pages` (`id`, `priority_id`, `pagetitle`, `category`, `file`, `date`) VALUES
(1, 1, 'Home', 'Home', 'index.php', '2023-05-03 23:19:39'),
(2, 2, 'Who are We', 'Who are We', 'who_are_we.php', '2023-05-03 23:22:35'),
(3, 3, 'Security Camera', 'Security Camera', 'security_camera.php', '2023-05-03 23:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `_skill_progress`
--

CREATE TABLE `_skill_progress` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `skill_progress` int(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_slides`
--

CREATE TABLE `_slides` (
  `id` int(11) NOT NULL,
  `pagelink` varchar(50) NOT NULL,
  `pagetitle` varchar(50) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `short_text` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_slides`
--

INSERT INTO `_slides` (`id`, `pagelink`, `pagetitle`, `headline`, `short_text`, `filename`, `created`, `modified`) VALUES
(3, 'LOW_VOLTAGE_SYSTEM.php', 'Our Services', 'Low voltage access control Installation', 'Optimize uptime and scale your communication, data, audio/video, and video surveillance operations with a quality low voltage system design', 'man-florist-working-green-house.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'structured_cabling.php', 'Our Services', 'Structured Cabling Installation', 'Kohan It provides Structured Cabling System USA like a full range of structured wiring installation, optical fiber cable sustenance and network troubleshooting and fault callout service', 'male-electrician-works-switchboard-with-electrical-connecting-cable.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'intercoms.php', 'Our Services', 'Intercoms Installation Services', 'KohanIt is New York’s proven intercom installation company. With more than 25years of experience in NYC ', 'Intercom-Installer-MR.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `_social_links`
--

CREATE TABLE `_social_links` (
  `id` int(11) NOT NULL,
  `social_icon` varchar(255) NOT NULL,
  `social_name` varchar(255) NOT NULL,
  `short_form` varchar(255) NOT NULL,
  `social_link` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_social_links`
--

INSERT INTO `_social_links` (`id`, `social_icon`, `social_name`, `short_form`, `social_link`, `date`) VALUES
(1, 'fab fa-facebook-f', 'Facebook', 'Fb', 'https://facebook.com', '2023-05-29 18:37:34'),
(2, 'fab fa-twitter', 'Twitter', 'Tw', 'https://twitter.com', '2023-05-29 20:54:56'),
(6, 'fab fa-pinterest-p', 'Pinterest', 'Pn', 'https://www.pinterest.com/', '2023-05-29 20:55:58'),
(8, 'fab fa-instagram', 'intstagram', 'Ins', 'https://www.instagram.com', '2023-05-29 21:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `_users`
--

CREATE TABLE `_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_users`
--

INSERT INTO `_users` (`id`, `first_name`, `last_name`, `email`, `password`, `date`) VALUES
(1, 'Dylan', 'Hunter', 'admin@kohanit.com', 'admin', '2023-05-03 19:08:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_contactinfo`
--
ALTER TABLE `_contactinfo`
  ADD PRIMARY KEY (`pageid`);

--
-- Indexes for table `_contactpage`
--
ALTER TABLE `_contactpage`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `_counter`
--
ALTER TABLE `_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_logo`
--
ALTER TABLE `_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_page1`
--
ALTER TABLE `_page1`
  ADD PRIMARY KEY (`pageid`);

--
-- Indexes for table `_pages`
--
ALTER TABLE `_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_skill_progress`
--
ALTER TABLE `_skill_progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_slides`
--
ALTER TABLE `_slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_social_links`
--
ALTER TABLE `_social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_users`
--
ALTER TABLE `_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_contactinfo`
--
ALTER TABLE `_contactinfo`
  MODIFY `pageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `_contactpage`
--
ALTER TABLE `_contactpage`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `_counter`
--
ALTER TABLE `_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `_logo`
--
ALTER TABLE `_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_page1`
--
ALTER TABLE `_page1`
  MODIFY `pageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_pages`
--
ALTER TABLE `_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_skill_progress`
--
ALTER TABLE `_skill_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_slides`
--
ALTER TABLE `_slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `_social_links`
--
ALTER TABLE `_social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `_users`
--
ALTER TABLE `_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
