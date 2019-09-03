<?php
$a = NULL;
$b = $a ?? 'null';
var_dump($b);

$x = 'not null';
$y = $x ?? 'null';
var_dump($y);
?>
