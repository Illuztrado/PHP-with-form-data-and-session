<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is the code for the Registration without DB PHP exercise.">
        <title>Registration without DB</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form class="casino" action="registration-without-db-process.php" method="post">
<?php   if (isset($_SESSION["errors"]))
        {
            echo "<h5>Your registration was not processed due to errors. Kindly re-enter your information to register.</h5>";
            foreach($_SESSION["errors"] as $error)
            {
                echo "<p>$error</p>";
            }
            $_SESSION = array();
        }   ?>
            <ul>
                <li>
                    <span><label for="email">Email:</label></span>
                    <input type="text" name="email">
                </li>
                <li>
                    <span><label for="first_name">First Name:</label></span>
                    <input type="text" name="first_name">
                </li>
                <li>
                    <span><label for="last_name">Last Name:</label></span>
                    <input type="text" name="last_name">
                </li>
                <li>
                    <span><label for="password">Password:</label></span>
                    <input type="password" name="password">
                </li>
                <li>
                    <span><label for="confirm_password">Confirm Password:</label></span>
                    <input type="password" name="confirm_password">
                </li>
                <li>
                    <span><label for="birth_date">Birth Date:</label></span>
                    <input type="date" placeholder="mm-dd-yyyy" name="birth_date">
                </li>
                <li>
                    <input class="submitButton" type="submit" value="Register">
                </li>
            </ul>
            <input type="hidden" name="action" value="register">
        </form>
    </body>
</html>