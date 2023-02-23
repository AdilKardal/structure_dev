<?php
    // On inclut notre connecteur à la base de données
    require("../models/connect.php");
     // On inclut la vue à notre contrôleur
     require("../views/view_connexion.php");
   
    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["form_inscription"])) {
        // On recherche si l'adresse email existe déjà en BDD
        $select = $db->prepare("SELECT email_utilisateur  FROM utilisateur WHERE email_utilisateur=:email_utilisateur;");
        $select->bindParam(":email_utilisateur", $_POST["form_email"]);
        $select->execute();
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {
            // Si ce n'est pas le cas, on vient l'insérer
            $insert = $db->prepare("INSERT INTO utilisateur(nom_utilisateur, prenom_utilisateur, email_utilisateur, mdp_utilisateur, num_rue_adresse_utilisateur,
             nom_adresse_utilisateur, cp_ville_utilisateur, ville_utilisateur, pays_utilisateur)
                                    VALUES(:nom_utilisateur, :prenom_utilisateur, :email_utilisateur, :mdp_utilisateur, :num_rue_adresse_utilisateur, :nom_adresse_utilisateur,
                                     :cp_ville_utilisateur, :ville_utilisateur, :pays_utilisateur);");
            $insert->bindParam(":nom_utilisateur", $_POST['form_nom']);
            $insert->bindParam(":prenom_utilisateur", $_POST['form_prenom']);
            $insert->bindParam(":email_utilisateur", $_POST['form_email']);
            // Nous hachons notre mdp avec l'algo BCRYPT et un coût algorithmique (par défaut à 10)
            $user_password = password_hash($_POST['form_mdp'], PASSWORD_BCRYPT, array("cost" => 12));
            $insert->bindParam(":mdp_utilisateur", $user_password);
            $insert->bindParam(":num_rue_adresse_utilisateur", $_POST['form_num_adresse']);
            $insert->bindParam(":nom_adresse_utilisateur", $_POST['form_nom_adresse']);
            $insert->bindParam(":cp_ville_utilisateur", $_POST['form_cp']);
            $insert->bindParam(":ville_utilisateur", $_POST['form_ville']);
            $insert->bindParam(":pays_utilisateur", $_POST['form_pays']);
            // $insert->bindParam(":user_password", $_POST['form_password']);
            if($insert->execute()) {
                // Si aucune erreur ne se produit, on propose de se connecter
                die('<p style=”color: green;”>Inscription réussie.</p><a href="../views/view_connexion.php">Se connecter.</a>');
            }
            die('<p style=”color: red;”>Inscription échouée.</p><a href="../views/view_inscription.php">Réessayer.</a>');
        }
    }
    header("Location:../views/view_accueil");
?>
