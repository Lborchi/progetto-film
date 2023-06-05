-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.28-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database utenti
CREATE DATABASE IF NOT EXISTS `utenti` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `utenti`;

-- Dump della struttura di tabella utenti.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `utente` varchar(50) NOT NULL,
  `like` int(11) DEFAULT 0,
  `pagina` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`utente`),
  CONSTRAINT `user_id` FOREIGN KEY (`utente`) REFERENCES `registrazione` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella utenti.comments: ~5 rows (circa)
DELETE FROM `comments`;
INSERT INTO `comments` (`id`, `comment`, `created_at`, `utente`, `like`, `pagina`) VALUES
	(31, 'ciao bro', '2023-06-05 06:47:06', 'd', 0, ''),
	(37, 'vediamo', '2023-06-05 06:50:13', 'Lborchi', 0, ''),
	(38, 'ciao', '2023-06-05 07:24:39', 'd', 0, 'shazam'),
	(39, 'bella sta recensione zi', '2023-06-05 07:51:56', 'd', 0, 'antman'),
	(40, 'gg', '2023-06-05 07:52:10', 'd', 0, 'quovado');

-- Dump della struttura di tabella utenti.registrazione
CREATE TABLE IF NOT EXISTS `registrazione` (
  `nome` varchar(50) DEFAULT NULL,
  `psw` varchar(50) DEFAULT NULL,
  `cognome` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella utenti.registrazione: ~3 rows (circa)
DELETE FROM `registrazione`;
INSERT INTO `registrazione` (`nome`, `psw`, `cognome`, `username`, `email`) VALUES
	('d', 'd', 'd', 'd', 'd'),
	('luca', 'LB', 'borchiero', 'Lborchi', 'luca.borchiero@gmail.com'),
	('q', 'q', 'q', 'q', 'q');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
