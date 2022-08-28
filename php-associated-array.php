<!--PHP Associative Arrays
Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array:

$age = array("Raj"=>"35", "Chetan"=>"37", "Samir"=>"43");
or:

$age['Raj'] = "35";
$age['Chetan'] = "37";
$age['Samir'] = "43";
-->
<?php

$marks =array("pawan"=>"55","suraj"=>"64","shreyash"=>"46");

echo "Marklist<br>";
echo "------------------<br>";
echo "Pawan Girde=".$marks["pawan"]."<br>";
echo "Suraj Wankhede=".$marks["suraj"]."<br>";
echo "Shreyash Ingole=".$marks["shreyash"]."<br>";

 ?>
