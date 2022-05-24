<?php

require_once('Mammal.php');

class Dog extends Mammal 
{
    /*
    // optional constructor, also calling the constructor of the parent class
    function __construct(string $color, int $age, string $name ) {
        echo 'constructor of a Dog<br>'; 
        parent::__construct($color, $age, $name);
    }*/


    function bark() {
        echo 'woof woof!';
    }
 
}

?>