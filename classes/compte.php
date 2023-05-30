<?php
class Compte {
    private $nom;
    private $solde;
    const DEVISE = 'Euro';

    public function __construct($nom, $solde){
        $this->nom = $nom;
        // On va controler l'affection à la propriété du solde
        if(is_numeric($solde)) { // Controler si la valeur numérique on affecte si non 

            $this->solde = $solde;
        }
        
    }

    //Methode toString
    public function __toString() {
        //Creer une condition 
        if(empty($this->solde)) { //SI la variable solde est vide d'envoyer incorrect
            $msg = 'Le solde de Monsieur ' .$this->nom. 'n\'est pas correct.';
        } else{
            $msg = 'Le solde de Monsieur ' .$this->nom. ' est de ' .$this->solde. ' '.self::DEVISE;
        } 
        //Retourner le message
        return $msg;
    }
}