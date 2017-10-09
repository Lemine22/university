-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 07 Septembre 2016 à 12:03
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `inscription`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `identifiant_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `identifiant_admin`, `password_admin`) VALUES
(1, 'hello', 'three');

-- --------------------------------------------------------

--
-- Structure de la table `bac`
--

CREATE TABLE `bac` (
  `id` int(11) NOT NULL,
  `bac_year` varchar(4000) NOT NULL,
  `bac_country` varchar(100) NOT NULL,
  `bac_city` varchar(100) NOT NULL,
  `bac_serie` varchar(50) NOT NULL,
  `bac_mention` varchar(50) NOT NULL,
  `bac_department` varchar(55) NOT NULL,
  `chemin` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bac`
--

INSERT INTO `bac` (`id`, `bac_year`, `bac_country`, `bac_city`, `bac_serie`, `bac_mention`, `bac_department`, `chemin`) VALUES
(71, '', '', '', '', '', '', ''),
(72, '', '', '', '', '', '', ''),
(73, '', '', '', '', '', '', ''),
(74, '', '', '', '', '', '', ''),
(75, '', 'Afrique_du_sud', '', '', '', ',hbj,nn', ''),
(76, '2004', 'Afrique_du_sud', 'vdld', 'kckjc', '', 'kjfkdj', ''),
(77, 'ggf', 'Afrique_du_sud', 'gfgfffg', 'gg', '', 'gfg', ''),
(78, 'bb', 'Algerie', 'lvkflv', 'fdf', '', 'hggfghfgh', ''),
(79, '', '', '', '', '', '', ''),
(80, '', '', '', '', '', '', ''),
(81, '2004', 'Afghanistan', 'fvfvvcvvfvf', 'kjbbkj', '', 'hggfghfgh', ''),
(82, '', '', '', '', '', '', ''),
(83, '2004', 'Afrique_du_sud', 'dkslc cs', 'kjbbkj', '', 'hggfghfgh', ''),
(84, 'bb', 'Andorre', 'dkslc cs', 'kjbbkj', 'Tr&eacute;s bien', 'hggfghfgh', ''),
(85, '2004', 'Afghanistan', 'kaedi', 'math', 'Bien', 'Gorgol', ''),
(86, '2004', 'Afghanistan', 'fvfvvcvvfvf', 'kjbbkj', 'Bien', 'hggfghfgh', 'images/57b71c9abdbdc.jpg'),
(87, '2014', 'Algerie', 'Algiers', 'Math', 'Tr&eacute;s bien', 'Algiers', 'images/57b74a670d0c1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `fieldyear` varchar(100) NOT NULL,
  `field` varchar(50) NOT NULL,
  `birthday` int(50) NOT NULL,
  `birthmonth` int(40) NOT NULL,
  `birthyear` year(4) NOT NULL,
  `birthcountry` varchar(50) NOT NULL,
  `birthdepartment` varchar(50) NOT NULL,
  `birthcity` varchar(50) NOT NULL,
  `citizen` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `confirmmail` varchar(55) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `residencecountry` varchar(100) NOT NULL,
  `othernames` varchar(100) NOT NULL,
  `neighbour` varchar(55) NOT NULL,
  `house` varchar(55) NOT NULL,
  `chemin` varchar(55) NOT NULL,
  `mention` varchar(60) NOT NULL,
  `bac_year` varchar(4000) NOT NULL,
  `bac_country` varchar(100) NOT NULL,
  `bac_city` varchar(100) NOT NULL,
  `bac_serie` varchar(50) NOT NULL,
  `bac_mention` varchar(50) NOT NULL,
  `bac_department` varchar(55) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` char(60) NOT NULL,
  `fix` varchar(55) NOT NULL,
  `indicatif` varchar(6) NOT NULL,
  `postbac_serie` varchar(55) NOT NULL,
  `postbac_mention` varchar(50) NOT NULL,
  `postbac_year` year(4) NOT NULL,
  `postbac_country` varchar(55) NOT NULL,
  `postbac_department` varchar(55) NOT NULL,
  `postbac_city` varchar(55) NOT NULL,
  `postbac_chemin` varchar(55) NOT NULL,
  `code_aleatoire` varchar(55) NOT NULL,
  `site` varchar(55) NOT NULL,
  `bac_chemin` varchar(55) NOT NULL,
  `bordreau` varchar(55) NOT NULL,
  `bank` varchar(55) NOT NULL,
  `bordreau_chemin` varchar(55) NOT NULL,
  `postbac_serie2` varchar(55) NOT NULL,
  `postbac_mention2` varchar(55) NOT NULL,
  `postbac_year2` year(4) NOT NULL,
  `postbac_country2` varchar(55) NOT NULL,
  `postbac_department2` varchar(55) NOT NULL,
  `postbac_city2` varchar(55) NOT NULL,
  `postbac_chemin2` varchar(55) NOT NULL,
  `identifiant_admin` varchar(100) NOT NULL,
  `password_admin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id`, `name`, `surname`, `city`, `gender`, `fieldyear`, `field`, `birthday`, `birthmonth`, `birthyear`, `birthcountry`, `birthdepartment`, `birthcity`, `citizen`, `email`, `confirmmail`, `phone`, `residencecountry`, `othernames`, `neighbour`, `house`, `chemin`, `mention`, `bac_year`, `bac_country`, `bac_city`, `bac_serie`, `bac_mention`, `bac_department`, `date`, `password`, `fix`, `indicatif`, `postbac_serie`, `postbac_mention`, `postbac_year`, `postbac_country`, `postbac_department`, `postbac_city`, `postbac_chemin`, `code_aleatoire`, `site`, `bac_chemin`, `bordreau`, `bank`, `bordreau_chemin`, `postbac_serie2`, `postbac_mention2`, `postbac_year2`, `postbac_country2`, `postbac_department2`, `postbac_city2`, `postbac_chemin2`, `identifiant_admin`, `password_admin`) VALUES
(71, 'ELWAGHEF', 'Mohamed', 'Colombes', 'homme', 'Ann&eacute;e 3', 'T&eacute;l&eacute;communications', 31, 12, 1991, 'Mauritanie', 'Nouakchott', 'Nouakchott', 'Mauritanienne', 'elwaghefm@gmail.com', 'elwaghefm@gmail.com', '014888855588', 'France', 'Lemine', 'France', 'France', 'images/57ab3470befe2.jpg', '', '', '', '', '', '', '', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(72, 'Mohamed', 'Jemal', 'Paris', 'homme', 'Ann&eacute;e 2', 'Math&eacute;matique', 19, 12, 1977, 'France', 'Paris', 'apris ', 'Mauritanienne', 'elwaghefm@gmail.com', 'elwaghefm@gmail.com', '014888855588', 'France', 'Abou', 'France', 'France', 'images/57ab5da05d5a6.jpg', '', '', '', '', '', '', '', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(73, 'DE SOUZA ', 'Aristide', 'Paris', 'homme', 'Ann&eacute;e 2', 'T&eacute;l&eacute;communications', 12, 7, 1989, 'France', 'Paris', 'Paris', 'Sénégalaise', 'elwaghefm@gmail.com', 'elwaghefm@gmail.com', '3565654654', 'France', 'Mohamed', 'France', 'France', 'images/57ab6687c5398.jpg', '', '', '', '', '', '', '', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(74, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', '', 'Bien', '', '', '', '', '', '', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(75, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', '', 'Tr&eacute;s bien', '', 'Afrique_du_sud', '', '', '', ',hbj,nn', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(76, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', '', 'Tr&eacute;s bien', '2004', 'Afrique_du_sud', 'vdld', 'kckjc', '', 'kjfkdj', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(77, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', '', 'Tr&eacute;s bien', 'ggf', 'Afrique_du_sud', 'gfgfffg', 'gg', '', 'gfg', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(78, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', '', 'Tr&eacute;s bien', 'bb', 'Algerie', 'lvkflv', 'fdf', '', 'hggfghfgh', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(79, 'vlfvkfv', 'Lemine', 'fvfvvcvvfvf', 'homme', 'Ann&eacute;e 2', 'Physique', 13, 6, 1972, 'LOVE YOU', 'jknbbkjbk', 'vdflvnfvkn', 'ddssdd', 'elwaghefm@gmail.com', 'elwaghefm@gmail.com', '014888855588', 'dddcdc', 'Mohamed Lemine', 'dddcdc', 'dddcdc', 'images/57b57a3c727c0.jpg', '', '', '', '', '', '', '', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(80, 'fvsdvdvmldvdmvl', 'flvkl', 'fvfvvcvvfvf', 'homme', 'Ann&eacute;e 3', 'Math&eacute;matique', 20, 10, 1977, 'LOVE YOU', 'Hate you', 'vdflvnfvkn', 'kjnkl bkjb', 'elwaghefm@gmail.com', 'elwaghefm@gmail.com', '54554841', 'dddcdc', 'Mohamed Lemine', 'dddcdc', 'dddcdc', 'images/57b57b0c6c912.jpg', '', '', '', '', '', '', '', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(81, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', '', 'Assez Bien', '2004', 'Afghanistan', 'fvfvvcvvfvf', 'kjbbkj', '', 'hggfghfgh', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(82, 'fvsdvdvmldvdmvl', 'Lemine', 'fvfvvcvvfvf', 'homme', 'Ann&eacute;e 2', 'Physique', 3, 5, 1965, 'Mauritanie', 'jknbbkjbk', 'vdflvnfvkn', 'flkvf,ov', 'elwaghefm@gmail.com', 'elwaghefm@gmail.com', '54554841', 'dddcdc', 'Mohamed Lemine', 'dddcdc', 'dddcdc', 'images/57b57c89ed4eb.jpg', '', '', '', '', '', '', '', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(83, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', '', 'Assez Bien', '2004', 'Afrique_du_sud', 'dkslc cs', 'kjbbkj', '', 'hggfghfgh', '2016-08-18 20:19:05', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(84, 'fvsdvdvmldvdmvl', 'Lemine', 'fvfvvcvvfvf', 'femme', 'Ann&eacute;e 1', 'Math&eacute;matique', 2, 8, 1966, 'vlok,,ov,', 'jknbbkjbk', 'vdflvnfvkn', 'kjnkl bkjb', 'elwaghefm@gmail.com', 'elwaghefm@gmail.com', '54554841', 'dddcdc', 'Mohamed Lemine', 'dddcdc', 'dddcdc', 'images/57b61ca92cd76.jpg', '', '', '', '', '', '', '', '2016-08-18 20:38:01', 'jiji24258', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(85, 'fvsdvdvmldvdmvl', 'Lemine', 'fvfvvcvvfvf', 'femme', 'Ann&eacute;e 1', 'Math&eacute;matique', 16, 11, 1972, 'vlok,,ov,', 'bgv', 'fvfsf', 'kjnkl bkjb', 'jemal_jiji20@hotmail.com', 'jemal_jiji20@hotmail.com', '54554841', 'dddcdc', 'Mohamed Lemine', 'dddcdc', 'dddcdc', 'images/57b62bf7167c6.jpg', '', '', '', '', '', '', '', '2016-08-18 21:43:19', '$2y$10$yTnQgq62ljQytqvrMrjKR..1LvlIjse2wQqzs00iI1iG/xC88ueWy', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(86, 'fvsdvdvmldvdmvl', 'Lemine', 'fvfvvcvvfvf', 'Mademoiselle', 'Ann&eacute;e 1', '\r\n          MANAGEMENT DES RESSOURCES HUMAINES', 11, 9, 1971, 'LOVE YOU', 'bgv', 'fvfsf', 'flkvf,ov', 'elwaghefm@gmail.com', 'elwaghefm@gmail.com', '2225555', 'dddcdc', 'Mohamed Lemine', 'dddcdc', 'dddcdc', 'images/57b656c53fd38.jpg', '', '', '', '', '', '', '', '2016-08-19 00:45:57', '$2y$10$vLhLCMxR9v1cNiHIGGKfFu4H8Q8UD5Xr4LE4.aC4ENFpi4Z/.6zCq', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(87, 'ELWAGHEF', 'Moahmed', 'Paris', 'Mademoiselle', 'Licence', 'GENIE CIVIL', 13, 10, 1967, 'Angola', 'Luanda', 'Luanda', 'Sénégalaise', 'ould@jemal.fr', 'ould@jemal.fr', '12345678', 'France', 'Jemal', 'France', 'France', 'images/57b7317df1584.jpg', '', '', '', '', '', '', '', '2016-08-19 16:19:10', '$2y$10$2Z5TZV7Hw/GTO//a7QKuW.DDuIfzXyc8DDnX5JxSuQiQMAdlSmg02', '4544555445', '+222', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(88, 'ELWAGHEF', 'Moahmed', 'paris', 'Mademoiselle', 'DUT 2', 'COMMUNICATION DES ENTREPRISES', 8, 6, 1964, 'Belgique', 'Bruxelles', 'Bruxelles', 'Afrique_du_sud', 'elwaghef@htmail.fr', 'elwaghef@htmail.fr', '12345678', 'Australie', 'Jemal', 'Australie', 'Australie', 'images/57b73bf5c1363.jpg', '', '', '', '', '', '', '', '2016-08-19 17:03:49', '$2y$10$rGO0XwWrlOQ0D9JGu94kaucpgMg8kIwkz8d3aDDzPXvNpwgYKBjc.', '', '+222', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(89, 'Mohamed', 'Lemine', 'Paris', 'homme', 'DUT 1', 'AGRONOMIE', 20, 12, 1977, 'Bahrein', 'Paris', 'Paris', 'Bangladesh', 'mohamed@gmail.com', 'mohamed@gmail.com', '12345678', 'Afrique_Centrale', 'Jemal', 'Afrique_Centrale', 'Afrique_Centrale', 'images/57b749f70e519.jpg', '', '', '', '', '', '', '', '2016-08-19 18:03:35', '$2y$10$OqZhbK6.ZUt2oyRdgz9q9.Z0rhSa3FEJTlmUYpRHCK5dheXgxAS0.', '25825825', '+229', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(90, 'Jemal', 'Lemine', 'fvfvvcvvfvf', 'homme', 'DUT 1', 'MANAGEMENT DES RESSOURCES HUMAINES', 5, 5, 1963, 'Arabie_Saoudite', 'jknbbkjbk', 'vdflvnfvkn', 'Algerie', 'kk@gg.ff', 'kk@gg.ff', '12345678', 'Arabie_Saoudite', 'Mohamed Lemine', 'Arabie_Saoudite', 'Arabie_Saoudite', 'images/57bbe9ecdba57.jpg', '', '', '', '', '', '', '', '2016-08-23 06:15:09', '$2y$10$DaVL1lYOMcJXiM58WY6hBeBofohBO33Wb8ZXzxMuGmDd2t/41Ie1e', '', '+33', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(91, 'vlfvkfv', 'Lemine', 'fvfvvcvvfvf', 'femme', 'DUT 1', 'AGRONOMIE', 3, 2, 1961, 'Azerbaidjan', 'jknbbkjbk', 'vdflvnfvkn', 'Bangladesh', 'kkmm@gg.ff', 'kkmm@gg.ff', '12345678', 'Argentine', 'Mohamed Lemine', 'Argentine', 'Argentine', 'images/57bbebb48cc2b.jpg', '', '', '', '', '', '', '', '2016-08-23 06:22:44', '$2y$10$fpYIvicbqWbouIsTDXRCsO6VGTGcQTgjJHJbRPGdghRKtlm9y68IO', '', '123', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(92, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', 'images/57bbebf9d8e34.jpg', '', '2004', 'Afghanistan', 'fvfvvcvvfvf', 'kjbbkj', 'Tr&eacute;s bien', ',,nk', '2016-08-23 06:23:53', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(93, 'vlfvkfv', 'Helllo', 'fvfvvcvvfvf', 'Mademoiselle', 'Licence', 'BANQUE FINANCE ASSURANCE', 3, 4, 1963, 'Afrique_Centrale', 'jknbbkjbk', 'fvfsf', 'Bangladesh', 'kkl@gg.ff', 'kkl@gg.ff', '12345678', 'Azerbaidjan', 'Mohamed Lemine', 'Azerbaidjan', 'Azerbaidjan', 'images/57bbedf99e572.jpg', '', '', '', '', '', '', '', '2016-08-23 06:32:25', '$2y$10$byq12wdkh1ANiBVrnsy9wOrH6egrYG.55liyVgQJIAIv4yRpp1Y02', '', '123', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(94, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', 'images/57bbee3429639.jpg', '', '2004', 'Afghanistan', 'fvfvvcvvfvf', 'kjbbkj', 'Tr&eacute;s bien', 'hggfghfgh', '2016-08-23 06:33:24', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(95, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', 'images/57bbefac83bcd.jpg', '', '2004', 'Afrique_Centrale', 'fvfvvcvvfvf', 'kjbbkj', 'Tr&eacute;s bien', 'hggfghfgh', '2016-08-23 06:39:40', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(96, 'fvsdvdvmldvdmvl', 'Helllo', 'fvfvvcvvfvf', 'Mademoiselle', 'DUT 2', 'BANQUE FINANCE ASSURANCE', 18, 12, 1975, 'Australie', 'jknbbkjbk', 'vdflvnfvkn', 'Azerbaidjan', 'elwaghefmn@gmail.com', 'elwaghefmn@gmail.com', '12345678', 'Bahrein', 'Mohamed Lemine', 'Bahrein', 'Bahrein', 'images/57bbf16979cc7.jpg', '', '', '', '', '', '', '', '2016-08-23 06:47:05', '$2y$10$.b3gU93BIDqFXPUTrElnMewlH5T69DbfiXJDKTKZf9JG5xAcxyPhW', '', '123', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(97, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', '', '', '2011', 'Afrique_Centrale', 'll,lk,noln', 'jojoj', 'Tr&eacute;s bien', 'jjjjj', '2016-08-23 06:52:20', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(98, 'vlfvkfv', 'Helllo', 'dkslc cs', 'homme', 'Licence', 'BANQUE FINANCE ASSURANCE', 3, 3, 1962, 'Afrique_Centrale', 'bgv', 'vdflvnfvkn', 'Australie', 'elwaghefmgg@gmail.com', 'elwaghefmgg@gmail.com', '12345678', 'Australie', 'Mohamed Lemine', 'Australie', 'Australie', 'images/57bbff2755d42.jpg', '', '', '', '', '', '', '', '2016-08-23 07:45:43', '$2y$10$QHdTDfxVipBwDWYCG/1LsuZG1IpXXzZfc0riz06wt4ZizdyM8VCzq', '', '123', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(99, 'ELWAGHEF', 'Helllo', 'fvfvvcvvfvf', 'Mademoiselle', 'Licence', 'GENIE CIVIL', 15, 9, 1974, 'Andorre', 'jknbbkjbk', 'vdflvnfvkn', 'Bahamas', 'kk@ggl.ff', 'kk@ggl.ff', '12345678', 'Armenie', 'Mohamed Lemine', 'Armenie', 'Armenie', 'images/57bc0264dc214.jpg', '', '2004', '', '', '', '', '', '2016-08-23 07:59:33', '$2y$10$FWwxsBqR52s3sT1blBchsOfbjJdN0gujcDIkCxiW5EeqMqiaNkGNq', '444', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(100, 'vlfvkfv', 'Helllo', 'dkslc cs', 'Mademoiselle', 'DUT 2', 'MARKETING ET TECHNIQUE DE COMMERCIALISATION', 18, 12, 1966, 'Allemagne', 'jknbbkjbk', 'fvfsf', 'Andorre', 'elwaghefmz@gmail.com', 'elwaghefmz@gmail.com', '12345678', 'Albanie', 'lkjndkvdksk', 'Albanie', 'Albanie', 'images/57bc039e0f084.jpg', '', '2004', '', '', 'jojoj', '', '', '2016-08-23 08:04:46', '$2y$10$49R.u0WzuwsX8c7T6Efie.H11EQ3HUnYLNXHFdcFmfY3UwMKnZVm.', '1111', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(101, 'vlfvkfv', 'kvjnflkvn', 'fvfvvcvvfvf', 'Mademoiselle', 'DUT 2', 'GENIE CIVIL', 20, 6, 1975, 'Allemagne', 'bgv', 'vdflvnfvkn', 'Albanie', 'elwagheff@gmail.com', 'elwagheff@gmail.com', '12345678', 'Afrique_Centrale', 'lkjndkvdksk', 'Afrique_Centrale', 'Afrique_Centrale', 'images/57bc04dc9bc52.jpg', '', '2004', '', 'Kaedi', 'math', '', '', '2016-08-23 08:10:04', '$2y$10$xEXWQUEE6LM4zVIBh0Ue6uM09xFNNVsJ/Wyrx.8l/AqjZ1F.lq3DS', '111', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(102, 'vlfvkfv', 'Helllo', 'fvfvvcvvfvf', 'Mademoiselle', 'DUT 2', 'TECHNIQUES AUDIOVISUELLES ET DE LA COMMUNICATION', 4, 5, 1966, 'Bahrein', 'jknbbkjbk', 'vdflvnfvkn', 'Algerie', 'elwaghefmaa@gmail.com', 'elwaghefmaa@gmail.com', '54554841', 'Australie', 'Mohamed Lemine', 'Australie', 'Australie', 'images/57bc5be71c2c1.jpg', '', '2004', 'Azerbaidjan', 'll,lk,noln', 'jojoj', 'Tr&eacute;s bien', '', '2016-08-23 14:21:27', '$2y$10$vggq51iKuYue4vIvWQz30O6Y.ieJn8BpbMRDIdttRF.yJ/priJ/ky', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(103, 'Jemal', 'Lemine', 'lvkflv', 'Mademoiselle', 'Licence', 'BANQUE FINANCE ASSURANCE', 3, 2, 1962, 'Autriche', 'bgv', 'fvfsf', 'Bahamas', 'elwaghefmss@gmail.com', 'elwaghefmss@gmail.com', '12345678', 'Azerbaidjan', 'Mohamed Lemine', 'Azerbaidjan', 'Azerbaidjan', 'images/57bc67011e003.jpg', '', '2004', 'Bahrein', 'Kaedi', 'jojoj', 'Bien', '', '2016-08-23 15:08:49', '$2y$10$tNgUF5YikCQKJESy7Fe9De9j.QWYkN8TJDP8lwSFSrchXm05ohkX6', '444', '', 'jbikb', 'Bien', 2000, 'Afrique_du_sud', 'jhbhuv', 'kjiu', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(104, 'fvsdvdvmldvdmvl', 'flvkl', 'fvfvvcvvfvf', 'Mademoiselle', 'DUT 2', 'COMMUNICATION DES ENTREPRISES', 17, 5, 1976, 'Andorre', 'jknbbkjbk', 'vdflvnfvkn', 'Belgique', 'elwaghefmjj@gmail.com', 'elwaghefmjj@gmail.com', '1234566', 'Azerbaidjan', 'Mohamed Lemine', 'Azerbaidjan', 'Azerbaidjan', 'images/57bcaf5555fe1.jpg', '', '2004', 'Albanie', 'Kaedi', 'jojoj', 'Bien', '', '2016-08-23 20:17:25', '$2y$10$mtq0bEFWKznNueJ7Cda/g.zDXn9cLoIGeuk1OA.kXFwyUqCUmqsaK', '', '', 'jbikb', 'Tr&eacute;s bien', 2000, 'Afrique_du_sud', 'jhbhuv', 'kjiu', '', 'XORudi8SnsVC', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(105, 'Jemal', 'Lemine', 'dkslc cs', 'Mademoiselle', 'Licence', 'FINANCE COMPTABILITE', 4, 6, 1963, 'Barbade', 'jknbbkjbk', 'vdflvnfvkn', 'Algerie', 'elwaghefmpl@gmail.com', 'elwaghefmpl@gmail.com', '122555', 'Bahrein', 'Mohamed Lemine', 'Bahrein', 'Bahrein', 'images/57bdc2aae089f.jpg', '', '2004', 'Afrique_Centrale', 'll,lk,noln', 'jojoj', 'Bien', '', '2016-08-24 15:52:11', '$2y$10$6O6nMwlEdA/KAv6cpl5GZ.xpHH6etUoE58AeKWul9ywdSCTPcmeg2', '45454545', '', 'jbikb', 'Bien', 2000, 'Afrique_du_sud', 'jhbhuv', 'kjiu', 'images/57bdc2aae1059.jpg', 'NQJyJEDMFILg', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(106, 'vlfvkfv', 'Lemine', 'lvkflv', 'homme', 'DUT 2', 'GENIE ELECTRICQUE ET INFORMATIQUE INDUSTRIELLE', 18, 11, 1976, 'Algerie', 'jknbbkjbk', 'vdflvnfvkn', 'Bangladesh', 'elwaghefmppp@gmail.com', 'elwaghefmppp@gmail.com', '12165689', 'Algerie', 'Mohamed Lemine', 'Algerie', 'Algerie', 'images/57bdc319e282f.jpg', '', '2004', 'Afrique_Centrale', 'll,lk,noln', 'jojoj', 'Assez Bien', '', '2016-08-24 15:54:02', '$2y$10$9YHKkECVBiHMx2EBTiGLROfiQqYMkoIKDMv215BvTACkQPJt4fSDq', '35468984', '', 'jbikb', 'Passable', 2000, 'Afrique_Centrale', 'kj', 'kjiu', 'images/57bdc319e2be1.jpg', 'VyRIhU654ibI', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(107, 'vlfvkfv', 'Helllo', 'fvfvvcvvfvf', 'Mademoiselle', 'DUT 2', 'COMMUNICATION DES ENTREPRISES', 17, 9, 1975, 'Australie', 'jknbbkjbk', 'vdflvnfvkn', 'Algerie', 'elwaghefmr@gmail.com', 'elwaghefmr@gmail.com', '1212121212', 'Andorre', 'Mohamed Lemine', 'Andorre', 'Andorre', 'images/57bdc47d0af94.jpg', '', '2004', 'Algerie', 'll,lk,noln', 'jojoj', 'Bien', '', '2016-08-24 15:59:57', '$2y$10$JJMLq/7B6pwzjnpi.J.UheP4PE9cfUVu1jhaEMkmcV.Pq5A76VuHe', '444', '', 'kjhik', 'Bien', 2000, 'Australie', 'jhbhuv', 'kjb', 'images/57bdc47d0b7a2.jpg', 'YdU8clEd', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(108, 'Jemal', 'Lemine', 'fvfvvcvvfvf', 'Mademoiselle', 'Licence', 'COMMUNICATION DES ENTREPRISES', 6, 5, 1962, 'Albanie', 'jknbbkjbk', 'vdflvnfvkn', 'Algerie', 'elwaghefmnnn@gmail.com', 'elwaghefmnnn@gmail.com', '12354545', 'Algerie', 'Mohamed Lemine', 'Algerie', 'Algerie', 'images/57be22318e130.jpg', '', '2004', 'Afrique_du_sud', 'jbkjk', 'jojoj', 'Bien', '', '2016-08-24 22:39:45', '$2y$10$ms38erSBWWGexu2RmkupXuKTInIhQwmFbQEocgKGpIC4OuqS14O1G', '212121', '', 'jbikb', 'Bien', 2000, 'Albanie', 'jhbhuv', 'kjiu', 'images/57be22318e4ca.jpg', 'T7ZK6I8S', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(109, 'fvsdvdvmldvdmvl', 'Lemine', 'dkslc cs', 'Mademoiselle', 'DUT 2', 'COMMUNICATION DES ENTREPRISES', 18, 11, 1977, 'Autriche', 'jknbbkjbk', 'vdflvnfvkn', 'Andorre', 'elwaghefmpmp@gmail.com', 'elwaghefmpmp@gmail.com', '1212121', 'Bahrein', 'Mohamed Lemine', 'Bahrein', 'Bahrein', 'images/57be22c1e103d.jpg', '', '2004', 'Afrique_Centrale', 'll,lk,noln', 'jojoj', 'Bien', '', '2016-08-24 22:42:10', '$2y$10$vJTScH6ygxBE2Yq0vIq/Z.aEwFjkdmCkU6JvnHYroHRRofeaZ6eZG', '', '', 'jbikb', 'Bien', 2000, 'Allemagne', 'jhbhuv', 'kjiu', 'images/57be22c1e1507.jpg', '6YJCP34G', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(110, 'fvsdvdvmldvdmvl', 'Helllo', 'fvfvvcvvfvf', 'Mademoiselle', 'Licence', 'GENIE ELECTRICQUE ET INFORMATIQUE INDUSTRIELLE', 20, 10, 1978, 'Armenie', 'jknbbkjbk', 'vdflvnfvkn', 'Bahamas', 'elwaghefmlpm@gmail.com', 'elwaghefmlpm@gmail.com', '12121212121', 'Bahamas', 'Mohamed Lemine', 'Bahamas', 'Bahamas', 'images/57be237a5d20b.jpg', '', '2004', 'Afrique_du_sud', 'll,lk,noln', 'jojoj', 'Tr&eacute;s bien', '', '2016-08-24 22:45:14', '$2y$10$MeUZV7a4ErGAktDVoDVrmObLURmkXFFo6NMAWuezBZOJNEvQ1GfMW', '444', '', 'jbikb', 'Tr&eacute;s bien', 2005, 'Albanie', 'jhbhuv', 'kjiu', 'images/57be237a5d591.jpg', 'HQJWXYV5', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(111, 'vlfvkfv', 'Lemine', 'fvfvvcvvfvf', 'femme', 'DUT 1', 'FINANCE COMPTABILITE', 3, 8, 1962, 'Afrique_du_sud', 'jknbbkjbk', 'vdflvnfvkn', 'Afrique_du_sud', 'elwaghefmaz@gmail.com', 'elwaghefmaz@gmail.com', '12345678', 'Barbade', 'Mohamed Lemine', 'Barbade', 'Barbade', 'images/57be241892bd9.jpg', '', '2004', 'Afrique_du_sud', 'll,lk,noln', 'jojoj', 'Tr&eacute;s bien', '', '2016-08-24 22:47:52', '$2y$10$HK31XblQEpCfCWTmT7VvDueOq1A2pJ9UaVelN8/NqIH2B/ZT3wdc6', '', '', 'jbikb', 'Bien', 2000, 'Albanie', 'jhbhuv', 'kjb', 'images/57be241893044.jpg', '23FW6ERO', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '0'),
(112, 'Christophe', 'Doudou', 'LOLOOO', 'Mademoiselle', 'DUT 2', 'GENIE ELECTRICQUE ET INFORMATIQUE INDUSTRIELLE', 16, 3, 1971, 'Australie', 'KALALA', 'KOKOK', 'Afrique_du_sud', 'elwaghefmtt@gmail.com', 'elwaghefmtt@gmail.com', '12345678', 'Bahamas', 'Dani', 'Bahamas', 'Bahamas', 'images/57bf72bb4c5d5.jpg', '', '2011', 'Algerie', 'LOLLL', 'jojoj', 'Bien', '', '2016-08-25 22:35:39', '$2y$10$7EXvxcGP6tlzxTEdUyG4kenzdezeSFHFbIcJfVNpR.ir7PKVwcdGG', '', '', 'kokoko', 'Bien', 2012, 'Angola', 'looooaa', 'loooll', 'images/57bf72bb4cc01.jpg', '6UF5HEV5', 'Abomey', '', '54646464646', 'Central bank', 'images/57bf72bb555e1.jpg', '', '', 0000, '', '', '', '', '', '0'),
(113, 'Jemal', 'Helllo', 'dkslc cs', 'femme', 'DUT 2', 'GENIE CIVIL', 16, 11, 1977, 'Algerie', 'bgv', 'fvfsf', 'Andorre', 'elwaghefmpppmp@gmail.com', 'elwaghefmpppmp@gmail.com', '12345678', 'Albanie', 'lkjndkvdksk', 'Albanie', 'Albanie', 'images/57ce91bfa72e2.jpg', '', '2004', 'Belgique', 'll,lk,noln', 'math', 'Tr&eacute;s bien', '', '2016-09-06 09:51:59', '$2y$10$vuQOAq4LLnuRNOYxX0mbBeKnqVVsrF72Q3zP1iwleYmI4xQx.uLC6', '444', '', 'jbikb', 'Bien', 2000, 'Azerbaidjan', 'jhbhuv', 'kjiu', 'images/57ce91bfa7a9c.jpg', '4967NK0E', 'Abomey', 'images/57ce91bfa8628.jpg', '121213265646846', 'ksjfvkd', 'images/57ce91bfa8269.jpg', '', '', 0000, '', '', '', '', '', '0'),
(114, 'vlfvkfv', 'Lemine', 'fvfvvcvvfvf', 'Mademoiselle', 'DUT 2', 'BANQUE FINANCE ASSURANCE', 3, 2, 1963, 'Albanie', 'jknbbkjbk', 'vdflvnfvkn', 'Autriche', 'elwaghefmanb@gmail.com', 'elwaghefmanb@gmail.com', '54554841', 'Bahrein', 'Jemal', 'Bahrein', 'Bahrein', 'images/57ce92b98cdf8.jpg', '', '2004', 'Algerie', 'Kaedi', 'jojoj', 'Bien', '', '2016-09-06 09:56:09', '$2y$10$jHBAyKJfjGpMmIrlj72cbuDgNkB0vz78xjCvPJfS.OsdwrQyyqb8S', '111', '', 'jbikb', 'Assez Bien', 2005, 'Albanie', 'jhbhuv', 'kjb', 'images/57ce92b98d1c3.jpg', 'FWHIVWLE', 'Porto-Novo', 'images/57ce92b98e189.jpg', '121213265646846', 'BCM', 'images/57ce92b98dd03.jpg', 'jhbbh', 'Tr&eacute;s bien', 0000, 'Angola', ',jhghgjhgj', 'kjhjjkjh', 'images/57ce92b98d750.jpg', '', '0'),
(115, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-09-07 09:12:30', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', 'hello', 'three'),
(116, '', '', '', '', '', '', 0, 0, 0000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-09-07 09:20:23', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', 'administrateur', '$2y$10$FWwx');

-- --------------------------------------------------------

--
-- Structure de la table `postbac`
--

CREATE TABLE `postbac` (
  `id` int(11) NOT NULL,
  `postbac_mention` varchar(55) NOT NULL,
  `postbac_year` year(4) NOT NULL,
  `postbac_city` varchar(50) NOT NULL,
  `postbac_department` varchar(50) NOT NULL,
  `postbac_country` varchar(55) NOT NULL,
  `postbac_serie` varchar(55) NOT NULL,
  `postbac_chemin` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `postbac`
--

INSERT INTO `postbac` (`id`, `postbac_mention`, `postbac_year`, `postbac_city`, `postbac_department`, `postbac_country`, `postbac_serie`, `postbac_chemin`) VALUES
(1, 'Tr&eacute;s bien', 0000, 'kjiu', 'jhbhuv', '0', 'jbikb', ''),
(2, 'Bien', 0000, 'kjj', 'kjhkj', '0', 'kjhik', ''),
(3, 'Bien', 0000, 'kjj', 'kjhkj', '0', 'kjhik', ''),
(4, 'Bien', 2000, 'kjb', 'jhbhuv', '0', 'jbikb', ''),
(5, 'Tr&eacute;s bien', 0000, 'kjiu', 'jhbhuv', 'Afrique_du_sud', 'jbikb', ''),
(6, 'Bien', 2000, 'kjb', 'kj', 'Afrique_Centrale', 'jbikb', ''),
(7, 'Bien', 2003, 'kjiu', 'jhbhuv', 'Andorre', 'jbikb', ''),
(8, 'Bien', 2005, 'kjiu', 'jhbhuv', 'Albanie', 'kjhik', ''),
(9, 'Bien', 2005, 'kjiu', 'jhbhuv', 'Albanie', 'kjhik', ''),
(10, 'Tr&eacute;s bien', 2000, 'kjiu', 'jhbhuv', 'Afghanistan', 'jbikb', 'images/57b71ebc5cfcc.jpg'),
(11, 'Tr&eacute;s bien', 2005, 'Paris', 'Paris', 'France', 'Mathématique', 'images/57b72454e5df8.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identifiant_admin` (`identifiant_admin`);

--
-- Index pour la table `bac`
--
ALTER TABLE `bac`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `postbac`
--
ALTER TABLE `postbac`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `bac`
--
ALTER TABLE `bac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT pour la table `postbac`
--
ALTER TABLE `postbac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
