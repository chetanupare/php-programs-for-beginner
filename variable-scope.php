<?php
$e= 9;

function myFunction()
         {
           echo "Variable e : $e"; // It Will Create Exception Because $e is globally defined variables
          }
myFunction();
echo $e; //Output is coming from this echo
 ?>
