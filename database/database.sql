-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jul-2018 às 05:03
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET ascii COLLATE ascii_general_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--
-- Criação: 18-Jul-2018 às 21:39
--

DROP TABLE IF EXISTS `equipamentos`;
CREATE TABLE IF NOT EXISTS `equipamentos` (
  `Nome` text NOT NULL,
  `Sufixo` text NOT NULL,
  `Tipo` text NOT NULL,
  `Posto` text NOT NULL,
  `Manual` text NOT NULL,
  `Codigo` int(11) NOT NULL,
  `algo` text NOT NULL,
  `Firmware` text NOT NULL,
  `NumeroSerie` text NOT NULL,
  `Patrimonio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- RELATIONSHIPS FOR TABLE `equipamentos`:
--

--
-- Truncate table before insert `equipamentos`
--

TRUNCATE TABLE `equipamentos`;
--
-- Extraindo dados da tabela `equipamentos`
--

INSERT DELAYED IGNORE INTO `equipamentos` (`Nome`, `Sufixo`, `Tipo`, `Posto`, `Manual`, `Codigo`, `algo`, `Firmware`, `NumeroSerie`, `Patrimonio`) VALUES
('teste', 'TX', '', '', '', 0, '', 'teste', 'teste', 'teste'),
('djhfgjfgj', 'TX', '', '', '', 0, '', 'fgjfgjfgj', 'fgjfgjfgj', 'fgjfgjfgj'),
('dfhdsfhdfhdfh', 'TX', '', '', '', 0, '', 'dfhdfhdf', 'hdfhdfh', 'dfhdfhdfh'),
('dfhdfhdfh', 'TX', '', '', '', 0, '', 'dfhdfhdfhd', 'fhdfhdfhd', 'hfdhfdfh'),
('dhdhdfhdfhd', 'TX', '', '', '', 0, '', 'fhdfhdfhdfh', 'dfhdfhdhd', 'fhdhdfhdh'),
('gykjgkgh', 'LK', '', '', '', 0, '', 'hkghkghkg', 'hkghkgh', 'kghkghkghk'),
('', 'TX', '', '', '', 0, '', '', '', ''),
('xfjxfjxfj', 'TX', '', '', '', 0, '', 'xfgjxfgjxf', 'xfgjxfgj', 'xgjxgf'),
('testando ', 'TX', '', '', '', 0, '', 'testa', 'teas', 'tes'),
('', 'TX', '', '', '', 0, '', '', '', ''),
('', 'TX', '', '', '', 0, '', '', '', ''),
('', 'TX', '', '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `manuais`
--
-- Criação: 22-Jul-2018 às 23:36
--

DROP TABLE IF EXISTS `manuais`;
CREATE TABLE IF NOT EXISTS `manuais` (
  `nome` text NOT NULL,
  `tipo` text NOT NULL,
  `diretorio` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=ascii;

--
-- RELATIONSHIPS FOR TABLE `manuais`:
--

--
-- Truncate table before insert `manuais`
--

TRUNCATE TABLE `manuais`;
--
-- Extraindo dados da tabela `manuais`
--

INSERT DELAYED IGNORE INTO `manuais` (`nome`, `tipo`, `diretorio`, `id`) VALUES
('ARTE CH TX TIO 111 INVERTE', 'pdf', '/manuais/ARTE CH TX TIO 111 INVERTE.pdf', 1),
('ARTE FINAL HD', 'svg', '/manuais/ARTE FINAL HD.svg', 2),
('blocos cubo', 'blend', '/manuais/blocos cubo.blend', 3),
('redegazetaLogo', 'png', '/manuais/redegazetaLogo.png', 4),
('TRETIS', 'png', '/manuais/TRETIS.png', 5),
('TRETIS', 'png', '/manuais/TRETIS.png', 6),
('', 'rnd', '/manuais/.rnd', 7),
('api-ms-win-crt-runtime-l1-1-0', 'zip', '/manuais/api-ms-win-crt-runtime-l1-1-0.zip', 8);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table equipamentos
--
-- Error reading data for table phpmyadmin.pma__column_info: #1100 - Tabela 'pma__column_info' não foi travada com LOCK TABLES
-- Error reading data for table phpmyadmin.pma__table_uiprefs: #1100 - Tabela 'pma__table_uiprefs' não foi travada com LOCK TABLES
-- Error reading data for table phpmyadmin.pma__tracking: #1100 - Tabela 'pma__tracking' não foi travada com LOCK TABLES

--
-- Metadata for table manuais
--
-- Error reading data for table phpmyadmin.pma__column_info: #1100 - Tabela 'pma__column_info' não foi travada com LOCK TABLES
-- Error reading data for table phpmyadmin.pma__table_uiprefs: #1100 - Tabela 'pma__table_uiprefs' não foi travada com LOCK TABLES
-- Error reading data for table phpmyadmin.pma__tracking: #1100 - Tabela 'pma__tracking' não foi travada com LOCK TABLES

--
-- Metadata for database database
--
-- Error reading data for table phpmyadmin.pma__bookmark: #1100 - Tabela 'pma__bookmark' não foi travada com LOCK TABLES
-- Error reading data for table phpmyadmin.pma__relation: #1100 - Tabela 'pma__relation' não foi travada com LOCK TABLES
-- Error reading data for table phpmyadmin.pma__savedsearches: #1100 - Tabela 'pma__savedsearches' não foi travada com LOCK TABLES
-- Error reading data for table phpmyadmin.pma__central_columns: #1100 - Tabela 'pma__central_columns' não foi travada com LOCK TABLES
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
