-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - Source distribution
-- SO del servidor:              Linux
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para SitiPagosSoft
DROP DATABASE IF EXISTS `SitiPagosSoft`;
CREATE DATABASE IF NOT EXISTS `SitiPagosSoft` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `SitiPagosSoft`;

-- Volcando estructura para tabla SitiPagosSoft.accounts
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT 1,
  `beneficiary` varchar(50) DEFAULT NULL,
  `account_number` varchar(50) DEFAULT NULL,
  `type_register` varchar(50) DEFAULT NULL,
  `divisa` varchar(50) DEFAULT 'MXP',
  `clabe` varchar(50) DEFAULT NULL,
  `physical_person` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `mothers_last_name` varchar(50) DEFAULT NULL,
  `business_name` varchar(50) DEFAULT NULL,
  `rfc_curp` varchar(50) DEFAULT NULL,
  `alias` varchar(50) DEFAULT NULL,
  `email_notification` varchar(50) DEFAULT NULL,
  `relation` varchar(50) DEFAULT NULL,
  `type_relation` varchar(50) DEFAULT NULL,
  `limit_amount` double DEFAULT NULL,
  `destination_account` varchar(50) DEFAULT NULL,
  `verified_id` int(11) DEFAULT 1,
  `state_id` int(11) DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_accounts_account_types` (`type_id`),
  KEY `FK_accounts_account_states` (`state_id`),
  KEY `FK_accounts_account_verifications` (`verified_id`) USING BTREE,
  CONSTRAINT `FK_accounts_account_states` FOREIGN KEY (`state_id`) REFERENCES `account_states` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_accounts_account_types` FOREIGN KEY (`type_id`) REFERENCES `account_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_accounts_account_verifications` FOREIGN KEY (`verified_id`) REFERENCES `account_verifications` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla SitiPagosSoft.accounts: ~7 rows (aproximadamente)
INSERT INTO `accounts` (`id`, `type_id`, `beneficiary`, `account_number`, `type_register`, `divisa`, `clabe`, `physical_person`, `name`, `last_name`, `mothers_last_name`, `business_name`, `rfc_curp`, `alias`, `email_notification`, `relation`, `type_relation`, `limit_amount`, `destination_account`, `verified_id`, `state_id`) VALUES
	(1, 1, 'Antonio Jose Tellez', '02418804041594506671', '1', 'MXP', '20955151042892727225', 1, 'María', 'García', 'Torres', 'Innovatech Solutions\r\n', '1', '1', 'johndoe@example.com', '1', '1', 100000, '00119187711399377355', 1, 1),
	(2, 1, 'Jose Antonio Guevara', 'ES3201254131626455907137', '1', 'MXP', 'ES8202374956260876964365', 1, 'Ana', 'Rodríguez', 'Flores', 'QuantumTech Labs\r\n', '123', '123', 'business1234@gmail.com', '2', '1', 100000, 'ES4431834091690132575326', 1, 1),
	(3, 1, 'Gines Antunez', '00839790420549689998', '2', 'MXP', '00194108113618204810', 1, 'José', 'Martínez', 'González', 'BioSynth Pharma\r\n', '123', '123', 'webmaster@fakewebsite.org', '2', '2', 100000, '01285011289500135496', 1, 1),
	(4, 1, 'Octavio dos Santos', 'ES5001861011666205831233', '2', 'MXP', 'ES6931830270768865503117', 1, 'Alejandro', 'López', 'Ruiz', 'EcoPower Solutions\r\n', '123', '123', 'contact_us@imaginarycompany.biz', '1', '2', 100000, '02353872190700785181', 1, 1),
	(5, 1, 'Teresa Figueras', '00838038183686141818', '2', 'MXP', '31831794107582448473', 1, 'Sofía', 'Pérez', 'Moreno', 'NexusCraft Designs\r\n', '123', '123', 'gamer2000@fakeserver.net', '3', '3', 100000, 'ES5101254122303195767331', 1, 1),
	(6, 1, 'Rafaela Santamaria', 'ES7401981078994536703119', '3', 'MXP', 'ES1100784109876027900714', 1, 'David', 'González\r\n', 'Castillo', 'AquaTech Dynamics\r\n', '123', '123', 'marketingteam@makebelievecorp.com', '3', '4', 100000, '00816363458721458460', 1, 1),
	(7, 1, 'Rocio Molina', '21036570951987158842', '4', 'MXP', '20009094332274493502', 1, 'Pedro', 'Sánchez', 'Ortega', 'VirtualStream Solutions\r\n', '123', '123', 'testuser@dummyemail.net', '3', '4', 100000, 'ES0801381011015144602375', 1, 1);

-- Volcando estructura para tabla SitiPagosSoft.account_states
DROP TABLE IF EXISTS `account_states`;
CREATE TABLE IF NOT EXISTS `account_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla SitiPagosSoft.account_states: ~2 rows (aproximadamente)
INSERT INTO `account_states` (`id`, `state`) VALUES
	(1, 'Activa'),
	(2, 'Cancelada');

-- Volcando estructura para tabla SitiPagosSoft.account_types
DROP TABLE IF EXISTS `account_types`;
CREATE TABLE IF NOT EXISTS `account_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla SitiPagosSoft.account_types: ~0 rows (aproximadamente)
INSERT INTO `account_types` (`id`, `type`) VALUES
	(1, 'Beneficiarios');

-- Volcando estructura para tabla SitiPagosSoft.account_verifications
DROP TABLE IF EXISTS `account_verifications`;
CREATE TABLE IF NOT EXISTS `account_verifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `verification` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla SitiPagosSoft.account_verifications: ~3 rows (aproximadamente)
INSERT INTO `account_verifications` (`id`, `verification`) VALUES
	(1, 'Sin verificar'),
	(2, 'Verificado'),
	(3, 'Sin verificación');

-- Volcando estructura para tabla SitiPagosSoft.payments
DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL DEFAULT 0,
  `amount` double DEFAULT NULL,
  `tax_iva` double DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `charges_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `approved` datetime DEFAULT NULL,
  `applied` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_payments_accounts` (`account_id`),
  KEY `FK_payments_payment_states` (`state_id`),
  KEY `FK_payments_payment_charges_id` (`charges_id`),
  CONSTRAINT `FK_payments_accounts` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_payments_payment_charges_id` FOREIGN KEY (`charges_id`) REFERENCES `payment_charges` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_payments_payment_states` FOREIGN KEY (`state_id`) REFERENCES `payment_states` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla SitiPagosSoft.payments: ~2 rows (aproximadamente)
INSERT INTO `payments` (`id`, `account_id`, `amount`, `tax_iva`, `description`, `reference`, `state_id`, `charges_id`, `created_by`, `created`, `approved_by`, `approved`, `applied`) VALUES
	(1, 3, 1, 1, 'desc', 'ref', 1, 1, 1, '2023-10-02 15:25:02', 1, NULL, NULL),
	(2, 3, 1123123, 123, 'desc', 'ref', 1, 1, 1, '2023-10-02 15:25:14', 1, '2023-10-02 15:25:05', '2023-10-02 15:25:05'),
	(3, 3, 123, 123, 'descr', 'refe', 1, 2, 1, '2023-10-02 15:28:51', 1, '2023-10-02 15:28:35', '2023-10-02 15:28:35');

-- Volcando estructura para tabla SitiPagosSoft.payment_charges
DROP TABLE IF EXISTS `payment_charges`;
CREATE TABLE IF NOT EXISTS `payment_charges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla SitiPagosSoft.payment_charges: ~2 rows (aproximadamente)
INSERT INTO `payment_charges` (`id`, `state`) VALUES
	(1, 'Sin pagos'),
	(2, 'Pagado');

-- Volcando estructura para tabla SitiPagosSoft.payment_states
DROP TABLE IF EXISTS `payment_states`;
CREATE TABLE IF NOT EXISTS `payment_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla SitiPagosSoft.payment_states: ~2 rows (aproximadamente)
INSERT INTO `payment_states` (`id`, `state`) VALUES
	(1, 'Activa'),
	(2, 'Cancelada');

-- Volcando estructura para tabla SitiPagosSoft.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mothers_last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `profile_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_EMAIL` (`email`),
  KEY `FK_users_user_profiles` (`profile_id`),
  KEY `FK_users_user_states` (`state_id`),
  CONSTRAINT `FK_users_user_profiles` FOREIGN KEY (`profile_id`) REFERENCES `user_profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_users_user_states` FOREIGN KEY (`state_id`) REFERENCES `user_states` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla SitiPagosSoft.users: ~2 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `last_name`, `mothers_last_name`, `email`, `password`, `created`, `modified`, `profile_id`, `state_id`) VALUES
	(1, 'Juan', 'Jacinto', 'López', 'juanantoniojacintolopez@gmail.com', '$2y$10$hI17agPSQA7l6ZWhkOTGWeBaytIsAvsozhdy1wm6Tazpg1Lv5LC6u', '2023-09-28 02:25:27', '2023-10-02 14:18:40', 1, 1),
	(3, 'alonso', 'Jarada', '', 'alo.jarada@live.com', '$2y$10$NPNL5ngdhlo90qHYEoRi5e90DGuM00v02PpvNfE0bV6gdP6p8.Qd.', '2023-09-29 11:55:37', '2023-09-29 11:56:03', 1, 1),
	(4, 'Prueba', 'Prueba', 'Prueba', 'prueba@gmail.com', '$2y$10$Ds2Ig27PVWwx/f0pYwBP.uSpnTYhEV5N74hAMfToMLGrcPDuHtHcS', '2023-10-03 13:09:55', '2023-10-03 13:09:55', 2, 1);

-- Volcando estructura para tabla SitiPagosSoft.user_profiles
DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla SitiPagosSoft.user_profiles: ~2 rows (aproximadamente)
INSERT INTO `user_profiles` (`id`, `profile`) VALUES
	(1, 'Admin'),
	(2, 'Normal');

-- Volcando estructura para tabla SitiPagosSoft.user_states
DROP TABLE IF EXISTS `user_states`;
CREATE TABLE IF NOT EXISTS `user_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Volcando datos para la tabla SitiPagosSoft.user_states: ~0 rows (aproximadamente)
INSERT INTO `user_states` (`id`, `state`) VALUES
	(1, 'Activo'),
	(2, 'Inactivo');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;