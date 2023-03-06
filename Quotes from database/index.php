<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>

        body {
            color: darkblue;
            background-color: peachpuff;
        }

        h1 {
            color: darkgoldenrod;
        }
    </style>
</head>
<body>

<?php
echo "<table>";
$con = mysqli_connect('localhost', 'root', '', 'quote_db') or die(mysqli_error());
$query = "SELECT * FROM quotes";
$run = mysqli_query($con,$query) or die (mysqli_error($con));
$total_quotes = mysqli_num_rows($run);
$rand_num =rand(1,$total_quotes);
$query_select = "SELECT * FROM quotes WHERE id = '$rand_num'";
$select = mysqli_query($con,$query_select) or die (mysqli_error($con));
if(mysqli_num_rows($select) > 0) {
while ($row = mysqli_fetch_array($select)) {
echo "<tr>";
    $quote = $row['quote'];
    $author = $row['author'];
    echo "<td>\"$quote\"</td>";
    echo "<td>$author</td>";
    echo "</tr>";
    echo "<br>";
}
}
echo "</table>";

if(isset($_POST['author']) && isset($_POST['quote'])){
    $author = $_POST['author'];
    $quote = $_POST['quote'];
    $query = "INSERT INTO quotes (quote,author) VALUES ('$quote', '$author' )";
    mysqli_query($con,$query);
}else{
    'Dodaj nowy cytat.';
}

?>

<br>
<form action="index.php" method="post">
<label for="q">Treść:</label>
<textarea name="quote" cols="20" rows="2" id="q" required></textarea><br>
<label for="a">Autor cytatu:</label>
<input id="a" type="text" name="author" required><br>
<input type="submit" value="Prześlij"><br>

</form>
</body>
</html>

