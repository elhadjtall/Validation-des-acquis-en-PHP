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
        <input type="text" name="solde" id="solde" placeholder="@volde solde">
        <input type="submit" name="valider" value="Enregistrer">
    </form>
    <?php
    //on verifie les champs du formulaire 
    if(isset($_POST['valider'])){
        //On creer des variables
        $solde = $_POST['solde'];
        //On creer une nouvelle instance de compte
        $compte = new Compte('Oumar',  $solde); 
        echo $compte;
    }
   
    ?>
</body>
</html>