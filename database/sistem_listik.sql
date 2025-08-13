-- Struktur tabel data_pelanggan (tanpa data)
CREATE TABLE `data_pelanggan` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `no_kwh` varchar(255) NOT NULL,
  `meter_awal` int(11) NOT NULL,
  `meter_akhir` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_pembayaran` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert ke tabel users hanya Administrator
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) 
VALUES
(1, 'Administrator', 'admin01@admin.com', NULL, 
'$2y$12$UKORCXAStBECkRewX4vqyeJU5j/NGE2wFkca7E5fkjU6HnK9iL6c2',
NULL, '2025-07-26 12:43:09', '2025-07-26 12:43:09');

-- Insert semua data ke tabel tagihan
INSERT INTO `tagihan` (`id`, `data_pelanggan_id`, `pemakaian_kwh`, `tarif_per_kwh`, `total_tagihan`, `status_bayar`, `created_at`, `updated_at`) 
VALUES
(1, 1, 500, 1500.00, 750000.00, 'belum_bayar', '2025-07-28 05:21:58', '2025-07-28 05:21:58'),
(2, 2, 150, 1500.00, 225000.00, 'belum_bayar', '2025-08-01 06:25:53', '2025-08-01 06:25:53');
