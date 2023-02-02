<?php include_once("../models/connect.php");
// var_dump($_SESSION);die;
?>

<nav>
    <a href="">Accueil</a>
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
    <?php
    if (isset($_SESSION['user']) && $_SESSION['user'] !== null) {
      echo '<a class="btnconnect" href="../controllers/controller_deconnexion.php">Déconnexion</a>';
    } else {
     echo '<a class="btnconnect" href="view_connexion.php">Connexion</a>';
    }
     
   
      ?>
  </nav>