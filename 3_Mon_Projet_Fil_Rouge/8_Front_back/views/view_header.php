<?php include_once("../models/connect.php");
// var_dump($_SESSION);die;
?>
<header>
  <nav>
      <?php
      if (isset($_SESSION['user']) && $_SESSION['user'] !== null) { ?>
      
        <h1>Laia Créa </h1>
        <a href="view_accueil.php">Accueil</a>
        <div class="dropdown">
          <a href="">Nos coffrets<span class="material-icons-outlined">
              expand_more
            </span></a>
          <div class="dropdown-content">
            <a href="#">Mariages</a>
            <a href="./naissance.html">Naissances</a>
            <a href="#">Voyage</a>
          </div>
        </div>
        <a href="">Personnalisation</a>
        <a href="">Profil</a>
        <a href="contact.html">Contact</a>
        <a href="view_admin.php">Admin</a>
        <a class="btndeconnect" href="../controllers/controller_deconnexion.php">Déconnexion</a>
      <?php
      } else {
      ?>
        <a href="view_accueil.php">Accueil</a>
        <div class="dropdown">
          <a href="">Nos coffrets<span class="material-icons-outlined">
              expand_more
            </span></a>
          <div class="dropdown-content">
            <a href="#">Mariages</a>
            <a href="./naissance.html">Naissances</a>
            <a href="#">Voyage</a>
          </div>
        </div>
        <a href="">Personnalisation</a>
        <a href="">Profil</a>
        <a href="contact.html">Contact</a>
        <a class="btnconnect" href="view_connexion.php">Connexion</a>
      <?php
      }
      ?>
    </nav>
</header>
