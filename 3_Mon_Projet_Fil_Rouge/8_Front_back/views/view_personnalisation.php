<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php require("view_header.php"); ?>
  <section class="formperso">
    <form>
      <input type="text" id="nom" name="nom" placeholder="Nom*" required>

      <input type="text" id="prenom" name="prenom" placeholder="Prénom*" required>

      <input type="email" id="email" name="email" placeholder="E-mail*" required>
      <input type="tel" id="tel" name="tel" placeholder="Téléphone">

      <select id="categorie" name="categorie">
        <option value="">Catégorie*</option>
        <option value="naissances">Naissance</option>
        <option value="mariage">Mariage</option>
        <option value="voyage">Voyage</option>
        <option value="maison">Maison</option>
      </select>
      <br>
      <select id="color" name="color">
        <option value="">Couleur *</option>
        <option value="noir">Noir</option>
        <option value="blanc">Blanc</option>
        <option value="rouge">Rouge</option>
        <option value="bleu">Bleu</option>
      </select>
      <br>
      <input type="text" id="text" name="text" placeholder="Texte*">
      <br>

      <input type="submit" value="Envoyer">
    </form>
  </section>
  <?php
  if (isset($_POST['text'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: webmaster@monsite.fr' . "\r\n";
    $entete .= 'Reply-to: ' . $_POST['email'];

    $message = '<h4>Message envoyé depuis la page Contact de monsite.fr</h4>
        <p><b>Nom : </b>' . $_POST['nom'] . " " . $_POST['prenom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Tel : </b>' . $_POST['tel'] . '<br>
        <b>Catégorie : </b>' . $_POST['categorie'] . '<br>
        <b>Couleur : </b>' . $_POST['color'] . '<br>
        <b>Texte : </b>' . htmlspecialchars($_POST['text']) . '</p><br>
        <p>Répondre à ' . $_POST['email'] . '</p>';

    $retour = mail('adil.kardal@gmail.com', 'Envoi depuis page Perosnnalisation', $message, $entete);
    if ($retour) {
      echo '<p>Votre message a bien été envoyé.</p>';
    }
  }
  ?>


  <?php require("view_footer.php"); ?>

</body>

</html>