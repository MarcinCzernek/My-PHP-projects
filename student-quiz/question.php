<?php
include "db_connection.php";
session_start();

if (isset($_GET['n']) && is_numeric($_GET['n'])) {
    $qno = $_GET['n'];
    if ($qno == 1) {
        $_SESSION['quiz'] = 1;
    }
}
else {
    header('location: question.php?n='.$_SESSION['quiz']);
}
if (isset($_SESSION['quiz']) && $_SESSION['quiz'] == $qno) {
    $show_by_num = "SELECT * FROM questions WHERE num = '$qno'";

    $run = mysqli_query($connection, $show_by_num) or die(mysqli_error($connection));
    $row = mysqli_fetch_array($run);
    $num = $row['num'];
    $question = $row['question'];
    $answer_a = $row['answer_a'];
    $answer_b = $row['answer_b'];
    $answer_c = $row['answer_c'];
    $answer_d = $row['answer_d'];
    $correct_answer = $row['correct_answer'];
    $_SESSION['quiz'] = $num;
    $chec_quest = "SELECT * FROM questions";
    $run_check = mysqli_query($connection, $chec_quest) or die(mysqli_error($connection));
    $count_qs = mysqli_num_rows($run_check);
    $time = time();
    $_SESSION['start_time'] = $time;
    $allowed_time = $count_qs * 0.05;//0.05
    $_SESSION['time_up'] = $_SESSION['start_time'] + ($allowed_time * 60);
}


?>
<?php
$total = "SELECT * FROM questions ";
$run = mysqli_query($connection , $total) or die(mysqli_error($connection));
$totalqn = mysqli_num_rows($run);

?>
<html>
<head>
    <title>Czas na quiz powtórkowy</title>
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
        <div class= "current">Pytanie <?php echo $num; ?> z  <?php echo $totalqn; ?></div>
        <p class="question"><?php echo $question; ?></p>
        <form method="post" action="sum.php">
            <ul class="choices">
                <li><input name="choice" type="radio" value="a" required=""><?php echo $answer_a; ?></li>
                <li><input name="choice" type="radio" value="b" required=""><?php echo $answer_b; ?></li>
                <li><input name="choice" type="radio" value="c" required=""><?php echo $answer_c; ?></li>
                <li><input name="choice" type="radio" value="d" required=""><?php echo $answer_d; ?></li>

            </ul>
            <input type="submit" value="Prześlij">
            <input type="hidden" name="number" value="<?php echo $num;?>">
            <br>
            <br>
            <a href="wyniki.php" class="start">Zatrzymaj quiz</a>
        </form>
    </div>
</main>
</body>
</html>
