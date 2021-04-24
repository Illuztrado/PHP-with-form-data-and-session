<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is the code for the Great Number Game PHP exercise.">
        <title>Great Number Game</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <section class="container">
            <section class="indicator">
                <h3>Your Gold:</h3>
                <h3 class="goldCount">
<?php   if(isset($_SESSION["goldCounter"])) {
            echo $_SESSION["goldCounter"];
        }
        else {
            echo 0;
        }  ?>
                </h3>
            </section>
            <section class="form">
                <form action="ninja-gold-process.php" method="post">
                    <p>Farm</p>
                    <p>(earns 10-20 golds)</p>
                    <input type="hidden" name="action" value="farm">
                    <input type="submit" value="Find Gold!">
                </form>
                <form action="ninja-gold-process.php" method="post">
                    <p>Cave</p>
                    <p>(earns 5-10 golds)</p>
                    <input type="hidden" name="action" value="cave">
                    <input type="submit" value="Find Gold!">
                </form>
                <form action="ninja-gold-process.php" method="post">
                    <p>House</p>
                    <p>(earns 2-5 golds)</p>
                    <input type="hidden" name="action" value="house">
                    <input type="submit" value="Find Gold!">
                </form>
                <form class="casino" action="ninja-gold-process.php" method="post">
                    <p>Casino!</p>
                    <p>(earns/takes 0-50 golds)</p>
                    <input type="hidden" name="action" value="casino">
                    <input type="submit" value="Find Gold!">
                </form>            
            </section>
            <section class="activitiesLog">
                <p>Activities:</p>
                <textarea id="" name="activities">
<?php   if(isset($_SESSION["notifications"])) {
            foreach($_SESSION["notifications"] as $notification) {  ?>
                <?= $notification; ?><br>
<?php       }
        }   ?>
                </textarea>
            </section>
        </section>
    </body>
</html>

<?php  ?>