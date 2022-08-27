<?php
$x=5;
$y=4;

function myTest()
         {
           global $x,$y; //defined global variables in functions
           //p.s: global & globals are different
           $y = $x+$y;

         }
myTest();

echo $y;

 ?>
<!-- We can also use $GLOBALS[index] index meance variable and all gloabls value are store in $GLOBALS[] Array
