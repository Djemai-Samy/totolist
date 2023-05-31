<?php

include_once "../libs/db.php";

$connect = connectToDB();

$todoID = $_GET['id'];

$query = mysqli_prepare($connect, 'DELETE FROM todos WHERE id=?');

mysqli_stmt_bind_param($query, "i", $todoID);

mysqli_stmt_execute($query);

header('Location: /profil.php');
?>