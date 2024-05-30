/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `favorit`;
CREATE TABLE `favorit` (
  `id_fav` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_resep` bigint unsigned NOT NULL,
  `id_akun` bigint unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_fav`),
  KEY `favorit_id_akun_foreign` (`id_akun`),
  KEY `favorit_id_resep_foreign` (`id_resep`),
  CONSTRAINT `favorit_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE,
  CONSTRAINT `favorit_id_resep_foreign` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `favorit` (`id_fav`, `id_resep`, `id_akun`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 1, '2024-05-29 13:28:08', '2024-05-29 13:28:08');
INSERT INTO `favorit` (`id_fav`, `id_resep`, `id_akun`, `status`, `created_at`, `updated_at`) VALUES
(2, 7, 2, 1, '2024-05-30 06:06:22', '2024-05-30 06:06:22');
INSERT INTO `favorit` (`id_fav`, `id_resep`, `id_akun`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 2, 1, '2024-05-30 06:10:45', '2024-05-30 06:10:45');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;