# Expression de besoin

**Objet** planning et paie des marins de la société maritime CorsicoLinéo

--

Les navires de la société sont des cargos ou des ferry (les cargos ne transportent que des marchandises, les ferrys transportent des passagers et des marchandises).

Les navires de la flotte sont à ce jour :
- Bonaparte (ferry)
- Monte Cinto (ferry)
- Paglia Orba (ferry)
- Stena Carrier (cargo)

A bord d'un bateau, le travail des marins est réparti en services.
 Il existe 4 services :
 - Pont 
 - Machine
 - Hotellerie
 - Restauration

Sur un cargo, il n'y a pas de service d'hotellerie (il n'y a pas de passagers).

La société couvre un réseau de ports, reliés par des lignes de navigation.

Les ports désservis sont actuellement :
- Marseille (continent)
- Toulon (continent)
- Nice (continent)
- Ajaccio (corse)
- Bastia (corse)
- Ile Rousse (corse)
- Porto Vecchio (corse)

Les traversées ne sont font qu'entre le Continent et la Corse.

A l'embarquement de chaque traversée, un planning est affiché dans chaque service.

Dans le planning, les marins sont : affectés à un service, sur une période de la journée, pour effectuer une actitivté  choisie parmi :
- pont
    - ammarage
    - accueil du public
- machine
    - machine
- hotellerie
    - blanchisserie
    - ménage
- restauration
    - mise en place
    - service
    - cuisine

### Question bonus

Lister les activités effectuées par chaque marin, groupées par service.

### Question bonus++

En fin de mois, pour effectuer la paie de chaque marin, nous avons besoin de connaitre combien de temps chaque marin a passé dans chaque service et dans chaque activité.
