<?php
include_once('../models/connect.php');



if (!empty($_POST['form_insert'])) {
    $color = "transparent; display: none;";
    $message = "";
    $select = $db->prepare("SELECT nom_produit FROM produit WHERE nom_produit=:nom_produit;");
    $select->bindParam(":nom_produit", $_POST["nom_produit"]);
    $select->execute();
    if (empty($select->fetch(PDO::FETCH_COLUMN))) {
        if (isset($_FILES['image_produit'])) {
            $extensions_ok = array('png', 'jpg', 'jpeg', 'webp');
            // Stocke le chemin et le nom temporaire du fichier importé (ex /tmp/125423.pdf)
            $tmpName = $_FILES['image_produit']['tmp_name'];
            // Stocke le nom du fichier (nom du fichier et son extension importé ex : test.jpg)
            $name = $_FILES['image_produit']['name'];

            if (!in_array(substr(strrchr($_FILES['image_produit']['name'], '.'), 1), $extensions_ok)) {
                $color = "red";
                $message = "Extension non autorisée";
            } else {
                // Si ce n'est pas le cas, on vient l'ajouter avec une requête INSERT 
                $insert = $db->prepare("INSERT INTO produit(nom_produit, description_produit, prix_produit, image_produit, id_categorie)
                                VALUES(:nom_produit, :description_produit, :prix_produit, :image_produit, :id_categorie);");
                $insert->bindParam(":nom_produit", $_POST['nom_produit']);
                $insert->bindParam(":description_produit", $_POST['description_produit']);
                $insert->bindParam(":prix_produit", $_POST['prix_produit']);
                $insert->bindParam(":image_produit", $_FILES['image_produit']['name']);
                $insert->bindParam(":id_categorie", $_POST['id_categorie']);
                // On vient importer l'image téléchargée dans le dossier "imgproduit"
                if ($insert->execute()) {
                    $fichier = move_uploaded_file($tmpName, "../views/imgproduit/" . $name);
                }
            }
        }
    }

    $color = "green;";
    $message = "Insertion effectuée";
    // UPDATE 
} elseif (!empty($_POST['form_update'])) {
    // var_dump($_FILES);die;
    $sql = 'UPDATE produit 
            SET nom_produit=:nom_produit, 
                description_produit=:description_produit, 
                prix_produit=:prix_produit,
                image_produit=:image_produit ';
    $sql .= ' WHERE id_produit=:id_produit;';
    $req = $db->prepare($sql);
    $req->bindParam(":nom_produit", $_POST['nom_produit']);
    $req->bindParam(":description_produit", $_POST['description_produit']);
    $req->bindParam(":prix_produit", $_POST['prix_produit']);
    $req->bindParam(":image_produit", $_FILES['image_produit']['name']);
    if (empty($_FILES)) {
        $req->bindParam(":image_produit", $_FILES['image_produit']['name']);
    }
    $req->bindParam(":id_produit", $_POST['id_produit']);
    if ($req->execute()) {
        $fichier = move_uploaded_file($tmpName, "../views/imgproduit/" . $name);
    }
    $req->execute();

    $color = "orange;";
    $message = "Mise à jour effectuée";
    // DELETE 
} elseif (!empty($_POST['form_delete'])) {
    $sql = 'DELETE FROM produit WHERE id_produit=:id_produit;';
    $req = $db->prepare($sql);
    $req->bindParam(":id_produit", $_POST['id_produit']);
    $req->execute();

    $color = "red;";
    $message = "Suppression effectuée";
}

$produits = $db->query('SELECT * FROM produit')->fetchAll();

header("Location:../views/view_admin");
