<?php 

// Importation des assets nécessaires
require "inc/db.php";
require "class/calcul.php";

$calcul = new Calcul($db);

if(isset($_POST)) {
    $imc = $calcul->calculIMC($_POST["taille"], $_POST["poids"]);
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculateur d'IMC</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

if(!empty($_SESSION["email"] )) {
    ?>
    <div class="bouton_connexion">
        <a href="#"><button type="submit"><?php echo $_SESSION["username"]; ?></button></a>
        <a href="logout.php"><button type="submit">Déconnexion</button></a>
    </div>
    <?php
} else {
    ?>
    <div class="bouton_connexion">
    <a href="register.php"><button type="submit">Inscription</button></a>
    <a href="login.php"><button type="submit">Connexion</button></a>
    </div>

    <?php

}

?>

    <div class="contenant">
            <img src="fond.jpg" alt="Background">

            <div class="texte_centrer"><center><h1><u>Calculer son IMC</u></h1></center>

                <form method="POST" action="">
                    Poids : <input type="text" name="poids" placeholder="Indiquer votre poids en kg"/>
                    Taille :<input type="text" name="taille" placeholder="Indiquer votre taille en mètre"/>
                    <input type="submit" value="Calculer"></p>
                </FORM>

                <?php if(isset($imc)) { echo "Votre IMC est de: ".$imc; } ?>

                <div class="imc">
                    <img src="imc.jpg" alt="Poids">
                </div>

                <center><h3><p><u>Indice de Masse Corporelle (IMC)	Interprétation (d'après l'OMS)</u> :</p>
                    - Insuffisance pondérale (maigreur)<div class="chiffres">moins de 18,5</div><p></p>
                    - Corpulence normale<div class="chiffres">18,5 à 25</div><p></p>
                    - Surpoids<div class="chiffres">25 à 30</div><p></p>
                    - Obésité modérée <div class="chiffres">30 à 35</div><p></p>
                    - Obésité sévère<div class="chiffres">35 à 40</div><p></p>
                    - Obésité morbide ou massive<div class="chiffres">plus de 40</div><p></p></h3></center>
            </div>
        </div> 

        
</body>
</html>