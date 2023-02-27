<?php
// task 2
class Person {
    public $name;
    private $email;

    public function setName( $name ) {
        $this->name = $name;
    }

    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

$task2_person = new Person();
$task2_person->setName( "Monir" );
$task2_person->setEmail( "islammonirul.cse@gmail.com" );

?>