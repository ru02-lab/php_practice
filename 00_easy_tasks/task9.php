<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task9</title>
</head>
<body>
    <?php
    // 9. Create an array with complex data. Use var_dump($array); and die(); to display it. 
$orderData = [
                'order_id' => 'ORD-2023-8592',
                'customer' => [
                    'id' => 405,
                    'name' => 'Alex Smith',
                    'is_vip' => true,
                    'contact' => [
                        'email' => 'alex.smith@example.com',
                        'phone' => null // Simulating a missing value
                    ]
                ],
                'items' => [
                    [
                        'product_id' => 101,
                        'name' => 'Wireless Headphones',
                        'quantity' => 1,
                        'price' => 150.00,
                        'tags' => ['electronics', 'audio', 'wireless']
                    ],
                    [
                        'product_id' => 205,
                        'name' => 'USB-C Cable',
                        'quantity' => 3,
                        'price' => 12.50,
                        'tags' => ['accessories', 'charging']
                    ]
                ],
                'totals' => [
                    'subtotal' => 187.50,
                    'tax' => 15.00,
                    'shipping' => 0.00,
                    'grand_total' => 202.50
                ],
                'status' => 'processing',
                'created_at' => '2023-10-27 14:30:00'
            ];

// 2. Dump the variable's information
/* // The <pre> tags are optional but highly recommended to make the output readable in a browser.
echo '<pre>';
var_dump($orderData);
echo '</pre>';

// 3. Stop script execution immediately
die();

// Any code below this line will NOT run
echo "This will never be seen."; */

echo "<h3>Order Items for: " . $orderData['customer']['name'] . "</h3>";

echo "<ul>";

foreach ($orderData['items'] as $item) {
    $lineTotal = $item['price'] * $item['quantity'];
    // display details
    echo "<li>";
    echo "<strog>" . $item['name'] . "</strong><br>";
    echo "Quantity: " . $item['quantity'] . "<br>";
    echo "Unit Price: $" . number_format($item['price'], 2) . "<br>";
    echo "Total: $" . number_format($lineTotal, 2);
    echo "</li><br>";
}

echo "</ul>";

?>

</body>
</html>