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

        return $imc;

    }

}