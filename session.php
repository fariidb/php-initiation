<?php
session_start();
print_r($_SESSION);
if(!isset($_SESSION['is_logged']) || !$_SESSION['is_logged'])
{
    header('Location: post.php?error=3');
}

?>