<?php
$a = 10;
$b = '10';
var_dump($a == $b); // equal after type juggling
var_dump($a === $b); // equal and of the same type
var_dump($a != $b); // not equal after type juggling
var_dump($a !== $b); // not equal or not of the same type

$x = 5;
$y = 6;
var_dump($x < $y); // less than
var_dump($x > $y); // greater than
var_dump($x <= $y); // less than or equal
var_dump($x >= $y); // greater than or equal
var_dump($x <=> $y); // returns integer less than, equal to, or greater than zero
?>
