062-dependant-dropdown-C3-lv2

15.08.2022

Vous devrez coder 2 listes déroulantes (Select) dépendantes l'une de l'autre.
Une liste des régions métropolitaines françaises ainsi qu'une liste des départements français vous sont founies au format JSON.
Le squelette de l'application vous est fourni dans le fichier "062.squelette.zip".

Référentiels :

Développeur web et web mobile

Ressource(s) :

PHP file_get_content
php://input
Rendu attendu
Squelette brief 062
Algorithme récupération des départements d'une région
Contexte du projet

    Remplir la liste #regions avec les données des régions avec PHP.

    Un choix de région fera apparaître la liste des départements dans #departements et colorera sur la catre SVG la région sélectionnée en rouge (#9e2020). Un appel fetch vers la page "data.php" permettra de renvoyer le flux JSON des départements qui sera ensuite parcouru pour la construction de la liste des départements.

    Un choix de département colorera sur la carte le département en vert (#45ed42).

    Un nouveau choix de région actualise la liste des départements correspondants.

    Un choix de région égal à la valeur '0' effacera toutes les couleurs appliquées aux régions de la carte. Écrire une fonction JavaScript pour cela.

    Un choix de département égal à la valeur '0' effacera toutes les couleurs appliquées aux départements de la carte. Écrire une fonction JavaScript pour cela.

Modalités pédagogiques

La restitution devra être individuelle mais vous pouvez travailler en équipe.

Contrainte de temps 6H00.
Critères de performance

Vous comprenez les intéractions entre JavaScript et PHP.
Vous savez analyser une structure JSON et une structure SVG.
Modalités d'évaluation

Les deux listes déroulantes doivent être fonctionnelles.
La carte doit être vidée des ses couleurs rouges et vertes à chaque changement dans les listes déroulantes.
Le design doit être conforme à la pièce jointe "Rendu attendu".
Livrables

Un fichier zip contenant le dossier 062 du brief terminé.
Compétences visées

    Développer une interface utilisateur web dynamique
