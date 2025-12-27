<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task5</title>
</head>
<body>
    <?php
    // 5. Create a variable $age. If age is under 18, 
    // print "Access Denied." If 18 or older, print "Welcome."
    $age = rand(1,100);
    echo "<h1>age = $age</h1>\n";
    if ($age > 18) {
        echo "<h1>Welcome.</h1>";
    } else {
        echo "<h1>Access Denied.</h1>";
    }
    ?>
</body>
</html>