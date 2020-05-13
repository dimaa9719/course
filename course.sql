-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 03:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `course_code` varchar(30) NOT NULL,
  `upload_date` varchar(250) NOT NULL,
  `due_date` varchar(250) NOT NULL,
  `file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `name`, `course_code`, `upload_date`, `due_date`, `file`, `size`) VALUES
(17, 'Game Development(C002)', 'C002', '2019-09-20', '2019-09-30', 'print.pdf', 313986),
(24, 'Computer Aided Designing(D001)', 'D001', '2019-09-21', '2019-09-30', 'assign1.pdf', 546501);

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`course_id`, `course_code`, `name`, `description`, `price`, `file`, `size`, `downloads`) VALUES
(2, 'B002', 'Human Resouces', 'Course is about HR Management', 1800.75, 'vid1.mp4', 1571280, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `message_id` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  `date` varchar(60) NOT NULL,
  `time` varchar(60) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`message_id`, `message`, `date`, `time`, `status`) VALUES
(1, 'test message', '26/09/2019', '8:11pm', 1),
(11, 'Checking', '28/09/2019', '8:58pm', 1),
(12, 'bbvfbvjdg', '30/09/2019', '6:30am', 1),
(13, 'Need some help', '01/10/2019', '4:20pm', 1),
(15, 'testing......', '01/10/2019', '7:13pm', 1),
(17, 'help me!', '07/10/2019', '9:16pm', 1),
(18, 'guest help', '05/11/2019', '12:44pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `name`, `price`, `created`, `modified`) VALUES
(2, 'C002', 'GameDevelopment', '3500.00', '0000-00-00 00:00:00', '2019-11-03 13:13:18'),
(3, 'E001', 'Civil Engineering', '1200.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'P002', 'Wild Life Photography', '2100.00', '2019-10-01 00:00:00', '0000-00-00 00:00:00'),
(5, 'M009', 'Eastern Music', '2500.00', '2019-10-01 00:00:00', '0000-00-00 00:00:00'),
(6, 'B002', 'Human Resource', '1800.75', '2019-09-03 00:00:00', '0000-00-00 00:00:00'),
(7, 'C004', 'Computer Networks', '1400.75', '2019-10-01 00:00:00', '0000-00-00 00:00:00'),
(8, 'D001', 'Computer Aided Designing', '2500.00', '2019-10-02 00:00:00', '0000-00-00 00:00:00'),
(9, 'C009', 'UX', 'LKR 5000.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`course_id`, `course_code`, `name`, `description`, `price`, `file`, `size`, `downloads`) VALUES
(1, 'D001', 'Computer Aided Designing', 'Designing using computer softwares', 'Rs.2500.00', 'vid1.mp4', 1571280, 0);

-- --------------------------------------------------------

--
-- Table structure for table `development`
--

CREATE TABLE `development` (
  `id` int(11) NOT NULL,
  `course_code` varchar(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `development`
--

INSERT INTO `development` (`id`, `course_code`, `name`, `description`, `price`, `file`, `size`, `downloads`) VALUES
(4, 'C004', 'Computer Networks', 'This course is about computer networks..', 1400.75, 'vid3.mp4', 1503247, 0),
(5, 'C002', 'Game Development', 'this is a course about game development and coding..', 3500, 'Motivational video - This will change your mind - whatsapp 30 sec video -.mp4', 2615589, 0),
(6, 'C009', 'UX', 'User Experience', 5000, 'vid1.mp4', 1571280, 0);

-- --------------------------------------------------------

--
-- Table structure for table `engineering`
--

CREATE TABLE `engineering` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineering`
--

INSERT INTO `engineering` (`course_id`, `course_code`, `name`, `description`, `price`, `file`, `size`, `downloads`) VALUES
(1, 'E001', 'Civil Engineering', 'This is about civil engineering..', 1200, 'videoplayback (2).mp4', 957414, 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `date` date NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`date`, `details`) VALUES
('2019-10-01', 'UEE Assignment Completion viva'),
('2019-10-02', 'SPM Research paper submission');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`) VALUES
(1, 'License.txt', 1495, 2),
(8, 'vid1.mp4', 1571280, 0);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `student` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `mark` varchar(100) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `student`, `file`, `mark`, `grade`, `comments`) VALUES
(1, 'user123', 'License free.txt', '85', 'A+', 'NIcely done! Great Job');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`course_id`, `course_code`, `name`, `description`, `price`, `file`, `size`, `downloads`) VALUES
(1, 'M009', 'Eastern Music', 'Introduction To Eastern Music', 2500, 'mov_bbb.mp4', 788493, 0);

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`course_id`, `course_code`, `name`, `description`, `price`, `file`, `size`, `downloads`) VALUES
(1, 'P002', 'WildLife Photography', 'This course is about wildlife photography skills', 2100, 'Motivational video - This will change your mind - whatsapp 30 sec video -.mp4', 2615589, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rate_id` int(11) NOT NULL,
  `course_code` varchar(200) NOT NULL,
  `reviewer` varchar(200) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rate_id`, `course_code`, `reviewer`, `user_type`, `rate`, `comment`, `date`) VALUES
(1, 'Classical Music', 'Tharaka Herath', 'Student', 2, 'A good Course.Very Helpful!!', '30/09/2019'),
(2, 'Western Music', 'Nayomi Perera', 'Student', 2, 'A good Course.Very Helpful!!', '30/09/2019'),
(3, 'Light Control', 'Madhavi Anthony', 'Student', 2, 'A good Course.Very Helpful!!', '30/09/2019'),
(4, 'Computer Aided Designing', 'Dilanka Wijerathne', 'Lecturer', 3, 'Nice Content Flow..', '30/09/2019'),
(5, 'Game Development', 'Sheldon Cooper', 'Lecturer', 4, 'Course Content Really amazing!!', '30/09/2019'),
(6, 'Human Resorces', 'D.L.Kodagoda', 'Lecturer', 3, 'Need to add some more video tutorials for the ease of students', '01/10/2019'),
(7, 'Finance Management', 'Lakshan Bandara', 'Student', 3, 'Nice Content!!', '01/10/2019'),
(8, 'Game Development', 'Dewmini Ranasinghe', 'Student', 5, 'Interesting Course', '01/10/2019'),
(9, 'Web Development', 'Savindu Wijesinghe', 'Lecturer', 5, 'Good Course', '01/10/2019'),
(10, 'Game Development', 'musha', 'Student', 4, 'godddd', '21/10/2019'),
(11, 'Computer Networks', 'kichz', 'Student', 5, 'test run', '28/10/2019');

-- --------------------------------------------------------

--
-- Table structure for table `stu_course`
--

CREATE TABLE `stu_course` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `course_code` varchar(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `category` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_course`
--

INSERT INTO `stu_course` (`id`, `username`, `course_code`, `name`, `category`, `price`, `date`) VALUES
(16, 'stu_1', 'C002', 'Game Development', 'development', 3500, '03/11/2019'),
(19, 'user123', 'E001', 'Civil Engineering', 'engineering', 1200, '04/11/2019'),
(22, 'user123', 'C002', 'Game Development', 'development', 3500, '04/11/2019'),
(25, 'user123', 'P002', 'WildLife Photography', 'photography', 2100, '04/11/2019');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `username` varchar(100) NOT NULL,
  `assignment` varchar(200) NOT NULL,
  `file` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`username`, `assignment`, `file`, `id`) VALUES
('user123', 'print.pdf', 'License free.txt', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `age` varchar(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `qualification` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `dob`, `age`, `country`, `city`, `qualification`, `email`, `user_type`, `password`, `status`, `created`, `modified`) VALUES
(2, 'lec_1', 'Alfred James', '1957-08-09', '64', 'Germany', 'Berlin', 'Bsc/Msc', 'lec1@gmail.com', 'admin', '2dc237d20c9cc625a314c522e8816196', '1', '0000-00-00 00:00:00', '2019-11-03 15:54:33'),
(3, 'user123', 'James Bryan', '1998-02-09', '20', 'America', 'New York', '', 'user@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '1', '0000-00-00 00:00:00', '2019-10-30 06:19:24'),
(4, 'stu_1', 'Stephani De Silva', '1977-02-03', '45', 'Sri Lanka', 'Colombo', '', 'stu1@gmail.com', 'user', 'bd9dd13edc9c5dab79239a75c627f223', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'manager', '', '', '0', '', '', '', 'manager@gmail.com', 'admin', '1d0258c2440a8d19e716292b231e3190', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'lec321', 'Ann Ferdinands', '1963-02-03', '57', 'US', 'London', 'Phd', 'amaya@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', '1', '0000-00-00 00:00:00', '2019-11-03 13:05:43'),
(12, 'student456', 'Amali Wijesekera', '1996-08-09', '23', 'Sri Lanka', 'Kandy', '', 'd@gmail.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055', '1', '0000-00-00 00:00:00', '2019-10-30 05:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`) VALUES
(5, 0x393838352d57697468204d61746820492043616e202d203330205365636f6e642e6d7034),
(14, 0x353830392d57697468204d61746820492043616e202d203330205365636f6e642e6d7034),
(15, 0x373535302d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(16, 0x383134362d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(17, 0x383039312d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(18, 0x323739392d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(19, 0x393534382d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(20, 0x393138392d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(21, 0x363636322d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(22, 0x393035372d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(23, 0x373636392d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(24, 0x383433372d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(25, 0x323234362d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(26, 0x313938352d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(27, 0x353939392d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(28, 0x383737362d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(29, 0x323537362d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034),
(30, 0x353935392d576f726c642062657374206d6f7469766174696f6e2020766964656f20285768617473417070207374617475732029202833302073656329204d736b20766c6f67732e6d7034);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `development`
--
ALTER TABLE `development`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engineering`
--
ALTER TABLE `engineering`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `stu_course`
--
ALTER TABLE `stu_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `development`
--
ALTER TABLE `development`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `engineering`
--
ALTER TABLE `engineering`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photography`
--
ALTER TABLE `photography`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stu_course`
--
ALTER TABLE `stu_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
