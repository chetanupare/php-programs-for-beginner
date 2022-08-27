<!-- Static Keyword are used to not delete a variable when function got ended -->
<?php
function myTest()
         {
           static $x = 0 ; //Declaring Static variable
           echo $x;        //Printing Value
           $x++;           //Incrementing Value
         }
myTest();        //It will print default value of x = 0 & Increament it by 1
myTest();        //It will print incremented value as x=1 & Increment it by 1
myTest();        //It Will Print incremented value as x=2 & increment it by 1

// It Shows Variable Not getting Deleted After Function ends By Using Static In Function
// But it will local variable for function always
 ?>
