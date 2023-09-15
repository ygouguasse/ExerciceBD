/* Ne pas oublier de mettre ENGINE=INNODB pour chaque table pour que les références fonctionnent */

CREATE DATABASE  IF NOT EXISTS `bd_membre` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bd_membre`;

DROP TABLE IF EXISTS `membres`;
CREATE TABLE `membres` (
    `id` int NOT NULL AUTO_INCREMENT,
    `nom_utilisateur` varchar(45) NOT NULL,
    `mot_de_passe` varchar(45) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `membres_nom_utilisateur_UNIQUE` (`nom_utilisateur`)
) ENGINE=InnoDB;

INSERT INTO `membres` VALUES
(1,'admin','admin'),
(2,'html','<html>');
