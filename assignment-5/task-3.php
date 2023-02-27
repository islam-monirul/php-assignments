<?php
//task 3
include_once "task-2.php";

$task3_person = new Person();

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name  = $_POST["name"];
    $email = $_POST["email"];

    $task3_person->setName( $name );
    $task3_person->setEmail( $email );
}

?>