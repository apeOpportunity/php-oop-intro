<?php

class Mammal
{
  protected string $color;  
  protected int $age;       
  protected string $name;
 
  // constructor which is used when you create a new 
  // mammal object
  function __construct(string $color, int $age, string $name ) {
    $this->color = $color; 
    $this->age = $age; 
    $this->name = $name;     
  }

  // getter methods
  function get_color() {      
    return $this->color;
  }

  function get_age() {   
    return $this->age;
  }

  function get_name() {   
    return $this->name;
  }  

  // setter methods
  function set_color(string $color)  
  { 
    $this->color = $color; 
  }

  function set_age(int $age) 
  {    
    $this->age = $age;
  }

  function set_name(string $name) 
  {    
    $this->name = $name;
  }

  // more mammal functions
  function eat() 
  {
    echo 'Yum :o)'; 
  }

  function sleep()
  {
    echo 'I\'m sleeping'; 
  }
}

?>



