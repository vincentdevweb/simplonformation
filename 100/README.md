100-build-database-c5-lvl2

28.08.2022

Analyser une expression de besoin pour créer le schéma de base de données correspondant en utilisant la méthode MERISE (Méthode d'Étude et de Rréalisation Informatique pour les Systèmes d'Entreprise).
Référentiels

Développeur web et web mobile
Ressource(s)
exo1-expression-de-besoin.txt
brief#100-exo1-GRA-20220829.zip
exo2-expression-de-besoin.txt
exo3-expression-de-besoin.txt
representation-graphique-d-un-MPD.jpg
Contexte du projet

Pour chaque expression de besoin fournie comme ressource,

passer par les étapes suivantes pour réaliser le schéma de base de données correspondant :

​

    Etape 1 Dictionnaire de données
    Etape 2 MCD (Modèle Conceptuel de Données)
    Etape 3 MLD (Modèle Logique de Données)
    Etape 4 MPD (Modèle Physique de Données)

​

Chaque étape est détaillée ci-après.

​

Etape 1 : Dictionnaire de données

​

Analyser l'expression de besoin et marquer 'les noms communs' (en bleu pourquoi pas) et les 'verbes d'action' (en rouge pourquoi pas non plus).

​

En MERISE, les 'noms communs' sont appelés Entité, et les 'verbes d'action' sont appelés Relation.

​

Trouver ensuite parmi les Attributs (les caractéristiques) de chaque Entité un identifiant fonctionnel (ce qui permet de le distinguer des ses semblables. Par exemple, pour un livre, l'ISBN est un très bon identifiant fonctionnel).

​

Réunir ces informations dans un fichier texte sur un format proche de :

Livre : ++isbn++, titre, date de parution (bien noter que l'identifiant fonctionnel est marqué, souligné par exemple)

​

L'objectif de cette première étape est de partager un lexique métier au sein d'une équipe composée d'informaticiens et de non-informaticiens (encore une fois, la communication est essentielle), pour valider que chaque mot utilisé est compris de la même façon par tous les membres de l'équipe.

​

PS : oui, les Relations ne figurent pas au dictionnaire de données; elles sont utilisées à l'étape suivante.

​

Etape 2 : MCD (Modèle Conceptuel de Données)

​

Un MCD est une représentation visuelle du Dictionnaire de Données et des Relations qui lient les Entités entre elles.

​

C'est toujours un outil de communication qui n'est pas réservé aux informaticiens, bien au contraire.

​

Il permet d'explorer des aspects de l'expression de besoin qui n'étaient pas forcément explicites.

Par exemple : un Auteur écrit des Livres, très bien, mais est-ce que qu'un Auteur peut être enregistré dans notre SI (Système d'Information) sans avoir encore écrit de Livre ? c'est une vraie question, il peut y avoir plusieurs réponses valables, et c'est une problématique métier avant d'être informatique.

​

Ces petites finesses qui précisent les Relations entre Entités sont primordiales; elles s'appellent des Cardinalités. (on parle des Cardinalités d'une Relation entre Entités).

​

Une Cardinalité a une valeur minimum (min) et une valeur maximum (max). Elle se note donc min-max.

    min prend ses valeurs parmi 0 ou 1
    max prend ses valeurs parmi 1 ou N

​

Dans l'exemple de l'Auteur et du Livre,

on pourrait dire :

​

    "un Auteur écrit au minimum 0 Livres et au maximum N Livres"
    "un Livre est écrit par au minimum 1 Auteur et au maximum 1 Auteur" (bien noter que c'est un choix de modélisation, un Livre pourrait tout à fait être écrit par plusieurs Auteurs)"

​

Une notation textuelle de cette Relation pourrait être :

Auteur---0-N---Ecrit---1-1---Livre

​

Une notation visuelle est toujours préférable pour la communication entre personnes.

Elle demande toutefois la maitrise d'un outil graphique qui survive au temps.

    un exemple utilisant l'outil de dessin vectoriel Inkscape est fourni comme ressource.
    un autre exemple utilisant l'outil de dessin en ligne 'draw.io' est aussi fourni (il propose d'importer/exporter la production au format .svg, mais le svg semble ne pas être 'standard').

​

En résumé, le MCD mobilise le Dictionnaire de Données, les Relations identifiées, précise les Cardinalités de chaque Relation entre Entités, et sans aborder aucune notion technique/informatique; il s'agit toujours d'un outil de communication et d'échange avec des personnes qui ne sont pas que des développeuses.

​

Etape 3 : MLD (Modèle Logique de Données)

​

Le MLD n'appartient plus aux outils de communication trans-compétences,

mais reste un outil d'échange d'informations entre techniciens.

​

Dans un MLD, on ne parle plus d'Entité mais de Table.

Une Table possède immédiatement un identifiant technique (différent de l'identifant fonctionnel) qui s'appelle une clé primaire (ou primary key, ou PK), et on utilise quasiment toujours 'id' comme nom de champ de primary key.

​

Dans un MLD, la notion de Relation n'existe plus.

Chaque Relation est traduite avec des références sur les clés primaires, qui sont appellées clés étrangères (ou foreign key, ou FK).

​

La règle de traduction est mécanique : prendre les Cardinalités max des 2 'pattes' de la Relation; c'est soit 1-N, soit N-N :

​

    1-N la clé primaire de la Table 'du côté de N' est référencée comme clé étrangère dans la Table 'du côté de 1'.

​

    N-N une nouvelle Table doit être créée (ça s'appelle une Table d'Association) qui référence les clés primaires des 2 Tables de part et d'autre de la Relation comme des clés étrangères. Cette Table d'association porte un nom commun (et plus un verbe d'action) qui est le plus parlant du point de vue 'métier'.

​

En résumé, le MLD est une traduction technique du MCD.

​

Etape 4 : MPD (Modèle Physique de Données)

​

Tel quel, le MLD ne suffit pas à réaliser le schéma de base de données qui correspond à l'expression de besoin initial.

​

Il manque encore plusieurs informations :

    Il faut bien préciser le type chaque attribut/champ de chaque table de la base de données, et ce sont des choix.
    nommer les contraintes : nommer les contraintes d'unicité (identifiants fonctionnels), nommer les contraintes de type 'foreign key'

​

En résumé, le MPD est une implémentation du MLD qui correspond au moteur de base de données utilisé (c'est le script SQL executé).
Modalités pédagogiques

Les outils de 'dessin' préconisés sont : inkscape, draw.io

Toute alternative est envisageable.
Livrables

Pour chaque expression de besoin fournie comme ressource,
fournir une archive .zip qui contient :

- le Dictionnaire de Données au format texte
- un MCD au format vectoriel (.svg) idéalement, ou autre (binaire graphique / photo)
- un MLD au format vectoriel (.svg) idéalement ,ou autre (binaire graphique / photo)
- le script SQL de création de base correspondant au MPD

Penser à nommer le livrable en utilisant la technique du 'quoi/qui/quand' et votre tri-gramme préféré (ex: brief100-gra-20220829.zip)