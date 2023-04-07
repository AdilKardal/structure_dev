<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-Nous</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>

<body>
    <?php require("./view_header.php") ?>
   
        <form class="formcontact"  method="post">
            <input type="text" id="nom" name="nom" placeholder="Nom*" required>

            <input type="text" id="prenom" name="prenom" placeholder="Prénom*" required>

            <input type="email" id="email" name="email" placeholder="E-mail*" required>

            <input type="tel" id="tel" name="tel" placeholder="Téléphone">

            <select id="motif" name="motif" required>
                <option value="">Sélectionner un motif *</option>
                <option value="Demande d'informations">Demande d'informations</option>
                <option value="Evenements">Evenements</option>
                <option value="Devis">Devis</option>
                <option value="Autre">Autre</option>
            </select>

            <textarea id="message" name="message" placeholder="Votre message...*"></textarea>

            <input class="submit" type="submit" value="ENVOYER">
        </form>
        <?php
        var_dump($_POST['message']);die;
    if (isset($_POST['message'])) {
        $retour = mail('adil.kardal@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: adil.kardal@gmail.com' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour){
            echo '<p>Votre message a bien été envoyé.</p>';
        }
            
    }
    ?>
    <?php require("./view_footer.php") ?>
</body>

</html>