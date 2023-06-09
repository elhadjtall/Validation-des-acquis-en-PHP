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
    // Donnner de la visibilité du secteur private pour qu'il ne soit pas manipuler à l'extérieur
    private function setNom($nom){
        if(is_string($nom)){
            $this->nom = $nom;
        }
    }
    //Secteur de visibilité de solde
    private function setSolde($solde){
        if(is_numeric($solde)){
            $this->solde = $solde;
        }
    }
    // Fonction get (un guetteur)
    public function getNom($nom){
        return $this->nom;
    }
    public function getSolde($solde) {
        return $this->solde;
    }
    // methode de credité le compte
    public function crediter($ajout) {
        if ($ajout <= 0) {
            echo '<br>Impossible de recharger !<br>';
        }elseif(is_numeric($ajout)){
             // $this->solde = $this->solde + $ajout;
            $this->solde += $ajout;
            echo '<br>Le compte à été crediter de '.$ajout. ' '.self::DEVISE.'<br>Nouveau solde: <br>';
        }else{
            echo '<br>';
        }
    }
    //methode retirer dans votre compte
    public function retirer ($retrait) {
        if($retrait <= 0) { // SI le montant retirer est inférieur ou égal à zero retrait impossible
            echo '<br>Retrait impossible !<br>';
        }elseif(is_numeric($retrait)){ // Verification numérique du montant rétirer 
            $this->solde -= $retrait; // Souscription du montant par rapport au solde du compte
            echo '<br>Le compte à été soustrait de '.$retrait. ' '.self::DEVISE.'<br>Nouveau solde: <br>';
        }else {
            echo '<br>';
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