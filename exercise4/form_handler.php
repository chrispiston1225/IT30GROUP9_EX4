<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h2>GET Form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label for="get_name">Name:</label>
        <input type="text" id="get_name" name="get_name"><br><br>
        <label for="get_age">Age:</label>
        <input type="text" id="get_age" name="get_age"><br><br>
        <input type="submit" value="Enter">
    </form>

    <h2>POST Form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="post_name">Name:</label>
        <input type="text" id="post_name" name="post_name"><br><br>
        <label for="post_age">Age:</label>
        <input type="text" id="post_age" name="post_age"><br><br>
        <input type="submit" value="Enter">
    </form>

    <hr>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['get_name']) && isset($_GET['get_age'])) {
        $name = htmlspecialchars($_GET['get_name']);
        $age = htmlspecialchars($_GET['get_age']);
        echo "<h2>GET Method</h2>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br><br>";
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['post_name']) && isset($_POST['post_age'])) {
        $name = htmlspecialchars($_POST['post_name']);
        $age = htmlspecialchars($_POST['post_age']);
        echo "<h2>POST Method </h2>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br><br>";
    }
    ?>

    <footer>
        <p>&copy; WE ARE GROUP 9 EXERCISE No 3.</p>
    </footer>
</body>
</html>
