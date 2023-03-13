<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="./assets/style.css">

     <title>Registered Users</title>
</head>
<body>
     <Table>
          <thead>
               <th>SL.</th>
               <th>Name</th>
               <th>Email</th>
               <th>Picture</th>
          </thead>

          <tbody>
               <?php
                    $serialNo = 0;
                    $fileToRead = fopen("users.csv", "r");
                    // Reading data from csv
                    while (($userData = fgetcsv($fileToRead)) !== FALSE) {
                         echo "<tr>";
                         echo "<td>".$serialNo."</td>";
                         echo "<td>".$userData[0]."</td>";
                         echo "<td>".$userData[1]."</td>";
                         echo "<td><img src='uploads/".$userData[2]."' width='50'></td>";
                         echo "</tr>";
                    }
                    
                    fclose($fileToRead);
               ?>
          </tbody>
     </Table>
</body>
</html>