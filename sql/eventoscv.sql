-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.2.3-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para eventoscv
CREATE DATABASE IF NOT EXISTS `eventoscv` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `eventoscv`;

-- Volcando estructura para tabla eventoscv.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `CA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CA_name` varchar(45) NOT NULL,
  `CA_descripcion` varchar(50) NOT NULL,
  `CA_inicio` timestamp NOT NULL,
  `CA_actualizacion` timestamp NOT NULL,
  PRIMARY KEY (`CA_ID`),
  UNIQUE KEY `CA_name` (`CA_name`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla eventoscv.categoria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla eventoscv.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `EV_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EV_name` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `EV_descripcion` varchar(45) NOT NULL,
  `EV_lugar` varchar(45) NOT NULL,
  `EV_prize` float NOT NULL,
  `EV_date` date NOT NULL,
  `EV_img` varchar(45) DEFAULT NULL,
  `EV_inicio` timestamp NOT NULL,
  `EV_actualizacion` timestamp NOT NULL,
  `CA_ID` int(11) NOT NULL,
  PRIMARY KEY (`EV_ID`,`CA_ID`),
  KEY `fk_evento_categoria_idx` (`CA_ID`),
  CONSTRAINT `fk_evento_categoria` FOREIGN KEY (`CA_ID`) REFERENCES `categoria` (`CA_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla eventoscv.evento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
