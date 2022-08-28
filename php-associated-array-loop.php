<!--Loop Through an Associative Array
To loop through and print all the values of an associative array, you could use a foreach loop-->

<?php
$marks =array("pawan"=>"55","suraj"=>"64","shreyash"=>"46");

foreach ($marks as $x => $m) {
  echo "Marks of $x is $m<br>";
}
