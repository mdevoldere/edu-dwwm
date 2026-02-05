# Module 3 : Web Backend (PHP & Architecture Pro)


1. **Le Pont : De l'Algo à l'API PHP (Rapide)**

    - PHP Procedural & JSON
        - Syntaxe PHP (proche du Java/C# de la préparatoire).
        - Création d'une API CRUD simple utilisant un fichier data.json.
    - Rappel Frontend
        - Utilisation de fetch() (POST, PUT, DELETE) depuis l'interface du Module 1 pour manipuler ce fichier JSON.
    - GIT
        - 1 dépôt par projet
    - Docker
        - Un Dockerfile spécifique au projet.

2. **Architecture & POO Avancée en PHP**

    - Transition vers la POO PHP
        - namespaces, autoloading (Composer).
    - Architecture MVC
        - Séparer la logique (Controller), les données (Model) et l'affichage (View).
    - UML
        - Mise à jour du diagramme de classes pour l'architecture du projet.
    - Git 
        - Utilisation rigoureuse des branches et des pull-requests (merge).

3. **Framework Symfony : Le standard pro**

    - Installation de Symfony via Composer dans un conteneur.
    - Création d'Entities, Migrations et Repositories.
    - Doctrine ORM 
        - Faire le pont entre la POO et la base de données SQL.
        - Création d'une API Rest avec Symfony et API Platform (Approche Code First)
    - Le moteur de template Twig
        - Créer des vues dynamiques côté serveur.
    - Sécurité
        - Gestion des utilisateurs, hachage des mots de passe et authentification (Session ou JWT).
    - GIT
        - 1 dépôt par projet

4. **CMS & Solutions Clés en main : WordPress**
    - Comprendre la différence entre un framework et un CMS.
    - Création de thèmes et de templates personnalisés (PHP).
    - Création de modules (plugins) simples
    - GIT
        - 1 dépôt par projet
    - Docker-Compose
        - Orchestration de l'image officielle wordpress avec un service db (MySQL/MariaDB).
        - Gestion des volumes pour le dossier wp-content (plugins et thèmes).
    - Manipulation de l'API REST
        - Utilisation de l'API native de WordPress pour servir du contenu au Frontend du Module 1.
    - Maintenance & Migration
        - Stratégies de sauvegarde de la base de données et des médias via Docker.

5. **Conteneurisation & Déploiement (Production)**
    - Docker-Compose Pro :
        - Orchestration de 3 services : PHP + Serveur Web + Base de données.
    - Utilisation des variables d'environnement (.env) pour la sécurité.
    - Déploiement : * Introduction au déploiement manuel (SFTP).
    - Introduction aux notions de CI/CD (GitHub Actions ou GitLab CI) pour automatiser le déploiement au git push.