<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task3</title>
<?php 
// 3. Use the date() function to print today's date in this format: "25th of December, 2025".
$today_date=getdate(date("U"));
echo "<h1>$today_date[mday]th of $today_date[month], $today_date[year]</h1>";
?>

</head>
<body>
    
</body>
</html>