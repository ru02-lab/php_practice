<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task6</title>
</head>
<body>
    <?php
    // 6. Create a variable $email = " USER@gmail.com ";. 
    // Use PHP functions to: 
    // 1. Trim the spaces. 
    // 2. Make it all lowercase.
    $email = "   USER@gmail.com ";
    echo "<pre>Without trim: $email</pre>";
    echo "<br>";

    $email_trimmed = trim($email);
    echo "<pre>With trim: $email_trimmed</pre>";
    echo "<br>";
    
    $email_trimmed_lowercase = strtolower($email_trimmed);
    echo "<pre>Make it all lowercase: $email_trimmed_lowercase</pre>";
    ?>
</body>
</html>