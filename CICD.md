# Stratégie Git : Le "Quotidien"

Au lieu d'un cours théorique, imposez un workflow de production dès le premier jour de l'algorithmique :

Le rituel du matin : git pull pour récupérer les exercices du jour.

Le rituel du soir : git push obligatoire pour valider la présence et l'avancement.

Progression : * Mois 1 : Uniquement add, commit, push sur la branche main.

Mois 2 : Introduction des branches de fonctionnalités (feature branches) et des Pull Requests.

Mois 3 : Gestion des conflits et revue de code entre pairs.

2. Stratégie Docker : La "Boîte à outils"
Pour éviter que Docker ne devienne un obstacle, fournissez des configurations prêtes à l'emploi (images officielles) qui s'étoffent avec le programme :

Phase Intro/Algorithmique : Un conteneur node:alpine ou php:cli minimaliste. Ils apprennent juste la commande docker run pour exécuter leur code.

Phase Frontend : Utilisation de nginx:alpine pour servir leurs fichiers HTML/CSS/JS. Ils apprennent le mappage de ports (8080:80).

Phase PHP/JSON : Utilisation d'une image php:apache. Ils découvrent les volumes pour synchroniser leur code local avec le conteneur.

Phase Symfony/BDD : Passage à docker-compose. C'est ici qu'ils apprennent à orchestrer plusieurs services (PHP + MySQL + Adminer).

3. Impact sur votre plan de formation
Dans cette configuration, les sections "Conteneuriser et déployer" à la fin de chaque module ne sont plus des étapes finales, mais des ateliers de consolidation.

Exemple de structure de dossier qu'un élève devrait avoir dès le Module 1 :

Plaintext
/mon-projet
├── /.git
├── /src (HTML, CSS, JS)
├── docker-compose.yml
├── Dockerfile
└── README.md
Avantages pour les apprenants :
Environnement identique : Plus de "ça marche chez moi mais pas chez toi".

Portfolio professionnel : À la fin, leur GitHub n'est pas rempli de fichiers épars, mais de projets conteneurisés prêts à l'emploi.

Examen final : Le jour du titre RNCP, ils sont sereins sur la mise en production, car ils l'ont fait 100 fois.