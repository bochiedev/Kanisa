SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `carousel_image` text NOT NULL,
  `carousel_text` text NOT NULL,
  `carousel_subtext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `church_theme` (
  `id` int(11) NOT NULL,
  `theme_text` varchar(255) NOT NULL,
  `theme_year` year(4) NOT NULL,
  `theme_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_info` text NOT NULL,
  `event_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `events` (`id`, `event_name`, `event_date`, `event_location`, `event_info`, `event_time`) VALUES
(1, 'Woman\'s Guild Sunday', '2018-06-03', 'Bahati martyrs\'', 'Yearly Guild week is here.We wrap it up this Sunday the third of April, don,t miss', 'All services'),
(2, '7 Deadly Sins series', '2018-06-03', 'Youth Church', 'We look at the seven deadly sins that God hates guided by the book of proverbs.Purpose to attend!', '11:00');


CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `media_category` varchar(255) NOT NULL,
  `media_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `media` (`id`, `media_name`, `media_category`, `media_date`) VALUES
(1, 'DSC_4907.jpg', '3', '2018-05-20'),
(2, 'DSC_4906(1).jpg', '3', '2018-05-20'),
(3, 'DSC_4905.jpg', '3', '2018-05-20'),
(4, 'DSC_4903.jpg', '3', '2018-05-20'),
(5, 'DSC_4901.jpg', '3', '2018-05-20'),
(6, 'DSC_4899.jpg', '3', '2018-05-20'),
(7, 'DSC_4892.jpg', '3', '2018-05-20'),
(8, 'DSC_4890.jpg', '3', '2018-05-20'),
(9, 'DSC_4889.jpg', '3', '2018-05-20'),
(10, 'DSC_4879.jpg', '3', '2018-05-20'),
(11, 'DSC_4877.jpg', '3', '2018-05-20'),
(12, 'DSC_4876.jpg', '3', '2018-05-20'),
(13, 'DSC_4861.jpg', '4', '2018-05-06'),
(14, 'DSC_4753.jpg', '4', '2018-05-06'),
(15, 'DSC_0069.jpg', '4', '2018-05-06'),
(16, 'DSC_0025.jpg', '4', '2018-05-06'),
(17, 'DSC_0013.jpg', '4', '2018-05-06'),
(18, 'DSC_0011.jpg', '4', '2018-05-06'),
(19, 'DSC_0009.jpg', '4', '2018-05-06');

CREATE TABLE `media_category` (
  `id` int(11) NOT NULL,
  `category_date` date NOT NULL,
  `category_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `media_category` (`id`, `category_date`, `category_image`) VALUES
(3, '2018-05-20', 'DSC_4907.jpg'),
(4, '2018-05-06', 'DSC_4861.jpg');

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(2, 'ernest', '$2y$10$fjFnDhgFXmyvz0JZkx0VNeWHKly5sTkC9pQ/jhQRZ/I1psFc3VmMq', 'ernest', 'Marshall', 'ernestmarshall6@gmail.com', '', 'admin', '$2y$10$iusesomecrazystrings22');


CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `video_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `church_theme`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `media_category`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `church_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE `media_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
