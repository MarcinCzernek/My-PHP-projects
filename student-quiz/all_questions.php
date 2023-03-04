
<?php include "db_connection.php";

?>

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

<h1> Wszystkie pytania - zawartość bazy danych</h1>
<table class="data-table">

    <thead>
    <tr>
        <th>numO</th>
        <th>question</th>
        <th>answer_a</th>
        <th>answer_b</th>
        <th>answer_c</th>
        <th>answer_d</th>
        <th>correct_answer </th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>

    <?php
    //potężna kwerenda odczytujaca pytania
    $query_view_questions = "SELECT * FROM questions ORDER BY num";
    $select_questions = mysqli_query($connection, $query_view_questions) or die(mysqli_error($connection));
    if (mysqli_num_rows($select_questions) > 0 ) {
        while ($row = mysqli_fetch_array($select_questions)) {
            $num = $row['num'];
            $question = $row['question'];
            $answer_a = $row['answer_a'];
            $answer_b = $row['answer_b'];
            $answer_c = $row['answer_c'];
            $answer_d = $row['answer_d'];
            $correct_answer = $row['correct_answer'];
            echo "<tr>";
            echo "<td>$num</td>";
            echo "<td>$question</td>";
            echo "<td>$answer_a</td>";
            echo "<td>$answer_b</td>";
            echo "<td>$answer_c</td>";
            echo "<td>$answer_d</td>";
            echo "<td>$correct_answer</td>";
            echo "<td> <a href='editquestion.php?qno=$num'> Edit </a></td>";

            echo "</tr>";
        }
    }
    ?>
    <?php
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    ?>

</body>
</html>
