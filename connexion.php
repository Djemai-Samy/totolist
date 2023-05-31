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

  <form action="/api/login.php" method="post">
    <h2>Connexion</h2>
    <input required type="email" placeholder="Entrez votre email" name="email">
    <input type="text" placeholder="Entrez votre mot de passe" name="password">
    <button>Valider</button>
    <p class="error">
      <?php
        if(isset($_GET["error"]) and $_GET["error"] == "connexion"){
          echo "Email ou mot de passe incorrects!";
        }
      ?>
    </p>
  </form>

  <hr>

  <form action="/api/adduser.php" method="post">
    <h2>Inscription</h2>
    <input type="text" placeholder="Entrez votre email" name="email">
    <input type="text" placeholder="Entrez votre mot de passe" name="password">
    <input type="text" placeholder="Confirmer votre mot de passe" name="confirmPassword">
    <button>Valider</button>
    <p class="error">
      <?php
        if(isset($_GET["error"]) and $_GET["error"] == "inscription"){
          echo "Email existe déja, connectez-vous!";
        }
      ?>
    </p>
  </form>
</body>

</html>