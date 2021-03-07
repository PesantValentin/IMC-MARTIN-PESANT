<?php 

// Importation des assets nécessaires
require "inc/db.php";
require "class/user.php";

// Traitement par la class User
$user = new User($db);

if(isset($_POST["connexion"])){

    $user->connectUser($_POST["username"], $_POST["password"]);

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
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
                <p><label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password"></p>
            </div>
            <button type="submit" name="connexion">Connexion</button>
        </form>

        <a href="register.php"><button>Aller vers la page d'inscription</button></a>

    </div>
    
</body>
</html>