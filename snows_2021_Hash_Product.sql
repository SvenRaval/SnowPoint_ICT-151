-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.23 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour snows
CREATE DATABASE IF NOT EXISTS `snows` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `snows`;

-- Listage de la structure de la table snows. snows
CREATE TABLE IF NOT EXISTS `snows` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(4) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `snowLength` int unsigned NOT NULL,
  `audience` varchar(10) NOT NULL,
  `qtyAvailable` smallint NOT NULL DEFAULT '0',
  `description` varchar(200) NOT NULL,
  `price` float unsigned NOT NULL,
  `descriptionFull` longtext NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'En test...',
  `photo` varchar(50) DEFAULT NULL,
  `active` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `snow_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Listage des données de la table snows.snows : ~9 rows (environ)
DELETE FROM `snows`;
/*!40000 ALTER TABLE `snows` DISABLE KEYS */;
INSERT INTO `snows` (`id`, `code`, `brand`, `model`, `snowLength`, `audience`, `qtyAvailable`, `description`, `price`, `descriptionFull`, `level`, `photo`, `active`) VALUES
	(1, 'B101', 'Burton', 'Custom', 160, 'Homme', 22, 'La board la plus fiable de tous les temps, la solution snowboard pour tous les terrains. (Homme)', 290, 'Depuis ses humbles débuts, l’innovation définit la série Custom de Burton et la distingue comme étant le snowboard le plus populaire, polyvalente et imité de l’histoire du snowboard. Depuis 1996, ce snowboard légendaire domine grâce à sa formule éprouvée et constamment améliorée alliant design classique et éléments contemporains qui en font une planche légère, stable et dynamique. Déclinée en deux versions, la précision et la stabilité du cambre Custom est le premier choix de nombreux pro-riders. La Custom Flying V™ allie quant à elle la puissance du cambre et la flottabilité du rocker, offrant ainsi le meilleur des deux mondes.', 'Pro', 'view/content/images/men_snows/B101_small.jpg', 1),
	(2, 'B126', 'Burton', 'Free Thinker', 165, 'Homme', 2, 'Élargissez votre vision grâce son interprétation du ride tout terrain dynamique sur la poudreuse. (Homme)', 450, 'Le snowboard pour homme Free Thinker de Burton est une version true twin de la planche de Danny Davis, prête à s’envoler dans le snowpark, dans le pipe ou à rider en pleine montagne. Sa forme twin véritable ouvre la voie à la créativité dans toutes les directions, tandis que le contrôle du cambre lui donne vitesse et pop. Les Carbon Highlights à 45 ° lui apportent la réactivité sans la rigidité. Des motifs rétro couronnent le tout pour un look Burton typique du début des années 90.', 'Standard', 'view/content/images/women_snows/B126_small.jpg', 1),
	(3, 'B327', 'Burton', 'Day Trader', 155, 'Femme', 6, 'Flottabilité sans effort et un contrôle qui renforce la confiance en soi. (Femme)', 250, 'Que ce soit pour explorer les pistes ou les quitter à la recherche de nouveaux reliefs, la Day Trader de Burton rehausse vos capacités grâce à sa forme polyvalente de type surf qui domine tout type de terrain. Conçu en collaboration avec la freerideuse Kimmy Fasani, ce snowboard effilé et directionnel est parfait sur la neige fraîche, et très ludique sur les pistes damées. Le Flat Top™ directionnel augmente la stabilité et le contrôle tandis que la Technologie Early Rise ajoute à la flottabilité sans effort et à la sensation de rocker. La résine Super Sap® bio assure que le snowboard vous ménage vous et l’environnement.', 'Débutant', 'view/content/images/women_snows/B327_small.jpg', 0),
	(4, 'K266', 'K2', 'Wildheart', 152, 'Femme', 2, 'Keeping in versatile style (Femme)', 290, 'La Wildheart est une planche de rêve en poudreuse et elle dépassera vos attentes sur les pistes damées, les bosses en bord de piste et dans les forêts denses. Nous sommes partis de notre noyau spécifique femmes Rhythm Core™ et l’avons pris en sandwich entre deux couches de fibre de verre biaxiale. Ensuite, nous avons ajouté des renforts Carbon Torque Forks™ pour booster la réactivité et réduire les vibrations en spatule/talon. Enfin, nous avons avons terminé avec notre semelle tranchée en Ptex 4000 pour créer un snowboard freeride résistant qui brille dans une large palette de conditions.', 'Pro', 'view/content/images/women_snows/K266_small.jpg', 1),
	(5, 'N100', 'Nidecker', 'Tracer', 164, 'Homme', 11, 'Une expérience de carve hors du commun. Idéal pour carver comme jamais (Homme)', 390, 'Voici la Tracer élégamment redessinée. Construite avec des matériaux de haute-performance et un look high-tech, cette boots est conçue pour les riders confirmés qui désirent une boots légère, progressive, hautement personnalisable et moyennement rigide. La Tracer est suffisamment flexible pour faire des butters et suffisament réactive pour envoyer des virages. La semelle B.F.T. Vibram® Ascent rend la boots résistante et légère. Un confort total, un fit sans pressions et un parfait maintien du talon sont garantis par le tout nouveau système de fermeture Dual Zone Boa® combiné avec des lacets TX et une languette asymétrique moulée en 3D. De plus, le chausson Silver-Level est prémoulé sur une forme FlowFit ce qui vous donne une sensation très confortable dès la première utilisation.', 'Standard', 'view/content/images/men_snows/N100_small.jpg', 1),
	(6, 'N754', 'Nidecker', 'Ultralight', 166, 'Homme', 26, 'A la pointe de la technologie. Idéal pour le freeride sur les faces engagées (Homme)', 590, 'Pas de description pour l\'instant', 'Pro', 'view/content/images/men_snows/N754_small.jpg', 1),
	(7, 'P067', 'Prior', 'Brandwine 153', 154, 'Femme', 9, 'High performance, directional Freeride board, draws a smooth, stable and fast line through all snow conditions. (Femme)', 490, 'With a narrow waist and softer flex than the BC Split, the Brandywine Split allows Women to drive the board harder and maximize energy transfer for the best performance possible.', 'Débutant', 'view/content/images/women_snows/P067_small.jpg', 1),
	(8, 'P165', 'Prior', 'BC Split 161', 169, 'Homme', 1, 'Sa forme directionnelle Freeride offre une ride plutôt douce et stable dans une variété de conditions', 350, 'Pas de description pour l\'instant', 'Intermédiaire', 'view/content/images/men_snows/P165_small.jpg', 1),
	(9, 'K409', 'K2', 'Lime Lite', 149, 'Femme', 15, 'Best For Freestyle Evolution with a Focus on Fun (Femme)', 550, 'Décollez, pressez, recommencez... Cette saison, nous avons revu la Lime Lite pour lui donner un peu plus de flexibilité et de tolérance. Nous avons mis l’accent sur la maniabilité, la légèreté et la durabilité en choisissant les meilleures matières pour sublimer cette construction : notre noyau spécifique femmes Rhythm™, un shape pur twin, et une semelle ne nécessitant pas trop d’entretien.', 'Débutant', 'view/content/images/women_snows/K409_small.jpg', 1);
/*!40000 ALTER TABLE `snows` ENABLE KEYS */;

-- Listage de la structure de la table snows. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `userEmailAddress` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userHashPsw` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userType` int DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userEmailAddress` (`userEmailAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table snows.users : ~1 rows (environ)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `userEmailAddress`, `userHashPsw`, `userType`) VALUES
	(12, 'pba@cpnv.ch', '$2y$10$5bRDVnljOSK1alsT96G1gu0.XaB1gvk4fHOMdKj1DNC.lWdii5Qqq', 1),
	(13, 'paul.hauchon@cpnv.ch', '$2y$10$BDLlrbE.FdWu/3fX2fwkxO61qSN11woHiaJf6zur9Bw64PNDWhQ1e', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
