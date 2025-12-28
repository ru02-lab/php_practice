<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task7</title>
</head>
<body>
    <?php
    // 7. Generate a random number between 1 and 100. 
    // If it is greater than 50, print "High". Otherwise, print "Low".
    $number = rand(1,100);
    echo "<h1>number = $number</h1>\n";
    if ($number > 50) {
        echo "<h1>High.</h1>";
    } else {
        echo "<h1>Low.</h1>";
    }
    ?>
</body>
</html>