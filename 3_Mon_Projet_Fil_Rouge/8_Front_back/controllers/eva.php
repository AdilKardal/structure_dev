<?php
// On inclut notre connecteur à la base de données
include('../PHP/connect.php');
$message = "";
    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["formAjoutProduits"])) {
        // On recherche si le nom de l'aticle existe déjà en BDD
        $select = $bdd->prepare("SELECT nom_produit FROM produits WHERE nom_produit=:nom_produit;");
        $select->bindParam(":nom_produit", $_POST["ajoutArticleNom"]);
        $select->execute(); 
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {
            if (isset($_FILES['ajoutArticleImage'])) {
                $extensions_ok = array('png', 'jpg');
                $tmpName = $_FILES['ajoutArticleImage']['tmp_name'];
                $name = $_FILES['ajoutArticleImage']['name'];
                $size = $_FILES['ajoutArticleImage']['size'];
                $error = $_FILES['ajoutArticleImage']['error'];

                if (!in_array(substr(strrchr($_FILES['ajoutArticleImage']['name'], '.'), 1), $extensions_ok)) {
                    $message = '<p class="messageAjout">Extension non autorisée</p>';
                } else {
                    // Si ce n'est pas le cas, on vient l'insérer
                    $insert = $bdd->prepare("INSERT INTO produits(nom_produit, description_produit, prix_produit, stock_produit, image_produit, id_categorie)
                                VALUES(:nom_produit, :description_produit, :prix_produit, 10, :image_produit, :id_categorie);");
                    $insert->bindParam(":nom_produit", $_POST['ajoutArticleNom']);
                    $insert->bindParam(":description_produit", $_POST['ajoutArticleDescription']);
                    $insert->bindParam(":prix_produit", $_POST['ajoutArticlePrix']);
                    $insert->bindParam(":image_produit", $_FILES['ajoutArticleImage']['name']);
                    $insert->bindParam(":id_categorie", $_POST['ajoutArticleCategorie']);
                    if($insert->execute()) {
                        $fichier = move_uploaded_file($_FILES['ajoutArticleImage']['tmp_name'], "../images/imagesProduits/" . $_FILES['ajoutArticleImage']['name']);
                        // Si aucune erreur ne se produit, on propose de se connecter
                        $message = '<p class="messageAjout">Ajout produit réussi.</p>';
                    } else {
                        $message = '<p class="messageAjout">Ajout produit annulé.</p>';
                    }
                }
            }
        }
    }
    include('../pages/pageAjoutProduits.php');
?>