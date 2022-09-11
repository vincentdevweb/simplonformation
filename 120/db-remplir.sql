INSERT INTO `type_de_navire` (`id`, `code`, `libelle`,`type_navire`) VALUES 
('1', '001', 'FERRY_COSTA','FERRY'),('2', '002', 'CARGO_COSTA','CARGO');

INSERT INTO `port` (`id`, `ville`, `lieu`) VALUES 
('1', 'Marseille', 'continent'),('2', 'Toulon', 'continent'),('3', 'Nice', 'continent'), ('4', 'Ajaccio', 'corse'), ('5', 'Bastia', 'corse'), ('6', 'Ile Rousse', 'corse'), ('7', 'Porto Vecchio', 'corse');

INSERT INTO `traverser` (`id`, `numero`, `id_port_depart`, `id_port_arriver`) VALUES 
('1', '20220908', '1', '4');

INSERT INTO `navire` (`id`, `nom`, `id_traverser`, `id_type_de_navire`) VALUES ('1', 'COSTA', '1', '1');

INSERT INTO `activiter` (`id`, `type_activiter`, `code`, `libelle`) VALUES
 ('1', 'ammarage', '001', 'PONT - ammarage'),
 ('2', 'accueil du public', '002', 'PONT - accueil du public'),
 ('3', 'machine', '003', 'MACHINE - machine'),
 ('4', 'blanchisserie', '004', 'HOTELLERIE - blanchisserie'),
 ('5', 'ménage', '005', 'HOTELLERIE - ménage'),
 ('6', 'mise en place', '006', 'RESTAURATION - mise en place'),
 ('7', 'service', '007', 'RESTAURATION - service'),
 ('8', 'cuisine', '008', 'RESTAURATION - cuisine');

INSERT INTO `service` (`id`, `type_service`, `id_activiter`, `code`, `libelle`) VALUES
 ('1', 'PONT', '1', 'PONT - 001', 'amarage'), ('2', 'PONT', '2', 'PONT - 002', 'accueil du public');