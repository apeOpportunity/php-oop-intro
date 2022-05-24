<?php

require_once('Mammal.php');

class Dog extends Mammal 
{
    function __construct(string $color, int $age, string $name ) {
        echo 'constructor of a Dog'; 
        parent::__construct($color, $age, $name);
    }


    function bark() {
        echo 'woof woof!';
    }
 
}

?>