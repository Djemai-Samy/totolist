<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/global.css">
  <title>Profil</title>
</head>

<body>
  <header>
    <?php
      include_once "./composants/navbar.php";
      ?>
  </header>
  <h1>Page de profil</h1>

  <section>
    <h2>Liste de vos tache</h2>
    <form action="/api/addtodo.php">
      <input type="text" placeholder="Ajoutez une tache" name="tache" />
      <button>Ajouter</button>
    </form>
  </section>
</body>

</html>