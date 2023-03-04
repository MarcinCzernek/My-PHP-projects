<?php
session_start();
include "db_connection.php";

    $query = "SELECT * FROM questions";
    $run = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $total = mysqli_num_rows($run);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Witaj w quizie powtókowym</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<header>
    <div class="container">
        <h1>Quiz wiedzy ze studiów</h1>
    </div>
</header>
<a href="question.php?n=1" class="start">Rozpocznij quiz!</a>
<ul>
    <li>Test jednokrotnego wyboru z <?php echo $total; ?> pytaniami</li>
    <li>Czas na każde pytanie <?php echo $total * 0.05 * 60; ?> sekund</li>
    <li>Aby ukończyć test potrzebujesz zdobyć 8 punktów (1 dobra odpowiedż - 1 punkt)</li>
</ul>

</body>
</html>
