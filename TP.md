# TP

## Barre de navigation responsive

1. Créer un fichier: /composants/navbar.php et l'importer dans vos pages
2. Implémenter dans le HTML la navbar
3. Styliser la navbar pour etre responsive
4. Utiliser le javascript pour ouvrir et fermer le menu

---

## Authentification

- Sur phpmyadmin, créer la base de donnée: todolist
- Créer la table: users: id, email, password

1. Créer une page de connexion et inscription
2. Implemnter le formulaire d'inscription: email, mot de passe, confirmer le mot de passe
3. Le formulaire va envoyer les données vers: /api/adduser.php
4. Dans le fichier adduser.php:
   1. Vous connecter à la base de données.
   2. Vous aller créer la requete pour ajouter le user dans la base de données
   3. Executer la requete
   4. Rediriger l'utilisateur vers la page de connexion
