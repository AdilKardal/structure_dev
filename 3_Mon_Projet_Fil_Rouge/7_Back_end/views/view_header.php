<header>
        <a href="view_accueil.php"><img src="./images/adrar-classrooms-logo.png" alt="" width="80"></a>
        <h1>Classrooms</h1>
        <nav>
            <a href="view_accueil.php">Accueil</a>
            <a href="view_formations.php">Formations</a>
            <a href="view_admin.php">Administration</a>
        </nav>
        <img src="./images/outline_search_white_24dp.png" alt="" width="40">

        <p><?=$_SESSION['user']['utilisateur_prenom'] ?> <?=$_SESSION['user']['utilisateur_nom'] ?></p>
       
             <img class="avanav" src="./images/<?=$_SESSION['user']['utilisateur_image']?>">
        
     
       
        <div class="deco">
            <?php if (isset($_SESSION['user']) && $_SESSION['user'] !== null){
              ?>  <a class="adeco" href="../views/view_connexion.php">Déconnexion</a><?php
            } ?>
        </div>
 </header>