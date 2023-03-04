<?php
session_start();
if (!isset($_SESSION['score'])) {
    header("location: question.php?n=1");
}
 ?>
<html>
	<head>
		<title>Wyniki</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>Quiz wiedzy ze studiów</h1>
			</div>
		</header>

		<main>
			<div class= "container">
				<p>Zdobyta liczba punktów: <?php if (isset($_SESSION['score'])) {
echo $_SESSION['score'];
}; ?> </p>
                <?php if($_SESSION['score'] >= 8){
                    echo "<h2>Gratulacje!</h2>
				<p style='color: green'>Ukończyłeś test</p>";
                }else{
                    echo  "<h2>Przykro mi!</h2>
				<p style=color:Tomato;>Nie udało się</p>";
                } ?>
		<a href="question.php?n=1" class="start">Jeszcze raz</a>
		<a href="menu.php" class="start">Menu</a>
		</div>
		</main>
		</body>
		</html>


<?php unset($_SESSION['score']); ?>

