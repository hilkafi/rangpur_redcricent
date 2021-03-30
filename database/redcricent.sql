-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 09:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redcricent`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `date`, `category_id`, `sub_category_id`, `title`, `img`, `video_link`, `description`, `created_at`, `updated_at`) VALUES
(4, '2021-03-15', 7, NULL, 'Duis aute irure dolor in reprehenderit', '1616289181.jpg', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Scelerisque in dictum non consectetur a erat nam. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Sit amet commodo nulla facilisi nullam vehicula ipsum. Vitae elementum curabitur vitae nunc sed. Vel pretium lectus quam id leo in. Proin fermentum leo vel orci porta non. Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Tortor vitae purus faucibus ornare suspendisse sed nisi. Porttitor massa id neque aliquam vestibulum morbi. Placerat vestibulum lectus mauris ultrices. Ut tristique et egestas quis ipsum suspendisse ultrices gravida.</p>', '2021-03-20 19:13:01', '2021-03-27 00:24:09'),
(5, '2021-03-15', 5, NULL, 'viverra suspendisse potenti. Habitant morbi tristique senectus', '1616289336.jpg', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel pharetra vel turpis nunc eget lorem dolor sed. Nunc sed augue lacus viverra vitae congue eu consequat ac. Purus non enim praesent elementum facilisis leo vel fringilla. Vitae congue eu consequat ac felis donec. Placerat vestibulum lectus mauris ultrices eros in cursus turpis. Vel quam elementum pulvinar etiam. Est ullamcorper eget nulla facilisi etiam dignissim. Donec massa sapien faucibus et molestie ac feugiat sed lectus. Donec ultrices tincidunt arcu non sodales neque sodales. Scelerisque felis imperdiet proin fermentum leo vel. Elit sed vulputate mi sit amet mauris commodo. Cursus eget nunc scelerisque viverra mauris. Et egestas quis ipsum suspendisse. Sed viverra ipsum nunc aliquet bibendum enim. Sagittis id consectetur purus ut faucibus pulvinar. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc. Aliquam ut porttitor leo a diam sollicitudin tempor. Morbi tristique senectus et netus et malesuada fames. Est ullamcorper eget nulla facilisi etiam dignissim. Diam phasellus vestibulum lorem sed risus. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum. At elementum eu facilisis sed odio morbi quis commodo odio. Nullam non nisi est sit amet facilisis magna. Id venenatis a condimentum vitae sapien pellentesque habitant morbi tristique. Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Congue eu consequat ac felis donec. Quisque egestas diam in arcu cursus euismod. Amet porttitor eget dolor morbi. Sed enim ut sem viverra aliquet eget sit amet. Ipsum dolor sit amet consectetur. Eget nunc lobortis mattis aliquam faucibus purus in massa. Risus nec feugiat in fermentum posuere urna. Senectus et netus et malesuada fames ac. Vitae tortor condimentum lacinia quis vel eros donec ac. Netus et malesuada fames ac turpis egestas integer eget aliquet. Sed cras ornare arcu dui vivamus arcu. Sed viverra tellus in hac habitasse platea dictumst vestibulum rhoncus. Maecenas pharetra convallis posuere morbi leo. Mus mauris vitae ultricies leo integer malesuada. Mauris sit amet massa vitae tortor. Iaculis urna id volutpat lacus laoreet non curabitur. Mauris cursus mattis molestie a iaculis at. Fermentum dui faucibus in ornare. Id diam maecenas ultricies mi eget mauris. Sem viverra aliquet eget sit amet tellus cras. Euismod in pellentesque massa placerat. Ultrices tincidunt arcu non sodales neque sodales ut etiam. Risus in hendrerit gravida rutrum quisque non tellus orci. A erat nam at lectus urna duis convallis. Scelerisque varius morbi enim nunc faucibus. Habitant morbi tristique senectus et netus et. Velit ut tortor pretium viverra suspendisse potenti. Habitant morbi tristique senectus et netus et malesuada fames ac. Dui faucibus in ornare quam viverra orci sagittis eu volutpat. Scelerisque in dictum non consectetur a erat nam. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Sit amet commodo nulla facilisi nullam vehicula ipsum. Vitae elementum curabitur vitae nunc sed. Vel pretium lectus quam id leo in. Proin fermentum leo vel orci porta non. Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Tortor vitae purus faucibus ornare suspendisse sed nisi. Porttitor massa id neque aliquam vestibulum morbi. Placerat vestibulum lectus mauris ultrices. Ut tristique et egestas quis ipsum suspendisse ultrices gravida.</p>', '2021-03-20 19:15:36', '2021-03-27 00:24:19'),
(6, '2021-03-16', 5, 2, 'uet nibh praesent tristique. Eu sem integer vitae justo.', '1616289401.jpg', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:16:41', '2021-03-20 19:16:41'),
(7, '2021-03-16', 5, 2, 'ullamcorper dignissim cras tincidunt. Ac turpis egestas integer', '1616289458.jpg', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel. Sed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas. Elit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum. Elementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.</p>', '2021-03-20 19:17:38', '2021-03-26 22:27:01'),
(8, '2021-03-21', 10, NULL, 'feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper', '1616289528.jpg', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:18:48', '2021-03-25 01:55:48'),
(9, '2021-03-21', 10, NULL, 'Gravida quis blandit turpis cursus. Urna condimentum mattis', '1616289587.jpg', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel. Sed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas. Elit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum. Elementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.</p>', '2021-03-20 19:19:47', '2021-03-26 22:28:26'),
(10, '2021-03-14', 4, NULL, 'iquet nibh praesent tristique. Eu sem integer vitae justo.', '1616289622.jpg', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:20:22', '2021-03-20 19:20:22'),
(11, NULL, 8, NULL, 'ullamcorper dignissim cras tincidunt Eu sem integer vitae justo.', '1616289666.jpg', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:21:06', '2021-03-24 22:28:50'),
(12, '2021-03-21', 4, NULL, 'euismod nisi. Sagittis vitae et leo duis ut diam qua', '1616289793.jpg', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel. Sed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas. Elit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum. Elementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.</p>', '2021-03-20 19:23:13', '2021-03-27 00:24:40'),
(13, '2021-03-21', 7, NULL, 'adipiscing elit, sed do eiusmod tempor incididunt ut', '1616289859.jpg', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:24:19', '2021-03-20 19:24:19'),
(14, '2021-03-21', 7, NULL, 'honcus est pellentesque elit u', '1616289898.jpg', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:24:58', '2021-03-20 19:24:58'),
(15, '2021-03-15', 10, NULL, 'Eu sem integer vitae justo.', '1616289939.jpg', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:25:39', '2021-03-25 01:55:34'),
(16, '2021-03-16', 8, NULL, 'This is publication title', '1616424639.jpg', NULL, 'This is description.', '2021-03-22 08:50:39', '2021-03-22 08:50:39'),
(17, '2021-03-25', 6, NULL, 'This is title with tiny editor', '1616664452.jpg', NULL, '<p>This is <strong>description</strong></p>\r\n<p><em>This is italic</em></p>\r\n<p style=\"padding-left: 40px;\">This is bullet</p>\r\n<p style=\"padding-left: 40px;\">this is not bullet</p>', '2021-03-25 03:27:32', '2021-03-25 03:27:32'),
(18, '2021-03-26', 8, NULL, 'euismod nisi. Sagittis vitae et leo duis ut diam qua', '1616819473.jpg', NULL, '<p><span style=\"color: #3c354e; font-family: Roboto, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">ed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Scelerisque in dictum non consectetur a erat nam. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Sit amet commodo nulla facilisi nullam vehicula ipsum. Vitae elementum curabitur vitae nunc sed. Vel pretium lectus quam id leo in. Proin fermentum leo vel orci porta non. </span></p>\r\n<p><span style=\"color: #3c354e; font-family: Roboto, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Tortor vitae purus faucibus ornare suspendisse sed nisi. Porttitor massa id neque aliquam vestibulum morbi. Placerat vestibulum lectus mauris ultrices. Ut tristique et egestas quis ipsum suspendisse ultrices gravida.</span></p>', '2021-03-26 22:31:13', '2021-03-27 00:24:59'),
(19, '2021-03-26', 9, NULL, 'm ipsum is a placeholder text commonly use', '1616819582.jpg', NULL, '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>', '2021-03-26 22:33:02', '2021-03-27 00:25:17'),
(20, '2021-03-25', 16, NULL, 'meaningful content. Lorem ipsum', '1616819638.png', NULL, '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>', '2021-03-26 22:33:58', '2021-03-26 22:33:58');
INSERT INTO `blogs` (`id`, `date`, `category_id`, `sub_category_id`, `title`, `img`, `video_link`, `description`, `created_at`, `updated_at`) VALUES
(21, '2021-03-25', 6, NULL, 'meaningful content. Lorem ipsum', '1616819639.png', NULL, '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>', '2021-03-26 22:33:59', '2021-03-27 00:25:35'),
(22, '2021-03-26', 10, NULL, 'Hand Jewellery', '1616819716.jpg', NULL, '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>', '2021-03-26 22:35:16', '2021-03-27 00:25:51'),
(23, '2021-03-26', 9, NULL, 'Hand Jewellery', '1616819717.jpg', NULL, '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p>', '2021-03-26 22:35:17', '2021-03-27 00:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('blog','project') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `type`, `name`, `description`, `created_at`, `updated_at`) VALUES
(4, 'blog', 'Report', 'This is news', '2021-03-15 20:49:32', '2021-03-15 22:07:58'),
(5, 'blog', 'News', 'This is news', '2021-03-15 20:49:32', '2021-03-15 20:49:32'),
(6, 'blog', 'Stories', 'This is story', '2021-03-20 19:03:17', '2021-03-20 19:03:17'),
(7, 'blog', 'Focus', 'This is focus category', '2021-03-20 19:03:37', '2021-03-20 19:03:37'),
(8, 'blog', 'Publication', 'This is publication category.', '2021-03-22 08:46:56', '2021-03-22 08:46:56'),
(9, 'blog', 'Notice', 'This is Notice Category', '2021-03-24 22:38:40', '2021-03-24 22:38:40'),
(10, 'blog', 'Upcoming Events', 'Event', '2021-03-25 01:47:09', '2021-03-25 01:47:09'),
(11, 'project', 'Disaster Risk Management', NULL, '2021-03-26 22:02:58', '2021-03-26 22:02:58'),
(12, 'project', 'Disaster Response', NULL, '2021-03-26 22:03:37', '2021-03-26 22:03:37'),
(13, 'project', 'Training', NULL, '2021-03-26 22:03:58', '2021-03-26 22:03:58'),
(14, 'project', 'Community Development', NULL, '2021-03-26 22:04:14', '2021-03-26 22:04:14'),
(15, 'project', 'Planning And Development', NULL, '2021-03-26 22:05:41', '2021-03-26 22:05:41'),
(16, 'project', 'Health', NULL, '2021-03-26 22:06:00', '2021-03-26 22:06:00'),
(17, 'project', 'Youth And Volunteers', NULL, '2021-03-26 22:06:16', '2021-03-26 22:06:16'),
(18, 'project', 'Cross Cutting Issues', NULL, '2021-03-26 22:06:31', '2021-03-26 22:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Kafi', 'anytimeuseforsobuj@gmail.com', '01310147227', NULL, 'This is demo message.', '2021-03-28 21:57:06', '2021-03-28 21:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `donate_get_bloods`
--

CREATE TABLE `donate_get_bloods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_line` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donate_get_bloods`
--

INSERT INTO `donate_get_bloods` (`id`, `unit_name`, `address`, `hot_line`, `is_approved`, `created_at`, `updated_at`) VALUES
(2, 'ParkMore', 'This is address', '4674645', '1', '2021-03-18 23:02:38', '2021-03-18 23:02:38'),
(3, 'Lalbag', 'This is another address', '4565464', '1', '2021-03-18 23:02:58', '2021-03-18 23:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `donate_us`
--

CREATE TABLE `donate_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_banking_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donate_us`
--

INSERT INTO `donate_us` (`id`, `intro`, `mobile_banking_info`, `bank_details`, `img`, `description`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 'Your thoughtful donation, of any amount or value can go a long way towards helping communities, families and individuals shape their lives in new and improved ways. From new cattle to new books, from improved sanitation to greater awareness, your donation is crucial to lives across Bangladesh.\r\n\r\nSee below for different ways you can donate online, in person, as well as to our dedicated fundraising bank account.', 'bkash', 'Write a check, deposit cash, or transfer funds to BDRCS’ central fundraising account. The details of our account are as follows:\r\n\r\nAccount Number: 0000240000191\r\n\r\nBank Name: Sonali Bank\r\n\r\nBank Address: Sonali Bank, Moghbazar Branch, Dhaka, Bangladesh\r\n\r\nSwift code: BSONBDDHLOD', '1616379920.jpg', 'This is descrition hdfgh', '1', '2021-03-18 22:21:37', '2021-03-21 20:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `executive_committees`
--

CREATE TABLE `executive_committees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `type_of_volunteer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_contract_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_or_birth_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `interest_in_blood_donation` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` enum('Single','Married','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upazila_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_village_word_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `any_time_service` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_joining` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_type` enum('rcy','upazila') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `life_members`
--

CREATE TABLE `life_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `type_of_volunteer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_contract_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_or_birth_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `interest_in_blood_donation` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` enum('Single','Married','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upazila_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_village_word_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `any_time_service` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_joining` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_type` enum('rcy','upazila') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `life_members`
--

INSERT INTO `life_members` (`id`, `name`, `registration_number`, `name_bangla`, `joining_date`, `type_of_volunteer`, `contract_number`, `father_name`, `mother_name`, `father_occupation`, `mother_occupation`, `parent_contract_number`, `nid_or_birth_no`, `email`, `date_of_birth`, `interest_in_blood_donation`, `blood_group`, `gender`, `marital_status`, `institute_name`, `educational_status`, `district_name`, `upazila_name`, `house_village_word_name`, `img`, `any_time_service`, `reason_for_joining`, `unit_type`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 'yhjghjkg', '74578678', 'dhgfh', '2021-03-21', NULL, '456345', 'dghdhsz', 'fgfhgd', NULL, NULL, NULL, '546464', 'rice@gmail.com', '2021-03-11', NULL, 'A+', 'Male', 'Single', NULL, 'cfghfghg', NULL, 'badarganj', 'fghfgjh', '1617021757.png', NULL, NULL, NULL, '1', '2021-03-29 06:42:37', '2021-03-29 06:42:37'),
(2, 'rthfghfdxh', NULL, NULL, '1970-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '1', '2021-03-29 22:52:54', '2021-03-29 22:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_15_110551_create_categories_table', 2),
(5, '2021_03_15_111148_create_categories_table', 3),
(6, '2021_03_15_111326_create_sub_categories_table', 4),
(7, '2021_03_15_111447_create_speeches_table', 5),
(8, '2021_03_15_111840_create_blogs_table', 6),
(9, '2021_03_15_112456_create_volunteers_table', 7),
(10, '2021_03_15_113256_create_life_members_table', 8),
(11, '2021_03_15_113849_create_office_staff_table', 9),
(12, '2021_03_15_114325_create_projects_table', 10),
(13, '2021_03_15_115047_create_donate_us_table', 11),
(14, '2021_03_15_115357_create_donate_get_bloods_table', 12),
(15, '2021_03_15_115610_create_social_media_table', 13),
(16, '2021_03_15_115811_create_contact_us_table', 14),
(17, '2021_03_26_031240_create_pages_table', 15),
(18, '2021_03_27_054350_create_sliders_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `office_staff`
--

CREATE TABLE `office_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `contract_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_contract_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_or_birth_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `interest_in_blood_donation` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` enum('Single','Married','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upazila_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_village_word_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_staff`
--

INSERT INTO `office_staff` (`id`, `name`, `registration_number`, `name_bangla`, `designation`, `joining_date`, `contract_number`, `father_name`, `mother_name`, `father_occupation`, `mother_occupation`, `parent_contract_number`, `nid_or_birth_no`, `email`, `date_of_birth`, `interest_in_blood_donation`, `blood_group`, `gender`, `marital_status`, `institute_name`, `educational_status`, `district_name`, `upazila_name`, `house_village_word_name`, `img`, `created_at`, `updated_at`) VALUES
(2, 'gvjhrgfh', '6546541', 'yjhdyh', 'hjyj', '2021-03-18', '41654165165', 'gfyhfd', 'ghdjh', NULL, NULL, NULL, '146546541', 'sweet@gmail.com', '2021-03-25', NULL, 'O+', 'Female', 'Single', NULL, 'dfgdgd', NULL, 'tfhfghf', 'fghdf', '1617076796.webp', '2021-03-29 21:59:56', '2021-03-29 21:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `img`, `video_link`, `description`, `created_at`, `updated_at`) VALUES
(2, 'About BDRCS', '', NULL, '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, </span></p>\r\n<p style=\"padding-left: 40px;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum is a placeholder text</span></p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\"> commonly used to demonstrate the visual form of a document</span></p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\"> or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>', '2021-03-25 22:49:01', '2021-03-25 23:03:53'),
(3, 'History of BDRCS', '', NULL, '<div style=\"box-sizing: border-box; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff; text-align: justify;\">The Bangladesh Red Cross Society was constituted on 31 March, 1973 by the President&rsquo;s Order No.26 of 1973 with retrospective effect from the 16th December 1971. The Society was recognized by ICRC on 20 September, 1973 and admitted to the International Federation of Red Cross and Red Crescent Societies on 02 November, 1973. The name and emblem were changed from Red Cross to Red Crescent on 4th April 1988 vide Act 25 of 1988.</div>\r\n<div style=\"box-sizing: border-box; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff; text-align: justify;\">&nbsp;</div>\r\n<div style=\"box-sizing: border-box; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff; text-align: justify;\">The President of the People&rsquo;s Republic of Bangladesh is the ex-officio President of the Society. The President appoints the Chairman of the Society for a term of 3 years, who may hold two consecutive terms.</div>\r\n<div style=\"box-sizing: border-box; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff; text-align: justify;\">&nbsp;</div>\r\n<div style=\"box-sizing: border-box; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff; text-align: justify;\">BDRCS National Headquarters at Red Crescent Sarak, Boro Moghbazar, Dhaka is the Secretariat of the Society. The Secretary General, appointed by the Managing Board, heads the Secretariat. He is ex-officio the Secretary to the Managing Board. The Managing Board also appoints a Deputy Secretary General, who performs the functions of the Secretary General in his/her absence. The Secretariat is organized in five divisions, namely, Disaster Management, Health Services, Planning &amp; Development, Central Support Services and Finance &amp; Accounts.[I1]</div>\r\n<div style=\"box-sizing: border-box; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff; text-align: justify;\">&nbsp;</div>\r\n<div style=\"box-sizing: border-box; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff; text-align: justify;\">The BDRCS has 68 Units. A Unit is constituted in each district and in the Metropolitan cities of Dhaka. Chittagong, Rajshahi &amp; Khulna.</div>', '2021-03-25 22:51:54', '2021-03-26 19:30:21'),
(4, 'Organizational Structure', '', NULL, '<p>Coming Soon.</p>', '2021-03-26 19:32:06', '2021-03-26 19:32:06'),
(5, 'Mission & Vision', '', NULL, '<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Vision</span><br style=\"box-sizing: border-box;\" />To become a leading humanitarian organization by mobilizing the power of humanity.</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Mission</span><br style=\"box-sizing: border-box;\" />The Bangladesh Red Crescent Society, a volunteer based humanitarian organization, endeavors to prevent and reduce human sufferings and save lives of the most vulnerable and marginalized groups by providing effective and efficient services through mobilizing resources in emergencies and normal time.</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\">Strategic Goal 1<br style=\"box-sizing: border-box;\" />Strengthened Preparedness, response and recovery services in reducing impacts of disasters, emergencies and other humanitarian consequences.</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\">Strategic Goal 2<br style=\"box-sizing: border-box;\" />Strengthened community towards making them resilient to multi hazard and induced phenomena.</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\">Strategic Goal 3<br style=\"box-sizing: border-box;\" />National Society development initiatives contributed towards building strong and sustainable NS.</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\">Strategic Goal 4<br style=\"box-sizing: border-box;\" />Quality health services for people in need at all level improved and ensured.</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\">Cross Cutting Issues<br style=\"box-sizing: border-box;\" />Gender and Diversity, Community Engagement and Accountability (CEA), Staff and Volunteers Safety Security, Child Protection</p>', '2021-03-26 19:32:58', '2021-03-26 19:32:58'),
(6, 'Movement Principle', '', NULL, '<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\">The doctrine of the International Red Cross and Red Crescent Movement is summed up in the Fundamental Principles of the Movement, unanimously proclaimed by the 20th International Conference in 1965. The Fundamental Principles give Red Cross and Red Crescent staff and volunteers clear guidelines to facilitate and define scope for their humanitarian work, and also provide a firm and universally accepted basis for the promotion of the movement&rsquo;s ideals and humanitarian values.</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Humanity</span>&nbsp;<br style=\"box-sizing: border-box;\" />The International Red Cross and Red Crescent Movement, born of a desire to bring assistance without discrimination to the wounded on the battlefield, endeavours, in its international and national capacity, to prevent and alleviate human suffering wherever it may be found. Its purpose is to protect life and health and to ensure respect for the human being. It promotes mutual understanding, friendship, cooperation and lasting peace amongst all peoples.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Impartiality</span>&nbsp;<br style=\"box-sizing: border-box;\" />It makes no discrimination as to nationality, race, religious beliefs, class or political opinions. It endeavours to relieve the suffering of individuals, being guided solely by their needs, and to give priority to the most urgent cases of distress.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Neutrality</span>&nbsp;<br style=\"box-sizing: border-box;\" />In order to continue to enjoy the confidence of all, the Movement may not take sides in hostilities or engage at any time in controversies of a political, racial, religious or ideological nature.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Independence</span>&nbsp;<br style=\"box-sizing: border-box;\" />The Movement is independent. The National Societies, while auxiliaries in the humanitarian services of their governments and subject to the laws of their respective countries, must always maintain their autonomy so that they may be able at all times to act in accordance with the principles of the Movement.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Voluntary service&nbsp;</span><br style=\"box-sizing: border-box;\" />It is a voluntary relief movement not prompted in any manner by desire for gain.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Unity</span>&nbsp;<br style=\"box-sizing: border-box;\" />There can be only one Red Cross or one Red Crescent Society in any one country. It must be open to all. It must carry on its humanitarian work throughout its territory.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Universality</span>&nbsp;<br style=\"box-sizing: border-box;\" />The International Red Cross and Red Crescent Movement, in which all Societies have equal status and share equal responsibilities and duties in helping each other, is worldwide.&nbsp;&nbsp;</p>', '2021-03-26 19:39:08', '2021-03-26 19:39:08'),
(7, 'Movement Principle', '', NULL, '<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\">The doctrine of the International Red Cross and Red Crescent Movement is summed up in the Fundamental Principles of the Movement, unanimously proclaimed by the 20th International Conference in 1965. The Fundamental Principles give Red Cross and Red Crescent staff and volunteers clear guidelines to facilitate and define scope for their humanitarian work, and also provide a firm and universally accepted basis for the promotion of the movement&rsquo;s ideals and humanitarian values.</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Humanity</span>&nbsp;<br style=\"box-sizing: border-box;\" />The International Red Cross and Red Crescent Movement, born of a desire to bring assistance without discrimination to the wounded on the battlefield, endeavours, in its international and national capacity, to prevent and alleviate human suffering wherever it may be found. Its purpose is to protect life and health and to ensure respect for the human being. It promotes mutual understanding, friendship, cooperation and lasting peace amongst all peoples.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Impartiality</span>&nbsp;<br style=\"box-sizing: border-box;\" />It makes no discrimination as to nationality, race, religious beliefs, class or political opinions. It endeavours to relieve the suffering of individuals, being guided solely by their needs, and to give priority to the most urgent cases of distress.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Neutrality</span>&nbsp;<br style=\"box-sizing: border-box;\" />In order to continue to enjoy the confidence of all, the Movement may not take sides in hostilities or engage at any time in controversies of a political, racial, religious or ideological nature.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Independence</span>&nbsp;<br style=\"box-sizing: border-box;\" />The Movement is independent. The National Societies, while auxiliaries in the humanitarian services of their governments and subject to the laws of their respective countries, must always maintain their autonomy so that they may be able at all times to act in accordance with the principles of the Movement.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Voluntary service&nbsp;</span><br style=\"box-sizing: border-box;\" />It is a voluntary relief movement not prompted in any manner by desire for gain.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Unity</span>&nbsp;<br style=\"box-sizing: border-box;\" />There can be only one Red Cross or one Red Crescent Society in any one country. It must be open to all. It must carry on its humanitarian work throughout its territory.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; font-family: \'-apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &amp;quot;Helvetica Neue&amp;quot;, sans-serif\', sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Universality</span>&nbsp;<br style=\"box-sizing: border-box;\" />The International Red Cross and Red Crescent Movement, in which all Societies have equal status and share equal responsibilities and duties in helping each other, is worldwide.&nbsp;&nbsp;</p>', '2021-03-26 19:39:09', '2021-03-26 19:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `duration` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` double DEFAULT NULL,
  `expense` double DEFAULT NULL,
  `img` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('proposed','running','completed') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category_id`, `sub_category_id`, `name`, `start_date`, `end_date`, `duration`, `budget`, `expense`, `img`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 12, NULL, 'Project  One', '2021-03-08', '2021-03-29', '1 Year', NULL, NULL, '1616125876.png', '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem i</span></p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>', NULL, '2021-03-18 21:51:16', '2021-03-27 00:37:35'),
(3, 11, NULL, 'In publishing and graphic design, Lorem i', '2021-03-27', '1970-01-01', NULL, NULL, NULL, '1616827026.jpg', '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>', NULL, '2021-03-27 00:37:06', '2021-03-27 00:37:06'),
(4, 13, NULL, 'aceholder text commonly used to', '1970-01-01', '1970-01-01', NULL, NULL, NULL, '1616827098.jpg', '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>', NULL, '2021-03-27 00:38:18', '2021-03-27 00:38:18'),
(5, 14, NULL, 'ng on meaningful content. Lor', '1970-01-01', '1970-01-01', NULL, NULL, NULL, '1616827131.jpg', '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>', NULL, '2021-03-27 00:38:51', '2021-03-27 00:38:51'),
(6, 15, NULL, 'eaningful content. Lor', '1970-01-01', '1970-01-01', NULL, NULL, NULL, '1616827132.jpg', '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>', NULL, '2021-03-27 00:38:52', '2021-03-27 00:39:11'),
(7, 16, NULL, 'lying on meaningful content. Lor', '1970-01-01', '1970-01-01', NULL, NULL, NULL, '1616827190.png', '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>', NULL, '2021-03-27 00:39:50', '2021-03-27 00:39:50'),
(8, 17, NULL, 'ntent. Lorem ipsum may be us', '1970-01-01', '1970-01-01', NULL, NULL, NULL, '1616827233.png', '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>', NULL, '2021-03-27 00:40:33', '2021-03-27 00:40:33'),
(9, 18, NULL, 'document or a typeface', '1970-01-01', '1970-01-01', NULL, NULL, NULL, '1616827267.png', '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>\r\n<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>', NULL, '2021-03-27 00:41:07', '2021-03-27 00:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `caption`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '1616825641.jpg', 'This is capiton', 1, '2021-03-27 00:14:01', '2021-03-27 00:14:01'),
(3, '1616825785.jpg', 'Anime Girl', 1, '2021-03-27 00:14:49', '2021-03-27 00:16:25'),
(4, '1616826016.jpg', 'Anime Girl', 1, '2021-03-27 00:20:16', '2021-03-27 00:20:16'),
(5, '1616952235.jpg', NULL, 1, '2021-03-28 11:19:51', '2021-03-28 11:23:55'),
(6, '1616954436.jpg', NULL, 1, '2021-03-28 12:00:36', '2021-03-28 12:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Twitter', 'https://twitter.com', '2021-03-18 23:26:39', '2021-03-18 23:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `speeches`
--

CREATE TABLE `speeches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `speaker_name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speaker_role` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speech` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `speeches`
--

INSERT INTO `speeches` (`id`, `speaker_name`, `speaker_role`, `speech`, `img`, `video`, `created_at`, `updated_at`) VALUES
(2, 'Hil Kafi', 'Chairmen', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', '1616307737.jpg', 'https://www.youtube.com/embed/2mDCVzruYzQ', '2021-03-21 00:22:17', '2021-03-21 02:11:45'),
(3, 'Pitom', 'Co-Founder', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', '1616307974.jpg', 'https://www.youtube.com/embed/Io0fBr1XBUA', '2021-03-21 00:25:58', '2021-03-21 00:26:14'),
(4, 'Sobuj', 'Co-Founder', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', '', NULL, '2021-03-21 02:12:42', '2021-03-21 02:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` enum('blog','project') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `type`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 5, 'blog', 'Featured News', 'This is featured news subcategory.', '2021-03-15 23:25:39', '2021-03-15 23:25:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kafi', 'kafi@gmail.com', NULL, '$2y$10$SuOkKixc2HpMVOqkLkFOPurCeCpOHnxehCHLcBSltEQzNRQRGzqUi', NULL, '2021-03-12 10:21:52', '2021-03-12 10:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `type_of_volunteer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_contract_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_or_birth_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest_in_blood_donation` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` enum('Single','Married','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `any_time_service` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upazila_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_village_word_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_joining` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_type` enum('rcy','upazila') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `registration_number`, `name_bangla`, `joining_date`, `type_of_volunteer`, `contract_number`, `father_name`, `mother_name`, `father_occupation`, `mother_occupation`, `parent_contract_number`, `nid_or_birth_no`, `email`, `date_of_birth`, `blood_group`, `interest_in_blood_donation`, `gender`, `marital_status`, `institute_name`, `educational_status`, `any_time_service`, `district_name`, `upazila_name`, `house_village_word_name`, `img`, `reason_for_joining`, `unit_type`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 'Kafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-18 18:47:47', '2021-03-18 18:47:47'),
(4, 'kafi', '4654654165', 'dsfsf', '2021-03-24', 'new_member', '5465416', 'sdgerghr', 'rhegrd', 'rgdghed', 'dghedh', '654654', '41654646', 'sweet@gmail.com', '2021-03-16', 'A+', NULL, 'Male', 'Married', 'sgsdgsdge', 'lkdfmsdkjg', NULL, NULL, 'taraganj', 'ddfhg', '1617016276.jpg', NULL, 'rcy', NULL, '2021-03-29 05:11:16', '2021-03-29 05:11:16'),
(5, 'ghhgdf', '56346', 'ghfhjg', '2021-03-29', 'new_member', '65467', 'ghfhsz', 'dfgdfg', NULL, NULL, NULL, '456534', 'admin@gmail.com', '2021-03-12', 'fgdgdg', NULL, 'Male', 'Single', 'dfgdg', 'gfdfg', 'Yes', NULL, 'kaunia', 'gfdfgdfg', '1617078803.png', 'ghdfgh', 'rcy', 1, '2021-03-29 22:33:23', '2021-03-29 22:33:40'),
(6, 'dfhhfhg', NULL, NULL, '1970-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 1, '2021-03-29 22:36:56', '2021-03-29 22:37:05'),
(7, 'xcvgbdfgd', NULL, NULL, '1970-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 1, '2021-03-29 22:41:23', '2021-03-29 22:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `youth_executives`
--

CREATE TABLE `youth_executives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `type_of_volunteer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_contract_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_or_birth_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `interest_in_blood_donation` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` enum('Single','Married','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upazila_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_village_word_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `any_time_service` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_joining` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_type` enum('rcy','upazila') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate_get_bloods`
--
ALTER TABLE `donate_get_bloods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate_us`
--
ALTER TABLE `donate_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executive_committees`
--
ALTER TABLE `executive_committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `life_members`
--
ALTER TABLE `life_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_staff`
--
ALTER TABLE `office_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speeches`
--
ALTER TABLE `speeches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youth_executives`
--
ALTER TABLE `youth_executives`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donate_get_bloods`
--
ALTER TABLE `donate_get_bloods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donate_us`
--
ALTER TABLE `donate_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `executive_committees`
--
ALTER TABLE `executive_committees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `life_members`
--
ALTER TABLE `life_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `office_staff`
--
ALTER TABLE `office_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `speeches`
--
ALTER TABLE `speeches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `youth_executives`
--
ALTER TABLE `youth_executives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
