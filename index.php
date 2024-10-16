<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
</head>
<body>

    <?php
        // Declare and initialize variables
        $pageTitle = "Welcome to My Website";
        $currentYear = date("Y");

        // Output the page title
        echo "<h1>" . $pageTitle . "</h1>";

        // Display current date
        echo "<p>Today is " . date("l, F jS, Y") . "</p>";

        // Add a message
        echo "<p>Thanks for visiting! We hope you enjoy browsing our content.</p>";

        // Dynamic copyright message
        echo "<footer><p>&copy; " . $currentYear . " My Website. All rights reserved.</p></footer>";
    ?>

</body>
</html>
