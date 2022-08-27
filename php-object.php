<!--Classes & Objects are two main aspects of oops

class is template for objects & objects is instance of Classes

when objects are created, they tooks all the properties & behavior from Classes
Each object will have different values for the properties

Lets assume we have a class named car.
car can have properties like model,color,year etc.

when such objects created as (Tata,BMW,Audi) they took properties of class car
but each objects will have different property values

if we create a __construct() function , PHP will automatically call this function when you create and object from a class

Examples:
-->
<?php

class Car {
           public $color;       //variables for properties
           public $model;
           public $year;
           public function __construct($color,$model,$year) //function to declare properties for class
                           {
                             $this -> color = $color;
                             $this -> model = $model;
                             $this -> year  = $year;
                           }
           public function message()
                            {
                              return "My Car is a " .  $this->color ." ".$this->model." ".$this->year." !";      // Function to return properties
                            }

          }

$myCar = new Car("black","Tata","2002");
echo $myCar -> message();
echo "<br>";

$myCar = new Car("Red","Audi","2089");
echo $myCar -> message();
echo "<br>";

 ?>
