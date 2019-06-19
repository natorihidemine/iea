-- MySQL dump 10.13  Distrib 5.7.25, for osx10.13 (x86_64)
--
-- Host: localhost    Database: iearuko_development
-- ------------------------------------------------------
-- Server version	5.7.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2019_06_13_022554_create_rooms_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float DEFAULT NULL,
  `arrangement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `train1` text COLLATE utf8_unicode_ci,
  `train2` text COLLATE utf8_unicode_ci,
  `train3` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,'月島荘',1000,'5LDK ',5,'東京都中央区月島3丁目26-4','https://osmo-edel.jp/wp/wp-content/uploads/2O2A2932.jpg',NULL,NULL,'東京メトロ有楽町線 月島駅 徒歩10分','都営大江戸線 勝どき駅 徒歩6分 ',NULL),(2,'グラティア日本橋',19,'2LDK',1,'東京都中央区日本橋箱崎町9-3','https://image1.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Ftavw88n12q5qa11.jpg',NULL,NULL,'東京メトロ半蔵門線 水天宮前駅 徒歩5分','東京メトロ東西線 茅場町駅 徒歩6分',NULL),(3,'プロスペクト日本橋小網町',11,'1K',2,'東京都中央区日本橋小網町17-17','https://image3.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fedty88n12q5qavl.jpg',NULL,NULL,'東京メトロ日比谷線 人形町駅 徒歩4分','東京メトロ銀座線 三越前駅 徒歩4分',NULL),(4,'エスレジデンス日本橋浜町',10,'1K',2,'東京都中央区日本橋浜町2丁目50-1','https://image.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fv58o88kw96lw7zy.jpg',NULL,NULL,'都営新宿線 浜町駅 徒歩3分 ','東京メトロ半蔵門線 水天宮前駅 徒歩6分','東京メトロ日比谷線 人形町駅 徒歩13分'),(5,'クレイシア日本橋水天宮前',11,'1K',1,'東京都中央区日本橋箱崎町15-8','https://image2.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fpp6e88n8pwjcfnx.jpg\n',NULL,NULL,'東京メトロ半蔵門線 水天宮前駅 徒歩3分','東京メトロ日比谷線 八丁堀駅 徒歩10分','東京メトロ東西線　茅場町駅 徒歩6分'),(6,'マザーズ月島',12,'1K',3,'東京都中央区月島3丁目24-8','https://image4.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fvpbs88ez4v44uqi.jpg',NULL,NULL,'東京メトロ有楽町線 月島駅 徒歩5分','都営大江戸線 勝どき駅 徒歩7分','東京メトロ日比谷線 築地駅 徒歩20分'),(7,'ドムス・スタイル銀座東',12,'1K',2,'東京都中央区築地6丁目9-1','https://image1.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F8kyd88kw7sztcyy.jpg',NULL,NULL,'東京メトロ日比谷線 築地駅 徒歩5分 ','都営大江戸線 勝どき駅 徒歩8分','東京メトロ日比谷線 東銀座駅 徒歩11分 '),(8,'メゾンピオニー日本橋浜町',10.5,'1K',0,'東京都中央区日本橋浜町2丁目18-9','https://image2.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fa24n88kw96lw7rm.jpg',NULL,NULL,'都営新宿線 浜町駅 徒歩3分','東京メトロ半蔵門線 水天宮前駅 徒歩8分','東京メトロ日比谷線 人形町駅 徒歩9分 '),(9,'メディオ月島',11.9,'1K',4,'東京都中央区月島3丁目3-5','https://image3.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fkm2r88ez4v44rne.jpg',NULL,NULL,'東京メトロ有楽町線 月島駅 徒歩3分','都営大江戸線 勝どき駅 徒歩9分','ＪＲ京葉線 越中島駅 徒歩20分'),(10,'ビューノ八重洲通り',11,'ワンルーム',4,'東京都中央区八丁堀2丁目4-2','https://image4.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fco0788kw7szu5ae.jpg',NULL,NULL,'東京メトロ日比谷線 八丁堀駅 徒歩3分','都営浅草線 宝町駅 徒歩4分','東京メトロ銀座線 京橋駅 徒歩9分 '),(11,'月島城',10.9,'1K',2,'東京都中央区月島2丁目3-14','http://www.city.himeji.lg.jp/var/rev0/0138/2744/201512415434.JPG',NULL,NULL,'東京メトロ有楽町線 月島駅 徒歩6分','都営大江戸線 勝どき駅 徒歩7分','東京メトロ日比谷線 築地駅 徒歩20分'),(12,'エスレジデンス月島',17.3,'1LDK',2,'東京都中央区月島3丁目10-10','https://image3.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F6fj188ez4v44ove.jpg',NULL,NULL,'東京メトロ有楽町線 月島駅 徒歩3分 ','都営大江戸線 勝どき駅 徒歩11分','ＪＲ京葉線 越中島駅 徒歩17分 '),(13,'アクティ水天宮',8.6,'ワンルーム',2,'東京都中央区日本橋蛎殻町1丁目34-6','https://image4.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimage.homes.renters.jp%2Fc851323f-2368-4726-821a-05a7de82d612_property_picture_3965_large.jpg',NULL,NULL,'東京メトロ半蔵門線 水天宮前駅 徒歩4分 ','都営浅草線 人形町駅 徒歩9分','東京メトロ東西線 茅場町 徒歩10分 '),(14,'アルテシモプリマ',16.2,'1LDK',5,'東京都中央区日本橋中洲7-7','https://image.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fja7b88kw96lw5ga.jpg',NULL,NULL,'東京メトロ半蔵門線 水天宮前駅 徒歩7分','都営新宿線 浜町駅 徒歩9分','東京メトロ半蔵門線 清澄白河駅 徒歩14分 '),(15,'リバーサイドおがさはら',9.95,'1K',5,'東京都中央区日本橋浜町3丁目43-6','https://image.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fed6q88n12q5qc41.jpg\n',NULL,NULL,'都営新宿線 浜町駅 徒歩5分 ','都営大江戸線 森下駅 徒歩8分','東京メトロ半蔵門線 水天宮前駅 徒歩12分'),(16,'パークリュクス銀座モノ',11.9,'1K',4,'東京都中央区銀座8丁目18-7','https://image3.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimage.homes.renters.jp%2F9e5f3e3c-520a-4e4e-a70d-dc49f8dbbb93_property_picture_4104_large.jpg',NULL,NULL,'東京メトロ日比谷線 東銀座駅 徒歩5分','都営大江戸線 築地市場駅 徒歩5分 ','ＪＲ東海道本線 新橋駅 徒歩9分'),(17,'アネーロ銀座',19,'1LDK',4,'東京都中央区銀座8丁目18-14','https://image3.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fuuva88mypqs9hgy.jpg',NULL,NULL,'都営大江戸線 築地市場駅 徒歩3分 ','東京メトロ日比谷線 東銀座駅 徒歩9分','都営大江戸線 汐留駅 徒歩9分'),(18,'月島リバーサイドハイツ',12,'1K',2,'東京都中央区月島3丁目25-6','https://image4.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fdxg388ez4v44via.jpg',NULL,NULL,'都営大江戸線 勝どき駅 徒歩6分 ','東京メトロ有楽町線 月島駅 徒歩11分',NULL),(19,'XEBEC人形町exz',11.5,'1DK',5,'東京都中央区日本橋小舟町15-13','https://image1.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimage.homes.renters.jp%2Fc7e85cd4-3e94-4904-800a-bd389d13f02c_property_picture_576_large.jpg',NULL,NULL,'東京メトロ日比谷線 人形町駅 徒歩4分','東京メトロ日比谷線 小伝馬町駅 徒歩9分','東京メトロ半蔵門線 三越前 徒歩8分'),(20,'パークハビオ月島',17.6,'1LDK',5,'東京都中央区月島4丁目8-15','https://image3.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Feete88ez4v44hp2.jpg',NULL,NULL,'東京メトロ有楽町線 月島駅 徒歩4分','都営大江戸線 勝どき駅 徒歩6分 ',NULL),(21,'ヴァンヴェール日本橋',11.5,'1K',5,'東京都中央区日本橋堀留町1丁目3-9','https://image.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fpoqw88kw96lw2tu.jpg',NULL,NULL,'東京メトロ日比谷線 小伝馬町駅 徒歩4分','都営浅草線 人形町駅 徒歩7分','東京メトロ銀座線 三越前駅 徒歩9分 '),(22,'アルテシモポルト',12,'1K',4,'東京都中央区入船2丁目2-3','https://image1.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Ff7kr88mypqs9drm.jpg',NULL,NULL,'東京メトロ日比谷線 八丁堀駅 徒歩3分 ','東京メトロ有楽町線 新富町駅 徒歩3分','東京メトロ日比谷線 築地駅 徒歩8分 '),(23,'ジェノヴィア東日本橋駅前グリーンヴェール',11.65,'1K',4,'東京都中央区東日本橋3丁目7-14','https://image.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Febzi88kw96lw4wu.jpg',NULL,NULL,'都営浅草線 東日本橋駅 徒歩1分','都営新宿線 馬喰横山駅 徒歩2分','ＪＲ総武本線 馬喰町駅 徒歩7分 '),(24,'プレミアムキューブ日本橋浜町',10.9,'1K',4,'東京都中央区日本橋浜町1丁目10-3','https://image2.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Flw8988kw96lw2d6.jpg',NULL,NULL,'都営新宿線 浜町駅 徒歩4分 ','都営浅草線 東日本橋駅 徒歩4分 ','都営新宿線 馬喰横山駅 徒歩9分 '),(25,'イスモ人形町',10,'1K',4,'東京都中央区日本橋人形町3丁目4-11','https://image3.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimage.homes.renters.jp%2Fea0bc690-eb13-4d70-a2a4-313bc4d1765b_property_picture_6005_large.jpg',NULL,NULL,'東京メトロ日比谷線 人形町駅 徒歩1分','東京メトロ半蔵門線 水天宮前駅 徒歩5分 ','東京メトロ日比谷線 小伝馬町駅 徒歩9分'),(26,'ハーモニーコート月島',10.3,'1K',3,'東京都中央区佃2丁目12-12','https://image1.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fxirm88ez4v450lm.jpg',NULL,NULL,'東京メトロ有楽町線 月島駅 徒歩3分','都営大江戸線 勝どき駅 徒歩10分 ','ＪＲ京葉線 越中島駅 徒歩12分'),(27,'リバーポイントタワー',57,'3LDK',31,'東京都中央区佃1丁目11-6\n','https://image2.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F2nh088ez4v44on2.jpg&amp;width=200&amp;height=200',NULL,NULL,'東京メトロ有楽町線 月島駅 徒歩6分','ＪＲ京葉線 越中島駅 徒歩11分','ＪＲ京葉線 八丁堀駅 徒歩15分'),(28,'勝どきザ・タワー',30,'2LDK',30,'東京都中央区勝どき5丁目3-1','https://image4.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F2f9n88fteiwg52a.jpg&amp;width=200&amp;height=200',NULL,NULL,'都営大江戸線 勝どき駅 徒歩6分 ','都営大江戸線 月島駅 徒歩14分 ',NULL),(29,'JWS兜町ビル',5.772,'ワンルーム',16,'東京都中央区日本橋兜町9-5','https://image2.homes.jp/smallimg/image.php?file=http%3A%2F%2Fimage.homes.renters.jp%2Fa4e87db1-f2ad-41cd-8c89-ce20c3d3da34_property_picture_6293_large.jpg&amp;width=200&amp;height=200',NULL,NULL,'東京メトロ日比谷線 茅場町駅 徒歩1分','東京メトロ銀座線 日本橋駅 徒歩5分','東京メトロ銀座線 三越前駅 徒歩10分 '),(30,'首相官邸',25,'4LDK ',65,'東京都中央区八丁堀2丁目4-1','http://hireman.up.seesaa.net/image/E5AE98E982B8E585A8E99DA2.jpg',NULL,NULL,'ＪＲ京葉線 八丁堀駅 徒歩3分','都営浅草線 宝町駅 徒歩8分','東京メトロ銀座線 京橋駅 徒歩9分 ');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-19 10:11:15
