/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `resep`;
CREATE TABLE `resep` (
  `id_resep` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `langkah` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_resep`),
  UNIQUE KEY `resep_foto_unique` (`foto`),
  KEY `resep_user_id_foreign` (`user_id`),
  CONSTRAINT `resep_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `akun` (`id_akun`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `resep` (`id_resep`, `nama`, `asal`, `bahan`, `langkah`, `foto`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 'jogja', 'terigu\r\nayam\r\nsambal', 'campur semua', 'img/resepku/1716740022.jpg', 1, '2024-05-26 16:13:42', '2024-05-26 16:13:42');
INSERT INTO `resep` (`id_resep`, `nama`, `asal`, `bahan`, `langkah`, `foto`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Soto Bandung', 'Jawa Barat', '-Daging sapi\r\n-Lobak\r\n-Daun bawang\r\n-Daun seledri\r\n-Bawang putih\r\n-Bawang merah\r\n-Jahe\r\n-Lengkuas\r\n-Serai\r\n-Daun salam\r\n-Garam\r\n-Merica\r\n-Kaldu sapi\r\n-Jeruk nipis\r\n-Sambal (opsional)', '1.Rebus daging sapi hingga empuk, angkat, dan potong-potong.Sisihkan kaldu rebusan.\r\n2.Tumis bawang putih, bawang merah, jahe, lengkuas, serai, dan daun salam hingga harum.\r\n3.Masukkan tumisan bumbu ke dalam kaldu rebusan daging.\r\n4.Tambahkan lobak yang sudah dipotong-potong dan masak hingga lobak empuk.\r\n5.Tambahkan garam dan merica sesuai selera.\r\n6.Sajikan soto dengan potongan daging, daun bawang, seledri, dan perasan jeruk nipis. Tambahkan sambal jika suka.', 'img/resepku/1716799076.jpeg', 2, '2024-05-27 08:37:56', '2024-05-27 08:37:56');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;