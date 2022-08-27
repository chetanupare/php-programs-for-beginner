<?php

function myLocalvariable()
{
  $x=5;
  echo "x = $x";
}
myLocalvariable();
echo "x is not printing here: $x"; //$x will not print here because its local variable defined in function 
 ?>
