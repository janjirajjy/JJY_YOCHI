-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table e_auction.tb_admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;

-- Dumping data for table e_auction.tb_auction: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_auction` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_auction` ENABLE KEYS */;

-- Dumping data for table e_auction.tb_maber: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_maber` DISABLE KEYS */;
INSERT INTO `tb_maber` (`id`, `mb_id`, `mb_username`, `mb_password`, `mb_name`, `mb_lastname`, `mb_tel`, `mb_address`, `mb_Sex`, `mb_mail`) VALUES
	(1, '1', '1', '1', '1', '1', '1', '1', 1, '1');
/*!40000 ALTER TABLE `tb_maber` ENABLE KEYS */;

-- Dumping data for table e_auction.tb_payment_history: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_payment_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_payment_history` ENABLE KEYS */;

-- Dumping data for table e_auction.tb_payment_price: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_payment_price` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_payment_price` ENABLE KEYS */;

-- Dumping data for table e_auction.tb_product: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_product` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
