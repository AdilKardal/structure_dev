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
        <img src="imgproduit/<?=$produit['image_produit']?>" alt="" width="500">
        <div class="product">
            <h3><?=$produit['nom_produit']?></h3>
            <p><?=$produit['description_produit']?></p>
            <ul>
                <li>Compartiment principal spacieux</li>
                <li>Plusieurs poches pour ranger vos affaires</li>
                <li>Bretelles rembourrées pour plus de confort</li>
                <li>Sangles de compression pour maintenir votre équipement en place</li>
            </ul>
            <p>Ce sac à dos est disponible en plusieurs tailles pour s'adapter à tous les besoins. Le prix varie en fonction de la taille choisie :</p>
           <p><?=$produit['prix_produit']?>€</p>
            <p>Personnalisez votre objet en prenant <a class="aproduit" href="view_contact.php">contact ici</a></p>
        </div>
    </div>
 
 <a href="view_coffret.php"><p>Retour aux coffrets</p></a>
    

    <?php require("view_footer.php"); ?>
</body>

</html>