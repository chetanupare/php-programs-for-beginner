<!-- for each loop is used to match condition true in array

Syntax:

foreach ($array as $value) {
code to be executed;
}

-->
<?php
$cars = array('bmw','audi','mercedez','tata','jaguar');

foreach ($cars as $tata) {
  echo "this car is $tata <br>";
}

 ?>

 <!-- Below Program Key With Value -->
 <?php
$pizza = array('corn' => 255,'cheese' => 299,'margerita'=>399,'chicken'=>499 );

foreach ($pizza as $x => $price) {
  echo "$x Pizza= $price<br>";
}

  ?>
