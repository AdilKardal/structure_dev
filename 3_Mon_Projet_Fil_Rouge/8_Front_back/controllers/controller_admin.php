<?php
include_once('../models/connect.php');

if (isset($_FILES['image_produit'])) {
    $extensions_ok = array('png', 'jpg', 'jpeg');
    // Stocke le chemin et le nom temporaire du fichier importé (ex /tmp/125423.png)
    $tmpName = $_FILES['image_produit']['tmp_name'];
    // Stocke le nom du fichier (nom du fichier et son extension importé ex : test.jpg)
    $name = $_FILES['image_produit']['name'];
}

if (!empty($_POST['form_insert'])) {
    $select = $db->prepare("SELECT nom_produit FROM produit WHERE nom_produit=:nom_produit;");
    $select->bindParam(":nom_produit", $_POST["nom_produit"]);
    $select->execute();
    if (empty($select->fetch(PDO::FETCH_COLUMN))) {
        if (isset($_FILES['image_produit'])) {
            if (in_array(substr(strrchr($name, '.'), 1), $extensions_ok)) {
                // On vient ajouter le produit avec une requête INSERT 
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
                // si l'extension du fichier n'est pas bonne, un message d'erreur est affiché
            } else {
                echo "Erreur : les extensions de fichier ne sont pas autorisées.";
            }
        }
    }
    echo "Produit ajouté";
    // UPDATE 
} elseif (!empty($_POST['form_update'])) {
    $sql = 'UPDATE produit 
            SET nom_produit=:nom_produit, 
                description_produit=:description_produit, 
                prix_produit=:prix_produit ';
    if (!empty($tmpName)) {
        $sql .= ' , image_produit=:image_produit ';
    }
    $sql .= ' WHERE id_produit=:id_produit;';
    $req = $db->prepare($sql);
    $req->bindParam(":nom_produit", $_POST['nom_produit']);
    $req->bindParam(":description_produit", $_POST['description_produit']);
    $req->bindParam(":prix_produit", $_POST['prix_produit']);
    if (!empty($tmpName)) {
        $req->bindParam(":image_produit", $name);
    }
    $req->bindParam(":id_produit", $_POST['id_produit']);
    if ($req->execute() && !empty($tmpName)) {
        $fichier = move_uploaded_file($tmpName, "../views/imgproduit/" . $name);
    }
    $req->execute();
    // DELETE 
} elseif (!empty($_POST['form_delete'])) {
    $sql = 'DELETE FROM produit WHERE id_produit=:id_produit;';
    $req = $db->prepare($sql);
    $req->bindParam(":id_produit", $_POST['id_produit']);
    $req->execute();
}

$produits = $db->query('SELECT * FROM produit')->fetchAll();

header("Location:../views/view_admin");
