<?php

class Mammal
{
  protected string $color;  
  protected int $age;       
  protected string $name;
 
  function __construct(string $color, int $age, string $name = 'Mammal') {
    $this->color = $color; 
    $this->age = $age; 
    $this->name = $name;     
  }

  function get_color() {      
    return $this->color;
  }

  function get_age() {   
    return $this->age;
  }

  function get_name() {   
    return $this->name;
  }  

  function set_color($color)  
  { 
    $this->color = (string)$color; 
  }

  function set_age($age) 
  {    
    $this->age = (int)$age;
  }

  function set_name($name) 
  {    
    $this->name = (int)$name;
  }

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



