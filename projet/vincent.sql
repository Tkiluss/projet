-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 05 oct. 2018 à 15:03
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vincent`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(100) NOT NULL,
  `prenom_user` varchar(100) NOT NULL,
  `age_user` int(3) NOT NULL,
  `mail_user` varchar(55) NOT NULL,
  `mdp_user` varchar(255) NOT NULL,
  `genre_user` varchar(5) DEFAULT NULL,
  `id_profil` int(11) NOT NULL,
  `sortie` tinyint(1) NOT NULL,
  `cercle_amis` tinyint(1) NOT NULL,
  `socialisation` tinyint(1) NOT NULL,
  `situation` varchar(30) NOT NULL,
  `etat_lieux` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `age_user`, `mail_user`, `mdp_user`, `genre_user`, `id_profil`, `sortie`, `cercle_amis`, `socialisation`, `situation`, `etat_lieux`) VALUES
(1, 'vincent', 'vincent', 24, 'olo@olo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'homme', 0, 3, 3, 3, 'celibataire', 'lieux_propre'),
(2, 'francois', 'francois', 55, 'vincent@vincent.com', 'fc1200c7a7aa52109d762a9f005b149abef01479', 'homme', 0, 1, 2, 1, 'celibataire', 'lieux_sale'),
(3, 'pupute', 'deluxe', 55, 'lol@kool.com', 'fc1200c7a7aa52109d762a9f005b149abef01479', 'homme', 0, 3, 3, 3, 'celibataire', 'lieux_moyennement_propre'),
(4, 'Pute', 'yrz-\'uy', 55, 'aaa@aa.com', 'fc1200c7a7aa52109d762a9f005b149abef01479', 'homme', 0, 3, 3, 3, 'celibataire', 'lieux_sale'),
(5, 'dytjdy', 'ejejeutj', 99, 'ooo@oo.com', 'eaa67f3a93d0acb08d8a5e8ff9866f51983b3c3b', 'homme', 0, 0, 0, 0, '', ''),
(6, 'admin', 'admin', 155, 'admin@admin.fr', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'homme', 0, 3, 3, 3, 'couple', 'lieux_sale'),
(7, 'oho', 'oho', 44, 'oh@oh.com', 'fc1200c7a7aa52109d762a9f005b149abef01479', 'homme', 0, 0, 0, 0, '', ''),
(8, 'oho', 'ihi', 55, 'oooo@ooo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'homme', 0, 1, 1, 1, 'celibataire', 'lieux_moyennement_propre'),
(9, 'oho', 'ihi', 77, 'oo@oo.fr', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'homme', 0, 1, 2, 1, 'couple', 'lieux_propre'),
(10, 'jm', 'jm', 1000, 'jm@jm.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'homme', 0, 3, 3, 3, 'couple', 'lieux_sale'),
(11, 'lulu', 'lolo', 8888, 'lolo@lolo.fr', '51eac6b471a284d3341d8c0c63d0f1a286262a18', 'homme', 0, 1, 1, 1, 'couple', 'lieux_propre'),
(12, 'lulu', 'berlu', 5, 'aaa@aaa.fr', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'homme', 0, 1, 1, 1, 'celibataire', 'lieux_sale'),
(13, 'lulu', 'berlu', 5, 'lolo@lolo.fr', '9a900f538965a426994e1e90600920aff0b4e8d2', 'homme', 0, 1, 2, 1, 'couple', 'lieux_moyennement_propre'),
(14, 'lulu', 'lolo', 5, 'jm@jm.com', '7a38d8cbd20d9932ba948efaa364bb62651d5ad4', 'femme', 0, 1, 2, 1, 'couple', 'lieux_propre'),
(15, 'lulu', 'lolo', 5, 'admin@admin.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'homme', 0, 2, 1, 2, 'couple', 'lieux_sale'),
(16, 'lulu', 'berlu', 8888, 'aaa@aaa.fr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'homme', 0, 1, 1, 1, 'celibataire', 'lieux_sale');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
