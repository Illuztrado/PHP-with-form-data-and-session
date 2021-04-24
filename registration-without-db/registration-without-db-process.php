<?php

session_start();

if(isset($_POST["action"]) && $_POST["action"] === "register" ) {
    $errors = array();
    $birth_date = array();
    if(empty($_POST["email"]))
    {
        $errors[] = "Email cannot be blank.";
    } else {
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "This is not a valid email";
        }
    }
    if(empty($_POST["first_name"]))
    {
        $errors[] = "First Name cannot be blank.";
    } else {
        if(ctype_alpha($_POST["first_name"]) === FALSE) {
            $errors[] = "First Name cannot have numbers.";
        }
    }
    if(empty($_POST["last_name"]))
    {
        $errors[] = "Last Name cannot be blank";
    } else {
        if(ctype_alpha($_POST["last_name"]) === FALSE) {
            $errors[] = "Last Name cannot have numbers.";
        }
    }
    if(empty($_POST["password"])){
        $errors[] = "Password cannot be blank";
    } else {
        if(strlen($_POST["password"]) <= 6) {
            $errors[] = "Password must be more than 6 characters";            
        }
    }
    if(empty($_POST["confirm_password"])){
        $errors[] = "Confirm Password cannot be blank";
    } else {
        if($_POST["confirm_password"] !== $_POST["password"]) {
            $errors[] = "Password does not match the previous field";
        }
    }
    if(empty($_POST["birth_date"])){
        $errors[] = "Birth Date cannot be blank";
    } else {
        $_SESSION["birth_date"] = date("m-d-Y",strtotime($_POST["birth_date"]));
        $birth_date = explode("-",$_SESSION["birth_date"]);
        if(checkdate($birth_date[0],$birth_date[1],$birth_date[2]) === FALSE) {
            $errors[] = "Date entered is invalid";
        }
    }
    if(count($errors) > 0)
    {
        $_SESSION["errors"] = $errors;
        header("Location: index.php");
    }
    else
    {
        echo "<h5>Thanks for submitting your information.</h5>";
    }
}

?>