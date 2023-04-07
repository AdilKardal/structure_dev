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
    <?php require ("view_header.php");?>

    <form>
    <label for="categorie">Catégorie :</label>
  <select id="categorie" name="categorie">
    <option value="naissances">Naissance</option>
    <option value="mariage">Mariage</option>
    <option value="voyage">Voyage</option>
    <option value="maison">Maison</option>
  </select>
  <br>     
  <label for="product">Produit :</label>
  <select id="product" name="product">
    <option value="t-shirt">T-shirt</option>
    <option value="sweat">Sweat</option>
    <option value="casquette">Casquette</option>
  </select>
  <br>

  <label for="color">Couleur :</label>
  <select id="color" name="color">
    <option value="noir">Noir</option>
    <option value="blanc">Blanc</option>
    <option value="rouge">Rouge</option>
    <option value="bleu">Bleu</option>
  </select>
  <br>

  <label for="text">Texte :</label>
  <input type="text" id="text" name="text">
  <br>

  <input type="submit" value="Envoyer">
</form>


    <?php require ("view_footer.php");?>

</body>
</html>