# Module 2 : Bases de Données (Persistance & Modélisation)

- Analyser un besoin client et dessiner le schéma de données.
- Lancer un environnement complet avec docker-compose.
- Injecter et requêter des données complexes.

1. **Analyse et Conception : De l'idée au schéma**

    - Modélisation Merise
        - Analyse du besoin (Dictionnaire des données)
        - Création du MCD : Entités, Attributs, Relations.
        - Passage au MLD : Clés primaires et étrangères.
        - UML (Rappels) : Utilisation du diagramme de classes pour faire le pont avec la POO.
        - Documentation : Les schémas sont intégrés dans un fichier Markdown du dépôt via Mermaid ou exports d'outils de design.

2. **Mise en place de l'environnement (Docker-Compose)**

    - Orchestration : Apprendre à lancer deux services qui communiquent.
        - Le fichier docker-compose.yml : 
            - Service 1 : La base de données (MySQL ou PostgreSQL).
            - Service 2 : Un outil d'administration graphique (Adminer ou phpMyAdmin).
            - Volumes : Configurer la persistance.

3. **Manipulation des données (SQL)**

    - LDD (Langage de Définition de Données)
    - LMD (Langage de Manipulation de Données)
    - Le CRUD de base : SELECT, INSERT, UPDATE, DELETE
    - Les filtres et tris : WHERE, ORDER BY, LIMIT
    - Requêtes avancées : Maîtriser les Jointures (INNER JOIN) pour lier les tables modélisées

4. **Introduction au NoSQL**

    - MongoDB : Comprendre la différence entre relationnel (SQL) et documentaire (NoSQL).
    - Docker : Ajouter un service MongoDB au docker-compose précedent
    - Alimenter et interroger une base de données MongoDB
