-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               PostgreSQL 15.2, compiled by Visual C++ build 1914, 64-bit
-- Server OS:                    
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES  */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table public.cache: -1 rows
/*!40000 ALTER TABLE "cache" DISABLE KEYS */;
/*!40000 ALTER TABLE "cache" ENABLE KEYS */;

-- Dumping data for table public.cache_locks: -1 rows
/*!40000 ALTER TABLE "cache_locks" DISABLE KEYS */;
/*!40000 ALTER TABLE "cache_locks" ENABLE KEYS */;

-- Dumping data for table public.failed_jobs: -1 rows
/*!40000 ALTER TABLE "failed_jobs" DISABLE KEYS */;
/*!40000 ALTER TABLE "failed_jobs" ENABLE KEYS */;

-- Dumping data for table public.jobs: -1 rows
/*!40000 ALTER TABLE "jobs" DISABLE KEYS */;
/*!40000 ALTER TABLE "jobs" ENABLE KEYS */;

-- Dumping data for table public.job_batches: -1 rows
/*!40000 ALTER TABLE "job_batches" DISABLE KEYS */;
/*!40000 ALTER TABLE "job_batches" ENABLE KEYS */;

-- Dumping data for table public.migrations: -1 rows
/*!40000 ALTER TABLE "migrations" DISABLE KEYS */;
INSERT INTO "migrations" ("id", "migration", "batch") VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2024_12_23_150848_create_products_table', 1),
	(5, '2024_12_23_150856_create_prices_table', 1),
	(6, '2024_12_23_150906_create_price_details_table', 1);
/*!40000 ALTER TABLE "migrations" ENABLE KEYS */;

-- Dumping data for table public.password_reset_tokens: -1 rows
/*!40000 ALTER TABLE "password_reset_tokens" DISABLE KEYS */;
/*!40000 ALTER TABLE "password_reset_tokens" ENABLE KEYS */;

-- Dumping data for table public.prices: -1 rows
/*!40000 ALTER TABLE "prices" DISABLE KEYS */;
INSERT INTO "prices" ("id", "product_id", "unit", "created_at", "updated_at") VALUES
	(1, 1, 'bungkus', '2024-12-24 03:57:30', '2024-12-24 03:57:30'),
	(2, 2, 'strip', '2024-12-24 03:57:30', '2024-12-24 03:57:30'),
	(3, 3, 'paket', '2024-12-24 03:57:30', '2024-12-24 03:57:30');
/*!40000 ALTER TABLE "prices" ENABLE KEYS */;

-- Dumping data for table public.price_details: -1 rows
/*!40000 ALTER TABLE "price_details" DISABLE KEYS */;
INSERT INTO "price_details" ("id", "price_id", "tier", "price", "created_at", "updated_at") VALUES
	(1, 1, 'Non Member', 20000, '2024-12-24 03:57:30', '2024-12-24 03:57:30'),
	(2, 1, 'Basic', 22000, '2024-12-24 03:57:30', '2024-12-24 03:57:30'),
	(3, 1, 'Premium', 24000, '2024-12-24 03:57:30', '2024-12-24 03:57:30'),
	(4, 2, 'Non Member', 5000, '2024-12-24 03:57:30', '2024-12-24 03:57:30'),
	(5, 2, 'Basic', 7000, '2024-12-24 03:57:30', '2024-12-24 03:57:30'),
	(6, 2, 'Premium', 9000, '2024-12-24 03:57:30', '2024-12-24 03:57:30');
/*!40000 ALTER TABLE "price_details" ENABLE KEYS */;

-- Dumping data for table public.products: -1 rows
/*!40000 ALTER TABLE "products" DISABLE KEYS */;
INSERT INTO "products" ("id", "name", "product_category", "description", "created_at", "updated_at") VALUES
	(1, 'Dji Sam Soe', 'Rokok', 'Ini adalah rokok Dji Sam Soe', '2024-12-24 03:57:30', '2024-12-24 03:57:30'),
	(2, 'Paracetamol', 'Obat', 'Ini adalah obat pereda demam', '2024-12-24 03:57:30', '2024-12-24 03:57:30'),
	(3, 'Generic Product', 'Lainnya', 'Produk lainnya yang generic', '2024-12-24 03:57:30', '2024-12-24 03:57:30');
/*!40000 ALTER TABLE "products" ENABLE KEYS */;

-- Dumping data for table public.sessions: 3 rows
/*!40000 ALTER TABLE "sessions" DISABLE KEYS */;
INSERT INTO "sessions" ("id", "user_id", "ip_address", "user_agent", "payload", "last_activity") VALUES
	('ffjdJXR4V1n1QvdcI30TTZm62vdqOWHW25qxg0j0', NULL, '127.0.0.1', 'PostmanRuntime/7.33.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmhNVHpOTTFBVDUxMEQ4T1JNWlo1ZTRqbm0yaWNnVVVoQ3hGTG1mVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1735013366),
	('DkjIsIGfXPW3ArwJwTP9Q6awXTPV0W0SDGRlT7R6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:133.0) Gecko/20100101 Firefox/133.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS0I1bXZrYnh5WHFSbXJtVndUaGFSOHU1V0k5Unh6b2hXY0NTblJxNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1735015182),
	('X7TgO6F8ctnIuUxmCSvLRKB5eKVADzRDptqS5dHk', NULL, '127.0.0.1', 'PostmanRuntime/7.33.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGczbFg4MmdqOTBpS212cW12U0h6NWpoMzFmMXUwRVZzaFJhQ1VOYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1735015961);
/*!40000 ALTER TABLE "sessions" ENABLE KEYS */;

-- Dumping data for table public.users: -1 rows
/*!40000 ALTER TABLE "users" DISABLE KEYS */;
/*!40000 ALTER TABLE "users" ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
