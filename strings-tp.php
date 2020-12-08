<?php

//Variables
$prenom = "farid";
$nom = "BENTEBICHE";
$formation = "nextformation";
$phrase = "  après avoir supprimé les caractères invisibles ";
$phrase2 = "je pars courir";
$tableau = array("vais");
$tableau1 = array("pars");

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice PHP</title>
    <style>
        .question{
            color: dodgerblue;
        }

    </style>
</head>
<h1>Exercice PHP du 30 juil. 2018</h1>
<h4 class="question">1-- transformer une chaine (<?php echo $prenom ?>) en minuscule en majuscule</h4>

<p>Bienvenue <?php echo strtoupper($prenom) ?></p>

<h4 class="question">2-- transformer une chaine (<?php echo $nom ?>) en majuscule en minuscule</h4>

<p>Bienvenue <?php echo strtolower($nom) ?></p>

<h4 class="question">3-- transformer en majuscule le premier caractere de chaque mot d'une chaine</h4>

<p><?php echo ucwords($prenom." ". $formation) ?></p>

<h4 class="question">4-- calculer le nombre de caracteres présents dans une chaine (<?php echo $prenom ?>)</h4>

<p>le nombre de caractere du prenom <?php echo $prenom ?>  est: <?php echo strlen ($prenom) ?></p>

<h4 class="question">5-- supprimer les espaces en debut et fin de chaine ( attention, le résulat de la fonction sera visible uniquement dans le code source)</h4>

<p>la phrase sans espace est:  <?php trim ($phrase, " ")?><?php echo $phrase ?> </p>

<h4 class="question">6-- supprimer la premiere lettre d'une chaine</h4>
<p> on supprimer la 1er lettre du prenom farid : <?php echo substr($prenom,1) ?></p>

<h4 class="question">7-- remplacer des caracteres present dans une chaine par d'autres caracteres.
EX:" je vais en cours" devient "je pars en cours"</h4>

<p> on remplace <?php echo $phrase2 ?> par <?php echo str_replace($tableau1, $tableau, $phrase2) ?> </p>

</body>
</html>













