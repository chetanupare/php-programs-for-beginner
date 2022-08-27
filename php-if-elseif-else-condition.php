<!-- if...elseif..else statement executes the code if given condition is true otherwise it check elseif condition to be true if non if & elseif is true it executes else


Syntax:
       if(condition) {
                      code is executed when condition is true;
                    }elseif(condition){
                    code is executed when condition is true;
                  }else{
                  code is executed when condition is false;
                }
-->
<?php
$t= date("H");

if ($t > "12") {   
     echo "Good Afternoon!";
}elseif($t< "12"){
  echo "Good Night";
}else{
  echo "Good Morning";
}
?>
