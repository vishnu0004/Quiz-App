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
    <form action="#" method="post">
        <label for="Question">Question:</label>
        <input type="text" name="questions" placeholder="Enter Question">

        <label for="Question_num">Question_Num:</label>
        <input type="number" name="question_num" placeholder="Enter Question_num">

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