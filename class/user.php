<?php

class User {

    private $_email;
    private $_username;
    private $_password;

    // Méthode : Importation de la bdd
    public function __construct($db) {
        $this->_db = $db;
    }

    // Fonction ajout d'utilisateur : Email, Nom d'utilisateur et mot de passe
    public function addUser($email, $username, $password) {
        $this->_db->query('INSERT INTO `user`(`id`, `username`, `email`, `password`) VALUES (NULL, "'. $username . '","' . $email . '","' . $password . '")');

        header("Location: login.php");

    }

    // Fonction connexion utilisateur : Nom d'utilisateur et mot de passe
    public function connectUser($username, $password) {
        $checkUser = $this->_db->query('SELECT * FROM `user` WHERE username = "' . $username . '" && password = "' . $password . '"');

        $user = $checkUser->fetch();
        $_SESSION["username"] = $user["username"];
        $_SESSION["email"] = $user["email"];

        header("Location: index.php");

    }

    public function logout() {
        $_SESSION = array();
        session_destroy();
        header("Location: index.php");
    }

}