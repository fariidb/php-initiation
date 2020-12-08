<!doctype HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Les fonctions de tableaux</title>
</head>
<body>
	<h1>Les fonctions de tableaux</h1>
<?php 
	/**
	*
	* EXERCICE: Recherchez les fonctions Array dans la documentation PHP (php.net) et réalisez les opérations suivantes
	*	
	* 1_ Créez un tableau de type numérique et stockez des valeurs de type entiers 
	* 2_ Comptez le nombre de valeurs stockées dans ce tableau
	* 3_ Affichez la valeur maximale stockée dans ce tableau
	* 4_ Affichez la valeur minimale stockée dans ce tableau
	* 5_ Classez dans un ordre croissant les valeurs de ce tableau. 
	* Affichez votre résulat à l'aide d'une méthode de debug
	* 6_ Classez dans un ordre décroissant les valeurs de ce tableau. 
	* Affichez votre résulat à l'aide d'une méthode de debug
	* 7_ Faites la somme des valeurs de types entiers contenues dans ce tableau, et afficher le résulat contenu dans une variable
	* 8_ Rassemblez les valeurs d'un tableau numérique en une chaîne de caractères
 	* 9_ Transformez une chaîne de caractères en tableau numérique
 	* 10_ Vérifiez si une valeur existe dans votre tableau (! retourne une valeur booléenne)
 	* 11_ Créer un sous-tableau qui contient seulement quelques valeurs d'un tableau principal
 	* 12_ Fusionner deux tableaux en un seul
 	* 13_ Comparer deux tableaux et afficher leurs valeurs différentes dans un troisième tableau
 	* 14_ Créer un tableau qui contient des valeurs en doublons. Ensuite, affichez ce tableau avec une méthode de débug sans les doublons
	*/
?>

<h4> 1_ Créez un tableau de type numérique et stockez des valeurs de type entiers</h4>

<?php

$tableau =[80,10,20,30,40,50,60];

print_r($tableau);

?>

    <h4>2_ Comptez le nombre de valeurs stockées dans ce tableau</h4>

<?php

echo count ($tableau,COUNT_NORMAL);

?>

    <h4>3_ Affichez la valeur maximale stockée dans ce tableau</h4>

    <?php
    echo max ($tableau);

    ?>

    <h4>4_ Affichez la valeur minimale stockée dans ce tableau</h4>

    <?php
    echo min ($tableau);
    ?>

    <h4>5_ Classez dans un ordre croissant les valeurs de ce tableau.</h4>

    <?php

     asort($tableau);
     print_r($tableau);

    ?>

    <h4>6_ Classez dans un ordre décroissant les valeurs de ce tableau</h4>

    <?php

    arsort($tableau);
    print_r($tableau);

    ?>

    <h4>7_ Faites la somme des valeurs de types entiers contenues dans ce tableau, et afficher le résulat contenu dans une variable</h4>

    <?php

    echo "Somme du tableau = ".array_sum ( $tableau )."\n";
    ?>

    <h4>8_ Rassemblez les valeurs d'un tableau numérique en une chaîne de caractères</h4>

    <?php
    $comma_separated = implode(",", $tableau);

    echo $comma_separated;
    ?>

    <h4>9_ Transformez une chaîne de caractères en tableau numérique</h4>

    <?php
    $prenom = "Farid";
    echo "<pre>";
    $arr1 = str_split($prenom);
    print_r($arr1);
    echo "</pre>";
    ?>

    <h4>10_ Vérifiez si une valeur existe dans votre tableau (! retourne une valeur booléenne)</h4>

    <?php


    echo in_array ('10' , $tableau );
    ?>

<h4>11_ Créer un sous-tableau qui contient seulement quelques valeurs d'un tableau principal</h4>
    <?php
    $tableau2 =[
            "classe_1"=>80,
            "classe_2"=>10,
            "classe_3"=>20,
            "classe_4"=>30,
            "classe_5"=>40,
            "classe_6"=>50,
            "classe_7"=>60,
            "note"=>
                [
                        "eleve_1"=>10,
                        "eleve_2"=>15,
                ]

    ];
    echo "<pre>";
    print_r($tableau2);
    echo "</pre>";
    ?>
</body>
</html>