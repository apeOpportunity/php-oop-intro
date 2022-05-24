<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <img src="images/babyYoda.gif" alt="cute baby yoda animation" style="width:400px" class="center">
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


    class Dog extends Mammal 
    {
        function bark() {
            echo 'woof woof!';
        }
    
    }

//require_once('Fruit.php');
/*
$banana = new Fruit('Banana', 'Yellow');

echo '<pre>'; 
var_dump($banana); 
exit(); 


//$banana->set_name('Banana'); 
//$banana->set_color('Yellow'); 

$apple = new Fruit();
$apple->set_name('Apple'); 




    $fruit = new Fruit('green', 'Apple');

    echo '<pre/>';
    var_dump($fruit);
    
    $fruit->set_color('red');
    
    var_dump($fruit);
    
    echo $fruit->get_color();
            
//            require_once('Mammal.php');
//            require_once('Dog.php');
        
    $apple = new Fruit(color: 'green', name: 'Apple');         

    var_dump($fruit);

    $mammal = new Mammal('white',3, 'Unicorn');         

*/
/*
    $fruit = new Fruit('yellow', 'Banana'); 
    echo $fruit->get_name(); 
    $fruit->set_name('Gurke'); 
    echo '<pre>'; 
    var_dump($fruit); 
    exit(); 
    */
    //$fruit = new Fruit('yellow', 'Banana'); 













    echo '<pre/>';
    //$mammal = new Mammal('red',3); 
    //var_dump($mammal);
//    exit(); 

  //  $mammal->bark(); 














    $dog = new Dog('brown', 7, 'Dog'); 
    var_dump($dog);
    $dog->bark(); 
    $dog->eat(); 
    //exit(); 


















    //$mammal->bark(); 
    ///$dog->bark(); 

    exit(); 


    echo '<br>';
    $dog->set_color('brown'); 
    $dog->eat(); 
    echo '<br>';
    $dog->sleep(); 
    echo '<br>';            
    $dog->bark(); 
    echo '<br>';
    echo '<br>';
    var_dump($dog);
    //print_r($dog); 
    //exit();                         
         
?>
    </body>
</html>