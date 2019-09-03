<?php
$a = TRUE;
$b = FALSE;
var_dump(!$a); // not
var_dump($a && $b); // and
var_dump($a || $b); // or
$b = TRUE;
var_dump($a xor $b); // not both
?>
