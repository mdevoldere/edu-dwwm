# Parcours 

L'idée est que les exercices suivent un ordre logique menant à la finalisation d'un petit projet de gestion. En ce sens, les exercices d'algo, poo, front, back et bdd sont tous liés au projet.

C'est l'approche "Fil Rouge". En transformant chaque exercice en une brique d'un projet final, l'apprenant comprend immédiatement l'utilité de ce qu'il code (ex: "Mon algo de tri d'hier sert aujourd'hui à filtrer mes produits").

0. Le Tronc commun (Gestion d'utilisateurs)
1. Le Parcours "Inventory" (Gestion de stock)
2. Le Parcours "Support" (Système de tickets)
3. Le Parcours "Event" (Gestion de réservations)
3. Les Parcours "Serious Game" (Gestion de parties de jeu)
4. **Autres idées ???**

---

0. Tronc Commun (Présent dans les 6 parcours) :
    - Module 0 : Classes User / Role en Java ou C#.
    - Module 1 : Formulaires Login/Profil en HTML/JS.
    - Module 2 : Tables users, roles, permissions en SQL.
    - Module 3 : Authentification JWT/Session et Back-office Admin.
    - Module 4 : Gestion des secrets (mots de passe BDD) via Docker/CI-CD.

1. Parcours "Inventory" (Logistique)
    - Concept : Gestion de stock et flux de marchandises.
    - Défi métier : Calculs de marges, alertes de stock bas, relations fournisseurs.
    - Finalité : Un ERP miniature.

2. Parcours "Support" (Relation Client)
    - Concept : Ticketing et suivi d'incidents.
    - Défi métier : Gestion des priorités, cycle de vie d'un ticket (statuts), attribution de tâches.
    - Finalité : Un mini Zendesk ou Jira Service Management.

3. Parcours "Event" (Réservation)
    - Concept : Booking de salles ou d'événements.
    - Défi métier : Gestion des calendriers, conflits de dates, capacités maximales.
    - Finalité : Une plateforme type Calendly ou réservation de places.

4. Parcours "Memory Match" (Serious Game Visuel)
    - Concept : Jeu de paires avec thèmes pédagogiques.
    - Défi métier : Logique d'état (cartes retournées), timers, gestion de la mémoire éphémère en JS.
    - Finalité : Un outil d'apprentissage ludique pour mémoriser des concepts.

5. Parcours "FlipQuiz" (Serious Game de Connaissances)
    - Concept : Questionnaire interactif par catégories et points.
    - Défi métier : Arborescence de données (Thèmes > Difficultés > Questions), gestion des scores cumulés.
    - Finalité : Un clone de "Jeopardy" pour valider des acquis en fin de formation.

6. Parcours "Production Tycoon" (Simulation de Gestion)
    - Concept : Jeu de gestion d'usine ou de ressources.
    - Défi métier : Calculs itératifs de production/minute, coût de maintenance, investissement et rentabilité (ROI).
    - POO spécifique : Classes Machine, Resource, Upgrade.
    - Backend : Sauvegarde de l'état du "monde" de l'utilisateur (progression hors-ligne).

Autres idées ?

---


# 0. Le Tronc commun (IAM : Gestion d'utilisateurs)

La gestion des utilisateurs (Authentification et Autorisation) est le dénominateur commun de 99 % des applications professionnelles.

- Module 0 Logique & Structure
    - Algo : Logique de vérification d'un mot de passe (comparaison de chaînes) et contrôle de rôle (ex: if (user.role == "ADMIN"))
    - UML : Hiérarchie des utilisateurs 
    - POO : Création d'une classe mère User et de classes filles Admin, Manager, Client (Héritage)...

- Module 1 (Frontend) : Interface & Session
    - UI/UX : Design des formulaires de Login et de Profil sur Figma.
    - JS : Gestion d'un état "connecté" ou "déconnecté" dans le LocalStorage.
    - Sécurité : Masquer/Afficher des boutons (ex: le bouton "Supprimer") selon le rôle stocké en local.

- Module 2 (Bases de données) : Schéma & Sécurité
    - Modélisation : Création de la table user et d'une table role (Relation Many-To-Many ou One-To-Many).
    - SQL : Requêtes filtrées (ex: "Lister tous les techniciens").
    - Sécurité : Comprendre pourquoi on ne stocke jamais un mot de passe en clair (introduction au hachage).

- Module 3 (Backend) : Le moteur de sécurité
    - Symfony Security : Utilisation du composant Security, gestion des Firewalls, des Providers et des Access Control.
    - WordPress : Utilisation du système natif de rôles et capacités (Roles & Capabilities).
    - JWT/Sessions : Mise en place d'un système d'authentification robuste pour protéger les routes de l'API.

- Module Transverse (DevOps) : Secrets & Variables d'environnement
    - Docker : Gestion des mots de passe de la base de données via les fichiers .env.
    - CI/CD : S'assurer que les clés secrètes de l'application ne sont jamais poussées sur Git (usage des Secrets GitHub/GitLab).

## Application concrète par parcours :
Inventory : Seul le Magasinier peut modifier les stocks, le Client ne peut que consulter.

Support : Le Client crée un ticket, seul le Technicien peut changer le statut, l' Admin peut supprimer un ticket.

Event : Le Visiteur voit les dates, l' Acheteur réserve, l' Organisateur gère le plan de salle.


# 1. Le Parcours "Inventory" (Gestion de Stock)

- Module 0 (Algo/POO) : Créer une classe Produit (Nom, Prix, Quantité) et gérer un tableau dynamique pour ajouter/supprimer du stock en console.

- Module 1 (Front) : Maquetter une grille de produits et un formulaire d'ajout. Utiliser fetch pour lire un fichier stock.json.

- Module 2 (Data) : Modéliser la base de données avec des catégories et des fournisseurs (Jointures SQL).

- Module 3 (Back) : Développer l'API avec Symfony pour gérer les entrées/sorties de stock en temps réel.

- Module 4 (DevOps) : Déployer l'outil pour qu'un magasinier puisse y accéder sur tablette.


# 2. Le Parcours "Support" (Système de Tickets)

Idéal pour comprendre les relations utilisateurs et les flux d'états (statuts).

Module 0 (Algo/POO) : Logique de changement d'état (Ouvert → En cours → Résolu). Héritage entre une classe Utilisateur et Technicien.

Module 1 (Front) : Interface de tableau de bord (Dashboard) avec des filtres par priorité (Urgent/Normal).

Module 2 (Data) : Modélisation des relations : un ticket appartient à un auteur et est assigné à un technicien.

Module 3 (Back) : Utiliser WordPress en "Headless" ou Symfony pour gérer les notifications par mail lors d'un changement de statut.

Module 4 (DevOps) : Automatiser les tests (CI) pour vérifier que le flux de statut ne se casse pas lors d'une mise à jour.


# 3. Le Parcours "Event" (Gestion de Réservations)

Excellent pour manipuler les dates et les contraintes logiques.

Module 0 (Algo/POO) : Algorithme de vérification de disponibilité (Est-ce que la salle est libre sur ce créneau ?).

Module 1 (Front) : Calendrier interactif en JS pour sélectionner une date et une heure.

Module 2 (Data) : Gestion des contraintes d'unicité en SQL (On ne peut pas réserver deux fois la même place).

Module 3 (Back) : Système d'authentification complet pour que chaque client puisse voir ses propres réservations.

Module 4 (DevOps) : Mise en conteneur d'un serveur de cache (Redis) pour gérer les fortes affluences lors des réservations.