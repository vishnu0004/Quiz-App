<?php 
    session_start();
    include('../config.php');
    // $sql =  "select * from questions ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Online Quiz System</title>
</head>
<body>
    <h1>Online Quiz System</h1>
   <a href="add_quiz.php"><button>Add Questions</button></a> 
    <a href="quiz.php?n=2"><button>Start Quiz</button></a>
</body>
</html>