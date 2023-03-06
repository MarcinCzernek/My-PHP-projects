<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - chmura tagów</title>
</head>
<body>
<?php include_once "content.html"?>
<h4>Tagi:</h4>
<?php $tags = ['PHP','programowanie','web development', 'języki programowania', 'backend'];
foreach ($tags as $t){
    echo "#". $t . "\n";
}
?>
</body>
</html>

<?php
$dbhost                            = "localhost";
$dbuser                            = "root";
$dbpass                            = "";
$dbname                            = "tag_db";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ("Błąd w trakcie połączenia z bazą");

mysqli_select_db($conn, $dbname);

$sql = "SET CHARSET utf8";

mysqli_query($conn, $sql)or die('Błąd zapytania');

$wynik = mysqli_query($conn, "SELECT `keyword` FROM `tags`");

function ifContains($tags, $wynik){
    foreach ($tags as $t){
        if(mysqli_num_rows($wynik) == in_array($t,$tags)){
            return false;
        }else{
            return true;
        }
    }
}


if (!ifContains($tags,$wynik)){
echo "<p style='color: #990000'>Zawiera już tego taga</p>";
}else{
    for ($i = 0 ; $i < count($tags) ; $i++){
        $t = $tags[$i];
        mysqli_query($conn, "INSERT INTO tags (keyword) values ('$t')");


    }
    echo "Dodano tagi do bazy!";
}

if(mysqli_num_rows($wynik) > 0) {
    // jeżeli wynik jest pozytywny, to wyświetlam dane
    while($r = mysqli_fetch_array($wynik)) {
        echo " ".$r['keyword'].'<br>'." ";
    }
}




?>