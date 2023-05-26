<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./styles/global.css">
</head>

<body>

  <header>
    <?php
    include_once "./composants/navbar.php";
  ?>
  </header>
  <h1>Authentification</h1>

  <form action="/api/adduser.php" method="post">
    <input type="text" placeholder="Entrez votre email" name="email">
    <input type="text" placeholder="Entrez votre mot de passe" name="password">
    <input type="text" placeholder="Confirmer votre mot de passe" name="confirmPassword">
    <button>Valider</button>
  </form>
</body>

</html>