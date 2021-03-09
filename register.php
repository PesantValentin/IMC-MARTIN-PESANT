<?php 

// Importation des assets nécessaires
require "inc/db.php";
require "class/user.php";

// Traitement par la class User
$user = new User($db);



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Enregistrement</title>
</head>
<body>

<div class="backg_sign">
    <img src="fond_signin.png" alt="Background">
</div>

    <div class="sign_in_center">
     <div align="center">
        <form action="" method="POST">
            <div>
                <p><label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username"></p>
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email"></p>
            </div>

            <div>
                <p><label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password"></p>
            </div>
            <button type="submit" name="register">Inscription</button>
        </form>

        <a href="login.php"><button>Aller vers la page de connexion</button></a>

    </div>
    
</body>
</html>
