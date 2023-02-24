<?php
require("../views/view_admin.php");
// On entre dans la boucle seulement lors de l’envoi du formulaire

//create

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

//read 

if(empty($_GET['id'])) {
    die("Veuillez choisir un utilisateur valide à éditer");
}elseif(!empty($_POST['form_update'])) {
    $sql = 'UPDATE utilisateur
            SET nom_utilisateur=:nom_utilisateur,
                prenom_utilisateur=:prenom_utilisateur,
                email_utilisateur=:email_utilisateur ';
    if (!empty($_POST['mdp_utilisateur'])) {
        $sql .= ', mdp_utilisateur=:mdp_utilisateur ';
    }
    $sql .= ' WHERE id_utilisateur=:id_utilisateur;';
    $req = $db->prepare($sql);
    $req->bindParam(":nom_utilisateur", $_POST['nom_utilisateur']);
    $req->bindParam(":prenom_utilisateur", $_POST['prenom_utilisateur']);
    $req->bindParam(":email_utilisateur", $_POST['email_utilisateur']);
    if (!empty($_POST['mdp_utilisateur'])) {
        $mdp_utilisateur = password_hash($_POST['mdp_utilisateur'], PASSWORD_BCRYPT);
        $req->bindParam(":mdp_utilisateur", $utilisateur_mdp);
    }
    $req->bindParam(":id_utilisateur", $_POST['id_utilisateur']);
    $req->execute();

    $color = "orange;";
    $message = "Mise à jour effectuée";


$req = $db->prepare("SELECT * FROM utilisateur WHERE id_utilisateur=:id_utilisateur;");
$req->bindParam(":id_utilisateur", $_GET['id']);
$req->execute();
$utilisateur = $req->fetch(PDO::FETCH_ASSOC);
}
//delete

elseif(!empty($_POST['form_delete'])) {
    $sql = 'DELETE FROM utilisateurs WHERE utilisateur_id=:id_utilisateur;';
    $req = $db->prepare($sql);
    $req->bindParam(":id_utilisateur", $_POST['utilisateur_id']);
    $req->execute();
   
    $color = "red;";
    $message = "Suppression effectuée";
}

header("Location:../views/view_admin");
