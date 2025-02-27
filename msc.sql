CREATE DATABASE  IF NOT EXISTS `msc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `msc`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: msc
-- ------------------------------------------------------
-- Server version	8.0.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_feedback` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `tbl_feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_feedback`
--

LOCK TABLES `tbl_feedback` WRITE;
/*!40000 ALTER TABLE `tbl_feedback` DISABLE KEYS */;
INSERT INTO `tbl_feedback` VALUES (1,'chim-chanoudom','chanoudomit@gmail.com','0964479649','110 Stree F , Sensok, Phnom penh','good plate form.','2025-02-27 17:26:07','2025-02-27 17:26:07');
/*!40000 ALTER TABLE `tbl_feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_logo`
--

DROP TABLE IF EXISTS `tbl_logo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_logo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_logo`
--

LOCK TABLES `tbl_logo` WRITE;
/*!40000 ALTER TABLE `tbl_logo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_logo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userID` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userID` (`userID`),
  CONSTRAINT `tbl_news_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tbl_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_news`
--

LOCK TABLES `tbl_news` WRITE;
/*!40000 ALTER TABLE `tbl_news` DISABLE KEYS */;
INSERT INTO `tbl_news` VALUES (1,1,' មកស្គាល់សេដ្ឋីបច្ចេកវិទ្យាវ័យក្មេង អាយុមិនទាន់ចូលក្បាល ៣០ ផង មានលុយ​ ជាង ២ពាន់លានដុល្លារ','150_03fig36_alt.jpg','Entertainment','International','មកស្គាល់សេដ្ឋីបច្ចេកវិទ្យាវ័យក្មេង អាយុមិនទាន់ចូលក្បាល ៣០ ផង មានលុយ​ ជាង ២ពាន់លានដុល្លារ','2025-02-26 16:22:52','2025-02-27 15:58:40',0),(2,1,'គ្រូ​ Nottingham Forest ថា​ក្រុម​លោក​មិនអាច​​​ការពារ​វាយ​បក​ព្រោះ​ Arsenal គ្មាន​ខ្សែ​ប្រយុទ្ធ','336_67bfac8c03f37_1740614760_medium.jpg','Sport','International','លោក Nuno Espirito Santo គ្រូ​របស់​ក្រុម Nottingham Forest មើល​ឃើញ​ថា ក្រុមរបស់​លោក​មិនអាច​ត្រឡប់​ទៅ​ប្រើ​ទម្រង់​ចាស់​​ការពារ​៥​នាក់​រួច​​វាយ​​បក​លឿន​ៗ​បានទេ ព្រោះ​តែ​ Arsenal គ្មាន​​ខ្សែ​ប្រយុទ្ធ​ឡើយ​។\r\n\r\nការ​លើក​ឡើង​នេះ​ក្រោយ​ក្រុម​តាំង​ពីរ​បញ្ចប់​ទៅ​ក្នុង​លទ្ធផល​០-០ នៃ​ការ​ប្រកួត English Premier League សប្ដាហ៍​ទី​​​២៨​។ គេ​ដឹង​ថា ​ខ្សែ​ប្រយុទ្ធ​របស់​ក្រុម​ភ្ញៀវ Arsenal យប់មិញ​នេះ​របួស​​ទាំង​អស់​ហើយ​គឺ​មាន Gabriel Jesus, K Havertz, B Saka និង Gabriel Martinelli ជា​ដើម​ ខណៈ​ខ្សែ​ប្រយុទ្ធ​ដែល​ប្រើ​មាន Mikel Merino និង L Trossard ។\r\n\r\nក្រុម Nottingham Forest ឆ្នាំ​នេះ​ជា​ក្រុម​ចូល​ចិត្ត​លេង​តែ ការពារ​វាយ​បក​ប៉ុណ្ណោះ​ពិសេស​នៅ​ពេល​ប៉ះ​ក្រុម​ខ្លាំង​ៗ​ ជាក់​ស្ដែង​ពេលប៉ះ Brighton ពួក​គេ​ប្រើ​ការពារ​កណ្ដាល​៣​ និង​ការពារ​​ស្លាប​ពីរ​សរុប​ទៅ​ការពារ​ ៥ នាក់​ហើយ​​ការពារ​ស្លាប​ទាំង​ពីរ​​ឡើង​វាយ​បក​ក៏​លឿន ចុះ​ការពារ​ក៏​លឿន​។ តែ​ពេល​ប៉ះ Arsenal ពួក​គេ​មិនអាច​លេង​បែប​នេះ​ទេ​លេង​ការពារ​៤​នាក់​បម្រើ​៤​នាក់ និង​ប្រយុទ្ធ​២​ធម្មតា ព្រោះ​តែ​ Arsenal លេង​មិនសូវ​ហ៊ាន​សម្រុក​ទេ​គិត​តែ​ការពារ​ដូច​គ្នា​៕ ​','2025-02-27 16:01:19','2025-02-27 16:01:19',1),(3,1,'ប្រធានក្រុមបាល់ទាត់ផ្ការីកគ្រប់រដូវ ជម្រះមន្ទិលមហាជនលើការប្រកួតបាល់ទាត់មិត្ដភាព នៅកូរ៉េ','275_67be9501de13a_1740543180_medium.jpg','Sport','National','ជាន់ទឹកដីប្រទេសកូរ៉េជាលើកទី២ នាយពាក់មីដែលជាប្រធានក្រុមបាល់ទាត់ផ្ការីកគ្រប់រដូវ គ្រោងបង្កើតព្រឹត្ដិការណ៍សប្បាយរីករាយ សាមគ្គីភាពក្នុងនាមជាខ្មែរតែមួយ តាមរយៈការប្រកួតបាល់ទាត់ និងច្រៀង រាំលេងកម្សាន្ដនៅពេលរាត្រីលើទឹកដីកូរ៉េ នៅថ្ងៃទី២ ខែមីនា ឆ្នាំ២០២៥។\r\nបើតាមលោក ចែម ចាន់រ៉ា ហៅនាយពាក់មី នេះជាការប្រកួតមិត្ដភាពរវាងក្រុមបាល់ទាត់បងប្អូនខ្មែររស់នៅ និងធ្វើការនៅប្រទេសកូរ៉េ ជាមួយក្រុមរបស់លោកដែលមានសមាសភាពភាគច្រើនជាសិល្បករ។ គោលបំណងសំខាន់ដែលក្រុមបាល់ទាត់ផ្ការីកគ្រប់រដូវ ខំស្កាត់ទៅជួបបងប្អូនខ្មែរដើម្បីលេងកីឡា និងកម្សាន្ដសប្បាយនេះ គឺបង្កើនសាមគ្គីភាព ដោយកន្លងទៅបើគ្មានកម្មវិធីប្រគុំតន្ដ្រី ឬយុទ្ធនាការអ្វីមួយនោះទេ គឺបងប្អូនខ្មែរមិនងាយបានជួបគ្នាឡើយ។\r\nនាយពាក់មី៖ “ខ្ញុំព្យាយាមមិននិយាយអ្វីទាំងអស់ទាក់ទងរឿងនយោបាយ! តែខ្ញុំដឹងតែទៅលើកនេះជួបប្រកួតមិត្ដភាពជាមួយបងប្អូនខ្មែរដែលបានណាត់គ្នាយូរមកហើយ ហើយដំណឹងប្រមូលគ្នាធ្វើបាតុកម្មដើម្បីរឿងស្នេហាជាតិអីនេះ ខ្ញុំទើបឮក្រោយទេ។ អីចឹងពេលហ្នឹង…បងប្អូនណាមកចូលរួមជាមួយពួកយើងក៏មកៗ ហើយបងប្អូនណាទៅជួបជុំធ្វើបាតុកម្មក៏ទៅៗជាសិទ្ធិសេរីភាពរបស់បងប្អូន”។\r\n\r\nក្នុងពេលដំណាលគ្នា នៃការប្រកួតបាល់ទាត់មិត្ដភាពនៅដើមខែមីនា ឆ្នាំ២០២៥ ខាងមុខនេះ នឹងមានព្រឹត្ដិការណ៍ធំៗចំនួន ២ គឺទី១បងប្អូនខ្មែរមួយក្រុមនឹងចូលរួមគាំទ្របាល់ និងកម្សាន្ដសប្បាយជាមួយក្រុមបាល់ទាត់ផ្ការីកគ្រប់រដូវ និង១ក្រុមទៀតនឹងចូលរួមជាមួយក្រុមបាតុករដែលទាមទារឲ្យរាជរដ្ឋាភិបាលកម្ពុជាដោះស្រាយរឿងជាតិមួយចំនួន។\r\nទោះជាយ៉ាងណា បច្ចុប្បន្នក្រុមបាល់ទាត់បងប្អូនខ្មែររស់នៅ និងធ្វើការនៅប្រទេសកូរ៉េជាច្រើនក្រុម កំពុងប្រកួតជម្រុះ ហើយដំណឹងចុងក្រោយដែលទទួលបានដោយនាយពាក់មី គឺជម្រុះនៅសល់តែ ៨ក្រុមប៉ុណ្ណោះ ហើយ ៨ក្រុមនោះ នឹងត្រូវជ្រើសរើសសមាជិកឲ្យគ្រប់ចំនួន១ក្រុមបាល់ទាត់អាចប្រកួតជាមួយក្រុមផ្ការីកគ្រប់រដូវដែលឡើងពីប្រទេសកម្ពុជានេះទៅ។\r\n\r\nដោយមិនគិតពីនិន្នាការនយោបាយ នាយពាក់មីដែលជាប្រធានក្រុមបានបញ្ជាក់នៅក្នុងសន្និសីទសារព័ត៌មាន នាផ្សារទំនើប ជីបម៉ុង ២៧១ កាលពីថ្ងៃទី២៥ ខែកុម្ភៈ ឆ្នាំ២០២៥ ថា ព្រឹត្ដិការណ៍ប្រកួតក្រៅប្រទេសលើកនេះ គឺដើម្បីផ្សាភ្ជាប់កីឡានឹងទេសចរផង និងបង្ហាញពីទឹកចិត្ដស្រឡាញ់រាប់អាន សាមគ្គីគ្នារបស់បងប្អូនខ្មែរនៅក្រៅប្រទេសទាំងអស់ មិនថានៅតែប្រទេសកូរ៉េនោះទេ។\r\nជាក់ស្ដែងការប្រកួតមិត្ដភាពនៅប្រទេសថៃកន្លងទៅថ្មីៗនេះ ទទួលបានលទ្ធផលល្អ ហើយក្រុមផ្ការីកគ្រប់រដូវនឹងបន្ដចេញប្រកួតនៅប្រទេសផ្សេងៗទៀតដែលមានបងប្អូនខ្មែររស់នៅ ដោយមានការសហការគាំទ្រដោយក្រុមហ៊ុនឯកជននៅក្នុងស្រុក និងក្រៅស្រុកដូចជាព្រឹត្ដិការណ៍នេះដែរ៕','2025-02-27 16:03:28','2025-02-27 16:03:28',1),(4,1,'ក្រុមហ៊ុនអាកាសចរណ៍សិង្ហបុរី ផ្តល់ជូនតម្លៃសំបុត្រពិសេស Premium Economy ទៅសហរដ្ឋអាមេរិក!','56_67bff24942b0a_1740632640_medium.png','Social','International','រីករាយការផ្តល់ជូនតម្លៃសំបុត្រពិសេសរបស់ Premium Economy* ទៅសហរដ្ឋអាមេរិកជាមួយក្រុមហ៊ុនអាកាសចរណ៍សិង្ហបុរី!\r\nបង្វែរការហោះហើររបស់អ្នកអោយកាន់តែមានភាពទាន់សម័យ ផ្តល់ផាសុខភាពជាមួយអត្ថប្រយោជន៍ជាច្រើនរបស់កាប៊ីន Premium Economy Class របស់យើង ដែលមានកៅអីធំទូលាយ និងសេវាកម្មជាច្រើនផ្សេងទៀត។ អ្នកអាចជ្រើសរើសម្ហូបជាមុនតាមមុខងារ \"Book the Cook\" និងប្រើប្រាស់ Wi-Fi ឥតគិតថ្លៃសម្រាប់សមាជិក KrisFlyer។\r\n\r\nកក់ឥឡូវនេះ!\r\nទិញសំបុត្រចាប់ពីឥឡូវនេះដល់ 02 មីនា 2025\r\nចេញដំណើរពីឥឡូវនេះដល់ 3០ មេសា 2025\r\n*ស្វែងរកព័ត៌មានបន្ថែមបាននៅលើគេហទំព័រ https://www.singaporeair.com/en_UK/kh/plan-travel/local-promotions/Exclusive-February-Offer-from-SQCambodia\r\nឬកម្មវិធីទូរស័ព្ទចល័ត SingaporeAir។ ចំពោះកាប៊ីន Premium Economy Class នេះមានសម្រាប់ការប្តូរជើងហោះហើរនៅសិង្ហបុរីបន្តទៅសហរដ្ឋអាមេរិកប៉ុណ្ណោះ។','2025-02-27 16:04:42','2025-02-27 16:04:42',1),(5,1,'ផ្សារទំនើប ខេ ម៉ល ព្រែកត្នោត កា្លយជា ទីតាំងថ្មីសម្រាប់ការិយាល័យកណ្តាលរបស់ អ៊ែរអេស៊ា ខេមបូឌា','581_67bd90496786a_1740476460_medium.jpg','Social','National','**រាជធានីភ្នំពេញ** – **ថ្ងៃទី ២១ ខែកុម្ភៈ ឆ្នាំ ២០២៥** – ផ្សារទំនើប ខេ ម៉ល ព្រែកត្នោត អភិវឌ្ឍដោយក្រុមហ៊ុន អឺបេនលែន សូមស្វាគមន៍ចំពោះវត្តមានរបស់ អ៊ែរអេស៊ា ខេមបូឌា ដែលជាក្រុមហ៊ុនអាកាសចរណ៍ឈានមុខគេក្នុងតំបន់ ហើយក៏ជាដៃគូពាណិជ្ជកម្មថ្មីរបស់ខ្លួន។ ភាពជាដៃគូដ៏សំខាន់មួយនេះឆ្លុះបញ្ចាំងពីការប្តេជ្ញាចិត្តរបស់ផ្សារទំនើប ខេ ម៉ល ព្រែកត្នោត ក្នុងការជម្រុញឱ្យមានចលនាផ្នែកពាណិជ្ជកម្ម ចម្រុះនៅក្នុងតំបន់ និងការរស់នៅប្រកបដោយភាពរស់ រវើកនៅតំបន់ប៉ែកខាងត្បូងនៃរាជធានីភ្នំពេញ។\r\n\r\nក្រុមហ៊ុន អឺបេនលែន និង អ៊ែរអេស៊ា ខេមបូឌា បានចុះហត្ថលេខាជាផ្លូវការលើអនុស្សរណៈនៃការយោគយល់គ្នា (MOU) ដើម្បីបង្កើតការិយាល័យកណ្តាលថ្មីសម្រាប់ អ៊ែរអេស៊ា ខេមបូឌា នៅផ្សារទំនើប ខេ ម៉ល ព្រែកត្នោត ដើម្បីពង្រឹងយុទ្ធសាស្ត្រក្នុងការពង្រីកផ្នែកពាណិជ្ជកម្មរបស់ផ្សារទំនើបនិងពង្រឹងវត្តមានរបស់ អ៊ែរអេស៊ា ខេមបូឌា នៅប្រទេសកម្ពុជាកាន់តែខ្លាំងឡើង។ នៅក្នុងឱកាសនៃពិធីចុះហត្ថលេខាមួយនេះ ក៏មានការអញ្ជើញចូលរួមពី លោក កាំង ហុក អគ្គនាយកប្រតិបត្តិនៃក្រុមហ៊ុន អឺបេនលែន លោក ណម វិស្សុត ប្រធាននាយកប្រតិបត្តិ អ៊ែរអេស៊ា ខេមបូឌា លោកស្រី Nguyen Ngoc Huyen ប្រធានផ្នែកពាណិជ្ជកម្ម អ៊ែរអេស៊ា ខេមបូឌា និងលោក អ៊ុង វិសុទ្ធបញ្ញា នាយកចាត់ការទូទៅនៃផ្សារទំនើប ខេ ម៉ល ព្រមទាំងក្រុមការងារថ្នាក់ដឹកនាំជាច្រើនរូបទៀត។','2025-02-27 16:05:31','2025-02-27 16:05:31',1);
/*!40000 ALTER TABLE `tbl_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `status` varchar(45) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'admin','admin@gmail.com','$2y$10$pxOnYHRkfQBF2ekw5TTy2eKEsL1QL46gYpDo9Kjumq3u1SNPEZ91i',NULL,'2025-01-22 18:28:04','2025-02-27 11:40:40','Administrator','1'),(2,'pich','pich@gmail.com','$2y$10$I4LKKJbb8zAfHfgbRhPSs.7MhXpMxYeYhOkWDmgSpJwTCDhYN7YuS',NULL,'2025-01-23 06:55:03','2025-02-27 17:49:54','Editor','1'),(5,'Administrator','chanoudomit@gmail.com','$2y$10$x6VUKXItkmiuQTvOLB4s6uQi6NZyaTESeuWrlk9j08R6v12wbopDW',NULL,'2025-02-27 09:06:22','2025-02-27 09:06:22','Administrator','1'),(6,'user01','chanoudomit@gmail.com','$2y$10$MsJES7pOC.CknF0KS.FceuZiUpGE8OBGjT13KmnP6RmAecSsJ4lcm',NULL,'2025-02-27 09:06:54','2025-02-27 15:34:15','Administrator','0');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-28  1:08:46
