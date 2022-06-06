-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 08 Décembre 2021 à 15:49
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bddgsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `id` char(2) NOT NULL,
  `libelle` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etat`
--

INSERT INTO `etat` (`id`, `libelle`) VALUES
('CL', 'Saisie clôturée'),
('CR', 'Fiche créée, saisie en cours'),
('MP', 'Mise en paiement'),
('RB', 'Remboursée'),
('VA', 'Validée');

-- --------------------------------------------------------

--
-- Structure de la table `fichefrais`
--

CREATE TABLE `fichefrais` (
  `idVisiteur` int(11) NOT NULL,
  `mois` char(6) NOT NULL,
  `montantValide` decimal(10,2) DEFAULT NULL,
  `dateModif` date DEFAULT NULL,
  `idEtat` char(2) DEFAULT 'CR'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fraisforfait`
--

CREATE TABLE `fraisforfait` (
  `id` char(3) NOT NULL,
  `libelle` char(20) DEFAULT NULL,
  `montant` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fraisforfait`
--

INSERT INTO `fraisforfait` (`id`, `libelle`, `montant`) VALUES
('ETP', 'Forfait Etape', '110.00'),
('KM', 'Frais Kilométrique', '0.62'),
('NUI', 'Nuitée Hôtel', '80.00'),
('REP', 'Repas Restaurant', '25.00');

-- --------------------------------------------------------

--
-- Structure de la table `lignefraisforfait`
--

CREATE TABLE `lignefraisforfait` (
  `id` int(11) NOT NULL,
  `idVisiteur` varchar(5) NOT NULL,
  `mois` varchar(20) NOT NULL,
  `idFraisForfait` varchar(5) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lignefraisforfait`
--

INSERT INTO `lignefraisforfait` (`id`, `idVisiteur`, `mois`, `idFraisForfait`, `quantite`) VALUES
(21, '', '22', 'KM', 500),
(6, '1', '202111', 'ETP', 10),
(4, '1', '202111', 'KM', 670),
(5, '1', '202111', 'NUI', 4),
(13, '1', '202112', 'ETP', 600),
(14, '1', '202112', 'KM', 830),
(15, '1', '202112', 'NUI', 10),
(16, '1', '202112', 'REP', 2),
(23, '22', '', 'ETP', 1),
(20, '22', '202112', 'NUI', 5),
(22, '22', '202112', 'REP', 5),
(17, '4', '202112', 'KM', 400),
(19, '4', '202112', 'NUI', 2),
(18, '4', '202112', 'REP', 2),
(24, '52', '202112', 'KM', 800);

-- --------------------------------------------------------

--
-- Structure de la table `lignefraishorsforfait`
--

CREATE TABLE `lignefraishorsforfait` (
  `id` int(11) NOT NULL,
  `visiteur` int(11) NOT NULL,
  `prestation` varchar(200) NOT NULL,
  `datePresta` date NOT NULL,
  `montant` float(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lignefraishorsforfait`
--

INSERT INTO `lignefraishorsforfait` (`id`, `visiteur`, `prestation`, `datePresta`, `montant`) VALUES
(4, 1, 'Seminaire', '2021-12-08', 230.00),
(6, 1, 'Avion', '2021-12-08', 600.00),
(8, 1, 'Video', '2021-12-04', 100.00),
(9, 1, 'Pot', '2021-12-08', 100.00);

-- --------------------------------------------------------

--
-- Structure de la table `mois`
--

CREATE TABLE `mois` (
  `id` int(11) NOT NULL,
  `lemois` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `mois`
--

INSERT INTO `mois` (`id`, `lemois`) VALUES
(1, 'Janvier'),
(2, 'Février'),
(3, 'Mars'),
(4, 'Avril'),
(5, 'Mai'),
(6, 'Juin'),
(7, 'Juillet'),
(8, 'Août'),
(9, 'Septembre'),
(10, 'Octobre'),
(11, 'Novembre'),
(12, 'Décembre');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `libelle` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `libelle`) VALUES
(1, 'Visiteur'),
(2, 'Compta');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `idType` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `login`, `mdp`, `idType`) VALUES
(2, 'LAPOINTE', 'Claire', 'lapointe', '123456', 2),
(3, 'De', 'Philippe', 'pde', '123456', 1),
(4, 'Gest', 'Alain', 'agest', '123456', 1),
(5, 'Enault-Pascreau', 'Céline', 'cenault', '123456', 1),
(13, 'Bentot', 'Pascal', 'pbentot', '123456', 1),
(14, 'Daburon', 'François', 'fdaburon', '123456', 1),
(16, 'Bioret', 'Luc', 'lbioret', '123456', 1),
(17, 'Andre', 'David', 'dandre', '123456', 1),
(19, 'Bunisset', 'Francis', 'fbunisset', '123456', 1),
(21, 'Finck', 'Jacques', 'jfinck', '123456', 1),
(22, 'Desmarquest', 'Nathalie', 'ndesmarquest', '123456', 1),
(24, 'Desnost', 'Pierre', 'pdesnost', '123456', 1),
(25, 'Bunisset', 'Denise', 'dbunisset', '123456', 1),
(28, 'Cacheux', 'Bernard', 'bcacheux', '123456', 1),
(1, 'Cadic', 'Eric', 'eric', '123456', 1),
(39, 'Frémont', 'Fernande', 'ffremont', '123456', 1),
(49, 'Duncombe', 'Claude', 'cduncombe', '123456', 1),
(50, 'Clepkens', 'Christophe', 'cclepkens', '123456', 1),
(51, 'Debroise', 'Michel', 'mdebroise', '123456', 1),
(52, 'Eynde', 'Valérie', 'veynde', '123456', 1),
(54, 'Debelle', 'Michel', 'mdebelle', '123456', 1),
(55, 'Bedos', 'Christian', 'cbedos', '123456', 1),
(59, 'Cottin', 'Vincenne', 'vcottin', '123456', 1),
(93, 'Tusseau', 'Louis', 'ltusseau', '123456', 1),
(131, 'Villechalane', 'Louis', 'lville', '123456', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fichefrais`
--
ALTER TABLE `fichefrais`
  ADD PRIMARY KEY (`idVisiteur`,`mois`),
  ADD KEY `idEtat` (`idEtat`);

--
-- Index pour la table `lignefraisforfait`
--
ALTER TABLE `lignefraisforfait`
  ADD PRIMARY KEY (`idVisiteur`,`mois`,`idFraisForfait`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `lignefraishorsforfait`
--
ALTER TABLE `lignefraishorsforfait`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mois`
--
ALTER TABLE `mois`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `lignefraisforfait`
--
ALTER TABLE `lignefraisforfait`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `lignefraishorsforfait`
--
ALTER TABLE `lignefraishorsforfait`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
