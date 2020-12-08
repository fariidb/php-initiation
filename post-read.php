<?php
// Démarrage d'une session
session_start();
// l'utilisateur n'est pas identifié par défaut
$_SESSION['is_logged'] = false;
// 0-- Vérifier que la page est bien appelée en POST via notre formulaire
$test_security = isset($_POST["login"]) && isset($_POST["password"]) ? true : false; // la question poser, est ce que le login et le password existe ?
if($test_security == false){

    header("Location: post.php");
}

// 1-- Récupérer les données du form

$login = empty($_POST['login']) ? false : trim($_POST['login']) ; //la question poser, est ce que c'est vide ?

$password = empty($_POST['password']) ? false : trim($_POST['password']) ;

// 2-- Vérifier que aucun champs n'est vide > sinon redirection vers post.php avec message d'erreur
if(!$login || !$password)
{
    header('Location:post.php?error=1');
}
// 3-- Si couple login ET mot de passe sont valide > redirection vers bienvenue.php
if ($login == "farid" && $password == "azerty")
{
    // Stockage de la valeur qui permet de s'assurer que l'identification s'est bien passé
    $_SESSION['is_logged'] = true;
    header("Location: bienvenue.php");
}
// 4-- Sinon redirection vers post.php avec un message d'erreur.
else
{

    header("Location: post.php?error=2");
}