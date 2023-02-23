<?php
require("../views/view_admin.php");
// On entre dans la boucle seulement lors de l’envoi du formulaire
if (!empty($_POST["form_insert"])) {
    // On recherche si le nom de l'aticle existe déjà en BDD
    $select = $db->prepare("SELECT nom_produit FROM produit WHERE nom_produit=:nom_produit;");
    $select->bindParam(":nom_produit", $_POST["nom_produit"]);
    $select->execute();
    if (empty($select->fetch(PDO::FETCH_COLUMN))) {
        if (isset($_FILES['image_produit'])) {
            $extensions_ok = array('png', 'jpg');
            // Stocke le chemin et le nom temporaire du fichier importé (ex /tmp/125423.pdf)
            $tmpName = $_FILES['image_produit']['tmp_name'];
            // Stocke le nom du fichier (nom du fichier et son extension importé ex : test.jpg)
            $name = $_FILES['file']['name'];

            if (!in_array(substr(strrchr($_FILES['image_produit']['name'], '.'), 1), $extensions_ok)) {
            } else {
                // Si ce n'est pas le cas, on vient l'ajouter avec une requête INSERT 
                $insert = $db->prepare("INSERT INTO produit(nom_produit, description_produit, prix_produit, image_produit)
                                VALUES(:nom_produit, :description_produit, :prix_produit, :image_produit);");
                $insert->bindParam(":nom_produit", $_POST['nom_produit']);
                $insert->bindParam(":description_produit", $_POST['description_produit']);
                $insert->bindParam(":prix_produit", $_POST['prix_produit']);
                $insert->bindParam(":image_produit", $_FILES['image_produit']['name']);
                // On vient importer l'image téléchargée dans le dossier "imgproduit"
                if ($insert->execute()) {
                    $fichier = move_uploaded_file($tmpName, "../views/imgproduit/" . $name);
                }
            }
        }
    }
} 
header("Location:../views/view_admin");
