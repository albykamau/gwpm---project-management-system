-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 08:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gwpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `log_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `log_description` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `u_name` varchar(255) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passsword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `u_name`, `fname`, `email`, `passsword`) VALUES
(1, 'admin', 'Albert Kamau', 'admin@gwpm.com', '1234'),
(2, 'admin2', 'Sam Ken', 'admin2@gwpm.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `chatroom` (
  `chatroom_id` int(11) NOT NULL,
  `chatname` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `msg_id` int(11) NOT NULL,
  `chatroom_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `msg` mediumtext NOT NULL,
  `dt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`msg_id`, `chatroom_id`, `uname`, `msg`, `dt`) VALUES
(1, 0, 'hill1', '                                            df', '11-01-22 08:55am'),
(2, 0, 'hill1', 'jjkj                                           ', '11-01-22 08:59am'),
(4, 0, 'hill1', '                            wew                ', '11-01-22 09:07am'),
(6, 0, 'hill1', '                                            rfrf', '11-01-22 09:14am'),
(9, 0, 'vinnie', '           hi                                 ', '13-01-22 12:20am');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `user_feedb` mediumtext NOT NULL,
  `statuss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `fname`, `email`, `category`, `user_feedb`, `statuss`) VALUES
(1, 'Hillary Kimani', '', 'Ask Question', 'Does the feedback module work?', '');

-- --------------------------------------------------------

--
-- Table structure for table `group1`
--

CREATE TABLE `group1` (
  `membership_id` int(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `member_role` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `indv_grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group1`
--

INSERT INTO `group1` (`membership_id`, `group_id`, `student_id`, `member_role`, `date_added`, `indv_grade`) VALUES
(1, 8, 3, 'Member', '2021-11-30 21:30:52', ''),
(2, 8, 5, 'Member', '2021-11-28 06:14:27', ''),
(3, 8, 2, 'Member', '2021-11-28 14:03:13', ''),
(4, 8, 6, 'Member', '2021-11-30 21:35:14', ''),
(5, 11, 1, 'leader', '2022-01-11 14:18:20', ''),
(6, 8, 1, 'Assistant GL', '2022-01-11 14:33:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `groups_list`
--

CREATE TABLE `groups_list` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `group_description` mediumtext NOT NULL,
  `invite_link_id` varchar(255) NOT NULL,
  `group_leader` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `progress` int(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `group_remarks` mediumtext NOT NULL,
  `overall_grade` varchar(255) NOT NULL,
  `submission_status` varchar(255) NOT NULL,
  `date_submitted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups_list`
--

INSERT INTO `groups_list` (`group_id`, `group_name`, `project_id`, `group_description`, `invite_link_id`, `group_leader`, `created_by`, `created_at`, `progress`, `priority`, `group_remarks`, `overall_grade`, `submission_status`, `date_submitted`) VALUES
(6, 'Group 1: Tester', 1, 'Follow lec\'s instructions', 'autogenerate', 'session/ creator (changable in grooup settings', 'session: creator', '2021-11-26 15:01:03', 0, '', 'lecs comments', 'A', '', ''),
(8, 'Group 2 test', 2, 'Testiiiing', '', '', 'Hillary Kimani', '2021-11-27 14:59:18', 0, '', '', '', '', ''),
(9, 'Group 3 test', 1, 'yet another test', '', '', 'Hillary Kimani', '2021-11-28 07:05:09', 0, '', '', '', '', ''),
(11, 'Group 4', 4, 'Do research on enron scandal', '', '', 'Hillary Kimani', '2022-01-11 14:18:20', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `lecturer_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passsword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`lecturer_id`, `fname`, `username`, `email`, `passsword`) VALUES
(1, 'Edwin Karanja', 'edu', 'edwin@itc.jkuat.co.ke', 'edulec'),
(2, 'Francis Opiyo', 'frank', 'francis@itc.jkuat.co.ke', 'franklec'),
(3, 'Esther Rhodes', 'esther', 'esther@lec.jkuat.ac.ke', 'esther'),
(4, 'Bella Poarch', 'Bella', 'bella.poarch@lec.jkuat.ac.ke', 'B.A.B');

-- --------------------------------------------------------

--
-- Table structure for table `lec_files`
--

CREATE TABLE `lec_files` (
  `file_id` int(255) NOT NULL,
  `project_id` int(255) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `uploaded_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(255) NOT NULL,
  `chatroom_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attachment` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project_tasks`
--

CREATE TABLE `project_tasks` (
  `task_id` int(255) NOT NULL,
  `student_id` int(10) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` mediumtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `progress` varchar(255) NOT NULL,
  `deadline` datetime DEFAULT NULL,
  `statuss` varchar(45) NOT NULL,
  `prioritee` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_tasks`
--

INSERT INTO `project_tasks` (`task_id`, `student_id`, `task_name`, `task_description`, `date_created`, `progress`, `deadline`, `statuss`, `prioritee`, `group_id`, `resource_id`) VALUES
(1, 2, 'Editing', 'Edit the document Hillary uploaded', '2021-12-01 07:35:20', '10', '2021-12-21 22:13:07', 'In Progress', 'Medium', 8, 0),
(2, 1, 'Task test', 'finish the rest ', '2022-01-13 00:31:44', '', '2022-01-20 00:00:00', '', 'High', 8, 0),
(3, 1, 'task 1', 'do task 1', '2022-01-13 07:08:16', '', '2022-01-18 00:00:00', '', 'High', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resource_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `resource_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `uploaded_file` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passsword` varchar(255) NOT NULL,
  `active` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `fname`, `username`, `regno`, `email`, `passsword`, `active`) VALUES
(1, 'Hillary Kimani', 'hill1', 'SCT123', 'hillary@students.jkuat.ac.ke', 'hillary', '2022-01-12 23:28:52'),
(2, 'Vincent Mano', 'vinnie', 'SCT550', 'vincent@students.jkuat.ac.ke', 'vinnie1', '2022-01-12 23:29:29'),
(3, 'Nashipae Koikai', 'nash', '', 'nashipae@students.jkuat.ac.ke', 'nashnash', '0000-00-00 00:00:00'),
(5, 'Abraham Kivondo', 'Kivosh', '', 'abraham@students.jkuat.ac.ke', 'abrahamu', '0000-00-00 00:00:00'),
(6, 'Naserian Wanjiru', 'nase', '', 'naserian@jkuat.ac.ke', 'naserian', '0000-00-00 00:00:00'),
(7, 'Naserian Wanjiku', 'naserian', '', 'naserian.wanjiku@jkuat.ac.ke', 'naserian1', '2021-11-26 14:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `student_files`
--

CREATE TABLE `student_files` (
  `file_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `uploaded_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unit_id` int(255) NOT NULL,
  `lecturer_id` int(10) NOT NULL,
  `unite_code` varchar(45) NOT NULL,
  `unit_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unit_id`, `lecturer_id`, `unite_code`, `unit_name`) VALUES
(1, 1, 'TEST 123', 'Software Testing'),
(2, 2, 'BIT 2318', 'IS Audit'),
(3, 1, 'ICS 2303', 'Multimedia Systems'),
(4, 3, 'ICS 1234', 'Digital logics');

-- --------------------------------------------------------

--
-- Table structure for table `unit_project`
--

CREATE TABLE `unit_project` (
  `project_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `unit_id` int(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_description` mediumtext NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `due_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit_project`
--

INSERT INTO `unit_project` (`project_id`, `lecturer_id`, `unit_id`, `project_name`, `project_description`, `date_posted`, `due_date`) VALUES
(1, 1, 1, 'Test Project', 'Entry Field for testing purposes', '2021-11-29 19:25:04', '2021-12-02 23:56:22'),
(2, 1, 3, 'Test 3', 'Another test', '2021-11-29 19:25:04', '2021-12-16 17:41:39'),
(3, 1, 3, 'Test 4', 'Create video as project', '2021-11-29 19:25:04', '2021-12-10 00:00:00'),
(4, 2, 2, 'IS Audit Work', 'Carry out an audit on the ENRON scandal', '2021-11-29 19:25:04', '2021-12-10 22:17:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `student_studentgrp1` (`student_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`chatroom_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `croomid(chats_table)_to_chatroom_id(croom_table)` (`chatroom_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `group1`
--
ALTER TABLE `group1`
  ADD PRIMARY KEY (`membership_id`),
  ADD KEY `group1_grouplist` (`group_id`),
  ADD KEY `group1_students` (`student_id`);

--
-- Indexes for table `groups_list`
--
ALTER TABLE `groups_list`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `groupleader_role` (`group_leader`),
  ADD KEY `proectid_unitproject` (`project_id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `lec_files`
--
ALTER TABLE `lec_files`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `project_id(lecfiles)-project_id(unitproject)` (`project_id`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `msgs_chatroom_id` (`chatroom_id`),
  ADD KEY `msgs_student_id` (`student_id`);

--
-- Indexes for table `project_tasks`
--
ALTER TABLE `project_tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `group_group1id` (`group_id`),
  ADD KEY `student_std-id-grp1` (`student_id`),
  ADD KEY `resource_id` (`resource_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resource_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_files`
--
ALTER TABLE `student_files`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unit_id`),
  ADD KEY `units_lec_id` (`lecturer_id`);

--
-- Indexes for table `unit_project`
--
ALTER TABLE `unit_project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `lec_lecturers` (`lecturer_id`),
  ADD KEY `unitid(unit_pro) - unitid(units)` (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `chatroom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `group1`
--
ALTER TABLE `group1`
  MODIFY `membership_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groups_list`
--
ALTER TABLE `groups_list`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lec_files`
--
ALTER TABLE `lec_files`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_tasks`
--
ALTER TABLE `project_tasks`
  MODIFY `task_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_files`
--
ALTER TABLE `student_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unit_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unit_project`
--
ALTER TABLE `unit_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `group1` (`student_id`);

--
-- Constraints for table `group1`
--
ALTER TABLE `group1`
  ADD CONSTRAINT `group1_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `group1_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups_list` (`group_id`);

--
-- Constraints for table `groups_list`
--
ALTER TABLE `groups_list`
  ADD CONSTRAINT `groups_list_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `unit_project` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lec_files`
--
ALTER TABLE `lec_files`
  ADD CONSTRAINT `lec_files_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `unit_project` (`project_id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`chatroom_id`) REFERENCES `chatroom` (`chatroom_id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `project_tasks`
--
ALTER TABLE `project_tasks`
  ADD CONSTRAINT `project_tasks_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group1` (`group_id`),
  ADD CONSTRAINT `project_tasks_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `group1` (`student_id`);

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups_list` (`group_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`lecturer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `unit_project`
--
ALTER TABLE `unit_project`
  ADD CONSTRAINT `unit_project_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `units` (`unit_id`),
  ADD CONSTRAINT `unit_project_ibfk_3` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`lecturer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
