<?php
//print_r($_GET);
//print_r($_POST);
$code_error= isset($_GET['error']) ? $_GET['error'] : false ;

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
</head>
<body>
<h1>Merci de vous identifier</h1>

<!--on fait un if , nouvelle syntaxe php-->
<?php if($code_error == 1) :?>
<span style="color: red;">Tous les champs sont obligatoires</span>
<?php endif ?>

<?php if($code_error == 2) :?>
    <span style="color: darkred;">Vos identifiants sont incorrect</span>
<?php endif ?>

<?php if($code_error == 3) :?>
    <span style="color: orangered;">t'es qui?</span>
<?php endif ?>

<form action="post-read.php" method="POST">

    <div>
        <label for="login">Votre login</label>
        <input type="text" name="login" id="login">
    </div>

    <div>
        <label for="password">Votre mot de passe</label>
        <input type="password" name="password" id="password">
    </div>

    <input type="submit" value="se connecter">

</form>
</body>
</html>