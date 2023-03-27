<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // storing the form values to variable
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $uemail = $_POST['email'];
     $upassword = $_POST['pass'];
     $confirmUpassword = $_POST['cpass'];

    // Validate first name
    if (empty($fname)) {
        die("First name is required");
    }

    // Validate last name
    if (empty($lname)) {
        die("Last name is required");
    }


    // Validate email address
    if (empty($_POST["email"])) {
        die("Email is required");
    } 
    else {
          if (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
               die('You must provide valid email.');
          }
    }
}

?>