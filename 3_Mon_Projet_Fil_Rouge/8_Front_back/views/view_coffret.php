<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffrets</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require("./view_header.php");
    $cat = $db->query('SELECT * FROM categorie')->fetchAll(); ?>
    <div class="containcatcoffret">
        <?php foreach ($cat as $cate) { ?>
            <a href="view_produit.php?id=<?=$cate['id_categorie']?>" class="coffret<?= strtolower(substr($cate['nom_categorie'], 0, 3)) ?> "><?= $cate['nom_categorie'] ?></a>
        <?php } ?>
    </div>
    <?php require("./view_footer.php") ?>
</body>

</html>