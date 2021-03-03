<?php

/**
 * Class Database
 */
class Database {

    // Variable
    private $pdo;

    /**
     * Username : Nom d'utilisateur MySQL
     * Password : Mot de passe
     * Database_name : Nom de la base de donnée
     * Host : Adresse du serveur
     */

    public function __construct ($username, $password, $database_name, $host = 'localhost') {
        $this->pdo = new PDO("mysql:dbname=$database_name;host=$host", $username, $password);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    }

    public function query($query, $params = false) {
        if ($params) {
            $req = $this->pdo->prepare($query);
            $req->execute($params);
        } else {
            $req = $this->pdo->query($query);
        }

        return $req;
    }
    
    public function lastInsertId() {
        return $this->pdo->lastInsertId();
    }
}