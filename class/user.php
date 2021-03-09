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
        
        if(!empty($email)) {
            header("Location: login.php");
        }
        
    }

    // Fonction connexion utilisateur : Nom d'utilisateur et mot de passe
    public function connectUser($username, $password) {
        $checkUser = $this->_db->query('SELECT * FROM `user` WHERE username = "' . $username . '" && password = "' . $password . '"');

        $user = $checkUser->fetch();
        $_SESSION["username"] = $user["username"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["id"] = $user["id"];

        $date = date("d/m/Y");
        $this->_db->query('INSERT INTO `connexion_log`(`id`, `user_id`, `date`) VALUES (NULL, "'. $user["id"] . '","' . $date . '")');

        header("Location: index.php");

    }

    // Fonction qui permet de déconnecter l'utilisateur
    public function logout() {
        $_SESSION = array();
        session_destroy();
        header("Location: index.php");
    }

    // Fonction qui ne prend pas d'entrée mais qui permet de changer les boutons du header en fonction de si l'utilisateur est connecter ou non
    public function checkUserConnectHeader() {
        if(isset($_SESSION["email"])) {
            echo '<div class="bouton_connexion">
            <p><?php echo $_SESSION["username"]; ?></p>
            <a href="logout.php"><button type="submit">Déconnexion</button></a>
        </div>';
        } else {
            echo '<div class="bouton_connexion">
            <a href="register.php"><button>Inscription</button></a>
            <a href="login.php"><button>Connexion</button></a>
            </div>';
        }
    }

}
