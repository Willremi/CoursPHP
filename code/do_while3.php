<?php
// initialisation d'une variable qui servira d'index / compteur
$i = 0;

// initialisation d'une variable qui servira de condition pour continuer ou non la boucle
$boucler = false;

// la boucle sera exécutée au moins une fois
// début de la boucle
do {
    // instructions répétées dans la boucle
    // exemple : affichage du compteur
    echo $i;
    echo PHP_EOL;

    // incrémentation du compteur
    $i++;

} while ($boucler); // vérification de la condition pour continuer ou non la boucle

