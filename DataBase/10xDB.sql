/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE IF NOT EXISTS `10x` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `10x`;

CREATE TABLE IF NOT EXISTS `contacts` (
  `contact_id` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) DEFAULT '',
  `last_name` varchar(50) DEFAULT '',
  `telephone` varchar(20) DEFAULT '',
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`contact_id`, `name`, `last_name`, `telephone`) VALUES
	('10178904', 'Santiago', 'Perez', '3114094545'),
	('10193461234', 'Jaime', 'Montes', '3114094512'),
	('32456123', 'Carlos', 'Buitrago', '3124235678'),
	('43456098', 'Carolina', 'Mendez', '3012348765');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL,
  `existence` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`product_id`, `status`, `existence`, `description`, `photo`, `name`, `price`) VALUES
	(1, 1, 3, 'Teclado ergonomico negro', 'teclado1.jpg', 'Teclado', 35000),
	(2, 1, 4, 'Mouse ergonomico colores', 'mouse1.jpg', 'Mouse', 20000),
	(3, 1, 2, 'Mesa de comedor lotto 6 puestos', 'mesalotto6.jpg', 'Mesa comedor', 120000),
	(4, 1, 50, 'Canasta ergonomica institucional azul', 'canasta_azul.jpg', 'Canasta azul', 30000),
	(5, 1, 12, 'Pantalla 14\'\' ', 'pantalla_14.jpg', 'Pantalla', 100000);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
