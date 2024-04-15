-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 15 avr. 2024 à 20:38
-- Version du serveur : 10.10.2-MariaDB
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lamarlonance`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `userName_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `user_admin` (`userName_admin`),
  UNIQUE KEY `password_admin` (`password_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `userName_admin`, `password_admin`) VALUES
(1, 'moi', '$2y$10$Mhlh8.zwBpQoZaGAU3hH6el4uspHCaxe2ULMPOA4h0if/.gHOOPVi');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `first_name_contact` varchar(100) NOT NULL,
  `last_name_contact` varchar(100) NOT NULL,
  `email_contact` varchar(100) NOT NULL,
  `object_contact` enum('Demande d''informations','Demande de devis') NOT NULL,
  `message_contact` text NOT NULL,
  `date_contact` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_contact`),
  UNIQUE KEY `email_contact` (`email_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `first_name_contact`, `last_name_contact`, `email_contact`, `object_contact`, `message_contact`, `date_contact`) VALUES
(28, 'youness', 'le bien', 'llebien@younees.com', 'Demande de devis', 'bonjour,\r\n\r\n\r\nje veux un devsi salooupard\r\n\r\nmerci bicoup', '2024-04-15 21:57:56');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id_services` int(11) NOT NULL AUTO_INCREMENT,
  `title_services` varchar(50) NOT NULL,
  `description_services` text NOT NULL,
  `picture_services` varchar(100) NOT NULL,
  PRIMARY KEY (`id_services`),
  UNIQUE KEY `title_services` (`title_services`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id_services`, `title_services`, `description_services`, `picture_services`) VALUES
(7, 'Cours particulier', 'Libérez votre rythme et développez votre passion avec Lamarlonance, professeur de danse expérimenté et pédagogue.\r\n\r\nQue vous soyez débutant ou confirmé, je vous propose des cours particuliers adaptés à vos besoins et envies :\r\n\r\n- Bachata : Apprenez les mouvements sensuels et romantiques de cette danse latine.\r\n- Salsa : Laissez-vous emporter par les rythmes endiablés de la salsa cubaine ou portoricaine.\r\n- Afro : Explorez l\'énergie et la vitalité des danses africaines.\r\n- House : Exprimez votre créativité sur les beats vibrants de la house music.\r\nModerne jazz : Développez votre technique et votre expressivité dans un style dynamique et varié.\r\n\r\nProfitez d\'un suivi personnalisé et d\'une progression à votre rythme :\r\n\r\n- Cours individuels ou en couple.\r\n- Horaires flexibles et adaptables à votre emploi du temps.\r\n- Lieu de cours à votre convenance : chez vous, en studio ou en extérieur.\r\n\r\nLamarlonance, c\'est :\r\n\r\n- Un professeur passionné et patient.\r\n- Une pédagogie positive et encourageante.\r\n- Une expérience de plusieurs années dans l\'enseignement de la danse.\r\nAlors n\'attendez plus, et venez vibrer au rythme de la danse avec Lamarlonance !', 'cours-particulier.jpg'),
(8, 'Ouverture de bal', 'Lamarlonance, danseuse professionnelle et professeur de danse passionnée, vous propose une prestation unique pour sublimer l\'ouverture du bal de votre mariage.\r\n\r\nChoréggraphiez votre rêve\r\n\r\nQue vous soyez novice ou danseur confirmé, Lamarlonance vous accompagnera dans la création d\'une chorégraphie personnalisée, à l\'image de votre couple et de vos envies. Laissez-vous guider par son expertise et sa créativité pour une entrée en scène inoubliable.\r\n\r\nStyles à votre choix\r\n\r\nSalsa, Bachata, Afro, House, Moderne Jazz... Explorez une multitude de styles de danse et trouvez celui qui vous correspond le mieux. Lamarlonance s\'adapte à vos goûts et vous propose des mouvements fluides et élégants, pour une ouverture de bal à la fois gracieuse et rythmée.\r\n\r\nUn accompagnement personnalisé\r\n\r\nLamarlonance met tout son savoir-faire et sa pédagogie à votre service pour vous guider pas à pas. Des cours individuels ou en couple sont organisés à votre rythme, pour vous permettre d\'apprivoiser la chorégraphie et de gagner en confiance.\r\n\r\nPlus qu\'une simple danse, une expérience inoubliable\r\n\r\nL\'ouverture du bal est un moment symbolique et intense. Lamarlonance vous offre l\'opportunité de vivre cette expérience avec émotion et sérénité. Laissez-vous transporter par la magie de la danse et créez un souvenir impérissable pour votre mariage.\r\n\r\nN\'attendez plus et contactez Lamarlonance pour donner vie à l\'ouverture de bal de vos rêves !', 'ouverture-bal.png'),
(9, 'Cours collectif', 'Bachata, Salsa, Afro, House, Moderne Jazz\r\n\r\nDébutants bienvenus !\r\n\r\nLamarlonance, professeur de danse passionné et expérimenté, vous invite à découvrir le plaisir de la danse dans une ambiance conviviale et dynamique.\r\n\r\n- Un programme accessible à tous, quel que soit votre niveau.\r\nUn large choix de styles de danse pour satisfaire toutes vos envies.\r\n- Des chorégraphies originales et variées pour vous perfectionner et vous amuser.\r\nUn apprentissage ludique et progressif pour vous aider à prendre confiance en vous.\r\n- Un moment de détente et de plaisir pour partager votre passion avec d\'autres.\r\nRejoignez-nous et laissez-vous emporter par la magie de la danse !', 'cours-collectif.jpg'),
(10, 'EVJF / EVJG <br/> Animation de mariage', 'Lamarlonance : Dansez votre mariage !\r\nLamarlonance, danseuse professionnelle et professeur de danse, vous propose des animations de mariage uniques et inoubliables. Laissez-vous emporter par sa passion et son talent pour un moment de joie et de partage inoubliable.\r\n\r\nPrestations sur-mesure :\r\n\r\nLamarlonance s\'adapte à vos envies et à vos besoins pour créer une prestation qui vous ressemble. Que vous soyez fan de Bachata, de Salsa, d\'Afro, de House ou de Moderne Jazz, elle saura vous proposer une chorégraphie originale et adaptée à votre niveau.\r\n\r\nAnimations pour tous :\r\n\r\nLamarlonance propose également des animations pour tous vos invités, même ceux qui n\'ont jamais dansé auparavant. Des jeux, des ateliers et des démonstrations rythmeront votre soirée et créeront une ambiance festive et conviviale.\r\n\r\nUn mariage unique :\r\n\r\nAvec Lamarlonance, votre mariage sera un moment unique et inoubliable. Laissez-vous guider par sa passion et son professionnalisme pour créer un souvenir impérissable.\r\n\r\nN\'hésitez pas à contacter Lamarlonance pour obtenir un devis personnalisé.', 'anim-mariage.jpg'),
(11, 'BOOTCAMP <br/> Bachata traditionnelle', 'Lamarlonance, danseuse professionnelle et professeur de danse, vous propose des bootcamps de bachata traditionnelle immersifs et intenses pour vous perfectionner dans cette danse sensuelle et rythmée.\r\n\r\nQue vous soyez débutant ou avancé, nos bootcamps sont conçus pour vous faire progresser rapidement et vous donner les outils nécessaires pour maitriser les techniques de la bachata traditionnelle.\r\n\r\nAu programme :\r\n\r\nTechnique: Apprentissage et perfectionnement des pas de base, des mouvements de corps et des figures emblématiques de la bachata traditionnelle.\r\nMusicalité: Développer votre compréhension du rythme et de la musicalité propre à la bachata traditionnelle.\r\nImprovisation: Apprendre à improviser et à créer vos propres mouvements en toute confiance.\r\nInterprétation: Explorer l\'expression émotionnelle et la connexion avec votre partenaire à travers la danse.\r\nPratique: Des sessions de pratique intensives pour mettre en application vos acquis et vous perfectionner.\r\nNos bootcamps se déroulent sur plusieurs jours et vous permettent de profiter d\'un apprentissage intensif et complet. Vous aurez l\'occasion de danser avec d\'autres passionnés de bachata et de progresser dans un environnement convivial et motivant.\r\n\r\nLamarlonance, avec sa passion et son expérience, vous accompagnera tout au long du bootcamp pour vous aider à atteindre vos objectifs.\r\n\r\nN\'attendez plus et inscrivez-vous dès aujourd\'hui à un bootcamp de bachata traditionnelle avec Lamarlonance !', 'bootcamp-bachata.jpg'),
(12, 'MASTER CLASS <br/> Bachata traditionnelle', 'Master Class de Bachata Traditionnelle avec Lamarlonance\r\nDescription:\r\n\r\nLamarlonance, danseuse professionnelle et professeur de danse, vous propose une Master Class de Bachata traditionnelle pour les danseurs de niveau avancé.\r\n\r\nCe que vous apprendrez:\r\n\r\nTechnique: Approfondissez votre compréhension des mouvements et techniques de la Bachata traditionnelle.\r\nMusicalité: Développez votre capacité à interpréter la musique et à vous exprimer à travers la danse.\r\nStyle: Affinez votre style personnel et explorez les nuances de la Bachata traditionnelle.\r\nImprovisation: Apprenez à improviser et à créer vos propres mouvements.\r\nÀ qui s\'adresse cette Master Class:\r\n\r\n- Danseurs de Bachata ayant un niveau avancé (minimum 2 ans d\'expérience)\r\n- Danseurs désireux d\'approfondir leurs connaissances et techniques\r\n- Danseurs souhaitant explorer la Bachata traditionnelle dans sa forme authentique', 'master-bachata.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
