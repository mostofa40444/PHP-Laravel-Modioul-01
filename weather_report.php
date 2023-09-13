<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>
    <form method="post">
        <label for="temperature">Enter Temperature (in Celsius):</label><br><br>
        <input type="number" name="temperature" required>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        if ($temperature < 0) {
            echo "The weather is freezing!";
        } elseif ($temperature >= 0 && $temperature < 15) {
            echo "The weather is cool.";
        } elseif ($temperature >= 15 && $temperature < 25) {
            echo "The weather is warm.";
        } else {
            echo "The weather is hot!";
        }
    }
    ?>
</body>
</html>