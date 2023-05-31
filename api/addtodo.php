<?php
session_start();

if(!isset($_GET['tache'])){
  header('Location: /profil.php');
  exit;
}

if(!isset($_SESSION['id'])){
  header('Location: /connexion.php');
  exit;
}


include_once "../libs/db.php";

$connect = connectToDB();

$query = mysqli_prepare($connect, "INSERT INTO todos (contenu, userID) VALUES (?,?)");
mysqli_stmt_bind_param($query, "si", $_GET['tache'], $_SESSION['id']);

mysqli_stmt_execute($query);

header('Location: /profil.php');
?>