CREATE DATABASE IF NOT EXISTS `simplon-100-ex1-gra` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `simplon-100-ex1-gra`;

CREATE TABLE auteur (
  id int(11) NOT NULL auto_increment,
  numero_SIRET varchar(20) NOT NULL,
  nom_plume varchar(100) NOT NULL,
  ADD PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE livre (
  id int(11) NOT NULL auto_increment,
  ISBN varchar(50) NOT NULL,
  titre varchar(200) NOT NULL,
  date_publication date NOT NULL,
  id_auteur int(11) NOT NULL,
  ADD PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE auteur
  ADD UNIQUE KEY auteur_numeroSIRET_unique (numero_SIRET);

ALTER TABLE livre
  ADD UNIQUE KEY LIVRE_ISBN_UNIQUE (ISBN),
  ADD CONSTRAINT fk_livre_auteur FOREIGN KEY (id_auteur) REFERENCES auteur (id);

