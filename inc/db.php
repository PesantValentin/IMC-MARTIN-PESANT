<?php 

session_start();

$db = null;

try {

    $db = new PDO("mysql:host=localhost;dbname=kbwyoyxi_jsphp;charset=utf8", "kbwyoyxi_jsphp", "Re05YtSd.jZ36@");

} catch(Exception $e) {
    echo "Erreur de connexion à la base de donnée";
}