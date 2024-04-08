-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2024-04-08 07:33:37
-- 服务器版本： 8.2.0
-- PHP 版本： 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `iq`
--

-- --------------------------------------------------------

--
-- 表的结构 `iq_test`
--

DROP TABLE IF EXISTS `iq_test`;
CREATE TABLE IF NOT EXISTS `iq_test` (
  `Name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q7` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q8` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q9` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q10` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q11` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q12` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q13` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q14` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `Q15` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `SCORE` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- 转存表中的数据 `iq_test`
--

INSERT INTO `iq_test` (`Name`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `SCORE`) VALUES
('圣园未花', 'A', 'B', 'A', 'F', 'E', 'E', 'C', 'E', 'A', 'B', 'B', 'F', 'C', 'E', 'A', NULL),
('礼堂顶针', 'A', 'A', 'B', 'E', 'C', 'B', 'E', 'A', 'D', 'D', 'A', 'E', 'C', 'F', 'C', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
