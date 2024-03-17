-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 05:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market_place`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_id` int(11) NOT NULL,
  `Category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `Fee_id` int(11) NOT NULL,
  `Fee_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gig`
--

CREATE TABLE `gig` (
  `Gig_id` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Titel` varchar(300) NOT NULL,
  `Image` varchar(300) NOT NULL,
  `Details` text NOT NULL,
  `Skills` varchar(300) NOT NULL,
  `Price` int(11) NOT NULL,
  `Delivery_in_days` int(11) NOT NULL,
  `Post_dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gig_proposal`
--

CREATE TABLE `gig_proposal` (
  `Gig_proposal_id` int(11) NOT NULL,
  `Status` varchar(25) NOT NULL,
  `Offer_price` int(11) NOT NULL,
  `Delivery_date` date NOT NULL,
  `Requirment_description` text NOT NULL,
  `DateTime` datetime NOT NULL,
  `File` varchar(300) NOT NULL,
  `Gig_id` int(11) NOT NULL,
  `Propsed_by_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Job_id` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Titel` varchar(300) NOT NULL,
  `Price` int(11) NOT NULL,
  `Delivery_date` date NOT NULL,
  `Details` text NOT NULL,
  `Skills` varchar(500) NOT NULL,
  `Post_dateTime` datetime NOT NULL,
  `Job_file` varchar(300) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_proposal`
--

CREATE TABLE `job_proposal` (
  `Job_proposal_id` int(11) NOT NULL,
  `Status` varchar(25) NOT NULL,
  `Offer_amount` int(11) NOT NULL,
  `Proposed_delivery_data` date NOT NULL,
  `Cover_letter` text NOT NULL,
  `DateTime` datetime NOT NULL,
  `File` varchar(300) NOT NULL,
  `Job_id` int(11) NOT NULL,
  `Propsed_by_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Message_id` int(11) NOT NULL,
  `Message_first_user_id` int(11) DEFAULT NULL,
  `Message_second_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages_text`
--

CREATE TABLE `messages_text` (
  `Messages_text_id` int(11) NOT NULL,
  `Messages_id` int(11) NOT NULL,
  `Messages_text` text NOT NULL,
  `Messages_text_timeDate` datetime NOT NULL,
  `Messages_from_user_id` int(11) DEFAULT NULL,
  `Messages_to_user_id` int(11) DEFAULT NULL,
  `Messages_file` varchar(300) NOT NULL,
  `Messages_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `Money_id` int(11) NOT NULL,
  `User_id` int(11) DEFAULT NULL,
  `Type` varchar(10) NOT NULL,
  `From_bank` varchar(25) NOT NULL,
  `Amount` int(11) NOT NULL,
  `DateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Notification_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Notification_message` varchar(300) NOT NULL,
  `DateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_buyer`
--

CREATE TABLE `order_buyer` (
  `Order_buyer_id` int(11) NOT NULL,
  `Buyer_user_id` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `DateTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_buyer_gigs`
--

CREATE TABLE `order_buyer_gigs` (
  `Order_buyer_gigs_id` int(11) NOT NULL,
  `Order_buyer_id` int(11) NOT NULL,
  `Gig_id` int(11) NOT NULL,
  `Seller_user_id` int(11) DEFAULT NULL,
  `Gig_proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_buyer_job`
--

CREATE TABLE `order_buyer_job` (
  `Order_buyer_job_id` int(11) NOT NULL,
  `Order_buyer_id` int(11) NOT NULL,
  `Job_id` int(11) NOT NULL,
  `Seller_user_id` int(11) DEFAULT NULL,
  `Job_proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_seller`
--

CREATE TABLE `order_seller` (
  `Order_seller_id` int(11) NOT NULL,
  `Seller_user_id` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `DateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_seller_gigs`
--

CREATE TABLE `order_seller_gigs` (
  `Order_seller_gigs_id` int(11) NOT NULL,
  `Order_Seller_id` int(11) NOT NULL,
  `Gig_id` int(11) NOT NULL,
  `Client_user_id` int(11) DEFAULT NULL,
  `Request_id` int(11) DEFAULT NULL,
  `Gig_proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_seller_job`
--

CREATE TABLE `order_seller_job` (
  `Order_seller_job` int(11) NOT NULL,
  `Order_Seller_id` int(11) NOT NULL,
  `Job_id` int(11) NOT NULL,
  `Client_user_id` int(11) DEFAULT NULL,
  `Request_id` int(11) DEFAULT NULL,
  `Job_proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_user`
--

CREATE TABLE `report_user` (
  `Report_user_id` int(11) NOT NULL,
  `Report_user_by_user_id` int(11) DEFAULT NULL,
  `Reported_user_id` int(11) DEFAULT NULL,
  `Report_state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Request_id` int(11) NOT NULL,
  `Request_by_user_id` int(11) NOT NULL,
  `Request_details` text NOT NULL,
  `Request_file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `Reviews_id` int(11) NOT NULL,
  `Reviews_of_user_id` int(11) DEFAULT NULL,
  `Reviews_given_by_user_id` int(11) DEFAULT NULL,
  `Reviews_text` text NOT NULL,
  `Reviews_stars` int(11) NOT NULL,
  `Reviews_dateTime` datetime NOT NULL,
  `Reviews_job_id` int(11) DEFAULT NULL,
  `Reviews_gig_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Status_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `User_profile_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Country` varchar(25) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Profile_picture` varchar(300) DEFAULT NULL,
  `About` text DEFAULT NULL,
  `Balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`Fee_id`);

--
-- Indexes for table `gig`
--
ALTER TABLE `gig`
  ADD PRIMARY KEY (`Gig_id`),
  ADD KEY `Category_id` (`Category_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `gig_proposal`
--
ALTER TABLE `gig_proposal`
  ADD PRIMARY KEY (`Gig_proposal_id`),
  ADD KEY `Gig_id` (`Gig_id`),
  ADD KEY `Propsed_by_user_id` (`Propsed_by_user_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Job_id`),
  ADD KEY `Category_id` (`Category_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `job_proposal`
--
ALTER TABLE `job_proposal`
  ADD PRIMARY KEY (`Job_proposal_id`),
  ADD KEY `Job_id` (`Job_id`),
  ADD KEY `Propsed_by_user_id` (`Propsed_by_user_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`Message_id`),
  ADD KEY `Message_first_user_id` (`Message_first_user_id`),
  ADD KEY `Message_second_user_id` (`Message_second_user_id`);

--
-- Indexes for table `messages_text`
--
ALTER TABLE `messages_text`
  ADD PRIMARY KEY (`Messages_text_id`),
  ADD KEY `Messages_id` (`Messages_id`),
  ADD KEY `Messages_from_user_id` (`Messages_from_user_id`),
  ADD KEY `Messages_to_user_id` (`Messages_to_user_id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`Money_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Notification_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `order_buyer`
--
ALTER TABLE `order_buyer`
  ADD PRIMARY KEY (`Order_buyer_id`),
  ADD KEY `Buyer_user_id` (`Buyer_user_id`);

--
-- Indexes for table `order_buyer_gigs`
--
ALTER TABLE `order_buyer_gigs`
  ADD PRIMARY KEY (`Order_buyer_gigs_id`),
  ADD KEY `Order_buyer_id` (`Order_buyer_id`),
  ADD KEY `Gig_id` (`Gig_id`),
  ADD KEY `Seller_user_id` (`Seller_user_id`),
  ADD KEY `Gig_proposal_id` (`Gig_proposal_id`);

--
-- Indexes for table `order_buyer_job`
--
ALTER TABLE `order_buyer_job`
  ADD PRIMARY KEY (`Order_buyer_job_id`),
  ADD KEY `Order_buyer_id` (`Order_buyer_id`),
  ADD KEY `Job_id` (`Job_id`),
  ADD KEY `Seller_user_id` (`Seller_user_id`),
  ADD KEY `Job_proposal_id` (`Job_proposal_id`);

--
-- Indexes for table `order_seller`
--
ALTER TABLE `order_seller`
  ADD PRIMARY KEY (`Order_seller_id`),
  ADD KEY `Seller_user_id` (`Seller_user_id`);

--
-- Indexes for table `order_seller_gigs`
--
ALTER TABLE `order_seller_gigs`
  ADD PRIMARY KEY (`Order_seller_gigs_id`),
  ADD KEY `Order_Seller_id` (`Order_Seller_id`),
  ADD KEY `Gig_id` (`Gig_id`),
  ADD KEY `Client_user_id` (`Client_user_id`),
  ADD KEY `Request_id` (`Request_id`),
  ADD KEY `Gig_proposal_id` (`Gig_proposal_id`);

--
-- Indexes for table `order_seller_job`
--
ALTER TABLE `order_seller_job`
  ADD PRIMARY KEY (`Order_seller_job`),
  ADD KEY `Order_Seller_id` (`Order_Seller_id`),
  ADD KEY `Job_id` (`Job_id`),
  ADD KEY `Client_user_id` (`Client_user_id`),
  ADD KEY `Request_id` (`Request_id`),
  ADD KEY `Job_proposal_id` (`Job_proposal_id`);

--
-- Indexes for table `report_user`
--
ALTER TABLE `report_user`
  ADD PRIMARY KEY (`Report_user_id`),
  ADD KEY `Report_user_by_user_id` (`Report_user_by_user_id`),
  ADD KEY `Reported_user_id` (`Reported_user_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Request_id`),
  ADD KEY `Request_by_user_id` (`Request_by_user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`Reviews_id`),
  ADD KEY `Reviews_of_user_id` (`Reviews_of_user_id`),
  ADD KEY `Reviews_given_by_user_id` (`Reviews_given_by_user_id`),
  ADD KEY `Reviews_job_id` (`Reviews_job_id`),
  ADD KEY `Reviews_gig_id` (`Reviews_gig_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`User_profile_id`),
  ADD KEY `User_id` (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `Fee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gig`
--
ALTER TABLE `gig`
  MODIFY `Gig_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gig_proposal`
--
ALTER TABLE `gig_proposal`
  MODIFY `Gig_proposal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_proposal`
--
ALTER TABLE `job_proposal`
  MODIFY `Job_proposal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `Message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages_text`
--
ALTER TABLE `messages_text`
  MODIFY `Messages_text_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `Money_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_buyer`
--
ALTER TABLE `order_buyer`
  MODIFY `Order_buyer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_buyer_gigs`
--
ALTER TABLE `order_buyer_gigs`
  MODIFY `Order_buyer_gigs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_buyer_job`
--
ALTER TABLE `order_buyer_job`
  MODIFY `Order_buyer_job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_seller`
--
ALTER TABLE `order_seller`
  MODIFY `Order_seller_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_seller_gigs`
--
ALTER TABLE `order_seller_gigs`
  MODIFY `Order_seller_gigs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_seller_job`
--
ALTER TABLE `order_seller_job`
  MODIFY `Order_seller_job` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_user`
--
ALTER TABLE `report_user`
  MODIFY `Report_user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `Reviews_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `User_profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gig`
--
ALTER TABLE `gig`
  ADD CONSTRAINT `gig_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`Category_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `gig_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `gig_proposal`
--
ALTER TABLE `gig_proposal`
  ADD CONSTRAINT `gig_proposal_ibfk_1` FOREIGN KEY (`Gig_id`) REFERENCES `gig` (`Gig_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `gig_proposal_ibfk_2` FOREIGN KEY (`Propsed_by_user_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`Category_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `job_proposal`
--
ALTER TABLE `job_proposal`
  ADD CONSTRAINT `job_proposal_ibfk_1` FOREIGN KEY (`Job_id`) REFERENCES `job` (`Job_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `job_proposal_ibfk_2` FOREIGN KEY (`Propsed_by_user_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`Message_first_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`Message_second_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `messages_text`
--
ALTER TABLE `messages_text`
  ADD CONSTRAINT `messages_text_ibfk_1` FOREIGN KEY (`Messages_id`) REFERENCES `message` (`Message_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `messages_text_ibfk_2` FOREIGN KEY (`Messages_from_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `messages_text_ibfk_3` FOREIGN KEY (`Messages_to_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `money`
--
ALTER TABLE `money`
  ADD CONSTRAINT `money_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_buyer`
--
ALTER TABLE `order_buyer`
  ADD CONSTRAINT `order_buyer_ibfk_1` FOREIGN KEY (`Buyer_user_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_buyer_gigs`
--
ALTER TABLE `order_buyer_gigs`
  ADD CONSTRAINT `order_buyer_gigs_ibfk_1` FOREIGN KEY (`Order_buyer_id`) REFERENCES `order_buyer` (`Order_buyer_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_buyer_gigs_ibfk_2` FOREIGN KEY (`Gig_id`) REFERENCES `gig` (`Gig_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_buyer_gigs_ibfk_3` FOREIGN KEY (`Seller_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_buyer_gigs_ibfk_4` FOREIGN KEY (`Gig_proposal_id`) REFERENCES `gig_proposal` (`Gig_proposal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_buyer_job`
--
ALTER TABLE `order_buyer_job`
  ADD CONSTRAINT `order_buyer_job_ibfk_1` FOREIGN KEY (`Order_buyer_id`) REFERENCES `order_buyer` (`Order_buyer_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_buyer_job_ibfk_2` FOREIGN KEY (`Job_id`) REFERENCES `job` (`Job_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_buyer_job_ibfk_3` FOREIGN KEY (`Seller_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_buyer_job_ibfk_4` FOREIGN KEY (`Job_proposal_id`) REFERENCES `job_proposal` (`Job_proposal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_seller`
--
ALTER TABLE `order_seller`
  ADD CONSTRAINT `order_seller_ibfk_1` FOREIGN KEY (`Seller_user_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_seller_gigs`
--
ALTER TABLE `order_seller_gigs`
  ADD CONSTRAINT `order_seller_gigs_ibfk_1` FOREIGN KEY (`Order_Seller_id`) REFERENCES `order_seller` (`Order_seller_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_seller_gigs_ibfk_2` FOREIGN KEY (`Client_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_seller_gigs_ibfk_3` FOREIGN KEY (`Request_id`) REFERENCES `request` (`Request_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_seller_gigs_ibfk_4` FOREIGN KEY (`Gig_proposal_id`) REFERENCES `gig_proposal` (`Gig_proposal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_seller_gigs_ibfk_5` FOREIGN KEY (`Gig_id`) REFERENCES `gig` (`Gig_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_seller_job`
--
ALTER TABLE `order_seller_job`
  ADD CONSTRAINT `order_seller_job_ibfk_1` FOREIGN KEY (`Order_seller_job`) REFERENCES `order_seller` (`Order_seller_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_seller_job_ibfk_2` FOREIGN KEY (`Job_id`) REFERENCES `job` (`Job_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_seller_job_ibfk_3` FOREIGN KEY (`Client_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_seller_job_ibfk_4` FOREIGN KEY (`Request_id`) REFERENCES `request` (`Request_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_seller_job_ibfk_5` FOREIGN KEY (`Job_proposal_id`) REFERENCES `job_proposal` (`Job_proposal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `report_user`
--
ALTER TABLE `report_user`
  ADD CONSTRAINT `report_user_ibfk_1` FOREIGN KEY (`Report_user_by_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `report_user_ibfk_2` FOREIGN KEY (`Reported_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`Request_by_user_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`Reviews_of_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`Reviews_given_by_user_id`) REFERENCES `user` (`User_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`Reviews_job_id`) REFERENCES `job` (`Job_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `reviews_ibfk_4` FOREIGN KEY (`Reviews_gig_id`) REFERENCES `gig` (`Gig_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
