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

          // Validate password and confirm password
          if (empty($_POST["password"])) {
               $passwordErr = "Password is required";
           } 
           else {
               $password = test_input($_POST["password"]);
               if (empty($_POST["confirmpassword"])) {
                   $confirmpasswordErr = "Please confirm password";
               } else {
                   $confirmpassword = test_input($_POST["confirmpassword"]);
                   if ($password != $confirmpassword) {
                       $confirmpasswordErr = "Passwords do not match";
                   }
               }
           }
       
           // Display confirmation message if no errors found
           if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmpasswordErr)) {
               echo "<p>Registration successful! Welcome, $firstname!</p>";
           }
}

?>