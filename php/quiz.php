<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/quiz.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../config.php');
    // Check if 'n' is set in the URL
    if (isset($_GET['n'])) {
        $number = $_GET['n'];
        
    } else {
        die("Error: Question number is missing!");
    }

    // Fetch the question
    $take = "SELECT * FROM questions WHERE question_num = '$number'";
    $result = $conn->query($take);

    $question = ""; // Initialize to avoid undefined variable warning
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $question = $row['question_text'];
        }
    } else {
        die("Error: Question not found!");
    }

    // Fetch the choices
    $take = "SELECT * FROM choice WHERE question_num = '$number'";
    $result = $conn->query($take);

    // Get total questions
    $query1 = "SELECT * FROM questions";
    $result1 = $conn->query($query1);
    $total_que = mysqli_num_rows($result1);
    ?>

    <h1>Start quiz</h1>

    <h2>Question <?php echo $number; ?> of <?php echo $total_que; ?></h2>
    <h3><?php echo $question; ?></h3>

    <form action="result.php" method="post">
        <ul>
            <?php while ($row = mysqli_fetch_assoc($result)) {
                $choice = $row['choices'];
                //    echo $choice;
                $did = $row['id'];
            ?>
                <li>
                    <input type="hidden" name="number" value="<?php echo $number ?>">
                    <input type="radio" name="choice" value="<?php echo $did ?>"><?php echo $choice; ?>
                </li>
            <?php } ?>
        </ul>
        <br><br>
        <input type="submit" value="submit" name="submit">

    </form>
</body>

</html>