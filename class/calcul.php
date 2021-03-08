<?php

class Calcul {

    private $_taille;
    private $_poids;

    // Méthode : Importation de la bdd
    public function __construct($db) {
        $this->_db = $db;
    }

    // Fonction du calcul de l'IMC : Poids x taille (m2)
    public function calculIMC($taille, $poids) {

        $poidsCarre = $poids*$poids;
        $imc = $taille/$poidsCarre;

        $this->_db->query('INSERT INTO `calcul_log`(`id`, `poids`, `taille`, `imc`) VALUES (NULL, "'. $poids . '","' . $taille . '","' . $imc . '")');

        return $imc;

    }

    // Fonction qui permet d'afficher l'imc sur la page si elle existe : prend pour entrée la valeure de l'imc
    public function echoIMC($imc) {
        if($imc > 0) {
            echo "Votre IMC est de: ".$imc;
        }
    }

}