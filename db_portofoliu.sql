-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2015 at 11:11 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_portofoliu`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('75bbb00843d9fd6c1d018a72a24a0e37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36', 1436775271, ''),
('6c7cd3e65288a6fae3647d72ac479807', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36', 1436778532, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_users`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `block` tinyint(4) NOT NULL DEFAULT '0',
  `user_type` enum('SA','A') DEFAULT 'SA' COMMENT 'SA: Super Admin,A: Admin',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin_users`
--

INSERT INTO `tbl_admin_users` (`id`, `username`, `email`, `password`, `block`, `user_type`) VALUES
(1, 'demo', 'abhishek@devzone.co.in', '7e466fc01a0c7932e96a4a925b11b06a', 0, 'SA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms`
--

CREATE TABLE IF NOT EXISTS `tbl_cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) DEFAULT NULL,
  `content` text,
  `dateAdded` timestamp NOT NULL,
  `dateModified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_cms`
--

INSERT INTO `tbl_cms` (`id`, `label`, `content`, `dateAdded`, `dateModified`) VALUES
(1, 'about', '<div id="sep"><br />\r\n<div class="container"><br />\r\n<div class="row centered"><br />\r\n<div class="col-md-8 col-md-offset-2"><br />\r\n<h1>I live in Bucharest</h1>\r\n<br />\r\n<h3 class="mb">Lorem Ipsum is simply dummy text<br />of the printing and typesetting industry.</h3>\r\n<br /> <button class="btn btn-conf btn-clear">Request for Information</button></div>\r\n</div>\r\n<!--/row--></div>\r\n<!--/container--></div>\r\n<p style="padding-left: 30px; text-align: left;"><!--/.sep--></p>', '0000-00-00 00:00:00', '2015-07-13 11:00:10'),
(7, 'zzcxasd', '<p>zxcasdasdssadsad</p>', '2015-07-13 08:04:07', '2015-07-13 11:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE IF NOT EXISTS `tbl_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projectTitle` varchar(255) NOT NULL,
  `projectAuthor` varchar(100) NOT NULL,
  `projectUrl` varchar(255) NOT NULL,
  `projectDescription` text NOT NULL,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `projectThumbnail` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`id`, `projectTitle`, `projectAuthor`, `projectUrl`, `projectDescription`, `dateUpdated`, `projectThumbnail`) VALUES
(10, 'Free Radicals', 'noahblon', 'wEfCz', 'CSS-only particle animation\r\n', '2015-07-12 18:11:39', '1ebd5f6eac095bbf26f3a349adfae287.jpg'),
(11, 'Circles, text and getImageData', 'rachsmith', 'fBoiD', 'I''m back with more of them moving circles. This script uses getImageData to form the text with particles. You can do some fun stuff with text and Canvas this way. Once again I''m using createjs for Canvas manipulation and the greensock library for easy tweening.', '2015-07-12 18:12:39', '0cc34d5d1772d955ec4ec549cedb3f22.jpg'),
(13, 'CSS Mars Landing', 'mgitch', 'pECcD', 'A little animation of a spaceship landing on what may not have been an uninhabited planet.\r\n', '2015-07-12 18:14:48', 'afcb86b2e1f9ee348618c0c94cdd9b9a.jpg'),
(14, 'Tiny city', 'stepan', 'dfjDL', 'Tiny city animation made entirely using CSS3.', '2015-07-12 18:15:33', '5c6904c8263933c86335c33841426b2d.jpg'),
(15, 'Moving things around with Velocity.js', 'rachsmith', 'Fxuia', 'I''m moving around a whole bunch of elements with Julian Shapiro''s Velocity.js. It''s running pretty well on my Chrome at anywhere between 60 - 48 frames per second, impressive :)\r\n\r\nIt took around 4 hours to bang this out after first looking at the documentation, pretty easy to use if you are already a jQuery user. http://julian.com/research/velocity/\r\n\r\nNo markup because why select when you can create right?\r\n\r\n*** I should add that this sort of thing (animation sequence) isn''t really what Velocity.js was built for, but I just wanted to crank up the elements/intensity to see how the browser handled it. Incorporating Velocity.js in to your average UI transitions/animations should be a dream :)', '2015-07-12 18:16:52', '03a23afac873c6a0e2a88d854b02a5de.jpg'),
(16, 'SVG CSS3 Menu / Burger Button', 'kyleHenwood', 'Alayb', 'Professor X -> Wolverine.\r\n\r\nA collection of svg + svg masking combined with HTML and CSS3 animations used to create a nifty button, I wrote a thing about why I had to mask and explained in more detail what''s happening here: https://raygun.io/blog/2014/07/making-svg-html-burger-button/', '2015-07-12 18:18:34', 'f6a311b0cf427456dbbce7f4b07a96df.jpg'),
(17, 'Chromatic triangle', 'felipedefarias', 'yiBjr', 'Chromatic triangle', '2015-07-12 18:19:36', '64cd80b52d0c43f04a08eff58647b72b.jpg'),
(18, 'CSS-only Weather App Concept', 'davidkpiano', 'ByNPQw', 'Dribbble rework of an original shot by Sergey Valiukh.\r\n', '2015-07-12 18:21:01', '0e1e74adf477a696193bfbdf10895f9c.jpg'),
(19, 'Pure CSS One Div Weather Animated Icons', 'fbrz', 'iqtlk', 'Pure CSS One Div Weather Animated Icons\r\n', '2015-07-12 18:22:09', '63a3ebeb947980a6a6f03f29bb858d65.jpg'),
(20, 'Sneeze the dragon', 'Yakudoo', 'yNjRRL', 'Help the dragon to make fire, click as fast as possible then release. A smoke and fire study using ThreeJS and TweenMax.\r\n', '2015-07-12 18:23:12', '99d84334b650b1bc6556a69f00416f88.jpg'),
(21, 'Breaking Bad', 'TimPietrusky', 'Bsegb', 'A tribute to the best fucking series in the world.\r\n\r\nJust some CSS and SVG. I created the SVG from the original Logo with Photoshop (path) and Illustrator (SVG).\r\n\r\nThe making of: http://timpietrusky.com/breaking-bad-logo\r\n\r\nThe original Logo is © by American Movie Classics Company LLC.', '2015-07-12 18:24:11', '1b4e8e413fcfb141b04b2987f2f1a91b.jpg'),
(22, 'Submarine with CSS', 'ajerez', 'EaEEOW', 'Inspiration: http://drbl.in/nOzJ', '2015-07-12 18:25:30', '35cf7dd2529cbc6158e8226314e88b10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `signup_date` datetime DEFAULT NULL,
  `phone_mobile` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `address_street` varchar(150) DEFAULT NULL,
  `address_city` varchar(100) DEFAULT NULL,
  `address_state` varchar(100) DEFAULT NULL,
  `address_country` varchar(100) DEFAULT NULL,
  `address_postalcode` varchar(20) DEFAULT NULL,
  `deleted` enum('Y','N') DEFAULT 'N',
  `user_status` enum('A','B') DEFAULT 'A' COMMENT 'A: Active; B: Blocked',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=649 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
