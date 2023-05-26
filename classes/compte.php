<?php
class Compte {
    private $nom;
    private $solde;
    const DEVISE = 'Euro';

    public function __construct($nom, $solde){
        $this->nom = $nom;
        $this->solode = $solde;
    }

    public function __toString() {
        $msg = 'Le solde de Monsieur ' .$this->nom. ' est de ' .$this->solde. ' '.self::DEVISE;

        //Retourner le message
        return $msg;
    }
}