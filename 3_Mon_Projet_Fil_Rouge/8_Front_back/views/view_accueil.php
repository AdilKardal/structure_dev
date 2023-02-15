<?php include("../models/connect.php"); 
// var_dump($_SESSION);die;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laia Créa</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
</head>

<body>
<header>

    
<?php include("view_header.php") ?>
</header>
  <p class="best">Nos Best-Sellers...</p>

<div id="slider">
 <div >
  <img src="images/bebe.jpeg" alt="" id="slide">
 </div> 
  <span id="precedent" onclick="ChangeSlide(-1)" class="material-icons-outlined">chevron_left</span>
    <span id="suivant" onclick="ChangeSlide(1)" class="material-icons-outlined">chevron_right</span>
</div>

<section class="contain">
  <article class="cat">

  <a href="#">
    <div>
    <img src="images/bebeg.jpeg" alt="">
    <p>Naissances</p>
    </div>
  </a>

  <a href="#">
    <div>
        <img src="images/bougie.jpeg" alt="">
        <p>Maison</p>
    </div>
  </a>

  <a href="#">
    <div>
      <img src="images/mariage.jpeg" alt="">
      <p>Mariage</p>
    </div>
  </a>

  <a href="#">
    <div>
        <img src="images/voyage.jpeg" alt="">
        <p>Voyage</p>
    </div>
  </a>
    </article>
</section>

<?php include("view_footer.php") ?>
<script src="slider.js"></script>
</body>
</html>