<?php

// connecter a la BD
$connect = mysqli_connect("localhost", 'root', '', 'todolist');

// Préparezr la requete
$requete = mysqli_prepare($connect, "INSERT INTO users (email, password) VALUES (?, ?)");

// Lier les donnée du formulaire avec la requete
mysqli_stmt_bind_param($requete, "ss", $GLOBALS['_POST']['email'], $GLOBALS['_POST']['password']);

// Executer la requete
mysqli_stmt_execute($requete);

// Rediriger vers la page de connexion
header('Location: /connexion.php');
