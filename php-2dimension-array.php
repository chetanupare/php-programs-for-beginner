<!--
PHP - Two-dimensional Arrays
A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).
-->
<?php

$moods = array(
                array("Rajshree","Happy","Cute"),
                array("Sia","Sad","Sweet"),
                array("Naina","Funny","Fair"),
                array("Riya","Angry","Lovely"),
              );

echo $moods[0][0]." is ".$moods[0][1]. " but ".$moods[0][2]."<br>";
echo $moods[1][0]." is ".$moods[1][1]. " but ".$moods[1][2]."<br>";
echo $moods[2][0]." is ".$moods[2][1]. " but ".$moods[2][2]."<br>";
echo $moods[3][0]." is ".$moods[3][1]. " but ".$moods[3][2]."<br>";

 ?>
