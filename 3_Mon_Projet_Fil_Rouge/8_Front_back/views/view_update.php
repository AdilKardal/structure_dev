<?php
require "../models/connect.php";

$req = $db->prepare('SELECT * FROM produit WHERE id_produit=:id_produit;');
$req->bindParam(":id_produit", $_GET['id']);
$req->execute();
$produit = $req->fetch();
?>

<fieldset>
    <legend>Update</legend>
    <form method="post" action="../controllers/controller_admin.php">
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
        <input type="submit" value="Mettre à jour">
    </form>
</fieldset>