<?php
    // On inclut notre connecteur à la base de données
    require("../models/connect.php");
     // On inclut la vue à notre contrôleur
     require("../views/view_connexion.php");
   
    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["form_inscription"])) {
        // On recherche si l'adresse email existe déjà en BDD
        $select = $db->prepare("SELECT email_administrateur  FROM administrateur WHERE email_administrateur=:email_administrateur;");
        $select->bindParam(":email_administrateur", $_POST["form_email"]);
        $select->execute();
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {
            // Si ce n'est pas le cas, on vient l'insérer
            $insert = $db->prepare("INSERT INTO administrateur(email_administrateur, mdp_administrateur)
                                    VALUES(:email_administrateur, :mdp_administrateur);");
            $insert->bindParam(":email_administrateur", $_POST['form_email']);
            // Nous hachons notre mdp avec l'algo BCRYPT et un coût algorithmique (par défaut à 10)
            $user_password = password_hash($_POST['form_password'], PASSWORD_BCRYPT, array("cost" => 12));
            $insert->bindParam(":mdp_administrateur", $user_password);
            // $insert->bindParam(":user_password", $_POST['form_password']);
            if($insert->execute()) {
                // Si aucune erreur ne se produit, on propose de se connecter
                die('<p style=”color: green;”>Inscription réussie.</p><a href="../views/view_connexion.php">Se connecter.</a>');
            }
            die('<p style=”color: red;”>Inscription échouée.</p><a href="../views/view_inscription.php">Réessayer.</a>');
        }
    }
    header("Location:../views/view_accueil.php");
?>
