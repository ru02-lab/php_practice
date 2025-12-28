<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task5</title>
</head>
<body>
    <h1>User Age</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required>

        <input type="submit" value="Submit">
    </form>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = htmlspecialchars($_POST['age']);
        if ($age > 18) {
            echo "<h2>Welcome.</h2>";
        } else {
            echo "<h2>Access Denied.</h2>";
        }
    }

?>

</body>
</html>

