-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2014 at 11:25 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `appt`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `order`) VALUES
(1, 'news', 'news', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment_replies`
--

CREATE TABLE `blog_comment_replies` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `blog_comment_id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `reply` text NOT NULL,
  `date_added` date NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `blog_category_id` int(3) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_posted` date NOT NULL,
  `is_draft` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `slug`, `summary`, `content`, `image`, `blog_category_id`, `author`, `date_posted`, `is_draft`) VALUES
(1, 'Awesome Blog Post', 'awesome-blog-post', '<p>I noticed that every time I released a guide on a topic that has already been beaten to death or one that is basic, I barely got any visitors. For example, the guide to online marketing for beginners only received 68,319 visitors.</p>', '<p>I noticed that every time I released a guide on a topic that has already been beaten to death or one that is basic, I barely got any visitors. For example, the guide to online marketing for beginners only received 68,319 visitors.</p>\r\n\r\n<p>On the flip side, my guide on growth hacking has already received over 414,209 visitors.</p>\r\n\r\n<p>Every time I release a guide on an advanced topic, I receive at least a few hundred thousand visitors.</p>\r\n\r\n<p>The same trend exists with my blog. Every time I write on an advanced topic and give detailed steps, my traffic goes through the roof. And basic blog posts tend to flop.</p>\r\n\r\n<p>If you are going to invest the time and energy into writing a detailed guide, make sure you pick advanced topics that are continually growing in popularity. You can check this by using Google Trends.</p>\r\n\r\n<p>All you have to do is enter in a keyword or phrase of the topic you are trying to write about such as “growth hacking.”</p>', 'blog1.jpg', 1, 'Neal', '2014-03-03', 0),
(2, 'Grow Your Traffic', 'grow-your-traffic', '<p>Growing your web traffic can be an overwhelming task. There are hundreds of web tactics that you can follow and there are thousands of articles that explain each strategy. If you had all of the time in the world, this wouldn’t be an issue, but the reality is, you don’t.</p>', '<p>Growing your web traffic can be an overwhelming task. There are hundreds of web tactics that you can follow and there are thousands of articles that explain each strategy. If you had all of the time in the world, this wouldn’t be an issue, but the reality is, you don’t.</p>\r\n\r\n<p>So how do you grow your traffic? Luckily for you, we have created a step-by-step plan for you to follow over the next 30 days. For each day you are going to be given one task, as well as a homework assignment. If you follow it step by step, you should be able to drastically increase your traffic.</p>\r\n\r\n<p>Before we get started, you need to first learn how to build the right foundation by choosing keywords that are going to help you versus ones that will just drive traffic that doesn’t convert.</p>', NULL, 1, 'Neal Howarth', '2014-03-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_comments`
--

CREATE TABLE `blog_post_comments` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `blog_post_id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  `date_posted` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `business_categories`
--

CREATE TABLE `business_categories` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `business_categories`
--

INSERT INTO `business_categories` (`id`, `name`) VALUES
(1, 'Automotive'),
(2, 'Beauty Salon'),
(3, 'Hair Salon'),
(4, 'Personal Trainer'),
(5, 'Driving Lessons'),
(6, 'Tanning Salon');

-- --------------------------------------------------------

--
-- Table structure for table `business_details`
--

CREATE TABLE `business_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `town` varchar(150) DEFAULT NULL,
  `county` varchar(150) DEFAULT NULL,
  `postcode` varchar(15) DEFAULT NULL,
  `country_id` int(3) NOT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `public_email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `business_details`
--

INSERT INTO `business_details` (`id`, `user_id`, `street`, `town`, `county`, `postcode`, `country_id`, `telephone`, `public_email`, `website`, `facebook`, `twitter`, `image`) VALUES
(1, 9, '142 Market Street', 'Bury', 'Lancashire', 'BL8 3LS', 1, '01204 123456', '', 'http://www.how-media.co.uk', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_hours`
--

CREATE TABLE `business_hours` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `mon_open` time NOT NULL,
  `mon_close` time NOT NULL,
  `tues_open` time NOT NULL,
  `tues_close` time NOT NULL,
  `wed_open` time NOT NULL,
  `wed_close` time NOT NULL,
  `thurs_open` time NOT NULL,
  `thurs_close` time NOT NULL,
  `fri_open` time NOT NULL,
  `fri_close` time NOT NULL,
  `sat_open` time NOT NULL,
  `sat_close` time NOT NULL,
  `sun_open` time NOT NULL,
  `sun_close` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `business_hours`
--

INSERT INTO `business_hours` (`id`, `user_id`, `mon_open`, `mon_close`, `tues_open`, `tues_close`, `wed_open`, `wed_close`, `thurs_open`, `thurs_close`, `fri_open`, `fri_close`, `sat_open`, `sat_close`, `sun_open`, `sun_close`) VALUES
(2, 9, '09:00:00', '17:00:00', '09:00:00', '17:00:00', '09:00:00', '17:00:00', '09:00:00', '20:00:00', '09:00:00', '20:00:00', '09:00:00', '17:00:00', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `first_name`, `last_name`, `telephone`, `mobile`, `email`, `address`, `gender`, `dob`) VALUES
(2, 9, 'Emma', 'Howker', '01204 123456', '07777123456', '', '', 'Female', '1979-10-24'),
(3, 9, 'Neal', 'Howarth', '', '07411 274617', '', '', 'Male', '1979-04-12'),
(4, 9, 'Sally', 'Smith', '0161 761 1234', '07777 123 456', '', '', 'Female', '1990-03-09'),
(5, 9, 'John', 'Doe', '0161 764 1234', '', '', '', 'Male', '1967-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `currency_symbol` varchar(5) NOT NULL,
  `currency_html` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `currency_symbol`, `currency_html`) VALUES
(1, 'United Kingdom', '£', '&pound;');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `interval_length` int(2) NOT NULL,
  `interval_unit` varchar(20) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `details`, `price`, `interval_length`, `interval_unit`, `is_active`) VALUES
(1, 'Appt Test Plan', 'Appt test plan, 19.99 per month, starts after 30 days', 19.99, 1, 'month', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text,
  `telephone` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_manager` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `user_id`, `first_name`, `last_name`, `email`, `password`, `address`, `telephone`, `mobile`, `dob`, `gender`, `image`, `is_manager`) VALUES
(1, 9, 'Neal', 'Howarth', 'contact@how-media.co.uk', '5f4dcc3b5aa765d61d8327deb882cf99', '', '01204 123456', '', '1979-04-12', 'Male', '', 1),
(3, 9, 'Emma Louise', 'Howker', 'emmahowker@tiscali.co.uk', '', '142 Market Street\r\nBury\r\nLancashie\r\nBL8 3LS', '01204 782715', '07777 123456', '1979-10-24', 'Female', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_hours`
--

CREATE TABLE `staff_hours` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `staff_id` int(10) NOT NULL,
  `mon_open` time NOT NULL,
  `mon_close` time NOT NULL,
  `tues_open` time NOT NULL,
  `tues_close` time NOT NULL,
  `wed_open` time NOT NULL,
  `wed_close` time NOT NULL,
  `thurs_open` time NOT NULL,
  `thurs_close` time NOT NULL,
  `fri_open` time NOT NULL,
  `fri_close` time NOT NULL,
  `sat_open` time NOT NULL,
  `sat_close` time NOT NULL,
  `sun_open` time NOT NULL,
  `sun_close` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff_hours`
--

INSERT INTO `staff_hours` (`id`, `staff_id`, `mon_open`, `mon_close`, `tues_open`, `tues_close`, `wed_open`, `wed_close`, `thurs_open`, `thurs_close`, `fri_open`, `fri_close`, `sat_open`, `sat_close`, `sun_open`, `sun_close`) VALUES
(1, 3, '09:00:00', '17:00:00', '09:00:00', '17:00:00', '00:00:00', '00:00:00', '09:00:00', '20:00:00', '09:00:00', '17:00:00', '09:00:00', '17:00:00', '00:00:00', '00:00:00'),
(2, 1, '09:00:00', '17:00:00', '09:00:00', '17:00:00', '09:00:00', '17:00:00', '09:00:00', '17:00:00', '09:00:00', '17:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `surname` varchar(150) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_category_id` int(3) NOT NULL,
  `plan_id` int(3) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `surname`, `business_name`, `business_category_id`, `plan_id`, `is_active`) VALUES
(9, 'contact@how-media.co.uk', '5f4dcc3b5aa765d61d8327deb882cf99', 'Neal', 'Howarth', 'how media', 6, 1, 1);
