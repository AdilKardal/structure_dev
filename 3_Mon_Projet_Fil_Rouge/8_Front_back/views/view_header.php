<?php require_once("../models/connect.php");
// var_dump($_SESSION);die;
?>
<header>
  <nav>
    
    <a href="view_accueil.php">Accueil</a>
    <a href="view_coffret.php">Nos coffrets</a>
    <a href="view_accueil.php"><img src="images/laia_logo_arche.jpeg" alt="" width="150" height="130"></a>
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