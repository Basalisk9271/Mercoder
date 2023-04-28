-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2023 at 11:43 PM
-- Server version: 5.7.41
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mercoder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `created`) VALUES
(3, '', '2023-04-18 15:03:41'),
(4, '', '2023-04-18 15:07:30'),
(5, '', '2023-04-18 15:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `sender_user_name` varchar(100) NOT NULL,
  `recipient_user_name` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `contents` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `title` varchar(1500) NOT NULL COMMENT 'determined by software',
  `author` varchar(1500) NOT NULL COMMENT 'determined by software',
  `date_created` date NOT NULL COMMENT 'determined by software',
  `description` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `sample_input` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `sample_output` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `description_input` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `description_output` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`title`, `author`, `date_created`, `description`, `sample_input`, `sample_output`, `description_input`, `description_output`) VALUES
('(SAMPLE). An Hour Away', 'Bob', '2023-03-29', 'You have planned an exciting vacation to an amazing location far, far, away. You are very anxious to get to your destination as fast as possible. Your flight just landed at the airport nearest to your destination, and you now need to rent a car to finish your journey. At the car rental kiosk, you are informed that they only rent “Smart Self-Driving Cars.” Being the techy person that you are, you are very excited about riding in this very special car. The rental agent then informs you that their smart cars have an unusual software glitch. When you enter your destination in the smart car, it calculates the shortest distance, and begins driving. The unusual part is that the car continuously adjusts its speed to always be “an hour away” from your destination. That is, when you are 100 miles away, the car travels 100 mph; when you are 97.5 miles away the car travels 97.5 mph; when you are 1 mile away the car travels 1 mph. Being the great technical problem solver that you are, you realize at this rate, you will never get to your destination!  You also know that you can stop the car at any point and walk.  You, therefore, must determine when to stop the car and start walking in order to get to your amazing vacation the fastest.\r\n', '4\r\n100 3\r\n50 3\r\n8 5\r\n1000 1', '4.51\r\n3.81\r\n1.47\r\n7.91\r\n', 'Your input will begin with a single line containing the number of vacation test cases 1 <= n <= 20000. The following 𝑛 lines will each contain a test case that consists of 2 integers: 1 <= 𝑑 <= 1000, and 1 <= s <= 20, where 𝑑 is the distance in miles from the airport to the vacation spot, and s is your constant walking speed in miles per hour. ', 'Your output should, for each test case, be a single floating point number denoting the least amount of time in hours needed for each vacation test case. Output should be rounded to the nearest hundredth of an hour.'),
('(SAMPLE) Geospatial Coverage', 'Bob', '2023-03-29', 'Little Bobby Tables finally grew up and started his own satellite image mapping company.  They have been extremely successful despite one major problem, not knowing how much of the earth they’ve mapped.  Oh well, baby steps.  You’re a new developer with the company, and you’ve received the unenviable task of finding the answer.', '2\r\n100 100 2\r\n0 0 100 100 10\r\n0 100 100 0 10\r\n50 50 2\r\n0 25 50 25 5\r\n25 0 25 50 5\r\n', '36.00\r\n36.00\r\n', 'Input begins with a single line containing a single number n (<= 10), the number of test cases. Each of the subsequent n sections begins with three numbers separated by a single space: x y z.  x (<= 1000) is the width of the area to be mapped, and y (<= 1000) is the height. z (<= 10) is the number of satellites that will be used to map the area. (Note: the area is completely flat and fully rectangular). z lines of input will follow.  Each line will contain 5 numbers separated by a single space: x y j k l. x, y are coordinate points which indicate where the satellite enters the area. j, k are coordinate points which indicate where the satellite leaves the area and l is the scanning width. (Note: the coordinate pairs are guaranteed to be along the outside edges of the grid).\r\nNote: Scanning width is defined differently than you might expect.  For example, if a satellite enters the area at 0, 0 with a scanning width of 10, the satellite’s scan would stretch to 0, 10 and 10, 0.  If the satellite enters at 0, 5 with a scanning width of 10, the scan would stretch to 0, 15 and 5, 0.\r\n', 'Output the percentage of area covered by the satellites, rounded to 0 decimal places, as shown in the sample output.'),
('(SAMPLE) Leap Day', 'Bob', '2023-03-29', '2020 is a leap year, and today is our extra leap day in February.  We want to write a computer program which will calculate the total leap years in an inclusive range of years.  As you may know, this extra day keeps our Gregorian calendar year from drifting through the seasons over time since a year is technically 365.25 days.  Here is the rule.\r\nEvery year that is exactly divisible by four is a leap year, except for years that are exactly divisible by 100, but these centurial years are leap years if they are exactly divisible by 400. For example, the years 1700, 1800, and 1900 are not leap years, but the years 1600 and 2000 are.', '5\r\n2015 2016\r\n2015 2020\r\n2014 2015\r\n1900 2000\r\n1900 2100\r\n', 'There is 1 leap year from 2015 to 2016.\r\nThere are 2 leap years from 2015 to 2020.\r\nThere are 0 leap years from 2014 to 2015.\r\nThere are 25 leap years from 1900 to 2000.\r\nThere are 49 leap years from 1900 to 2100.\r\n', 'The input will start with a single line containing a positive integer n representing the specified number of year ranges to be input. Each of the n line(s) consists of two integers starting with the first year, a single space, and followed by the second year.  You may assume all years fall in the range [1600, 2100], and that the second year is always larger than the first year.', 'Keep track of all line numbers and output the code for each line in the exact format below.  If there is only one leap year, use the word “is” rather than “are” in your output along with the singular “year”.  Make sure you end the output of each line with a period.'),
('(SAMPLE) Leap Day Dinner ', 'Bob', '2023-03-29', 'Ah, Leap Day. The traditional rhubarb-flavored caramels, the presents wrapped in yellow and blue, the city-wide ice maze, and the huge Leap Day extended family feast!\r\nYour family is hosting the feast this year. As per tradition, dating as far back as 1996, the hosting family presents a list of dishes to the invitees. The invitees send back votes on which dishes they would most enjoy. Based on arcane rules and a two-hour meeting, the hosts pick a threshold vote value to decide the menu. A set of dishes from the list are picked such that the sum of all votes for those dishes is equal to or greater than the chosen threshold.\r\nCooking all those dishes is a lot of work, and your family is under a lot of pressure to decide the menu and get it prepared by the big day. You despise cooking, so you offer a bargain: given the list of dishes, the total votes for each, and how long each dish takes to prepare, you’ll figure out a set of dishes that can be prepared in the least amount of time and still meet or exceed the vote threshold. If you can do that, you’ll be excused from cooking duties.\r\nNote that despite multiple people in the kitchen, only one dish can be in progress at a time.\r\n', '2\r\n2 10\r\n1 1\r\n1 9\r\n4 20\r\n2 9\r\n3 10\r\n2 5\r\n3 5\r\n', '2\r\n7\r\n', 'The first line of input will contain a single positive integer, c (c ≤ 10), representing the number of input cases to process. The input cases follow. The first line of each case has two integers: n (1 ≤ n ≤ 5,000), the number of dishes; and t (1 ≤ t ≤ 1,000,000), the target threshold value. n lines follow, each describing one dish. Each dish line has two integers: m (1 ≤ m ≤ 10), the number of minutes the dish takes to prepare, and v (1 ≤ v ≤ 1,000), the number of votes for the dish. ', 'For each input case, on a line by itself, output the minimum number of minutes in which a conforming set of dishes can be prepared.'),
('(SAMPLE) Party', 'Bob', '2023-03-29', 'You plan to drive to pick up all your friends for an upcoming party you are hosting. You and your friends live in different houses in the same city and each house has an index. The roads guarantee that there exists a path between every two houses. Starting from your house, calculate the shortest path for you to pick up every friend and finally return to your home. Assume your car can carry all friends at the same time and you live in the house indexed as 1.', '1\r\n4 5 2\r\n3 4\r\n1 2 1\r\n2 3 3\r\n3 4 2\r\n1 4 3\r\n1 3 5\r\n', '9', 'The first line of input will contain a single integer t, which represents the number of test cases.  You may assume that 1 ≤ t ≤ 100.  Each test case always consists of at least three lines in the following format. The first line of each test case consists of three integers n, m, and k.  Assume n is a positive integer, 1 ≤ n ≤ 50,000, representing the number of houses and each house has a unique index from 1 to n.  This is followed by a positive integer m, 1 ≤ m ≤ 100,000, representing a number of roads, and k is an integer, 0 ≤ k ≤ 15,  representing your number of friends.\r\nThe second line of each test case consists of k integers, representing your friends’ house numbers.  This is followed by m lines for each of your roads. For each road, you will have three integers h1, h2, and w, showing that a two-way road with length w is connecting houses h1 and h2.  Assume w is an integer where 0 ≤ w ≤ 50000.', 'An integer, which is the length of the shortest path you will take.'),
('(SAMPLE) Pigeon-Hole Proofs', 'Bob', '2023-03-29', 'Freddie learned about the pigeon-hole principle in Discrete Math class. One of the homework problems, an even-numbered one of course, is to prove that for every modulus M, there exists a positive number K, having only 3’s and 0’s in its decimal representation, such that K mod M is 0.\r\nYour task is to help Freddie quickly find the smallest K for various values of M. Your submission should be able to find a solution per test case each second.', '3\r\n1\r\n5\r\n27\r\n', '3\r\n30\r\n333333333', 'The input will consist of a number N, 1 ≤ N ≤ 60, which is the number of lines/test cases. Each of the following N lines will contain one integer M, 1 ≤ M ≤ 2,000,000. ', 'For each test case, output the smallest (positive) value K, having only 3’s and 0’s in its decimal representation, such that K mod M = 0.');

-- --------------------------------------------------------

--
-- Table structure for table `problem_attempts`
--

CREATE TABLE `problem_attempts` (
  `user_name` varchar(100) NOT NULL COMMENT 'determined by software',
  `date` date NOT NULL COMMENT 'determined by software',
  `submission_link` text NOT NULL COMMENT 'Submission Link related to REPL repository'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `username`, `password`, `school`, `city`) VALUES
(2, 'testStu', '8ecd096bcf2162f2dd5ab5bf8c70531a', 'Mercer University', 'Macon, Ga'),
(3, 'testStu2', 'fa0f2228e9a0b97a192bf16f17f93836', 'Mercer University', 'Macon, Ga');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `classcode` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`id`, `name`, `username`, `school`, `classcode`, `password`, `city`) VALUES
(1, 'John Doe', 'test1', 'Mercer University', 1000, '5a105e8b9d40e1329780d62ea2265d8a', 'Macon, GA'),
(3, 'test2', 'test2', 'Mercer University', 111111, 'ad0234829205b9033196ba818f7a872b', 'Macon, GA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher_login`
--
ALTER TABLE `teacher_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
