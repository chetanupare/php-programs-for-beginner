<?php
$x=5;

function myLocalvariable()
         {
           $x=9;
           echo "variable x in function :$x";
         }
myLocalvariable();
echo "variable x outside function : $x";


?>

<!-- We can use same name for local variable in function or outside function becuase its recognized by function which created them -->
