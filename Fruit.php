<?php

class Fruit {

    protected string $color;
    protected string $name;   
    protected int $amount; 
    

    // constructur
    function __construct(string $color, string $name = 'Fruit') {
        $this->color = $color;     
        $this->name = $name; 
    }
    
    // getter and setter methods for name
    function set_name(string $name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }    

    // getter and setter methods for color
    function set_color(string $color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }        

    // getter and setter methods for amount
    function set_amount(int $amount) {
        $this->amount = $amount;
    }

    function get_amount() {
        return $this->amount;
    }       
}

?>


