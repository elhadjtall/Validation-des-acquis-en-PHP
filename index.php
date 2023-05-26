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
    <title>COmpte Bancaire</title>
</head>
<body>
    <?php
    //On creer une nouvelle instance de compte
    $compte = new Compte(12345678,  'Toto'); 
    echo $compte;
    ?>
</body>
</html>