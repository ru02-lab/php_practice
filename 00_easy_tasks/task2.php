<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
</head>
<body>
    <?php
    // Task 2: Create a function calculateTotal($price, $tax) that takes a price and a tax rate, calculates the total, and returns it.
    function calculateTotal(int $price, $tax): int {
        $total = 0;
        // price after tax = original price x (1 + tax rate)
        $total = $price * (1 + ($tax/100));
        return $total;
    }

    echo "<h1>Price: 100</h1>";
    $price = 100;
    echo "<h1>Tax: 20% </h1>";
    $tax = 20;

    $result = calculateTotal($price, $tax);
    echo "<h1>Total: $result</h1>";
    ?>
</body>
</html>