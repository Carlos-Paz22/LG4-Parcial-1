-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para usuarios
CREATE DATABASE IF NOT EXISTS `usuarios` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `usuarios`;

-- Volcando estructura para tabla usuarios.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla usuarios.usuarios: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombres`, `email`, `password`, `estado`) VALUES
	(1, 'Alex Everett', 'AlexEEverett@gmail.com', '5435c1883bd75067a24f2fabc49f6538', 'activo'),
	(2, 'Carlos Paz', 'pazaupazcarlossebastian@gmail.com', 'debd714be3d2bcc331438b9e76448069', 'activo'),
	(3, 'Raymond Boyd', 'RaymondTBoyd@gmail.com', '04c366db4836d3a95094fa8d47c5d500', 'activo'),
	(4, 'Carlos Ehlerst', 'CarlosPEhlers55@gmail.com', '04c366db4836d3a95094fa8d47c5d500', 'activo'),
	(5, 'Erma Landwehr', 'ErmaRLandwehr@gmail.com', '81ce341587cbf3a44dfe6f8c150b3244', 'activo'),
	(6, 'Andrea Cook', 'AndreaJCook@gmail.com', '534f8dd8ccd69b04fb3f4fd1f32516b3', 'activo'),
	(7, 'Deborah Thompsons', 'DeborahRThompso55n@gmail.com', 'debd714be3d2bcc331438b9e76448069', 'activo'),
	(8, 'Fern Cole', 'FernJCole@gmail.com', '18ffb718be94ef3cc891908a83934fa0', 'activo'),
	(9, 'Stephen Fenwick', 'StephenJFenwick@gmail.com', '88755e65b9633cffb2026ce30ee1652e', 'activo'),
	(10, 'David HernandeS', 'DavidSHernande33z@gmail.com', 'e706d33becb6642a6f9ac2e672176a85', 'activo');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
