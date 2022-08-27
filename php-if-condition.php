<!-- if statement executes the code is given condition is true

Syntax:
       if(condition) {
                      code is executed when condition is true;
                     }
-->
<?php
$t= date("H");

if ($t > "12") {
     echo "Good Afternoon!";
}
?>
