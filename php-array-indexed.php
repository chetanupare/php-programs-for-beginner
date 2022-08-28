<!--PHP Indexed Arrays
There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), like this:

$cars = array("Volvo", "BMW", "Toyota");
or the index can be assigned manually:

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
-->
<?php

$cars=array("bmw","volvo","mercedez","audi");
echo "$cars[1]<br>"; //shows single index 1 values
print_r($cars);      //print whole array

 ?>
