<?php
include "connection.php";

$name = $_POST['name'];
$value = $_POST['value'];

$database = new Database();
$connection = $database->connect();
$reply = $database->query($connection, sprintf("INSERT INTO data VALUES (NULL, '%s', '%f')", $name, $value));
$database->close($connection);

header('Location: index.php');
exit();

?>
