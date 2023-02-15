<?php 
include("../views/view_admin.php");
$message="";
    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["form_insert"])) {
        // On recherche si le nom de l'aticle existe déjà en BDD
        $select = $db->prepare("SELECT nom_produit FROM produit WHERE nom_produit=:nom_produit;");
        $select->bindParam(":nom_produit", $_POST["nom_produit"]);
        $select->execute(); 
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {
            if (isset($_FILES['image_produit'])) {
                $extensions_ok = array('png', 'jpg');
                $tmpName = $_FILES['image_produit']['tmp_name'];
                $name = $_FILES['image_produit']['name'];
                $size = $_FILES['image_produit']['size'];
                $error = $_FILES['image_produit']['error'];

                if (!in_array(substr(strrchr($_FILES['image_produit']['name'], '.'), 1), $extensions_ok)) {
                    $message = '<p class="messageAjout">Extension non autorisée</p>';
                } else {
                    // Si ce n'est pas le cas, on vient l'insérer
                    $insert = $db->prepare("INSERT INTO produit(nom_produit, description_produit, prix_produit, image_produit)
                                VALUES(:nom_produit, :description_produit, :prix_produit, :image_produit);");
                    $insert->bindParam(":nom_produit", $_POST['nom_produit']);
                    $insert->bindParam(":description_produit", $_POST['description_produit']);
                    $insert->bindParam(":prix_produit", $_POST['prix_produit']);
                    $insert->bindParam(":image_produit", $_FILES['image_produit']['name']);
                    if($insert->execute()) {
                        $fichier = move_uploaded_file($_FILES['image_produit']['tmp_name'], "../views/images/imgproduit/" . $_FILES['image_produit']['name']);
                        // Si aucune erreur ne se produit, on propose de se connecter
                        $message = '<p class="messageAjout">Ajout produit réussi.</p>';
                    } else {
                        $message = '<p class="messageAjout">Ajout produit annulé.</p>';
                    }
                }
            }
        }
    }
    
?>