<?php
$y=5;

function myLocalvariable()
         {
           $y=9;
           echo "variable x in function :$y";
         }
myLocalvariable();
echo "variable x outside function : $y";


?>

<!-- We can use same name for local variable in function or outside function becuase its recognized by function which created them -->
