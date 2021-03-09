<?php 

// Importation des assets nécessaires
require "inc/db.php";
require "class/calcul.php";
require "class/user.php";

// On prépare les classes nécessaires pour la page
$user = new User($db);
$calcul = new Calcul($db);

// On vérifie l'envoi du formulaire en Ajax pour lancer le calcule
if(isset($_POST["poids"])) {
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

    <?php $user->checkUserConnectHeader(); ?>

    <div class="contenant">
            <img src="fond.jpg" alt="Background">

            <div class="texte_centrer">
            <div align="center">
            <h1><u>Calculer son IMC</u></h1>
            </div>

                <?php 
                if(isset($_SESSION["email"])) {
                ?>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        <script type="text/javascript">
                        function sendData()
                            {
                            var name = document.getElementById("poids").value;
                            var age = document.getElementById("taille").value;
                            $.ajax({
                                type: 'post',
                                url: '',
                                data: {
                                name:name,
                                age:age
                                },
                                success: function (response) {
                                $('#res').html("Vos données seront sauvegardées");
                                }
                            });
                                
                            return false;
                            }
                        </script>

                    <form method="POST" onsubmit="return sendData();">
                    Poids : <input type="text" name="poids" placeholder="Indiquer votre poids en kg"/>
                    Taille :<input type="text" name="taille" placeholder="Indiquer votre taille en cm"/>
                    <input type="submit" name="submit_form" value="Calculer"></p>
                    </form>

                    <?php
                } else {
                    echo "Vous devez vous connecter pour effectuer une mesure";
                }
                ?>

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
