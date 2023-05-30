<?php
session_start();
include_once "../libs/db.php";

// Dans le cas ou l'email et le mot passe ne sont fournis
if (!isset($_POST['email']) or !isset($_POST['password']) or $_POST['email'] == "" or $_POST['password'] == "") {
	//Rediriger vers la page de connexion
	header('Location: /connexion.php');
	exit;
}

// Récuperer les données sous forme de tableau associatif
$user = getUserFromDB($_POST['email']);

// Tester si le mot de passe fournit est bon / Egal a celui de la BDD
$passwordInput = $_POST['password'];
if ($passwordInput != $user['password']) {
	header('Location: /connexion.php?error=connexion');
	exit;
}

// Remplir la session avec les données pour mémoriser l'utilisateur sur le long terme
$_SESSION['email'] = $user['email'];
$_SESSION['id'] = $user['id'];

// Rédiriger vers la page de de profil
header('Location: /profil.php');