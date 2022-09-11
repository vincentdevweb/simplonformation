start TRANSACTION;

DROP DATABASE if exists `simplon-100-ex2-a`;
 
CREATE DATABASE `simplon-100-ex2-a` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `simplon-100-ex2-a`;

CREATE TABLE client (
  id INT UNSIGNED NOT NULL auto_increment ,
  nom varchar(100) NOT NULL,
  pseudo varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  PRIMARY KEY (id),
  constraint email_unique unique (email),
  constraint pseudo_unique unique (pseudo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE type_de_carte (
  id INT UNSIGNED NOT NULL auto_increment,
  CODE varchar(50) NOT NULL,
  LIBELLE varchar(200) NOT NULL,
  id_client INT UNSIGNED NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE client
  ADD UNIQUE KEY client_nom (nom);

ALTER TABLE type_de_carte
  ADD UNIQUE KEY TYPE_de_carte_UNIQUE (CODE),
  ADD CONSTRAINT fk_type_de_carte__client FOREIGN KEY (id_client) REFERENCES client (id);
  
COMMIT;
