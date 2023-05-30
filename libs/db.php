<?php
function connectToDB(){
  return  mysqli_connect("localhost", 'root', '', 'todolist');
}

function getUserFromDB($email){
  // connecter a la BD
  $connect = connectToDB();

  //  Préparer le requete SQL
  $requete = mysqli_prepare($connect, "SELECT * FROM users WHERE email = ?");

  // Lier les données du formulaire avec la requete
  mysqli_stmt_bind_param($requete, "s", $email);

  // Executer la requete
  mysqli_stmt_execute($requete);

  // Chercher le resultat
  $result = mysqli_stmt_get_result($requete);

  // Récuperer les données sous forme de tableau associatif
  $user = mysqli_fetch_assoc($result);

  // Retourner le tableau representant les données de l'utilisateur récuperé
  return $user;
}