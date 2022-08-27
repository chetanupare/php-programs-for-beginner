<?php declare(strict_types=1);

//php declare return type for function

function calculateSum($x,$y):float //specified datatype for return
                     {
                       $z=$x+$y;
                       return $z;
                     }

echo "2.345 + 4.123=".calculateSum(2.345,4.123);


 ?>
