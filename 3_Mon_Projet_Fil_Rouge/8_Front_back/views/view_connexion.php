<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css?v=<?=date("H:i:s") ?>">
</head>
<body>
    <section class="container">
    <article class="connect">
        <h1>Connectez-vous</h1>
        <form action="../controllers/controller_connexion.php" method="post">
        <input type="hidden" name="form_connexion" value="1">
            <label for="form_email">E-mail</label>
            <input type="email" name="form_email" required>
            <label for="form_password">Mot de passe</label>
            <input type="password" name="form_password">
            <input type="submit" value="Se connecter" id="btnconnect">
            <div id="my-signin2"></div>
            <script>
              function onSuccess(googleUser) {
                console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
              }
              function onFailure(error) {
                console.log(error);
              }
              function renderButton() {
                gapi.signin2.render('my-signin2', {
                  'scope': 'profile email',
                  'width': 240,
                  'height': 50,
                  'longtitle': true,
                  'theme': 'clear',
                  'onsuccess': onSuccess,
                  'onfailure': onFailure
                });
              }
            </script>
            <p>Pas encore inscrit ? <a href="../views/view_inscription.php">Inscrivez-vous</a></p>
        </form>
    
</section>
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</body>
</html>