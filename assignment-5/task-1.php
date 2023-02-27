<?php
    include "task-2.php";
    include "task-3.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/styles.css">

    <title>HTML, Basic OOP, and Superglobal Variables in PHP - Monirul Islam</title>
</head>

<body>
    <h3 id="assignment-title">Assignment 5 by Monirul Islam</h3>
    <p class="sub-title">HTML, Basic OOP, and Superglobal Variables in PHP</p>

    <div class="form-block">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="inputGroup">
                <label for="name">Name</label><br>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <div class="inputGroup">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="inputGroup">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <div class="output-block">
        <h3 class="task-title">Task 2 - Output</h3>
        <p>
            <?php echo "Name : {$task2_person->getName()}" ?>
        </p>
        <p>
            <?php echo "Email : {$task2_person->getEmail()}" ?>
        </p>
    </div>

    <div class="output-block">
        <h3 class="task-title">Task 3 - Output</h3>
        <p>
            <?php echo "Name : {$task3_person->getName()}" ?>
        </p>
        <p>
            <?php echo "Email : {$task3_person->getEmail()}" ?>
        </p>
    </div>

</body>

</html>