-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 24 jan. 2023 à 02:38
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cureco`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_c` int(11) NOT NULL,
  `name_categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_c`, `name_categorie`) VALUES
(15, 'Head pain'),
(17, 'Médicaments'),
(18, 'Diabetes');

-- --------------------------------------------------------

--
-- Structure de la table `prodcts`
--

CREATE TABLE `prodcts` (
  `id_prodct` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `date_dajout` date NOT NULL,
  `libelle` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prodcts`
--

INSERT INTO `prodcts` (`id_prodct`, `prix`, `image`, `name`, `id_category`, `date_dajout`, `libelle`) VALUES
(20, 22, '63cf1c2b166ef.jpg', 'Médicaments', 15, '2023-01-24', 'Ce livre est destiné aux étudiants en pharmacie'),
(21, 40, '63cf23a247f2b.jpg', 'Magnien', 15, '2023-01-24', 'Magnien Medidose Classic Weekly Pills '),
(23, 34, '63cf284f08801.png', 'Broché', 17, '2023-01-24', ' ceux désireux de préparer le concours de ');

-- --------------------------------------------------------

--
-- Structure de la table `pr_user`
--

CREATE TABLE `pr_user` (
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name`, `role`, `email`, `password`) VALUES
(0, '[value-2]', 1, 'salah@gmail.com', '123'),
(3, 'salaheddine', 1, 'belfirme@gmail.com', 'SALah123@2001');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `prodcts`
--
ALTER TABLE `prodcts`
  ADD PRIMARY KEY (`id_prodct`),
  ADD KEY `fk_category` (`id_category`);

--
-- Index pour la table `pr_user`
--
ALTER TABLE `pr_user`
  ADD KEY `fk_product` (`id_product`),
  ADD KEY `fk_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `prodcts`
--
ALTER TABLE `prodcts`
  MODIFY `id_prodct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `prodcts`
--
ALTER TABLE `prodcts`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`id_category`) REFERENCES `categorie` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `pr_user`
--
ALTER TABLE `pr_user`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`id_product`) REFERENCES `prodcts` (`id_prodct`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
