
<?php
session_start();
include "db_connection.php";

    if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
    }

    if ($_POST) {
        $newtime = time();
        if ($newtime > $_SESSION['time_up']) {
            echo "<script>alert('Koniec czasu');
            window.location.href='wyniki.php';</script>";
        } else {
            $_SESSION['start_time'] = $newtime;
            $ques_num = $_POST['number'];
            $_SESSION['quiz'] = $_SESSION['quiz'] + 1;
            $selected_choice = $_POST['choice'];
            $next_ques = $ques_num + 1;

            $query = "SELECT correct_answer FROM questions WHERE num= '$ques_num'";
            $runQuery = mysqli_query($connection, $query) or die(mysqli_error($connection));
            if (mysqli_num_rows($runQuery) > 0) {
                $row = mysqli_fetch_array($runQuery);
                $correct_answer = $row['correct_answer'];

            }
            if ($correct_answer == $selected_choice) {
                $_SESSION['score']++;
            }

            $query1 = "SELECT * FROM questions";
            $run = mysqli_query($connection, $query1) or die(mysqli_error($conn));
            $totalqn = mysqli_num_rows($run);

            if ($ques_num == $totalqn) {
                header("location: wyniki.php");
            } else {
                header("location: question.php?n=" . $next_ques);


            }

        }
    }
    else {
        header("location: menu.php");


    }
?>