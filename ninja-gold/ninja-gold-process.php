<?php

session_start();

// $farmGold = rand(10,20);
// $caveGold = rand(5,10);
// $houseGold = rand(2,5);
// $casinoGold = rand(-50,50);

if(isset($_POST["action"]) && $_POST["action"] !== NULL) {
    if(!isset($_SESSION["notifications"])) {
        $_SESSION["notifications"] = array();
    } else {
    }
    if(isset($_POST["action"]) && $_POST["action"] === "farm") {
        $farmGold = rand(10,20);
        $_SESSION["goldCounter"] += $farmGold;
        $_SESSION["action"] = $_POST["action"];
        $notification = "You entered a " . $_SESSION["action"] . " and earned " . $farmGold . " golds. (" . date("m-d-Y h:ia") . ")";
        array_push($_SESSION["notifications"], $notification);
    }
    if(isset($_POST["action"]) && $_POST["action"] === "cave") {
        $caveGold = rand(5,10);
        $_SESSION["goldCounter"] += $caveGold;
        $_SESSION["action"] = $_POST["action"];
        $notification = "You entered a " . $_SESSION["action"] . " and earned " . $caveGold . " golds. (" . date("m-d-Y h:ia") . ")";
        array_push($_SESSION["notifications"], $notification);
    }
    if(isset($_POST["action"]) && $_POST["action"] === "house") {
        $houseGold = rand(2,5);
        $_SESSION["goldCounter"] += $houseGold;
        $_SESSION["action"] = $_POST["action"];
        $notification = "You entered a " . $_SESSION["action"] . " and earned " . $houseGold . " golds. (" . date("m-d-Y h:ia") . ")";
        array_push($_SESSION["notifications"], $notification);
    }
    if(isset($_POST["action"]) && $_POST["action"] === "casino") {
        $casinoGold = rand(-50,50);
        $_SESSION["goldCounter"] += $casinoGold;
        $_SESSION["action"] = $_POST["action"];
        if($casinoGold >= 0) {
            $notification = "You entered a " . $_SESSION["action"] . " and earned " . $casinoGold . " golds. (" . date("m-d-Y h:ia") . ")";
            array_push($_SESSION["notifications"], $notification);
        } if($casinoGold < 0) {
            $notification = "You entered a " . $_SESSION["action"] . " and lost " . $casinoGold . " golds... Ouch... (" . date("m-d-Y h:ia") . ")";
            array_push($_SESSION["notifications"], $notification);
        }
    }
    if(count($notifications) > 0) {
        $_SESSION["notifications"] = $notifications;
        header("Location: index.php");
    }
}

// if(!isset($_SESSION["goldCounter"])) {
//     $_SESSION["goldCounter"] = 0;
// }
// if(isset($_SESSION["goldCounter"]) && $_SESSION["goldCounter"] !== NULL)

// if(!isset($_SESSION["goldCounter"])) {
//     $_SESSION["goldCounter"] = 0;
// }

header("Location: index.php");

?>