<!-- Switch Statement In Php To Execute code from one block

Syntax:

switch (x)
{
  case 1:
    code to be executed if x=1;
    break;
  case 2:
    code to be executed if x=2;
    break;
  case 3:
    code to be executed if x=3;
    break;

  default:
    code to be executed if n is different from all labels;
}
-->
<?php

$x=2;

switch ($x) {   //checking x = cases below
  case '1':     //not matched
    echo "x=1";
    break;
  case '2':     //matched the x=2 executing statement
    echo "x=2"; //output value
    break;      //break to get switch case execution to the end 
  case '3':
    echo "x=3";

  default:
    echo "value of x is none of this 1,2,3";
    break;
     }

 ?>
