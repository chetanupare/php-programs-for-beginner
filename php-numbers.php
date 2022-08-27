<!-- code to check type of integer -->
<?php
$x = 5986;
echo "x:".$x."<br>";
var_dump(is_int($x)); // returns true because its integer
echo "<br>";

$x = 67.78;
echo "x:".$x."<br>";
var_dump(is_int($x)); // returns false because its float
 ?>
<!--
its same for float & Double
is_float()
is_double()
-->
