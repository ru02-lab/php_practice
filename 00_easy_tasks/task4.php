   <?php
   // 4. Create an array of 20 Random Cities. Use a foreach loop to print them as an HTML list
   $city_array = ["Mumbai",
             "Toronto",
             "Buenos Aires",
             "Istanbul",
             "Cairo",
             "Berlin",
             "Rome",
             "Lima",
             "Lagos",
             "Vienna",
             "Amsterdam",
             "Zurich",
             "Lisbon",
             "Warsaw",
             "Stockholm",
             "Budapest",
             "Accra",
             "Nairobi",
             "Islamabad",
             "Casblanca"]
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task4</title>
</head>
<body>

<h1>20 cities</h1>
<ol>
    <?php
    foreach ($city_array as $city) {
        echo "<li>$city</li>";
    }
    ?>
</ol>

</body>
</html>