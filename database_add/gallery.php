<?php
session_start();
if(empty($_SESSION['id'])):
    header("Location: login.php");
endif;?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<img src="https://pl.wikipedia.org/wiki/S%C3%B3jka_zwyczajna#/media/Plik:Garrulus_glandarius_1_Luc_Viatour.jpg" height="50%" width="50%" alt="sojka">
</body>
</html>