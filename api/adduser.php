<?php
include_once "../libs/db.php";

// Connecter a la BD
$connect = connectToDB();

// Récuperer les données sous forme de tableau associatif
$user = getUserFromDB($_POST['email']);

//  Si il existe rediriger l'utilisateur vers la page de connexion avec un erreur
// Préparer la requete
if(count($user) > 0){
  header('Location: /connexion.php?error=inscription');
  exit;
}

// Préparer la requete
$requete = mysqli_prepare($connect, "INSERT INTO users (email, password) VALUES (?, ?)");

// Lier les donnée du formulaire avec la requete
mysqli_stmt_bind_param($requete, "ss", $GLOBALS['_POST']['email'], $GLOBALS['_POST']['password']);

// Executer la requete
mysqli_stmt_execute($requete);

// Rediriger vers la page de connexion
header('Location: /connexion.php');