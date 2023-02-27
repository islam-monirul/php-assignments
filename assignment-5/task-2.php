<?php
//Task 2: Basic OOP in PHP
class Person {
    public $name;
    private $email;

    public function __construct( $name, $email ) {
        $this->name = $name;
        $this->email = $email;
    }

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

$newPerson = new Person( "", "" );
$newPerson->setName( "Monir" );
$newPerson->setEmail( "islammonirul.cse@gmail.com" );

echo "Name: {$newPerson->getName()} <br/> Email: {$newPerson->getEmail()}";
