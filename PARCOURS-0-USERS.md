# Exo 1 : Vérification d'un nom d'utilisateur (Conditions & Types)

Objectif : Valider une chaine de caractères.

> Énoncé 
> 1. Demander à l'utilisateur de choisir et saisir un identifiant. 
> 3. Afficher "**Identifiant accepté**" si la longueur de l'identifiant est supérieure à 2.
> 3. Afficher "**Identifiant invalide**" dans le cas contraire.

# Exo 2 : Vérification de l'âge

Objectif : Valider une valeur numérique.

> Énoncé 
> 1. Demander à l'utilisateur de saisir son âge. 
> 3. Afficher "**OK**" ou "**Trop jeune**" ou "**Trop âgé**" selon le cas.
>
> Conditions :
> - L'âge minimum autorisé est de 13 ans.
> - L'âge maximum autorisé est de 120 ans.

# Exo 1 : Vérification d'un nom d'utilisateur

Objectif : Valider un couple identifiant/mot de passe simple.

> Énoncé 
> 1. Déclarer deux variables constantes USER_OK et PASS_OK. 
> 2. Demander à l'utilisateur de saisir un identifiant et un mot de passe. 
> 3. Afficher "Accès autorisé" ou "Identifiants incorrects" selon le cas.

Concepts : String, Console Input, if / else.

# Exo 1 : Vérification de login

Objectif : Valider un couple identifiant/mot de passe simple.

> Énoncé
> 1. Déclarer deux variables constantes USER_OK et PASS_OK. 
> 2. Demander à l'utilisateur de saisir identifiant et son mot de passe. 
> 3. Afficher "Accès autorisé" si la saisie correspond aux valeurs des 2 constantes.
> 4. Afficher "Identifiants incorrects" dans le cas contraire.

Concepts : String, Console Input, if / else.

# Exo 2 : Robustesse du mot de passe (Boucles & Chaînes)

Objectif : Forcer la saisie d'un mot de passe sécurisé.

> Énoncé : 
> 1. Demander une saisie de mot de passe. 
> 2. Afficher "OK" si la longueur du mot de passe est de 12 caractères ou plus.
> 3. Dans le cas contraire, l'utilisateur doit recommencer la saisie.

Concepts : while, string.length, opérateurs de comparaison.

# Exo 3 : Annuaire des logins (Tableaux statiques & Fonctions)

Objectif : Rechercher si un utilisateur existe dans une base de données simulée.

> Énoncé : 
> 1. Initialiser un tableau statique de noms d'utilisateurs : ["admin", "user1", "modérateur"]. 
> 2. Créer une fonction statique rechercherUser(nomRecupere, tableau) qui renvoie l'index de l'élément ou -1 s'il n'existe pas. 
> 3. Afficher un message personnalisé selon le résultat.

Concepts : Tableaux, Fonctions, Return, parcours de tableau (for).

# Exo 4 : Gestion des droits/roles (Logique booléenne avancée)

Objectif : Déterminer les droits d'accès à une fonctionnalité.

> Énoncé : Créer une fonction verifierDroit(role, action).
> - Si l'action est "DELETE", seul le rôle "ADMIN" retourne true.
> - Si l'action est "EDIT", "ADMIN" et "MODO" retournent true.
> - Sinon, retourner false.

Concepts : Switch/Case, opérateurs logiques (&&, ||).
