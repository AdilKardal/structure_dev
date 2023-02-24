<?php require("../models/connect.php");
// var_dump($_SESSION);die;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
</head>
<body>
<?php require("view_header.php") ?>

<!-- CREATE -->
<fieldset>
        <legend>Ajout produit</legend>
        <form class="ajoutproduit" method="post" action="../controllers/controller_admin.php" enctype="multipart/form-data">
            <input type="hidden" name="form_insert" value="1">
            <label>Nom:
                <input type="text" name="nom_produit">
            </label>
            <br/>
            <label>Description:
                <input type="text" name="description_produit">
            </label>
            <br/>
            <label>Prix:
                <input type="number" name="prix_produit">
            </label>
            <br/>
            <label>Image :
                <input type="file" name="image_produit">
            </label>
            <br/>
            <input type="submit" value="Ajouter">
        </form>
</fieldset>

<!-- READ -->

    <div style="font-weight: 600; color: <?=$color?>"><?=$message?></div>
    <?php 
     $produits = $db->query('SELECT * FROM produit')->fetchAll();
     if(empty($produits)) { ?>
        <p>Aucun produit n'est ajouté</p>
    <?php } else { ?>
  <table>
            <thead>
                <tr>
                    <td>NOM</td>
                    <td>Description</td>
                    <td>Prix</td>
                    <td>Image</td>
                    <td>Edition</td>
                    <td>Suppression</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach($produits as $produit) { ?>
                <tr>
                    <td><?=ucwords($produit['nom_produit'])?></td>
                    <td><?=ucfirst($produit['description_produit'])?></td>
                    <td><?=$produit['prix_produit']?></td>
                    <td><?=$produit['image_produit']?></td>
                    <td>
                        <a href="view_update.php?id=<?=$produit['id_produit']?>">Editer</a>&nbsp;
                    </td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="form_delete" value="1">
                            <input type="hidden" name="id_produit" value="<?=$produit['id_produit']?>">
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php } }?>
		</tbody>
	</table>
<?php require("view_footer.php") ?>
    <script src="script.js"></script>
</body>
</html>