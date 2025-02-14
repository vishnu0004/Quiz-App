<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/add_quiz.css">
    <title>Add Quiz</title>
</head>

<body>
    <h1>Add Questions For Online Quiz</h1>
    <?php
    include('../config.php');
    if (isset($_POST['submit'])) {
        $question_num = $_POST['question_num'];
        $questions = $_POST['questions'];
        $correct_choice = $_POST['is_correct'];

        // array
        $choice = array();
        $choice[1] = $_POST['option_1'];
        $choice[2] = $_POST['option_2'];
        $choice[3] = $_POST['option_3'];
        $choice[4] = $_POST['option_4'];

        $query = "insert into questions values('$question_num','$questions')";
        $result = $conn->query($query);
        if ($result) {
            foreach ($choice as $option => $value) {
                if ($value != "") {
                    if ($correct_choice == $option) {
                        $is_correct = 1;
                    } else {
                        $is_correct = 0;
                    }

                    $sql = "insert into choice (question_num,is_correct,choices) values('$question_num','$is_correct','$value')";
                    $result = $conn->query($sql);
                    if ($result) {
                        continue;
                    } else {
                        echo "not inserted";
                    }
                }
            }
            $massage = "data inserted";
        } else {
            echo "somethings wrongs";
        }
    }


    $query = "select * from questions ";
    $result = $conn->query($query);
    $total = mysqli_num_rows($result);
    $row = $total+1;
    ?>

    <form action="#" method="post">
        <label for="Question_num">Question_Num:</label>
        <input type="number" name="question_num" placeholder="Enter Question_num" value="<?php echo $row; ?>" readonly>

        <label for="Question">Question:</label>
        <input type="text" name="questions" placeholder="Enter Question">


        <label for="Option">Option_1:</label>
        <input type="text" name="option_1" placeholder="Enter Option_1">

        <label for="Option">Option_2:</label>
        <input type="text" name="option_2" placeholder="Enter Option_2">

        <label for="Option">Option_3:</label>
        <input type="text" name="option_3" placeholder="Enter Option_3">

        <label for="Option">Option_4:</label>
        <input type="text" name="option_4" placeholder="Enter Option_4">

        <label for="is_correct">Correct Ans:</label>
        <input type="number" name="is_correct" placeholder="Enter Correct Option Num">

        <input type="submit" name="submit">
    </form>
</body>

</html>