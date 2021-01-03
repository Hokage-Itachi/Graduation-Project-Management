-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: gpms_schema
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `branch` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES (6,'Computer and Science Information'),(7,'Mathematics');
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdx_314` (`post_id`),
  KEY `fkIdx_319` (`user_id`),
  CONSTRAINT `FK_314` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  CONSTRAINT `FK_319` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (2,'This is a comment','2020-12-31 17:00:00',2,28),(3,'wrong post','2021-01-01 09:34:27',3,2),(4,'Hello Teacher','2021-01-01 09:34:40',2,2),(5,'Hello','2021-01-02 02:46:02',2,18),(6,'Final comment','2021-01-02 03:28:55',6,18),(7,'Yes sir','2021-01-02 10:34:32',2,10),(8,'what is charka ','2021-01-03 08:07:44',8,35);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phase`
--

DROP TABLE IF EXISTS `phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `phase` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdx_175` (`project_id`),
  CONSTRAINT `FK_175` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phase`
--

LOCK TABLES `phase` WRITE;
/*!40000 ALTER TABLE `phase` DISABLE KEYS */;
INSERT INTO `phase` VALUES (1,23,'Warm up'),(2,23,'Break out'),(3,23,'Last run'),(4,23,'Test'),(5,23,'Release'),(6,23,'Last phase'),(7,24,'Begining'),(8,24,'Research'),(9,26,'Controller charka'),(10,26,'Charge');
/*!40000 ALTER TABLE `phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `project_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdx_239` (`project_id`),
  KEY `fkIdx_297` (`user_id`),
  CONSTRAINT `FK_239` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`),
  CONSTRAINT `FK_297` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (2,'This is a post','2020-01-30 17:00:00',31,23),(3,'...','2021-01-01 08:58:54',2,23),(4,'This is the second post','2021-01-01 09:21:59',2,23),(5,'Important','2021-01-02 02:58:55',18,23),(6,'Final Post','2021-01-02 03:28:47',18,23),(7,'What should I do in beginning phase??','2021-01-02 04:22:26',7,24),(8,'<br data-cke-filler=\"true\">','2021-01-03 03:54:18',35,26);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `completed` tinyint(1) DEFAULT NULL,
  `branch_id` int NOT NULL,
  `point` int DEFAULT NULL,
  `curriculum` varchar(20) DEFAULT NULL,
  `faculty` varchar(50) DEFAULT NULL,
  `presentation_day` timestamp NULL DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `teacher_id` int DEFAULT NULL,
  `student_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdx_158` (`branch_id`),
  KEY `FK_teacher_project` (`teacher_id`),
  KEY `FK_student_project` (`student_id`),
  CONSTRAINT `FK_158` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`),
  CONSTRAINT `FK_student_project` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_teacher_project` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (7,'Website manage granduation project of student',4,6,10,'Standard','MIM','2020-07-18 17:00:00','Pr_7_Bao_cao_DAPM_1801087_VNPAY.pdf',2,2),(8,'Chinese Chess Website',1,6,10,'Standard','MIM','2020-07-18 17:00:00','Pr_8_Bao_cao_DAPM_1801087_VNPAY.pdf',3,3),(9,'Website for learn data structure',1,6,10,'Standard','MIM','2020-07-18 17:00:00','Pr_9_Bao_cao_DAPM_1801087_VNPAY.pdf',4,4),(10,'Website for airbooking',1,6,10,'Standard','MIM','2020-07-18 17:00:00','Pr_10_Bao_cao_DAPM_1801087_VNPAY.pdf',5,5),(11,'Website manage student',1,6,10,'Standard','MIM','2020-07-18 17:00:00','Pr_11_Bao_cao_DAPM_1801087_VNPAY.pdf',6,6),(12,'Website manage employee',1,6,10,'Standard','MIM','2020-07-18 17:00:00','Pr_12_Bao_cao_DAPM_1801087_VNPAY.pdf',7,8),(23,'Website for manage staff',0,6,0,'Standard','',NULL,NULL,2,6),(24,'AI for chinese chess',1,7,10,'Standard','',NULL,'Bao_cao_DAPM_1801087_VNPAY.pdf',7,3),(25,'Website for food booking',1,6,10,'','',NULL,'Pr_25_Bao_cao_DAPM_1801087_VNPAY.pdf',5,8),(26,'Chidori',0,7,0,'Standard','',NULL,NULL,8,3),(27,'Website for car booking',1,7,10,'','',NULL,'Pr_27_Bao_cao_DAPM_1801087_VNPAY.pdf',2,9),(28,'Website for tea booking',4,6,10,'','',NULL,'Pr_28_Bao_cao_DAPM_1801087_VNPAY.pdf',5,15);
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'admin'),(2,'teacher'),(3,'student');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `class` varchar(6) DEFAULT NULL,
  `student_id` bigint NOT NULL,
  `year` varchar(6) DEFAULT NULL,
  `branch_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdx_209` (`user_id`),
  KEY `FK_student_branch` (`branch_id`),
  CONSTRAINT `FK_student_branch` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_user_student` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (2,6,'K64A3',19001001,'QH2019',7),(3,7,'K63A3',18002021,'QH2018',6),(4,8,'K63A4',18001003,'QH2018',7),(5,9,'K63A3',18001004,'QH2018',7),(6,10,'K63A4',18001005,'QH2018',6),(8,28,'K63A3',18001087,'QH2018',7),(9,21,'K63A4',18001111,'QH2018',7),(10,33,'K63A4',18001112,'QH2018',7),(11,34,'K63A4',18001234,'QH2018',6),(12,36,'K63A4',18000987,'QH2018',6),(13,37,'K63A4',18002468,'QH2018',6),(14,38,'K63A4',19001092,'QH2018',6),(15,39,'K63A4',19001357,'QH2018',6);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `task` (
  `id` int NOT NULL AUTO_INCREMENT,
  `phase_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `deadline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdx_172` (`phase_id`),
  CONSTRAINT `FK_172` FOREIGN KEY (`phase_id`) REFERENCES `phase` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` VALUES (1,1,'Learn HTML CSS JS','Learn HTML CSS JS basic on W3School\r\n                                                                \r\n                                                                ','2019-12-31 17:00:00',1),(2,1,'Learn SQL','Learn SQL\r\n                                                                \r\n                                                                \r\n                                                                \r\n                                                                ','2019-12-31 17:00:00',1),(3,2,'Code admin page','Complete code Front End in admin page\r\n                                                                ','2021-01-31 17:00:00',1),(7,7,'Learn about chinese chess game','Learn about chinese chess game\r\n                                                                \r\n                                                                \r\n                                                                ','2021-04-30 17:00:00',1),(8,7,'New task','new Task\r\n                                                                ','2021-06-30 17:00:00',1);
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teacher` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `degree` varchar(20) DEFAULT NULL,
  `work_place` varchar(50) DEFAULT NULL,
  `academic_rank` varchar(20) DEFAULT NULL,
  `branch_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdx_212` (`user_id`),
  KEY `FK_teacher_branch` (`branch_id`),
  CONSTRAINT `FK_teacher_branch` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_user_teacher` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (2,18,'Doctor of Philosophy','Ha Noi University of Science','Professor',NULL),(3,19,'Doctor of Philosophy','Ha Noi University of Science','Professor',NULL),(4,20,'Doctor of Philosophy','Ha Noi University of Science','Professor',NULL),(5,21,'Doctor of Philosophy','Ha Noi University of Science','Professor',NULL),(6,22,'Doctor of Philosophy','Ha Noi University of Science','Professor',NULL),(7,31,'Master','Ha Noi University of Science','Professor',7),(8,35,'Master','Konoha','Professor',7),(9,40,'Doctor of Philosogy','Konoha','Professor',7);
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pass_hashed` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `role_id` int NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdx_235` (`role_id`),
  CONSTRAINT `FK_235` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'annguyenvan.2k@gmail.com','$2y$10$tJ7sy2gZcpYEkvi2yZcwJeRSPVwPGaaU27aXemHUeaRgOsoPMPKP.','Itachi','98765432',1,NULL,1),(6,'yasuo@gmail.com','$2y$10$j10qEpUpsWcTPhaDOPLK5u0bTFzHT.n4f5QGE5/Zmptz.f6Mitu.m','Yauso','0',3,NULL,0),(7,'naruto_hus@gmail.com','$2y$10$PCcQ0mtcvc6fLBE/6HsRguY3qReHd3K9b3Bd.AVtxWOeWgng2ZCaK','naruto','0333222111',3,'Std18002021_myw3schoolsimage.jpg',1),(8,'studentC@gmail.com','$2y$10$e7Fd3Pnj3mI7giKTdnVwDecHg4y5731XJuxmsCNUcpQQXBX0yT62C','Student C','98765432',3,NULL,0),(9,'studentD@gmail.com','$2y$10$qsYLgzoyzqpcVCoD.zCSdO8/LFUbcAzyNDwdXrqnUPFcPoLGtq3vC','Student D','98765432',3,NULL,1),(10,'vuthuthanh_t63@hus.edu.vn','$2y$10$VIwe9kmmNsFf8/QfXvM.auXI3XqhNHyn/RTkaUiYbwgNan1KZ.qPa','Vu Thu Thanh','0987654321',3,'Std18001005_env_var.PNG',1),(11,'nguyenvanF@gmail.com','$2y$10$jL4MjQBotxI0lMFq2juemeoM1USVw712L9iK5..xIM/ndSgicpwpu','Nguyen Van F','98765432',3,NULL,1),(12,'nguyenvanG@gmail.com','$2y$10$sAAjwrlw/V/otbs8/gdP1uisJYTfXVNNzN8Zi0ssUfBTiXDtXMniK','Nguyen Van G','98765432',3,NULL,1),(13,'nguyenvanH@gmail.com','$2y$10$zpDmLsiNe.6Qmhi5fvHSQOyeJf7N2qAWFcIeYv6cPTZ6tbw2aOiDS','Nguyen Van H','98765432',3,NULL,1),(14,'nguyenvanI@gmail.com','$2y$10$Y7mzxhd9AgQ1Rrt0cOOpjOmJTLcEM6JfBgl5p6a1qON8025KzBFM2','Nguyen Van I','98765432',3,NULL,1),(15,'nguyenvanJ@gmail.com','$2y$10$dw1DJfRFI/O9s5/MbDRUpeJSbAmsCqgaO1vLCW11h6T9QBxvCOIIK','Nguyen Van J','98765432',3,NULL,1),(16,'nguyenvanK@gmail.com','$2y$10$TkvIjeaunqjfi2GFZjUDvuvt5VYvXUovlJ/Y.w6Ho1O.CVkz4xkL6','Nguyen Van K','98765432',3,NULL,1),(17,'nguyenvanL@gmail.com','$2y$10$IJvNobztkOTn3wIdERk7E.2aKG8JHBdkAbpAYKqFneWDYP3Deh79y','Nguyen Van L','98765432',3,NULL,1),(18,'teacherA@gmail.com','$2y$10$iLDzRnxaLI2sOiefENoKoOTJyofbqo1ftvvaaP0T5/Ru8M2Rla4iy','Teacher A','0342428099',2,'fav_icon.PNG',1),(19,'teacherB@gmail.com','$2y$10$rVi5IppzuLthZ351epXuD.cHjGlTtZ7v5nk/hfe.x69sizH45Uvdq','Teacher B','98765432',2,NULL,0),(20,'teacherC@gmail.com','$2y$10$8grfbYHL.MZP1O7Ag/qFruE5SZY4CVkI5e5K6VPhpbPUrlNicUTGy','Teacher C','98765432',2,NULL,1),(21,'nguyenthehop_t63@hus.edu.vn','$2y$10$5fWOMiTtcYZtzbDBw08VtelTyjZj3cDZ3vMjg3K7UP086jZbagYFC','Nguyen The Hop','98765432',2,NULL,1),(22,'teacherE@gmail.com','$2y$10$A5hJ16sZdcTr3cAYjn/Sl.xYF1rjJpidGzganVJrgBpGaxMdrwHCi','Nguyen Van E','98765432',2,NULL,0),(28,'nguyenvanan_t63@hus.edu.vn','$2y$10$myUqcZGiA1XO7K1BgqoAG.3aSTNbtWE6nemboJX/c3afrsfDgHr7O','Nguyen Van An','0987898761',3,'Std18001087_erd.PNG',1),(31,'johndoe@hus.edu.vn','$2y$10$iGb0dap6k.k24.I17iivbO8TI3PirTA6fOz0XamiFAX.p9Att8y82','John Doe','0',2,NULL,1),(32,'nguyenthehop_t63@hus.edu.vn','$2y$10$FIBlR6vsO6IZIlZDVFU1fuB3dTwgva4a5DsxSgElx1pUUk1mVodxO','Nguyen The Hop','0',3,NULL,1),(33,'vuthuthanh_t63@gmail.com','$2y$10$xIYbN3Ylgvnzl1ff5kvGi.RU4JJKQkil3TXlrZmZlFE/ATzikkdpS','Vu Thu Thanh','0',3,NULL,1),(34,'tranthibichphuong_t63@hus.edu.vn','$2y$10$BzUeRFUMJWiXTroq1Q0vheEjHFQK9hN38wGvEZ0WJBTTVioowAUd6','Tran Thi Bich Phuong','0',3,NULL,1),(35,'kakashi@gmail.com','$2y$10$MspZZYapW7.ty8plWr0Zlel5jXhM5E6vSRhKMLR3Sn49cgJBnKPDe','Kakashi','0987654321',2,'Tec_8_2.PNG',1),(36,'sasuke_hus@gmail.com','$2y$10$cB6TRjnptUEkXCYSRLmZN.URghNItPqTJxR7iY6BDWBWCghj2.ZbS','Sasuke','0',3,NULL,1),(37,'hinata_hus@gmail.com','$2y$10$eldFaSdigj.zFz4xCYCU0.ikPns5uDcUn66nohuhf7Ejy/M01zDtK','Hinata','0',3,NULL,1),(38,'neji_hus@gmail.com','$2y$10$PnLfVjRNIvelNj2zbTueROQl7kF2nUr/XKFqpogg8/h7.9bjhfQWW','Jiraiya','0',3,NULL,1),(39,'gaara_hus@gmail.com','$2y$10$BOt7PPUUJZXuU2fJVblXJ.7mEzbOaD6Uh0crppO6YrvP108RsA/dW','Gaara','0',3,NULL,1),(40,'jiraiya@gmail.com','$2y$10$Mb1EeKRrwi67m0rVerCKf.7SvnU/YddBpg.DTSOEp5Z/D8F/nqyoa','Jiraiya','0',2,NULL,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'gpms_schema'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-03 17:16:31
