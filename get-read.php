<?php
$ville = isset($_GET["ville"]) ? ucfirst ($_GET["ville"]): null;
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET-READ</title>
</head>
<body>
<form action="" method="GET">
    <label for="ville">votre ville: </label>
    <input type="text" id="ville" name="ville" value="<?= $ville ?>">

    <input type="submit">
</form>
</body>
</html>