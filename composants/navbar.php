<?php
  session_start();
  $isLogin = isset($_SESSION['id']);
?>
<link rel="stylesheet" href="./styles/navbar.css">

<nav>
  <div>
    <img src="./images/menu-burger.svg" alt="bouton du menu">
  </div>

  <ul id="closed">
    <li>
      <a href="/index.php">Accueil</a>
    </li>
    <li>
      <?= $isLogin ? 
        "<a href='/profil.php'>Profil</a>" : 
        "<a href='/connexion.php'>Connexion</a>"; 
      ?>
    </li>
    <?php
      if($isLogin){
        echo "
        <li>
          <form action='/api/logout'>
            <button>Se déconnecter</button>
          </form>
        </li>";
      }
    ?>

  </ul>
</nav>


<script src="./script/navbar.js"></script>