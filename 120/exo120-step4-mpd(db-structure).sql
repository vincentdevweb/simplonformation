start TRANSACTION;

DROP DATABASE if exists `simplon-120-ex1-a`;
 
CREATE DATABASE `simplon-120-ex1-a` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `simplon-120-ex1-a`;

CREATE TABLE navire (
  id INT UNSIGNED NOT NULL auto_increment ,
  nom varchar(100) NOT NULL,
  id_traverser INT UNSIGNED NOT NULL,
  id_type_de_navire INT UNSIGNED NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE traverser (
  id INT UNSIGNED NOT NULL auto_increment ,
  numero int unsigned NOT NULL,
  id_port_depart INT UNSIGNED NOT NULL,
  id_port_arriver INT UNSIGNED NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE port (
  id INT UNSIGNED NOT NULL auto_increment ,
  ville varchar(100) NOT NULL,
  lieu varchar(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE planning (
  id INT UNSIGNED NOT NULL auto_increment,
  id_traverser INT UNSIGNED NOT NULL,
  PRIMARY KEY (id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE type_de_navire (
  id INT UNSIGNED NOT NULL auto_increment ,
  code varchar(100) NOT NULL,
  libelle varchar(100) NOT NULL,
  type_navire varchar(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE marin (
  id INT UNSIGNED NOT NULL auto_increment,
  nom varchar(50) NOT NULL,
  prenom varchar(200) NOT NULL,
  num_secu INT UNSIGNED NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE activiter (
  id INT UNSIGNED NOT NULL auto_increment,
  type_activiter varchar(200) NOT NULL,
  code varchar(100) NOT NULL,
  libelle varchar(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE service (
  id INT UNSIGNED NOT NULL auto_increment,
  type_service varchar(200) NOT NULL,
  id_activiter INT UNSIGNED NOT NULL,
  code varchar(100) NOT NULL,
  libelle varchar(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE planning_mm (
  h_debut INT UNSIGNED NOT NULL,
  h_fin INT UNSIGNED NOT NULL,
  id_planning INT UNSIGNED NOT NULL,
  id_marin INT UNSIGNED NOT NULL,
  id_activiter INT UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE service_mm (
  id_type_de_navire INT UNSIGNED NOT NULL,
  id_service INT UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE navire
  ADD UNIQUE KEY navire_UNIQUE (nom),
  ADD CONSTRAINT fk_navire_traverser_id FOREIGN KEY (id_traverser) REFERENCES traverser (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT fk_navire_type_de_navire_id FOREIGN KEY (id_type_de_navire) REFERENCES type_de_navire (id) ON DELETE CASCADE ON UPDATE CASCADE;
  
ALTER TABLE type_de_navire
  ADD UNIQUE KEY type_de_navire_code (code);

ALTER TABLE traverser
  ADD UNIQUE KEY traverser_UNIQUE (numero),
  ADD CONSTRAINT fk_traverser_depart_traverser_id FOREIGN KEY (id_port_depart) REFERENCES port (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT fk_traverser_arriver_traverser_id FOREIGN KEY (id_port_arriver) REFERENCES port (id) ON DELETE CASCADE ON UPDATE CASCADE;
  
ALTER TABLE port
  ADD UNIQUE KEY port_UNIQUE (ville);
  
ALTER TABLE planning
  ADD UNIQUE KEY (id_traverser),
  ADD CONSTRAINT fk_planning_traverser_id FOREIGN KEY (id_traverser) REFERENCES traverser (id) ON DELETE CASCADE ON UPDATE CASCADE;
  
ALTER TABLE planning_mm
  ADD CONSTRAINT fk_planning_mm_planning_id FOREIGN KEY (id_planning) REFERENCES planning (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT fk_planning_mm_activiter_id FOREIGN KEY (id_activiter) REFERENCES activiter (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT fk_planning_mm_marin_id FOREIGN KEY (id_marin) REFERENCES marin (id) ON DELETE CASCADE ON UPDATE CASCADE;
  
ALTER TABLE marin
  ADD UNIQUE KEY marin_UNIQUE (num_secu); 
  
ALTER TABLE activiter
  ADD UNIQUE KEY activiter_UNIQUE (code);
  
ALTER TABLE service
  ADD UNIQUE KEY service_UNIQUE (code),
  ADD CONSTRAINT fk_service_activiter_id FOREIGN KEY (id_activiter) REFERENCES activiter (id) ON DELETE CASCADE ON UPDATE CASCADE;
  
ALTER TABLE service_mm
  ADD CONSTRAINT fk_service_mm_type_de_navire_id FOREIGN KEY (id_type_de_navire) REFERENCES type_de_navire (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT fk_service_mm_service_id FOREIGN KEY (id_service) REFERENCES service (id) ON DELETE CASCADE ON UPDATE CASCADE;
  
COMMIT;
