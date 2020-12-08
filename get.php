<?php
print_r($_GET);
//Est défini ? et est vide ?
//isset();
//empty();
// methode 1
//if(isset($_GET["prenom"]))
//{
//  $prenom = $_GET["prenom"];
//}else
//{
//    $prenom = null;
//}

// Opérateur ternaire pour remplacer un if/else
//methode 2
$prenom = isset($_GET["prenom"]) ? ucfirst ($_GET["prenom"]) : null;
$ville = isset($_GET["ville"]) ? ucfirst ($_GET["ville"]): null;
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>
<h1>Bienvenue <?php echo $prenom?></h1>
<p>Vous habitez à <a href="get-read.php?ville=<?= $ville ?>"><?= $ville ?></a></p>
</body>
</html>