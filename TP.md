# TP

## Barre de navigation responsive

1. Créer un fichier: /composants/navbar.php et l'importer dans vos pages
2. Implémenter dans le HTML la navbar
3. Styliser la navbar pour etre responsive
4. Utiliser le javascript pour ouvrir et fermer le menu

---
---

## Authentification

- Sur phpmyadmin, créer la base de donnée: todolist
- Créer la table: users: id, email, password
- Créer une page d'authentification

---

## Inscription

1. Implementer le formulaire d'inscription: email, mot de passe, confirmer le mot de passe
2. Le formulaire va envoyer les données vers: /api/adduser.php
3. Dans le fichier adduser.php:
   1. Vous connecter à la base de données.
   2. Vérifier que l'email existe déja (Si existe rédiriger vers connexion)
   3. Vous aller créer la requete pour ajouter le user dans la base de données
   4. Executer la requete
   5. Rediriger l'utilisateur vers la page de connexion

---

## Connexion

1. Créer un formulaire pour la connexion: email, password.
2. Le formulaire envoi les données vers un fichier: /api/login.php
3. Dans login.php:
   1. Tester si l'email et le password sont fournis 
   2. Récuperer l'utilisateur depuis la base de données en utilisant sont email.
   3. Cas ou l'utilisateur n'existe pas, rediriger vers connexion.php
   4. Cas ou il existe: 
      1. Tester si le mot de passe de la base donnée est égal a celui fournit dans le formulaire (rediriger vers connexion.php).
   5. Ajouter les données dans le SESSION.
   6. Si mot de passe correct, rediriger vers page d'accueil.

 ---
 ---

## Todo List

---

### Ajouter des taches


1. Dans la page de profil, ajouter un formulaire envoyer les données: /api/addtodo.php:
   1. input pour la tache
   2. Un bouton pour valider et ajouter la tache.

2. Créer la table des "taches" dans la base de données:
   1. id: INT
   2. contenu: TEXT
   3. userID: INT
   4. done: BOOL

3. Dans /api/addtodo.php
   1. Se connecter a la BDD.
   2. Récuperer l'identifiant de l'utilisateur dans la "SESSION".
   3. Préparer la requete pour ajouter la tache.
   4. Lier les donnée avec la requete.
   5. Executer la requete.
   6. Rédiriger vers la page de profil.

---
