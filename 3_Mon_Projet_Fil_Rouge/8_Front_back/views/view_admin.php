<?php include("../models/connect.php");
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
</head>
<body>
<?php include("view_header.php") ?>
<fieldset>
        <legend>Ajout produit</legend>
        <form method="post" action="../controllers/controller_admin.php" enctype="multipart/form-data">
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

<?php include("view_footer.php") ?>
    <script src="script.js"></script>
</body>
</html>