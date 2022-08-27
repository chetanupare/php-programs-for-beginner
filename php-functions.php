<!--PHP User Defined Functions
Besides the built-in PHP functions, it is possible to create your own functions.

A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function.
Create a User Defined Function in PHP
A user-defined function declaration starts with the word function:

Syntax:
function functionName() {
  code to be executed;
}
-->
<?php

function writeGreeting()  //creating function
                 {        // defining function
                   $t= date("H");

                   if ($t < "12") {   //condition is false bcz it time hour is 20:06 and 12 is not greater than 20
                        echo "Good Afternoon!";
                   }else{
                     echo "Good Night"; //output
                   }
                 }
writeGreeting();        //calling function

 ?>
