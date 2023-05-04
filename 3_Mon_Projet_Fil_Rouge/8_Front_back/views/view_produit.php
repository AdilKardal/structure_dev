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


    <?php require("view_header.php");
          require_once("../models/connect.php");
    $req = $db->prepare('SELECT * FROM produit WHERE id_categorie=:id_categorie;');
    $id = 2;
    $req->bindParam(":id_categorie", $_GET['id']);
    $req->execute();
    $produit = $req->fetch();?>
        <div class="containproduct">
        <img src="images/<?=$produit['image_produit']?>" alt="">
        <div class="product">
            <h3><?=$produit['nom_produit']?></h3>
            <p>Pack comportant</p>
            <ul>
                <?=$produit['description_produit']?>
            </ul>
            <p>Ce coffret est personnalisable selon vos envies, couleur et police au choix</p>
           <p> Prix : <?=$produit['prix_produit']?>€</p>
            <p>Personnalisez votre <?=$produit['nom_produit']?> en prenant <a class="aproduit" href="view_contact.php">contact ici</a></p>
        </div>
    </div>
 
 <a class="acoff" href="view_coffret.php"><p>Retour aux coffrets</p></a>
    

    <?php require("view_footer.php"); ?>
    <script src="script.js"></script>
</body>

</html>