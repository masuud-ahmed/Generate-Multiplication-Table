<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>

<body>
<?php
    // Loop through numbers from 1 to 12
    for ($i = 1; $i <= 12; $i++) {
        echo "<h3>$i Multi Table</h3>"; // Display the current times table header
        for ($j = 1; $j <= 12; $j++) {
            $result = $i * $j; // Calculate the result
            echo "$i × $j = $result<br>"; // Display the multiplication operation
        }
    }
    ?>
</body>
</html>