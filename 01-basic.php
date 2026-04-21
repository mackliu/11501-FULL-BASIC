<?php 

$a=10;
$b=50;
echo '$a=' . $a . "<br>";
echo '$b=' . $b . "<br>";

$temp=$a;
$a=$b;
$b=$temp;


echo '$a=' . $a;
echo '<br>';
echo '$b=' . $b;

?>