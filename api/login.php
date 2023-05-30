<?php

// Dans le cas ou l'email et le mot passe ne sont fournis
if (!isset($_POST['email']) or !isset($_POST['password']) or $_POST['email'] == "" or $_POST['password'] == "") {
	//Rediriger vers la page de connexion
	header('Location: /connexion.php');
	exit;
}

// connecter a la BD
$connect = mysqli_connect("localhost", 'root', '', 'todolist');

// Préparer la requete
$requete = mysqli_prepare($connect, "SELECT * FROM users WHERE email = ?");

// Lier les donnée du formulaire avec la requete
mysqli_stmt_bind_param($requete, "s", $GLOBALS['_POST']['email']);

// Executer la requete
mysqli_stmt_execute($requete);

// Chercher le resultat
$result = mysqli_stmt_get_result($requete);

// Récuperer les données sous forme de tableau associatif
$user = mysqli_fetch_assoc($result);

// Tester si le mot de passe fournit est bon / Egal a celui de la BDD
$passwordInput = $_POST['password'];
if ($passwordInput != $user['password']) {
	header('Location: /connexion.php?error=connexion');
	exit;
}
