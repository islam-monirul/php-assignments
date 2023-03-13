<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          
          <link rel="stylesheet" href="./assets/style.css">

          <title>Assignment 6 - Monirul Islam</title>
     </head>
     <body>
          <h3 id="assignment-title">Assignment 6 by Monirul Islam</h3>
          <p class="sub-title">PHP File</p>
          <div class="form-block">     
               <form action="registrationPage.php" method="post" enctype="multipart/form-data">
                    <div class="inputGroup">
                         <label for="name">Name</label>
                         <input type="text" id="name" name="name" placeholder="Enter Your Name" required />
                    </div>

                    <div class="inputGroup">
                         <label for="email">Email</label>
                         <input type="email" id="email" name="email" placeholder="Enter Email Address" required />
                    </div>

                    <div class="inputGroup">
                         <label for="password">Password</label>
                         <input type="password" id="password" name="password" placeholder="Type Password" required />
                    </div>

                    <div class="inputGroup">
                         <label for="picture">Upload Your Profile Picture</label>
                         <input
                              type="file"
                              id="picture"
                              name="picture"
                              accept="image/*"
                              required
                         />
                    </div>

                    <div class="inputGroup">
                         <input type="submit" value="Submit" />
                    </div>
               </form>
          </div>
     </body>
</html>
