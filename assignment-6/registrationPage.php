<?php
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {

          // checking if all fields are filled properly
          if (!(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['picture']))) {
               
               // storing the form values to variable
               $uname = $_POST['name'];
               $uemail = $_POST['email'];
               $upassword = $_POST['password'];
               $uImage = $_FILES['picture'];
          
               // checking if email valid or not
               if (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
                    die('You must provide valid email.');
               }
          }

          // if any field is empty
          else{
               die('You must provide all information.');
          }


          // unique file name create and Saving image
          $directoryToUpload = 'uploads/';
          
          $fileToUpload = $directoryToUpload.basename($_FILES['picture']['name']);
          $imgFileType = strtolower(pathinfo($fileToUpload, PATHINFO_EXTENSION));

          $filename = uniqid()."_".date('Y-m-d_H-i-s').".".$imgFileType;
          $fileToUpload = $directoryToUpload.$filename;
          

          // if file upload failed
          if (!move_uploaded_file($uImage['tmp_name'], $fileToUpload)) {
               die('Image upload failed.');
          }

          // If not termination occur then saving data to a CSV file
          $userData = array($uname, $uemail, $filename);
          $csvFile = fopen('users.csv', 'a');
          
          // if condition for writing data to csv file
          if(!(fputcsv($csvFile, $userData))){
               die("File writing failed.");
          }
          
          // closing file
          fclose($csvFile);

          
          // new session starting and setting cookie with user name
          session_start();
          $_SESSION['name'] = $uname;
          setcookie('name', $uname, time() + (86400 * 30), '/');

          // Redirecting to success page
          header('Location: registeredUsersPage.php');

          exit();

     }

?>
