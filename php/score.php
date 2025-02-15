<?php
    include('../config.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/score.css">
    <title>Document</title>
</head>
<body>
    <h2>Your Score</h2>
    <p>Congratulation You Have Completed This Test Successfully</p>
    <p>Your <strong>Score</strong>is<strong><?php echo $_SESSION['score'];?></strong></p>
    <?php unset($_SESSION['score']); ?>
</body>
</html>