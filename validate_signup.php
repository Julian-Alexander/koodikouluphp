<?php
$emailErr = $nameErr = "";
$email = $name = $pass = "";

    foreach($_POST as $key => $value) {
        if(empty($_POST[$key])) {
        echo("All fields are required");
        break;
    }

    if ($_POST["name"]) {
        if (strlen($name) < 2) {
            echo("Username must be at least 2 characters long");
        }
    }

    if ($_POST["password"]) {
        if (strlen($pass) < 8) {
            echo("Password must be at least 8 characters long");
        }
    }

    if ($_POST["password"]) {
        if (!preg_match("#[^A-Za-z0-9]+#")) {
            echo ("Password must be 8 characters long and have at least 1 number and 1 special character. <br>");
        }
    }

   if ($_POST["password"] != $_POST["password2"]) {
      echo("Password does not match. Try again. <br>");
   }

   if(!isset($error_message)) {
       if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
           echo ("Invalid Email Address. <br>");
       }
   }
}