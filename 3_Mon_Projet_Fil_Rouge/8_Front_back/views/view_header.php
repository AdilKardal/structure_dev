<?php require_once("../models/connect.php");
// var_dump($_SESSION);die;
?>
<header>
  <nav>
  <h1 class="titre">Laia Créa </h1>
      <a href="view_accueil.php">Accueil</a>
      <div class="dropdown">
        <a href="#">Nos coffrets<span class="material-icons-outlined">
            expand_more
          </span></a>
        <div class="dropdown-content">
          <a href="#">Mariages</a>
          <a href="view_naissance.php">Naissances</a>
          <a href="#">Voyage</a>
        </div>
      </div>
      <a href="#">Personnalisation</a>
      <a href="#">Profil</a>
      <a href="view_contact.php">Contact</a>
    <?php
    if (isset($_SESSION['user']) && $_SESSION['user'] !== null && $_SESSION['user']['id_role_utilisateur'] == 2) { ?>
      <a href="view_admin.php">Admin</a>
      <a class="btndeconnect" href="../controllers/controller_deconnexion.php">Déconnexion</a>
    <?php
    } elseif (isset($_SESSION['user']) && $_SESSION['user'] !== null) { ?>
      <a class="btndeconnect" href="../controllers/controller_deconnexion.php">Déconnexion</a>
    <?php
    } else { ?>
      <a class="btnconnect" href="view_connexion.php">Connexion</a>
    <?php
    }
    ?>
  </nav>
</header>