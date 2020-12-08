<?php

// --Tableau numérique

$notes_eleves =[12,5,18,16,13,10,5];

// Accéder à une valeur

echo $notes_eleves[5]; // afficher 10


// --Tableau associatif

$infos =
    [
        "prenom"=>"farid",
        "nom"=>"bentebiche",
        "age"=>30,
        "societe"=>
            [
                "nom"=>"nextformation",
                "adresse"=>"55 avenue hoche",
                "code_postal"=>75008,
                "ville"=>"paris"
            ]
    ];

echo $infos["prenom"]; // Affiche farid

echo $infos["societe"]["nom"]; // afiche le nom de la societe (nextformation)

// ⚠ Attention à l'erreur array to string, conversion si echo $infos['societe']

// --- Fonctions de DEBUG

// -- print_r
echo "<pre>"; // la balise <pre> en html permet de conserver l'indentation du code sans passer par le code source
print_r($infos);
print_r($notes_eleves);

// -- var_dump

var_dump($infos);

echo "</pre>";