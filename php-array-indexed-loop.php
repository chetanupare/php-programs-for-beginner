<!--Loop Through an Indexed Array
To loop through and print all the values of an indexed array, you could use a for loop
-->
<?php
$colors = array("blue","green","white","red","yellow");
$arraysize = count($colors);    //count()is used to count size of array which is 5

for ($i=0; $i < $arraysize ; $i++) {
  echo "$colors[$i]<br>";
}

?>
