<!-- PHP Function Arguments
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
-->
<?php

function writeGreeting($hour)
               {
                 if ($hour < "12") {   //condition is false bcz it time hour is 20:06 and 12 is not greater than 20
                      echo "Good Morning!";
                 }elseif($hour < 22){
                   echo "Good Night"; //output
                 }
               }

writeGreeting(10);
 ?>
