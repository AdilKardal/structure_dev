<?php
    // On inclut notre connecteur à la base de données
    include("../models/connect.php");
     // On inclut la vue à notre contrôleur
     include("../views/view_inscription.php");
   
    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["form_inscription"])) {
        // On recherche si l'adresse email existe déjà en BDD
        $select = $db->prepare("SELECT utilisateur_email  FROM utilisateurs WHERE utilisateur_email=:utilisateur_email;");
        $select->bindParam(":utilisateur_email", $_POST["form_email"]);
        $select->execute();
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {

            if (isset($_FILES['file'])) {
                $extensions_ok = array('png', 'jpg');
                $countfiles = count($_FILES['file']['name']);
            
                for ($i = 0; $i < $countfiles; $i++) {
                    // Cette ligne vient vérifier si la taille du fichier n'excède pas 3Mo // 1Mo = 1048576
                    if (filesize($_FILES['file']['tmp_name'][$i]) > 3145728) {
                        echo '<span style="color: red;">La taille du fichier dépasse les 3Mo</span>';
                    } elseif ((!in_array(substr(strrchr($_FILES['file']['name'][$i], '.'), 1), $extensions_ok))) {
                        echo '<span style="color: red;">Extension non autorisée</span>';
                    } else {
                        // Cette ligne vient récupérer le nom originel du fichier
                        $file_name = basename($_FILES['file']['name'][$i]);
                        // replace les caractères accentués
                        $accents = '/&([A-Za-z]{1,2})(grave|acute|circ|cedil|uml|lig);/';
                        $string_encoded = htmlentities($file_name, ENT_NOQUOTES, 'UTF-8');
                        $file_name = preg_replace($accents, '$1', $string_encoded);
                        move_uploaded_file($_FILES['file']['tmp_name'][$i], "../views/images/" . $file_name);
                    }
                }
            }
            // Si ce n'est pas le cas, on vient l'insérer
            $insert = $db->prepare("INSERT INTO utilisateurs(utilisateur_nom, utilisateur_prenom, utilisateur_email, utilisateur_mot_de_passe, utilisateur_image)
                                    VALUES(:utilisateur_nom, :utilisateur_prenom, :utilisateur_email, :utilisateur_mot_de_passe, :utilisateur_image);");
            $insert->bindParam(":utilisateur_nom", $_POST['form_nom']);
            $insert->bindParam(":utilisateur_prenom", $_POST['form_prenom']);
            $insert->bindParam(":utilisateur_email", $_POST['form_email']);
            // Nous hachons notre mdp avec l'algo BCRYPT et un coût algorithmique (par défaut à 10)
            $user_password = password_hash($_POST['form_password'], PASSWORD_BCRYPT, array("cost" => 12));
            $insert->bindParam(":utilisateur_mot_de_passe", $user_password);
            $insert->bindParam(":utilisateur_image", $file_name);
            // $insert->bindParam(":user_password", $_POST['form_password']);
            if($insert->execute()) {
                // Si aucune erreur ne se produit, on propose de se connecter
                die('<p style=”color: green;”>Inscription réussie.</p><a href="../views/view_connexion.php">Se connecter.</a>');
            }
            die('<p style=”color: red;”>Inscription échouée.</p><a href="../views/view_inscription.php">Réessayer.</a>');
        }
    }

?>
