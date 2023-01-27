<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>inscription.PHP</h1>
    <form action="../controllers/controller_inscription.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="form_inscription" value="1">
        <input type="text" name="form_nom" placeholder="Nom">
        <input type="text" name="form_prenom" placeholder="Prenom">
        <input type="text" name="form_email" placeholder="Mail">
        <input type="password" name="form_password" placeholder="Mot de passe">
        <input type="file" name="file[]">
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>