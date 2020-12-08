<?php

//echo "farid";

//Déclarer une variable et mettre une valeur en mémoire
$prenom = "farid";
$age = 30;
$profession = "sans profession";

//echo $prenom;

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--Bonne façon d'ecrire du php-->
<h1>Bienvenue <?php echo ucfirst($prenom) ?></h1>

<!--Mauvaise façon d'ecrire du php-->
<?php echo "<h2>vous avez $age ans</h2>" ?>
<?php echo '<h2>vous avez $age ans</h2>' ?>
<?php echo '<h2>vous avez '.$age.' ans</h2>' ?>


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis ea odio officia rem, <?= $profession ?> voluptatem. Accusamus, animi dignissimos eaque labore nihil non pariatur qui quos rerum sed sequi unde vitae!</p>

</body>
</html>
