<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'quote-db';

// Database Connection String
$con = mysqli_connect($db_hostname,$db_username,$db_password);
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db( $con,$db_database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<form action="search.php" method="post">
    Search: <input type="text" name="term" /><br />
    <input type="submit" value="Submit" />
</form>
<?php
if (!empty($_REQUEST['term'])) {

    $term = mysqli_real_escape_string($_REQUEST['term']);

    $sql = "SELECT * FROM quotes WHERE author LIKE '%".$term."%'";
    $r_query = mysqli_query($sql);

    while ($row = mysqli_fetch_array($r_query)){
        echo 'id ' .$row['id'];
        echo '<br /> marka ' .$row['quote'];
        echo '<br /> model '.$row['author'];

    }

}
?>
</body>
</html>