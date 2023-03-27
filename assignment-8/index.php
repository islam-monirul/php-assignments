<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/styles.css">

    <title>HTML Module Assignment - Monirul Islam</title>
</head>

<body>
    <h3 id="assignment-title">HTML Module Assignment by Monirul Islam</h3>
    <p class="sub-title">HTML and PHP</p>

    <div class="form-block">
        <form action="registration.php" method="post">
            <div class="inputGroup">
                <label for="name">First Name</label><br>
                <input type="text" id="fname" name="fname" placeholder="First name">
            </div>

            <div class="inputGroup">
                <label for="name">Last Name</label><br>
                <input type="text" id="lname" name="lname" placeholder="Last name">
            </div>

            <div class="inputGroup">
                <label for="email">Email Address</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>

            <div class="inputGroup">
                <label for="email">Password</label><br>
                <input type="password" id="pass" name="pass" placeholder="Password">
            </div>

            <div class="inputGroup">
                <label for="email">Confirm Password</label><br>
                <input type="password" id="cpass" name="cpass" placeholder="Confirm Password">
            </div>

            <div class="inputGroup">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>

</html>