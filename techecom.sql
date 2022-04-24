-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 12:27 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `subject` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `lname`, `subject`) VALUES
(1, 'enes', 'hetemi', 'hello12'),
(2, 'enen', 'hejej', 'Hello Hello'),
(3, 'edon', 'Hetemi', 'Hello'),
(6, 'Enes', 'hehehe', 'ejejjej');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `Adresa` varchar(255) NOT NULL,
  `Nrkontaktit` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `Adresa`, `Nrkontaktit`, `email`) VALUES
(1, 'Bill Klinton, Kosova', '+383-44-111-222', 'email.gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `titull` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `pershk` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `autori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `titull`, `price`, `pershk`, `image`, `autori`) VALUES
(1, 'Laptop hp', '$750', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, consectetur? Commodi omnis eaque necessitatibus quisquam, illo consequuntur minima, reiciendis eligendi reprehenderit atque blanditiis, earum quo!', 'Laptophp.png', 'Enes'),
(2, 'Laptop dell', '$500', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos adipisci quod aspernatur delectus voluptatem velit?', 'Laptopdell.jpg', 'Admin'),
(3, 'Iphone12', '$700', 'Lorem ipsum dolor sit amet consectetur.', 'Iphone12.jpg', 'Enes'),
(4, 'Samsung J7', '$200', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique architecto quos laborum enim laboriosam ducimus provident impedit rerum veritatis iste minima harum magnam vitae aperiam dolores autem sapiente repellendus, sint molestiae! Provident deser', 'SamsungJ7.jpg', 'Enes'),
(5, 'Iphone 13', '$1200', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, nisi?', 'Iphone13.jpg', 'Admin'),
(6, 'Iphone 8', '$300', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A eveniet saepe ducimus natus provident vel!', 'Iphone8.jpeg', 'Enes'),
(7, 'Iphone 11 Pro', '$650', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste doloribus nesciunt, reiciendis debitis, molestias optio minus quisquam beatae vero itaque accusantium voluptatem vitae reprehenderit ipsam maxime quia? Explicabo, esse fuga?', 'IphoneX.jpg', 'Admin'),
(19, 'Iphone 13', '$850', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat illum excepturi distinctio ratione qui temporibus nesciunt saepe vitae officia voluptates, eos voluptas sit suscipit, harum quam delectus. Mollitia, provident dicta?', '620921a910a0d6.52133538.jpeg', 'Enes');

-- --------------------------------------------------------
--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `user` (`id`, `name`, `lname`, `email`, `password`, `role`) VALUES
(6, 'Leke', 'Kelmendi', 'leke@gmail.com', 'lk62297', 'Admin'),
(8, 'Agon', 'Mehmeti', 'agonmehmeti@gmail.com', '$2y$10$nSNxZvmEEZB0Ug.AUOPkyOftmTRN6AM7mHCqkBUWUgicmdKFtYpkS', '$2y$10$Q8F0Q0xZQNOPbEbROeJTH.Q7n/nGd5zBVmGkkX5gXSpmngnB4R4b2', 'User'),
(11, 'Enes', 'Hetemi', 'enes@gmail.com', 'ehetemii44', 'Admin'),
(12, 'Elton', 'Boshnjaku', 'eltonboshnjaku@gmail.com', 'eboshnjakuu', 'User');
(15, 'Ramiz', 'Hoxha', 'ramizhoxha@gmail.com', 'ramizi1234', 'User');
(17, 'Mirlinda','Reqica', 'mirlindareqica@gmail.com', 'mreqqicaa97', 'User');
(18, 'Blerina', 'Rrmoku', 'blerina@gmail.com', 'blerina2000!', 'User');


-- --------------------------------------------------------
--
-- Table structure for table `user`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating_grade` smallint(4),
  `description` varchar(255) NOT NULL,
  `rev_date` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `user` (`id`, `email`, `rating_grade`, `description`, `rev_date`, `role`) VALUES
(6, 'leke@gmail.com',5, 'ahahshhjsgjkcsgbjkcs' , 04/04/2022,'User'),
(8, 'agonmehmeti@gmail.com',4, 'ahahshhjsgjahjahgdbgskd' , 01/02/2022,'Admin'),
(11, 'enes@gmail.com',5, 'laljndskncksdnk' , 12/03/2022,'User'),
(12, 'eltonboshnjaku@gmail.com',4, 'djdjjsbkjbsdkj' , 18/03/2022,'User'),
(15, 'ramizhoxha@gmail.com',3, 'acasnkjbhcsjj' , 19/03/2022,'User'),
(12, 'mirlindareqica@gmail.com',4,'djdkjkdjhskjjs' , 21/03/2022,'User'),
(12, 'blerinarrmoku@gmail.com',5, 'hdjskhjasjdk' , 24/03/2022,'User'),
-- --------------------------------------------------------
--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passwordC` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `lname`, `email`, `password`, `passwordC`, `role`) VALUES
(6, 'admin', 'selman', 'admin@gmail.com', '$2y$10$7e0gBzmd7h4YSTMyyAmfl.4pLZNzJwODjH2HqhEUUkuXmm4AAYXB.', '$2y$10$OLm3jYtyyplVd/D.v.gm5eVJ.zTIeLRZKbxQ1u6xaJGXsOgW15kT6', 'Admin'),
(8, 'Test', 'Tut', 'Test@gmail.com', '$2y$10$nSNxZvmEEZB0Ug.AUOPkyOftmTRN6AM7mHCqkBUWUgicmdKFtYpkS', '$2y$10$Q8F0Q0xZQNOPbEbROeJTH.Q7n/nGd5zBVmGkkX5gXSpmngnB4R4b2', 'User'),
(11, 'Enes', 'Hetemi', 'enes@gmail.com', '$2y$10$bbe2KJgbUlQr0DrqzOwFC.Tw6QtiR/cLG6NJAGidDI4s939lcIFyC', '$2y$10$ONXrn1mdKgrlx1OFA.gH0.gbsiKSbwDju0s4pmN6y3ntIxVhYx8J.', 'Admin'),
(12, 'edon', 'Hetemi', 'edon@gmail.com', '$2y$10$s/AQuC6HkrlfGwQf9gjSjedc00fnRrJosSiYh20h2bqPuoCxGE7oO', '$2y$10$9s7xsaSuoXCJslvpdGYaIea3F6qoeiBuwv6VbxfdUVtMgXBKF.scK', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(1, 'Iphone12.jpg'),
(2, 'Iphone8.jpeg'),
(7, 'SamsungJ7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
