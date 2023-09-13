<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>
    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" id="temperature" name="temperature" required>
        <br><br>
        <label for="conversion">Select Temperature type:</label>
        <select id="conversion" name="conversion" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <br><br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];
        $result = 0;

        if ($conversion == "celsius_to_fahrenheit") {
            $result = ($temperature * 9/5) + 32;
            echo "<p>$temperature &deg;C is equal to $result &deg;F</p>";
        } elseif ($conversion == "fahrenheit_to_celsius") {
            $result = ($temperature - 32) * 5/9;
            echo "<p>$temperature &deg;F is equal to $result &deg;C</p>";
        }
    }
    ?>
</body>
</html>