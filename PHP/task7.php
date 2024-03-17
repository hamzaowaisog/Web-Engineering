<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>
<body>
    <h2>Signup Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo "<h3>POST Method</h3>";
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
    }

    if (isset($_GET['username']) && isset($_GET['email']) && isset($_GET['password'])) {
        $username = $_GET['username'];
        $email = $_GET['email'];
        $password = $_GET['password'];

        echo "<h3>GET Method</h3>";
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
    }
    ?>

    <h2>Submit using GET Method</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo '<a href="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '?username=' . urlencode($username) . '&email=' . urlencode($email) . '&password=' . urlencode($password) . '">Submit using GET Method</a>';
    
    }
    ?>
</body>
</html>
