-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : lun. 20 déc. 2021 à 20:48
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

CREATE TABLE `acteurs` (
  `id` int NOT NULL,
  `nomActeur` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`id`, `nomActeur`, `prenom`) VALUES
(1, 'Di Caprio', 'Leonardo'),
(2, 'Thomassin', 'Jolan'),
(3, 'Gibson', 'Mel'),
(4, 'Swamp', 'Shrek'),
(5, 'Seddik', 'Mehdi'),
(9, 'Ilette', 'Samitraille'),
(10, 'Auboure', 'Toma'),
(11, 'Nom', 'Prenom'),
(21, 'Rémy', 'David'),
(22, 'Oui oui', 'Non non'),
(23, 'Baton', 'Johan');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id` int NOT NULL,
  `nom` varchar(200) NOT NULL,
  `annee` int NOT NULL,
  `score` float NOT NULL,
  `nbVotants` int NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `nom`, `annee`, `score`, `nbVotants`, `image`) VALUES
(1, 'Star Wars', 1977, 8.9, 14235, '../view_HTML/images/61bf207c9cdd73.29672587.png'),
(2, 'Pulp Fiction', 1994, 8.4, 11693, '../view_HTML/images/61b99164d171d7.52547357.jpg'),
(3, 'Blade Runner', 1982, 8.6, 8665, ''),
(4, 'Titanic', 1997, 9.2, 8129, ''),
(5, 'Braveheart', 1995, 8.4, 8074, ''),
(6, 'Empire Strikes Back, The', 1980, 8.5, 8050, ''),
(7, 'Shawshank Redemption, The', 1994, 8.8, 7850, ''),
(8, 'Independence Day', 1996, 7, 7138, ''),
(9, 'Usual Suspects, The', 1995, 8.7, 6981, ''),
(10, 'Raiders of the Lost Ark', 1981, 8.4, 6488, ''),
(11, '2001: A Space Odyssey', 1968, 8.4, 6413, ''),
(12, 'Forrest Gump', 1994, 7.8, 6269, '../view_HTML/images/61b990f1bfc2d1.22192207.jpg'),
(13, 'Aliens', 1986, 8.3, 5811, ''),
(14, 'Silence of the Lambs, The', 1991, 8.3, 5715, ''),
(15, 'Princess Bride, The', 1987, 8.4, 5522, ''),
(16, 'Terminator 2: Judgment Day', 1991, 8, 5513, ''),
(17, 'Casablanca', 1942, 8.7, 5489, ''),
(18, 'Monty Python and the Holy Grail', 1974, 8.4, 5319, ''),
(19, 'Star Trek: First Contact', 1996, 8.2, 5298, ''),
(20, 'Fargo', 1996, 8.2, 5293, ''),
(21, 'Twelve Monkeys', 1995, 8, 5287, ''),
(22, 'Trainspotting', 1996, 8.1, 5233, ''),
(23, 'Godfather, The', 1972, 8.7, 5211, ''),
(24, 'Se7en', 1995, 8.1, 5107, ''),
(25, 'Back to the Future', 1985, 7.8, 5103, ''),
(26, 'Rock, The', 1996, 8, 4938, ''),
(27, 'Reservoir Dogs', 1992, 8.3, 4861, ''),
(28, 'Apocalypse Now', 1979, 8.3, 4860, ''),
(30, 'Apollo 13', 1995, 7.8, 4778, ''),
(31, 'Clockwork Orange, A', 1971, 8.4, 4767, ''),
(32, 'Jurassic Park', 1993, 7.4, 4707, ''),
(33, 'English Patient, The', 1996, 8.1, 4689, ''),
(34, 'One Flew Over the Cuckoo\'s Nest', 1975, 8.5, 4545, ''),
(39, 'Terminator, The', 1984, 7.8, 4225, ''),
(48, 'True Lies', 1994, 7.3, 3601, ''),
(94, 'Total Recall', 1990, 7.1, 2305, ''),
(180, 'Predator', 1987, 7.2, 1604, ''),
(263, 'Conan the Barbarian', 1981, 6.9, 1271, ''),
(321, 'Twins', 1988, 6.3, 1126, ''),
(334, 'Last Action Hero', 1993, 5.9, 1107, ''),
(410, 'Dave', 1993, 7.4, 962, ''),
(440, 'Kindergarten Cop', 1990, 6.2, 894, ''),
(471, 'Running Man, The', 1987, 6.3, 856, ''),
(629, 'Commando', 1985, 6.1, 673, ''),
(746, 'Conan the Destroyer', 1984, 5.4, 542, ''),
(793, 'Money Pit, The', 1986, 5.8, 482, ''),
(910, 'Brady Bunch Movie, The', 1995, 6.3, 412, ''),
(932, 'Red Heat', 1988, 5.8, 402, ''),
(960, 'Terminator 2: 3-D', 1996, 8.7, 384, ''),
(975, 'Night Shift', 1982, 6.6, 377, ''),
(1106, 'Junior', 1994, 5.9, 329, ''),
(1339, 'Jingle All the Way', 1996, 6, 262, ''),
(1353, 'Outrageous Fortune', 1987, 6.1, 258, ''),
(1551, 'Raw Deal', 1986, 5, 215, ''),
(1622, 'Batman and Robin', 1997, 3.9, 1925, ''),
(1644, 'Red Sonja', 1985, 4.6, 404, ''),
(1646, 'Jurasicqdfazdf', 0, 4.5, 5, ''),
(1647, 'Marine vs Zemmour', 0, 9.9, 5605, ''),
(1648, 'Marine vs Zemmour 2', 0, 9.9, 5604, ''),
(1649, 'Marine vs Zemmour 2', 0, 9.9, 5604, ''),
(1650, 'Jurasic', 0, 0, 0, ''),
(1660, 'TESFGDVZGD', 5252, 2.5, 55, ''),
(4627, 'Test5', 400, 1.1, 500, ''),
(4649, 'TEST', 21341, 131231, 0, ''),
(4650, 'Permis', 2021, 10, 0, ''),
(4651, 'Permis', 2021, 10, 0, ''),
(4652, 'Permis', 2021, 10, 0, ''),
(4653, 'Kuzu no Honkai', 2017, 10, 0, '../view_HTML/images/61b9aa459eb4a6.75168792.jpg'),
(4654, 'The Quintessential Quintuplets', 2021, 10, 0, '../view_HTML/images/61b9c0bf85bc81.36948513.jpg'),
(4655, 'Thomate', 2022, 10, 0, ''),
(4656, 'Samedi', 2022, 3, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `jointure`
--

CREATE TABLE `jointure` (
  `film_id` int NOT NULL,
  `acteurs_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `jointure`
--

INSERT INTO `jointure` (`film_id`, `acteurs_id`) VALUES
(1648, 2),
(11, 2),
(263, 1),
(263, 3),
(1622, 2),
(4627, 2),
(1, 1),
(4649, 10),
(4650, 11),
(4651, 11),
(4652, 11),
(1, 2),
(1, 10),
(4653, 21),
(4654, 21),
(4655, 10),
(4656, 23);

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int NOT NULL,
  `login` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`id`, `login`, `pwd`, `email`, `role`) VALUES
(1, 'rémy', 'php', 'user@gmail.com', 'user'),
(2, 'pascal', 'php2', 'admin@gmail.com', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteurs`
--
ALTER TABLE `acteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jointure`
--
ALTER TABLE `jointure`
  ADD KEY `etrangere_film` (`film_id`),
  ADD KEY `etrangere_acteurs` (`acteurs_id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteurs`
--
ALTER TABLE `acteurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4657;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jointure`
--
ALTER TABLE `jointure`
  ADD CONSTRAINT `etrangere_acteurs` FOREIGN KEY (`acteurs_id`) REFERENCES `acteurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etrangere_film` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
