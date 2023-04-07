<?php
require "../models/connect.php";

$req = $db->prepare('SELECT * FROM produit WHERE id_produit=:id_produit;');
$req->bindParam(":id_produit", $_GET['id']);
$req->execute();
$produit = $req->fetch();
?>

<fieldset>
    <legend>Update</legend>
    <form class="" method="post" action="../controllers/controller_admin.php" enctype="multipart/form-data">
        <input type="hidden" name="form_update" value="1">
        <input type="hidden" name="id_produit" value="<?=$produit['id_produit']?>">
        <label>Nom:
            <input type="text" name="nom_produit" value="<?=$produit['nom_produit']?>">
        </label>
        <br/>
        <label>Description:
            <input type="text" name="description_produit" value="<?=$produit['description_produit']?>">
        </label>
        <br/>
        <label>Prix:
            <input type="number" name="prix_produit" value="<?=$produit['prix_produit']?>">
        </label>
        <br/>
        <label>Image:
            <input type="file" name="image_produit" value="<?=$produit['image_produit']?>">
        </label>
        <br/>
        <label for="id_categorie">Catégorie:</label>
            <select id="id_categorie" name="id_categorie">
                <option value="1">Naissances</option>
                <option value="2">Mariages</option>
                <option value="3">Voyage</option>
                <option value="4">Maison</option>
            </select>
        <input type="submit" value="Mettre à jour">
    </form>
</fieldset>
<a href="view_admin.php">Retour</a>