<?php

require_once('Mammal.php');

class Dog extends Mammal 
{
    function bark() {
        echo 'woof woof!';
    }
 
}

?>