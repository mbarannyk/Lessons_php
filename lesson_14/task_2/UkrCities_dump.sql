-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: Cities
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Ukrainian_Cities`
--

DROP TABLE IF EXISTS `Ukrainian_Cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Ukrainian_Cities` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=382 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ukrainian_Cities`
--

LOCK TABLES `Ukrainian_Cities` WRITE;
/*!40000 ALTER TABLE `Ukrainian_Cities` DISABLE KEYS */;
INSERT INTO `Ukrainian_Cities` VALUES (1,'Авдіївка'),(2,'Алупка'),(3,'Алушта'),(4,'Алчевськ'),(5,'Антрацит'),(6,'Арциз'),(7,'Біла Церква'),(8,'Білгород-Дністровський'),(9,'Білогірськ'),(10,'Білопілля'),(11,'Балаклія'),(12,'Барвінкове'),(13,'Бахмач'),(14,'Бахчисарай'),(15,'Баштанка'),(16,'Бердичів'),(17,'Бердянськ'),(18,'Берислав'),(19,'Богодухів'),(20,'Богуслав'),(21,'Болград'),(22,'Болехів'),(23,'Борислав'),(24,'Бориспіль'),(25,'Бородянка'),(26,'Борщів'),(27,'Боярка'),(28,'Бровари'),(29,'Броди'),(30,'Брянка'),(31,'Буринь'),(32,'Бурштин'),(33,'Буськ'),(34,'Буча'),(35,'Бучач'),(36,'Вільногірськ'),(37,'Вільнянськ'),(38,'Вільшанка'),(39,'Вінниця'),(40,'Валки'),(41,'Вараш'),(42,'Варва'),(43,'Василівка'),(44,'Васильків'),(45,'Ватутіне'),(46,'Вахрушеве'),(47,'Вашківці'),(48,'Великі Мости'),(49,'Великий Бурлук'),(50,'Верхньодніпровськ'),(51,'Виноградов'),(52,'Вишгород'),(53,'Вишневе'),(54,'Вовчанськ'),(55,'Вознесенськ'),(56,'Волноваха'),(57,'Володимир-Волинський'),(58,'Волочиськ'),(59,'Вугледар'),(60,'Гірське'),(61,'Гадяч'),(62,'Гайворон'),(63,'Гайсин'),(64,'Галич'),(65,'Генічеськ'),(66,'Глиняни'),(67,'Глобине'),(68,'Глухів'),(69,'Гола Пристань'),(70,'Горішні Плавні'),(71,'Горлівка'),(72,'Городенка'),(73,'Городище'),(74,'Городня'),(75,'Городок'),(76,'Горохів'),(77,'Гребінка'),(78,'Гуляйполе'),(79,'Гусятин'),(80,'Дебальцеве'),(81,'Дергачі'),(82,'Десна'),(83,'Джанкой'),(84,'Дзержинськ'),(85,'Димитров'),(86,'Дніпро'),(87,'Добровеличківка'),(88,'Добромиль'),(89,'Добропілля'),(90,'Докучаєвськ'),(91,'Донецьк'),(92,'Дрогобич'),(93,'Дружківка'),(94,'Дубляни'),(95,'Дубно'),(96,'Дубровиця'),(97,'Дунаївці'),(98,'Енергодар'),(99,'Євпаторія'),(100,'Єнакієве'),(101,'Жашків'),(102,'Жданівка'),(103,'Жидачів'),(104,'Житомир'),(105,'Жмеринка'),(106,'Жовква'),(107,'Жовті Води'),(108,'Зіньків'),(109,'Заліщики'),(110,'Запоріжжя'),(111,'Збараж'),(112,'Зборів'),(113,'Звенигородка'),(114,'Згурівка'),(115,'Здолбунів'),(116,'Зміїв'),(117,'Знам\'янка'),(118,'Золоте'),(119,'Золотоноша'),(120,'Золочів'),(121,'Зоринськ'),(122,'Зугрес'),(123,'Іванків'),(124,'Івано-Франківськ'),(125,'Ізмаїл'),(126,'Ізюм'),(127,'Ізяслав'),(128,'Іллічівськ'),(129,'Ірпінь'),(130,'Іршава'),(131,'Ічня'),(132,'Ківерці'),(133,'Кілія'),(134,'Кіровоград'),(135,'Кіровське'),(136,'Кіцмань'),(137,'Кагарлик'),(138,'Калинівка'),(139,'Калуш'),(140,'Кам\'янець-Подільський'),(141,'Кам\'янське'),(142,'Канів'),(143,'Карлівка'),(144,'Каховка'),(145,'Керч'),(146,'Київ'),(147,'Кобеляки'),(148,'Ковель'),(149,'Козятин'),(150,'Коломия'),(151,'Компаніївка'),(152,'Конотоп'),(153,'Коростень'),(154,'Коростишів'),(155,'Корсунь-Шевченківський'),(156,'Костопіль'),(157,'Костянтинівка'),(158,'Котовськ'),(159,'Краматорськ'),(160,'Красилів'),(161,'Красноармійськ'),(162,'Красногвардійське'),(163,'Красноград'),(164,'Краснодон'),(165,'Красноперекопськ'),(166,'Красятичі'),(167,'Кременець'),(168,'Кременчук'),(169,'Кривий Ріг'),(170,'Кролевець'),(171,'Куп\'янськ'),(172,'Ладижин'),(173,'Ланівці'),(174,'Лебедин'),(175,'Лисичанськ'),(176,'Лозова'),(177,'Лохвиця'),(178,'Лубни'),(179,'Луганськ'),(180,'Лутугине'),(181,'Луцьк'),(182,'Львів'),(183,'Любомль'),(184,'Люботин'),(185,'Макіївка'),(186,'Мала Виска'),(187,'Малин'),(188,'Маріуполь'),(189,'Марганець'),(190,'Мелітополь'),(191,'Мерефа'),(192,'Миколаїв'),(193,'Миргород'),(194,'Миронівка'),(195,'Могилів-Подільський'),(196,'Молодогвардійськ'),(197,'Молочанськ'),(198,'Монастириська'),(199,'Монастирище'),(200,'Мостиська'),(201,'Мукачево'),(202,'Ніжин'),(203,'Нікополь'),(204,'Надвірна'),(205,'Немирів'),(206,'Нетішин'),(207,'Нижньогірський'),(208,'Нова Каховка'),(209,'Новгород-Сіверський'),(210,'Новгородка'),(211,'Новий Буг'),(212,'Новоархангельськ'),(213,'Нововолинськ'),(214,'Новоград-Волинський'),(215,'Новогродівка'),(216,'Новодністровськ'),(217,'Новомиргород'),(218,'Новомосковськ'),(219,'Новопсков'),(220,'Новоселиця'),(221,'Новоукраїнка'),(222,'Носівка'),(223,'Обухів'),(224,'Овруч'),(225,'Одеса'),(226,'Олевск'),(227,'Олександрівськ'),(228,'Олександрія'),(229,'Олешки'),(230,'Онуфріївка'),(231,'Орєхов'),(232,'Орджонікідзе'),(233,'Остер'),(234,'Острог'),(235,'Охтирка'),(236,'Очаків'),(237,'Південне'),(238,'Підволочиськ'),(239,'Підгайці'),(240,'Підгородне'),(241,'Павлоград'),(242,'Первомайськ'),(243,'Первомайський'),(244,'Перевальськ'),(245,'Перемишляни'),(246,'Перечин'),(247,'Перещепине'),(248,'Переяслав-Хмельницький'),(249,'Першотравенськ'),(250,'Петрівське'),(251,'Петрове'),(252,'Пирятин'),(253,'Погребище'),(254,'Подволочинск'),(255,'Пологи'),(256,'Полонне'),(257,'Полтава'),(258,'Попасна'),(259,'Почаїв'),(260,'Привілля'),(261,'Прилуки'),(262,'Приморськ'),(263,'Прип\'ять'),(264,'Путівль'),(265,'Рівне'),(266,'Радехів'),(267,'Радивилів'),(268,'Радомишль'),(269,'Рахів'),(270,'Ровеньки'),(271,'Рогатин'),(272,'Рожище'),(273,'Роздольне'),(274,'Рокитне'),(275,'Ромни'),(276,'Рубіжне'),(277,'Сєвєродонецьк'),(278,'Сімферополь'),(279,'Саки'),(280,'Самбір'),(281,'Сарни'),(282,'Світловодськ'),(283,'Свалява'),(284,'Сватове'),(285,'Свердловськ'),(286,'Севастополь'),(287,'Седнєв'),(288,'Селидове'),(289,'Семенівка'),(290,'Синельникове'),(291,'Скадовськ'),(292,'Скалат'),(293,'Сквира'),(294,'Сколе'),(295,'Славута'),(296,'Славутич'),(297,'Слов\'янськ'),(298,'Сміла'),(299,'Снігурівка'),(300,'Сніжне'),(301,'Снятин'),(302,'Сокаль'),(303,'Сокиряни'),(304,'Соледар'),(305,'Сосниця'),(306,'Срібне'),(307,'Ставище'),(308,'Старий Самбір'),(309,'Старобільськ'),(310,'Старокостянтинів'),(311,'Стаханов'),(312,'Сторожинець'),(313,'Стрий'),(314,'Судак'),(315,'Суми'),(316,'Суходільськ'),(317,'Таврійськ'),(318,'Талалаївка'),(319,'Тальне'),(320,'Тараща'),(321,'Татарбунари'),(322,'Теплогірськ'),(323,'Теплодар'),(324,'Теребовля'),(325,'Тернівка'),(326,'Тернопіль'),(327,'Тетіїв'),(328,'Тисмениця'),(329,'Тлумач'),(330,'Токмак'),(331,'Торез'),(332,'Тростянець'),(333,'Трускавець'),(334,'Тульчин'),(335,'Тячів'),(336,'Угнів'),(337,'Ужгород'),(338,'Українка'),(339,'Умань'),(340,'Устинівка'),(341,'Фастів'),(342,'Феодосія'),(343,'Харків'),(344,'Харцизьк'),(345,'Херсон'),(346,'Хирів'),(347,'Хмільник'),(348,'Хмельницький'),(349,'Хорол'),(350,'Хотин'),(351,'Христинівка'),(352,'Хуст'),(353,'Червоний Лиман'),(354,'Червоний луч'),(355,'Червоноград'),(356,'Червонозаводське'),(357,'Червонопартизанськ'),(358,'Черкаси'),(359,'Чернівці'),(360,'Чернігів'),(361,'Чигирин'),(362,'Чоп'),(363,'Чорнобиль'),(364,'Чорноморське'),(365,'Чортків'),(366,'Чугуїв'),(367,'Шаргород'),(368,'Шахтарськ'),(369,'Шепетівка'),(370,'Шостка'),(371,'Шпола'),(372,'Шумськ'),(373,'Щастя'),(374,'Щолкіно'),(375,'Щорс'),(376,'Яворів'),(377,'Яготин'),(378,'Ялта'),(379,'Ямпіль'),(380,'Яремче'),(381,'Ясинувата');
/*!40000 ALTER TABLE `Ukrainian_Cities` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-26 22:17:44
