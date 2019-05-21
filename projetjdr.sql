-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 21 mai 2019 à 18:58
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetjdr`
--

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `owner_id` int(11) NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`game_id`, `name`, `owner_id`) VALUES
(1, 'Partie démo 1', 0),
(2, 'Partie démo 2', 0),
(3, 'Partie démo 3', 0),
(4, 'Partie démo 4', 0),
(10, 'test', 1),
(11, 'test', 1),
(13, 'po', 1),
(14, 'test', 6);

-- --------------------------------------------------------

--
-- Structure de la table `game_notes`
--

DROP TABLE IF EXISTS `game_notes`;
CREATE TABLE IF NOT EXISTS `game_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chapter` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `game_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `game_notes`
--

INSERT INTO `game_notes` (`id`, `chapter`, `title`, `content`, `game_id`, `owner_id`) VALUES
(1, 1, 'Titre', '<p><strong><em><u>Blbl</u></em></strong></p>', 10, 1),
(2, 1, 'Page1', '<p>Ecrivez ici vos notes de jeu</p>', 11, 1),
(3, 2, 'pouic', 'pouic', 11, 1),
(4, 1, 'Page 1', 'Ecrivez ici vos notes de jeu', 12, 1),
(5, 3, 'chapter 3', 'jnkjh', 11, 1),
(6, 1, 'Page', '<h2><strong class=\"ql-size-huge\"><em><u>Bwaaaah</u></em></strong><strong style=\"background-color: rgb(230, 0, 0); color: rgb(255, 235, 204);\"><em><u>Bloup</u></em></strong><strong style=\"background-color: rgb(230, 0, 0);\"><em><u>Blip</u></em></strong></h2><p><br></p><p><br></p><p><br></p><ol><li><br></li><li><strong><em><u>Blu</u></em></strong></li></ol>', 13, 1),
(7, 1, 'Page 1', '<p><strong>Ecrivez ici vos notes de jeu</strong></p>', 14, 6),
(8, 1, 'Page 1', 'Ecrivez ici vos notes de jeu', 15, 1);

-- --------------------------------------------------------

--
-- Structure de la table `game_songs`
--

DROP TABLE IF EXISTS `game_songs`;
CREATE TABLE IF NOT EXISTS `game_songs` (
  `game_id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `game_songs`
--

INSERT INTO `game_songs` (`game_id`, `song_id`) VALUES
(10, 10),
(10, 8);

-- --------------------------------------------------------

--
-- Structure de la table `game_videos`
--

DROP TABLE IF EXISTS `game_videos`;
CREATE TABLE IF NOT EXISTS `game_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `video_link` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `game_videos`
--

INSERT INTO `game_videos` (`id`, `game_id`, `video_link`) VALUES
(1, 1, 'kDwsEazARio'),
(2, 1, 'amait8jrUqA'),
(4, 14, 'kDwsEazARio'),
(11, 14, 'amait8jrUqA'),
(10, 14, 'kDwsEazARio'),
(12, 14, 'NFiyx61NVOM'),
(13, 14, '8FAlFHgaBVE'),
(14, 14, 'kDwsEazARio'),
(17, 1, 'kDwsEazARio'),
(18, 14, 'kDwsEazARio'),
(19, 1, 'kDwsEazARio'),
(25, 11, 'kDwsEazARio'),
(22, 10, 'amait8jrUqA');

-- --------------------------------------------------------

--
-- Structure de la table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `keyword` text NOT NULL,
  `access` text NOT NULL,
  `principal_theme` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `songs`
--

INSERT INTO `songs` (`id`, `name`, `keyword`, `access`, `principal_theme`) VALUES
(1, 'Abeilles', '', 'abeilles.mp3', 2),
(2, 'Coq', '', 'coq.mp3', 1),
(3, 'Battements de coeur', '', 'battements_coeur.mp3', 0),
(4, 'Hennissement de cheval', '', 'cheval_hennissement.mp3', 1),
(5, 'Badum Tss', '', 'badum_tss.mp3', 0),
(6, 'Bêlement de chèvre naine', '', 'chevre_naine.mp3', 1),
(7, 'Cloche d\'Eglise', '', 'cloche_eglise.mp3', 0),
(8, 'Croassement de corneilles', 'croassement, corneille, corneilles, corbeau, corbeaux', 'corneilles.mp3', 1),
(9, 'Tir de 357 Magnum', 'coup de feu, tir, arme à feu, pistolet, magnum', 'coup_feu_357_magnum', 3),
(10, 'Tir de Beretta M12', 'arme à feu, Beretta, fusil, coup de feu, tir', 'coup_feu_beretta_m12.mp3', 3),
(11, 'Explosion lointaine', 'explosion', 'explosion_lointaine.mp3', 3),
(12, 'Chant de grillon mâle', 'grillon, sauterelle, criquet, insecte, nature, chant, cigales', 'grillon_male.mp3', 2),
(13, 'Minuterie', 'minuterie, timer, chronomètre, compte-à-rebours', 'minuterie.mp3', 0),
(14, 'Aboiement de chiens', 'chien, aboiement', 'aboiement_chiens.mp3', 1);

-- --------------------------------------------------------

--
-- Structure de la table `songs_thematics`
--

DROP TABLE IF EXISTS `songs_thematics`;
CREATE TABLE IF NOT EXISTS `songs_thematics` (
  `songs_id` int(11) NOT NULL,
  `thematic_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `songs_thematics`
--

INSERT INTO `songs_thematics` (`songs_id`, `thematic_id`) VALUES
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `thematics`
--

DROP TABLE IF EXISTS `thematics`;
CREATE TABLE IF NOT EXISTS `thematics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `thematics`
--

INSERT INTO `thematics` (`id`, `name`, `description`) VALUES
(1, 'Animaux', 'Toutes sortes de bruitages animaliers'),
(2, 'Insectes', 'Bruits d\'insectes divers'),
(3, 'Combat', 'Bruits liés à des armes et du combat'),
(4, 'Fantastique', 'Dragons ou monstres, ils seront là'),
(0, 'Autres', 'Les inclassables');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `statut` int(11) NOT NULL,
  `activation_key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `password`, `mail`, `statut`, `activation_key`) VALUES
(1, '$2y$10$z91ehyM6Qme6boc4yo7wQOBqgb.xw8asUkJLPGMxx66exgrrmjx/q', 'sarahgstn@gmail.com', 2, 'dee02fd721ca91f1e357031d8a743f76'),
(2, '$2y$10$LpSefw78wU7Q9a7NAs2tiOgp2j5E0aTkSvOAKTanwlvZAOpWldTs.', 'pirouette', 1, 'activated'),
(6, '$2y$10$IgeDT3J2jdYPNOD6ZoObteR1B0Bm5iBTxhOLOQPMLxcWzAujQLfJy', 'test@test', 1, 'e39bbac0ac336c78f3472eeae0ba3cd1'),
(7, '$2y$10$xdAc9SLGMTAiUY7g1Kp.8.qdvUGuVIZ0wtz.u4Z6bGz1uZN7VIjpS', 'tamer@test.com', 1, 'afefe1d1778d3141af3a8ed61cf789ce'),
(8, '$2y$10$IZB2039XGqvmkBqzHcEQx.7vlZoNnjv533RSOhF2aRHA/xKLXBGlK', 'besnard.alexy@laposte.net', 1, '9f2f27f98230453b6f96e1e9f4fa500b'),
(9, '$2y$10$vW3LF2lOAh3leQlVZSHB0ugIcSwS0ZyPkepXjl6M202bI6iaTqk3S', 'test@test', 1, 'e39bbac0ac336c78f3472eeae0ba3cd1'),
(10, '$2y$10$imoVOJSdhWVM2A9wIJcUPuVB2.LPExDLtTTcvlNW2Q.PHYvAiW4.y', 'test@xn--st-7fu', 1, '8e283eb60599d8ed8214fc511d0edeb5'),
(18, '$2y$10$ssyIOkUWwqoDaglTFOhz2uJ/dLmaBX5e4k3w4YzYpudAwkcHNw8ia', 'saahgstn@gmail.c', 0, '2004c8a9d600ce7793a6a2b3033e99e3'),
(17, '$2y$10$RurJApovHlDzEg2V3ZaK7O3bDhqYBK8R9IC4gU2eCcOuUeW/5A36q', 'saahgstn@gmail.com', 0, 'a32defc11991bc2691a09bc66592d90f'),
(16, '$2y$10$jsAT9M7uCuD1NI4yYQv69./G927n/sjbN2SIbz9dYaLgvkWiy3s3W', 'srahgstn@gmail.com', 0, '2bca807e7d16176ac62d5f51ba2c0589');

-- --------------------------------------------------------

--
-- Structure de la table `users_songs`
--

DROP TABLE IF EXISTS `users_songs`;
CREATE TABLE IF NOT EXISTS `users_songs` (
  `user_id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users_songs`
--

INSERT INTO `users_songs` (`user_id`, `song_id`) VALUES
(6, 6),
(6, 2),
(6, 13),
(6, 5),
(2, 3),
(2, 7),
(2, 2),
(2, 6),
(1, 6),
(1, 4),
(1, 12),
(1, 7),
(1, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
