<?php
class Compte {
    private $nom;
    private $solde;
    const DEVISE = 'Euro';

    public function __construct($nom, $solde){

        if(is_string($nom)){
            $this->nom =$nom;
        }
        $this->nom = $nom;
        // On va controler l'affection à la propriété du solde
        if(is_numeric($solde)) { // Controler si la valeur numérique on affecte si non 

            $this->solde = $solde;
        }
        
    }

    //Methode toString
    public function __toString() {
        //Creer une condition 
        if(empty($this->nom)) { //SI la variable nom est vide d'envoyer incorrect
            $msg = 'Merci d\'entrer le nom du client';
        } elseif (empty($this->solde)){ //Si le variable solde est vide
            $msg = 'Le solde de Monsieur ' .$this->nom. 'n\'est pas correct.';
        }else{
            $msg = 'Le solde de Monsieur ' .$this->nom. ' est de ' .$this->solde. ' '.self::DEVISE;
        } 
        //Retourner le message
        return $msg;
    }
}