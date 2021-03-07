<?php 

// Importation des assets nécessaires
require "inc/db.php";
require "class/user.php";

$user = new User($db);

$user->logout();