<?php declare(strict_types=1); //The strict declaration forces things to be used in the intended way.

//PHP Default Argument In Function

function setNumber(int $n=0)
                 {
                   echo "number is $n<br>";
                 }

setNumber(1);
setNumber(2);
setNumber(); //sending empty argument

 ?>
