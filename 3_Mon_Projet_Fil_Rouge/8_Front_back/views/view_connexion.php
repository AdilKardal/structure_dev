<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
  <title>Connexion</title>
  <link rel="stylesheet" href="style.css?v=<?= date("H:i:s") ?>">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
</head>

<body>
<?php require("view_header.php") ?>

  <section class="containerconnexion">
      <article class="formconnect">
        <h2>Connectez-vous</h2>
        <form action="../controllers/controller_connexion.php" method="post">
          <input type="hidden" name="form_connexion" value="1">
          <!-- <label for="form_email">E-mail</label> -->
          <input type="email" name="form_email" required placeholder="E-mail">
          <!-- <label for="form_password">Mot de passe</label> -->
          <input type="password" name="form_password" placeholder="Mot de passe">
          <input type="submit" value="Se connecter" id="btnconnect">
        </form>
      </article>
    
    <article class="forminscription">
      <h2>Pas encore inscrit ? Inscrivez-vous</h2>
        <form action="../controllers/controller_inscription.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="form_inscription" value="1">
          <input type="text" name="form_nom" placeholder="Nom">
          <input type="text" name="form_prenom" placeholder="Prenom">
          <input type="text" name="form_email" placeholder="Mail">
          <input type="password" name="form_mdp" placeholder="Mot de passe">
          <input type="text" name="form_num_adresse" placeholder="15">
          <input type="text" name="form_nom_adresse" placeholder="Rue claude monet">
          <input type="text" name="form_cp" placeholder="Code Postal">
          <input type="text" name="form_ville" placeholder="Ville">
          <input type="text" name="form_pays" placeholder="france">
          <input type="submit" value="S'inscrire">
        </form>
    </article>
    
  </section>
<?php require("view_footer.php") ?>

</body>

</html>