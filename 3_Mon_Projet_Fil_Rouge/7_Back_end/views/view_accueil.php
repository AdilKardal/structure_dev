<?php include("../models/connect.php"); 
// var_dump($_SESSION);die;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
   <?php include("./view_header.php") ?>
        <!-- <button class="btnheader" onclick="window.location.href = '../views/view_connexion.php';">Se connecter</button> -->
   

    <section class="containaccueil">
        <!-- 1er article  -->
        <article class="haut">
            <div>
                <h2>Votre métier de demain, à portée de main</h2>
                <p>Développez de nouvelles compétences dans le domaine de l’informatique et intégrer la formation de votre choix.</p>
                <button class="candidature">Démarrer ma candidature</button>
                <button class="btnformation">Découvrir les formations</button>
            </div>
            <img src="./images/undraw_studying_re_deca.SVG" alt="">
        </article>
        <!-- 2eme article  -->
        <article class="milieu">
            <div>
                <img src="./images/Ellipse 1.svg" alt="">
                <h3>Diplômes certifiants</h3>
                <p>Nos parcours procurent des titres reconnus par l'Etat</p>
            </div>
            <div>
                <img src="./images/Ellipse 2.svg" alt="">
                <h3>Mentor</h3>
                <p>Un expert du secteur vous suit de manière régulière</p>
            </div>
            <div>
                <img src="./images/Ellipse 3.svg" alt="">
                <h3>Remboursé si non embauché</h3>
                <p>Un expert du secteur vous suit de manière régulière</p>
            </div>
        </article>
        <!-- 3eme article  -->
        <article class="bas">
            <h3>Témoignages et sourires</h3>
            <img src="./images/Ellipse 4.svg" alt="" width="100">
            <h4>Austin</h4>
            <q>Too easy</q>
            <div class="arrow">
                <img src="./images/Arrow back ios.svg" alt="" width="20">
                <img src="./images/Arrow forward ios.svg" alt="" width="20">
            </div>

        </article>
    </section>

    <?php include("./view_footer.php") ?>
    <script src="script.js?v=<?=date(("H:i:s"))?>"></script>
</body>

</html>