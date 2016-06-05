-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 04 Juin 2016 à 18:06
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `colibri`
--

-- --------------------------------------------------------

--
-- Structure de la table `AMAP`
--

CREATE TABLE IF NOT EXISTS `AMAP` (
  `idAMAP` int(11) NOT NULL,
  `nomAMAP` text NOT NULL,
  `date_creation` date DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `MIRAMAP_idMIRAMAP` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `AMAP`
--

INSERT INTO `AMAP` (`idAMAP`, `nomAMAP`, `date_creation`, `adresse`, `telephone`, `mail`, `MIRAMAP_idMIRAMAP`) VALUES
(1, 'Ile de France', '2016-03-18', '43 boulevard de la seine', '0239029301', 'amap@cesi.fr', 1);

-- --------------------------------------------------------

--
-- Structure de la table `COMPOSER_DE`
--

CREATE TABLE IF NOT EXISTS `COMPOSER_DE` (
  `PANIER_idPANIER` int(11) NOT NULL,
  `PRODUIT_idProduit` int(11) NOT NULL,
  `quantité` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CONTRAT`
--

CREATE TABLE IF NOT EXISTS `CONTRAT` (
  `idCONTRAT` int(11) NOT NULL,
  `date_debut_contrat` date DEFAULT NULL,
  `date_fin_contrat` date DEFAULT NULL,
  `AMAP_idAMAP` int(11) NOT NULL,
  `SAISON_idSAISON` int(11) NOT NULL,
  `UTILISATEUR_idUTILISATEUR` int(11) NOT NULL,
  `UTILISATEUR_idUTILISATEUR1` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `CONTRAT`
--

INSERT INTO `CONTRAT` (`idCONTRAT`, `date_debut_contrat`, `date_fin_contrat`, `AMAP_idAMAP`, `SAISON_idSAISON`, `UTILISATEUR_idUTILISATEUR`, `UTILISATEUR_idUTILISATEUR1`) VALUES
(20, '2016-06-04', '2016-12-04', 1, 1, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `ENTREPOT_REGIONAL`
--

CREATE TABLE IF NOT EXISTS `ENTREPOT_REGIONAL` (
  `idENTREPOT_REGIONAL` int(11) NOT NULL,
  `nom_entrepot_regional` varchar(45) DEFAULT NULL,
  `adresse_entrepot_regional` varchar(45) DEFAULT NULL,
  `telephone_entrepot_regional` varchar(45) DEFAULT NULL,
  `VILLE_idVILLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `IDENTITE_BANCAIRE`
--

CREATE TABLE IF NOT EXISTS `IDENTITE_BANCAIRE` (
  `idIDENTITE_BANCAIRE` int(11) NOT NULL,
  `numeroCarte` text,
  `dateExpiration` text NOT NULL,
  `ccv` text NOT NULL,
  `UTILISATEUR_idUTILISATEUR` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `IDENTITE_BANCAIRE`
--

INSERT INTO `IDENTITE_BANCAIRE` (`idIDENTITE_BANCAIRE`, `numeroCarte`, `dateExpiration`, `ccv`, `UTILISATEUR_idUTILISATEUR`) VALUES
(1, 'uiy', 'ghjj', 'gjhgjh', 1),
(2, '', '', '', 1),
(3, '', '', '', 1),
(4, '', '', '', 1),
(5, '', '', '', 1),
(6, '89779', '897798', '98789', 1),
(7, 'dzad', 'daz', 'daz', 1),
(8, 'JJKHK', 'KKH', 'KJHK', 1),
(9, 'jkbj', 'hkjj', 'kmh', 1),
(10, 'kl', 'ljklkj', 'lkjjk', 1),
(11, 'hi', 'uihiuhiuhiu', 'ih', 1),
(12, 'khjhjk', 'hjkh', 'kjhjk', 1),
(13, 'kjkjjk', 'hkhkj', 'jkhj', 1),
(14, 'hjkh', 'hkhjk', 'kjjkh', 1),
(15, 'sazdaz', 'azddaz', 'dazaz', 1),
(16, 'HJGGJJ', 'GHJGJ', 'JGHJ', 1),
(17, 'UIIUYUI', 'hiuyiyu', 'yuiu', 1),
(18, 'UHJJH', 'jjkhhj', 'hk', 1),
(19, 'fefze', 'dsfdsf', 'fdsfsdfsd', 1),
(20, 'dfscs', 'dsvs', 'vdd', 1),
(21, '', '', '', 1),
(22, '', '', '', 1),
(23, '', '', '', 1),
(24, 'd', 'zedzd', 'zdz', 1),
(25, '', '', '', 1),
(26, '', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `MAGASIN_LOCAL`
--

CREATE TABLE IF NOT EXISTS `MAGASIN_LOCAL` (
  `idMAGASIN_LOCAL` int(11) NOT NULL,
  `nom_magasin_local` varchar(45) DEFAULT NULL,
  `adresse_magasin_local` varchar(45) DEFAULT NULL,
  `telephone_magasin_local` varchar(45) DEFAULT NULL,
  `VILLE_idVILLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `MIRAMAP`
--

CREATE TABLE IF NOT EXISTS `MIRAMAP` (
  `idMIRAMAP` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `MIRAMAP`
--

INSERT INTO `MIRAMAP` (`idMIRAMAP`, `libelle`) VALUES
(1, 'MIRAMAP');

-- --------------------------------------------------------

--
-- Structure de la table `PANIER`
--

CREATE TABLE IF NOT EXISTS `PANIER` (
  `idPANIER` int(11) NOT NULL,
  `date_panier` date DEFAULT NULL,
  `lieu_panier` varchar(45) DEFAULT NULL,
  `TYPE_PANIER_idTYPE_PANIER` int(11) DEFAULT NULL,
  `CONTRAT_idCONTRAT` int(11) NOT NULL,
  `idConsomateur` int(11) NOT NULL,
  `idProducteur` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `absent` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `PANIER`
--

INSERT INTO `PANIER` (`idPANIER`, `date_panier`, `lieu_panier`, `TYPE_PANIER_idTYPE_PANIER`, `CONTRAT_idCONTRAT`, `idConsomateur`, `idProducteur`, `prix`, `absent`) VALUES
(21, NULL, NULL, NULL, 20, 1, 3, 14, 0);

-- --------------------------------------------------------

--
-- Structure de la table `PRODUIT`
--

CREATE TABLE IF NOT EXISTS `PRODUIT` (
  `idProduit` int(11) NOT NULL,
  `libelle_produit` varchar(45) DEFAULT NULL,
  `temporaire` tinyint(1) DEFAULT NULL,
  `permanent` tinyint(1) DEFAULT NULL,
  `TYPE_PRODUIT_idTYPE_PRODUIT` int(11) NOT NULL,
  `SAISON_idSAISON` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `image_mini` text,
  `image` text NOT NULL,
  `UTILISATEUR_idUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `PRODUIT`
--

INSERT INTO `PRODUIT` (`idProduit`, `libelle_produit`, `temporaire`, `permanent`, `TYPE_PRODUIT_idTYPE_PRODUIT`, `SAISON_idSAISON`, `prix`, `image_mini`, `image`, `UTILISATEUR_idUtilisateur`) VALUES
(1, 'Panier Légumes', NULL, NULL, 1, 1, 13, 'images/legumes12.png', 'images/legumes1.png', 3),
(2, 'Panier Fruits', NULL, NULL, 2, 1, 14, 'images/fruits12.jpg', 'images/fruits1.jpg', 3),
(5, 'Panier Viandes', NULL, NULL, 3, 1, 18, 'images/viandes12.jpg', 'images/viandes1.jpg', 3),
(6, 'Panier Lait', NULL, NULL, 4, 1, 21, 'images/lait2.jpg', 'images/lait.jpg', 3),
(7, 'Panier Oeufs', NULL, NULL, 5, 1, 23, 'images/oeufs2.jpg', 'images/oeufs.jpg', 3),
(8, 'Panier Légumes 2', NULL, NULL, 1, 1, 16, 'images/legumes22.png', 'images/legumes2.png', 3),
(9, 'Panier Fruits 2', NULL, NULL, 2, 1, 14, 'images/fruits22.jpg', 'images/fruits2.jpg', 3),
(10, 'Panier Viandes 2', NULL, NULL, 3, 1, 28, 'images/viandes22.jpg', 'images/viandes2.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `REGION`
--

CREATE TABLE IF NOT EXISTS `REGION` (
  `idREGION` int(11) NOT NULL,
  `libelle_region` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `REGION`
--

INSERT INTO `REGION` (`idREGION`, `libelle_region`) VALUES
(1, 'ile de france'),
(3, 'Basse normandie');

-- --------------------------------------------------------

--
-- Structure de la table `SAISON`
--

CREATE TABLE IF NOT EXISTS `SAISON` (
  `idSAISON` int(11) NOT NULL,
  `libelle_saison` varchar(45) DEFAULT NULL,
  `date_debut_saison` date DEFAULT NULL,
  `date_fin_saison` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `SAISON`
--

INSERT INTO `SAISON` (`idSAISON`, `libelle_saison`, `date_debut_saison`, `date_fin_saison`) VALUES
(1, 'Printemps', '2016-03-20', '2016-06-19'),
(2, 'Ete', '2016-06-20', '2016-09-21'),
(3, 'Automne', '2016-09-22', '2016-12-20'),
(4, 'Hiver', '2016-12-21', '2017-02-28');

-- --------------------------------------------------------

--
-- Structure de la table `SITE_DE_DISTRIBUTION`
--

CREATE TABLE IF NOT EXISTS `SITE_DE_DISTRIBUTION` (
  `idSITE_DE_DISTRIBUTION` int(11) NOT NULL,
  `nom_site_de_distribution` varchar(45) DEFAULT NULL,
  `adresse_site_de_distribution` varchar(45) DEFAULT NULL,
  `telephone_site_de_distribution` varchar(45) DEFAULT NULL,
  `VILLE_idVILLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `STOCKAGE_MAGASIN`
--

CREATE TABLE IF NOT EXISTS `STOCKAGE_MAGASIN` (
  `MAGASIN_LOCAL_idMAGASIN_LOCAL` int(11) NOT NULL,
  `PRODUIT_idProduit` int(11) NOT NULL,
  `quantite_stockage_magasin` int(11) DEFAULT NULL,
  `date_stockage_magasin` date DEFAULT NULL,
  `prix_stockage_magasin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `TYPE_PANIER`
--

CREATE TABLE IF NOT EXISTS `TYPE_PANIER` (
  `idTYPE_PANIER` int(11) NOT NULL,
  `libelle_type_panier` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `TYPE_PRODUIT`
--

CREATE TABLE IF NOT EXISTS `TYPE_PRODUIT` (
  `idTYPE_PRODUIT` int(11) NOT NULL,
  `libelle_type_produit` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `TYPE_PRODUIT`
--

INSERT INTO `TYPE_PRODUIT` (`idTYPE_PRODUIT`, `libelle_type_produit`) VALUES
(1, 'Légumes'),
(2, 'Fruits'),
(3, 'Viandes'),
(4, 'Lait'),
(5, 'Oeufs');

-- --------------------------------------------------------

--
-- Structure de la table `TYPE_UTILISATEUR`
--

CREATE TABLE IF NOT EXISTS `TYPE_UTILISATEUR` (
  `idTYPE_UTILISATEUR` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `TYPE_UTILISATEUR`
--

INSERT INTO `TYPE_UTILISATEUR` (`idTYPE_UTILISATEUR`, `libelle`) VALUES
(1, 'Consommateur'),
(2, 'Producteur'),
(3, 'Administrateur'),
(4, 'Responsable Amap');

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

CREATE TABLE IF NOT EXISTS `UTILISATEUR` (
  `idUTILISATEUR` int(11) NOT NULL,
  `nom_utilisateur` varchar(45) DEFAULT NULL,
  `prenom_utilisateur` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `TYPE_UTILISATEUR_idTYPE_UTILISATEUR` int(11) DEFAULT NULL,
  `AMAP_idAMAP` int(11) DEFAULT NULL,
  `VILLE_idVILLE` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `UTILISATEUR`
--

INSERT INTO `UTILISATEUR` (`idUTILISATEUR`, `nom_utilisateur`, `prenom_utilisateur`, `adresse`, `mail`, `password`, `TYPE_UTILISATEUR_idTYPE_UTILISATEUR`, `AMAP_idAMAP`, `VILLE_idVILLE`) VALUES
(1, 'matthias', 'lecomte', 'szsz', 'test', 'test', 1, 1, 3),
(2, 'admin', 'admin', 'admin', 'admin', 'admin', 3, 1, 3),
(3, 'producteur', 'producteur', 'producteur', 'producteur', 'producteur', 2, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `VILLE`
--

CREATE TABLE IF NOT EXISTS `VILLE` (
  `idVILLE` int(11) NOT NULL,
  `libelle_ville` varchar(45) DEFAULT NULL,
  `REGION_idREGION` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `VILLE`
--

INSERT INTO `VILLE` (`idVILLE`, `libelle_ville`, `REGION_idREGION`) VALUES
(3, 'Nanterre', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `AMAP`
--
ALTER TABLE `AMAP`
  ADD PRIMARY KEY (`idAMAP`),
  ADD KEY `fk_AMAP_MIRAMAP1_idx` (`MIRAMAP_idMIRAMAP`);

--
-- Index pour la table `COMPOSER_DE`
--
ALTER TABLE `COMPOSER_DE`
  ADD PRIMARY KEY (`PANIER_idPANIER`,`PRODUIT_idProduit`),
  ADD KEY `fk_PANIER_has_PRODUIT_PRODUIT1_idx` (`PRODUIT_idProduit`),
  ADD KEY `fk_PANIER_has_PRODUIT_PANIER1_idx` (`PANIER_idPANIER`);

--
-- Index pour la table `CONTRAT`
--
ALTER TABLE `CONTRAT`
  ADD PRIMARY KEY (`idCONTRAT`),
  ADD KEY `fk_CONTRAT_AMAP1_idx` (`AMAP_idAMAP`),
  ADD KEY `fk_CONTRAT_SAISON1_idx` (`SAISON_idSAISON`),
  ADD KEY `fk_CONTRAT_UTILISATEUR1_idx` (`UTILISATEUR_idUTILISATEUR`),
  ADD KEY `fk_CONTRAT_UTILISATEUR2_idx` (`UTILISATEUR_idUTILISATEUR1`);

--
-- Index pour la table `ENTREPOT_REGIONAL`
--
ALTER TABLE `ENTREPOT_REGIONAL`
  ADD PRIMARY KEY (`idENTREPOT_REGIONAL`),
  ADD KEY `fk_ENTREPOT_REGIONAL_VILLE1_idx` (`VILLE_idVILLE`);

--
-- Index pour la table `IDENTITE_BANCAIRE`
--
ALTER TABLE `IDENTITE_BANCAIRE`
  ADD PRIMARY KEY (`idIDENTITE_BANCAIRE`),
  ADD KEY `fk_IDENTITE_BANCAIRE_UTILISATEUR1_idx` (`UTILISATEUR_idUTILISATEUR`);

--
-- Index pour la table `MAGASIN_LOCAL`
--
ALTER TABLE `MAGASIN_LOCAL`
  ADD PRIMARY KEY (`idMAGASIN_LOCAL`),
  ADD KEY `fk_MAGASIN_LOCAL_VILLE1_idx` (`VILLE_idVILLE`);

--
-- Index pour la table `MIRAMAP`
--
ALTER TABLE `MIRAMAP`
  ADD PRIMARY KEY (`idMIRAMAP`);

--
-- Index pour la table `PANIER`
--
ALTER TABLE `PANIER`
  ADD PRIMARY KEY (`idPANIER`),
  ADD KEY `fk_PANIER_TYPE_PANIER1_idx` (`TYPE_PANIER_idTYPE_PANIER`),
  ADD KEY `fk_PANIER_CONTRAT1_idx` (`CONTRAT_idCONTRAT`);

--
-- Index pour la table `PRODUIT`
--
ALTER TABLE `PRODUIT`
  ADD PRIMARY KEY (`idProduit`),
  ADD KEY `fk_PRODUIT_TYPE_PRODUIT1_idx` (`TYPE_PRODUIT_idTYPE_PRODUIT`),
  ADD KEY `fk_PRODUIT_SAISON1_idx` (`SAISON_idSAISON`);

--
-- Index pour la table `REGION`
--
ALTER TABLE `REGION`
  ADD PRIMARY KEY (`idREGION`);

--
-- Index pour la table `SAISON`
--
ALTER TABLE `SAISON`
  ADD PRIMARY KEY (`idSAISON`);

--
-- Index pour la table `SITE_DE_DISTRIBUTION`
--
ALTER TABLE `SITE_DE_DISTRIBUTION`
  ADD PRIMARY KEY (`idSITE_DE_DISTRIBUTION`),
  ADD KEY `fk_SITE_DE_DISTRIBUTION_VILLE1_idx` (`VILLE_idVILLE`);

--
-- Index pour la table `STOCKAGE_MAGASIN`
--
ALTER TABLE `STOCKAGE_MAGASIN`
  ADD PRIMARY KEY (`MAGASIN_LOCAL_idMAGASIN_LOCAL`,`PRODUIT_idProduit`),
  ADD KEY `fk_MAGASIN_LOCAL_has_PRODUIT_PRODUIT1_idx` (`PRODUIT_idProduit`),
  ADD KEY `fk_MAGASIN_LOCAL_has_PRODUIT_MAGASIN_LOCAL1_idx` (`MAGASIN_LOCAL_idMAGASIN_LOCAL`);

--
-- Index pour la table `TYPE_PANIER`
--
ALTER TABLE `TYPE_PANIER`
  ADD PRIMARY KEY (`idTYPE_PANIER`);

--
-- Index pour la table `TYPE_PRODUIT`
--
ALTER TABLE `TYPE_PRODUIT`
  ADD PRIMARY KEY (`idTYPE_PRODUIT`);

--
-- Index pour la table `TYPE_UTILISATEUR`
--
ALTER TABLE `TYPE_UTILISATEUR`
  ADD PRIMARY KEY (`idTYPE_UTILISATEUR`);

--
-- Index pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  ADD PRIMARY KEY (`idUTILISATEUR`),
  ADD KEY `fk_UTILISATEUR_TYPE_UTILISATEUR_idx` (`TYPE_UTILISATEUR_idTYPE_UTILISATEUR`),
  ADD KEY `fk_UTILISATEUR_AMAP1_idx` (`AMAP_idAMAP`),
  ADD KEY `fk_UTILISATEUR_VILLE1_idx` (`VILLE_idVILLE`);

--
-- Index pour la table `VILLE`
--
ALTER TABLE `VILLE`
  ADD PRIMARY KEY (`idVILLE`),
  ADD KEY `fk_VILLE_REGION1_idx` (`REGION_idREGION`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `AMAP`
--
ALTER TABLE `AMAP`
  MODIFY `idAMAP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `CONTRAT`
--
ALTER TABLE `CONTRAT`
  MODIFY `idCONTRAT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `ENTREPOT_REGIONAL`
--
ALTER TABLE `ENTREPOT_REGIONAL`
  MODIFY `idENTREPOT_REGIONAL` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `IDENTITE_BANCAIRE`
--
ALTER TABLE `IDENTITE_BANCAIRE`
  MODIFY `idIDENTITE_BANCAIRE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `MAGASIN_LOCAL`
--
ALTER TABLE `MAGASIN_LOCAL`
  MODIFY `idMAGASIN_LOCAL` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `MIRAMAP`
--
ALTER TABLE `MIRAMAP`
  MODIFY `idMIRAMAP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `PANIER`
--
ALTER TABLE `PANIER`
  MODIFY `idPANIER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `PRODUIT`
--
ALTER TABLE `PRODUIT`
  MODIFY `idProduit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `REGION`
--
ALTER TABLE `REGION`
  MODIFY `idREGION` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `SAISON`
--
ALTER TABLE `SAISON`
  MODIFY `idSAISON` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `SITE_DE_DISTRIBUTION`
--
ALTER TABLE `SITE_DE_DISTRIBUTION`
  MODIFY `idSITE_DE_DISTRIBUTION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `TYPE_PANIER`
--
ALTER TABLE `TYPE_PANIER`
  MODIFY `idTYPE_PANIER` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `TYPE_PRODUIT`
--
ALTER TABLE `TYPE_PRODUIT`
  MODIFY `idTYPE_PRODUIT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `TYPE_UTILISATEUR`
--
ALTER TABLE `TYPE_UTILISATEUR`
  MODIFY `idTYPE_UTILISATEUR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  MODIFY `idUTILISATEUR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `VILLE`
--
ALTER TABLE `VILLE`
  MODIFY `idVILLE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `AMAP`
--
ALTER TABLE `AMAP`
  ADD CONSTRAINT `fk_AMAP_MIRAMAP1` FOREIGN KEY (`MIRAMAP_idMIRAMAP`) REFERENCES `miramap` (`idMIRAMAP`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `COMPOSER_DE`
--
ALTER TABLE `COMPOSER_DE`
  ADD CONSTRAINT `fk_PANIER_has_PRODUIT_PANIER1` FOREIGN KEY (`PANIER_idPANIER`) REFERENCES `panier` (`idPANIER`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PANIER_has_PRODUIT_PRODUIT1` FOREIGN KEY (`PRODUIT_idProduit`) REFERENCES `produit` (`idProduit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `CONTRAT`
--
ALTER TABLE `CONTRAT`
  ADD CONSTRAINT `fk_CONTRAT_AMAP1` FOREIGN KEY (`AMAP_idAMAP`) REFERENCES `amap` (`idAMAP`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CONTRAT_SAISON1` FOREIGN KEY (`SAISON_idSAISON`) REFERENCES `saison` (`idSAISON`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CONTRAT_UTILISATEUR1` FOREIGN KEY (`UTILISATEUR_idUTILISATEUR`) REFERENCES `utilisateur` (`idUTILISATEUR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CONTRAT_UTILISATEUR2` FOREIGN KEY (`UTILISATEUR_idUTILISATEUR1`) REFERENCES `utilisateur` (`idUTILISATEUR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `ENTREPOT_REGIONAL`
--
ALTER TABLE `ENTREPOT_REGIONAL`
  ADD CONSTRAINT `fk_ENTREPOT_REGIONAL_VILLE1` FOREIGN KEY (`VILLE_idVILLE`) REFERENCES `ville` (`idVILLE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `IDENTITE_BANCAIRE`
--
ALTER TABLE `IDENTITE_BANCAIRE`
  ADD CONSTRAINT `fk_IDENTITE_BANCAIRE_UTILISATEUR1` FOREIGN KEY (`UTILISATEUR_idUTILISATEUR`) REFERENCES `utilisateur` (`idUTILISATEUR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `MAGASIN_LOCAL`
--
ALTER TABLE `MAGASIN_LOCAL`
  ADD CONSTRAINT `fk_MAGASIN_LOCAL_VILLE1` FOREIGN KEY (`VILLE_idVILLE`) REFERENCES `ville` (`idVILLE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `PANIER`
--
ALTER TABLE `PANIER`
  ADD CONSTRAINT `fk_PANIER_CONTRAT1` FOREIGN KEY (`CONTRAT_idCONTRAT`) REFERENCES `contrat` (`idCONTRAT`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PANIER_TYPE_PANIER1` FOREIGN KEY (`TYPE_PANIER_idTYPE_PANIER`) REFERENCES `type_panier` (`idTYPE_PANIER`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `PRODUIT`
--
ALTER TABLE `PRODUIT`
  ADD CONSTRAINT `fk_PRODUIT_SAISON1` FOREIGN KEY (`SAISON_idSAISON`) REFERENCES `saison` (`idSAISON`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PRODUIT_TYPE_PRODUIT1` FOREIGN KEY (`TYPE_PRODUIT_idTYPE_PRODUIT`) REFERENCES `type_produit` (`idTYPE_PRODUIT`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `SITE_DE_DISTRIBUTION`
--
ALTER TABLE `SITE_DE_DISTRIBUTION`
  ADD CONSTRAINT `fk_SITE_DE_DISTRIBUTION_VILLE1` FOREIGN KEY (`VILLE_idVILLE`) REFERENCES `ville` (`idVILLE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `STOCKAGE_MAGASIN`
--
ALTER TABLE `STOCKAGE_MAGASIN`
  ADD CONSTRAINT `fk_MAGASIN_LOCAL_has_PRODUIT_MAGASIN_LOCAL1` FOREIGN KEY (`MAGASIN_LOCAL_idMAGASIN_LOCAL`) REFERENCES `magasin_local` (`idMAGASIN_LOCAL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_MAGASIN_LOCAL_has_PRODUIT_PRODUIT1` FOREIGN KEY (`PRODUIT_idProduit`) REFERENCES `produit` (`idProduit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  ADD CONSTRAINT `fk_UTILISATEUR_AMAP1` FOREIGN KEY (`AMAP_idAMAP`) REFERENCES `amap` (`idAMAP`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_UTILISATEUR_TYPE_UTILISATEUR` FOREIGN KEY (`TYPE_UTILISATEUR_idTYPE_UTILISATEUR`) REFERENCES `type_utilisateur` (`idTYPE_UTILISATEUR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_UTILISATEUR_VILLE1` FOREIGN KEY (`VILLE_idVILLE`) REFERENCES `ville` (`idVILLE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `VILLE`
--
ALTER TABLE `VILLE`
  ADD CONSTRAINT `fk_VILLE_REGION1` FOREIGN KEY (`REGION_idREGION`) REFERENCES `region` (`idREGION`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
