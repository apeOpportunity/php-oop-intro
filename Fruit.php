<?php

class Fruit {

    protected string $color;
    protected string $name;   

    // constructur
    function __construct(string $color, string $name = 'Fruit') {
        $this->color = $color;     
        $this->name = $name; 
    }
    
    // getter and setter methods 
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }    

    // getter and setter methods 
    function set_color($color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }        
}

?>


