<!-- if...else statement executes the code is given condition is true otherwise it executes else statement


Syntax:
       if(condition) {
                      code is executed when condition is true;
                    }else{
                    code is executed when condition is false;
                  }
-->
<?php
$t= date("H");

if ($t < "12") {   //condition is false bcz it time hour is 20:06 and 12 is not greater than 20
     echo "Good Afternoon!";
}else{
  echo "Good Night"; //output
}
?>
