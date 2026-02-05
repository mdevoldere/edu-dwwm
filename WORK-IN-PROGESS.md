# Document de travail (brouillon)

## Git et Docker en fil rouge 

L'utilisation de  Git, Docker et la Documentation en fil rouge, tout en commençant par une base rigoureuse en Java/C# (POO) pour finir sur la flexibilité de Symfony et WordPress, garantit aux apprenants un profil très complet et "prêt à l'emploi" pour le marché du travail.

# Stratégie Git : Le "Quotidien"

Au lieu d'un cours théorique, **imposer un workflow de production dès le premier jour de l'algorithmique** :

- Le rituel du matin : git pull pour récupérer les exercices du jour.
- Le rituel du soir : git push obligatoire pour valider la présence et l'avancement.

**Progression :**

- 1 : Uniquement add, commit, push sur la branche main.
- 2 : Gestion des conflits et revue de code entre pairs.
- 3 : Introduction des branches de fonctionnalités (feature branches) et des Pull Requests.

## Stratégie Docker : La "Boîte à outils"

Pour éviter que Docker ne devienne un obstacle, fournir des configurations prêtes à l'emploi (images officielles) qui s'étoffent avec le programme :

- Phase Intro/Algorithmique : Un conteneur node:alpine ou php:cli minimaliste. Ils apprennent juste la commande docker run pour exécuter leur code.
- Phase Frontend : Utilisation de nginx:alpine pour servir leurs fichiers HTML/CSS/JS. Ils apprennent le mappage de ports (8080:80).
- Phase PHP/JSON : Utilisation d'une image php:apache. Ils découvrent les volumes pour synchroniser leur code local avec le conteneur.
- Phase Symfony/BDD : Passage à docker-compose. C'est ici qu'ils apprennent à orchestrer plusieurs services (PHP + MySQL + Adminer).

## Impact sur le plan de formation

Dans cette configuration, les sections "Conteneuriser et déployer" à la fin de chaque module ne sont plus des étapes finales, mais des ateliers de consolidation.

Exemple de structure de dossier pour un dépôt unique par module :

```Plaintext
/DWWM-ALGO-POO
├── /.git
├── /Algorithmes
├──── /exercice-1
├────── /README.md (pseudo code)
├────── /App.java (code)
├──── /exercice-2
├──── / etc...
├── /POO
├──── /exercice-1
├──── /exercice-2
├──── / etc...
└── README.md
```

```Plaintext
/DWWM-WEB-FRONTEND
├── /.git
├── /HTML-CSS
├──── /exercice-1
├──── /exercice-2
├──── / etc...
├── /JS
├──── /exercice-1
├──── /exercice-2
├──── / etc...
├── /VueJS
├──── /exercice-1
├──── /exercice-2
├──── / etc...
└── README.md
```

## Avantages de Docker pour les formateurs et apprenants

Environnement identique : Plus de "ça marche chez moi mais pas chez toi".

Portfolio professionnel : À la fin, leur GitHub n'est pas rempli de fichiers épars, mais de projets conteneurisés prêts à l'emploi.

Examen final : Le jour du titre RNCP, ils sont sereins sur la mise en production, car ils l'ont fait 100 fois.
