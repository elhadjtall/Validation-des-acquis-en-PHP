<?php
// Inclure notre  fichier php dans le fichier html

spl_autoload_register(function($class) {
    include('classes/' . $class . '.php');
});
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Compte Bancaire</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nom" id="nom" placeholder="@votre nom" >
        <input type="text" name="solde" id="solde" placeholder="@volde solde">
        <input type="text" name="credit" id="credit" placeholder="@crediter">
        <input type="text" name="retirer" id="retirer" placeholder="@Retirer">
        <input type="submit" name="valider" value="Enregistrer">
    </form>
        <?php
        //on verifie les champs du formulaire 
        if(isset($_POST['valider']) || isset($_POST['nom'])){ // Verifier le super globale ondoscort nom
            echo '<section>';
            //Variable nom
            $nom = $_POST['nom'];
            //On creer des variables
            $solde = $_POST['solde'];
            //On creer une nouvelle instance de compte
            $compte = new Compte($nom,  $solde); 
            echo '<h2>Détail du compte de M. '.$compte->getNom($nom). '<h2>'; //Détail du compte
            echo $compte;

        //On verifie si le champs du credit est rempli
        $credit = $_POST['credit'];
        if($credit) {
            $compte ->crediter($credit);
            echo '<br>';
            echo $compte;
        }
        // On verifie si le champs retrait est rempli
        $retrait = $_POST['retirer'];
        if($retrait) {
            $compte->retirer($retrait);
            echo $compte;
        }
        echo '</section>';

    }
    ?>
</body>
</html>