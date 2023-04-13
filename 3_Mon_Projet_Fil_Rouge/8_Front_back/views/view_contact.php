<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-Nous</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require("./view_header.php") ?>

    <form class="formcontact" method="post">
        <input type="text" id="nom" name="nom" placeholder="Nom*" required>

        <input type="text" id="prenom" name="prenom" placeholder="Prénom*" required>

        <input type="email" id="email" name="email" placeholder="E-mail*" required>

        <input type="tel" id="tel" name="tel" placeholder="Téléphone">

        <select id="motif" name="motif" onchange="afficherSelect()" required>
            <option value="">Sélectionner un motif *</option>
            <option value="Personnalisation">Personnalisation</option>
            <option value="Evenements">Evenements</option>
            <option value="Demande d'informations">Demande d'informations</option>
            <option value="Autre">Autre</option>
        </select>
        <div id="formperso">
        <select name="persocat" id="perso" >
            <option value="">Catégorie</option>
            <option value="naissance">Naissance</option>
            <option value="mariage">Mariage</option>
            <option value="Voyage">Voyage</option>
            <option value="maison">Maison</option>
        </select>
        <select name="persocol" id="perso" >
            <option value="">Couleur</option>
            <option value="noir">Noir</option>
            <option value="bleu">Bleu</option>
            <option value="rouge">Rouge</option>
            <option value="or">Or</option>
            <option value="autre">Autre</option>
        </select>
        <input type="text" name="persotxt" placeholder="Texte" >
        </div>


        <textarea id="message" name="message" placeholder="Votre message...*"></textarea>

        <input class="submit" type="submit" value="ENVOYER">
    </form>
    <?php
    if (isset($_POST['message'])) {
        $motif = $_POST['motif'];
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: webmaster@monsite.fr' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        if ($motif === "Personnalisation") {
            $message = '<h4>Message envoyé depuis la page Contact de monsite.fr</h4>
        <p><b>Nom : </b>' . $_POST['nom'] . " " . $_POST['prenom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Tel : </b>' . $_POST['tel'] . '<br>
        <b>Motif : </b>' . $_POST['motif'] . '<br>
        <b>Catégorie : </b>' . $_POST['persocat'] . '<br>
        <b>Couleur : </b>' . $_POST['persocol'] . '<br>
        <b>Texte : </b>' . $_POST['persotxt'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p><br>
        <p>Répondre à ' . $_POST['email'] . '</p>';
        } else {
        $message = '<h4>Message envoyé depuis la page Contact de monsite.fr</h4>
        <p><b>Nom : </b>' . $_POST['nom'] . " " . $_POST['prenom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Tel : </b>' . $_POST['tel'] . '<br>
        <b>Motif : </b>' . $_POST['motif'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p><br>
        <p>Répondre à ' . $_POST['email'] . '</p>';
        }
        $retour = mail('adil.kardal@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if ($retour) {
            echo '<p class="msgenvoye">Votre message a bien été envoyé.</p>';
        } else {
            echo '<p class="msgnonenvoye">Erreur dans l\'envoi du message, veuillez réessayer.</p>';
        }
    }
    ?>
    <?php require("./view_footer.php") ?>
    <script src="slider.js"></script>
</body>

</html>