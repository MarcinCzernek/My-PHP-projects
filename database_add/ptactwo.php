<?php session_start();
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
<?php
include 'connection.php';
$records = mysqli_query($con,"SELECT * FROM ptaki");

while($data = mysqli_fetch_assoc($records)){
echo $data['id'];
echo "<br>";
echo $data['gatunek'];
echo "<br>";
echo $data['domena'];
echo "<br>";
echo $data['typ'];
echo "<br>";
echo $data['podtyp'];
echo "<br>";
echo $data['rząd'];
echo "<br>";
echo $data['rodzaj'];
echo "<hr>";
//mysqli_close($con); // Close connection

}
?>
<a href="gallery.php">Więcej o ptakach</a>
<a href="logout.php">Wyloguj się</a>
</body>
</html>
