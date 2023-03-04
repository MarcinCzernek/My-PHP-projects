<?php
session_start();
if(isset($_POST['inquiry'])){
$_SESSION['result']= $_POST['inquiry'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programistyczna ankieta</title>
</head>
<body>
<center>
<h1>Witaj w krótkiej ankiecie</h1>
<h2>Odpowiedź na jedno pytanie</h2>
<br>
<h2>Jaki jest Twój ulubiony język programowania?</h2>
<center>
<form method="post" action="process.php">
<input type="radio" name="inquiry" value="PHP">PHP<br>
<input type="radio" name="inquiry" value="JS">JS<br>
<input type="radio" name="inquiry" value="Java">Java<br>
<input type="radio" name="inquiry" value="Python">Python<br>
<input type="radio" name="inquiry" value="GO">GO<br>
<br>
<input type="submit" value="Prześlij">
</form>
<center>
</body>
</html>
