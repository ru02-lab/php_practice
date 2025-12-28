<!-- 8. Take a sentence string: "This service is bad." Use str_replace to change "bad" to "good". -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task8</title>
</head>
<body>

<h1>str_replace function</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="string">string:</label>
    <input type="text" id="string" name="string" required>
    <input type="submit" value="Submit">
</form>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string = htmlspecialchars($_POST['string']);
    }
    $string_replaced = str_replace("bad","good",$string);

    echo "<h2>" . $string_replaced . "</h2>";

?>

</body>
</html>