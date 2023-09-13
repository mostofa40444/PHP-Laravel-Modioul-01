<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>
    <form method="post">
        <label for="num1">Enter Number 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>
        <label for="num2">Enter Number 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>
        <input type="submit" value="Compare"><br><br>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $largNum = ($num1 == $num2) ? "Both are same Number" : (($num1 > $num2) ? "$num1 is Larger" : "$num2 is Larger");
            echo $largNum;
        }
        ?>
</body>
</html>