<!-- continue is used to make the execution of loop to continue

The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.

-->

<?php

for ($i=0; $i <  10; $i++) {

  if ($i==5) {
    echo "we got i=$i but still continue<br>";
    continue;
  }
  echo "i=$i<br>";
}

 ?>
