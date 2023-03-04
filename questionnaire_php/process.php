<?php
include "db_connection.php";
session_start();
$_SESSION['result'] = $_POST['inquiry'];
$choice = $_SESSION['result'];
var_dump($_SESSION['result']);

if($choice == 'PHP'){
    $queryphp = "UPDATE results SET ilosc = ilosc+1 WHERE id = 1";
    $run = mysqli_query($connection , $queryphp) or die(mysqli_error($connection));
    echo "Query accomplished:)";
} elseif($choice == 'JS'){
    $queryjs = "UPDATE results SET ilosc = ilosc+1 WHERE id = 2";
    $run = mysqli_query($connection , $queryjs) or die(mysqli_error($connection));
    echo "Query accomplished:)";
}elseif($choice == 'Java'){
    $queryjava = "UPDATE results SET ilosc = ilosc+1 WHERE id = 3";
    $run = mysqli_query($connection , $queryjava) or die(mysqli_error($connection));
    echo "Query accomplished:)";
}elseif($choice == 'Python'){
    $querypython = "UPDATE results SET ilosc = ilosc+1 WHERE id = 4";
    $run = mysqli_query($connection , $querypython) or die(mysqli_error($connection));
    echo "Query accomplished:)";
}elseif($choice == 'GO'){
    $querygo = "UPDATE results SET ilosc = ilosc+1 WHERE id = 5";
    $run = mysqli_query($connection , $querygo) or die(mysqli_error($connection));
    echo "Query accomplished:)";
}

header('Location: thanks.html');
?>
