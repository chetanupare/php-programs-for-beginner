<!-- do..while loop it get executed once and check for condition if its false it will get executed until while condition get true

Syntax:

do {
    code executiom
  }while(condition is true);


  In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false.

-->
<?php

$x=0;

do {
    echo "hi x=".$x."<br>";
    $x++;
} while ($x <= 5);

?>
