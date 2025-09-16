<?php

require "functions.php";
// require "router.php";
?>


// connect to mysql database

class Person{
    public $name;
    public $age;

     public function breathe(){
        echo "breathing";
    }
}

$person = new Person();

$person->name = "John Doe";
$person->age = "25"

dd($person->age);