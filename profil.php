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

  <?php
    include_once "./libs/db.php";
    $userID = $_SESSION['id'];
    $connect = connectToDB();
    $query = mysqli_query($connect, "SELECT * FROM todos WHERE userID = $userID");
    $todos = mysqli_fetch_all($query, MYSQLI_ASSOC);
  ?>
  <h1>Page de profil</h1>
  <section>
    <h2>Liste de vos tâches</h2>
    <form action="/api/addtodo.php">
      <input type="text" placeholder="Ajoutez une tache" name="tache" />
      <button>Ajouter</button>
    </form>
    <ul>
      <?php
      foreach($todos as $todo){
        $contenu = $todo['contenu'];
        $date = $todo['date'];
        $isDone = $todo['done'];
        $todoClass = $isDone == 1 ? "done" : "not-done";
        $todoID = $todo['id'];
        echo "
        <li class='$todoClass todo-container'>
          <a href='/api/removetodo.php?id=$todoID'><img class='remove-image' src='./images/remove.svg' /></a>
          <div>
            <p class='todo'>$contenu</p>
            <p class='todo-date'>$date</p>
          </div>
        </li>";
      }
    ?>
    </ul>
  </section>
</body>

</html>