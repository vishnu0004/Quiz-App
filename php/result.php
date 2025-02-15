<?php
    include('../config.php');
    session_start();
    if(!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }

    if($_POST){
        // echo "<pre>";
        // print_r($_POST);

        $query = "select * from questions ";
        $result = $conn->query($query);
        $total = mysqli_num_rows($result);
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];

        $next = $number+1;

        $sql = "select * from choice where question_num = '$number' and is_correct = '1'";
        $run = $conn->query($sql);
        $row = mysqli_fetch_assoc($run);
        $is_correct = $row['id'];

        if($selected_choice == $is_correct){
            $_SESSION['score']++;
        }
        if($number == $total){
            header("location: score.php");
        }
        else{
            header("location: quiz.php?n=".$next);
        }
    }
?>