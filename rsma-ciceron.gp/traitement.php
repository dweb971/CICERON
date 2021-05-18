<?php 
ini_set('display_errors', 1);

// autoloader
spl_autoload_register(function ($name) {
    echo "Tentative de chargement de $name.\n";
    throw new Exception("Impossible de charger $name.");
});

try {
   // instanciation des classes
   include("classes/utilisateur.php");
   

} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

    // traitement formulaire 
    $user = new utilisateur();
    $user->formulaire($_POST);

