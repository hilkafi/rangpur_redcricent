-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 02:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `date`, `category_id`, `sub_category_id`, `title`, `img`, `description`, `created_at`, `updated_at`) VALUES
(4, '2021-03-15', 5, 2, 'Duis aute irure dolor in reprehenderit', '1616289181.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nScelerisque in dictum non consectetur a erat nam. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Sit amet commodo nulla facilisi nullam vehicula ipsum. Vitae elementum curabitur vitae nunc sed. Vel pretium lectus quam id leo in. Proin fermentum leo vel orci porta non. Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Tortor vitae purus faucibus ornare suspendisse sed nisi. Porttitor massa id neque aliquam vestibulum morbi. Placerat vestibulum lectus mauris ultrices. Ut tristique et egestas quis ipsum suspendisse ultrices gravida.', '2021-03-20 19:13:01', '2021-03-20 19:14:47'),
(5, '2021-03-15', 5, 2, 'viverra suspendisse potenti. Habitant morbi tristique senectus', '1616289336.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel pharetra vel turpis nunc eget lorem dolor sed. Nunc sed augue lacus viverra vitae congue eu consequat ac. Purus non enim praesent elementum facilisis leo vel fringilla. Vitae congue eu consequat ac felis donec. Placerat vestibulum lectus mauris ultrices eros in cursus turpis. Vel quam elementum pulvinar etiam. Est ullamcorper eget nulla facilisi etiam dignissim. Donec massa sapien faucibus et molestie ac feugiat sed lectus. Donec ultrices tincidunt arcu non sodales neque sodales. Scelerisque felis imperdiet proin fermentum leo vel. Elit sed vulputate mi sit amet mauris commodo.\r\n\r\nCursus eget nunc scelerisque viverra mauris. Et egestas quis ipsum suspendisse. Sed viverra ipsum nunc aliquet bibendum enim. Sagittis id consectetur purus ut faucibus pulvinar. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc. Aliquam ut porttitor leo a diam sollicitudin tempor. Morbi tristique senectus et netus et malesuada fames. Est ullamcorper eget nulla facilisi etiam dignissim. Diam phasellus vestibulum lorem sed risus. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum.\r\n\r\nAt elementum eu facilisis sed odio morbi quis commodo odio. Nullam non nisi est sit amet facilisis magna. Id venenatis a condimentum vitae sapien pellentesque habitant morbi tristique. Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Congue eu consequat ac felis donec. Quisque egestas diam in arcu cursus euismod. Amet porttitor eget dolor morbi. Sed enim ut sem viverra aliquet eget sit amet. Ipsum dolor sit amet consectetur. Eget nunc lobortis mattis aliquam faucibus purus in massa. Risus nec feugiat in fermentum posuere urna. Senectus et netus et malesuada fames ac. Vitae tortor condimentum lacinia quis vel eros donec ac. Netus et malesuada fames ac turpis egestas integer eget aliquet. Sed cras ornare arcu dui vivamus arcu. Sed viverra tellus in hac habitasse platea dictumst vestibulum rhoncus. Maecenas pharetra convallis posuere morbi leo. Mus mauris vitae ultricies leo integer malesuada. Mauris sit amet massa vitae tortor. Iaculis urna id volutpat lacus laoreet non curabitur.\r\n\r\nMauris cursus mattis molestie a iaculis at. Fermentum dui faucibus in ornare. Id diam maecenas ultricies mi eget mauris. Sem viverra aliquet eget sit amet tellus cras. Euismod in pellentesque massa placerat. Ultrices tincidunt arcu non sodales neque sodales ut etiam. Risus in hendrerit gravida rutrum quisque non tellus orci. A erat nam at lectus urna duis convallis. Scelerisque varius morbi enim nunc faucibus. Habitant morbi tristique senectus et netus et. Velit ut tortor pretium viverra suspendisse potenti. Habitant morbi tristique senectus et netus et malesuada fames ac. Dui faucibus in ornare quam viverra orci sagittis eu volutpat.\r\n\r\nScelerisque in dictum non consectetur a erat nam. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Sit amet commodo nulla facilisi nullam vehicula ipsum. Vitae elementum curabitur vitae nunc sed. Vel pretium lectus quam id leo in. Proin fermentum leo vel orci porta non. Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Tortor vitae purus faucibus ornare suspendisse sed nisi. Porttitor massa id neque aliquam vestibulum morbi. Placerat vestibulum lectus mauris ultrices. Ut tristique et egestas quis ipsum suspendisse ultrices gravida.', '2021-03-20 19:15:36', '2021-03-20 19:15:36'),
(6, '2021-03-16', 5, 2, 'uet nibh praesent tristique. Eu sem integer vitae justo.', '1616289401.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:16:41', '2021-03-20 19:16:41'),
(7, '2021-03-16', 5, 2, 'ullamcorper dignissim cras tincidunt. Ac turpis egestas integer', '1616289458.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:17:38', '2021-03-20 19:17:38'),
(8, '2021-03-21', 4, NULL, 'feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper', '1616289528.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:18:48', '2021-03-20 19:18:48'),
(9, '2021-03-21', 4, NULL, 'Gravida quis blandit turpis cursus. Urna condimentum mattis', '1616289587.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:19:47', '2021-03-20 19:19:47'),
(10, '2021-03-14', 4, NULL, 'iquet nibh praesent tristique. Eu sem integer vitae justo.', '1616289622.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:20:22', '2021-03-20 19:20:22'),
(11, NULL, 4, NULL, 'ullamcorper dignissim cras tincidunt Eu sem integer vitae justo.', '1616289666.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:21:06', '2021-03-20 19:21:06'),
(12, '2021-03-21', 7, NULL, 'euismod nisi. Sagittis vitae et leo duis ut diam qua', '1616289793.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:23:13', '2021-03-20 19:23:13'),
(13, '2021-03-21', 7, NULL, 'adipiscing elit, sed do eiusmod tempor incididunt ut', '1616289859.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:24:19', '2021-03-20 19:24:19'),
(14, '2021-03-21', 7, NULL, 'honcus est pellentesque elit u', '1616289898.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:24:58', '2021-03-20 19:24:58'),
(15, '2021-03-15', 7, NULL, 'Eu sem integer vitae justo.', '1616289939.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices. Vestibulum lorem sed risus ultricies tristique nulla. Consectetur adipiscing elit pellentesque habitant. Sit amet est placerat in egestas erat imperdiet sed euismod. Tincidunt lobortis feugiat vivamus at augue eget. Tellus mauris a diam maecenas sed enim ut sem. Dictum non consectetur a erat nam at. Viverra orci sagittis eu volutpat. Vitae purus faucibus ornare suspendisse sed nisi lacus. Neque viverra justo nec ultrices dui sapien eget. Quam quisque id diam vel.\r\n\r\nSed odio morbi quis commodo odio aenean sed adipiscing. Vestibulum sed arcu non odio euismod lacinia at quis risus. Dignissim enim sit amet venenatis. At auctor urna nunc id cursus metus. Neque aliquam vestibulum morbi blandit cursus risus. Luctus accumsan tortor posuere ac ut. Nunc sed velit dignissim sodales ut eu sem. Odio euismod lacinia at quis risus. Placerat in egestas erat imperdiet sed euismod nisi. Arcu dui vivamus arcu felis bibendum ut tristique et egestas. Leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nElit duis tristique sollicitudin nibh sit amet. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dignissim convallis aenean et tortor at risus viverra. Consequat interdum varius sit amet mattis vulputate enim. Purus viverra accumsan in nisl nisi scelerisque eu. Aliquam ut porttitor leo a diam sollicitudin. Lacus vel facilisis volutpat est velit egestas. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Lectus quam id leo in vitae turpis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Gravida quis blandit turpis cursus. Urna condimentum mattis pellentesque id nibh. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Sem nulla pharetra diam sit amet nisl suscipit. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit. Purus sit amet volutpat consequat mauris nunc congue nisi vitae.\r\n\r\nAmet consectetur adipiscing elit ut aliquam purus sit amet luctus. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. At auctor urna nunc id cursus. At urna condimentum mattis pellentesque. Pulvinar elementum integer enim neque volutpat ac. Egestas integer eget aliquet nibh praesent tristique magna sit. Fermentum iaculis eu non diam. Id aliquet lectus proin nibh nisl condimentum id. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nullam ac tortor vitae purus faucibus ornare. Vitae proin sagittis nisl rhoncus mattis rhoncus. Tincidunt arcu non sodales neque sodales. Morbi tristique senectus et netus et malesuada. Nunc mattis enim ut tellus elementum.\r\n\r\nElementum integer enim neque volutpat ac tincidunt vitae semper. Lacus sed viverra tellus in hac habitasse platea. In egestas erat imperdiet sed euismod nisi. Sagittis vitae et leo duis ut diam quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. Dapibus ultrices in iaculis nunc sed. Praesent tristique magna sit amet purus gravida. Blandit volutpat maecenas volutpat blandit. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Tortor at risus viverra adipiscing at. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mi quis hendrerit dolor magna. Fringilla urna porttitor rhoncus dolor purus. Diam donec adipiscing tristique risus nec feugiat in fermentum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Ac turpis egestas integer eget aliquet nibh praesent tristique. Eu sem integer vitae justo.', '2021-03-20 19:25:39', '2021-03-20 19:25:39');

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
(7, 'blog', 'Focus', 'This is focus category', '2021-03-20 19:03:37', '2021-03-20 19:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `occupation` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_executive` tinyint(1) DEFAULT NULL,
  `role` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `life_members`
--

INSERT INTO `life_members` (`id`, `name`, `occupation`, `is_executive`, `role`, `img`, `phone`, `address`, `blood_group`, `is_approved`, `created_at`, `updated_at`) VALUES
(2, 'Abdullahil Kafi', 'Egineer', 1, 'Manager', '1616116324.jpg', '01115', 'Panchagarh', NULL, '1', '2021-03-18 19:12:04', '2021-03-18 19:12:04'),
(3, 'Adam C', 'Student', NULL, 'Member', '1616406319.jpg', '01751465611', 'manchester, london', 'o positive', '1', '2021-03-22 03:45:19', '2021-03-22 04:26:53'),
(4, 'Adam CO', 'Student', NULL, 'Member', '1616408801.jpg', '01751465611', 'manchester, london', 'o positive', '0', '2021-03-22 04:26:41', '2021-03-22 04:26:41');

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
(16, '2021_03_15_115811_create_contact_us_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `office_staff`
--

CREATE TABLE `office_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `duration` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(2, 5, 2, 'Project  One', '2021-03-08', '2021-03-29', '1 Year', NULL, NULL, '1616125876.png', 'THis is description.', NULL, '2021-03-18 21:51:16', '2021-03-18 21:51:16');

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
  `occupation` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_type` enum('zila','upzila','city_corporation') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volunteer_type` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_executive` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `blood_donation` date DEFAULT NULL,
  `blood_group` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `occupation`, `unit_type`, `unit_name`, `volunteer_type`, `role`, `img`, `phone`, `address`, `institute`, `is_approved`, `is_executive`, `blood_donation`, `blood_group`, `created_at`, `updated_at`) VALUES
(1, 'Kafi', 'Egineer', 'zila', '', NULL, 'Manager', '1616114867.jpg', '01115', 'Panchagarh', '', '1', 'no', NULL, '', '2021-03-18 18:47:47', '2021-03-18 18:47:47'),
(3, 'Rashikul Islam', 'Student', 'city_corporation', 'Rangpur', NULL, 'Member', '1616403372.jpg', '01751465611', 'manchester, london', NULL, '1', 'yes', NULL, 'o positive', '2021-03-22 02:56:12', '2021-03-22 03:21:58');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `life_members`
--
ALTER TABLE `life_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `office_staff`
--
ALTER TABLE `office_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
