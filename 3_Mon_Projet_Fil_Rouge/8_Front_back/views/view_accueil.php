<?php require("../models/connect.php");
// var_dump($_SESSION);die;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa">
  <title>Laia Créa</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>

<body>



  <?php require("view_header.php") ?>

  <!-- <p class="best">Nos Coffrets</p> -->

  <div id="slider">
    <div>
      <img src="images/bebe.webp" alt="" id="slide">
    </div>
    <span id="precedent" onclick="changeSlide(-1)" class="material-icons-outlined">chevron_left</span>
    <span id="suivant" onclick="changeSlide(1)" class="material-icons-outlined">chevron_right</span>
  </div>
  <div class="textacc">"Transformez vos souvenirs en œuvres d'art personnalisées avec notre site de personnalisation d'objets. Des mariages aux naissances en passant par les voyages et la décoration intérieure, créez des pièces uniques qui reflètent votre style et vos moments les plus précieux."</div>
  <section class="contain">
    <article class="cat">

      <a href="#">
        <div>
          <img src="images/bebeg.webp" alt="">
          <p>Naissances</p>
        </div>
      </a>

      <a href="#">
        <div>
          <img src="images/bougie.webp" alt="">
          <p>Maison</p>
        </div>
      </a>

      <a href="#">
        <div>
          <img src="images/mariage.webp" alt="">
          <p>Mariage</p>
        </div>
      </a>

      <a href="#">
        <div>
          <img src="images/voyage.webp" alt="">
          <p>Voyage</p>
        </div>
      </a>
    </article>
  </section>

  <?php require("view_footer.php") ?>
  <script src="slider.js"></script>
</body>

</html>