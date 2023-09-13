<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
</head>
<body>
    <h1>Even Odd Checker</h1>
    <form method="post" action="">
        <label for="number">Enter a number</label>
        <input type="number" name="number">
        <input type="submit" value="Check">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        // if ($number % 2 == 0) {
        //     echo "$number is even.";
        // } else {
        //     echo "$number is odd.";
        // }
        echo ($number % 2 == 0) ? "$number is even." : "$number is odd.";
    }
    ?>
</body>
</html>